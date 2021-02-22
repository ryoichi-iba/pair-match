@extends('layouts.app')

@section('title', 'HOME')

@section('content')

<h1>名前を記入する</h1>
<form class="row" action="{{ url('/players/match')}}" method="post">
    @csrf
  <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" placeholder="佐藤" name="pair1[]">
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" placeholder="田中" name="pair1[]">
  </div>

   <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" placeholder="佐藤" name="pair2[]">
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" placeholder="田中" name="pair2[]">
  </div>

   <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" placeholder="佐藤" name="pair3[]">
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" placeholder="田中" name="pair3[]">
  </div>

    <input type="hidden" value="3" name="count">
    <button type="submit" class="btn btn-primary">作成</button>
</form>


@endsection