@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h2>Add New Trainer</h2>
          <p class="card-description"><em>Carefully register a trainer</em></p>
          <form class="">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter trainers first name">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter trainers last name">
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" id="" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="number" class="form-control" id="" placeholder="Enter phone number">
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button class="btn btn-danger">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-3"></div>
  </div>
</div>
@endsection