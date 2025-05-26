<sectioN>
    <section class="d-flex align-items-center g-1 mb-1 back">
        <a href="{{route('productos.index')}}">
            <svg class="hidden-cart" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6972 17.7539L8.40417 13.4609H17.9902V11.4609H8.40417L12.6972 7.16791L11.2832 5.75391L4.57617 12.4609L11.2832 19.1679L12.6972 17.7539Z" fill="#1B1F27"></path>
            </svg>
        </a>

        <h2 class="cart-title">Tús productos</h2>
    </section>
    <form class='form-client' method="post">
        <!-- DATOS DEL CLIENTE -->
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
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="">Ciudad</label>
                    <select class="control flex-full" name="ciudad" id="ciudad">
                        <option selected disabled value="">Seleccionar</option>
                        <option value="boleta">Lima</option>
                        <option value="factura">Arequipa</option>
                        <option value="factura">Trujillo</option>
                        <option value="factura">Cusco</option>
                        <option value="factura">Chiclayo</option>
                    </select>
                    @error('ciudad')
                    <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="">Distrito</label>
                    <select class="control flex-full" name="distrito" id="distrito">
                        <option selected disabled value="">Seleccionar</option>
                        <option value="boleta">Miraflores</option>
                        <option value="factura">San isidro</option>
                        <option value="factura">Cerdado de Arequipa</option>
                        <option value="factura">Yanahuara</option>
                        <option value="factura">Trujillo Cercado</option>
                        <option value="factura">La Esperanza</option>
                        <option value="factura">Cusco Cercado</option>
                        <option value="factura">San Sebastián</option>
                        <option value="factura">José Leonardo Ortiz</option>
                        <option value="factura">La victoria</option>
                    </select>
                    @error('distrito')
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
        <!-- DATOS DE LA VENTA -->
        <fieldset>
            <legend>Información de pago</legend>
            <p>Información de pago</p>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="nombre">Tipo de comprobante</label>
                    <select class="control flex-full" name="tipo_comprobante" id="tipo_comprobante">
                        <option selected disabled value="">Seleccionar</option>
                        <option value="boleta">Boleta</option>
                        <option value="factura">Factura</option>
                    </select>
                    @error('nombre')
                    <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
                
            </div>
            <div class="form-group flex-full">
                    <label for="">metodo de pago</label>
                    <div class="container-metodo">
                        <article class="btn metodo_pago yape">Yape</article>
                        <article class="btn metodo_pago tarjeta">Tarjeta de credito</article>
                        <article class="btn metodo_pago paypal">Paypal</article>
                    </div>
                    @error('metodo_pago')
                    <p class="alert-error">{{$message}}</p>
                    @enderror
                </div>
            
        </fieldset>
        <!-- METODO DE PAGO -->
        <fieldset>
            <legend>Información de Tarjeta</legend>
            <p>Información de Tarjeta</p>
            <div class="form-group mb-small">
                <label for="">Informacion de tarjeta</label>
                <input class="control" type="text" name="number-code" id="number-code" placeholder="XXXX-XXXX-XXXX-XXXX">
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
            <div wire:click="payment" class="btn btn-green">Realizar Compra</div>
        </fieldset>
        <!-- Listar todos sus productos -->
        <fieldset>
            <legend>Productos</legend>
            <p>Tús productos</p>
            @if(count($cart) > 0)
            @foreach($cart as $c)
            <article key: class="card card-config">
                <a href="#">
                    <img height="50px" id='{{$c["id"]}}' class="product-img" src="{{asset('img/login/'. $c['imgpro'])}}" alt="{{$c['nompro']}}">
                </a>
                <div class="product-data">
                    <p class="product-title">{{$c['nompro']}}</p>
                </div>
            </article>
            @endforeach
            @endif
        </fieldset>

    </form>


</sectioN>