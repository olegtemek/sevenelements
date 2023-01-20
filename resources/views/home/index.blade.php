@extends('layouts.main')
@section('title', 'test')
@section('description', 'description')

@section('content')
  @include('components.header')
  @include('components.intro', ['intros'=>$data['intros']])
  @include('components.philosophy')
@endsection