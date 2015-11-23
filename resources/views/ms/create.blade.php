@extends('layout')
@section('content')
<h1>Masukan Data Pembelian  Microsoft</h1>

<form method="POST" action="{{ url('/ms/store') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
  <div class="form-group">
      
     <label for="id_cus">Customer </label>
      <select class="form-control" name="id_cus">
      @foreach($customer as $cust)
        <option value="{{ $cust->id_cus }}" 
        >{{ $cust->namacus }}</option>
      @endforeach
      </select>
    </div>
   <div class="form-group">
      <label for="nmpro">Jenis Product Yang Di Beli </label>
      <input type="text" class="form-control" id="nmpro" name="nmpro" placeholder="Jenis Product Yang Di Beli">
    </div>
    <div class="form-group">
      <label for="qtyms">Banyak license Yang Di Beli </label>
      <input type="text" class="form-control" id="qtyms" name="qtyms" placeholder="Banyak license Yang Di Beli ">
    </div>
     <div class="form-group">
      <label for="typems">Jenis License </label>
      <input type="text" class="form-control" id="typems" name="typems" placeholder="Jenis License">
    </div>
    <div class="form-group">
        <label for="startms">Awal Beli License </label>
        <input type="text" class="form-control" id="startms" name="startms" placeholder="Awal Beli License ">
      </div>
    <div class="form-group">
      <label for="endms">Masa Berlaku License</label>
      <input type="text" class="form-control" id="endms" name="endms" placeholder="Masa Berlaku License">
    </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection