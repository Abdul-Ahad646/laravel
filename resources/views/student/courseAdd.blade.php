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
                <div class="jumbotron bg-light">
                    <div class="jumbotron bg-primary">
                        <span class="input-group-text">Department Name</span>
                        <div class="jumbotron">

                            <table class="table">
                                <tr>
                                    <th> ID </th>
                                    <th> Student Name </th>
                                    <th> Department </th>
                                    <th> Action </th>

                                </tr>
                                @foreach ($students as $item)
                                <tr>

                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->department->name}}</td>
                                    <td>
                                        <a class=" btn btn-success text-danger"
                                            href="{{url('student/courseselect/'.$item->id)}}">Next</a>
                                    </td>
                                </tr>
                                @endforeach


                            </table>






                        </div>


                    </div>
                    <br>


                </div>

            </div>



        </div>

    </div>




</div>

</div>
@endsection