@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
