@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
