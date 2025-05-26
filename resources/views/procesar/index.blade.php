<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jerarquias CSS -->
    <link rel="stylesheet" href="{{ asset('css/var.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    <link rel="stylesheet" href="{{ asset('css/procesar.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Procesar</title>
</head>
<body>
    @livewire('procesar')

    <script>
        window.addEventListener('swal:success',event => {
            Swal.fire({
                icon: 'success',
                title: '¡Pedido realizado!',
                text: 'Su compra fue realizado correctamente',
                confirmButtonText: 'Ok'
            }).then((response) =>{
                response.isConfirmed ? window.location.href = "/productos" : console.log("algo ocurrio en el realizar la compra");
            })

            if(Swal.OK){
                window.location('productos.index');
            }
            document.getElementById('form-client').reset();
        })
    </script>
</body>
</html>