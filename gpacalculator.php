<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GPA Calculator</title>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
                <style type="text/css">
                body {
font-family: "Lato", sans-serif;
 margin: 1;
 }


		/* Layout */
		
.header {
  padding: 100px;
  text-align: center;
  background: white;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 80px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #008040;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 18px 22px;
  text-decoration: none;
}
/* Change color on hover */
.navbar a:hover {
  background-color: #aaa;
  color: white;
}
.navbar a.right {
  float: right;
}

		#container {
			padding-left: 200px;
			padding-right: 180px;
		}
		
		#container .column {
			position: relative;
			float: left;
		}
		
		#center {
			padding: 10px 20px;
			width: 100%;
		}
		
		#left {
			width: 180px;
			padding: 0 10px;
			right: 240px;
			margin-left: -100%;
		}
		
		#right {
			width: 120px;
			padding: 0 10px;
            left: 150px;
			margin-right: -100%;
		}
		
		#footer {
			clear: both;
		}
		
		/* IE hack */
		* html #left {
			left: 150px;
		}

		/* Make the columns the same height as each other */
		#container {
			overflow: hidden;
		}

		#container .column {
			padding-bottom: 1001em;
			margin-bottom: -1000em;
		}

		/* Fix for the footer */
		* html body {
			overflow: hidden;
		}
		
		* html #footer-wrapper {
			float: left;
			position: relative;
			width: 100%;
			padding-bottom: 10010px;
			margin-bottom: -10000px;
			background: #fff;
		}

		/* Aesthetics */
		body {
			margin: 0;
			padding: 0;
			font-family:Sans-serif;
			line-height: 1.5em;
		}
		
		p {
			color: #555;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: darkgreen;
			text-decoration: none;
		}

		#header, #footer {
			font-size: large;
			padding: 0.3em;
			background: #BCCE98;
		}

		#left {
			background: #DAE9BC;
		}
		
		#right {
			background: #F7FDEB;
		}

		#center {
			background: #fff;
		}

		#container .column {
			padding-top: 1em;
		}
		.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
</style>
	</head>
	<body>
        <div class="navbar">

<a href="http://localhost/arushi/webmain.html" target="_self">Home</a>  
<a href="http://localhost/arushi/sm.html" target="_self">Success Mantra</a>  
<a href="http://localhost/arushi/main.html" target="_self">Question papers</a>
<a href="static/php/gpacalculator.php" target="_self">GPA calculator</a>
<a href="http://localhost/arushi/references.html" target="_self">References</a>

<a href="http://localhost/arushi/signin.html" target="_self" class="right">Sign in as another user</a>
<a href="http://localhost/arushi/index.html" target="_self" class="right">Logout</a>
</div>

<nav id="center" class="column">
    <h2>CALCULATE YOUR GPA HERE.......</h2>
    <p>Want to calculate your college course grades? Our easy to use college GPA calculator will help you calculate your GPA and stay on top of your study grades in just minutes! Whether you are taking degree courses online or are on a community college campus, no matter what degree course or specialized study you are aiming for – we have got you covered.</p>
   
    </nav>
		<div class="container" >
               
<FORM Name="GPACalcForm" ALIGN="right">
<TABLE BORDER=8 BGCOLOR=#C0C0C0 CELLPADDING="5" 
CELLSPACING="8" ALIGN="right" WIDTH="500px" HEIGHT="600px">
<TH></TH>
<TH>Grade</TH>
<TH>Credits</TH>
<TR>
<TD>Class 1</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR1" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR1" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 2</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR2" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR2" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 3</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR3" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR3" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 4</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR4" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR4" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 5</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR5" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR5" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 6</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR6" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR6" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 7</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR7" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR7" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR>
<TD>Class 8</TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="GR8" ALIGN=TOP 
MAXLENGTH=5></TD>
<TD><INPUT TYPE=TEXT SIZE=5 NAME="CR8" ALIGN=TOP 
MAXLENGTH=5></TD>
</TR>
<TR ALIGN=CENTER>
<TD COLSPAN=3><INPUT TYPE="BUTTON" VALUE="Calculate" 
NAME="CalcButton"
OnClick="gpacalc()"></TD>
</TR>
</TABLE>
</FORM>
<BR>
<P>
<h4>College GPA Calculator – Instructions</h4>
<p>Find your GPA within minutes with these quick steps:</p>

