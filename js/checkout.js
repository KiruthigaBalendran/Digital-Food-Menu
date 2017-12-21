function alertmessage()
{
	//alert("Successfully placed the order");
	document.getElementById('alertmsg').style.display = "block";
	//document.getElementById('checkout1').style.display = "none";
	//document.getElementById('checkout2').style.display = "none";
	//document.getElementById('checkout3').style.display = "none";
	//document.getElementById('checkout4').style.display = "none";

	setTimeout(function(){ window.location="../index.php" }, 2000);
}