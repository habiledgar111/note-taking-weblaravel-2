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
    <?php
        $token = Cookie::get('token');
        $request2 = Http::withHeaders([
        'token' => $token
    ])->get('note-taking.my.id/public/note/');
    $note = json_decode($request2);
    ?>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">All Notes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <?php
            foreach($note->user as $note){ ?>
                <div>
                    <div className="container mx-auto my-4">
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 xl:grid-cols-3">
                            <div className="shadow p-4 md:mx-0 mx-4 bg-slate-50 rounded-md mt-6">
                                <h2 className="text-xl font-bold">
                                    <?php
                                     echo "$note->judul";
                                     $delete = "deleteNote/".$note->id;
                                     $update = "update/".$note->id;
                                     ?>
                                </h2>
                                <p className="text-sm">
                                    <?php echo "$note->content"; ?>
                                 </p>
                                <a href="<?php echo $delete ?>"><i class="fa fa-trash"></i> Delete</a>
                                <a href="<?php echo $update ?>"><i class="fa fa-edit"></i> Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- /.box-body -->



        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\pemograman integeratif\fixnotee\resources\views/dashboard.blade.php ENDPATH**/ ?>