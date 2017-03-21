
@extends('layouts.app')


@section('content')

 
<div class="row">
<div class="col-lg-12">
<h3 class="page-header"><i class="fa fa-file-text-o"></i> <img src="img/2q.jpg"
 style=" margin-left:600px;border-radius:90px;width:`150px ; height:150px"></h3>


<ol class="breadcrumb">
<li><i class="fa fa-home"></i><a href="{{route('welcome')}}">Home</a></li>
<li><i class="icon-document-alt"></i>Vans</li>
</ol>


</div>
</div>
@if (Auth::guest())
                            <td><a href="{{ route('register') }}">Welcome</a></td>
                        @else
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Add new Auction
</button>

                           
                        @endif
<div class="row">
<div class="col-lg-12">
<section class="panel panel-default">
<header class="panel-heading">
     <div class="table-responsive" style="margin-left:60px ; ">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>No</th>
                   <th>Name</th>
                  <th>Description</th>
                    <th>Min price</th>
                  <th>Owner</th>
                  <th>Highest price</th>
                   <th>Start date</th>
                  <th>End date</th>
                 
              

                </tr>
              </thead>
              <tbody>
			      @foreach ($pictures as  $picture)
				<tr>
                <td>{{ ++$i }}</td>

        <td>{{ $picture->name }}</td>

        <td>{{ $picture->description }}</td>
		 <td>{{ $picture->min_price }}</td>
				        <td></td>
				        <td></td>

				        <td>{{ $picture->start_date }}</td>

						        <td>{{ $picture->end_date }}</td>
								
								@if (Auth::guest())
                            <td><a href="{{ route('register') }}">Create Account</a></td>
                        @else
							<td><button>Ingage</button></td>


                           
                        @endif

                </tr>
				  @endforeach
                 
              </tbody>
            </table>
          </div>
                </div>
            </div>                              </div>
</header>

</section>
</div>
</div>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Pictures new Auction </h4>
      </div>
      <div class="modal-body">
	  <div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-2">
<div class="panel-panel-default">
<div class="panel-heading">New Auction</div>
<div class="panel-body">
<form method="POST" action="{{url('picture')}}">
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
</div>
</div>
</div>
</div>


  
        
  
                 @endsection