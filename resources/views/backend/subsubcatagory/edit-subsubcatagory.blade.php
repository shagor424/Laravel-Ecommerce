 @extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Sub Sub Catagory</li>
            </ol>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-6 offset-md-3">
           
           <div class="card">
              <div class="card-header" style="background-color: #086A87 ">
                <h5 style="color: white">Update Sub Sub Catagory
                  <a  href="{{route('subsubcatagories.view-subsubcatagory')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-list"> Sub Sub Catagory List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
             <form method="POST" action="{{route('subsubcatagories.update-subsubcatagory',$editdata->id)}}" class="form-horizontal" id="myform">
          @csrf
        

      <div class="row">
          <div class="form-group col-sm-5">
           <label for="sub_catagory_id" class="control-label">Catagory Name</label>
          </div>
          <div class="col-md-7">
      <select name="catagory_id" class="form-control select2bs4" id="catagory_id">
        <option value="">--Select Catagory--</option>
      @foreach($catagories as $catagory)
              <option value="{{$catagory->id}}" {{ $catagory->id == $editdata->catagory_id ?" selected":""}}>{{$catagory->catagory_name}}</option>
              @endforeach
    </select>
    </div>
      </div>

      <div class="row">
          <div class="form-group col-sm-5">
           <label for="sub_catagory_id" class="control-label">Sub Catagory Name</label>
          </div>
          <div class="col-md-7">
      <select name="sub_catagory_id" class="form-control select2bs4" id="sub_catagory_id">
        <option value="">--Select Sub Catagory--</option>
      @foreach($subcatagories as $subcatagory)
              <option value="{{$subcatagory->id}}" {{ $subcatagory->id == $editdata->sub_catagory_id ?" selected":""}}>{{$subcatagory->sub_catagory_name}}</option>
              @endforeach
    </select>
    </div>
      </div>



 <div class="row">
          <div class="form-group col-sm-5">
              <label for="suvb_sub_catagory_name" class="control-label">Sub Sub Catagory Name</label>
            </div>
              <div class="col-sm-7">
                  <input type="text" name="sub_sub_catagory_name" class="form-control" value="{{$editdata->sub_sub_catagory_name}}" id="sub_sub_catagory_name" placeholder="Sub Sub Catagory Name" data-validation="requierd">
                  @error('sub_sub_catagory_name')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
              </div>
          </div>

       </div>
         
          <div class="form-group">
              <div class="col-sm-12">
                  <button type="submit" class="btn btn-danger pull-right btn-block">Update Sub Sub Catagory</button>
              </div>
          </div>
                                         
                                    </form>

                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT --> 
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<script>
$(function () {
  
  $('#myform').validate({
    rules: {

      catagory_id: {
      required: true,
        
      },
      sub_catagory_name: {
        required: true,
        
      },
     sub_sub_catagory_name: {
        required: true,
        
      },
      gender: {
        required: true,
        
      },
       
      address: {
      required: true,
        
      },


      email: {
        required: true,
        email: true
       
      },
      password: {
        required: true, 
        minlength: 6
      },
      cpassword: {
      required: true,
      equalTo:'#password'
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please enter Name",
        
      },
      
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      cpassword: {
        
        equalTo:"Confirm password Does Not Match",
        }
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
  @endsection