@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<a href="{{ url('/tournament/create') }}">試合作成</a>
<form action="">
  <input type="text">
  <button type="submit" class="btn btn-primary">ログイン</button>
</form>
</form>
@endsection