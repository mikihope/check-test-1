@extends('layouts.app')

@section('content')
<div class="admin__content">
  <h2>管理画面</h2>

  <nav class="admin__nav">
    <ul>
      <li><a href="/admin/contacts">お問い合わせ一覧</a></li>
    </ul>
  </nav>

  <div class="admin__main">
    <p>ここに管理画面の内容が表示されます。</p>
  </div>
</div>
@endsection
