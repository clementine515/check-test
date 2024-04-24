<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1 class="header-title">FashionablyLate</h1>
    </header>
    <div class="confirm">
        <div class="confirm__title">
            <h1 class="confirm__title--text">Confirm</h1></div>
        <form class="form" action="/thanks" method="post">
            @csrf
        <table class="table">
            <tr class="table__item">
                <th class="table__item--title">お名前</th>
                <td class="table__item--detail">
                    <input class="input input-name" type="text" name='last_name' value="{{ $contact['last_name'] }}" readonly/>
                    <input class="input input-name" type="text" name='first_name' value="{{ $contact['first_name'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">性別</th>
                <td class="table__item--detail">
                    <input class="input" type="text" name="gender" value="{{ $contact['gender'] }}">
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">メールアドレス</th>
                <td class="table__item--detail">
                    <input class="input" type="text" name="email" value="{{ $contact['email'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">電話番号</th>
                <td class="table__item--detail">
                    <input class="input input-tell" type="text" name="tell1" value="{{ $contact['tell1'] }}-" readonly/>

                    <input class="input input-tell" type="text" name="tell2" value="{{ $contact['tell2'] }}-" readonly/>
                    <input class="input input-tell" type="text" name="tell3" value="{{ $contact['tell3'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">住所</th>
                <td class="table__item--detail">
                    <input class="input" type="text" name="address" value="{{ $contact['address'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">建物名</th>
                <td class="table__item--detail">
                    <input class="input" type="text" name="building" value="{{ $contact['building'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title">お問い合わせの種類</th>
                <td class="table__item--detail">
                    <input class="input" type="text" name="select" value="{{ $contact['select'] }}" readonly/>
                </td>
            </tr>
            <tr class="table__item">
                <th class="table__item--title table__item--textarea">お問い合わせの内容</th>
                <td class="table__item--detail">
                    <input class="input input-detail" type="text" name="detail" value="{{ $contact['detail'] }}" readonly/>
                </td>
            </tr>
        </table>

        <div class="confirm__btns">
            <div class="confirm__btn1">
            <button class="confirm__btn--send" type="submit" value="submit">送信</button>
            </div>

            <div class="confirm__btn2">
            <button class="confirm__btn--edit"  name="back" value="back">修正</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>