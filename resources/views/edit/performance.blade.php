@extends('main')
@section('title', ' Edit Contract Info')
@section('content')
    <div class="col-md-10">
        <h2>Edit A Form</h2><br/>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/performances/{{$id}}" enctype="multipart/form-data">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group form-inline">
                        <label style="padding-right: 10px" class="form-inline" for="Name">Name :</label>
                        {{ $performances->employee->first_name }} {{ $performances->employee->last_name }}
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="from_date">Title : </label>
                        <input type="text" class="form-control" value="{{$performances->title}}" name="title">
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="from_date">Remark : </label>
                        <input type="text" class="form-control" value="{{$performances->remark}}" name="remark">
                    </div>
                    <div class="form-group">
                        <label style="padding-right: 10px" class="form-inline" for="from_date">Description : </label>
                        <input type="text" class="form-control" value="{{$performances->description}}" name="description">
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-2">
                            <label for="Job_knowledge">Job Knowledge</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Work_quality"> Work Quality</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Attendance"> Attendance</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Communication_and_listening"> Communication and Listening</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Leave"> Dependability</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-2">
                            <select name="job_knowledge" class="form-control">
                                <option value="null" @if($performances->job_knowledge=="null") selected @endif>
                                    default
                                </option>
                                <option value="1" @if($performances->job_knowledge=="1") selected @endif> 1</option>
                                <option value="2" @if($performances->job_knowledge=="2") selected @endif> 2</option>
                                <option value="3" @if($performances->job_knowledge=="3") selected @endif> 3</option>
                                <option value="4" @if($performances->job_knowledge=="4") selected @endif> 4</option>
                                <option value="5" @if($performances->job_knowledge=="5") selected @endif> 5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="work_quality" class="form-control">
                                <option value="null" @if($performances->work_quality=="null") selected @endif> default
                                </option>
                                <option value="1" @if($performances->work_quality=="1") selected @endif> 1</option>
                                <option value="2" @if($performances->work_quality=="2") selected @endif> 2</option>
                                <option value="3" @if($performances->work_quality=="3") selected @endif> 3</option>
                                <option value="4" @if($performances->work_quality=="4") selected @endif> 4</option>
                                <option value="5" @if($performances->work_quality=="5") selected @endif> 5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="attendance" class="form-control">
                                <option value="null" @if($performances->attendance=="null") selected @endif> default
                                </option>
                                <option value="1" @if($performances->attendance=="1") selected @endif> 1</option>
                                <option value="2" @if($performances->attendance=="2") selected @endif> 2</option>
                                <option value="3" @if($performances->attendance=="3") selected @endif> 3</option>
                                <option value="4" @if($performances->attendance=="4") selected @endif> 4</option>
                                <option value="5" @if($performances->attendance=="5") selected @endif> 5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="com_listen" class="form-control">
                                <option value="null" @if($performances->com_listen=="null") selected @endif> default
                                </option>
                                <option value="1" @if($performances->com_listen=="1") selected @endif> 1</option>
                                <option value="2" @if($performances->com_listen=="2") selected @endif> 2</option>
                                <option value="3" @if($performances->com_listen=="3") selected @endif> 3</option>
                                <option value="4" @if($performances->com_listen=="4") selected @endif> 4</option>
                                <option value="5" @if($performances->com_listen=="5") selected @endif> 5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="dependability" class="form-control">
                                <option value="null" @if($performances->dependability=="null") selected @endif>
                                    default
                                </option>
                                <option value="1" @if($performances->dependability=="1") selected @endif> 1</option>
                                <option value="2" @if($performances->dependability=="2") selected @endif> 2</option>
                                <option value="3" @if($performances->dependability=="3") selected @endif> 3</option>
                                <option value="4" @if($performances->dependability=="4") selected @endif> 4</option>
                                <option value="5" @if($performances->dependability=="5") selected @endif> 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a  href="{{ URL::to( '/performances') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection