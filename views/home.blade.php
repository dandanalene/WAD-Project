<!DOCTYPE html>
<html>
<head>
	<title>Bes Closet</title>
	<link rel="shortcut icon" href="{{asset('images/logo.ico')}}">
	<style type="text/css">

		body{
			margin: 0;
			padding: 0;
			background-color: #f5f5f5;
		}

		.container {
			margin: 0 auto;
			width: 75%;
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

	    
		


		}
		.items {
			padding: 20px;
		}

		.item {
			text-align: center;
			background-color: #616161;
			width: 350px;
			margin: 0 5px;
			padding: 10px 5px;
			border-radius: 10px;
			display: inline-block;
		}

		.item img{
			height: 300px;
		}

		.item a {
			text-decoration: none;
			color: black;
		}



	
	</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script>
  
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
		<div class="items">
			
				<div class="item">
					<a href="" title="Seika Dress" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only"><img src="{{URL::asset('images/1.jpg')}}">
					</a>
				</div>

				<div class="item"><a href="" title="Set" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/2.jpg')}}">
					</a>
				</div>
			
			
				<div class="item">
					<a href="" title="Weird Set" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/3.jpg')}}"></a>
				</div>
				
				<br><br><br>
			
				<div class="item">
					<a href="" title="Top" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 99.99 only">
					<img src="{{URL::asset('images/4.jpg')}}">
					</a>
				</div>
			

			
				<div class="item">
					<a href="" title="Sheeyi Swimwear" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/5.jpg')}}">
					</a>
				</div>
			

			
				<div class="item">
					<a href="" title="Button Down Skirt" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 129.99 only">
					<img src="{{URL::asset('images/6.jpg')}}">
					</a>
				</div>
			

			<br><br><br>
			

				<div class="item">
					<a href="" title="Romper" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 169.99 only">
					<img src="{{URL::asset('images/7.jpg')}}">
					</a>
				</div>
			

			
				<div class="item">
					<a href="" title="Bella Set" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/8.jpg')}}">
					</a>
				</div>
			

			
				<div class="item">
					<a href="" title="Classy Set" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 179.99 only">
					<img src="{{URL::asset('images/9.jpg')}}">
					</a>
				</div>

			<br><br><br>

			
				<div class="item">
					<a href="" title="Mikay Top" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 119.99 only">
					<img src="{{URL::asset('images/10.jpg')}}">
					</a>
				</div>
			

			
				<div class="item">
					<a href="" title="Rib Set Shirt" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 169.99 only">
					<img src="{{URL::asset('images/11.jpg')}}">
					</a>
				</div>
			
	
				<div class="item">
					<a href="" title="Luhan Short" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/12.jpg')}}">
					</a>
				</div>

			<br><br><br>

				<div class="item">
				<a href="" title="Jelai Sling Bag" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/13.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Pull Over Croptop" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/14.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Kate Spade Bag" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 1199.99 only">
					<img src="{{URL::asset('images/15.jpg')}}">
					</a>
				</div>

			<br><br><br>

				<div class="item">
					<a href="" title="Puruntong Short" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 149.99 only">
					<img src="{{URL::asset('images/16.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Tory Shoes" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 999.99 only">
					<img src="{{URL::asset('images/17.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Midi Skirt" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/18.jpg')}}">
					</a>
				</div>

			<br><br><br>

				<div class="item">
					<a href="" title="Long Champ Bag" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 999.99 only">
					<img src="{{URL::asset('images/19.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Midi Skirt" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/20.jpg')}}">
					</a>
				</div>
				
				<div class="item">
					<a href="" title="Cutiepie Bagpack" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 249.99 only">
					<img src="{{URL::asset('images/21.jpg')}}">
					</a>
				</div>

			<br><br><br>

				<div class="item">
					<a href="" title="Jelai Sling Bag" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/22.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Romper" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 169.99 only">
					<img src="{{URL::asset('images/23.jpg')}}">
					</a>
				</div>

				<div class="item">
					<a href="" title="Anne Smith Set" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Price= 199.99 only">
					<img src="{{URL::asset('images/24.jpg')}}">
					</a>
				</div>

				<br><br><br>



		</div>
		</center>
	</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
</script>




</body>
</html>