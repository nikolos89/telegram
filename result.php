<HTML>
<HEAD>
<TITLE>Simple Calculator by Peter Rekdal Sunde</TITLE>
</HEAD>
<BODY bgcolor="#57738E">


<p>&nbsp;</p>


<p>&nbsp;</p>



<p>&nbsp;</p>



<p>&nbsp;</p>



<p>&nbsp;</p>
<?

#######################################
# Release date: 10.09.01
# Coding time: 5 minutes with graphical interface!
# Coded in: php
# Description: Calculator/Graphical user interface!
# 
#
# Coder: Exion ( Peter Rekdal Sunde )
# Version: Calc v1.0 



######### Start of code ##########

if ($calc == "addisjon") {
	$svar = $val1 + $val2;
} else if ($calc == "minus") {
	$result = $val1 - $val2;
} else if ($calc == "ganger") {
	$svar = $val1 * $val2;
} else if ($calc == "dele") {
	$svar = $val1 / $val2;
}


?>


<p>&nbsp;</p>



<p>&nbsp;</p>



<p>&nbsp;</p>
<div align="center">
  <center>
  <table border="0" width="966" height="203">
    <tr>
      <td width="966" height="1" bgcolor="#FFFFFF" align="center">
        <p align="center"><font face="Verdana" size="1"><b>
        <marquee>Download this code at http://www.planet-source-code.com</marquee>
        </b></font></td>
    </tr>
    <tr>
      <td width="966" height="241" align="center">



<FORM METHOD="post" ACTION="calculate.php">
<?
if (!$val1) die("<b><font face=\"verdana\" size=\"2\">Sorry, but you forgot to fill-in Field 1!");
if (!$val2) die("<font face=\"verdana\" size=\"2\"<b>Sorry, but you forgot to fill-in Field 2!");
if (!$calc) die("<b><font face=\"verdana\" size=\"2\">Sorry, but you forgot to choose Calculation type!!");
?>
<P><font face="Verdana" size="2"><b>The result of your calculation is:</b></font></p>

<P><font face="Verdana" size="2"><b>&nbsp;<? echo $svar; ?>&nbsp;</b></font> </p>
   


<P>&nbsp; </p> 


</FORM>
   


 </b></b>
   


</font></font></font>
   


      </td>
    </tr>
    <tr>
 <td width="966" height="1" bgcolor="#FFFFFF">
     
        <p align="center"><font face="Verdana" size="1"><b>This script was
        created by Peter Rekdal Sunde</b></font></td>
    </tr>
  </table>
  </center>
</div>

</BODY>
</HTML>
