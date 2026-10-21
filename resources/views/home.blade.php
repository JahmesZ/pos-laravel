@extends('layouts.app')

@section('content')
    <h1>Welcome to the Laravel POS</h1>
    <p>This Point-of-Sale application is a Laravel rebuild of the TFA1 project. Use the navigation bar to manage customer and user accounts.</p>
    <ul>
        <li><a href="{{ route('customers.index') }}">View Customer Accounts</a></li>
        <li><a href="{{ route('users.index') }}">View User Accounts</a></li>
        <li><a href="{{ route('about') }}">About this project</a></li>
    </ul>
@endsection
