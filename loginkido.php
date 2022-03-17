
     <?php
	  include("leftside.php");
	  ?>
	  <div id="content" class="float_l"> <br/>
	  <div class="post_box">
      <div class="header">
	 
        <h2 align='middle'><b><font  face = 'Georgia' size='4'>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Login Page</font></b></h2>
      </div>

      <div align=center style="border-radius: 5px;border:1px double #b9b9b9;padding-left:em">
     
		<form action="login.php" method="post" >
          <table height="196" id='mytable' align = 'middle'>
            <tr>
              <td rowspan="5" align="center" style="padding-top:12px;padding-left:12px; border:none;"></td>
            </tr>
            
            <tr> <td>&nbsp;</td></tr>
			<tr>
              <td>User Name</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="username" id="in" required /></td>
            </tr>
            <tr>
              <td>Password</font></td>
              <td>&nbsp;</td>
              <td><input type="password" name="password"  id="in" required  /></td>
            </tr>
			 
            <tr>
              <td></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='login' name='submitMain' Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;&nbsp;
			  
			  
                <input type="reset" value="Cancel" name="clear"  /></td>
            </tr>
          </table>
        </form>

      <br/></div>
        
   		
	   <?php
	
 if(isset($_POST['submitMain']))
 { 
   $firstname =$_POST['firstname'];
   //$_SESSION['username']=$_POST['username'];
   $password=$_POST['password'];
$pass=md5($password);

    //$_SESSION['password']=$_POST['password'];
  	$query = "SELECT * FROM  createaccount WHERE 	firstname= '{$firstname}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['role']=='admin' ){ 
			$_SESSION['firstname']=$row['firstname'];
			
		    echo "<script>window.location='adminhomepage.php';</script>";
			}
				
				}
							$query = "SELECT * FROM  createaccount WHERE 	firstname= '{$firstname}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['role']=='doctor' ){
		$_SESSION['firstname']=$row['firstname'];
           echo "<script>window.location='doctorhomepage.php';</script>";
 }
						
				$query = "SELECT * FROM  createaccount WHERE 	firstname= '{$firstname}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['role']=='pharmacist' ){
		$_SESSION['firstname']=$row['firstname'];
           echo "<script>window.location='pharmacisthomepage.php';</script>";
 }
							$query = "SELECT * FROM  createaccount WHERE 	firstname= '{$firstname}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['role']=='laboratorist' ){
			$_SESSION['firstname']=$row['firstname'];
			
           echo "<script>window.location='laboratoristhomepage.php';</script>";
	 }
      
      $query = "SELECT * FROM  createaccount WHERE 	firstname= '{$firstname}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['role']=='patient' ){
			$_SESSION['firstname']=$row['firstname'];
			
           echo "<script>window.location='patienthomepage.php';</script>";
	 }

		$query = "SELECT * FROM  registerr WHERE 	firstname= '{$firstname}' AND password='$pass'";
		$result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
		 if($row['role']=='patient'){ 
	$_SESSION['firstname']=$row['firstname'];
		
	
        echo "<script>window.location='patienthomepage.php';</script>";
					}
				else {
		
		echo"<img src='images/bbb.jpg'><p  class='wrong' ><center><font color='white' face = 'Georgia' size='2'>
		
User Name & Password Not Match !!</center></font></p>"; 
		 echo'<meta content="2;loginkido.php" http-equiv="refresh" />';
		}
//}
mysql_close($conn);
?>	
		</div>
	
		</div