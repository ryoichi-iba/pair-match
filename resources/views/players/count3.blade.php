@extends('layouts.app')

@section('title', 'HOME')

@section('content')

<h1>名前を記入する</h1>
<form class="row" action="{{ url('/players/match')}}" method="post">
    @csrf
  <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" name="pair1[]" value="1" required>
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" name="pair1[]" value="2" required>
  </div>

   <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" name="pair2[]" value="3" required>
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" name="pair2[]" value="4" required>
  </div>

   <div class="form-group col-6">
    <label for="player1">1人目</label>
    <input type="text" class="form-control" name="pair3[]" value="5" required>
  </div>
  <div class="form-group col-6">
    <label for="player2">２人目</label>
    <input type="text" class="form-control" name="pair3[]" value="6" required>
  </div>

    <input type="hidden" value="3" name="count">
    <button type="submit" class="btn btn-primary">作成</button>
</form>


@endsection