<?php
if (isset($_POST['msg'])) {
	$msg = $_POST['msg'];
	if ($msg == 'password_error') {
		echo "password must not be less than 8 charcter";
		
	}
	if ($msg == 'username_error') {
		echo "username contain at least 2 charcter";
		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>

	<style>
		#reg{
			width: 100%;
			text-align: center;
			
			font-size: 14px;
            font-weight: 700;
            color: #fff;
		}
		#tbl{
			margin-left: 467px;
		    margin-top: 150px;
		    margin-bottom: 30px;
		    font-size: 14px;
		    font-weight: 700;
		    color: #fff;
		}
		.input{
            background-color: transparent;
		    color: #000;
		    line-height: 29px;
		    font-size: 16px;
		    border: 1px solid #eee;
		    width: 180px;
		}
		.inputt{
            background-color: #fff;
		    color: #000;
		    line-height: 29px;
		    font-size: 16px;
		    border: 1px solid #eee;
		    width: 180px;
		}
         #btn{
         	color: #fff;
		    background-color: #75008C;
		    padding: 6px 20px 6px 20px;
		    font-size: 14px;
		    font-weight: 700;
		    margin: 7px 0px 0px 82px;
		    border: 1px solid #fff;
		    transition: 1s;
		    letter-spacing: 1px;
		    text-transform: uppercase;

         }
         #btn:hover, #btn:focus{
         	background-color: #000;
         }
        .bg{
        	width: 100%;
	     height: 560px;
		 border: 1px solid #000;
         background: url('../images/reg.jpg');
		background-size: cover;
	    background-repeat: no-repeat;
	    text-align: center;
	   
        }



	</style>
</head>
<body>
	

<div class="bg">
	

	<form method="POST" action="../controller/check.php" onsubmit="return(validate());">
		
			<table id="tbl">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" class="input" id="name"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="tel" name="phone" placeholder="Enter Phone " class="input" id="phone"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="Enter Email" class="input" id="email"></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="date" name="date" placeholder="Enter Dob " class="inputt" id="date"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
					    <input type="radio" name="gender" value="Male" id="gender"> Male
						<input type="radio" name="gender" value="Female" id="gender"> Female
						<input type="radio" name="gender" value="Others" id="gender"> Other
					</td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" placeholder="Enter Password" class="input" id="password"></td>
				</tr>
				
				
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup" id="btn"></td>
				</tr>
			</table>
	
	</form>
</div>
       <script>
		function validate(){
            
			var name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
             var password = document.getElementById('password').value;
             var gender = document.getElementById('gender').value;
           
            
           
            //Name Validation
			 if(name == ''){
				alert('Name: Null value');
			}
            else if(name.length<2 && (name>='A' && name<='Z' || name>='a' && name<='z')){
                    alert('Name: Contains at least two words');
                    }
            else if(name >='0'  && name<='9' || name=='~' || name=='!' || name=='@' || name =='#' || name=='$' || name=='%' || name=='^' || name=='&' || name=='*' || name=='()'|| name=='/' ){
                    alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
                    }
            else if(name>='0' && name<='9'){
                    alert('Name: Must be starts with letter');
                    }
            //Email Validation
           let n = document.forms["form"]["email"].value;
        if (n == "") {
            alert("Cannot be empty");
            return false;
        } else {
            if (n.match(/^([w-.]+@([w-]+.)+[w-]{2,4})?$/)) {
                alert("ok");
            } else {
                alert("Must be a valid email address");
                return false;
            }
        }
			     //Phone Validation
            if(phone  != ""){
        document.getElementById('head1').innerHTML = phone;
      }else{
        alert('Phone: Should be at least 11 chracter');
      } 

       //Password Validation
            if(password  != ""){
        document.getElementById('head1').innerHTML = password;
      }else{
        alert('Price: Should not be null');
      } 
            //Address Validation
            if(address  != ""){
        document.getElementById('head1').innerHTML = address;
      }else{
        alert('Address: Null value');
      } 
      //Gender Validation
      if (document.getElementById("male").checked || document.getElementById("female").checked || document.getElementById("other").checked) {
            return true;
        } else {
            alert("At least one of them has to be selected");
            return false;
        }
           
   

     
          
		}
	</script>
                              




</body>
</html>