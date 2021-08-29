@extends('layout.main')

@section('title', 'IT')

@section('repair', 'active')

@section('conten')

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="places-buttons">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto text-center">
                <h4 class="card-title">
                  Repair Requistion
                  <p class="category">Click to view Repair Requistion</p>
                </h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                @foreach ($problem as $s)
                <div class="col-lg-3 mb-1">
                  <a href="" class="btn btn-succes btn-block viarModalrepart" data-toggle="modal" data-target="#exampleModal" data-id="{{ $s->id }}" data-nama="{{ $s->nama_r }}" data-uom="{{ $s->uom_r }}" data-qty="{{ $s->qty_r }}" data-jeniskerusakan="{{ $s->jeniskerusakan_r }}" data-area="{{ $s->area_r }}" data-dept="{{ $s->dept_r }}" data-pic="{{ $s->pic_r }}" data-ket="{{ $s->ket_r }}" data-harga="{{ $s->harga_r }}">
                    {{ $s->nama_r }}</a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="places-buttons">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                  <h4 class="card-title">
                    Repair Success
                  </h4>
                </div>
              </div>
                <div class="container">
                  <div class="row">
                    @foreach ($r as $r)
                      <div class="col-lg-3 mb-1">
                        <button class="btn btn-success btn-block" onclick="demo.showNotification('top','center')" 
                        data-nama="{{ $r->nama_r }}" data-notify="{{ $r->id }}"
                        data-notify="{{ $r->jeniskerusakan_r }}"
                        data-notify="{{ $r->status_r }}">
                        {{ $r->nama_r }} </button> 
                        <button hidden class="btn btn-success btn-block" onclick="text.showNotification('top','center')">{{ $r->status_r }}</button>                       
                      </div>

                    @endforeach           
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
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
                    <th scope="col-5">Qty</th>
                    <th scope="col">Jenis Problem</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($re as $re)
                  <tr>
                    <td>{{$re->nama_r}}</td>
                    <td>{{$re->jeniskerusakan_r}}</td>
                    <td>{{$re->qty_r}}</td>
                    <td>{{$re->uom_r}}</td>
                    <td>{{$re->harga_r}}</td>
                    <td>{{$re->ket_r}}</td>
                    <td>{{$re->created_at}}</td>
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


<!-- Modalviar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Purchase Requistion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <Form action="/success" method="post">
          @csrf
          <input type="hidden" class="form-control " id="id" name="id">
          <div class="row">
            <label for="nama" class="col-sm-3 col-form-label title text-primary">Problem</label>
            <div class="col-sm-9">
              <input type="text" class="form-control " readonly id="nama_p" name="nama_r">
            </div>
          </div>
          <div class="row">
            <label for="qty" class="col-sm-3 col-form-label title text-primary">Qty</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="qty_p" name="qty_r">
            </div>
          </div>
          <div class="row">
            <label for="uom" class="col-sm-3 col-form-label title text-primary">Uom</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="uom_p" name="uom_r">
            </div>
          </div>
          <div class="row">
            <label for="jenis" class="col-sm-3 col-form-label title text-primary">Jenis Problem</label>
            <div class="col-sm-9">
              <input type="text" class="form-control " readonly id="jeniskerusakan_p" name="jeniskerusakan_r">
            </div>
          </div>
          <div class="row">
            <label for="area" class="col-sm-3 col-form-label title text-primary">Area</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="area_p" name="area_r">
            </div>
          </div>
          <div class="row">
            <label for="dept" class="col-sm-3 col-form-label title text-primary">Departemen</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="dept_p" name="dept_r">
            </div>
          </div>
          <div class="row" hidden>
            <label for="pic" class="col-sm-3 col-form-label title text-primary">Gambar</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="pic_p" name="pic_r">
            </div>
          </div>
          <div class="row">
            <label for="ket" class="col-sm-3 col-form-label title text-primary">Keterangan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="ket_p" name="ket_r">
            </div>
          </div>
          <div class="row">
            <label for="harga" class="col-sm-3 col-form-label title text-primary">Harga</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" readonly id="harga_p" name="harga_r">
            </div>
          </div>
          <div class="row" hidden>
            <label for="harga" class="col-sm-3 col-form-label title text-primary">Status</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly id="status_p" name="status_r">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Misi Success</button>
          </div>
        </Form>
      </div>
    </div>
  </div>
</div>

@endsection