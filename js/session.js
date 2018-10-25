   var dt = new Date();
var s=dt.getMonth()+1;


if((s<=6)&&(s>1))
 { 	
    
     document.getElementById("demo").innerHTML = "Session : Jan-June , "+dt.getFullYear(); 
    
 }
  else
    {
     document.getElementById("demo").innerHTML ="Session : July-Dec , "+dt.getFullYear();
     }

