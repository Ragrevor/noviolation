<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vreality</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header />

    <section class="auth__intro">
        <div class="heading__title h1-text">Авторизация</div>
        <div class="forms__inputs_style">
            <form class="style__forms center" method="POST" action="/auth_user">
                @csrf
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Логин</label>
                    <input placeholder="Email" type="email" class="form__inputs_input" name="email">
                    @error("email")
                    <div class="form__item_error hidden">
                        {{$email}}
                    </div>
                @enderror
                </div>

                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Пароль</label>
                    <input placeholder="Пароль" type="password" class="form__inputs_input" name="password">
                    @error("password")
                    <div class="form__item_error hidden">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <button class="blue-btn">Авторизоваться</button>
            </form>
        </div>

    </section>

</body>

</html>
