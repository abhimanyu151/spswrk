function createRequestObject() {
     var o;     
     o = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
 
     return o;
}
 
var http = createRequestObject();
 
function sende(text) {
     http.open('get', 'ajax_answer_wordlist.php?action='+text);
     http.onreadystatechange = handleResponse;
     http.send(null);
}
 
function handleResponse() {
     if(http.readyState == 4){
          var response = http.responseText;
//		  document.writeln(response);
   		  document.getElementById("answer").innerHTML=response;

     }
}

