@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <th>ID</th>
    	<th>Customer </th>
    	<th>Jenis License  </th>
        <th>Banyaknya</th>
        <th>Mulai Membeli </th>
        <th>masa berlaku</th>
        <th>Option</th>
    </thead>
    <tbody>
    	@foreach ($tr as $u)
    	<tr>
            <td>{{ $u->idtr }}</td>
	    	<td>{{ $u->customer->namacus }}</td>
            <td>{{ $u->licensetr }}</td>
            <td>{{ $u->qtytr }}</td>
            <td>{{ $u->starttr }}</td>
            <td>{{ $u->endtr }}</td>
	    	<td>{!! HTML::decode(link_to('tr/'.$u->idtr.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('tr/'.$u->idtr.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
</div>
@endsection