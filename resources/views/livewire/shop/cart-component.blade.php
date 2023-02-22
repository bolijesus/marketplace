<div>
    <i class="fa-solid fa-cart-shopping"></i>
    {{ Cart::session(auth()->id())->getTotalQuantity() }}
</div>
