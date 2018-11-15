@extends('layouts.dashboard.admin.master')
@section('content')
<div class="content-wrapper">
          <div>
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h2>Payments Notification</h2>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                                Invoice ID
                              </th>
                              <th>
                                User ID
                              </th>
                              <th>
                                Trainers name
                              </th>
                              <th>
                                Approved  Nos
                              </th>
                              <th>
                                Actual earning
                              </th>
                              <th>
                                Training date
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
                            <tr>
                              <td class="py-1">
                              BYB001
                              </td>
                              <td>
                                1
                              </td>
                              <td>
                                Bamidele Segun
                              </td>
                              <td>
                                80
                              </td>
                              <td>
                                N 30,000
                              </td>
                              <td>
                                1-11-2018
                              </td>
                              <td>
                                Unpaid
                              </td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-success btn-sm aria-haspopup="true" aria-expanded="false">
                                    Pay
                                  </button>
                                <!--   <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-reply fa-fw"></i>Pay</a>
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-history fa-fw"></i>Disapprove</a>
                                  </div> -->
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="py-1">
                              BYB001
                              </td>
                              <td>
                                1
                              </td>
                              <td>
                                Bamidele Segun
                              </td>
                              <td>
                                80
                              </td>
                              <td>
                                N 30,000
                              </td>
                              <td>
                                1-11-2018
                              </td>
                              <td>
                                Unpaid
                              </td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-success btn-sm aria-haspopup="true" aria-expanded="false">
                                    Pay
                                  </button>
                                <!--   <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-reply fa-fw"></i>Pay</a>
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-history fa-fw"></i>Disapprove</a>
                                  </div> -->
                                </div>
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