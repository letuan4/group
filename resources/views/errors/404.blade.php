@extends('errors.layout.base')

@section('title')
    404
@endsection

@section('content')
    {{ $exception->getMessage() }}
@endsection

@section('error', "404!")