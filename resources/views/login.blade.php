<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Tasks</title>
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
</head>
<body>
    
    <main class="uk-container uk-container-small uk-flex uk-flex-center" uk-viewport-height>

        <div class="uk-margin-large-top">
            <form action="{{ route('signin') }}" method="POST">
                <div class="uk-margin">
                    <label>Correo</label>
                    <input type="email" class="uk-input" name="email" required>
                </div>
                <div class="uk-margin">
                    <label>Contraseña</label>
                    <input type="password" class="uk-input" name="password" required>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-secondary">Acceder</button>
                </div>
            </form>
        </div>

    </main>

    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</body>
</html>