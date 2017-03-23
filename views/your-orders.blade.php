<!DOCTYPE html>
<html>
<head>
	<title>Your Order</title>
	<link rel="shortcut icon" href="{{asset('images/logo.ico')}}">

  

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>

	<style type="text/css">

		body{
			margin: 0;
			padding: 0;
			background-color: #f5f5f5;
		}

		.container {
			margin: 0 auto;
			width: 85%;
		}

		nav	{
			width: 100%;
		}

		nav img
		{
			height: 200px;
			padding: 3px;
			width: 100%;

		}

		nav ul {
		      list-style: none;
		      background-color: #444;
		      text-align: center;
		      padding: 0;
		      margin: 0;
		      overflow: auto;
		 }

		 nav li {
		      font-family: 'Oswald', sans-serif;
		      border: 1px solid;
		      width: 120px;
		      border: 1px;
		      height: 50px;
		      line-height: 50px;
		      font-size: 1.4em;
		      display: inline-block;

    	} 

    	nav a {
		      text-decoration: none;
		      color: white;
		      display: block;
		      transition: .3s background-color;	
	    }


	    nav li :hover {
	      		background-color: #FDF2E9;
	      		opacity: 1;
	    }


	    td:hover{
	    	
	    	background-color: #ccccb3;

	    }

</style>
</head>
<body>

		<nav>
		<div class="container">
			<img src="{{URL::asset('images/logo.png')}}">
			 <ul>
		        <li class="home"><a href="/home">Home</a></li>
		        <li class="toorder"><a href="/toOrder">To Order</a></li>
		        <li class="orders"><a href="/yourOrder">Your Orders</a></li>
		        <li class="about"><a href="#">About</a></li>
		     </ul>
	</nav>
	<br>
<center>
<section>
	<table class="table table-hover" style="width:75%">
		<thead>
			<tr>
			    <th><h1>Name &nbsp; </h1></th>
			    <th><h1>Address &nbsp; </h1></th>
			    <th><h1>Contact &nbsp; </h1></th>
			    <th><h1>Item &nbsp; </h1></th>
			    <th><h1>Price &nbsp; </h1></th> 
			   
			 </tr>
		 </thead>
		
		 <?php foreach ($closets as $closet): ?>
		 <tbody>
		 	<tr>

			    <tr><td><?php echo $closet->name ?> </td>
			    <td><?php echo $closet->address ?> </td>
			    <td><?php echo $closet->contact ?> </td>
			    <td><?php echo $closet->item ?> </td>
			    <td><?php echo $closet->price ?> </td>
			    
			    
			    <td>
			    	<form method="post" action="/update/{{$closet->id}}">
		          {{ csrf_field() }}
		          <input type="hidden" name="id" value="{{$closet->id}}">
		          <input type="hidden" name="name" value="{{$closet->name}}">
		          <input type="hidden" name="address" value="{{$closet->address}}">
		          <input type="hidden" name="contact" value="{{$closet->contact}}">
		          <input type="hidden" name="item" value="{{$closet->item}}">
		          <input type="hidden" name="price" value="{{$closet->price}}">
		          <button type="submit" class="btn btn-primary">Edit</button> <br>
		            </form>
		        </td>
		        <td>

		            <form method="post" action="/delete/{{$closet->id}}">
		          {{ csrf_field() }}
		          <input type="hidden" name="id" value="{{$closet->id}}">
		          <input type="hidden" name="name" value="{{$closet->name}}">
		          <input type="hidden" name="address" value="{{$closet->address}}">
		          <input type="hidden" name="contact" value="{{$closet->contact}}">
		          <input type="hidden" name="item" value="{{$closet->item}}">
		          <input type="hidden" name="price" value="{{$closet->price}}">
		          <button type="submit" class="btn btn-danger">Delete</button> 
		            </form>


			    	<!-- <div id="edit">					
							<a href="/students/edit/{{ $closet->id }}">
								Edit
							</a>
					</div> -->
			    </td>
			  </tr>
			  
		</tbody>
		<?php endforeach ?>

		</table>
		<br><br>
		
		
		

</section>
</center>

</body>
</html>