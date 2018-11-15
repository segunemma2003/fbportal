@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All training sessions</h4>
                      @if(count($reports)<1)
                        <div class="alert alert-danger">
                        You have no reports yet
                        </div>
                      @else
                       
                              <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>
                                        No
                                      </th>
                                      <!-- <th>
                                        Trainers name
                                      </th> -->
                                      <th>
                                        Session
                                      </th>
                                      <th>
                                        Date and time Submitted
                                      </th>
                                      <!-- <th>
                                        Training time
                                      </th> -->
                                      <th>
                                        Status
                                      </th>
                                      <th>
                                        feedback
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                    @foreach($reports as $report)
                                    
                                        @if($report->session->user_id == $id)
                                            @if(!$report)
                                            <div class="alert alert-danger">
                                            You have no reports yet
                                            </div>
                                            @else
                                              
                                            <tr>
                                                  <td class="py-1">
                                                  {{$loop->iteration}}
                                                  </td>
                                                  <td>
                                                    {{$report->session->name_organisation}}
                                                  </td>
                                                  <td>
                                                    {{$report->created_at}}
                                                  </td>
                                                  <!-- <td>
                                                    9am
                                                  </td> -->
                                                  <td>
                                                    @if($report->status=='0')
                                                      pending
                                                    @elseif($report->status=='1')
                                                      Approved
                                                    @else
                                                      Disaaproved
                                                    @endif
                                                  </td>
                                                  <td>
                                                    {{$report->reply or 'No feedback yet'}}
                                                  </td>
                                                </tr>
                                        @endif
                                        @endif
                                    @endforeach
                                                
                                              </tbody>
                                            </table>
                                          </div>
                    @endif
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection