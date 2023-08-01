@extends('layouts.layout')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="">
            <ul>

                <button><a href="/" class=" btn btn-success  text-danger ">Home</a><button>

                        <button> <a href="{{ route('student') }}" class="list-group-item text-light active ">
                                Dashboard</a></button>



                        <button> <a href="{{ route('profile') }}" class="list-group-item text-success ">My
                                profile</a></button>



                        <button> <a href="{{ route('registration') }}" class="list-group-item text-success"> Registion
                                Now</a></button>


                        <button> <a href="{{ route('courseAdd') }}" class="list-group-item text-success"> Course
                                Add</a></button>

            </ul>

        </div>


    </div>
    @endsection