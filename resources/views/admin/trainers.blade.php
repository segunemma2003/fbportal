@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All training sessions</h4>
                      <div class="table-responsive">
                        @if($users->isEmpty())
                        <h3>No Trainers registered yet
                        </h3>
                        @else
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                                User ID
                              </th>
                              <th>
                                Trainers name
                              </th>
                              <th>
                                Phone
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                City
                              </th>
                              <th>
                                Status
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                              <td class="py-1">
                              {{$loop->index+1}}
                              </td>
                              <td>
                                {{$user->first_name}} {{$user->last_name}}
                              </td>
                              <td>
                            {{$user->phone}}
                              </td>
                              <td>
                                {{$user->email}}
                              </td>
                              <td>
                                Aba
                              </td>
                              <td>
                                @if($user->verified==0)
                                {{'inactive'}}
                                @else
                                {{'active'}}
                                @endif
                              </td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection