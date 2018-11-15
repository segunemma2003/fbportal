@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-2"></div>

    <div class="col-md-8">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="">Trainers profile</h2>
            <p class="card-description">
                    <em>Carefully check the information you're entering</em></p>
            <form class="forms-sample">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>First name</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Last name</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <div class="col-md-12">
                      <input type="Email" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>phone</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date of birth</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Street address</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Abia</option>
                        <option>Adamawa</option>
                        <option>Anambra</option>
                        <option></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Upload identity picture</label>
                <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="file" class="form-control file-upload-info"  placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-success" type="button">Upload</button>
                    </span>
                  </div>
              </div>

              <div class="form-group">
                <label for="cert">Update Digital Certifications</label>
                <textarea class="form-control" id="cert" rows="10"></textarea>
              </div>

              &nbsp;
              &nbsp;
              <hr>
              &nbsp;
              &nbsp;
              <h3>Next of kin</h3>
              &nbsp;
              &nbsp;
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Last name</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>First name</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <div class="col-md-12">
                      <input type="Email" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>phone</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Relationship</label>
                    <div class="col-md-12">
                      <input type="Email" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              &nbsp;
              &nbsp;
              <h3>Bank details</h3>
              &nbsp;
              &nbsp;

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Account name</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Account number</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Bank</label>
                    <div class="col-md-12">
                      <input type="Email" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>BVN</label>
                    <div class="col-md-12">
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-success mr-2">Save</button>
              <button class="btn btn-light">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
	</div>
</div>
@endsection