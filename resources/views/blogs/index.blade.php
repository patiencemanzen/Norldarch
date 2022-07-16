@extends('layouts.master')

@section('title') Blogs @stop

@section('content')
    <livewire:navbar />
    <livewire:blogs :blogs="$blogs" />
    <livewire:footer />
@stop
