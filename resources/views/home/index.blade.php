@extends('layouts.main')
@section('title', env('APP_NAME'))
@section('description', 'description')

@section('content')
  @include('components.header', ['contacts'=>$data['contacts']])
  @include('components.intro', ['intros'=>$data['intros']])
  @include('components.philosophy')
  @include('components.color', ['colors'=>$data['colors']])
  @include('components.best')
  @include('components.detail', ['details'=>$data['details']])
  @include('components.product', ['bags'=>$data['bags'],'cases'=>$data['cases'],'access'=>$data['access']])
  {{-- @include('components.hero', ['heroes'=>$data['heroes']]) --}}
  @include('components.instagram')
  @include('components.form')
  @include('components.footer', ['contacts'=>$data['contacts']])
@endsection