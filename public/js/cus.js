 function showSem()
{
    var No=document.getElementById(' No').value;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("sem").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","/showMarksSem?No="+No,true);
    xhttp.send();
}
function getuserid()
{   var x= document.getElementById("name");
    

    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
       // if(this.readyState==4 && this.status==200)
       // {
            document.getElementById("user_id").innerHTML=this.responseText;
       // }
    };
    xhttp.open("GET","/showId?x="+x,true);
    xhttp.send();
    return false;
}


 function showPO()
{  var x= document.getElementsByName("optionsRadios");
   alert(x);
  //  var No=document.getElementById().value;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
       // if(this.readyState==4 && this.status==200)
        //{
            document.getElementById("Search").innerHTML=this.responseText;
       // }
    };
    xhttp.open("GET","/showPO?x="+x,true);
    xhttp.send();
    
}
function myFunction() {
    var optionsRadios = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < optionsRadios.length; i++) {
        if (optionsRadios[i].checked) {
            txt = txt + optionsRadios[i].value + " ";
        }
    }
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        document.getElementById("Search").innerHTML=this.responseText;
    };
    xhttp.open("GET","/showPO?txt="+txt,true);
    xhttp.send();
    return false;
}