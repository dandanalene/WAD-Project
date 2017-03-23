<!DOCTYPE html>
<html>
<head>
	<title>Order Form</title>
	<link rel="shortcut icon" href="{{asset('images/logo.ico')}}">
<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			font-family: calibri;
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
	      		opacity: 0.7;
	    }


		fieldset
		{
			margin-right: 300px;
			margin-left: 300px;
			padding: 10px;
			border-radius: 10px;
			background-color: #D7DBDD;
		}

		form 
		{
			font-weight: bold;
			padding: 20px;
			margin-top: 20px;
			
		}

		input, textarea 
		{
			margin-top: 5px;
			margin-bottom: 10px;
			width: 70%;
			border-radius: 5px;
			border: solid 3px #ccc;
			padding: 7px 10px;
			resize: none;
		}

		button
		{
			
			padding: 7px 25px;
			color: #FFFFFF;
			background-color: #3366FF;
			font-size: 18px;
			font-weight: 500;
			cursor: pointer;
			border-radius: 10px;
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
		        <li class="orders"><a href="/yourOrder">Orders</a></li>
		        <li class="about"><a href="#">About</a></li>
		     </ul>
	</nav></div>
	<br><br>

<form method="POST" action="/order">
	{{csrf_field()}}
	<center>
	<fieldset>
		<legend><h1>Order Form</h1></legend>


		<h3>
		Name: <br>
		<input type="text" name="name" required>
		<br>
		Address: <br>
		<textarea name="address" rows="3" cols="40"></textarea> <br>
	
		Contact Number: <br>
		<input type="number" name="contact"  required><br>

		<br>
		Orders: <br>
		Item:
		<input type="text" name="item" required>
		<br>
		Price:
		<input type="number" name="price" required>

		</h3>
		<button type="submit"> Submit </button>
		
		</fieldset>
	</center>



	</form>


</body>
</html>