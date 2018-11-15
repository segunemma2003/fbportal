@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h4>Trainers Renmeration</h4>
          <p class="card-description">Calculate trainers earning per training</p>
          <form>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend bg-primary border-primary">
                  <span class="input-group-text bg-transparent">
                  <i class="mdi mdi mdi-menu text-white"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Number of approved trainees" aria-label="Username" aria-describedby="colored-addon2">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend bg-primary border-primary">
                  <span class="input-group-text bg-transparent text-white">$</span>
                </div>
                <input type="number" class="form-control" aria-label="Amount">
                <div class="input-group-append bg-primary border-primary">
                  <span class="input-group-text bg-transparent text-white">.00</span>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2">Calculate</button>
            <button class="btn btn-danger">Reset</button>
          </form>
        </div>
      </div>  
    </div>

    <div class="col-md-3"></div>
  </div>
</div>
@endsection