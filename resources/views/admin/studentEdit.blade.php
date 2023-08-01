@extends('layouts.layout')

@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="">
                <ul>
                    <button><a href="/" class=" list-group-item  text-success ">Home</a></button>
                    <button><a href="{{ route('admin') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
                    </button>
                    <button>
                        <a href="{{ route('department') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
                    </button>
                    <button>
                        <a href="{{ route('course') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
                        <a href="{{ route('departmentView') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> Department and Course add </a>
                    </button>
                    <button>
                        <a href="{{ route('departmentCourse') }}" class="list-group-item text-success"><i
                                class="glyphicon glyphicon-envelope text-primary"></i> department and course </a>
                    </button>
                    <button>
                        <a href="{{ route('studentView') }}" class="list-group-item text-danger active"><i
                                class="text-danger">studentView</i> </a>
                    </button>
                </ul>

            </div>
            <div class="col-md-8">


                <div class="container">
                    <div class="jumbotron">
                        @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                     <form action="{{url('admin/studentupdate/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" >Student Id:{{$student->id}}</span>
                           
                          
                          </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" >name</span>
                            <input type="text" name="name"  value="{{$student->name}}" class="form-control" >
                          </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" >Department</span>
                            <span class="input-group-text text-danger" >{{$student->department->name}}</span>
                           <select name="department_id" >
                            <option  selected value="">select new department</option>
                            @foreach ( $department as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                                
                            @endforeach
                           
                         
                           </select>
                          </div>
                          <div class="input-group input-group-sm mb-3">
                            
                            <input type="submit"  value="update" class="form-control btn btn-success" >
                          </div>
                     </form>
                    </div>

                </div>
            </div>





        </div>

    </div>
@endsection
