@extends('layout')
@section('content')
<h1>Masukan Data Pembelian  Microsoft</h1>

<form method="POST" action="{{ url('/ms/'.$data['ms']->idms.'/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
  <div class="form-group">
      <label for="id_cus">Customer </label>
      <select class="form-control" name="id_cus">
      @foreach($data['cust'] as $cust)
        <option value="{{ $cust->id_cus }}" 
        @if ($cust->id_cus = $data['ms']->idms)
          selected 
        @endif
        >{{ $cust->namacus }}</option>
      @endforeach
      </select>
    </div>
   <div class="form-group">
      <label for="nmpro">Jenis Product Yang Di Beli </label>
      <input type="text" class="form-control" id="nmpro" name="nmpro" value="{{$data['ms']->nmpro}}"  placeholder="Jenis Product Yang Di Beli">
    </div>
    <div class="form-group">
      <label for="qtyms">Banyak license Yang Di Beli </label>
      <input type="text" class="form-control" id="qtyms" name="qtyms" value="{{$data['ms']->qtyms}}"  placeholder="Banyak license Yang Di Beli ">
    </div>
     <div class="form-group">
      <label for="typems">Jenis License </label>
      <input type="text" class="form-control" id="typems" name="typems" value="{{$data['ms']->typems}}"  placeholder="Jenis License">
    </div>
    <div class="form-group">
        <label for="startms">Awal Beli License </label>
        <input type="text" class="form-control" id="startms" name="startms" value="{{$data['ms']->startms}}"  placeholder="Awal Beli License ">
      </div>
    <div class="form-group">
      <label for="endms">Masa Berlaku License</label>
      <input type="text" class="form-control" id="endms" name="endms" value="{{$data['ms']->endms}}"  placeholder="Masa Berlaku License">
    </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection