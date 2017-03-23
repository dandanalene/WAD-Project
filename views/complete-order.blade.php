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
	    }

	    .data{
	    	text-align: center;
			background-color: #616161;
			width: 350px;
			margin: 0 5px;
			padding: 10px 5px;
			border-radius: 10px;
			display: inline-block;
			color: #e7e7e7;
			font-family: calibri;
	    }

	    button{
	    	width: 130px;
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
	<br><br>
<center>

<div class="data">
	<div class="data1">

		<h1>Your Order</h1>
		<h3> Name: {{ $name }}</h3>
		<h3> Address: {{ $address }}</h3>
		<h3> Contact: {{ $contact }}</h3>
		<h3> Item: {{ $item }}</h3>
		<h3> Price: {{ $price }}</h3>
		

			<form method="POST" action="/add-order">
				{{ csrf_field() }}
				<button type="submit" class="button btn-primary btn-lg"> Add Order </button>
			</form>	
			<br>
			<form method="POST" action="/your-order">
				{{ csrf_field() }}
				<button type="submit" class="button1 btn-success btn-lg"> Show Order </button>
			</form>
	</div>
</div>

<br><br><br>
</center>



</body>
</html>