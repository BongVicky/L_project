@extends('main')
@section('title','Performance')
@section('content')
    <div class="col-md-10">

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br/>
        @endif
        <h4>Employee performance</h4>
            <br>
        <table class="table" id="table_id">
            <a href="{{action('PerformancesController@create')}}">
                <button class="btn btn-primary" type="submit" style="margin-bottom: 10px">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </button>
            </a>
            <thead class="thead-dark">
            <tr>
                <th scope="">No</th>
                <th scope="">Name</th>
                <th scope="">Title</th>
                <th scope="">Remark</th>
                <th scope="">Description</th>
                <th scope="">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            ?>
            @foreach($performances as $performance)
                <tr>
                    <td scope="row">
                        {{++$i}}
                    </td>
                    <td>{{$performance->first_name}} {{$performance->last_name}}</td>
                    <td>{{$performance->title}}</td>
                    <td>{{str_limit($performance->remark,20," ...")}}</td>
                    <td>{{str_limit($performance->description, 20," ...")}}</td>
                    <td>
                        <a href="{{action('PerformancesController@edit', $performance->id)}}">
                            <button class="btn btn-primary" type="submit">
                                Edit
                            </button>
                        </a>
                        <form class="crud" action="{{action('PerformancesController@destroy', $performance->id)}}" method="post">
                            @csrf
                            <button onclick="return confirm('Are you sure you want to delete this item?');" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                Delete
                            </button>
                            <input name="_method" type="hidden" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection