

<?php $__env->startSection('css'); ?>
    <style>
      .swal-height {
        height: 500px !important;
      }
    </style>
<?php $__env->stopSection(); ?>
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
      <th>SL</th>
      <th >Title</th>
      <th >Description</th>
      <th class="text-center">Status</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($loop->index + 1 + (($page-1)*10)); ?></td>
        <td><?php echo e($order->title); ?></td>
        <td><?php echo e($order->description); ?></td>
        <td class="text-center"><?php echo e($order->status); ?></td>
        <td class="text-center">
          <button class="btn btn-sm btn-success">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
          <a class="btn btn-sm btn-info" href="<?php echo e(route('orders.details')); ?>">Details</a>
          
        </td> 
      </tr>   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td class="text-center" colspan="5">No data found!</td>
      </tr>
        
    <?php endif; ?>
  </tbody>
</table>
<div class="w-100 d-felx justify-content-center">

  <?php echo e($orders->links()); ?>


</div>




<div class="modal fade" tabindex="-1" id="exampleModal">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Order Requirement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $__env->make('admin.order.create-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
     
  
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
    var inputHtml= $('#item-list-1').html();
    $("#add-item").click(function(){
      $('#item-container').append('<div class="row">' + inputHtml + '</div>');
    });

    $('#create-order-form').on('submit', function(event){
        event.preventDefault();

        $.ajax({
            url: "<?php echo e(route('create-order-submit')); ?>",
            method: 'POST',
            data: $('#create-order-form').serialize(),

            success:function(response)
            {
              if(response.status){
                swal({
                    title: 'Create Successfully',
                    customClass: 'swal-height',
                    icon: 'success',
                    timer: 2000,
                    buttons: false,
                })
                .then(() => {
                  location.reload()

                })

              }
              
            },
            error: function(response) {
            }
        });
    });
 
  });
  </script>
    
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-PMS\resources\views/admin/order/orderlist.blade.php ENDPATH**/ ?>