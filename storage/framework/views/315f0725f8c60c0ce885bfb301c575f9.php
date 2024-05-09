<form action="" method="post" id="create-order-form">
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    

    <div class="col-12">
        <div class="d-flex">
            <div>
                <h6>Item list</h6>
            </div>
            <div class="ps-2">
                <i class="fa-solid fa-circle-plus" style="cursor: pointer" id="add-item"></i>
            </div>
        </div>
    </div>
    <div class="row" id="item-list-1">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="item_name[]" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" name="item_description[]" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                <input type="number" name="item_quantity[]" class="form-control" id="exampleFormControlInput1" placeholder="" min="1">
            </div>
        </div>

    </div>
    <div class="col-12" id="item-container">

    </div>

    <div class="text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form><?php /**PATH C:\xampp\htdocs\project-PMS\resources\views/admin/order/create-form.blade.php ENDPATH**/ ?>