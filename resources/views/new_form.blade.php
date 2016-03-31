@extends('master')

@section('content')

{!! Form::open(['url'=>'ricette','method'=>'post' ]) !!}

<div class="form-group">
{!! Form::label('titolo','titolo') !!}
{!! Form::text('titolo',
                null,
                ['placeholder'=>'inserisci il titolo'] ) !!}
                
{!! Form::label('descrizione','descrizione') !!}
{!! Form::text('descrizione',
                null,
                ['placeholder'=>'inserisci descrizione'] ) !!}          
                
{!! Form::label('ingredieuno','ingredieuno') !!}
{!! Form::text('ingredieuno',
                null,
                ['placeholder'=>'inserisci ingrediente uno'] ) !!}                   
                
{!! Form::label('ingrediedue','ingrediedue') !!}
{!! Form::text('ingrediedue',
                null,
                ['placeholder'=>'inserisci ingrediente due'] ) !!}      
                
{!! Form::label('ingreditre','ingredietre') !!}
{!! Form::text('ingredietre',
                null,
                ['placeholder'=>'inserisci ingrediente tre'] ) !!}                 
                
</div>

{!! Form::submit('invia',['class'=>'btn btn-default'])   !!}
                


{!! Form::close() !!}

@if ($errors->any())
   <ul class="alert alert-danger">
       @foreach ($errors->all() as $error)
           <li>{{$error }}</li>
       @endforeach
   
   </ul>

@endif

@endsection