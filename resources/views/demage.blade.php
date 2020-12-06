@extends('layout.main')

@section('title', 'Form Demage IT')

@section('demage', 'active')

@section('conten')


<div class="content col-sm-12">
  <div class="row text-center">
      <div class="col-sm-12">
          <div class="card ">
              <div class="card-header ">
                  <h5 class="card-title">Form Troubleshoot</h5>
                  <p class="card-category">Input Form Demage</p>
              </div>
              <div class="card-body ">
                <button type="button" class="btn btn-outline-info btn-lg Modalcreate" data-toggle="modal" data-target="#troubleModal">
                  Input Demage</button>
            </div>
              <div class="card-footer ">
                  <hr>
                  <div class="stats">
                      <i class="fa fa-comment-o"></i> Isi Form Kerusakan
                  </div>
              </div>
          </div>
      </div>
    <div class="content col-sm-12">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-plain">
                    <div class="card-header">
                      <h5 class="card-title">Troubleshoot Edit</h5>
                    </div>    
                    <div class="container">
                      <div class="row">
                        @foreach ($shot as $s)
                          <div class="col-lg-3 mb-1">
                          <a href="" class="btn btn-warning btn-block Modaldemage " data-toggle="modal" data-target="#troubleModal" 
                          data-id="{{ $s->id }}" 
                          data-nama="{{ $s->nama }}" 
                          data-qty="{{ $s->qty }}"
                          data-uom="{{ $s->uom }}" 
                          data-jeniskerusakan="{{ $s->jeniskerusakan }}"
                          data-area="{{ $s->area }}"
                          data-dept="{{ $s->dept }}"
                          data-pic="{{ $s->pic }}"
                          data-ket="{{ $s->ket }}">
                          {{ $s->nama }}</a>
                          </div>
                          @endforeach
                      </div>            
                    </div>
                  </div>
                </div>
              </div>
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
  </div>
  <div class="content">
    <div class="row">
      <div class="col-xl-12 ">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> History All Troubleshooting</h4>
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
                  @foreach ($del as $o)
                  <tr>
                    <td >{{$o->nama}}</td>
                    <td>{{$o->jeniskerusakan}}</td>
                    <td>{{$o->qty}}</td>
                    <td>{{$o->uom}}</td>
                    <td>{{$o->area}}</td>
                    <td>{{$o->ket}}</td>
                    <td>{{$o->created_at}}</td>
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
        <div class="modal-body text-left createform">
          <Form action="/" method="post" autocomplete="off">
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
              <label for="pic" class="col-sm-3 col-form-label title text-primary">IT</label>
              <div class="col-sm-9">
                <input type="text"  class="form-control" id="pic" name="pic" value="Jow">
              </div>
            </div>
            <div class="row">
                <label for="ket" class="col-sm-3 col-form-label title text-primary">Keterangan</label>
                <div class="col-sm-9">
                  <textarea type="text" class="form-control" id="ket" name="ket"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save Input</button>
              <div class="modal-footer2">
                <form action="/" method="post">
                  @method("delete")
                  @csrf
                  <button type="submit" class="btn btn-danger del">Delete</button></form>
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </Form>
        </div>
      </div>
    </div>
</div>






  

  @endsection