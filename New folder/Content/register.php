<style>
h1{
text-align:center;
color:#fd8a17;
font-family: 'Oswald', sans-serif;
}
h2{
text-align:center;
color:#fd8a17;
font-family: 'Oswald', sans-serif;
text-decoration: underline;
}
.button {
	font-family: 'Oswald', sans-serif;
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;
	margin:0px 0px 10px 30px;
	border: 2px solid #fd8a17 ;
	box-shadow: inset 0 1px 0 0 rgba(255,255,255,0.5),
				0 0 1px 1px rgba(255,255,255,0.8),
				0 0 0 6px rgba(0,0,0,0.06),
				0 0 0 3px rgba(0,0,0,0.1);
	cursor: pointer;
}
</style>
<h1><br/>Registration Page</h1>
<h2> Enter Credentials and Register here.</h2>
<form class="" action= "registeraction.php" method="POST">
<input class="" type="text" placeholder="Full Name" name= "fname">
 <input class="" type="text" placeholder="Email Address" name= "emailaddr">
 <input class="" type="text" placeholder="Username" name= "uname">
 <input class="" type="password" placeholder = "Password" name='pwd'>
 <input type="submit" class="button" value="REGISTER" name="submit_btn">
 </form>