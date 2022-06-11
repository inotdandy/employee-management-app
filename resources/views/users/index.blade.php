@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>
    <div class="row mx-auto justify-content-center">
        <div class="card">
            @if(Session::has('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            @endif
            @if(Session::has('error'))
              <div class="alert alert-danger">
                {{ Session::get('error') }}
              </div>
            @endif
            <div class="card-header d-flex justify-content-between align-items-center">
              <form class="form-inline" method="GET" action="{{route('user.index')}}">
                <div class="form-group mb-2">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control p-2" id="search" name="search">
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-2">Search</button>
              </form>
                <a href="{{route('user.create')}}" class="float-right">Create User</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)    
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->username}}</td>
                            <td>{{$user->lname}}</td>
                            <td>{{$user->fname}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                              <a href="{{route('user.edit', $user)}}" class="btn btn-success">Edit/Delete</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection