/*
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com
*/
/** FUNZIONI */

// funzione per prendere un elemento con id univoco
function prendiElementoDaId(id_elemento) 
{
	var elemento;
	if(document.getElementById)
	{
		elemento = document.getElementById(id_elemento);
	}
	else
	{
		elemento = document.all[id_elemento];
	}
	return elemento;
};

// funzione per assegnare un oggetto XMLHttpRequest
function assegnaXMLHttpRequest() 
{
	// lista delle variabili locali
	var  XHR = null,browserUtente = navigator.userAgent.toUpperCase();
	
	// variabile di ritorno, nulla di default

	// browser standard con supporto nativo
	 // non importa il tipo di browser
	if(typeof(XMLHttpRequest) === "function" || typeof(XMLHttpRequest) === "object")
	{
	  		XHR = new XMLHttpRequest();

			 // browser Internet Explorer
			 // è necessario filtrare la versione 4
	}
	else if(window.ActiveXObject && browserUtente.indexOf("MSIE 4") < 0 )
	{
		// la versione 6 di IE ha un nome differente
		// per il tipo di oggetto ActiveX
		if(browserUtente.indexOf("MSIE 5") < 0)
		{
			XHR = new ActiveXObject("Msxml2.XMLHTTP");
		}
		// le versioni 5 e 5.5 invece sfruttano lo stesso nome
		else
		{
			XHR = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}

	return XHR;
};



/** OGGETTI / ARRAY */

// oggetto di verifica stato
var readyState = {
	INATTIVO:		0,
	INIZIALIZZATO:	1,
	RICHIESTA:		2,
	RISPOSTA:		3,
	COMPLETATO:		4
};

// array descrittivo dei codici restituiti dal server
// [la scelta dell' array è per evitare problemi con vecchi browsers]
var statusText = new Array();
statusText[100] = "Continue";
statusText[101] = "Switching Protocols";
statusText[200] = "OK";
statusText[201] = "Created";
statusText[202] = "Accepted";
statusText[203] = "Non-Authoritative Information";
statusText[204] = "No Content";
statusText[205] = "Reset Content";
statusText[206] = "Partial Content";
statusText[300] = "Multiple Choices";
statusText[301] = "Moved Permanently";
statusText[302] = "Found";
statusText[303] = "See Other";
statusText[304] = "Not Modified";
statusText[305] = "Use Proxy";
statusText[306] = "(unused, but reserved)";
statusText[307] = "Temporary Redirect";
statusText[400] = "Bad Request";
statusText[401] = "Unauthorized";
statusText[402] = "Payment Required";
statusText[403] = "Forbidden";
statusText[404] = "Not Found";
statusText[405] = "Method Not Allowed";
statusText[406] = "Not Acceptable";
statusText[407] = "Proxy Authentication Required";
statusText[408] = "Request Timeout";
statusText[409] = "Conflict";
statusText[410] = "Gone";
statusText[411] = "Length Required";
statusText[412] = "Precondition Failed";
statusText[413] = "Request Entity Too Large";
statusText[414] = "Request-URI Too Long";
statusText[415] = "Unsupported Media Type";
statusText[416] = "Requested Range Not Satisfiable";
statusText[417] = "Expectation Failed";
statusText[500] = "Internal Server Error";
statusText[501] = "Not Implemented";
statusText[502] = "Bad Gateway";
statusText[503] = "Service Unavailable";
statusText[504] = "Gateway Timeout";
statusText[505] = "HTTP Version Not Supported";
statusText[509] = "Bandwidth Limit Exceeded";