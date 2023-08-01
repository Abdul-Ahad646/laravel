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
        <div class="col-md-8">
            <div class="jumbotron">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th><br>
                            <td>{{$students->id}}</td>

                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>
                                {{$students->name}}
                            </td>



                        </tr>
                        <tr>
                            <th>Department</th><br>
                            <td>
                                {{$students->department->name}}
                            </td>


                        </tr>


                    </thead>
                </table>
            </div>







        </div>

    </div>
    @endsection