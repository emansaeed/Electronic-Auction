@extends('layouts.app')
<style>
.profile-img{
	max-width:150px;
	border:5px solid #fff;
	border-radius:100%;
	box-shadow:0 2px 2px rgba(0 , 0 , 0 , 0.3);
}
</style>
@section('content')
@include('includes.message-block')
 
<div style="background-img:url(img/AA.jpg)">
 <section class="row new-post">
     <div class="col -md-6 col-md-offset-3">
         <header>
             <h3 style="color: #997a00">What you say?</h3>
         </header>
         <form action="{{ route('post.create') }}" method="POST">
             <div class="form-group" style="width:560px">
                 <textarea class="form-control"
                 name="body" id="new-post"
                 rows="5"  placeholder="your say?">    
                 </textarea>
             </div>
             <button type="submit" class="btn btn-primary">
                 create post
             </button>
        <input type="hidden" value="{{Session::token()}}" name="_token">
         </form>
     </div>
 </section>

 <div style="box-shadow: 10px 10px 5px #888888;border-radius:9px;float:left;width:260px ;background-color:white;height:180px; margin-top:-240px ; margin-left:30px;">
        <button class="btn btn-primary" style=" width:200px ;margin-left:30px; margin-top:40px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>My Auctions</button>

 </div>
   <div style="box-shadow: 10px 10px 5px #888888;border-radius:9px;float:right;width:260px ;background-color:white;height:280px; margin-top:-240px ; margin-right:120px;">
      <a href="{{route('house')}}"><button class="btn btn-warning" style=" width:200px ;margin-left:30px; margin-top:40px">Houses & Lands</button></a>
	  <a href="{{route('car')}}"><button class="btn btn-warning" style=" width:200px ; margin-top:30px;margin-left:30px;">Cars</button></a>
	    <a href="{{route('art')}}"><button class="btn btn-warning" style=" width:200px ; margin-top:30px;margin-left:30px;">Arts & pictures</button></a>
	    <a href="{{route('picture')}}"><button class="btn btn-warning" style=" width:200px ; margin-top:30px;margin-left:30px;">Vans</button></a>

 </div>


 
<section class="row posts" style="margin-top:-140px">
    <div class="col-md-6 col-md-offset-3">
        <header><h3 style="margin-left:120px ; color: #997a00">What other people say..</h3></header>
@foreach($posts as $post)

  <article style="border-radius:5px ; padding:3px 0 0 6px;box-shadow: 10px 10px 5px #888888;height:90px; background-color:rgb(255, 255, 213) ; width:550px" class="post" data-post-id="{{$post->id}}">
       
	   <p>{{$post->body}}</p>
    <div class="info" style="background-color:rgb(255, 240, 230);margin-top:50px ; padding:3px 0 0 6px">
	Posted by {{$post->user->name}} on {{$post->created_at}}
    </div>
<div class="interaction">
    <a  class= "like" href="#">{{Auth::user()->likes()->where('post_id' , $post->id)->first()  }}</a> 
    <a  class= "like" href="#">{{Auth::user()->likes()->where('post_id' , $post->id)->first() }}</a>
   

	
	@if(Auth::user() == $post->user)
	
    <a href="{{route('post.delete' , ['post_id'=>$post->id])}}">Delete</a>
@endif
	</div>
    </article>
	<br>
	<br>
@endforeach
</div>
</section>
</div>



 
<script>
var token ='{{Session::token()}}';
var urlEdit ='{{route('edit')}}';
var urlLike ='{{route('like')}}';


</script>


@endsection
