<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
{!! Html::script('js/link/jjquery.min.js') !!}
{{--<script href="{{ asset('js/link/jjquery.min.js') }}"></script>--}}
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{--<script href="{{asset('js/link/jquery-1.11.1.min.js')}}"></script>--}}

{{--<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"--}}
        {{--integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy"--}}
        {{--crossorigin="anonymous"></script>--}}
<script defer href="{{asset('js/link/all.js')}}" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
{{--<script href="{{asset('js/link/bootstrap.min.js')}}"></script>--}}

{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<script href="{{asset('js/link/jquery.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<script href="{{ asset('js/link/html5shiv.min.js') }}"></script>
{{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
<script href="{{ asset('js/link/respond.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $target = $(e.target);
            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });
        $(".next-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        });
        $(".prev-step").click(function (e) {
            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);
        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{ Auth::user()->contract->to_date }} 18:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var weeks = Math.floor(distance / (1000 * 60 * 60 * 24 * 7));
        var days = Math.floor((distance % ( 1000 * 60 * 60 *24 *7)) / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = weeks + "w " + days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>