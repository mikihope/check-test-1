@extends('layouts.app')

@section('content')
<div class="contact-confirm__content">
  <div class="contact-confirm__heading">
    <h2>お問い合わせ内容確認</h2>
  </div>
  <form method="POST" action="/thanks">
    @csrf
    <div>
      <label>お名前</label>
      <p>{{ $inputs['name'] }}</p>
      <input type="hidden" name="name" value="{{ $inputs['name'] }}">
    </div>
    <div>
      <label>メールアドレス</label>
      <p>{{ $inputs['email'] }}</p>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">
    </div>
    <div>
      <label>お問い合わせ内容</label>
      <p>{{ $inputs['content'] }}</p>
      <input type="hidden" name="content" value="{{ $inputs['content'] }}">
    </div>
    <button type="submit">送信</button>
    <button type="button" onclick="history.back()">修正する</button>
  </form>
</div>
@endsection
