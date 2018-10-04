@extends('main')

@section('title', ' Create Company')

    @section('content')
        <div class="col-md-10">


            <div class="card">
                <div class="card-body">

                    @foreach($companies as $company)

                    <img src="{{$company->filename}}" alt="ALLWEB Co., Ltd.">
                        <p><b>Company Name</b> : {{$company->name}}</p>
                        <p style="text-align: justify"><b>Description</b> : {{$company->Description}}</p>
                        <p><b>Address</b> : {{$company->address}}</p>
                        <p><b>Telephone</b> : {{$company->phone}}</p>
                   <p><b>Email</b> : {{$company->email}}</p>
                   <p><b>Website</b> : {{ $company->website}}</p>
                   <p><b>Facebook</b> : {{ $company->f_link}}</p>
                   <p><b>Linked-In</b> : {{ $company->linkedin_link}}</p>
                   <div class="col-md-12"> 
                        <a href="{{action('CompanyController@edit', $company['id'])}}">
                            <button class="btn btn-primary" type="submit">
                                Edit
                            </button>
                        </a>
                    </div>
                    @endforeach
                   

                </div>
            </div>

        </div>





    @endsection