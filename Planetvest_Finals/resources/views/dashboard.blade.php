<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigns</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/campaigns.css') }}">
</head>
<body>

@extends('layout')
@section('contents')
@if(auth()->user()->is_admin == 1)
<a href="{{url('admin/routes')}}">Admin</a>
@else
<br><br><br>
        <div class="container text-center m-3 text-success fw-bold">
            <h1>Browse Campaigns here</h1>
        </div>

        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card text-center">
                        <img src="{{asset('assets/images/palayfarmer.jpg')}}" alt="Chris Jones holding Palay" class="card-img-top">
                        <div class="card-body">
                            <p class="fw-bold bg-success rounded-pill">Palay</p>
                            <h5 class="card-title fw-bold">Chris Jones</h5>
                            <p class="card-text text-black-50">Dalaguete, Cebu</p>
                            <div>₱25,000</div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmation">Invest Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                <div class="card text-center">
                        <img src="{{asset('assets/images/camotefarmer.jpg')}}" alt="Maria Smith holding Camote" class="card-img-top">
                        <div class="card-body">
                            <p class="fw-bold bg-success rounded-pill">Camote</p>
                            <h5 class="card-title fw-bold">Maria Smith</h5>
                            <p class="card-text text-black-50">Compostela, Cebu</p>
                            <div>₱25,000</div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmation">Invest Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                <div class="card text-center">
                        <img src="{{asset('assets/images/cornfarmer.jpg')}}" alt="Vince Baladra holding Corn" class="card-img-top">
                        <div class="card-body">
                            <p class="fw-bold bg-success rounded-pill">Mais</p>
                            <h5 class="card-title fw-bold">Vince Balandra</h5>
                            <p class="card-text text-black-50">Adlaon, Cebu</p>
                            <div>₱25,000</div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmation">Invest Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                <div class="card text-center">
                        <img src="{{asset('assets/images/repolyofarmer.jpg')}}" alt="Mark Anthony holding Repolyo" class="card-img-top">
                        <div class="card-body">
                            <p class="fw-bold bg-success rounded-pill">Repolyo</p>
                            <h5 class="card-title fw-bold">Mark Anthony</h5>
                            <p class="card-text text-black-50">Bonbon, Cebu</p>
                            <div>₱25,000</div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmation">Invest Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <!-- Modal -->
<div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Proceed to Investment?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Please read the <a href="">terms and conditions</a> first before proceeding to investing. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Proceed</button>
      </div>
    </div>
  </div>
</div>
<a href="logout">Logout</a>
@endif
@endsection
</body>
</html>