<p>Add Your Letter Grade</p>
<p>Add Your Class Credits</p>
<p>Calculate your GPA</p>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcJeSDkNisFcqH-NLdPQJ3vRyzsb622H4FyWELYJmUE2sStuyncA" alt="Snow" style="width:100%;max-width:500px" height="500px">
 
<h3> You need to enter your grade like S,A,B,C,D and E and the credits of that particular course.</h3>

<h4>You can use this simple online tool to figure out what GPA will you need in the final to <a href="https://gpacalculator.net/how-to-raise-gpa/">improve your GPA.</a></h4>
<P>

<BR>


<SCRIPT LANGUAGE="JavaScript">

<!-- 
function gpacalc()
{
//define valid grades and their values
var gr = new Array(9); 
var cr = new Array(9);
var ingr = new Array(5);
var incr = new Array(5);

// define valid grades and their values
var grcount = 11; 
gr[0] = "S";
cr[0] = 10;
gr[1] = "A"; 
cr[1] = 9; 
gr[2] = "B";
cr[2] = 8;
gr[3] = "C";
cr[3] = 7;
gr[4] = "D";
cr[4] = 6;
gr[5] = "E";
cr[5] = 5;
gr[6] = "F";
cr[6] = 4;
gr[7] = "G";
cr[7] = 3;
gr[8] = "H";
cr[8] = 2;
gr[9] = "I";
cr[9] = 1;
gr[10] = "N";
cr[10] = 0;
// retrieve user input
ingr[0] = document.GPACalcForm.GR1.value;
ingr[1] = document.GPACalcForm.GR2.value;
ingr[2] = document.GPACalcForm.GR3.value;
ingr[3] = document.GPACalcForm.GR4.value;
ingr[4] = document.GPACalcForm.GR5.value;
ingr[5] = document.GPACalcForm.GR6.value;
ingr[6] = document.GPACalcForm.GR7.value;
ingr[7] = document.GPACalcForm.GR8.value;
incr[0] = document.GPACalcForm.CR1.value;
incr[1] = document.GPACalcForm.CR2.value;
incr[2] = document.GPACalcForm.CR3.value;
incr[3] = document.GPACalcForm.CR4.value;
incr[4] = document.GPACalcForm.CR5.value;
incr[5] = document.GPACalcForm.CR6.value;
ingr[6] = document.GPACalcForm.GR7.value;
ingr[7] = document.GPACalcForm.GR8.value;

// Calculate GPA
var allgr =0;
var allcr = 0;
var gpa = 0;
for (var x = 0; x < 5+3; x++)
        {
        if (ingr[x] == "") break;
//      if (isNaN(parseInt(incr[x]))) alert("Error- You did not enter a numeric  credits value for Class If the class is worth 0 credits then enter the number 0 in  the field."); 
        var validgrcheck = 0;
        for (var xx = 0; xx < grcount; xx++)
                {
                if (ingr[x] == gr[xx])
                        {
                        allgr = allgr + (parseInt(incr[x],10) * cr[xx]);
                        allcr = allcr + parseInt(incr[x],10);
                        validgrcheck = 1;
                        break;
                        }
                }
        if (validgrcheck == 0)
                {
                alert("Error- Could not recognize the grade entered for Class " + eval(x +  1) + ". Please use standard college grades in the form of S,A,B,C.");
                return 0;
                }
        }

// this if-check prevents a divide by zero error
if (allcr == 0)
        {
        alert("Error- You did not enter any credit values! GPA = N/A");
        return 0;
        }

gpa = allgr / allcr;

alert("GPA =  " + eval(gpa));

return 0;
}

//-->
    
</SCRIPT>


	</body>
</html>