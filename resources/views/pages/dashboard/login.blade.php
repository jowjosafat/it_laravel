@extends('layout.loginmain')

@section('title', 'IT Dashboard')

@section('login', 'active')

@section('contenlogin')

<div class="content">
    <div class="card-header mb-3">
        <h5 class="title">Diagram </h5>
        <div class="row">
            <div class="col">
                <p class="category">Grafik History IT</p>
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
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-globe text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Problem</p>
                                <p class="card-title">{{$rusak}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        Old Problem = {{$trashed}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-vector text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">PR</p>
                                <p class="card-title">{{ $problempr}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        Old PR = {{ $problem }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Revenue</p>
                            </div>
                            <div class="stats">
                                <p class="text-right mt-2" id="uang">{{ $harga }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        {{$problem}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-favourite-28 text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Success </p>
                                <p class="card-title">{{ $success }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Users Problem</h5>
                    <p class="card-category">24 Hours performance</p>
                </div>
                <div class="card-body">
                    <canvas data-trashed="{{$trashed}}" data-problem="{{ $problem }}" data-success="{{$success}}" id="chartHours" width="400" height="100"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        {{-- <i class="fa fa-circle text-primary"></i> Opened --}}
                        <i class="fa fa-circle text-danger"></i> Problem
                        <i class="fa fa-circle text-warning"></i> PR
                        <i class="fa fa-circle text-success"></i> Success
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated Now
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Problem Statistics</h5>
                    <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartEmail"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-danger"></i> Problem
                        <i class="fa fa-circle text-warning"></i> PR
                        <i class="fa fa-circle text-success"></i> Success
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar"></i> Problem Statistics
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title">Problem Line</h5>
                    <p class="card-category">Line Chart</p>
                </div>
                <div class="card-body">
                    <canvas id="speedChart" width="400" height="100"></canvas>
                </div>
                <div class="card-footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-danger"></i> Problem
                        <i class="fa fa-circle text-success"></i> Success
                    </div>
                    <hr />
                    <div class="card-stats">
                        <i class="fa fa-check"></i> Data information
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content col-sm-12">
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-header ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <div>
                                            <form action="{{ route('login') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="dropdown-header" for="email">{{ __('Email') }}</label>

                                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

                                                    @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror

                                                </div>
                                                <div class="form-group">
                                                    <label class="dropdown-header" for="password">{{ __('Password') }}</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                                                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                    @enderror

                                                </div>
                                                <button type="submit" class="btn btn-primary btn-md">Sign in</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <form method="post" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(function() {
                                ('#myTab li:last-child a').tab('show')
                            });
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
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="uom" class="col-sm-3 col-form-label title text-primary">Problem</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uom" name="uom" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="qty" class="col-sm-3 col-form-label title text-primary">Qty</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="qty" name="qty" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="jenis" class="col-sm-3 col-form-label title text-primary">Jenis Problem</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="jeniskerusakan" name="jeniskerusakan" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="area" class="col-sm-3 col-form-label title text-primary">Area</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="area" name="area" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="dept" class="col-sm-3 col-form-label title text-primary">Departemen</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dept" name="dept" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="pic" class="col-sm-3 col-form-label title text-primary">IT</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="pic" name="pic" value="IT" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ket" class="col-sm-3 col-form-label title text-primary">Keterangan</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" id="ket" name="ket" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Input</button>
                                    {{-- <div class="modal-footer2">
                                    <form action="/" method="post">
                                        @method("delete")
                                        @csrf
                                        <button type="submit" class="btn btn-danger del">Delete</button></form>
                                    </div> --}}
                                </div>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection