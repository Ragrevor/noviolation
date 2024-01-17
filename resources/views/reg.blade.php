<!DOCTYPE html>
<html lang="ru">

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
        <div class="heading__title h1-text">Регистрация</div>
        <div class="forms__inputs_style">
            <form class="style__forms center" method="POST" action="/reg_user">
                @csrf
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Имя</label>
                    <input placeholder="Имя" type="text" class="form__inputs_input" name="name">
                    @error('name')
                        <div class="form__item_error hidden">
                            {{ $name }}
                        </div>
                    @enderror
                </div>

                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Фамилия</label>
                    <input placeholder="Фамилия" type="text" class="form__inputs_input" name="surname">
                    @error('surname')
                    <div class="form__item_error hidden">
                        {{ $surname }}
                    </div>
                @enderror
                </div>
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Отчество</label>
                    <input placeholder="Отчество" type="text" class="form__inputs_input" name="patronymic">
                    @error('patronymic')
                    <div class="form__item_error hidden">
                        {{ $patronymic }}
                    </div>
                    @enderror
                </div>
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Номер телефона</label>
                    <input placeholder="Номер телефона" type="text" class="form__inputs_input" name="phone">
                    @error('phone')
                        <div class="form__item_error hidden">
                            {{ $phone }}
                        </div>
                    @enderror
                </div>
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Email</label>
                    <input placeholder="Email" type="email" class="form__inputs_input" name="email">
                    @error('email')
                        <div class="form__item_error hidden">
                            {{ $email }}
                        </div>
                    @enderror
                </div>

                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Логин</label>
                    <input placeholder="Логин" type="text" class="form__inputs_input" name="login">
                    @error('login')
                        <div class="form__item_error hidden">
                            {{ $login }}
                        </div>
                    @enderror
                </div>

                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Пароль</label>
                    <input placeholder="Пароль" type="password" class="form__inputs_input" name="password">
                    @error('password')
                        <div class="form__item_error hidden">
                            {{ $password }}
                        </div>
                    @enderror
                </div>
                <div class="form__inputs_inputs">
                    <label class="form__labels_label" for="">Повторите пароль</label>
                    <input placeholder="Повторите пароль" type="password" class="form__inputs_input" name="confirm_password">
                    @error('confirm_password')
                        <div class="form__item_error hidden">
                            {{ $confirm_password }}
                        </div>
                    @enderror
                </div>
                <button class="blue-btn">Зарегистрироваться</button>
            </form>
        </div>

    </section>

</body>

</html>
