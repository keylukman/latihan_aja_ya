@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
    	<th>ID</th>
    	<th>username</th>
    	<th>nama</th>
    	<th>aksi</th>
    </thead>
    <tbody>
    	@foreach ($user as $u)
    	<tr>
	    	<td>{{ $u->id }}</td>
	    	<td>{{ $u->username }}</td>
	    	<td>{{ $u->nama }}</td>
	    	<td>{!! HTML::decode(link_to('user/'.$u->id.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('user/'.$u->id.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
</div>
@endsection