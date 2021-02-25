@extends('layouts.app')

@section('title', 'HOME')

@section('content')

<h2>{{ $player->tournament->name }}</h2>
{{-- <h2>{{ dd($result3) }}</h2> --}}

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-title text-muted">1</p>
        <h5 class="card-text">
{{ $pair1[0] }}・{{ $pair1[1] }} ({{ $result1->pair1_score }})　 -  ({{ $result1->pair2_score }}) {{ $pair2[0] }}・{{ $pair2[1] }}

        </h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary">編集</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-title text-muted">2</p>
        <h5 class="card-text">
{{ $pair1[0] }}・{{ $pair1[1] }}　({{ $result2->pair1_score }})　 -  ({{ $result2->pair2_score }})  {{ $pair3[0] }}・{{ $pair3[1] }}

        </h5>
      </div>
      <div class="card-footer">
        <a href="{{ route('results.edit', $result2->id) }}" class="btn btn-primary">編集</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-title text-muted">3</p>
        <h5 class="card-text">

{{ $pair2[0] }}・{{ $pair2[1] }}　({{ $result3->pair1_score }})　 -  ({{ $result3->pair2_score }})  {{ $pair3[0] }}・{{ $pair3[1] }}

        </h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary">編集</a>
      </div>
    </div>
  </div>
</div>
@endsection