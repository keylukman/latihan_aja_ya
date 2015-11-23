@extends('layout')
@section('content')
<h1>Masukan Data User</h1>

<form method="POST" action="{{ url('/user/'.$user->id.'/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" disabled value="{{$user->username}}" placeholder="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" disabled value="{{$user->password}}" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="passwordconfimation">Ketik Ulang Password</label>
    <input type="password" class="form-control" id="passwordconfimation" name="passwordconfimation" disabled value="{{$user->password}}"placeholder="Ketik deui password">
  </div>
   <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{$user->nama}}" placeholder="nama">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection