@extends('layout')
@section('content')
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6">
    <h2>Data Customer</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td>Nama</td>
            <td>{{ $customer->namacus }}</td>
          </tr>      
          <tr>
            <td>Telepon</td>
            <td>{{ $customer->tlpcus }}</td>
          </tr>   
           <tr>
            <td>Fax</td>
            <td>{{ $customer->faxcus }}</td>
          </tr> 
           <tr>
            <td>Email</td>
            <td>{{ $customer->emailcus }}</td>
          </tr>   
           <tr>
            <td>Alamat</td>
            <td>{{ $customer->alamatcus }}</td>
          </tr>   
        </tbody>
      </table>
    </div>
  </div>
 <div class="col-xs-12 col-sm-12 col-md-6">
    <h2>Data Pic</h2>
    
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Pic</th>
            <th>Telepon</th>
            <th>email</th>
            <th>Penanggung Jawab</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer->pic as $pic)
          <tr>
            <td>{{ $pic->namapic }}</td>
            <td>{{ $pic->tlppic }}</td>
            <td>{{ $pic->emailpic }}</td>
            <td>{{ $pic->namatgs }}</td>
            <td>{!! HTML::decode(link_to('pic/'.$pic->idpic.'/edit','<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('pic/'.$pic->idpic.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @if (count($customer->kas) > 0)
  <div class="col-xs-12 col-sm-12 col-md-6">
    <h2>Produk Kaspersky</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>License</th>
            <th>Quantity</th>
            <th>Start</th>
            <th>End</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer->kas as $kas)
          <tr>
            <td>{{ $kas->license }}</td>
            <td>{{ $kas->qty }}</td>
            <td>{{ $kas->start }}</td>
            <td>{{ $kas->end }}</td>
            <td>{{ $kas->id_kas }}</td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endif

  @if (count($customer->tr) > 0)
  <div class="col-xs-12 col-sm-12 col-md-6">
    <h2>Produk TrendMicro</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>License</th>
            <th>Quantity</th>
            <th>Start</th>
            <th>End</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer->tr as $tr)
          <tr>
            <td>{{ $tr->licensetr }}</td>
            <td>{{ $tr->qtytr }}</td>
            <td>{{ $tr->starttr }}</td>
            <td>{{ $tr->endtr }}</td>
            <td>{{ $tr->id_tr }}</td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endif

  @if (count($customer->ms) > 0)
  <div class="col-xs-12 col-sm-12 col-md-6">
    <h2>Produk Microsoft</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Product Microsoft</th>
            <th>Jenis License</th>
            <th>Quantity</th>
            <th>Start</th>
            <th>End</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer->ms as $ms)
          <tr>
            <td>{{ $ms->nmpro }}</td>
            <td>{{ $ms->typems }}</td>
            <td>{{ $ms->qtyms }}</td>
            <td>{{ $ms->startms }}</td>
            <td>{{ $ms->endms }}</td>
            <td>{!! HTML::decode(link_to('ms/'.$ms->idms.'/edit', '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-warning')))!!}  {!! HTML::decode(link_to('ms/'.$ms->idms.'/delete', '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array ('class'=>'btn btn-sm btn-danger') ))!!}</td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
  </div>
</div>

@endsection