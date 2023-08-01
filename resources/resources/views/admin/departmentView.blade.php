@extends('layouts.layout')

@section('content')
<a href="/" class=" btn btn-success  text-danger ">Home</a>

    <h1>Student profile!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="{{route('admin')}}" class="list-group-item text-danger active"><i class="glyphicon glyphicon-envelope text-primary active "></i> Dashboard</a>
   </li>  
   <li>
   <a href="{{route('department')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Department add</a>
   </li>
   <li>
    <a href="{{route('course')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Course Add</a>
    <a href="{{route('departmentView')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Department View </a>
   </li>
   <li>
    <a href="{{route('studentView')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Student all details</a>
   </li>
</ul>

</div>
<div class="col-md-8">

    <div class="jumbotron">
        <table class="table">
            <thead>
                <tr>
                    <b>
                        <th>Serial No</th>
                        <th>Department Name</th>
                        <th colspan="5" >course name</th>
                    </b>
                  
                </tr>
                <tr>
                    <td>1</td>
                    <td>cse</td>
                    <td >
               <li>1</li>
               <li>1</li>
               <li>1</li>
               <li>1</li>
                        

                    </td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>cse</td>
                    <td >
               <li>1</li>
               <li>1</li>
               <li>1</li>
               <li>1</li>
                        

                    </td>
                </tr>
               
                    <td>1</td>
                    <td>cse</td>
                    <td >
               <li>1</li>
               <li>1</li>
               <li>1</li>
               <li>1</li>
                        

                    </td>
                </tr>
            </thead>
        </table>
    </div>
    
         </div>
       
       
  

 
</div>

</div>


  
@endsection