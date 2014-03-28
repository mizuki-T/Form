

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
						<input type="text" name="yourName" placeholder="Name" ></input>
					</div>
					<div class="form Kana">
						<input type="text" name="kana" placeholder="Kana"></input>
					</div>
					<div class="form Address">
						<input type="text" name="address" placeholder="Address" ></input>
					</div>
					<div class="form password">
						<input type="password" name="password" placeholder="Password"  id="password"></input>
					</div>
					<div class="form again">
						<input type="password" name="passwordAgain" placeholder="Password Again"></input>
					</div>

					<div class="form birthday">
						<div class="subTitle">Birthday ( Year - Month - Date )</div>
						<select name="year" class="select1">
							
							<option value="2014" selected="selected">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
							<option value="1935">1935</option>
							<option value="1934">1934</option>
							<option value="1933">1933</option>
							<option value="1932">1932</option>
							<option value="1931">1931</option>
							<option value="1930">1930</option>
							<option value="1929">1929</option>
							<option value="1928">1928</option>
							<option value="1927">1927</option>
							<option value="1926">1926</option>
							<option value="1925">1925</option>
							<option value="1924">1924</option>
							<option value="1923">1923</option>
							<option value="1922">1922</option>
							<option value="1921">1921</option>
							<option value="1920">1920</option>
						</select>

						<select name="month" class="select2">
							<option value="1">1
							<option value="2">2
							<option value="3">3
							<option value="4">4
							<option value="5">5
							<option value="6">6
							<option value="7">7
							<option value="8">8	
							<option value="9">9
							<option value="10">10
							<option value="11">11
							<option value="12">12
						</select>

						<select name="date" class="select3">
							<option value="1">1
							<option value="2">2
							<option value="3">3
							<option value="4">4
							<option value="5">5
							<option value="6">6
							<option value="7">7
							<option value="8">8	
							<option value="9">9
							<option value="10">10
							<option value="11">11
							<option value="12">12
							<option value="13">13
							<option value="14">14
							<option value="15">15
							<option value="16">16
							<option value="17">17
							<option value="18">18
							<option value="19">19
							<option value="20">20	
							<option value="21">21
							<option value="22">22
							<option value="23">23
							<option value="24">24
							<option value="25">25
							<option value="26">26
							<option value="27">27
							<option value="28">28	
							<option value="29">29
							<option value="30">30
							<option value="31">31
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

