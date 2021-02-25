@extends('layouts.app')

@section('title', 'HOME')

@section('content')

<h1>名前を記入する</h1>
<form class="row" action="{{ route('results.seed')}}" method="post">
    @csrf

    @for ($i = 0; $i < $pairCount ; $i++) <div class="form-group col-6">
        <label for="player1">1人目</label>
        <input type="text" class="form-control" name="pair{{ $i }}[]" required>
        </div>
        <div class="form-group col-6">
            <label for="player2">2人目</label>
            <input type="text" class="form-control" name="pair{{ $i  }}[]" required>
        </div>
        @endfor

        <input type="hidden" value="{{ $pairCount }}" name="pairCount">
        <input type="hidden" value="{{ $tournamentId }}" name="tournamentId">
        <button type="submit" class="btn btn-primary">作成</button>
</form>


@endsection
