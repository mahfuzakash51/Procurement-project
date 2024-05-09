

<?php $__env->startSection('content'); ?>

<div class="mb-4">
  <div class="d-flex">
    <h4>Order List</h4>
    <button class="btn btn-primary ms-auto"  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Order</button>
  </div>
  <hr>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nothing</td>
      <td>Nothing</td>
      <td>Nothing</td>
      
    </tr>
   
   
  </tbody>
</table>




<div class="modal fade" tabindex="-1" id="exampleModal">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Order Requirement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('admin.order.create-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-PMS\resources\views/order/orderlist.blade.php ENDPATH**/ ?>