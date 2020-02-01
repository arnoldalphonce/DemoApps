@extends('layouts.app')

@section('content')
<h1>Recent messages</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group mb-4">
        <li class="list-group-item">Client name: {{$message->name}}</li>
        <li class="list-group-item">Client Email: {{$message->email}}</li>
        <li class="list-group-item">Inquiry: {{$message->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection
