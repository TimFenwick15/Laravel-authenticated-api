@extends('layouts.app')

@section('content')
  <div class="container">
    <table class='center'>
      <th>Name</th><th>Email</th><th>Member since</th>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->created_at }}</td>
        </tr>
      @endforeach
    </table>
    {{ $users->links() }}
  </div>
@endsection