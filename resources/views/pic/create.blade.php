@extends('layout')
@section('content')
<h1>Data Pic</h1>

<form method="POST" action="{{ url('/pic/store') }}">
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
      <label for="namapic">Nama PIC</label>
      <input type="text" class="form-control" id="namapic" name="namapic" placeholder="nama Pic">
    </div>
     <div class="form-group">
      <label for="tlppic">Telepon PIC </label>
      <input type="text" class="form-control" id="tlppic" name="tlppic" placeholder="telepon PIC">
    </div>
    <div class="form-group">
        <label for="emailpic">email PIC </label>
        <input type="text" class="form-control" id="emailpic" name="emailpic" placeholder="Email PIC">
      </div>
      <div class="form-group">
        <label for="namatgs">Penanggung Jawab </label>
        <input type="text" class="form-control" id="namatgs" name="namaptgs" placeholder="Petanggung Jawab">
      </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection