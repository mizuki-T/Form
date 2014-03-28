<?php

session_start();

if(isset($_SESSION['yourName'])) $yourName = $_SESSION['yourName'];

if(isset($_SESSION['kana'])) $kana = $_SESSION['kana'];

if(isset($_SESSION['address'])) $address = $_SESSION['address'];

if(isset($_SESSION['password'])) $password = $_SESSION['password'];

if(isset($_SESSION['passwordAgain'])) $passwordAgain = $_SESSION['passwordAgain'];

if(isset($_SESSION['year'])) $year = $_SESSION['year'];

if(isset($_SESSION['month'])) $month = $_SESSION['month'];

if(isset($_SESSION['date'])) $date = $_SESSION['date'];

if(isset($_SESSION['sex'])) $sex = $_SESSION['sex'];


 

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;" charset="EUC-JP">
	<title>Contact</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="style.css">
	<link href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
	<script src="./dist/jquery.validate.min.js"></script>
	<script src="./dist/jquery.ah-placeholder.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $("#contact").validate({
    	rules : {
    		yourName : {
    			required: true,
    			maxlength: 15
    		},
    		kana : {
    			required: true,
    			maxlength: 20
    		},
    		address : {
    			required : true,
    			email : true
    		},
    		password : {
    			required : true,
    			minlength: 8
    		},
    		passwordAgain : {
    			required : true,
    			equalTo : "#password",
    			minlength: 8
    		}
    	}
    	
    	
    });

    $('input').ahPlaceholder({
        placeholderColor : '#444',
        placeholderAttr  : 'placeholder',
        likeApple        : false
    });
    $("form").bind("submit",function(){
    	$("input").each(function(){
    		var val = $(this).val();
    		var placeholder = $(this).attr("placeholder");

    		if(val == placeholder){
    			$(this).val("");
    		}
    	})
    });

});
 
</script>

</head>

<body>

	
	<div id="container">
		<div id="wrapper">
			<div id="title">Contact</div>

			<div id="formList">
				<form id="contact" action="http://localhost/confirm.php" method="post">
					<div class="form yourName">
						<input type="text" name="yourName" placeholder="Name" value="<?php echo $yourName; ?>"></input>
					</div>
					<div class="form Kana">
						<input type="text" name="kana" placeholder="Kana" value="<?php echo $kana; ?>"></input>
					</div>
					<div class="form Address">
						<input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"></input>
					</div>
					<div class="form password">
						<input type="password" name="password" placeholder="Password"  id="password" value="<?php echo $password; ?>"></input>
					</div>
					<div class="form again">
						<input type="password" name="passwordAgain" placeholder="Password Again" value="<?php echo $passwordAgain; ?>"></input>
					</div>

					<div class="form birthday">
						<div class="subTitle">Birthday ( Year - Month - Date )</div>
						<select name="year" class="select1" >
							
							<option  value="<?php echo $year; ?>" selected="selected"><?php echo $year; ?></option>
							<?php 
							for($i = 2014;  $i > 1919; $i--){
							    echo '<option value="'.$i.'">'.$i.'</option>';
							}
							?>
						</select>

						<select name="month" class="select2" >
							<option  value="<?php echo $month; ?>" selected="selected"><?php echo $month; ?></option>
							<?php 
							for($j = 1;  $j <= 12; $j++){
							    echo '<option value="'.$j.'">'.$j.'</option>';
							}
							?>
						</select>

						<select name="date" class="select3" >

							<option  value="<?php echo $date; ?>" selected="selected"><?php echo $date; ?></option>
							<?php 
							for($k = 1;  $k <= 31; $k++){
							    echo '<option value="'.$k.'">'.$k.'</option>';
							}
							?>
						</select>
					</div>
					
					<div id="selectGender" >
						<input type="radio" name="sex" value="Man" checked /><span class="label">Man</span>
						<input type="radio" name="sex" value="Woman" /><span class="label">Woman</span>
					</div>

					<div class="sendForm">
						<input type="submit" value="Send" id="contactSubmit">
					</div>
				</form>

			</div>
		</div>

		<div id="footer">


		</div>
	</div>



	<script>

	</script>
</body>


</html>

