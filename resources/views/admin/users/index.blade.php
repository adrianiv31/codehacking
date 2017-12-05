@extends('layouts.admin')


@section('content')

    <h1>Users</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
        <th scope="col">Photo</th>
      <th scope="col">Name</th>
       <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Status</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
    </tr>
  </thead>
  <tbody>
  @if($users)
      @foreach($users as $user)
  <tr>
      <th scope="row">{{$user->id}}</th>
      <th scope="row"><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></th>
      <td scope="row"><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
      <td scope="row">{{$user->email}}</td>
      <td scope="row">{{$user->role->name}}</td>
      <td scope="row">{{$user->is_active==1?'Active':'Not Active'}}</td>
      <td scope="row">{{$user->created_at->diffForHumans()}}</td>
      <td scope="row">{{$user->updated_at->diffForHumans()}}</td>
    </tr>

  @endforeach
    @endif
  </tbody>
</table>

@endsection