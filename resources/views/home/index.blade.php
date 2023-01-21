@extends('layouts.main')
@section('title', 'test')
@section('description', 'description')

@section('content')
  @include('components.header')
  @include('components.intro', ['intros'=>$data['intros']])
  @include('components.philosophy')
  @include('components.color', ['colors'=>$data['colors']])
  @include('components.best')
  @include('components.footer')
@endsection