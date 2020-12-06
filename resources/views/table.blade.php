@extends('layout.main')

@section('title', 'IT')

@section('table', 'active')

@section('conten')
<div class="content">
  <div class="row">
    <div class="col-xl-12 ">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tiket Troubleshooting</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive ">
            <table class="table mw-100">
              <thead class=" text-primary ">
                <tr>
                  <th scope="col-5">User</th>
                  <th scope="col-5">Problem</th>
                  <th scope="col-5">Qty</th>
                  <th scope="col">Jenis Problem</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($shot as $s)
                <tr>
                  <td >{{$s->nama}}</td>
                  <td>{{$s->jeniskerusakan}}</td>
                  <td>{{$s->qty}}</td>
                  <td>{{$s->uom}}</td>
                  <td>{{$s->area}}</td>
                  <td>{{$s->ket}}</td>
                  <td>{{$s->created_at}}</td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-xl-12 ">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> List Purchase Requistion</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive ">
              <table class="table mw-100">
                <thead class=" text-primary ">
                  <tr>
                    <th scope="col-5">User</th>
                    <th scope="col-5">Problem</th>
                    <th scope="col-5">Qty</th>
                    <th scope="col">Jenis Problem</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($problem as $s)
                  <tr>
                    <td >{{$s->nama_r}}</td>
                    <td>{{$s->jeniskerusakan_r}}</td>
                    <td>{{$s->qty_r}}</td>
                    <td>{{$s->uom_r}}</td>
                    <td>{{$s->harga_r}}</td>
                    <td>{{$s->ket_r}}</td>
                    <td>{{$s->created_at}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-xl-12 ">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Repair Success</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive ">
              <table class="table mw-100">
                <thead class=" text-primary ">
                  <tr>
                    <th scope="col-5">User</th>
                    <th scope="col-5">Problem</th>
                    <th scope="col">Jenis Problem</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($re as $re)
                  <tr>
                    <td >{{$re->nama_r}}</td>
                    <td>{{$re->jeniskerusakan_r}}</td>
                    <td>{{$re->uom_r}}</td>
                    <td>{{$re->harga_r}}</td>
                    <td>{{$re->ket_r}}</td>
                    <td>{{$re->created_at}}</td>
                    <td>{{$re->status_r}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
@endsection