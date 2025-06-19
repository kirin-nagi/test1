@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <?php print_r($contact['name']) ?>
    <form class="form" action="/thanks" method="get">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__radio">
                        <input class="radio" name="gender" value="{{ $contact['gander'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="tel1" value="{{ $contact['tel1'] }}" readonly />
                        <input type="text" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                        <input type="text" name="tel3" value="{{ $contact['tel3'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__input-select">
                        <input type="input-select" name="category_id" value="{{ $contact['category_id'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['message'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <button class="form__button-submit" type="submit">修正</button>
        </div>
    </form>
</div>
@endsection