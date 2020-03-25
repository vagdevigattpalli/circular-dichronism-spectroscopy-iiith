<?php
$show = 1;
if($_POST['answer']=="2")
{
	echo "<center><img src=\"correct.gif\"/></center>";
	//header("Location:page5.php");
//	echo "<center><a href=\"page5.php\">Next</a></center>";
	$show = 0;
}
?>
<html>
<head>
<script class='gtm'>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W59SWTR');</script>

<script type="text/javascript" src="Jmol.js"></script>
<script type="text/javascript">
function myCallback(a, b, c, d) {
alert("myCallback a="+a+" b="+b+" c="+c+" d="+d)
}
</script>
</head>

<body>
<center><h1><font color="blue">Analysis</font></h1>
<h3><font color="green">Identify the correct CD spectrum for the molecule.</font></h3>
<h2>INFORMATION : R configuration at the SPIROCENTER has negative ORD curve.</h2></center>
<?php if($_POST['answer']!="2" && isset($_POST['answer']))
echo "<center><img src=\"wrong.gif\"/>&nbsp;Try again or skip.</center>";?>

<table width="1000" style="padding-left:20px;">
<tr><td>
<script type="text/javascript">
//jmolInitialize(".","http://chemapps.stolaf.edu/pe/protexpl/molview/JmolAppletSigned.jar")
jmolInitialize(".","JmolAppletSigned.jar")


var xxxx = document.location.search
if (xxxx.length == 5 || xxxx.length == 0) {
	xxxx = (xxxx + "?1crn").substring(1,5)
	script = 'set animframecallback "jmolscript:if (!selectionHalos) {select model=_modelNumber}";'
	+'set errorCallback "myCallback";'
	+'set defaultloadscript "isDssp = false;set defaultVDW babel";'
	+'set zoomlarge false;set echo top left;echo loading XXXX...;refresh;'
	+'load "pdbs/XXXX.pdb";set echo top center;echo XXXX;'
	+'spacefill off;wireframe off;cartoons on;color structure;'
	script = script.replace(/XXXX/g, xxxx)
} else {
	script = unescape(xxxx.substring(1))
}

jmolApplet(["300","300"],"load sample/sample2/sample2.pdb;set echo top center; font echo 11 sanserif; echo (6R,9R) -9- Ethyl- I, 7-dioxaspiro[5.5]undecan-4-one; ")
</script>
</td>
<td>

<form action="page5.php" method="post">
<table>
<?php if($show){?>
<tr>
<td><img src="sample/sample1/graph1.png" width="300" height="200"/></td>
<?php }?>

<td><img src="sample/sample2/graph2.png" width="300" height="200"/></td>
</tr>

<?php if($show){?>
<tr>
<td style="padding-left:150px;"><input type="radio" name="answer" value="1"/><br/> <br/></td>
<td style="padding-left:150px;"><input type="radio" name="answer" value="2"/><br/> <br/></td>
</tr>
<?php } ?>

<tr>
<?php if($show){?>
<td><img src="sample/sample3/graph3.png" width="300" height="200"/></td>
<td><img src="sample/sample4/graph4.png" width="300" height="200"/></td>
<?php }?>
</tr>

<?php if($show){?>
<tr>
<td style="padding-left:150px;"><input type="radio" name="answer" value="3"/></td>
<td style="padding-left:150px;"><input type="radio" name="answer" value="4"/></td>
</tr>
<?php } ?>

</table><br/>
<center>
<?php if($show){?>
<input type="submit" name="submit" value="Submit"/>
<a href="page6.php"><input type="button" value="Skip"/></a>
<?php } else echo "<a href=\"page6.php\"><input type=\"submit\" value=\"Next\"/></a>";?>

</center>
</form>
</td></tr></table>

</body>
</html>
