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
			<p>estos son los proyectos elige accion</p></br>
			<a class="nav-link" href="<?php echo e(route("createmb")); ?>">añadir</a> </br>
		</div>

			<?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="card m-2" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">nombre proyecto:<?php echo e($proyecto->nombre); ?></h5>
						<p class="card-text">descripcion:<?php echo e($proyecto->descripcion); ?></p>
					</div>
					<div>
						<form action="<?php echo e(route("proyectosmb")); ?>" method="post">
							<?php echo csrf_field(); ?> <?php echo method_field("delete"); ?>
							<div class="form-group d-none">
								<input class="form-control"  name="id" value="<?php echo e($proyecto->id); ?>" placeholder="id del producto">
							</div>
							<input class="btn btn-danger" type="submit" value="eliminar">
						</form>
					</div>
				</div>
				
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html>
<?php /**PATH /home/vagrant/proyectoslarabel/markb/resources/views/proyectos.blade.php ENDPATH**/ ?>