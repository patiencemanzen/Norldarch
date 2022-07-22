@extends('layouts.master')

@section('title') Home @stop

@section('content')
    <livewire:navbar />
    <livewire:hero :blogs="$blogs" />
    <livewire:blogs identifier="index" :blogs="$blogs" />
    <livewire:footer />
@stop
