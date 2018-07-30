<div class="row" style="margin-top: 40px; margin-bottom: 30px;">
    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
        <div class="row">
            <div class="col-md-4">
                <h1><strong> Current Project </strong></h1>
            </div>
            <div class="col-md-8">
                <table class="float-right">
                    <tr class="info">
                        <td colspan="4"><strong>Contract countdown</strong></td>
                    </tr>
                    <tr class="info">
                        <td id="days">120</td>
                        <td id="hours">4</td>
                        <td id="minutes">12</td>
                        <td id="seconds">22</td>
                    </tr>
                    <tr class="info1">
                        <td>days</td>
                        <td>hours</td>
                        <td>minutes</td>
                        <td>seconds</td>
                    </tr>
                </table>
                <script type="text/javascript">
                    function countdown(){
                        var now = new Date();
                        var eventDate = new Date(2018, 11 ,25);

                        var currentTime = now.getTime();
                        var eventTime = eventDate.getTime();

                        var remTime = eventTime - currentTime;

                        var s = Math.floor(remTime / 1000);
                        var m = Math.floor(s / 60);
                        var h = Math.floor(m / 60);
                        var d = Math.floor(h / 24);

                        h %= 24;
                        m %= 60;
                        s %= 60;

                        h = (h < 10) ? "0" + h : h;
                        m = (m < 10) ? "0" + m : m;
                        s = (s < 10) ? "0" + s : s;

                        document.getElementById("days").textContent = d;
                        document.getElementById("days").innerText = d;

                        document.getElementById("hours").textContent = d;
                        document.getElementById("minutes").textContent = d;
                        document.getElementById("seconds").textContent = d;
                        setTimeout(countdown, 1000);
                    }
                </script>
            </div>
        </div>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="disabled">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="fas fa-file-alt" style="margin-top: 25%"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fas fa-file-alt" style="margin-top: 25%"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fas fa-file-alt" style="margin-top: 25%"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fas fa-file-alt" style="margin-top: 25%"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h1> Hello World</h1>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <p>IV - VIII</p>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <p>IX - XIII</p>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <p>XIV - XVIII</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

    </div>
</div>