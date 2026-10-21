@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p>This application is a simple POS system built with <strong>Laravel</strong> for IT0049 (Web System Technologies).</p>
    <p>It follows MVC: <em>routes</em> in <code>routes/web.php</code> map URLs to <em>controllers</em>, which pass data to <em>Blade views</em> for rendering.</p>
    <p>The account pages currently read from static PHP arrays defined in the controllers; a database will replace them in a later activity.</p>
@endsection
