
var num_capitolo = 0;
var num_paragrafo = 0;

function capitolo(str) /* utilizzo di variabili statiche */
{
	num_capitolo++;
	num_paragrafo=0;
	println("<h1>"+num_capitolo+". "+str+"</h1>");
}

function paragrafo(str) /* utilizzo di variabili statiche */
{
	num_paragrafo++;
	println("<h2 class=\"m30\">"+num_capitolo+"."+num_paragrafo+". "+str+"</h2>");
	document.write("<div id=\""+str+"\" class=\"m70\">\n");
}

function chiudiparagrafo()
{
	println("</div>")
}

function replaceAll(str, find, replace) 
{
		return str.replace(new RegExp(find, 'g'), replace);
}

function substrCount (str, subString) 
{
	document.write(subString+"<br>");	
	document.write(str+"<br>");		
	document.write(replaceAll(str,subString, "")+"<br>");		
	document.write(str.length+"<br>");	
	document.write((replaceAll(str,subString, "")).length+"<br>");	
	document.write(subString.length+"<br>");		
	return (str.length - (replaceAll(str,subString, "")).length) / subString.length;
}

function println(str="")
{
	document.write(str+"<br>\n");
}

function print(str="")
{
	document.write(str);
}

function infoBrowser()
{
	println('Browser           : '+navigator.appName);
	println('Browser Code Name : '+navigator.appCodeName);
	println('Cookie enabled    : '+navigator.cookieEnabled);
	println('Versione          : '+navigator.appVersion);
	println('Piattaforma       : '+navigator.platform);
	println('User Agent        : '+navigator.userAgent);
}
