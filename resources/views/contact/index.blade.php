@extends('layouts.app')

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせフォーム</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <label>お名前</label>
      <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div class="form__group">
      <label>メールアドレス</label>
      <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div class="form__group">
      <label>お問い合わせ内容</label>
      <textarea name="content">{{ old('content') }}</textarea>
    </div>
    <button type="submit">確認</button>
  </form>
</div>
@endsection
