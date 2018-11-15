@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All training reports</h4>
                      @if(count($reports)<'1')
                      <div class="alert alert-danger">
                        No Report Yet!!!
                      </div>
                      @else
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                              No
                              </th>
                              <th>
                                Trainers name
                              </th>
                              <th>
                                Expected Nos
                              </th>
                              <th>
                                Date/Time Submitted
                              </th>
                              <th>
                                Venue
                                </th>
                              <th>
                                Status
                              </th>
                              <th>
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($reports as $report)
                            <tr>
                              <td class="py-1">
                              {{$loop->index+1}}
                              </td>
                              <td>
                                {{$report->session->user->first_name}} {{$report->session->user->last_name}}
                              </td>
                              <td>
                                {{$report->session->expected}}
                              </td>
                              <td>
                                {{$report->created_at}}
                              </td>
                              <td>
                              {{$report->session->venue}}
                              </td>
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
                                <a class="btn btn-primary btn-lg" href="{{ route('admin.eachreport',$report->id) }}">Manage</a>
                              </td>
                              <!-- <td>
                                <div class="btn-group dropdown">
                                  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-reply fa-fw"></i>Approve</a>
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-history fa-fw"></i>Disapprove</a>
                                  </div>
                                </div>
                              </td> -->
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <a href="{{route('admin.export') }}" class="btn btn-lg btn-success">Download all reports in excel</a>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection