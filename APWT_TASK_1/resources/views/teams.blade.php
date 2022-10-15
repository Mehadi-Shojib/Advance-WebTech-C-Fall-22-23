@extends('layouts.app')
@section('content')

<h2>Our Teams</h2>
@foreach($teammembers as $t)
<li>{{$t}}</li>
@endforeach

@endsection