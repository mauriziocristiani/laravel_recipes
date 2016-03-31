@extends('master')

@section('content')



            <p>
            {{$ricette->titolo}} 
            {{  "|" }}
            {{$ricette->descrizione }} 
            {{  "|" }}
            {{$ricette->ingredieuno }} 
             {{  "|" }}
            {{$ricette->ingrediedue }} 
            {{  "|" }}
            {{$ricette->ingredietre }} 
           
            </p>
            

@endsection