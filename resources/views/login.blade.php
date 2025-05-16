<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="login-page">
    <div class="login-page__overlay"></div>
    <div class="login-page__container">
        <div class="login-page__image">
            <img src="{{ asset('img/login/login-page__image.png') }}" alt="Imagen de login">
        </div>
        <div class="login-page__form">
            <img src="../img/login/isotipo.png" class="login-page__isotipo" alt="Isotipo del logo">
            <h2 class="login-page__title">Sistema Web de Gestión y Venta de Productos Ecológicos</h2>
            <p class="login-page__message">Inicia sesión para continuar.</p>

            <form action="#" class="login-page__form-element">
                <div class="login-page__form-group">
                    <label for="correo" class="login-page__label">Correo:</label>
                    <input type="email" id="correo" name="correo" class="login-page__input" placeholder="example@hotmail.com">
                </div>

                <div class="login-page__form-group">
                    <label for="password" class="login-page__label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="login-page__input"
                        placeholder="Ingresar contraseña">
                </div>

                <div class="login-page__form-group login-page__checkbox">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember" class="login-page__input-checkbox">
                        Recordar Contraseña
                    </label>
                </div>

                <div class="login-page__form-group">
                    <button type="submit" class="login-page__submit">Ingresar al sistema</button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>