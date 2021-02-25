@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<form action="{{ route('tournament.store') }}" method="post">
@csrf
<label for="name">試合名</label>
<input type="text" name="name" id="name" required>
 <button type="submit" class="btn btn-primary">作成</button>
</form>
</form>
@endsection