<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1 class="header-title">FashionablyLate</h1>
    </header>

    <div class="contact-form">
        <div class="contact-form__title">
            <h1 class="contact-form__title--text">Contact</h1></div>
        <form class="contact-form__form" action="/confirm" method="post">
            @csrf
            <div class="contact-form__form--item">
                <p class="form-item-label">お名前<span class="form-item-label-required">※</span></p>
                <input type="text" name='last_name' class="form-item-input form-item-input1" placeholder="例:山田" value="{{ old('last_name') }}">
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
                <input type="text" name="first_name" class="form-item-input form-item-input2" placeholder="例:太郎" value="{{ old('first_name') }}">
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">性別<span class="form-item-label-required">※</span></p>
                <input id="men" type="radio" name="gender" class="form-item-input form-item-input-radio1" value="男性" checked>
                <label for="men">男性</label>
                <input id="women" type="radio" name="gender" class="form-item-input form-item-input-radio2" value="女性">
                <label for="women">女性</label>
                <input id="else" type="radio" name="gender" class="form-item-input form-item-input-radio3" value="その他">
                <label for="else">その他</label>

                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">メールアドレス<span class="form-item-label-required">※</span></p>
                <input type="text" name="email" class="form-item-input form-item-input3" placeholder="例:test@example.com" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">電話番号<span class="form-item-label-required">※</span></p>
                <input type="text" name="tell1" class="form-item-input form-item-input4" placeholder="080" value="{{ old('tell1') }}">
                <div class="form__error">
                </div>
                <p class="tel-number"> - </p>
                <input type="text" name="tell2" class="form-item-input form-item-input5" placeholder="1234" value="{{ old('tell2') }}">
                <div class="form__error">
                </div>
                <p class="tel-number"> - </p>
                <input type="text" name="tell3" class="form-item-input form-item-input6" placeholder="5678" value="{{ old('tell3') }}">
                <div class="form__error">
                    @error('tell1')
                    {{ $message }}
                    @enderror
                    @error('tell2')
                    {{ $message }}
                    @enderror
                    @error('tell3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">住所<span class="form-item-label-required">※</span></p>
                <input type="text" name="address" class="form-item-input form-item-input7" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">建物名</p>
                <input type="text" name="building" class="form-item-input form-item-input8" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">お問い合わせの種類<span class="form-item-label-required">※</span></p>
                <select type="select" name="select" class="form-item-input form-item-input9" >
                    <option value="" hidden>選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
                <div class="form__error">
                    @error('select')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__form--item">
                <p class="form-item-label">お問い合わせ内容<span class="form-item-label-required">※</span></p>
                <textarea type="text" name="detail" class="form-item-textarea" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="contact-form__btn">
            <button class="contact-form__btn--text" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</body>
</html>