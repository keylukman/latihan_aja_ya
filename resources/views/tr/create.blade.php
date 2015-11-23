@extends('layout')
@section('content')
<h1>Masukan Data Pembelian Trendmicro</h1>

<form method="POST" action="{{ url('/tr/store') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
 <div class="form-group">
 <label for="id_cus">Customer </label>
       <label for="id_cus">Customer </label>
      <select class="form-control" name="id_cus">
      @foreach($customer as $cust)
        <option value="{{ $cust->id_cus }}" 
        >{{ $cust->namacus }}</option>
      @endforeach
      </select>
     
    </div>
   <div class="form-group">
      <label for="licensetr">Jenis license Yang Di Beli </label>
      <input type="text" class="form-control" id="licensetr" name="licensetr" placeholder="License yang dibeli ">
     
    </div>
     <div class="form-group">
      <label for="qtytr">Banyaknya License </label>
      <input type="text" class="form-control" id="qtytr" name="qtytr" placeholder="Banyak License">
    </div>
    <div class="form-group">
        <label for="starttr">Awal Beli License </label>
        <input type="text" class="form-control" id="starttr" name="starttr" placeholder="Awal Beli License ">
      </div>
    <div class="form-group">
      <label for="end">Masa Berlaku License</label>
      <input type="text" class="form-control" id="endtr" name="endtr" placeholder="Masa Berlaku License">
    </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection