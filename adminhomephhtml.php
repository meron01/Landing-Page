<?php
session_start();
error_reporting(0);
include('connect.php');
if(!$_SESSION['firstname']);
header('location:loginfinal.html');
?>
<html>
<head>      
<title>UOG HOSPITAL</title>     
</head>     
<BODY bottomMargin=0 aLink=fffff leftMargin=90 rightMargin=90 link=fffff  topMargin=5 bgColor=#98afc7 vLink=#98afc7 >  
<TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#98afc7>
<TR> 
<TD vAlign=top align=middle>            
<TABLE bgcolor=#98afc7 border=0 cellSpacing=0 cellPadding=0 width=140 align=center>               
<TR>           
<TD height=100 width="40%"><IMG border=0 alt="" src="images/aa.jpg" width=350 height=110>&nbsp;</TD>   
<TD height=100 width="40%"><IMG border=0 alt=""  src="images/bb.jpg" width=400  height=110></TD> 
<TD height=100 width="40%"><IMG border=0 alt="" src="images/t.jpg" width=350 height=110>&nbsp;</TD>
</TR>
</TABLE> 

<TABLE border=10 cellSpacing=10 cellPadding=0 width="100%"     bgColor=#98afc7>
<TD bgColor=blue vAlign=top align=middle><FONT color=yellow size=5 ace=Arial><B><A href="createaccount.html">createaccount</A></B></FONT></TD>
<TD bgColor=blue vAlign=top align=middle><FONT size=5 face=Arial><A href="postnews.html"><B>post news</B></A></FONT></TD>
<TD bgColor=blue vAlign=top align=middle><FONT color=yellow size=5 ace=Arial><B><A href="viewnews.html">view news</A></B></FONT></TD>
<TD bgColor=blue vAlign=top align=middle><FONT color=yellow size=5 ace=Arial><B><A href="updatenews.html">update news</A></B></FONT></TD>
<TD bgColor=blue vAlign=top align=middle><FONT size=5  face=Arial><A href="loginfinal.html"><B>logout</B></A></FONT></TD>
</TR>


</TABLE>


<TABLE border=0 cellSpacing=0 cellPadding=10 width="100%"> 
<TR>
<TD bgColor=#00ffff vAlign=top width="18%" align=middle>&nbsp; 
<TABLE border=10 cellSpacing=10 cellPadding=10 width="100%"  bgColor=#00ffff> 
<div class="w3-container">
  <h2>uog image Slides</h2>
  <p>slide show of some uog images.</p>
</div>

<div class="w3-content w3-section" style="max-width:500px" >
  <img class="mySlides w3-animate-top" src="images/aa.jpg" style="width:100%" height="50%">
  <img class="mySlides w3-animate-bottom" src="images/aaa.jpg" style="width:100%" height="50%">
  <img class="mySlides w3-animate-top" src="images/aaaa.jpg" style="width:100%" height="50%">
  <img class="mySlides w3-animate-bottom" src="images/aaaaa.jpg" style="width:100%" height="50%">

  <img class="mySlides w3-animate-top" src="images/b.jpg" style="width:100%" height="50%">
  <img class="mySlides w3-animate-bottom" src="images/bb.jpg" style="width:100%" height="50%">
  <img class="mySlides w3-animate-top" src="images/bbb.jpg" style="width:100%" height="50%">
</div>
<TABLE border=0 cellSpacing=10 cellPadding=10 width="100%" bgColor=silver><TR>   
<TD bgColor=#98afc7 width="100%"><FONT size=3  face=Arial><b><font size=5 color=yellow> <a href="developer.html">developer</a></FONT></TD>
</TR>
</TABLE></P></TD> 


    
<TD bgcolor=#98afc7 vAlign=top width="61%" align=left> <P><BR><FONT color=blue size=5 face="Lucida Calligraphy"><B> <H1>    
 <marquee     width="100%"      behavior="alternate"     bgcolor="silver"> WELL COME TO UOG HOSPITAL </marquee>  </H1>  </B></FONT> <img src="images/a.jpg" width="350" height="200" align="left"> <font size=4 face=oblique><i> This website provides a facility to the hospital. The patient medical record is handled according to the requirements of the institute.a patient who want to get service from this hospital can register here. <br>. </i></font> <br><br><br><br> 

<font face="monotype corsiva" color=blue size=6><b><u>OBJECTIVES</u></b></font><br><br> <br> <img src="images/image.jpg" width="200" height="250" align="right"><img src="images/aa.jpg" width="200" height="250" align="right"> <img src="images/t.jpg" width=35 height=20> <font size=4 face="lucida console" color="purple">To Provide Facility To Institutes To register patient online</font> <br><br> <font face="oblique" size=4> No Need To Get A New Software Everytime to know patient medical record. <br> .</font> <br><br>             <img src="images/t.jpg" width=35 height=20>            <font size=4 face="lucida console" color="purple"> To Enable patient To view medical information from his/her home page.  
</font><br><br> <font face="oblique" size=4> Saves Time Of getting health servicse <br> Need Not Wait For The Result for long period of time.</font>  
</TABLE><br> 




<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>




<script type="text/javascript">
document.write ('<p>Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
  setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>
</body> 

</html>  







