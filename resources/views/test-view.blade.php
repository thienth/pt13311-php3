@extends('layouts.main')

@section('title', 'test that choi gi')
@section('main')
{!! $name !!} - 

@foreach($arr as $item)
	{{$loop->index}}
	{{$loop->iteration}}
	{{$loop->remaining}}
	{{$loop->count}}
	<h3>Hello, {{$item}}</h3>
@endforeach
@endsection