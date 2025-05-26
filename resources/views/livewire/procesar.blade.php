<section>
    <section class="d-flex align-items-center g-1 mb-1 back">
        <a href="{{route('productos.index')}}">
            <svg class="hidden-cart" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6972 17.7539L8.40417 13.4609H17.9902V11.4609H8.40417L12.6972 7.16791L11.2832 5.75391L4.57617 12.4609L11.2832 19.1679L12.6972 17.7539Z" fill="#1B1F27"></path>
            </svg>
        </a>

        <h2 class="cart-title">Tús productos</h2>
    </section>
    <form wire:submit.prevent="insertClient" id="form-client" class='form-client' method="post">
        <!-- DATOS DEL CLIENTE -->
         @csrf
        <fieldset>
            <legend>Información del cliente</legend>
            <p>Información del cliente</p>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="nomcli">Nombre</label>
                    <input class="control flex-full" type="text" wire:model="nomcli" id="nomcli">
                    @error('nomcli')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="apecli">Apellido</label>
                    <input class="control" type="text" wire:model="apecli" id="apecli" value="">
                    @error('apecli')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="celcli">Celular</label>
                    <input class="control" type="text" wire:model="celcli" id="celcli">
                    @error('celcli')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="dnicli">Dni</label>
                    <input class="control" type="text" wire:model="dnicli" id="dnicli">
                    @error('dnicli')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="ciudad">Ciudad</label>
                    <select class="control flex-full" wire:model="ciudad" id="ciudad">
                        <option selected value="">Seleccionar</option>
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                        <option value="Trujillo">Trujillo</option>
                        <option value="Cusco">Cusco</option>
                        <option value="Chiclayo">Chiclayo</option>
                    </select>
                    @error('ciudad')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group flex-full">
                    <label for="distrito">Distrito</label>
                    <select class="control flex-full" wire:model="distrito" id="distrito">
                        <option selected value="">Seleccionar</option>
                        <option value="Miraflores">Miraflores</option>
                        <option value="San isidro">San isidro</option>
                        <option value="Cerdado de Arequipa">Cerdado de Arequipa</option>
                        <option value="Yanahuara">Yanahuara</option>
                        <option value="Trujillo Cercado">Trujillo Cercado</option>
                        <option value="La Esperanza">La Esperanza</option>
                        <option value="Cusco Cercado">Cusco Cercado</option>
                        <option value="San Sebastián">San Sebastián</option>
                        <option value="José Leonardo Ortiz">José Leonardo Ortiz</option>
                        <option value="La victoria">La victoria</option>
                    </select>
                    @error('distrito')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="form-group flex-full">
                <label for="dircli">Dirección</label>
                <input class="control" type="text" wire:model="dircli" id="dircli">
                @error('dircli')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

        </fieldset>
        <!-- DATOS DE LA VENTA -->
        <fieldset>
            <legend>Información de pago</legend>
            <p>Información de pago</p>
            <div class="d-flex g-small">
                <div class="form-group flex-full">
                    <label for="tipcomven">Tipo de comprobante</label>
                    <select class="control flex-full" wire:model="tipcomven" id="tipcomven">
                        <option selected value="">Seleccionar</option>
                        <option value="boleta">Boleta</option>
                        <option value="factura">Factura</option>
                    </select>
                    @error('tipcomven')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                
            </div>
            <div class="form-group flex-full">
                    <label for="metpagven">metodo de pago</label>
                    <select class="control flex-full" wire:model="metpagven" id="metpagven">
                        <option selected value="">Seleccionar</option>
                        <option value="yape">Yape</option>
                        <option value="tarjeta">Tarjeta de credito</option>
                        <option value="paypal">Paypal</option>
                    </select>
                    <!-- <div class="container-metodo">
                        <article class="btn metodo_pago yape">Yape</article>
                        <article class="btn metodo_pago tarjeta">Tarjeta de credito</article>
                        <article class="btn metodo_pago paypal">Paypal</article>
                    </div> -->
                    @error('metpagven')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            
        </fieldset>
        <!-- METODO DE PAGO -->
        <fieldset>
            <legend>Información de Tarjeta</legend>
            <p>Información de Tarjeta</p>
            <div class="form-group mb-small">
                <label for="">Informacion de tarjeta</label>
                <input class="control" type="text" wire:model="number_code" id="number_code" placeholder="XXXX-XXXX-XXXX-XXXX">
                @error('number-code')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex g-small">
                    <input class="flex-full control" type="text" wire:model="fecha" id="fecha" placeholder="fec">
                    @error('fecha')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                    <input class="flex-full control" type="text" wire:model="code" id="code" placeholder="code">
                    @error('code')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-green">Realizar Compra</button>
        </fieldset>
        <!-- Listar todos sus productos -->
        <fieldset>
            <legend>Productos</legend>
            <p>Tús productos</p>
            @if(count($cart) > 0)
            @foreach($cart as $c)
            <article key="{{$c['id']}}" class="card card-config">
                <a href="#">
                    <img height="50px" id='{{$c["id"]}}' class="product-img" src="{{asset('img/login/'. $c['imgpro'])}}" alt="{{$c['nompro']}}">
                </a>
                <div class="product-data">
                    <p class="product-title">{{$c['nompro']}}</p>
                    <p class="product-title">{{$c['quantity']}}</p>
                </div>
            </article>
            @endforeach
            @endif
        </fieldset>

    </form>


</section>