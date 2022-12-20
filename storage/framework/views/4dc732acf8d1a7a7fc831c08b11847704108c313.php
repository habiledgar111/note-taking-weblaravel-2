<?php $__env->startSection('content'); ?>
<!-- <section class="content-header">

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="dashboard"><i class="fa fa-dashboard"></i>Add Notes</a></li>
    </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Create a Notes</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-11">
                <div class="card o-hidden border-0 shadow-lg my-5">
                 <div class="card-body p-0">

                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4"></h1>
                        </div>

                          <form  action="addNote" method="post" class="user">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control form-control-user " placeholder="Content" cols="30" rows="12"></textarea>
                                </div>

                                <input type="submit" value="submit" class="btn btn-primary btn-user btn-block">
                            </form>

                            <hr>

                        </div>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.box-body -->



        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\pemograman integeratif\fixnotee\resources\views/add.blade.php ENDPATH**/ ?>