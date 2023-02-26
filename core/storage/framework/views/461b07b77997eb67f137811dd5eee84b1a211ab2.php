

<?php $__env->startSection('meta-keywords', "$blog->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$blog->meta_description"); ?>
<?php $__env->startSection('content'); ?>
	<div class="theme-page padding-bottom-100">
		<div class="row gray full-width page-header vertical-align-table">
			<div class="row">
				<div class="page-header-left">
					<h1><?php echo e($blog->title); ?></h1>
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
								<a title="Home" href="<?php echo e(route('front.blogs')); ?>">
									<?php echo e(__('Blog')); ?>

								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								<?php echo e($blog->title); ?>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="row page-margin-top-section">
				<div>
					<div class="blog clearfix">
						<div class="post single">
							<a href="post.html" title="How to: deep clean your kitchen" class="post-image">
								<div class="post-date">
									<div class="month"><?php echo e(date('M',strtotime($blog->created_at))); ?></div>
									<h4><?php echo e(date('d',strtotime($blog->created_at))); ?></h4>
								</div>
								<img src="<?php echo e(asset('assets/front/img/'.$blog->main_image)); ?>" alt="">
							</a>
							<h2><a><?php echo e($blog->title); ?></a></h2>
							<div class="post-content-details-container clearfix">
								<ul class="post-content-details left">
									<li><?php echo e(date ( 'd M, Y', strtotime($blog->created_at) )); ?></li>
								</ul>
							</div>
							<p class="margin-top-10"><?php echo $blog->content; ?></p>
						</div>
					</div>
				</div>












			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvin\core\resources\views/front/blogdetails.blade.php ENDPATH**/ ?>