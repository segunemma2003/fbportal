@extends('layouts.dashboard.admin.master')
@section('content')
    <table class="table table-bordered">
      <tr>
        <th>
            Name of reporter
        </th>
        <td>
          {{$report->session->user->first_name}}
        </td>
    </tr>
    <tr>
        <th>
            Name of Organisation
        </th>
        <td>
          {{$report->session->name_organisation}}
        </td>
      </tr>

      <tr>
        <th>
            Expected Number of Attendance
        </th>
        <td>
          {{$report->session->expected}}
        </td>
    </tr>
    <tr>
        <th>Trainning Date</th>
        <td>
          {{$report->trainning_date}}
        </td>
    </tr>
    <tr>
        <th>Time of Trainning</th>
        <td>
            {{$report->session->time}}
        </td>
    </tr>
    <tr>
        <th>Are they partners?</th>
        <td>
            {{$report->partner}}
        </td>
    </tr>
    <tr>
        <th>Venue</th>
        <td>
            {{$report->venue}}
        </td>
    </tr>
    <tr>
        <th>Level of trainning</th>
        <td>
            {{$report->level}}
        </td>
    </tr>
    <tr>
        <th>Were The press present?</th>
        <td>
            {{$report->press}}
        </td>
    </tr>
    <tr>
        <th>Number of Females</th>
        <td>
            {{$report->females}}
        </td>
    </tr>
    <tr>
        <th>Number of Males</th>
        <td>
            {{$report->male}}
        </td>
    </tr>
    <tr>
        <th>Number of Facebook users</th>
        <td>
            {{$report->facebook}}
        </td>
        <td>
            {{$report->newfacebook}}
        </td>
        <td>
            {{$report->instagram}}
        </td>
        <td>
            {{$report->newinstagram}}
        </td>
        <td>
            {{$report->whatsapp}}
        </td>
        <td>
            {{$report->question}}
        </td>
        <td>
            {{$report->allquestion}}
        </td>
        <td>
            {{$report->trainer_feedback}}
        </td>
        <td>
            {{$report->assistance}}
        </td>
        <td>
            {{$report->answer}}
        </td>
        <td>
            {{$report->googledrivelink}}
        </td>
        <td>
            {{$report->pictureslink}}
        </td>
      </tr>
    </table>
 @endsection