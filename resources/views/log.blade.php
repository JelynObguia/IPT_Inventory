@extends('navbar')

@section('content')
<div class="m-5">
    <div class="d-grid gap-2 md-flex">
        <h1>Activity Log</h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <th>Timestamp</th>
            <th>Log Entry</th>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->log_entry}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection