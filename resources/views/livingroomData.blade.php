@extends('layouts.app')

@section('content')
  <div class="container">
    <table class='center'>
      <th>Temperature</th><th>Light</th><th>Time Recorded</th>
      <tr>
        <td>{{ $temperature }}</td>
        <td>{{ $light }}</td>
        <td>{{ $time }}</td>
      </tr>
    </table>
  </div>
@endsection