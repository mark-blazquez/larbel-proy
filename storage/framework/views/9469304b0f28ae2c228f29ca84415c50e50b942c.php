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
			<div>
				<h2>añadir proyecto</h2>
				<form action="<?php echo e(route("proyectosmb")); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>nombre del proyecto</label>
						<input class="form-control" type="text" name="nombre"  >
					</div>
					<div class="form-group">
						<label>descripcion</label>
						<input class="form-control" type="text" name="descripccion"  >
					</div>
					<input class="btn btn-primary" type="submit">
				</form>
				
			</div>

		</div>
		

		<!--script de bootstrap-->
		<script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
		
	</body>
</html><?php /**PATH /home/vagrant/proyectoslarabel/markb/resources/views/create.blade.php ENDPATH**/ ?>