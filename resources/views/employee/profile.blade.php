<div class="row" style="margin-top: 40px; margin-bottom: 30px;">
    <div class="container">
        <div class="col-sm-4 col-md-4">
            <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">

                {{--<img src="{{ URL::to('image/images.jpg') }}" alt="profile pic" class="img-rounded img-responsive">--}}
                <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
                     alt="" class="img-rounded img-responsive"/>
            </div>
        </div>
        <div class="col-sm-8 col-md-8" style="margin-top: 0px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <blockquote>
                        <h2 style="margin-top: 0px"><strong>{{ Auth::user()->name }}</strong></h2>
                        <p><strong><i class="fas fa-briefcase"></i> Position:</strong> Web Developer</p>
                        <p><strong><i class="glyphicon glyphicon-envelope"></i> Email:</strong> Allweb@allweb.com.kh</p>
                        <p><strong><i class="fas fa-boxes"></i> Project:</strong> Bank</p>
                        <p><strong><i class="fas fa-check-circle"></i> Skills: </strong>
                            <span class="tags">html5</span>
                            <span class="tags">css3</span>
                            <span class="tags">jquery</span>
                            <span class="tags">bootstrap3</span>
                        </p>
                    </blockquote>
                    <p><i class="far fa-building"></i> Company: ALLWEB.CO.,LTD.
                        <br/> <i class="fas fa-phone"></i> Mobile: (+855) 23 222 555
                        <br/> <i class="far fa-calendar-alt"></i> Start Date: 16/07/2018
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
