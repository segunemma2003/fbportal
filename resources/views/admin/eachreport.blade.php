@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title text-center">{{$report->session->name_organisation}}'s Report</h2>
                      <form class="form-sample" method="post" >
                        @csrf
                        <div id="dvContainer">
                        <p class="card-description text-center">
                          This form is to be submitted not later than 24 hours after your training.
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control"  value="{{$report->session->user->first_name}}" readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$report->session->user->last_name}}" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="email" value="{{$report->session->user->email}}" readonly/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Was the session exclusively for partners?</label>
                                <div class="col-sm-4">
                                  <div class="form-radio">
                                    <label class="form-check-label"></label>
                                      <input type="text" class="form-check-input" name="partner" id="membershipRadios1" value="{{$report->partner}}" readonly>
                                  </div>
                                <!-- </div>
                                <div class="col-sm-5">
                                  <div class="form-radio">
                                    <label class="form-check-label"></label>
                                      <input type="radio" class="form-check-input" name="partner" id="membershipRadios2" value="no"> No
                                    
                                  </div>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name of organisation</label>
                              <div class="col-sm-9">
                                <input type="text" name="name_organisation" class="form-control" value="{{$report->session->name_organisation}}" readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date of training</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="trainning_date" value="{{$report->session->trainnig}}" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Location</label>
                              <div class="col-sm-9">
                                <input class="form-control" value="{{$report->session->location}}" readonly>
                                  <!-- <option>Aba south</option>
                                  <option>Aba North</option>
                                  <option>Osisioma</option>
                                  <option>Obingwa</option> -->
                                <!-- </select> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name of venue</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="venue" value="{{$report->session->venue}}" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Level of training</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="level" value="{{$report->level}}" readonly>
                              </div>
                              </div>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Was there any presss present?</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="press" value="{{$report->press}}" readonly>
                              </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Number of attendees (Female)</label>
                                <div class="col-sm-9">
                                  <input  class="form-control" name="females" readonly value="{{$report->females}}"/>
                                </div>
                              </div>
                            </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Number of attendees (Male)</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="male" value="{{$report->male}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number of Attendees who already use Facebook Pages</label>
                                  <div class="col-sm-9">
                                    <input class="form-control" name="facebook" readonly value="{{$report->facebook}}"/>
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number of new Facebook Pages created during your session</label>
                                <div class="col-sm-9">
                                  <input class="form-control" name="newfacebook"  readonly value="{{$report->newfacebook}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class=" col-form-label">Number of Attendees who already use Instagram for Business</label>
                                    <div class="col-sm-9">
                                      <input  class="form-control" name="instagram" readonly value="{{$report->instagram}}"/>
                                    </div>
                                  </div>
                                </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Number of new Instagram Business Pages created during your session. </label>
                                  <div class="col-sm-9">
                                    <input class="form-control"  name="newinstagram" readonly value="{{$report->newinstagram}}"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Number of Attendees who already use WhatsApp for Business Application</label>
                                    <div class="col-sm-9">
                                      <input  class="form-control" name="whatsapp" readonly value="{{$report->whatsapp}}"/>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Were there questions that came up during session that you were unable to answer or required follow up? </label>
                                    <div class="col-sm-9">
                                      <input class="form-control" name="question" readonly value="{{$report->question}}">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Question</label>
                                      <small>Itemize your questions</small>
                                        <div class="col-sm-9">
                                          <textarea class="form-control" id="exampleTextarea1" rows="2" name="allquestion" value="{{$report->allquestion}}" readonly>{{$report->allquestion}}</textarea>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Answer</label>
                                      <small>Attach the index number question you answering</small>
                                      <div class="col-sm-9">
                                        <textarea class="form-control" id="exampleTextarea1" rows="2" name="answer" value="{{$report->answer}}" readonly>{{$report->answer}}</textarea>
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="row">
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
                                  </div> -->
                                  <p>Were there Small and Medium Sized Businesses (SMBs) you think would make an interesting case study? </p>
                                  <p>(Criteria must include those who are using at least one FB platform within their business function, whether it be for marketing, sales, brand awareness, etc)</p>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Please provide some overall feedback about the session</label>
                                          <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="trainer_feedback" value="{{$report->trainer_feedback}}" readonly>{{$report->trainer_feedback}}</textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Please provide comments on areas the Partner or Facebook can help to improve future sessions?</label>
                                            <div class="col-sm-9">
                                              <textarea class="form-control" id="exampleTextarea1" rows="4" name="assistance" value="{{$report->assistance}}" readonly>{{$report->assistance}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="" name="googledrivelink" readonly value="{{$report->googledrivelink}}">
                                                  <label class="" for="customFileLang">type link to your attendance sheet(Excel file) on google drive</label>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">type link to training photos</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" name="pictureslink" value="{{$report->pictureslink}}" readonly/>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    
                                        <legend>This is for the Admin</legend>
                                        <hr>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Feedback</label>
                                                <div class="col-sm-9">
                                                    <textarea  class="form-control" name="reply" rows="2" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                
                                      <div class="col-md-6">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><h4>Status</h4></label>
                                              <div class="col-sm-9">
        
                                                <input type="radio" class="form-control" name="status"  value="1"/>Approved
                                                <input type="radio" class="form-control" name="status"  value="2"/>Rejected  
                                              </div>
                                          </div>
                                          
                                      </div>
                                    </div>
                                
                                  
                                    <div class="row">
                                      <button class="btn btn-success btn-block" style="margin: auto;width: 300px;">Send Report
                                        <i class=""></i>
                                      </button>
                                    </div>
                            </div>
                      </form>
                    </div>
                    <a class="btn btn-primary" href="{{route('admin.single.export',$report->id)}}" id="">Print in excel</a>
                    
                     <a class="btn btn-primary" href="{{route('admin.pdf',$report->id)}}" id="">Print in pdf format</a>
                  </div>
            </div>
          </div>
        </div>
      
@endsection