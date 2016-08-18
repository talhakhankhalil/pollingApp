@extends('layout.newsfeedMaster')


@section('contentnewsfeed')


<div class="row">
    <div class="col-sm-12">
        <div style="padding:20px 0px"></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Session</th>
                        <th>Date</th>
                        <th>Attendence</th>
                    </tr>
                </thead>
                <tbody>
                   
                   @foreach($attendence as $single)
                    <tr>
                        <td>{{$single->sno}}</td>
                        <td>{{$single->session}}</td>
                        <td>{{$single->date_of_attendence}}</td>
                        <td>{{$single->attendence}}</td>
                    </tr>
                   @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection