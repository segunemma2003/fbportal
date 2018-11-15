@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title text-center">Schedule a training session</h2>

                      @foreach($errors->all() as $error)
                      <div class="alert alert-danger">{{$error}}</div>
                      
                      @endforeach
                      <form class="form-sample" method="post">
                        @csrf     
                        <p class="card-description text-center">
                            Please note that you are to fill this form a minimum of 7 days before your proposed date
                        </p>
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$user->first_name}}" readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$user->last_name}}" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" value="{{$user->email}}" readonly/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name of organisation</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="name_organisation"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Expected No of participants</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="expected"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Training Venue</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="venue"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Proposed LGA</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="location">
                                  <option>Aba South</option>
                                  <option>Aba North</option>
                                  <option>Arochukwu</option>
                                  <option>Bende</option>
                                  <option>Ikwuano</option>
                                  <option>Isiala Ngwa North</option>
                                  <option>Isiala Ngwa South</option>
                                  <option>Isiukwuato</option>
                                  <option>Obingwa</option>
                                  <option>Ohafia</option>
                                  <option>Osisioma Ngwa</option>
                                  <option>Ugwunagbo</option>
                                  <option>Ukwa East</option>
                                  <option>Ukwa West</option>
                                  <option>Umuahia North</option>
                                  <option>Umuahia South</option>
                                  <option>Umunneochi</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Proposed training date</label>
                              <div class="col-sm-9">
                                <input class="form-control" type="date" name="trainnig"/>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Proposed time</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" type="time" name="time"/>
                              </div>
                            </div>
                          </div>
                          +
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label"></label>
                              <div class="col-sm-9">

                                <button class="btn btn-success btn-block">Book session
                                  <i class=""></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection
