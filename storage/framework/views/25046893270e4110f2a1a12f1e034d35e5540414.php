<?php $__env->startSection('navheader'); ?>
    <?php echo $__env->make('partial.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="tabs" style="padding-right: 0px; margin-right: 0px;">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt=""
                     src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"
                     class=" img-rounded">
            </div>
            <div class="card-info"><span class="card-title"><?php echo e(Auth::user()->name); ?></span>
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
                        <a class="nav-item nav-link" id="nav-project-tab" data-toggle="tab" href="#nav-project"
                           role="tab" aria-controls="nav-project" aria-selected="false">Project</a>
                        <a class="nav-item nav-link" id="nav-performance-tab" data-toggle="tab" href="#nav-performance"
                           role="tab" aria-controls="nav-performance" aria-selected="false">Performance</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                         aria-labelledby="nav-profile-tab">
                        <div class="container">
                            <?php echo $__env->make('employee.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contract" role="tabpanel" aria-labelledby="nav-contract-tab">
                        <div class="container">
                            <?php echo $__env->make('employee.contract', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">
                        <div class="container">
                            <?php echo $__env->make('employee.project', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-performance" role="tabpanel"
                         aria-labelledby="nav-performance-tab">
                        <div class="container">
                            <?php echo $__env->make('employee.performance', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>