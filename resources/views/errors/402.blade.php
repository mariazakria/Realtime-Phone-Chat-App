@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Payment Required'))
@section('code', '402')
@section('message', __('Payment Required'))
