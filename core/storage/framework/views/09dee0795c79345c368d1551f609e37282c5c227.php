

<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>
	<div class="theme-page">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1><?php echo e(__('About')); ?></h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<ul class="bread-crumb">
							<li>
								<a title="Home" href="home.html">
									<?php echo e(__('Home')); ?>

								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								<?php echo e(__('About')); ?>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<div class="column column-1-2">
					<div class="row">
						<a class="prettyPhoto cm-preload" title="House Cleaning">
							<img src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($sectionInfo->about_image); ?>" alt='img'>
						</a>
					</div>
				</div>
				<div class="column column-1-2">
					<div class="row padding-left-right-30">
						<h2 class="box-header align-left"><?php echo e($sectionInfo->about_title); ?></h2>
						<p class="description">
							<?php echo $sectionInfo->about_subtitle; ?>

						</p>
						<ul class="list margin-top-20">
							<?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="template-tick-1"><?php echo e($about->feature); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div>
			<div>
				<div class="row">
					<ul class="services-list services-icons clearfix">
						<li class="column column-1-3">
							<span class="service-icon big features-credit-card tick"></span>
							<?php if($currentLang->direction == 'rtl'): ?>
								<h4>سهولة الدفع</h4>
								<p>سهولة الدفع عن طريق باي بال أو عن طريق خدمة معالجة الدفع ببطاقة الائتمان</p>
							<?php else: ?>
								<h4>EASY PAYMENTS</h4>
								<p>Easy payments via paypal or via credit card payment processing service.</p>
							<?php endif; ?>
						</li>
						<li class="column column-1-3">
							<span class="service-icon big features-pet tick"></span>
							<?php if($currentLang->direction == 'rtl'): ?>
								<h4>صديق للحيوانات الاليفة</h4>
								<p>نحن نستخدم منظفات صديقة للحيوانات الأليفة لأن حيوانك الأليف هو عضو مهم في عائلتك</p>
							<?php else: ?>
								<h4>PET FRIENDLY</h4>
								<p>We us pet friendly cleaners as your pet is a valued member of your family.</p>
							<?php endif; ?>
						</li>
						<li class="column column-1-3">
							<span class="service-icon big features-delivery tick"></span>
							<?php if($currentLang->direction == 'rtl'): ?>
								<h4>دائما في الوقت المحدد</h4>
								<p>وقتك مهم بالنسبة لنا. نحن نقدم خدمة التنظيف دائمًا في الوقت المحدد</p>
							<?php else: ?>
								<h4>ALWAYS ON TIME</h4>
								<p>Your time is important to us. We provide always on time cleaning service.</p>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvin\core\resources\views/front/about.blade.php ENDPATH**/ ?>