<!DOCTYPE html>
<html>
<head>
		<title></title>
<link rel="stylesheet" type="text/css" href="result.css">
			<?php
	session_start();
	$db=new mysqli("localhost","root","","voting");
	?>
	<script>
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	</head>

<body background="s.jpg">
	<p><center><font size="10">VOTE COUNT</font></center></p>
	<div>
	<?php
	$v="SELECT * from admins";
	$countt=$db->query($v);
	$new=$countt->fetch_assoc();
	echo "<div class=container >";
	echo "Total vote for CONGRESS =".$new["congress"]."<br>";
	echo "Total vote for DMK      =".$new["dmk"]."<br>";
	echo "Total vote for CPI      =".$new["cpi"]."<br>";
	echo "Total vote for AIADMK   =".$new["aiadmk"]."<br>";
	echo "Total vote for BJP      =".$new["bjp"]."<br>";
	echo "Total vote for NOTA     =".$new["nota"]."<br> The Winner has the vote count  ";
	echo (max($new["dmk"],$new["congress"],$new["cpi"],$new["aiadmk"],$new["bjp"],$new["nota"]));
	echo "</div>";
	?>
	<div class="c">
	<a href="index.php">Logout</a></div>
</div>
</body>
</html>