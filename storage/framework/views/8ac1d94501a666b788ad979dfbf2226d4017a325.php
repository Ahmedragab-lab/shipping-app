<!-- Deleted inFormation Student -->
<div class="modal fade" id="delete_product<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">delete categorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <h5 style="font-family: 'Cairo', sans-serif;">Are you sure to delete this product !</h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button  class="btn btn-danger"><?php echo e(__('submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/admin/products/delete.blade.php ENDPATH**/ ?>