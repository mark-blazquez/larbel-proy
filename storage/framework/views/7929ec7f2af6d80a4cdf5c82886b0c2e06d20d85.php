<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title>examen</title>
	</head>

	
	<body>
		<!--la cabecera importada-->
		<?php $__env->startComponent("componentes.cabecera"); ?>	
		<?php if (isset($__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1)): ?>
<?php $component = $__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1; ?>
<?php unset($__componentOriginalce8e2b16a1f7e7b73da60aaa5b7be45cc6e988c1); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
		<div class="container">
			estas son las tareas listadas
		</div>
		<?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card m-2" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">nombre tarea:<?php echo e($tarea->nombre); ?></h5>
					<p class="card-text">duracion:<?php echo e($tarea->duracion); ?></p>
					<p class="card-text">fecha inicio:<?php echo e($tarea->fechainicio); ?></p>
					<p class="card-text">fecha fin:<?php echo e($tarea->fechafin); ?></p>
				</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html>
<?php /**PATH /home/vagrant/proyectoslarabel/markb/resources/views/tareas.blade.php ENDPATH**/ ?>