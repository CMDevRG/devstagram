@extends('layouts.app')

@section('title')
    Página Principal
@endsection

@section('contenido')
    <x-list-post :posts="$posts" />
@endsection