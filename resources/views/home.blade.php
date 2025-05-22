@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('My Profile') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-info card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="http://127.0.0.1:8000/images/profile.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">RJ David</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">rjdvd0615@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact no.</b> <a class="float-right">0912-345-6789</a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">Paligui Apalit Pampanga</a>
                  </li>
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Education Box -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Education</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Primary</strong>

                <p class="text-muted">
                  Paligui Elementary School <br>
                  2010 - 2016
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Secondary</strong>

                <p class="text-muted">
                    Sta. Maria National High School <br>
                    2016 - 2022
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Tertiary</strong>

                <p class="text-muted">
                    Don Honorio Ventura State University <br>
                    2022 - PRESENT
                </p>

                <hr>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Skills</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <p class="text-muted">
                  HTML, CSS, JAVASCRIPT - Frontend <br>
                </p>

                <hr>

                <p class="text-muted">
                    PHP, Laravel - Backend
                </p>

                <hr>

                <p class="text-muted">
                    C++, Java - Game
                </p>

                <hr>

                    
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">

            <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-info">
                          January 2014 - December 2022
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item bg-white">
                          

                          <h3 class="timeline-header">David Tent Rental</h3>

                          <div class="timeline-body">
                                Manager <br> <br>
                                Staff
                        
                          </div>

                        </div>
                      </div>
                      <!-- END timeline item -->


                      <div class="time-label">
                        <span class="bg-info">
                          January 2014 - December 2022
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item bg-white">
                          

                          <h3 class="timeline-header">Tabilin Tilapia Retail </h3>

                          <div class="timeline-body">
                                Seller <br> <br>
                                Retailer
                        
                          </div>

                        </div>
                      </div>
                      <!-- END timeline item -->


                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>


                    </div>
                  </div>
              
              
            </div>
            <!-- /.card -->
            
            

            <!-- =========================================================== -->


            <div class="row">


              <!-- /.col -->
              <div class="col-md-6">
                <div class="card card-white">
                  <div class="card-header">
                    <h3 class="card-title">Achievements</h3>

                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <p class="text-muted">
                        <strong>Most Behave</strong> <br>
                        2015 - 2016
                    </p>

                    <hr>


                    <p class="text-muted">
                        <strong>With Honors</strong>  <br>
                        2015 - 2016
                    </p>

                    <hr>

                    <p class="text-muted">
                        <strong>Paligui Interbarkada Basketball - Champion</strong> <br>
                        2015 - 2016
                    </p>

                    <hr>


                    <p class="text-muted">
                        <strong>With Honors</strong> <br>
                        2020 - 2021
                    </p>

                    <hr>


                    <p class="text-muted">
                        <strong>VDLR PYD Basketball - Champion</strong> <br>
                        July 2022
                    </p>

                    <hr>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="card card-white">
                  <div class="card-header">
                    <h3 class="card-title">Seminars</h3>
                  </div>
                  <div class="card-body">
                    <p class="text-muted">
                        <strong>VDLR PYD Seminar</strong> <br>
                        December 2022
                      </p>
                      <hr>

                      <p class="text-muted">
                        <strong>SK Software Engineering Seminar</strong> <br>
                        April 2023
                      </p>

                      <hr>

                      <p class="text-muted">
                          <strong> Christ The King VYD Seminar</strong> <br>
                          April 2023
                      </p>

                      <hr>

                      <p class="text-muted">
                          <strong> JTIA IT Seminar</strong> <br>
                          December 2024
                      </p>

                      

                      <hr>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection