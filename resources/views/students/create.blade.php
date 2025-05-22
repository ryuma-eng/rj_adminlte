@extends('layouts.app')
@section('content')


    <!-- <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-text">
                                {{ __('Add Students') }}
                            </h3>


                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        
                        <form action="" class="px-3 py-3">

                            <div class="row col-4">
                                <label for="">Student ID</label>
                                <input type="number" class="form-control">
                            </div>
                            

                            <div class="row">

                                <div class="col-4">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-4">
                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-4">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                

                                

                            </div>

                            <div>
                                <label for="">Birthday</label>
                                <input type="date" class="form-control">
                            </div>

                            <div>
                                <label for="">Address</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-check my-2">
                                <input type="checkbox" class="form-check-input checkbox-info btn-check-info" id="btn-check-info">
                                <label for="" class="font-weight-light small form-check-label">Terms & Agreements</label>
                                
                            </div>

                            <div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>

                        </form>

                    </div>
                     /.card -->

     
                <!-- </div>
            </div>
        </div>
    </div> --> 

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">

                  @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif

                <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Add New Student</h3>
                   </div>

                     <form  action="{{ route('students.store') }}" method="POST">
                      @csrf
                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label
                               for="exampleInputEmail1">First Name
                            </label>
                               <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require>
                         </div>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                  
                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
                        </div>
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                           <label for="exampleInputFile">Middle Name</label>
                   
                          <input type="text" class="form-control" id="midname" name="midname" placeholder="Enter your Middle Name">
                        </div>
                          @error('midname') <span class="text-danger">{{$message}}</span> @enderror


                        <div class="form-group col-12">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                        </div>
                          @error('address') <span class="text-danger">{{$message}}</span> @enderror



                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Zip</label>
                          <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                        </div>
                        @error('zip') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Age</label>
                          <input type="number" class="form-control" id="age" name="age" placeholder="">
                        </div>
                        @error('age') <span class="text-danger">{{$message}}</span> @enderror
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success col-12">Submit</a>
                </div>

           
              </form>


                </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->



@endsection