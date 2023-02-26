
<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>
<div class="theme-page">
	<div class="clearfix">
		<div class="row page-margin-top-section">

			<div class="column column-1-8">
				<a>
					<img height="100px" width="500px" src='<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($sectionInfo->about_image); ?>' alt='img'>
				</a>
			</div>
			<div class="column column-1-2">
				<h2 class="box-header"><?php echo e($sectionInfo->about_title); ?></h2>
				<p class="align-center padding-0 margin-top-27 padding-left-right-35">
					<?php echo $sectionInfo->about_subtitle; ?>

				</p>
				<ul class="list margin-top-20">
					<?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="template-tick-1"><?php echo e($about->feature); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
		<div class="row margin-top-89">
			<div class="row">
				<h2 class="box-header"><?php echo e($sectionInfo->plan_title); ?></h2>
				<p class="description align-center"><?php echo e($sectionInfo->plan_subtitle); ?></p>
				<div class="row page-margin-top">
					<div class="column column-1-4">
						<ul class="features-list align-right margin-top-30">
							<?php $__currentLoopData = $whyus->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $why): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<div>
									<img width="75px" src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($why->icon); ?>">
								</div>
								<h4><?php echo e($why->name); ?></h4>
								<p><?php echo $why->disc; ?></p>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="column column-1-2 align-center">
						<div class="image-wrapper">
							<img src="<?php echo e(asset('/')); ?>assets/front/img/top-cleaning-service-2.png" alt="" class="radius border">
						</div>
					</div>
					<div class="column column-1-4">
						<ul class="features-list margin-top-30">
							<?php $__currentLoopData = $whyus->skip(2)->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $why): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<div>
									<img width="75px" src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($why->icon); ?>">
								</div>
								<h4><?php echo e($why->name); ?></h4>
								<p><?php echo $why->disc; ?></p>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row full-width gray padding-top-89 padding-bottom-96">
			<div class="row">
				<h2 class="box-header">
					<?php echo e($sectionInfo->service_title); ?></h2>
				<p class="description align-center"><?php echo e($sectionInfo->service_subtitle); ?></p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="services-list horizontal-carousel clearfix page-margin-top">
						<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="column column-1-3" style="max-height: 500px; height: 100%">
							<a>
								<div class="overflow-hidden">
									<img src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($service->image); ?>" alt="">
								</div>
							</a>
							<h4 class="box-header"><?php echo e($service->name); ?></h4>
							<?php echo $service->content; ?>

						</li>
						<!------------------------->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
				<!--------------------------------->

			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header"><?php echo e($sectionInfo->testimonial_title); ?></h2>
				<p class="description align-center"><?php echo e($sectionInfo->testimonial_subtitle); ?></p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="projects-list horizontal-carousel clearfix page-margin-top">
						<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="column column-1-3">
							<a href="project_apartment_cleaning.html" title="Apartment Cleaning">
								<img src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($project->image); ?>" alt="">
							</a>
							<div class="view align-center">
								<div class="vertical-align-table">
									<div class="vertical-align-cell">
										<p><?php echo e($project->name); ?></p>
										
									</div>
								</div>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header"><?php echo e($sectionInfo->blog_title); ?></h2>
				<p class="description align-center"><?php echo e($sectionInfo->blog_subtitle); ?></p>
				<div class="carousel-container margin-top-65 clearfix">
					<ul class="projects-list horizontal-carousel clearfix page-margin-top">
						<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="column column-1-3">
							<a href="project_gutter_cleaning.html" title="Gutter Cleaning">
								<img src="<?php echo e(asset('/')); ?>assets/front/img/<?php echo e($blog->main_image); ?>" alt="">
							</a>
							<div class="view align-center">
								<div class="vertical-align-table">
									<div class="vertical-align-cell">
										<p><?php echo e($blog->title); ?></p>
										<a class="more simple" href="<?php echo e(route('front.blogdetails',$blog->slug)); ?>" title="View project">View Article</a>
									</div>
								</div>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-89 padding-bottom-100">
			<div class="row">
				<h2 class="box-header"><?php echo e($sectionInfo->offer_title); ?></h2>
				<p class="description align-center"><?php echo e($sectionInfo->offer_subtitle); ?></p>
				<div class="carousel-container margin-top-65 clearfix">
					<div class="owl-carousel owl-theme">
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/1676842446697983732.png" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/1676842446697983732.png" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16771418661728060005.png" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/16769845231163908613.jpg" alt=""></div>
						<div class="item"><img src="<?php echo e(asset('/')); ?>assets/front/img/1676842446697983732.png" alt=""></div> 

					</div>
				</div>
			</div>
		</div>


	</div>


</div>
</div>






</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.new_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvin\core\resources\views/front/index.blade.php ENDPATH**/ ?>