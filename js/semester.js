$(document).ready(function() {
	var dt = new Date();
var s=dt.getMonth()+1;

if((s<=6)&&(s>=1))
   
     document.getElementById("odd").style.display = 'none'; 
    
 
 else
    
     document.getElementById("even").style.display = 'none';
     
});