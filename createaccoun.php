<html>
<body>
<head>
<script>  
function validateform(){  
var id=document.myform.id.value;  
var firstname=/^[A_Za-z]+$/; 
var middlename=document.myform.middlename.value;
var patientname=document.myform.patientname.value;
var nationality=document.myform.nationality.value;
var gender=document.myform.gender.value; 
var age=document.myform.age.value;
var zone=document.myform.zone.value;
var woreda=document.myform.woreda.value;
var kebele=document.myform.kebele.value;
var phonenumber=document.myform.phonenumber.value;
var year=document.myform.year.value;
  if (id=="" || firstname=="" || middlename=="" || patientname=="" || nationality=="" 
&& gender=="" || age=="" || zone=="" || woreda=="" || kebele=="" || phonenumber=="")
{
  alert("Please Fill All The Required Field");  
  return false;
}
 else if(isNaN(id))

   {

    alert("id should contain only digits.");

    id.value="";
    return false;

   }
 
else if(!(inputvalue.value).match(firstname))
{
alert("First name is character only");
return false;
}
else if(!isNaN(middlename) || !isNaN(patientname) || !isNaN(zone) || !isNaN(woreda))

   {

    alert("Middle name,patientname, Zone,Woreda should contain only character.");

    middlename.value="";
    return false;

   }
else if(nationality == false)
{
alert('Please Select your country');
return false;
}
else if((document.myform.gender[0].checked==false) && (document.myform.gender[1].checked==false))

   {

    document.myform.gender[0].focus();

    alert("Please select a gender.");

    return false;

   }
 else if(isNaN(age) || age<1 || age>150)

   {
    alert("Age should be number only and above 1 and less than 150.");
    return false;
   }
else if(isNaN(phonenumber) || isNaN(year))

   {
    alert("Phone Number && year should be number only.");
    return false;
   }
else{

   if(confirm("Do you want to submit the form?"))

  {

  alert("Registration Form Submitted Successfully.");
          return true;

  }
else
return false;


  
}

}
</script>
</head>  

<BODY bottomMargin=0 aLink=#f0f0f0 leftMargin=90 rightMargin=90 link=#f0f0f0  topMargin=5 bgColor=#98afc7 vLink=#f0f0f0 >  


<body style="background-image: url(we.jpg);">
<br>
<br>
 <center><p><img src="images/l.jpg" alt="" width="61" height="20" /> new user here..<img src="images/go.jpg" alt="" width="48" height="48" /></p></center>
<center><form name="myform" method="post" action="again.php" onsubmit="return validateform()" > 
  <br>
  </big></big>
  <table width:="50%">
    <tbody>
<tr>
        <td> Id : <br>
        </td>
        <td><input name="id" type="text"><br>
        </td>
      </tr>
      
      <tr>
        <td>First Name : <br>
        </td>
        <td><input name="firstname" type="text" id="inputvalue"><br>
        </td>
      </tr>
<tr>
        <td>Middle Name: <br>
        </td>
        <td><input name="middlename" type="text" id="inputvalue"><br>
        </td>
      </tr>
      <tr>
        <td>Patient Name: <br>
        </td>
        <td><input name="patientname" type="text" id="inputvalue"><br>
        </td>
      </tr>


 <tr>
        <td>password: <br>
        </td>
        <td><input name="password" type="text" id="inputvalue"><br>
        </td>
      </tr>


       <tr><td><div align="right"><b><font color=#df2332 size=3>Nationality:</font></b></div></td>
        <td ><select name="nationality" >
      <option value=""> </option>
      <option value="ethiopia">Ethiopia</option>
      <option value="USA">USA</option>
      </select></td>
       <tr>

     <td><LABEL for="gender">Gender:<sup style="color:#F00"></sup> </LABEL></td> <td><INPUT type="radio" name="gender" value="Male"> Male

     <INPUT type="radio" name="gender" value="Female"> Female </td>

   </tr>

       <tr>
        <td>Age: <br>
        </td>
        <td><input name="age" type="text"><br>
        </td>
      </tr>

        <td>Zone: <br>
        </td>
        <td><input name="zone" type="text"><br>
        </td>
      </tr> 
       <tr>
        <td>Woreda: <br>
        </td>
        <td><input name="woreda" type="text"><br>
        </td>
      </tr>
       <tr>
        <td>Kebele: <br>
        </td>
        <td><input name="kebele" type="text"><br>
        </td>
      </tr>
       <tr>
        <td>Phone Number: <br>
        </td>
        <td><input name="phonenumber" type="text"><br>
        </td>
      </tr>


 <tr><td><div align="right"><b><font color=#df2332 size=3>Status:</font></b></div></td>
        <td ><select name="status" >
      <option value=""> </option>
      <option value="single">Single</option>
      <option value="marrige" >marrige</option>
      </select></td>
       <tr>



<tr><td><div align="right"><b><font color=#df2332 size=3>role:</font></b></div></td>
        <td ><select name="role" >
      <option value="choose yours"> </option>
      <option value="patient">patient</option>
      <option value="doctor">doctor</option>
      <option value="pharmacist">pharmacist</option>
      <option value="laboratorist">laboratorist</option>
      
  
      </select></td>
       <tr>




        <td>ocupation: <br>
        </td>
        <td><input name="occupation" type="text"><br>
        </td>
      </tr>
<tr>
        <td>Year: <br>
        </td>
        <td><input name="year" type="text"><br>
        </td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <input name="submit" value="submit" type="submit">&nbsp; &nbsp; <input name="reset" value="RESET" type="reset"> <big><big><br>
  </big></big></form></center>
</body></html>

<a href="adminhomepage.php">BACK</a>






