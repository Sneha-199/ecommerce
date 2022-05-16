{{-- @extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

 @extends('Layouts.usermaster')
 @section('content')
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>Projects</h1>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="#"></a></li>
                             <li class="breadcrumb-item active"></li>
                         </ol>
                     </div>
                 </div>
             </div><!-- /.container-fluid -->
         </section>

         <section class="content">

             <!-- Default box -->
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">ONLINE QUIZ</h3>

                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                         <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                             <i class="fas fa-times"></i>
                         </button>
                     </div>
                 </div>

                 <!-- /.card-body -->
                 <div class="card-footer">
                     Footer
                 </div>
                 <!-- /.card-footer-->
             </div>
             <!-- /.card -->

         </section>
         <!-- /.content -->
     </div>
 @endsection
