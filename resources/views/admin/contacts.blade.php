@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-wrap">
  <header class="admin-header">
    <h1>お問い合わせ一覧</h1>
    <a class="admin-link" href="/admin">管理トップへ</a>
  </header>

  <section class="admin-toolbar">
    <form action="{{ url('/admin/contacts') }}" method="GET" class="filter-form">
      <div class="filter-left">
        <input type="text" name="keyword"
               placeholder="名前・メールアドレス・内容で検索"
               value="{{ request('keyword') }}">
        <select name="category">
          <option value="">すべて</option>
          <option value="商品"   {{ request('category') == '商品' ? 'selected' : '' }}>商品</option>
          <option value="サービス" {{ request('category') == 'サービス' ? 'selected' : '' }}>サービス</option>
          <option value="その他" {{ request('category') == 'その他' ? 'selected' : '' }}>その他</option>
        </select>
      </div>
      <div class="filter-right">
        <button type="submit" class="btn-primary">検索</button>
        <a href="{{ url('/admin/contacts') }}" class="btn-ghost">リセット</a>
      </div>
    </form>
  </section>

  <div class="table-wrap">
    <table class="contact-table">
      <thead>
        <tr>
          <th class="col-id">ID</th>
          <th class="col-name">名前</th>
          <th class="col-email">メールアドレス</th>
          <th class="col-content">内容</th>
          <th class="col-category">カテゴリ</th>
          <th class="col-date">登録日</th>
        </tr>
      </thead>
      <tbody>
        @forelse($contacts as $contact)
        <tr>
          <td class="col-id">{{ $contact->id }}</td>
          <td class="col-name">{{ $contact->name }}</td>
          <td class="col-email">{{ $contact->email }}</td>
          <td class="col-content" title="{{ $contact->content }}">{{ $contact->content }}</td>
          <td class="col-category">{{ $contact->category ?? '-' }}</td>
          <td class="col-date">{{ optional($contact->created_at)->format('Y-m-d') }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="empty">該当するお問い合わせはありません</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="pager">
    {{ $contacts->withQueryString()->links() }}
  </div>
</div>
@endsection

