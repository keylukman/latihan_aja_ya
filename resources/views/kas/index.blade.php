@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <th>ID</th>
    	<th>Customer</th>
    	<th>Jenis License  </th>
        <th>Banyaknya</th>
        <th>Mulai Membeli </th>
        <th>masa berlaku</th>
        <th>Option</th>
    </thead>
    <tbody>
    	@foreach ($kas as $u)
    	<tr>
            <td>{{ $u->id_kas }}</td>
	    	<td>{{ $u->customer->namacus }}</td>
            <td>{{ $u->license }}</td>
            <td>{{ $u->qty }}</td>
            <td>{{ $u->start }}</td>
            <td>{{ $u->end }}</td>
	    	<td>{!! HTML::decode(link_to('kas/'.$u->id_kas.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('kas/'.$u->id_kas.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
</div>
@endsection