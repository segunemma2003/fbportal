@extends('layouts.dashboard.masters')
@section('content')
<div class="content-wrapper">
  <div class="row">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="">Download Resources</h2>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">BYB IGHUB :</p>
                          <p class="mb-0 ellipsis">Participants attendance sheet</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Use this to collect total attendance of all participants onsite.
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">Send as report</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group ">
                          <a href="{{asset('byb/trainningregister2.docx')}}" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false">
                            Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">BYB IGHUB :</p>
                          <p class="mb-0 ellipsis">Invoice</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Always send when requesting for payment.
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">Send to admin</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                        <a href="{{asset('byb/trainninginvoice2.docx')}}" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false">
                            Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">BYB IGHUB :</p>
                          <p class="mb-0 ellipsis">Introduction Letter</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Carefully go through the letter
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">Follow strictly</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                        <a href="{{asset('byb/introduction.docx')}}" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false">
                            Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">BYB IGHUB :</p>
                          <p class="mb-0 ellipsis">Training slides</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Follow this slide during any of the BYB facebook training
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">Follow strictly</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                        <a href="{{asset('byb/attendance.xlsx')}}" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false">
                            Download
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3">
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">BYB IGHUB :</p>
                          <p class="mb-0 ellipsis">Trainees feedback form</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Use this to aggregate trainees feedback about your session
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">Send as report</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                        <a href="{{asset('byb/feedback.pdf')}}" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false">
                            Download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
</div>

@endsection