@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <form action="{{ url('/files') }}" method="POST" class="form-horizontal dropzone" role="form"></form>
        <div class="panel-body">
          Files:
          <div class="grid">
            @foreach ($files as $index=>$directory)
              @foreach ($directory as $image)
                <div class="grid-item">
                  <img src="{{ @getenv("APP_URL") }}images/{{ $index }}/{{ $image }}">
                  <button type="button" class="btn btn-danger">-</button>
                </div>
              @endforeach
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
