@extends('layouts.app')

@section('title','Online-Montring')

@section('content')s

    @include('layouts.partials.header')


    @include('layouts.partials.sidebar')


    <main id="main" class="main">

        @include('layouts.partials.breadcrums')

        @include('layouts.partials.alerts')

        <section class="section dashboard">
          <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">

                <div class="card">
                    <div class="filter  mr-4">
                        <a class="btn btn-outline-primary btn-sm" href="{{route('online.edit',$online->id)}}">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Online-Montring <span>| Data</span></h5>
                        <hr>

                        <div class="row g-3">

                            <div class="col-md-12">
                                <h6 class="font-bold bg-gray-300 px-2 py-2"> Online-Montring</h6>
                            </div>

                            <div class="col-md-3">
                                <p class="m-0 text-label">Device Name: </p>
                                <p class="m-0">{{ $online->devicename }}</p>
                            </div>

                            <div class="col-md-3">
                                <p class="m-0 text-label"> Device Status: </p>
                                <p class="m-0">{{ $online->devicelive }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="m-0 text-label"> Created At: </p>
                                <p class="m-0">{{ $online->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->
          </div>
        </section>

      </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
