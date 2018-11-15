@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
    <div class="row">
		<div class="col-md-12">
			<div class="my-card">
				<div class="alert alert-success" role="alert">
  					<h4 class="alert-heading">Before you proceed: Please note the following information</h4>
  					<hr>
  					<ol>
  					    <li><strong
  					    >Update your profile before you proceed!</strong></li>
  						<li>Carefully check the information you enter while booking a session, </li>
  						<li>You can only book a session at least 7 days before the proposed date.</li>
  						<li>Remember to log in and check for the session approval before due date.</li>
  						<li>Reports are to be made within 24 hours of training.</li>
  					</ol>
				</div>
			</div>
		</div>
	</div>
	
		<div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Approved earning</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">N 0</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> For recent training
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total of trainees</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">0</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> For current training
                  </p>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection