<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout;

        $response = $provider->setExpressCheckout($checkoutData);

        return \redirect($response['paypal_link']);
    }

    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {
        $provider  = new ExpressCheckout;
        $token = $request->token;
        $payerID = $request->PayerID;
        $checkoutData = $this->checkoutData($orderId);

        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(\strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if (in_array($status, ['Completed', 'Processed'])) {
                $order = Order::find($orderId);
                $order->is_paid = 1;
                $order->save();
                //No realicé el envio de email, pero deberia ir acá (minuto del video #11 inicia 10:45 - 14:50 )

                CartFacade::session(\auth()->id())->clear();

                return \redirect()->route('shop.index')->withMessage('Pago Exitoso');
            }
        }

        return \redirect()->route('shop.index')->withError('Pago Fallido');
    }

    public function cancelPage()
    {
        dd('cancelado');
    }

    public function checkoutData($orderId)
    {
        $cart = CartFacade::session(\auth()->id());
        $cartItems = array_map(function ($item) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'desc'  => 'Description for product',
                'qty' => $item['quantity']
            ];
        }, $cart->getContent()->toarray());
        $checkoutData = [
            'items' => $cartItems,
            'invoice_id' => \uniqid(),
            'invoice_description' => "descripcion de orden",
            'return_url' => \route('paypal.success', $orderId),
            'cancel_url' => \route('paypal.cancel'),
            'total' => $cart->getTotal(),
        ];

        return $checkoutData;
    }
}
