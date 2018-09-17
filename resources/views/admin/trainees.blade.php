@extends('layouts.dashboard.admin.master')
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
                            <tr>
                              <td class="py-1">
                              1
                              </td>
                              <td>
                                Bamidele Segun
                              </td>
                              <td>
                                07031362300
                              </td>
                              <td>
                                kreativejosh@gmail.com
                              </td>
                              <td>
                                Aba
                              </td>
                              <td>
                                active
                              </td>
                            </tr>
                            <tr>
                              <td class="py-1">
                                1
                              </td>
                              <td>
                                Bamidele Segun
                              </td>
                              <td>
                                  07036074665
                              </td>
                              <td>
                                textnature@gmail.com
                              </td>
                              <td>
                                Aba
                              </td>
                              <td>
                                inactive
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
@endsection