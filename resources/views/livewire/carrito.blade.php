<article class="containerCart " style=" @if($animar) visibility: visible; background-color: rgba(255, 255, 255, 0.5) @endif">
    <section class="cart @if($animar) show-cart-animation @endif ">
        <section class="d-flex align-items-center g-1 mb-1">
            <svg class="hidden-cart" width="24" height="25" viewBox="0 0 24 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.6972 17.7539L8.40417 13.4609H17.9902V11.4609H8.40417L12.6972 7.16791L11.2832 5.75391L4.57617 12.4609L11.2832 19.1679L12.6972 17.7539Z"
                    fill="#1B1F27" />
            </svg>
            <h2 class="cart-title">Tús productos</h2>
        </section>
        <section class="containerCart-products">
            <!-- AQUI SE INSERTAN PRODUCTOS EN EL CARRITO -->
            @if(count($cart) > 0)
            @foreach($cart as $id => $pro)
            <livewire:product-card-component :pro="$pro" :key="$id" wire:emit="actualizarCantidad" />
            @endforeach
            @endif
        </section>
        @if($this->res)
        <section class="totalCart">
            <h3 class="totalCart-title mb-1">Resumen de compra</h3>
            <ul class="purchase-list">
                <li class="purchase-list-item">
                    <p>Total productos</p>
                    <p class="weight-500 subtotal">{{$this->totalQuantity}}</p>
                </li>
                <li class="purchase-list-item">
                    <p>Subtotal</p>
                    <p class="weight-500 subtotal">S/ {{$this->subtotal}}</p>
                </li>
                <li class="purchase-list-item">
                    <p>IGV&nbsp;&lpar;18%&rpar;:</p>
                    <p class="weight-500 igv">S/ 0.00</p>
                </li>
                <li class="purchase-list-item">
                    <p>Descuento:</p>
                    <p class="weight-500 descuento">S/ 0.00</p>
                </li>
                <li class="purchase-list-item">
                    <p>Envío estimado</p>
                    <p class="weight-500 envio">S/ 0.00</p>
                </li>

                <li class="purchase-list-item purchase-total">
                    <p>Total</p>
                    <p class="weight-500 total">S/ {{$this->total}}</p>
                </li>
                <li wire:click='process' class="btn btn-blue procesar">
                    Procesar compra
                </li>
            </ul>
        </section>
        @else
        <article class="cart-empty">
            <p class="cart-empty-title">Tu carrito está vacío</p>
            <svg class="bx-cart-add-svg" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M52.5 105C56.6421 105 60 101.642 60 97.5C60 93.3579 56.6421 90 52.5 90C48.3579 90 45 93.3579 45 97.5C45 101.642 48.3579 105 52.5 105Z" fill="#6AA16D" /> <path d="M87.5 105C91.6421 105 95 101.642 95 97.5C95 93.3579 91.6421 90 87.5 90C83.3579 90 80 93.3579 80 97.5C80 101.642 83.3579 105 87.5 105Z" fill="#6AA16D" /> <path d="M64.9998 64.9999H74.9998V50.0499H89.9498V40.0499H74.9998V25.1499H64.9998V40.0499H50.0498V50.0499H64.9998V64.9999Z" fill="#6AA16D" /> <path d="M50 85H90C91.0072 84.997 91.99 84.69 92.8197 84.119C93.6495 83.548 94.2874 82.7397 94.65 81.8L108.8 45H98.1L86.55 75H53.35L30.9 21.15C30.1388 19.3253 28.8538 17.7672 27.2074 16.6726C25.561 15.5779 23.6271 14.9959 21.65 15H10V25H21.65L45.4 81.9C45.7751 82.8131 46.4121 83.5948 47.2307 84.1464C48.0493 84.6981 49.0129 84.9951 50 85Z" fill="#6AA16D" /> </svg>
            <p class="cart-empty-subtitle">Agrega productos y aparecerán aquí automáticamente.</p>
        </article>
        @endif

    </section>

</article>