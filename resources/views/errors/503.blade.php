@extends('errors.layout.base')

@section('title', __('Service Unavailable'))
@section('error', '503!')
@section('content', __($exception->getMessage() ?: 'Service Unavailable'))
