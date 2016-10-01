// JavaScript Document

var resObjekt = null;

function erzXMLHttpRequestObject() {
    var resObjekt = null;																
		try  {																					
			resObjekt = new ActiveXObject("MSXML2.XMLHTTP");
		} 
    catch (e1) {																				
			try {																				
				resObjekt = new ActiveXObject("Microsoft.XMLHTTP");
			} 
      catch (e2) {
				try {
        resObjekt = new XMLHttpRequest();
        }
        catch (Error) {
         alert("Not possible to create an XMLHttpRequestObject");
        }
      }
    }
	return resObjekt;
	};

  
function sndReq(i) {
      resObjekt.open('get','antworten.php?frage='+i,true);
      resObjekt.onreadystatechange = handleResponse;
      resObjekt.send(null);
    }

function handleResponse() {
  var id = 'hs';
  if(resObjekt.readyState == 4){
    document.getElementById(id).innerHTML =
      resObjekt.responseText;
  }
}


resObjekt= erzXMLHttpRequestObject();