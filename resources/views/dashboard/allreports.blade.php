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
                            <tr>
                              <td class="py-1">
                              1
                              </td>
                              <td>
                                Bamidele Segun
                              </td>
                              <td>
                                266
                              </td>
                              <td>
                                2018-6-8
                              </td>
                              <td>
                                9am
                              </td>
                              <td>
                                Approved
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
                                  266
                              </td>
                              <td>
                                2018-6-8
                              </td>
                              <td>
                                9am
                              </td>
                              <td>
                                Declined
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