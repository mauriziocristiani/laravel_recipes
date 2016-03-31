@extends('master')

@section('content')

{{$ricette}}


            @foreach($ricette as $ricette)
            <p>{{$ricette->titolo}} 
            {{  "|" }}
            {{$ricette->descrizione }} 
             {{  "|" }}
            {{$ricette->ingredieuno }} 
            
            {{  "|" }}
            {{$ricette->ingrediedue }} 
            
              {{  "|" }}
            {{$ricette->ingredietre }} 
            
            
            </p>
            @endforeach
        

@endsection





titolo','descrizione','ingredieuno','ingrediedue','ingredietre'