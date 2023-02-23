
<?php $__env->startSection('meta-keywords', "$setting->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$setting->meta_description"); ?>
<?php $__env->startSection('content'); ?>
    <div class="theme-page padding-bottom-100">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row">
                <div class="page-header-left">
                    <h1>
                        <?php if($currentLang->direction == 'rtl'): ?> المشاريع  <?php else: ?> Projects <?php endif; ?>
                    </h1>
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
                                <?php if($currentLang->direction == 'rtl'): ?> المشاريع  <?php else: ?> Projects <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="row page-margin-top-section">
                <ul class="tabs-navigation small isotope-filters clearfix">
                    <li><a class="selected" href="#filter-*" title="Show all">Show all</a></li>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="#filter-<?php echo e($cat->id); ?>" title="Apartment"><?php echo e($cat->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <ul class="projects-list isotope">
                    <?php $__currentLoopData = $work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($w->bcategory_id); ?>">
                            <a title="Apartment Cleaning">
                                <img src="<?php echo e(asset('assets/front/img/'.$w->image)); ?>" alt="">
                            </a>
                            <div class="view align-center">
                                <div class="vertical-align-table">
                                    <div class="vertical-align-cell">
                                        <p><?php echo e($w->title); ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvinCare\core\resources\views/front/work.blade.php ENDPATH**/ ?>