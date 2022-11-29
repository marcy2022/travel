<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/dist/css/font-awesome.min.css">
	 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title>ds</title>
	<style type="text/css">
		.m{
             background-color:gray;
              width:330px;
              padding: 20px;
               margin-left:160px;
		}
		.m1{
               border-radius:200px;
               width: 100px;
               height: 90px;
                margin-left:90px;
		}
		.m2{
                background-color:gray;
                width: 700px;
                line-height: 50px;
                margin-left: 510px;
                margin-top: -709px;
		}
		.m3{
               margin-left: 30px;
		}
		.m4{
              background-color: black; 
              color: white;
		}
		.m5{
                width:450px;
                 line-height:20px;
                  border-radius:20px;
		}
		.m6{
                width:450px;
                line-height:20px;
                margin-left: 80px;
                border-radius:20px;
		}
		.m7{
               width:450px;
               line-height:40px;
               margin-left: 80px;
               border-radius:20px;
		}
		.m8{
              width:450px;
               margin-left:100px;
                border-radius:20px;
		}
		.m9{
			    width:450px;
			     line-height:20px;
			      border-radius:20px;

		}
		.m10{
                width:450px;
                 line-height:20px;
                  margin-left:60px; 
                  border-radius:20px;
		}
		.m11{
			    width:450px;
			    line-height:20px;
			     margin-left:20px;
			      border-radius:20px;
		}
	</style>
</head>
<body>
	<h2>DASHBORAD</h2>

<div class="m">

	<div>
		<img src="mm.jpg" class="m1">
	</div>

	<div class="container">

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top: 50px;">
				<i class="glyphicon glyphicon-user"></i>See Public Profile</button>
		</div>

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top: 50px;">
				<i class="fa fa-camera"></i>Upload Profile Picture</button>
		</div>

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top:50px;">
				<i class="glyphicon glyphicon-user"></i>My Profile</button>
		</div>

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top:50px;">
				<i class="fa fa-gear"></i>Setting</button>
		</div>

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top:50px;">
				<i class="glyphicon glyphicon-user"></i>Profile Customizer</button>
		</div>

		<div>
			<button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-top:50px;">
			<i class="material-icons">Logout</i></button>
		</div>
	</div>
	
</div>


	<div class="m2">
		<div class="m3">

		<div class="m4">
			profile details 
		</div>

	<div>
		profiles display name
		<input type="text" name="profilesdisplayname" class="m5">
	</div>

	<div>
		first name
		<input type="text" name="firstname" class="m6">
	</div>

	<div>
		last name
		<input type="text" name="lastname" class="m6">
	</div>

	<div>
	biography
      <textarea class="m7"></textarea>
    </div>

    <div>
	gender
	<input type="radio" id="male" name="male" value="" style="margin-left: 100px;">male
	<input type="radio" id="female" name="female" value="">female
    </div>

    <div>
	country
	<select class="m8">
		<option>india</option>
		<option>japan</option>
		<option>brazil</option>
		<option>china</option>
		<option>cuba</option>
	</select>
    </div>

    <div style="background-color:black; color:white;">
	social profile
    </div>

    <div>
	<a href="#" class="fa fa-facebook"></a>
	facebook page
	<input type="text" name="facebookpage" class="m9">
    </div>

    <div>
	<a href="#" class="fa fa-twitter"></a>
	twitter
	<input type="text" name="twitter" class="m10">
    </div>

    <div>
	<a href="#" class="fa fa-google"></a>
	google
	<input type="text" name="google" class="m10">
    </div>

    <div>
	<a href="#" class="fa fa-home"></a>
	website (url)
	<input type="text" name="websiteurl" class="m11">
    </div>

    <div>
	<button type="button" class="btn btn-primary btn-lg" style="background-color:darkblue; float: left; margin-left:30px;">SAVE CHANGES</button>
    </div>

    <div>
	<button type="button" class="btn btn-primary btn-lg" style="background-color:darkgreen; float:left; margin-left: 30px;">REQUEST VERIFICATION</button>
    </div>

    <div>
	<button type="button" class="btn btn-primary btn-lg" style="background-color: red; margin-left:30px;">Delete</button>
    </div>

</div>
</div>
</body>
</html>