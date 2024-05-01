

{{-- @extends('layouts.index') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/carte.css'])
    @vite(['resources/css/app.css'])


</head>
<body>
    
{{-- @section('content') --}}
@include('home.components.navbar')


<div class="card">
    <!-- Cart items display -->
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">{{ count($cart->items ?? []) }} items</div>
                </div>
            </div>

            <!-- Loop through cart items -->
            @foreach ($cart->items ?? [] as $item)
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="{{ $item['image'] }}"></div>
                    <div class="col">
                        <div class="row text-muted">{{ $item['name'] }}</div>
                        <div class="row">{{ $item['description'] }}</div>
                    </div>
                    <div class="col">
                        <!-- Update quantity and remove item links -->
                        <a href="#">-</a>
                        <a href="#" class="border">{{ $item['quantity'] }}</a>
                        <a href="#">+</a>
                    </div>
                    <div class="col">&euro; {{ $item['price'] * $item['quantity'] }} <span class="close">&#10005;</span></div>
                </div>
            </div>
            @endforeach

            <!-- Back to shop link -->
            <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>

        <!-- Cart summary -->
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS {{ count($cart->items ?? []) }}</div>
                <!-- Display total price -->
                <div class="col text-right">&euro; 55</div>
            </div>
            <form>
                <p>Delivery</p>
                <select>
                    <option class="text-muted">Standard Delivery - &euro;5.00</option>
                </select>
                <p>Enter your code</p>
                <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                {{-- <!-- Display total price -->
                <div class="col text-right">&euro; {{ $totalPrice }}</div>
                 --}}
                <div class="col text-right">&euro; 555</div>
            </div>
            <form action="{{ route ("session") }}" method="get">
                @csrf
                <button class="btn">done</button>


            </form>
        </div>
    </div>
</div>
{{-- @endsection --}}
</body>
</html>
