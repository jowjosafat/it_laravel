@extends('layout.loginmain')

@section('title', 'IT Profile')

@section('it', 'active')

@section('contenlogin')

<div class="content">
  <div class="card-header mb-3">
    <h5 class="title">Informasi Profile IT</h5>
    <div class="row">
      <div class="col">
        <p class="category">Teknik Informatika</p>
      </div>
      <div class="col-8">
          <marquee scrolldelay="900"><i class="nc-icon nc-bell-55"> 
              @foreach ($shot as $s)
              Troubleshoot => {{ $s->nama }} ||
              @endforeach    
          </i></marquee>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="../assets/img/damir-bosnjak.png" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                <h5 class="title">Profile</h5>
              </a>
              <p class="description">
                @Jow Josafat
              </p>
            </div>
            <p class="description text-center">IT Senior <br>www.jowjosafat.com</p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-6 ml-auto">
                  <h5>{{ $rusak }}<br><small>Problem</small></h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <h5>{{ $problem }}<br><small>PR</small></h5>
                </div>
                <div class="col-lg-4 mr-auto">
                  <h5>{{ $success }}<br><small>Success</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="card">
          <div class="card-header">
            <h4 class="card-title">Team Members</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled team-members">
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-md-7 col-7">
                    DJ Khaled
                    <br />
                    <span class="text-muted"><small>Offline</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-md-7 col-7">
                    Creative Tim
                    <br />
                    <span class="text-success"><small>Available</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2 col-2">
                    <div class="avatar">
                      <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                  </div>
                  <div class="col-ms-7 col-7">
                    Flume
                    <br />
                    <span class="text-danger"><small>Busy</small></span>
                  </div>
                  <div class="col-md-3 col-3 text-right">
                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Profile</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5 pr-1">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value="PT. BELINDA JAYA">
                  </div>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Username" value="Jow">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" placeholder="jow@jowjosafat.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Company" value="jow">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" value="jow">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Home Address" value="PT. Belinda Makmur Pratama">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="City" value="Tangerang">
                  </div>
                </div>
                <div class="col-md-4 px-1">
                  <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" placeholder="Country" value="Indonesia">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label>Postal Code</label>
                    <input type="number" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control textarea">Logic</textarea>
                  </div>
                </div>
              </div>
              {{-- <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                </div>
              </div> --}}
            </form>
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
              <label for="pic" class="col-sm-3 col-form-label title text-primary">IT</label>
              <div class="col-sm-9">
                <input type="text"  class="form-control" id="pic" name="pic" value="Jow" readonly>
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