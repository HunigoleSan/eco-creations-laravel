<!-- <article class="card">
    <a href="{{route('productos.details',$pro->id)}}" >
        <img id='{{$pro->id}}' class="product-img" src="{{asset('img/login/'. $pro->imgpro)}}" alt="{{$pro->nombre}}">
    </a>
    <div class="product-data">
        <p class="product-title">{{$pro->nompro}}</p>
        <p class="product-description">{{$pro->descpro}}</p>
        <div class="product-cart">
            <span class="current-price">{{$pro->prepro}}</span>
            <div wire:click="$emit('addCart',{{$pro->id}})" id="card_button_${{$pro->id}}}" class="product-add">
                <svg class="cart-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 21C11.3284 21 12 20.3284 12 19.5C12 18.6716 11.3284 18 10.5 18C9.67157 18 9 18.6716 9 19.5C9 20.3284 9.67157 21 10.5 21Z" fill="white" />
                    <path d="M17.5 21C18.3284 21 19 20.3284 19 19.5C19 18.6716 18.3284 18 17.5 18C16.6716 18 16 18.6716 16 19.5C16 20.3284 16.6716 21 17.5 21Z" fill="white" />
                    <path d="M13 13.0003H15V10.0103H17.99V8.01027H15V5.03027H13V8.01027H10.01V10.0103H13V13.0003Z" fill="white" />
                    <path d="M10 17H18C18.2014 16.9994 18.398 16.938 18.564 16.8238C18.7299 16.7096 18.8575 16.5479 18.93 16.36L21.76 9H19.62L17.31 15H10.67L6.18 4.23C6.02776 3.86507 5.77077 3.55344 5.44149 3.33452C5.11221 3.11559 4.72542 2.99918 4.33 3H2V5H4.33L9.08 16.38C9.15502 16.5626 9.28242 16.719 9.44614 16.8293C9.60986 16.9396 9.80257 16.999 10 17Z" fill="white" />
                </svg>
                Añadir al carrito
            </div>
        </div>

    </div>
</article>


  <button wire:click="$emitTo('carrito', 'addCart', 1)">Añadir Producto de prueba</button> -->