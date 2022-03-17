<?php
$day=date("d");
$mon=date("m");
$year=date("Y");
$con=mysql_connect("localhost","root","");
if($con)
{
	mysql_select_db("final",$con);
}
else
{
	echo "Connection is not Est"."<br>";
}
$res=mysql_query("select * from news_master;");

while($row=mysql_fetch_array($res))
{
	$sdate=$row['start_date'];
	$edate=$row['end_date'];
	$syear=substr($sdate,0,4);
	$eyear=substr($edate,0,4);
	$mon=substr($sdate,5,2);
	$emon=substr($edate,5,2);
	$smon=substr($sdate,5,2);
	$sday=substr($sdate,8,2);
	$eday=substr($edate,8,2);
	if($eyear==$year)
	{
		if($emon==$mon)
		{
			if($eday>=$day)
			{
				$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from download_master where down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				
				
			}
		}
		else
		{
			if($emon>=$mon)
			{
				$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from download_master where down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				
			}
			else
			{
				
			}
		
		}	
	}
	else
	{
		if($eyear>=$year && $emon<$mon)
		{
		
			$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from download_master where down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				echo "<br>";
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $eday."/".$emon."/".$eyear." :: ";
				echo "</strong>";
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
			
		}
	}
}

?>
</li>
</ul>