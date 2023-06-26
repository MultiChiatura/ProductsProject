@extends('layouts.master', [
    'pageTitle' => 'Products',
])

@section('main')
    {{ auth()->user()->email }}
@endsection
