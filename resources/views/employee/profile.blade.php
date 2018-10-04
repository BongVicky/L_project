<div class="row" style="margin-top: 40px; margin-bottom: 30px;">
    <div class="container">
        <div class="col-sm-4 col-md-4">
            <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2" align="center">
                {{--<img src="{{ URL::to('image/images.jpg') }}" alt="profile pic" class="img-rounded img-responsive">--}}
                <img src="/image/{{ Auth::user()->employee->avatar }}"
                     style="width: 100%" alt="">
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <div class="row" style="margin-top: 10px;">
                        <input type="file" name="avatar" style="width: 100%;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <button class="btn btn-primary" type="submit">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-8 col-md-8" style="margin-top: 0px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <blockquote>
                        <h2 style="margin-top: 0px">
                            <strong>{{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}</strong>
                        </h2>
                        <p><strong><i class="fas fa-briefcase"></i> Position:
                            </strong>{{ Auth::user()->employee->position }}</p>
                        <p><strong><i class="glyphicon glyphicon-envelope"></i>
                                Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong><i class="fas fa-phone"></i> Mobile: </strong> {{ Auth::user()->employee->number }}
                        </p>
                    </blockquote>
                    <p><i class="far fa-building"></i> Company: ALLWEB.CO.,LTD.
                        <br/> <i class="far fa-calendar-alt"></i> Start Date: 16/07/2018
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
