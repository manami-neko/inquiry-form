@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')

        <div class="inquiry-form__content">
            <div class="inquiry-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/inquiries/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="テスト太郎" />
                        </div>
                        @error('name')
                        <div class="form__error">
                            {{$errors->first('name')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com" />
                        </div>
                        @error('email')
                        <div class="form__error">
                            {{$errors->first('email')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" value="{{ old('tel') }}" placeholder="09012345678" />
                        </div>
                        @error('tel')
                        <div class="form__error">
                            {{$errors->first('tel')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select class="item__select" name="item_id">
                                <option value="">商品名を選択してください</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('item_id')
                        <div class="form__error">
                            {{$errors->first('item_id')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content"  placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                        <div class="form__error">
                            {{$errors->first('content')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
@endsection