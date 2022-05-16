{{-- @extends('layouts.master')

@section('content')

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

<form method="post" action="{{route('examinfo.store')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">Teacher ID</label>
	    <input type="text" name="Teacher_id" class="form-control " id="formGroupExampleInput" placeholder="example:someone111" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Course Name</label>
	    <input type="text" name="Course" class="form-control" id="formGroupExampleInput2" placeholder="example:SWE111" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Number Of Question</label>
	    <input type="text" name="question_lenth" class="form-control" id="formGroupExampleInput2" placeholder="E.g 10" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Set time</label>
	    <input type="text" name="time" class="form-control" id="formGroupExampleInput2" placeholder="Enter In Minite" required>
	  </div>
	  <div class="form-group">
	    <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
	  </div>
	  <button type="Submit" name="submit" class="btn btn-success btn-block">Submit</button>
	</div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>success</strong> successfully added
        <button type="Submit" name="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

</form>

    @endsection --}}
    @extends('Layouts.master')

@section('content')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
      <!--begin::Page Title-->
      <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Add examinfo</h5>
      <!--end::Page Title-->

    </div>
    <!--end::Info-->

  </div>
</div>


<div class="col-lg-6">
  <!--begin::Card-->
  <div class="card card-custom example example-compact">
    <div class="card-header">
      <h3 class="card-title">Add exam info </h3>

    </div>
    <!--begin::Form-->
    <form class="form" method="post" action="{{route('examinfo.store')}}">
      @csrf


     <div class="card-body">

      @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success')}}
      </div>
      @elseif(Session::has('failed'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('failed')}}
      </div>
      @endif


      <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput">Teacher ID</label>
          <input type="text" name="Teacher_id" class="form-control " id="formGroupExampleInput" placeholder="example:someone111" required>
        </div>
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput2">Course Name</label>
          <input type="text" name="Course" class="form-control" id="formGroupExampleInput2" placeholder="example:SWE111" required>
        </div>
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput2">Number Of Question</label>
          <input type="text" name="question_lenth" class="form-control" id="formGroupExampleInput2" placeholder="E.g 10" required>
        </div>
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput2">Set time</label>
          <input type="text" name="time" class="form-control" id="formGroupExampleInput2" placeholder="Enter In Minite" required>
        </div>
        <div class="form-group">
          <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
        </div>




    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-lg-9 ml-lg-auto">
          <button type="submit" class="btn btn-primary font-weight-bold mr-2" name="submit">Submit</button>

        </div>
      </div>
    </div>
  </form>
  <!--end::Form-->
</div>
<!--end::Card-->
</div>



@endsection
