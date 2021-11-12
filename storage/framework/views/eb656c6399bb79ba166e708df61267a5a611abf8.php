<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>

<!-- plugins-jquery -->
<script src="<?php echo e(asset('assets/js/plugins-jquery.js')); ?>"></script>
<!-- plugin_path -->
<script type="text/javascript"> var plugin_path = "<?php echo e(asset('assets/js')); ?>/";</script>


<!-- chart -->
<script src="<?php echo e(asset('assets/js/chart-init.js')); ?>"></script>

<!-- calendar -->
<script src="<?php echo e(asset('assets/js/calendar.init.js')); ?>"></script>

<!-- charts sparkline -->
<script src="<?php echo e(asset('assets/js/sparkline.init.js')); ?>"></script>

<!-- charts morris -->
<script src="<?php echo e(asset('assets/js/morris.init.js')); ?>"></script>

<!-- datepicker -->
<script src="<?php echo e(asset('assets/js/datepicker.js')); ?>"></script>

<!-- sweetalert2 -->
<script src="<?php echo e(asset('assets/js/sweetalert2.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<!-- toastr -->
<script src="<?php echo e(asset('assets/js/toastr.js')); ?>"></script>

<!-- validation -->
<script src="<?php echo e(asset('assets/js/validation.js')); ?>"></script>

<!-- lobilist -->
<script src="<?php echo e(asset('assets/js/lobilist.js')); ?>"></script>

<!-- custom -->
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>
<?php if(App::getLocale() == 'en'): ?>
    <script src="<?php echo e(URL::asset('assets/js/bootstrap-datatables/en/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/bootstrap-datatables/en/dataTables.bootstrap4.min.js')); ?>"></script>
<?php else: ?>
    <script src="<?php echo e(URL::asset('assets/js/bootstrap-datatables/ar/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/bootstrap-datatables/ar/dataTables.bootstrap4.min.js')); ?>"></script>
<?php endif; ?>


<script>
    $(".img").change(function(){
        if(this.files && this.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".img-preview").attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>

<?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/layouts/script.blade.php ENDPATH**/ ?>