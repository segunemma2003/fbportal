@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title text-center">Submit training report</h2>
                      <form class="form-sample">
                        <p class="card-description text-center">
                          This form is to be submitted not later than 24 hours after your training.
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control"  value="{{$user->first_name}}" readonly/>
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
                                  <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Was the session exclusively for partners?</label>
                                <div class="col-sm-4">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="yes" checked> Yes
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-5">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="no"> No
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">If yes name of organisation</label>
                              <div class="col-sm-9">
                                <input type="text" name="name_organisation" class="form-control"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date of training</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="date_training" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Location</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Aba south</option>
                                  <option>Aba North</option>
                                  <option>Osisioma</option>
                                  <option>Obingwa</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name of venue</label>
                              <div class="col-sm-9">
                                <input class="form-control"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Level of training</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Level 1</option>
                                  <option>Level 2</option>
                                </select>
                              </div>
                              </div>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Was there any presss present?</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Yes</option>
                                  <option>No</option>
                                </select>
                              </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Number of attendees (Female)</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"/>
                                </div>
                              </div>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Number of attendees (Male)</label>
                              <div class="col-sm-9">
                                <input class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number of Attendees who already use Facebook Pages</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control"/>
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number of new Facebook Pages created during your session</label>
                                <div class="col-sm-9">
                                  <input class="form-control" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class=" col-form-label">Number of Attendees who already use Instagram for Business</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control"/>
                                    </div>
                                  </div>
                                </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Number of new Instagram Business Pages created during your session. </label>
                                  <div class="col-sm-9">
                                    <input class="form-control" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Number of Attendees who already use WhatsApp for Business Application</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control"/>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Were there questions that came up during session that you were unable to answer or required follow up? </label>
                                    <div class="col-sm-9">
                                      <select class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Question</label>
                                        <div class="col-sm-9">
                                          <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Answer</label>
                                      <div class="col-sm-9">
                                        <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Question</label>
                                        <div class="col-sm-9">
                                          <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Answer</label>
                                        <div class="col-sm-9">
                                          <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <p>Were there Small and Medium Sized Businesses (SMBs) you think would make an interesting case study? </p>
                                  <p>(Criteria must include those who are using at least one FB platform within their business function, whether it be for marketing, sales, brand awareness, etc)</p>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Please provide some overall feedback about the session</label>
                                          <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Please provide comments on areas the Partner or Facebook can help to improve future sessions?</label>
                                            <div class="col-sm-9">
                                              <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                  <label class="custom-file-label" for="customFileLang">upload training attendance sheet(Excel file)</label>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">type link to training photos</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control"/>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <button class="btn btn-success btn-block" style="margin: auto;width: 300px;">Send Report
                                        <i class=""></i>
                                      </button>
                                    </div>
                      </form>
                    </div>
                  </div>
            </div>
          </div>
        </div>
@endsection