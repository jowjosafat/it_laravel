@extends('layout.main')

@section('title', 'IT')

@section('report', 'active')

@section('conten')

<div class="content col-sm-12">
  <div class="row text-center">
      <div class="col-sm-12">
          <div class="card ">
              <div class="card-header ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trobleshooting</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Purchase Requistion</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Success Problem</a>
                    </li>
                    
                  </ul>
                  
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="content">
                        <div class="row">
                          <div class="col-xl-12 ">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title text-danger"> Tiket Troubleshooting</h4>
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
                      </div>
                    </div>
                  
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="content">
                        <div class="row">
                          <div class="col-xl-12 ">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title text-warning"> List Purchase Requistion</h4>
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
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                      <div class="content">
                        <div class="row">
                          <div class="col-xl-12 ">
                            <div class="card">
                              <div class="card-header">
                                <h5 class="card-title text-success"> Repair Success</h5>
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
                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">History</div>
                  </div>
                  
                  <script>
                    $(function () {
                      $('#myTab li:last-child a').tab('show')
                    })
                  </script>
              </div>             
          </div>
      </div>
      



<!-- Modal trobleshoot -->
<div class="modal fade" id="troubleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Form Demage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <Form action="/createdashboard" method="post" autocomplete="off">
          @csrf
          <input type="hidden" class="form-control " id="id" name="id">
          <div class="row">
              <label for="nama" class="col-sm-3 col-form-label title text-primary ">User</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
          </div>
          <div class="row">
            <label for="uom" class="col-sm-3 col-form-label title text-primary">Problem</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="uom" name="uom">
            </div>
        </div>
          <div class="row">
              <label for="qty" class="col-sm-3 col-form-label title text-primary">Qty</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="qty" name="qty">
              </div>
          </div>
          <div class="row">
              <label for="jenis" class="col-sm-3 col-form-label title text-primary">Jenis Problem</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="jeniskerusakan" name="jeniskerusakan">
              </div>
          </div>
          <div class="row">
              <label for="area" class="col-sm-3 col-form-label title text-primary">Area</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="area" name="area">
              </div>
          </div>
          <div class="row">
              <label for="dept" class="col-sm-3 col-form-label title text-primary">Departemen</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="dept" name="dept">
              </div>
          </div>
          <div class="row" >
            <label for="pic" class="col-sm-3 col-form-label title text-primary">Gambar</label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" id="pic" name="pic" value="gambar.jpg">
            </div>
          </div>
          <div class="row">
              <label for="ket" class="col-sm-3 col-form-label title text-primary">Keterangan</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="ket" name="ket"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            {{-- <div class="modal-footer2">
              <form action="/" method="post">
                @method("delete")
                @csrf
                <button type="submit" class="btn btn-danger del">Delete</button></form>
              </div> --}}
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Input</button>
          </div>
        </Form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection