
@extends('layouts.app')


@section('content')
@include('includes.message-block')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel-panel-default">
<div class="panel-heading">New Auction</div>
<div class="panel-body">
<form method="POST" action="{{url('add')}}">
<input type="text" class="form-control" name="name" placeholder="Auction name"><br>
<textarea rows="10" name="description" class="form-control" placeholder="Description"></textarea><br>
<input type="number" class="form-control" name="min_price" placeholder="min_price"><br>
<input type="text" class="form-control" name="start_date" placeholder="start_date"><br>
<input type="text" class="form-control" name="end_date" placeholder="end_date"><br>
<button type="submit" class="btn btn-primary">Add Auction</button>
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</div>
</div>
</div>
</div>
</div>

 
<div class="panel-body">
<div class="form-group">
<div class="col-sm-3">
<label for="">Auction name</label>
<div class="input-group">
<input type="text" name="start_date" id ="start_date" class="form-control">
<div class="input-group-addon">
<span class="fa fa-calendar"></span>
</div>
</div>
</div>

<div class="col-sm-4">
<label for="">Category</label>
<div class="input-group">
<select class="form-control" name="category" id="category">
</select> 
<div class="input-group-addon">
<span class="fa fa-plus"></span>
</div>
</div>
</div>
</div>
</div>

  
                 @endsection
				 
				 @section('script')
				 <script type ="text/javascript">
				 $('#start_date').datepicker({
					 
				 })
				 </script>
				 @endsection