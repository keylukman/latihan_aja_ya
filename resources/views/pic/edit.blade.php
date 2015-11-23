@extends('layout')
@section('content')
<h1>Data Pic</h1>

<form method="POST" action="{{ url('/pic/'.$data['pic']->idpic.'/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="form-group">
      <label for="id_cus">Customer </label>
      <select class="form-control" name="id_cus">
      @foreach($data['cust'] as $cust)
        <option value="{{ $cust->id_cus }}" 
        @if ($cust->id_cus = $data['pic']->idpic)
          selected 
        @endif
        >{{ $cust->namacus }}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="namapic">Nama PIC</label>
      <input type="text" class="form-control" id="namapic" name="namapic" value="{{$data['pic']->namapic}}" placeholder="nama Pic">
    </div>
     <div class="form-group">
      <label for="tlppic">Telepon PIC </label>
      <input type="text" class="form-control" id="tlppic" name="tlppic" value="{{$data['pic']->tlppic}}" placeholder="telepon PIC">
    </div>
    <div class="form-group">
        <label for="emailpic">email PIC </label>
        <input type="text" class="form-control" id="emailpic" name="emailpic" value="{{$data['pic']->emailpic}}" placeholder="Email PIC">
      </div>
      <div class="form-group">
        <label for="namatgs">Penanggung Jawab </label>
        <input type="text" class="form-control" id="namatgs" name="namatgs" value="{{$data['pic']->namatgs}}" placeholder="Petanggung Jawab">
      </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection