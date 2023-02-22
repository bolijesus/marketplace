<div>
    <a name="" id="" class="btn btn-primary" href="{{ route('cart') }}" role="button">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    {{ Cart::session(auth()->id())->getTotalQuantity() }}
</div>
