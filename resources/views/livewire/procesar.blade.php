<section>
    <section class="d-flex align-items-center g-1 mb-1 back">
        <a href="{{route('productos.index')}}">
            <svg class="hidden-cart" width="24" height="25" viewBox="0 0 24 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.6972 17.7539L8.40417 13.4609H17.9902V11.4609H8.40417L12.6972 7.16791L11.2832 5.75391L4.57617 12.4609L11.2832 19.1679L12.6972 17.7539Z"
                    fill="#1B1F27"></path>
            </svg>
        </a>

        <h2 class="cart-title">Tús productos</h2>
    </section>
    <form class='form-client' method="post">
        <fieldset>
            <legend>Información del cliente</legend>
            <p>Información del cliente</p>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="nombre">Nombre</label>
                    <input class="control flex-full" type="text" name="nombre" id="nombre">
                    @error('nombre')
                        <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="">Apellido</label>
                    <input class="control" type="text" name="apellido" id="apellido">
                    @error('apellido')
                        <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="">Celular</label>
                    <input class="control" type="text" name="celular" id="celular">
                    @error('celular')
                        <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="">Dni</label>
                    <input class="control" type="text" name="dni" id="dni">
                    @error('dni')
                        <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group flex-full">
                <label for="">Dirección</label>
                <input class="control" type="text" name="direccion" id="direccion">
                @error('direccion')
                    <p class="alert-error">{{$message}}</p>
                @enderror
            </div>
        </fieldset>
        <fieldset>
            <legend>Metodo de pago</legend>
            <p>Metodo de pago</p>
            <div class="form-group mb-small">
                <label for="">Informacion de tarjeta</label>
                <input class="control" type="text" name="number-code" id="number-code"
                    placeholder="XXXX-XXXX-XXXX-XXXX">
                @error('number-code')
                    <p class="alert-error">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex g-small">
                    <input class="flex-full control" type="text" name="fecha" id="fecha" placeholder="fec">
                    @error('fecha')
                        <p class="alert-error">{{$message}}</p>
                    @enderror

                    <input class="flex-full control" type="text" name="code" id="code" placeholder="code">
                    @error('code')
                        <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-green">Realizar Compra</button>
        </fieldset>
        <fieldset>
            <legend>Método de pago</legend>
            <p>Método de pago</p>

            @if(count($cart) > 0)
                @foreach($cart as $c)
                    <article class="card card-config">
                        <a href="#">
                            <img height="50px" class="product-img" src="{{ asset('img/login/' . $c['imgpro']) }}"
                                alt="{{ $c['nompro'] }}">
                        </a>
                        <p>{{ $c['nompro'] }} - Cantidad: {{ $c['quantity'] ?? 1 }}</p>
                        <p>Precio: S/. {{ isset($c['prepro']) ? number_format($c['prepro'], 2) : '0.00' }}</p>

                    </article>
                @endforeach
                <!-- Contenedor único para el botón PayPal con total real -->
                <div id="paypal-button-container" data-total="{{ number_format($total, 2, '.', '') }}"></div>
            @else
                <p>El carrito está vacío.</p>
            @endif
        </fieldset>

        <script
            src="https://www.paypal.com/sdk/js?client-id=AffBDlwTYPb1l-cFwP1c4-XT39aAcBXzLP61w7v_DK_kmn8F_b-lamIWGLhRbN6CTgKBmBLG1McXPt4z&currency=USD"></script>
        <script src="{{ asset('js/paypal.js') }}"></script>
    </form>


</section>