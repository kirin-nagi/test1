@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--item">
                            <input type="text" name="last-name" placeholder="例 山田" value="{{ old('name') }}" />
                            <input type="text" name="first-name" placeholder="例 太郎"  value="{{ old ('name') }}"/>
                        </div>
                        <div class="form_error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="male" value="{{ old('gender') }}">男性
                            <input type="radio" name="gender" value="female">女性
                            <input type="radio" name="gender" value="other">その他
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例 text@exmple.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <input type="tel" name="tel1" placeholder="080" value="{{ old('tel') }}" />  -
                            <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel') }}" />  -
                            <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel') }}" />
                        </div>
                        <div class="form__error">
                            @error('tel')
                            {{ message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例 東京都渋谷区千駄1-2-3" value="{{old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="千駄々谷マンション101" value="{{ old('building') }}" />
                        </div>
                        <div class="form__error">
                            @error('building')
                            {{ message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-item">
                        <div class="form__input-select">
                            <select class="form__input-select" name="category_id">
                                <option value="">選択してください</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('category-id')
                            {{ message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('message') }}" />
                        </div>
                        <div class="form__error">
                            @error('message')
                            {{ message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    @endsection