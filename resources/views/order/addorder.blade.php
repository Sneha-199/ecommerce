
@extends('Layouts.master')

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
            <h3 class="card-title">Order DETAILS</h3>

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
      <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Add Order</h5>
      <!--end::Page Title-->

    </div>
    <!--end::Info-->

  </div>
</div>


<div class="col-lg-6">
  <!--begin::Card-->
  <div class="card card-custom example example-compact">
    <div class="card-header">
      <h3 class="card-title">Add order</h3>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add order</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('saveorder') }}" enctype="multipart/form-data">@csrf
                        <div class="form-group col-md-6">
                            <label for="cname">Customer Name</label>
                            <input type="text" class="form-control @error('cname') is-invalid @enderror" id="cname" name="cname" placeholder="Customer Name" value="{{ old('cname') }}">
                            @error('cname')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pnumber">phone number</label>
                            <input type="pnumber" name="pnumber" class="form-control @error('pnumber') is-invalid @enderror" id="pnumber" value="{{ old('pnumber') }}" placeholder="pnumber">
                            @error('pnumber')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product">product</label>
                            {{-- <select class="form-control" multiple data-live-search="true" name="product[]" > --}}
                                {{-- form-control @error('product') is-invalid @enderror --}}
                                {{-- <option value="">Select product</option>
                                @foreach(App\Models\Product::all() as $key=> $product)
                                <option value=" {{$product->id}}">{{$product->productname}}</option>
                                @endforeach

                            </select> --}}
                            <select id='myselect' name="product[]" multiple>
                                <option value="">Select product</option>
                                @foreach(App\Models\Product::all() as $key=> $product)
                                <option value=" {{$product->id}}">{{$product->productname}}</option>
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
                            <input type="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" value="{{ old('quantity') }}" placeholder="quantity">
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

      </div>
    </div>
  </form>

  <!--end::Form-->
</div>
<!--end::Card-->
</div>
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
