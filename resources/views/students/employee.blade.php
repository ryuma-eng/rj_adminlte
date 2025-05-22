@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-text">
                                {{ __('EMPLOYEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE') }}
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
                    <!-- /.card -->

     
                </div>
            </div>
        </div>
    </div>


@endsection