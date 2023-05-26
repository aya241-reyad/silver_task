@extends('dashboard.master')
@section('title')
    home page
@endsection
{{-- @inject('Clients', 'App\Models\Client')
@inject('Supporters', 'App\Models\Supporter') --}}
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper container">

        <!-- Content -->
        @include('dashboard.alerts.alerts')
        <div class="container-xxl  container-p-y">
            <div class="row m-auto">

                <div class="d-flex">
                    <div class="col-lg-8 mb-4 ">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}! 🎉</h5>
                                        <p class="mb-4">
                                            <span class="fw-bold"></span> welcome to your Sliver Triangle system .

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-center text-sm-left">
                                    <div class="card-body pb-0 px-0 px-md-4">
                                        <img src="{{ asset('backend/img/illustrations/man-with-laptop-light.png') }}"
                                            height="140" alt="View Badge User"
                                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{-- 
                <div class="col-lg-4 col-md-4  ms-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <div class="avatar flex-shrink-0 avatarCart">
                                            <i class="menu-icon tf-icons bx bxs-award"></i>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Winners</span>
                                    <h3 class="card-title mb-2">{{ $Clients->where('balance', '>', 0)->count() }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <div class="avatar flex-shrink-0 avatarCart">
                                            <i class="menu-icon tf-icons bx bx-id-card"></i>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Users</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $Clients->count() }}</h3>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>




                <div class="row row-sm m-auto">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card" style="height: 100%">
                            <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mb-0"> Users Vs Winners Pie Chart</h4>

                                </div>
                            </div>
                            <div class="card-body" style="width:75%;">
                                {!! $chartjs->render() !!}
                            </div>
                        </div>
                    </div>


                  
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card" style="height: 100%">
                            <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mb-0"> Users Vs Winners  Bar Chart</h4>

                                </div>
                            </div>
                            <div class="card-body" style="width:75%;">
                                {!! $chartjs_2->render() !!}
                            </div>
                        </div>
                    </div>
                
                </div> --}}


               










            {{-- </div>
        </div> --}}



        <!-- / Content -->
    @endsection
