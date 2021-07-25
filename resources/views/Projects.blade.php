

@extends('Layout.app')


@section('title','Project')
@section('content')


@include('Component.ProjectTopBanner')
@include('Component.AllProjects')

@include('Layout.Footer')

@endsection

