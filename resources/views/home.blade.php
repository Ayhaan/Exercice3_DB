
@extends('layouts.index')

@section('content')
    {{-- SECTION UNE --}}
    <section>
        <h1>All Membres : {{$datas->count()}}</h1>
        <div class="row">
            @foreach ($datas as $data)
                <div class="col-2 {{$data->genre == 'Homme' ? 'text-primary' : 'text-danger' }}">
                    {{$data->nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION DEUX --}}
    <section>
        <h1>All Hommes : {{$hommes->count()}}</h1>
        <div class="row">
            @foreach ($hommes as $homme)
                <div class="col-2">
                    {{$homme->nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION TROIS --}}
    <section >
        <h1>All Femmes : {{$femmes->count()}}</h1>
        <div class="row">
            @foreach ($femmes as $femme)
                <div class="col-2">
                    {{$femme->nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION QUATRE --}}
    <section>
        <h1>Hommes condition : {{$homme_condition->count()}}</h1>
        <div class="row">
            @foreach ($homme_condition as $data)
                <div class="col-2">
                    {{$data->nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION QUATRE --}}
    <section>
        <h1>Femmes condition : {{$femme_condition->count()}}</h1>
        <div class="row">
            @foreach ($femme_condition as $data)
                <div class="col-2">
                    {{$data->nom}}
                </div>
            @endforeach
        </div>
    </section>
    {{-- SECTION CINQ --}}
    <section>
        <h1>HORS condition : {{$hors_condition->count()}}</h1>
        <div class="row">
            @foreach ($hors_condition as $data)
                <div class="col-2">
                    {{$data->nom}}
                </div>
            @endforeach
        </div>
    </section>
@endsection