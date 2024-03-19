@extends('layouts.app')

@section('title', 'Online-Complaint')

@section('content')

    @include('layouts.partials.header')


    @include('layouts.partials.sidebar')


    <main id="main" class="main">

        @include('layouts.partials.breadcrums')

        @include('layouts.partials.alerts')
        {{-- <section style="padding-top:60px;"> --}}
            <section style="padding-top:60px; background-color: rgb(231, 231, 226);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                {{-- <span style="color: black;"><h3>Online-Complaint</h3></span> --}}
                            </div>
                            <div class="card-body">
                                @if (Session::has('Message_sent'))
                                 <div class="alert alert-success" role="alert">
                                     {{Session::get('Message_sent')}}
                                 </div>
                                @endif
                                <form method="POST" action="{{route('complaint.sendEmail')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-2">
                                        <input type="text" name="name" class="form-control mt-3" id="name" placeholder="Error_Name*" />
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="text" name="email" class="form-control mt-3" id="email" placeholder="Email*" />
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="text" name="phone" class="form-control mt-3" id="phone"placeholder="Phone_Number*" />
                                    </div>
                                    <div class="form-group mt-2">
                                        <textarea name="description" class="form-control form-control-sm mt-3" rows="7" id ="description" placeholder="Error_Description*"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
