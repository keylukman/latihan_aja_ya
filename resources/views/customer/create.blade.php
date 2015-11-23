@extends('layout')
@section('content')
<h1>Tamabh Data Customer</h1>

<form method="POST" action="{{ url('/kas/store') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="form-group">
      <label for="namacus">Nama Customer</label>
      <input type="text" class="form-control" id="namacus" name="namacus" placeholder="namacus">
    </div>
     <div class="form-group">
      <label for="tlpcus">Telepon Customer </label>
      <input type="text" class="form-control" id="tlpcus" name="tlpcus" placeholder="tlpcus">
    </div>
      <div class="form-group">
        <label for="faxcus">Fax Customer </label>
        <input type="text" class="form-control" id="faxcus" name="faxcus" placeholder="faxcus">
      </div>
      <div class="form-group">
        <label for="emailcus">emailCustomer </label>
        <input type="text" class="form-control" id="emailus" name="emailcus" placeholder="emailcus">
      </div>
      <div class="form-group">
        <label for="alamatcus">alamat Customer </label>
        <input type="text" class="form-control" id="alamatcus" name="alamatcus" placeholder="alamatcus">
      </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection