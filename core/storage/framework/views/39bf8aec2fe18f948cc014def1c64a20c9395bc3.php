

<?php $__env->startSection('content'); ?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Contacts</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item">Contacts</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
  
    <!---------------card----------------->
    <div class="row">
      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4">
        <!--frist card--->
        <div class="card ">
          <div class="modal-header">
            <h5 style="font-size:15px" class="modal-title" id="exampleModalLabel"><?php echo e($contact->created_at); ?></h5>
            <button type="button" class="close" style="opacity: 1;" data-dismiss="modal" aria-label="Close">
             <a href="<?php echo e(route('admin.deleteContact',$contact->id)); ?>)}}">
               <i style="color:white; background-color:red ;padding:10px; border-radius:5px" class="fa-solid fa-trash-can"></i>
             </a>
            </button>
          </div>
          <div class="card-body">
            <h3 class="card-title"><?php echo e($contact->name); ?></h3>
            <p class="card-text">
            <h5><?php echo e($contact->email); ?></h5>
            <h5><?php echo e($contact->phone); ?></h5>
              </p>
              <p>
                <?php echo e($contact->message); ?>

              </p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marvin\core\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>