@extends('layouts.app')
@section('content')

<h2>We provide these services</h2>
@foreach($provider as $p)
<li>{{$p}}</li>
@endforeach
@endsection