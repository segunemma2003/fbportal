@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All training sessions</h4>

                      <div class="table-responsive">
                        @if($sessions->isEmpty() )
                        <h2>No records yet</h2>
                        @else
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
                                  Venue
                              </th>
                                <th>
                                    Location
                                </th>
                              <th>
                                Training date
                              </th>
                              <th>
                                Training time
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
                            @foreach($sessions as $session)
                            <tr>
                              <td class="py-1">
                              {{$loop->index+1}}
                              </td>
                              <td>
                              {{$session->user->first_name}} {{$session->user->last_name}}
                              </td>
                              <td>
                                {{$session->expected}}
                              </td>
                              <td>
                                  {{$session->venue}}
                              </td>
                               <td>
                                  {{$session->location}}
                              </td>
                              <td>
                                {{$session->trainnig}}
                              </td>
                              <td>
                                {{$session->time}}
                              </td>
                              <td>
                                @if($session->status==0)
                                {{'pending'}}
                                @elseif($session->status==1)
                                {{'accepted'}}
                                @else
                                {{'rejected'}}
                                @endif
                              </td>
                              <td>
                                <div class="btn-group dropdown">
                                  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('session.decision',[$session->id,1])}}">
                                      <i class="fa fa-reply fa-fw"></i>Approve</a>
                                    <a class="dropdown-item" href="{{route('session.decision',[$session->id,2])}}">
                                      <i class="fa fa-history fa-fw"></i>Disapprove</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection