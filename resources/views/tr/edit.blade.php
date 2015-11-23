@extends('layout')
@section('content')
<h1>Masukan Data Pembelian Trendmicro</h1>

<form method="POST" action="{{ url('/tr/'.$data['tr']->idtr.'/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
 <div class="form-group">
      <label for="id_cus">Customer </label>
      <select class="form-control" name="id_cus">
      @foreach($data['cust'] as $cust)
        <option value="{{ $cust->id_cus }}" 
        @if ($cust->id_cus = $data['tr']->idtr)
          selected 
        @endif
        >{{ $cust->namacus }}</option>
      @endforeach
      </select>
    </div>
   <div class="form-group">
      <label for="licensetr">Jenis license Yang Di Beli </label>
      <input type="text" class="form-control" id="licensetr" name="licensetr" value="{{$data['tr']->licensetr}}" placeholder="License yang dibeli ">
     
    </div>
     <div class="form-group">
      <label for="qtytr">Banyaknya License </label>
      <input type="text" class="form-control" id="qtytr" name="qtytr" value="{{$data['tr']->qtytr}}"placeholder="Banyak License">
    </div>
    <div class="form-group">
        <label for="starttr">Awal Beli License </label>
        <input type="text" class="form-control" id="starttr" name="starttr" value="{{$data['tr']->starttr}}"placeholder="Awal Beli License ">
      </div>
    <div class="form-group">
      <label for="end">Masa Berlaku License</label>
      <input type="text" class="form-control" id="endtr" name="endtr" value="{{$data['tr']->endtr}}"placeholder="Masa Berlaku License">
    </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection