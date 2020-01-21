<?php 
include('../inc/function.php');
include('../inc/db.php');
if(isset($_POST['u_signup'])){
	if(isset($_POST['u_terms'])){
		if(!empty($_POST['f_name']) && !empty($_POST['u_email']) && !empty($_POST['u_gender']) && !empty($_POST['u_pass']) && !empty($_POST['u_rpass']) && !empty($_POST['u_address'])){
			//store values
			$fn=$_POST['f_name'];
			$ln=$_POST['l_name'];
			$email=$_POST['u_email'];
			$g=$_POST['u_gender'];
			$pass=$_POST['u_pass'];
			$rpass=$_POST['u_rpass'];
			$adrs=$_POST['u_address'];
			//check subscription
			$sbs=0;
			if(isset($_POST['u_subscription'])){
				$sbs=1;
			}
			// check password match
			if($rpass!=$pass){
				msg('error','Please Enter Same Password',url('',true));
				die;
			}
			// check password length
			if(strlen($pass) > 20 || strlen($pass) < 4){
				msg('error','Please enter password between 4 to 20 charters',url('',true));
				die;
			}
			// check already exist email
			$q1='SELECT * FROM user WHERE email="'.$email.'"';
			$q1r=mysqli_query($con,$q1);
			if(!$q1r){
				msg('error','Please Try After Some Time',url('',true));
				die;
			}
			if(mysqli_num_rows($q1r) > 0){
				// msg('error','This Email Is Already Taken',url('',true));
				// die;
			}
			// make unique id
			$token=md5(microtime());
			//insert data
			$q='
				INSERT INTO user SET
				first_name="'.$fn.'",
				last_name="'.$ln.'",
				email="'.$email.'",
				pass="'.md5($pass).'",
				gender="'.$g.'",
				address="'.$adrs.'",
				subscription="'.$sbs.'",
				token="'.$token.'"
			';
			$qr=mysqli_query($con,$q);
			if($qr){
				$html='<h1>Hi! '.$fn.' '.$ln.'</h1>';
				$html.='<p>Please click link below for activate account.</p>';
				$html.='<a href="'.url('actions/signup.php',true).'?code='.$token.'">Active</a>';
				$mail_send=mail_send($email,'Account Verification',$html);
				if($mail_send){
					msg('done','Welcome To Submilyga Please Active Your Account First',url('',true));
					die;
				}else{
					msg('error','SignUp Failed',url('',true));
					die;
				}
			}else{
				msg('error','Please Submit Values Again',url('',true));
				die;
			}
		}else{
			msg('error','Please Fill All The Fields',url('',true));
			die;
		}
	}else{
		msg('error','Please Accept Terms & Conditions',url('',true));
	}
}
if(isset($_POST['u_login'])){
	if(!empty($_POST['email']) && !empty($_POST['pass'])){
		// store in variables
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		// check query
		$q='SELECT * FROM user WHERE email="'.$email.'" and pass="'.md5($pass).'"';
		$qr=mysqli_query($con,$q);
		if(!$qr){
			msg('error','Please login after sometime',url('',true));
			die;
		}
		if(mysqli_num_rows($qr)==0){
			msg('error','Email or Password Not Matched',url('',true));
			die;
		}
		$record=mysqli_fetch_assoc($qr);
		if($record['status']==0){
			msg('error','Please Active Your Account First',url('',true));
			die;
		}else{
			setcookie('login_auth',$record['id'],time()+60*60*24*365,'/');
			msg('done','Login',url('',true));
			die;
		}
	}else{
		msg('error','Please Fill All The Field',url('',true));
		die;
	}
}
if(isset($_GET['code'])){
	$c=$_GET['code'];
	$q='SELECT * FROM user WHERE token="'.$c.'"';
	$qr=mysqli_query($con,$q);
	if($qr){
		if(mysqli_num_rows($qr) > 0){
			$q1='UPDATE user SET
			token="",
			status="1"
			WHERE token="'.$c.'"
			';
			$qr1=mysqli_query($con,$q1);
			if($qr1){
				msg('done','Account Active',url('',true));
			}else{
				echo "string3";
			}
		}else{
			echo "string2";
		}
	}else{
		echo "string";
		die;
	}
}
if(isset($_GET['logout'])){
	setcookie('login_auth','',time()-10,'/');
	msg('done','Logout',url('',true));
}


















?>