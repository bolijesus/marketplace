<div>
    <div class="container">
        <div class="form-group row">
            <label for="fullname">Nombre completo</label>
            <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                value="{{ old('fullname') }}" wire:model="fullname">
            @error('fullname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="state">Region o estado</label>
            <input type="text" class="form-control @error('state') is-invalid @enderror" name="state"
                value="{{ old('state') }}" wire:model="state">
            @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="city">Ciudad o distrito</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                value="{{ old('city') }}" wire:model="city">
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="zipcode">ZIP Code</label>
            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode"
                value="{{ old('zipcode') }}" wire:model="zipcode">
            @error('zipcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="address">Direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                value="{{ old('address') }}" wire:model="address">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                value="{{ old('phone') }}" wire:model="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio"
            wire:model='payment_method'
            name="exampleRadios" id="exampleRadios1" value="cash_on_delivery">
            <label class="form-check-label" for="exampleRadios1">
                Cash on delivery
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio"
            wire:model='payment_method'
            name="exampleRadios" id="exampleRadios2" value="paypal">
            <label class="form-check-label" for="exampleRadios2">
                PayPal
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio"
            wire:model='payment_method'
            name="exampleRadios" id="exampleRadios3" value="stripe">
            <label class="form-check-label" for="exampleRadios3">
                Stripe
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio"
            wire:model='payment_method'
            name="exampleRadios" id="exampleRadios4" value="card">
            <label class="form-check-label" for="exampleRadios4">
                Card
            </label>
        </div>        
        {{-- 'cash_on_delivery', 'paypal', 'stripe', 'card' --}}
        <button type="submit" class="btn btn-primary" wire:click='make_order'>Realizar pedido</button>
    </div>
</div>
