@extends('master')
@section('content')
<table class="table">
    <div class="container">
        <div class="row">
            <div class="col order-first">
                Slika
            </div>
            <div class="col">
                Naslov Filma
            </div>
            <div class="col">
                Godina
            </div>
            <div class="col">
                Trajanje
            </div>
            <div class="col order-last">
                Akcija
            </div>
        </div>
    </div>
</table>
<table class="table">
@foreach($filmovi as $film)
<div class="container">
    <div class="row">
        <div class="col order-first">
            <img src='{{asset("storage/{$film->slika}")}}'>
        <div class="col">
            {{$film->naslov}}
        </div>
        <div class="col">
            {{$film->godina}}
        </div>
        <div class="col">
            {{$film->trajanje}}
        </div>
        <div class="col order-last btn">
            <a href="#">Obriši</a>
        </div>
    </div>
</div>
</table>
@endforeach
@endsection

