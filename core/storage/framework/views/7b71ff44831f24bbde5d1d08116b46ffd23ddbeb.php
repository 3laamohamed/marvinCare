

<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>
	<div class="theme-page padding-bottom-100">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1>OUR SERVICES</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<ul class="bread-crumb">
							<li>
								<a title="Home" href="<?php echo e(route('front.index')); ?>">
									<?php echo e(__('Home')); ?>

								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								<?php echo e(__('Service')); ?>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<ul class="services-list gray clearfix">
					<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a title="House Cleaning">
								<img src="<?php echo e(asset('assets/front/img/'.$service->image)); ?>" alt="">
							</a>
							<h4 class="box-header"><a title="House Cleaning"><?php echo e($service->name); ?></a></h4>
							<p>
								<?php echo e((strlen(strip_tags(Helper::convertUtf8($service->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($service->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($service->content))); ?>

							</p>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvin\core\resources\views/front/service.blade.php ENDPATH**/ ?>