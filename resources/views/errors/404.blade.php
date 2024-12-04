@extends('errors::minimal')


@section('title', __(env('APP_NAME').' - Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
