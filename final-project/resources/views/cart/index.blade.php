<h1>Your Cart</h1>

@foreach($cartItems as $cartItem)
    <div>
        <h2>{{ $cartItem->beer->title }}</h2>

        <h3>{{ $cartItem->beer->product_name }}</h3>

        <p>Count: {{ $cartItem->count }}</p>
    </div>
@endforeach
