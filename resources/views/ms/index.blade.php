@extends('layout')
@section('content')
<h1> Daftar User</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <th>ID</th>
        <th>Customer</th>
        <th>Nama Produk </th>
        <th>Banyaknya</th>
        <th>Type License</th>
        <th>Mulai Membeli </th>
        <th>masa berlaku</th>
        <th>Option</th>
    </thead>
    <tbody>
        @foreach ($ms as $u)
        <tr>
            <td>{{ $u->idms}}</td>
            <td>{{ $u->customer->namacus }}</td>
            <td>{{ $u->nmpro }}</td>
            <td>{{ $u->qtyms }}</td>
            <td>{{ $u->typems }}</td>
            <td>{{ $u->startms }}</td>
            <td>{{ $u->endms }}</td>
           
            
           
            <td>{!! HTML::decode(link_to('ms/'.$u->idms.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('ms/'.$u->idms.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection