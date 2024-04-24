<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1 class="header-title">FashionablyLate</h1>
        <button class="register-form__login-btn" type="submit">login</button>
    </header>
    <div class="register">
            <h1 class="register-title">Register<h1>
        <form class="register-form" action="/register" method="post">
            @csrf
            <div class="register-form__item">
                <p class="item-label">お名前</p>
                <input type="text" name='name' class="form-item-input" placeholder="例:山田　太郎" value="{{ old('name') }}">
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__item">
                <p class="item-label">メールアドレス</p>
                <input type="text" name='email' class="form-item-input" placeholder="例:test@example.com" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__item">
                <p class="item-label">パスワード</p>
                <input type="text" name='password' class="form-item-input" placeholder="例:coachtech1106">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-form__btn">
            <button class="register-form__btn--text" type="submit" value="register">登録</button>
            </div>
        </form>
    </div>
</body>