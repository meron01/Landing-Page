					<?php
include('connect.php');
?>
					<script>
					$(document).ready(function() {	
						 $("#kl").css({"border-color": "green", 
						 "border-weight":"1px", 
						 "border-style":"dotted"});
						$('#kl').keyup(function() {
						 $("#mm").html("Writing new event..!");
						 });
						 });
					</script>
					<?php 
						if(isset($_POST['event']))
						{
						$eve=$_POST['eve'];
						$date=(int)(date("d"));
						$mounth=(int)(date("m"));
						$year=(int)(date("Y"));
						$qu="insert into event values('$eve','$date','$mounth','$year')";
						if(mysqli_query($con,$qu))
						{
						$rr="New event is added!!";
						}
						else
						{$rr="New event is not added!!";
						}
						}
						$mmn="select * from event";
						$res=mysql_query($connect,$mmn);
						if(mysql_num_rows($res)>0)
						{
						while($row=mysql_fetch_array($res))
						{
						$d=$row['date'];
						$m=$row['mounth'];
						$y=$row['year'];
						$td=(int)(date("d"));
						$tm=(int)(date("m"));
						$ty=(int)(date("Y"));
						$rw=($ty-$y)*365+($tm-$m)*30+($td-$d);
						if(($rw> 0&&$rw> 5)||($rw<0&&$rw< -5))
						{
						$del="delete from event where date='$d'";
						mysqli_query($con,$del);
						}
						}
						}
						echo"<table>";
						echo"<tr><th><marquee behavior='alternate'>Events</marguee></tr>";
						$tr="select * from event";
						$rs=mysql_query($connect,$tr);
						if(mysql_num_rows($rs)>0){
						$x=1;
						while($row=mysqli_fetch_array($rs))
						{
						$out=ucwords($row['info']);
						if($x%2!=0)
						echo"<tr style='background-color:green;'><td><marquee scrollamount='2'>$x.$out</marguee></tr>";
						else
						echo"<tr><td style='background-color:yellow;color:black;'><marquee scrollamount='2'>$x.$out</marguee></tr>";
						$x++;
						}
						}else
						echo"<tr><td style='background-color:yellow;color:black;'><marquee scrollamount='2'>No new Events..</marguee></tr>";
						echo"<form action=\"laboratoristhomepage.html\" method=post enctype=\"multipart/form-data\"> ";
						echo"<tr><td><input type='text' style='margin-left:5%;width:80%;' name='eve' id ='kl' title='Write new event if there is...' required> <div id='mm'></div></tr>";
						echo"<tr><td><input style='background:chocolate;margin-left:25%;width:40%;cursor:pointer;' title='Post new event if there is' type='submit' name='event'  value='Post'></tr>";
						echo"</form>";
						echo"<tr><td style='color:red;'>$rr</tr>";
						echo"</table>";
						?>