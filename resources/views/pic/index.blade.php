@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <th>ID</th>
    	<th>Nama </th>
    	<th>Telepon </th>
        <th>Email </th>
        <th>Petugas</th>
        <th>Option</th>
    </thead>
    <tbody>
    	@foreach ($pic as $u)
    	<tr>
            <td>{{ $u->idpic }}</td>
	    	<td>{{ $u->customer->namacus }}</td>
	    	<td>{{ $u->namapic }}</td>
	    	<td>{{ $u->tlppic }}</td>
            <td>{{ $u->emailpic }}</td>
            <td>{{ $u->nmptgs }}</td>
            
           
	    	<td>{!! HTML::decode(link_to('pic/'.$u->idpic.'/edit','<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('pic/'.$u->idpic.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
</div>
@endsection