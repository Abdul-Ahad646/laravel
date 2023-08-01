@extends('layouts.layout')

@section('content')


   

<div class="container">
 


   <a href="{{route('student')}}" class="list-group-item text-danger btn btn-light "> student</a>
   <a href="{{route('admin')}}" class="list-group-item text-danger btn  btn-light">Admin</a> 
   

</div>

@endsection