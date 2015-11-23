@extends('layout')
@section('content')
<h1>Edit Data Customer</h1>

<form method="POST" action="{{ url('/customer/'.$customer->idcus.'/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="form-group">
      <label for="namacus">Nama Customer</label>
      <input type="text" class="form-control" id="namacus" name="namacus" value="{{$customer->namacus}}" placeholder="namacus">
    </div>
     <div class="form-group">
      <label for="tlpcus">Telepon Customer </label>
      <input type="text" class="form-control" id="tlpcus" name="tlpcus" value="{{$customer->tlpcus}}" placeholder="tlpcus">
    </div>
      <div class="form-group">
        <label for="faxcus">Fax Customer </label>
        <input type="text" class="form-control" id="faxcus" name="faxcus" value="{{$customer->faxcus}}" placeholder="faxcus">
      </div>
      <div class="form-group">
        <label for="emailcus">emailCustomer </label>
        <input type="text" class="form-control" id="emailus" name="emailcus" value="{{$customer->emailcus}}"placeholder="emailcus">
      </div>
      <div class="form-group">
        <label for="alamatcus">alamat Customer </label>
        <input type="text" class="form-control" id="alamatcus" name="alamatcus" value="{{$customer->alamatcus}}"placeholder="alamatcus">
      </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection