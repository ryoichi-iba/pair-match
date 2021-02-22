@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<form action="{{ url('/players')}}" method="post">
    @csrf
    <select name="players">
        <option value="3">3ペア</option>
        <option value="4">4ペア</option>
        <option value="5">5ペア</option>
        <option value="6">6ペア</option>
        <option value="7">7ペア</option>
    </select>
    <button type="submit" class="btn btn-primary">作成</button>
</form>
@endsection
