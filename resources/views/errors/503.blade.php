@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
