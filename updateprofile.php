<?php
require 'databaseconnect.php';
if(!isset($_SESSION)){
	session_start();
}
$id=$_SESSION['userid'];
$q="select * from `studentprofile` where `id`='$id'";
$qr=mysqli_query($mysqlc,$q);
$nr=mysqli_num_rows($qr);

if($nr==0){
	$fn=$_SESSION['fn'];
		$ln=$_SESSION['ln'];
		$branch="";
		$section="";
		$year="";
$mail=$_SESSION['email'];
}
else{
	$qrr=mysqli_fetch_assoc($qr);
	$fn=$qrr['firstname'];
		$ln=$qrr['lastname'];
		$branch=$qrr['branch'];
		$section=$qrr['section'];
		$year=$qrr['year(1-4)'];
		$mail=$qrr['mail'];
		
		
}
if(!isset($_SESSION)) { 
  session_start(); 
} 
if(isset($_POST['b2'])){
		$fn=$_POST['fn'];
		$ln=$_POST['ln'];
		$branch=$_POST['branch'];
		$section=$_POST['section'];
		$year=$_POST['year'];
		$mail=$_POST['mail'];
		$id=$_SESSION['userid'];
		
		if(!(empty($fn)) && !(empty($ln)) && !(empty($branch)) && !(empty($section)) && !(empty($year)) && !(empty($mail))){
			
			$q="select * from `studentprofile` where `id`='$id'";
			$qr=mysqli_query($mysqlc,$q);
			
			$nr=mysqli_num_rows($qr);
			if($nr>0){
				$q="UPDATE `studentprofile` SET `firstname`='$fn',`lastname`='$ln',`branch`='$branch',`section`='$section',`year(1-4)`='$year',`id`='$id',`mail`='$mail' WHERE `id`='$id'";
			$qr=mysqli_query($mysqlc,$q);
			if($qr){
			echo "<script>alert('profile updated');</script>";
			
			}
			else{
				echo "<script>alert('profile not updated');</script>";
			}
			}
			else{
				$q="insert into `studentprofile` (`firstname`,`lastname`,`branch`,`section`,`year(1-4)`,`id`,`mail`) values ('$fn','$ln','$branch','$section','$year','$id','$mail') ";
			$qr=mysqli_query($mysqlc,$q);
			if($qr){
			echo "<script>alert('profile updated');</script>";
			
			}
			else{
				echo "<script>alert('profile not updated');</script>";
			}
			}
			
			}
			
		else{
			echo "<script>alert('enter all fields')</script>";
		}
	
		}
	
	
?>

<html>
<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section {
  position: relative;
  min-height: 100vh;
  background-color: #f8dd30;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 700px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #555;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;
}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}

</style>


<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="https://www.svec.education/wp-content/uploads/2020/08/cse.jpg" width=100px ></div>
        <div class="formBx">
          <form action="updateprofile.php"  method="post" >
            <h2>Update profile</h2>
			<label for="user" class="label">First name</label>
					<input id="user" type="text" class="input" name="fn" value="<?php echo $fn ?>" required>
				
				
					<label for="pass" class="label">Last name</label>
					<input id="pass" type="text" class="input"  name="ln" value="<?php echo $ln ?>" required>
				
					<label for="pass" class="label">Branch</label>
					<input id="pass" type="text" class="input"  name="branch" value="<?php echo $branch ?>" required>
				 
					<label for="user" class="label">Section</label>
					<input id="user" type="text" class="input" name="section" value="<?php echo $section ?>" required>
				<label for="user" class="label">year</label>
					<input id="user" type="text" class="input" name="year" value="<?php echo $year ?>" required>
					<label for="user" class="label">email</label>
					<input id="user" type="email" class="input" name="mail"  value="<?php echo $mail ?>" required value=>
					
				
            <input type="submit" name="b2" value="update" />
            
			<a href="home3.php" style="float:right;font-size:20px;color:blue;font-weight:bold;" >Go to Home page</a>
            
          </form>
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>