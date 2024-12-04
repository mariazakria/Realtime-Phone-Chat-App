@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
