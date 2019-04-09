@extends('errors.layout.base')

@section('title')
    403
@endsection

@section('content')
    {{  __($exception->getMessage() ?: 'Forbidden') }}
@endsection

@section('error', "403!")


