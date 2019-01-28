@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is append to the master sidebar</p>
@stop

@section('content')
    <p>Selamat datang di halaman produk</p>
@stop