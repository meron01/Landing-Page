






						<?php 
						echo"<table width=100%>";
						echo"<tr><th><marquee behavior='alternate'>Events</marguee></tr>";
						$tr="select * from event";
						$rs=mysql_query($con,$tr);
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
						echo"</table>";
						?>



