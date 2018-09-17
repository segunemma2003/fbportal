@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All training sessions</h4>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                                Session ID
                              </th>
                              <th>
                                Trainers name
                              </th>
                              <th>
                                Expected Nos
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
                            </tr>
                          </thead>
                          <tbody>
                            @if($sessions->isEmpty())
                            <tr>
                              there are no orders
                            </tr>
                            @else
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
                                {{$session->trainnig}}
                              </td>
                              <td>
                                {{$session->time}}
                              </td>
                              <td>
                                @if($session->status==0)
                                 {{'Pending'}}
                                @elseif($session->status==1)
                                {{'Granted'}}
                                @else
                                {{'Rejected'}}
                                @endif
                              </td>
                              @if($session->status==1)
                              <td>
                                <a class="btn btn-primary" href="{{route('report', $session->id)}}">Submit Report</a>
                              </td>
                              @endif
                              
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection