

@extends('layouts.master')

@section('title', 'viewproduct')

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">


        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> DETAILS</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
           <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
      <!--begin::Page Title-->
      <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">view products</h5>
      <!--end::Page Title-->

    </div>
    <!--end::Info-->

  </div>
</div>


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All products</h1>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li> --}}

        </ol>
    </div>

    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error')}}
            </div>
            @endif
            <div class="card mb-4">

                {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All questions</h6>
                </div> --}}
           {{-- <div>
                <a class="btn btn-primary" href="{{route('product.addproduct')}}" role="button">Add products</a>
           </div> --}}

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="mydataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>S.no</th>
                                {{-- <th>Photo</th> --}}
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $key => $product)

                            <tr>
                                <td>{{ $key+1 }}</td>
                                {{-- <td><img src="{{ Storage::url('public/images/'.$product->photo) }}" alt="img" style="height: 50px;width:auto;"></td> --}}
                                <td>{{ $product->productname }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->categories->category }}</td>

                                <td style="display:flex">
                                    <a title="Edit" href="{{route('editProduct',[$product->id])}}" class="btn btn-primary">Edit</a>&nbsp;
                                    <a class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-form{{ $product->id }}').submit();">
                                        <i class="fas fa-trash" style="color: #fff;"></i>
                                    </a>
                                    <form action="{{ route('deleteProduct',[ $product->id ]) }}" id="delete-form{{ $product->id }}" method="post">
                                        {{method_field('DELETE')}}
                                        @csrf</form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>


    </div>



</div>

@endsection

<script href="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#mydatatable').DataTable();
} );
</script>
