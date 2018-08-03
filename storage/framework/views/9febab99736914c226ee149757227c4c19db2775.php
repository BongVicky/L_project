<div class="row" style="background-color: #f1f1f1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse headerr">
                <ul>
                    <a class="navbar-brand" href="/main"><img
                                src="http://www.allweb.com.kh/themes/allweb/assets/images/allweb.png" alt="Allweb"
                                width="70%"></a>
                </ul>
                <ul class="navbar-nav nav navbar-right" style="padding-right: 15px;">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav fontt" href="/main">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav fontt" href="/leave">Leave</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav fontt" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>