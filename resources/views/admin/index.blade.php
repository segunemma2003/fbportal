@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Total Trainers</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">50</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Verified
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Total trainings</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">355</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> This month <strong>September</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Overall reports</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">54</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i>Training reports by trainers
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-location text-info icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Overall participants trained</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">22146</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-reload mr-1" aria-hidden="true"></i>Monthly number of trainees
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                   <div class="card-body">
                    <h4 class="card-title">Growth rate</h4>
                      <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                  </div>
               </div>
            </div>
@endsection