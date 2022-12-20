@extends('layouts.app')


@section('content')
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
          <h3 class="box-title">Update Notes</h3>
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
<?php
 $token = Cookie::get('token');
    $request2 = Http::withHeaders([
        'token' => $token
    ])->get('note-taking.my.id/public/note/');
    $note = json_decode($request2);
    foreach($note as $note){
        if($note->id == $id){
            $judul = $note->judul;
            $content = $note->content;
?>
                          <form  action="updateNote" method="post" class="user">
                          @csrf
                          <input type="hidden" id="id" name="id" value=<?php echo $id ?> >
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul" value="<?php echo $judul ?>">
                                </div>
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control form-control-user " placeholder="Content" cols="30" rows="12" value="<?php echo $judul ?>"></textarea>
                                </div>

                                <input type="submit" value="submit" class="btn btn-primary btn-user btn-block">
                            </form>
<?php
    }
}?>
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
@endsection
