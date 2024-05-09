

<?php $__env->startSection('content'); ?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $ordersDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ordersDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($ordersDetail->name); ?></td>
      <td><?php echo e($ordersDetail->description); ?></td>
      <td><?php echo e($ordersDetail->quantity); ?></td>
      <td><?php echo e($ordersDetail->action); ?></td>
    </tr>
   
   
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-PMS\resources\views/admin/order/details.blade.php ENDPATH**/ ?>