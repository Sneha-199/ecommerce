@extends('layouts.master')

@section('title', 'Editorder ')


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
            <h3 class="card-title"> ORDER DETAILS</h3>

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
      <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit Order</h5>
      <!--end::Page Title-->

    </div>
    <!--end::Info-->

  </div>
</div>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit </h1>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Employee</li> --}}
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card">
                {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Employee</h6>
                </div> --}}
                <div class="card-body">
                    <form method="POST" action="{{route('updateOrder',[$order->id])}}" enctype="multipart/form-data">@csrf
                        {{ method_field('PUT') }}
                        <div class="form-group col-md-6">
                            <label for="cname">Customer Name</label>
                            <input type="text" value="{{$order->customername}}" class="form-control @error('cname') is-invalid @enderror" id="cname" name="cname" placeholder="customer Name" >
                            @error('cname')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pnumber">phonenumber</label>
                            <input type="pnumber" name="pnumber" value="{{$order->phonenumber}}" class="form-control @error('pnumber') is-invalid @enderror" id="pnumber" placeholder="Phonenumber">
                            @error('pnumber')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Product</label>
                            <select class="form-control @error('product') is-invalid @enderror" name="product">
                                <option value="">Select product</option>
                                @foreach(App\Models\Product::all() as $key=> $product)
                                <option value=" {{$product->id}}" {{ $product->id===$order->products_id?'selected':'' }}>{{$product->productname}}</option>
                                @endforeach

                            </select>
                            @error('product')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="quantity">Quantity</label>
                            <input type="quantity" name="quantity" value="{{$order->quantity}}" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="quantity">
                            @error('quantity')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>



                    </form>
                </div>
            </div>


        </div>


    </div>


</div>
@endsection
