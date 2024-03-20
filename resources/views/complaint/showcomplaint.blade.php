@extends('layouts.app')

@section('title', 'Online-Complaint-Data')

@section('content')

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
                    <div class="card-body">
                        <h5 class="card-title">Online-Complaint-Data <span>| all</span></h5>
                        <hr>
                        <div class=" table-responsive">
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Erro_Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Create_At</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if($details)
                                        @foreach ($details as $details)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $details->name }}</td>
                                                <td>{{ $details->email }}</td>
                                                <td>{{ $details->description }}</td>
                                                <td>{{ date('M d Y', strtotime($details->created_at)) }}</td>

                                                <td class="action">
                                                    <a href="{{route('complaint.viewcomplaint',$details->id)}}" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    {{-- <label class="btn btn-primary btn-sm">
                                                        <input type="checkbox" autocomplete="off">
                                                    </label> --}}
                                                   <form method="post" id="delete-form" action="{{route('complaint.delete',$details->id)}} ">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div><!-- End Left side columns -->


          </div>
        </section>

      </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
