@extends('layout.main')

@section('title', 'IT')

@section('user', 'active')

@section('conten')

<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/damir-bosnjak.png" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
              <h5 class="title">Profile</h5>
            </a>
            <p class="description">
              @Jow Josafat
            </p>
          </div>
          <p class="description text-center"></p>
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
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="">
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Username" value="">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" value="">
                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Home Address" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City" value="">
                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Country" value="">
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
                  <textarea class="form-control textarea"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection