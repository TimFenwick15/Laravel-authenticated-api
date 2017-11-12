@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($data['status'])
    <table class='center'>
      <th>Temperature</th><th>Light</th><th>Time Recorded</th>
      <tr>
        <td>{{ $data['temperature'] }} &deg;C</td>
        <td>{{ $data['light'] }} arbitary units</td>
        <td>{{ $data['time'] }}</td>
      </tr>
    </table>
    @else
      This user has no device connected
    @endif
  </div>
@endsection