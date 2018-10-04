@extends('partial.main')
@section('title','Profile')
@section('navheader')
    @include('partial.nav')
@endsection
@section('content')
    <section id="tabs" style="padding-right: 0px; margin-right: 0px;">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt=""
                     src="/image/{{ Auth::user()->employee->avatar }}">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img src="/image/{{ Auth::user()->employee->avatar }}" style="width: 150px; height: 150px; border-radius: 50%"
                     alt="">
            </div>
            <div class="card-info"><span class="card-title">{{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
                        <a class="nav-item nav-link" id="nav-contract-tab" data-toggle="tab" href="#nav-contract"
                           role="tab" aria-controls="nav-contract" aria-selected="false">Contract</a>
                        <a class="nav-item nav-link" id="nav-leave-tab" data-toggle="tab" href="#nav-leave"
                           role="tab" aria-controls="nav-leave" aria-selected="false">Leave</a>
                        </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                         aria-labelledby="nav-profile-tab">
                        <div class="container">
                            @include('employee.profile')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contract" role="tabpanel" aria-labelledby="nav-contract-tab">
                        <div class="container">
                            @include('employee.contract')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-leave" role="tabpanel" aria-labelledby="nav-leave-tab">
                        <div class="container">
                            @include('employee.leave_table')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
