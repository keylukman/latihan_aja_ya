@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
    	<th>ID</th>
    	<th>Nama </th>
    	<th>Telepon </th>
    	<th>Fax </th>
        <th>Email </th>
        <th>Alamat </th>
        <th>option</th>
    </thead>
    <tbody>
    	@foreach ($customer as $u)
    	<tr>
	    	<td>{{ $u->id_cus }}</td>
	    	<td>{{ $u->namacus }}</td>
	    	<td>{{ $u->tlpcus }}</td>
            <td>{{ $u->faxcus }}</td>
            <td>{{ $u->emailcus }}</td>
            <td>{{ $u->alamatcus }}</td>
	    	<td>{!! HTML::decode(link_to('customer/'.$u->id_cus.'/show', '<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-info')))!!}  {!! HTML::decode(link_to('customer/'.$u->id_cus.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('user/'.$u->id.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
</div>
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection