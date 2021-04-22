
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="resources/css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
    background-color: #0e0d26;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 50%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    /* grid-template-columns: repeat(2, 1fr); */
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #d9d9d9;
	text-transform: uppercase;
	font-size: 1.5rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    /* border-bottom: 2px solid #d9d9d9; */
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 20px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 14px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 10px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #F50057, #ed5187, #F50057);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}

</style>
<body>
	<!-- <img class="wave" src="/img/wave.svg" > -->
	<div class="container">
		<!-- <div class="img">
			 <img src="img/bg.svg">
		</div> -->
		<div class="login-content">
			<form action="{{ url('save')}}" method="post">
				@csrf
				<img src="img/avatar.svg">
				<h2 class="title">Welcome <br>to Student Portal</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="username" class="input" placeholder="Username" value="{{old('username')}}">	  
					</div>
           		</div>
				<span style="color: red; font-size:14px;">@error('username'){{ $message}} @enderror</span>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fa fa-book"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="subjectname" class="input" placeholder="Subject Name" value="{{old('subjectname')}}">
           		   </div>
				</div>
				<span style="color: red; font-size:14px;">@error('subjectname'){{ $message}} @enderror</span>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fa fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="email" class="input" placeholder="Email" value="{{old('email')}}">
           		   </div>
           		</div>
				<span style="color: red; font-size:14px;">@error('email'){{ $message}} @enderror</span>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" class="input" placeholder="Password" value="{{old('password')}}">
            	   </div>
            	</div>
				<span style="color: red; font-size:14px;">@error('password'){{ $message}} @enderror</span>
            	<a href=" {{url('welcome')}}">I already have an account</a>
            	<input type="submit" class="btn" value="Sign in">
                <!-- <input type="submit" class="btn" value="Sign in"> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>