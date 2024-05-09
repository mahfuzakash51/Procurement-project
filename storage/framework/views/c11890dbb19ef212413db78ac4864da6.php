

<?php $__env->startSection('content'); ?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order_id</th>
      <th scope="col">Total_cost</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
      <th scope="col">Payment_status</th>
    </tr>
  </thead>
  <tbody>

    <?php $__empty_1 = true; $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoiceList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <tr>
      <th scope="row">1</th>
      <td><?php echo e($invoiceList->oder_id); ?></td>
      <td><?php echo e($invoiceList->total_cost); ?></td>
      <td><?php echo e($invoiceList->status); ?></td>
      <td><?php echo e($invoiceList->details); ?></td>
      <td><?php echo e($invoiceList->payment_status); ?></td>
      
    </tr>
    
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
     <tr>

      <td class="text-center" colspan="6">No data found</td>
    </tr>   
    <?php endif; ?>
  
   
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-PMS\resources\views/admin/invoice/invoicelist.blade.php ENDPATH**/ ?>