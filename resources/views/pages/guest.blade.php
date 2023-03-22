@extends('layouts.master')
@section('title', 'Homepage')
@section('content')

@include('guest.travel')
@include('guest.form')
@include('guest.contact')

@endsection