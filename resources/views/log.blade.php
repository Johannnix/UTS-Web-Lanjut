@extends('layout.app')
@section('content')
<div class="dashboard">
    <div class="kotakTambah">
        <h1>Log Audit</h1>
    </div>
    <div class="dashboardContent">
        <table class="tableData">
            <thead>
                <tr>
                    <th class="db">#</th>
                    <th class="db">IP Address</th>
                    <th class="db">Location</th>
                    <th class="db">Login at</th>
                    <th class="db">Login Successfully</th>
                    <th class="db">Logout at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($log as $key => $item)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td class="db">{{ $item->ip_address }}</td>
                        <td class="db">{{ json_decode($item->location)->city }}</td>
                        <td class="db">{{ Carbon\Carbon::parse($item->login_at)->isoFormat('D MMMM YYYY h:mm A') }}</td>
                        <td class="db">{{ $item->login_successful === true ? 'Yes' : 'No' }}</td>
                        <td class="db">{{ $item->logout_at === NULL ? '-' : Carbon\Carbon::parse($item->logout_at)->isoFormat('D MMMM YYYY h:mm A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
