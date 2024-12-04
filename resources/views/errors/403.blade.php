@extends('errors::minimal')

@section('title', __(env('APP_NAME').' - Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
