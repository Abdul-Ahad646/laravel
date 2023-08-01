@extends('layouts.layout')

@section('content')
<a href="" class=" btn btn-success  text-danger ">Home</a>

   

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="student" class="list-group-item text-danger "> home</a>
   </li>  
   <li>
   <li><a href="profile" class="list-group-item text-danger ">My profile</a>
   </li>  
   <li>
   <a href="registration" class="list-group-item text-success"> Registion Now</a>
   </li>
   <li>
    <a href="courseAdd" class="list-group-item text-success"> Course Add</a>
   </li>
   <li>

   </li>
</ul>

</div>
<div class="col-md-8">

    
    <div class="card">
        <div class="card-header">
            <h4>Registration From</h4>
        </div>
        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
       
                <div class="form-group mb-3">
                    <label for="">Name:</label>
                   <input type="text" value="  name="name"</th>
                </div>
               
                <div class="form-group mb-3">
                <label >Department Name:</label><br>
                  <select class="form-select form-select-sm mb-3" name="department_id" id="department">
                    <option selected>Open this select menu</option>
                   
                    
                  </select>
                </div>
                <div class="form-group mb-3">
                <label for="">Course add</label>
                <select class="form-select form-select-sm mb-3" name="course_id" id="course">
                    <option selected>Open this select menu</option>

              
                     
                
                    
                  
                  </select>
                </div>
                

              

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Save </button>
                </div>

            </form>
         
        </div>
    </div>

       
       
  

 
</div>

</div>

@endsection