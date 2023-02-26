<div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Precio total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items->sortBy('id') as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            <input type="number" class="form-control" min="0"
                            id="v{{$item->id}}"
                            wire:change="update_quantity({{ $item->id }}, $event.target.value)"
                            value="{{ $item->quantity }}" placeholder="Cantidad">
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
                        <td>
                            <button type="button" class="btn btn-danger"
                            wire:click="delete_item({{$item->id}})"
                            >Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total: $ {{ Cart::session(auth()->id())->getTotal() }}</h3>
        <a href="{{route('checkout')}}" class="btn btn-primary">Pagar</a>
    </div>
</div>
