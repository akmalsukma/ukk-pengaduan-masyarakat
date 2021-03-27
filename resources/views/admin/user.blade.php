@extends('layouts.admin')

@section('content')
<div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">User Table</h3>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
              <th scope="col">NIK</th>
              <th scope="col">Name</th>
              <th scope="col">No Telpon</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $key=>$user)
            <tr>
                <td>{{$key +1}}</td>
                <td scope="row">{{$user->nik}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->telp}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->role}}</td>
            </tr>       
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection