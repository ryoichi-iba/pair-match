@extends('layouts.app')

@section('title', 'HOME')

@section('content')
{{-- <div class="row">
  <p>
    {{ $pair1[0] }}・{{ $pair1[1] }}　 -   {{ $pair2[0] }}・{{ $pair2[1] }}
    <br>
    {{ $pair1[0] }}・{{ $pair1[1] }}　 -   {{ $pair3[0] }}・{{ $pair3[1] }}
    <br>
    {{ $pair2[0] }}・{{ $pair2[1] }}　 -   {{ $pair3[0] }}・{{ $pair3[1] }}
  </p>
</div> --}}

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-title text-muted">1</p>
        <h5 class="card-text">
{{ $pair1[0] }}・{{ $pair1[1] }}　 -   {{ $pair2[0] }}・{{ $pair2[1] }}

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
{{ $pair1[0] }}・{{ $pair1[1] }}　 -   {{ $pair3[0] }}・{{ $pair3[1] }}

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
        <p class="card-title text-muted">3</p>
        <h5 class="card-text">

{{ $pair2[0] }}・{{ $pair2[1] }}　 -   {{ $pair3[0] }}・{{ $pair3[1] }}

        </h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary">編集</a>
      </div>
    </div>
  </div>
</div>
@endsection