@extends('layouts.admin')

@section('title')Dashboard @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-cube text-success icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Revenue</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$65,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Orders</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$45,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Returns</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$12,357</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                      <i class="mdi mdi-airballoon text-info icon-lg"></i>
                    </div>
                    <div class="wrapper">
                      <p class="card-text mb-0">Sales</p>
                      <div class="fluid-container">
                        <h3 class="card-title mb-0">$45,650</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
       
      
          
        
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>

@endsection