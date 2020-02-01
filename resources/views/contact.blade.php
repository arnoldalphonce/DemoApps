@extends('layouts.app')

@section('content')
<h1>Contact us</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'Email address')}}
      {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Type your message'])}}
    </div>

    <!-- submit button -->
    <div class="mb-4">
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
@endsection
