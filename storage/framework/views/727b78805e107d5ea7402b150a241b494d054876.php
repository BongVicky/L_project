<!Doctype>
<html>
<head>
    <?php echo $__env->make('partial.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>

<?php echo $__env->make('partial.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <?php echo $__env->make('new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<hr style="margin-top: 20px;">
<p class="text-center">Copyright ALLWEB - All Rights Reserved </p>
<?php echo $__env->make('partial.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>