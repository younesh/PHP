@extends('core.layouts.master')
@section('mainContent')
    <h2> Post / show : {!! $data['title'] !!}    </h2>
<p> l'auteur :  {{ $author }}</p>
@endsection

