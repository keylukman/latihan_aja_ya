@extends('layout')
@section('content')
<h1>Masukan Data User</h1>

<form method="POST" action="{{ url('/kas/store') }}">
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
      <label for="license">Jenis license Yang Di Beli </label>
      <input type="text" class="form-control" id="license" name="license" placeholder="License yang dibeli ">
     
    </div>
     <div class="form-group">
      <label for="qty">Banyaknya License </label>
      <input type="text" class="form-control" id="qty" name="qty" placeholder="Banyak License">
    </div>
    <div class="form-group">
        <label for="start">Awal Beli License </label>
        <input type="text" class="form-control" id="start" name="start" placeholder="Awal Beli License ">
      </div>
    <div class="form-group">
      <label for="end">Masa Berlaku License</label>
      <input type="text" class="form-control" id="end" name="end" placeholder="Masa Berlaku License">
    </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection