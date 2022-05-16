@extends('layouts.master')

@section('content')
<h2 style="text-align: center;"><b>Create Questions </b></h2>
<form method="post" action="{{route('makequestion.store')}}">
	{{ csrf_field() }}

		<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput">Question</label>
		    <input type="text" name="question" class="form-control " id="formGroupExampleInput" required>
		  </div>
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">option 1</label>
		    <input type="text" name="option1" class="form-control" id="formGroupExampleInput2" required>
		  </div>
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">Option 2</label>
		    <input type="text" name="option2" class="form-control" id="formGroupExampleInput2" required>
		  </div>
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">Option 3</label>
		    <input type="text" name="option3" class="form-control" id="formGroupExampleInput2" required>
		  </div>
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">Option 4</label>
		    <input type="text" name="option4" class="form-control" id="formGroupExampleInput2" required>
		  </div>
		  <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">Answer</label>
		    <input type="text" name="answer" class="form-control" id="formGroupExampleInput2" required>
		  </div>
		   <div class="form-group">
		    <label class="col-form-label" for="formGroupExampleInput2">Quiz ID</label>
		    <input type="hidden" name="quizid" class="form-control" id="formGroupExampleInput2" readonly>
		  </div>
		  <button type="Submit" class="btn btn-success btn-block">Submit</button>
		</div>

</form>

    @endsection








{{--
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-lg-9 ml-lg-auto">
              <button type="submit" class="btn btn-primary font-weight-bold mr-2" name="submit">Submit</button> --}}

            </div>
          </div>
        </div>
      </form>
      <!--end::Form-->
    </div>
    <!--end::Card-->
    </div>



