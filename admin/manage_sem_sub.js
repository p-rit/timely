function viewFn(){
  document.getElementById("fac_table").style.display ="inline";
   document.getElementById("update_table").style.display ="none";
      document.getElementById("rem_table").style.display ="none";
    
      document.getElementById("add").style.display ="none";
   }
function updateFn(){
  document.getElementById("update_table").style.display ="inline";
      document.getElementById("fac_table").style.display ="none";
    
      document.getElementById("add").style.display ="none";
  
		  }
   function addFn(){
     document.getElementById("update_table").style.display ="none";
    document.getElementById("fac_table").style.display ="inline";
    
    document.getElementById("add").style.display ="inline";
   
  	}	
    function addFac(){
	  var n =document.getElementById("textfac").value;
	   document.write('<form action="" method="POST"><table><tr><th>Subject ID</th><th>Subject Name</th><th>Semester Allocated</th></tr>');
	   	document.write('<input type="text" name="no" value="'+n+'" hidden>');
       for(var i=0;i<n;i++)
         { document.write('<td ><input type="text" name ="ids'+i+'"></td>');
           document.write('<td ><input type="text" name ="names'+i+'"></td>');
           document.write('<td ><input type="text" name ="lectures'+i+'"></td></tr>');
         }
        document.write('</table><br><input class="btn btn-warning btn-sm" type="submit" name ="Submit"></form>');	
     }

function removeFn(){
		document.getElementById("update_table").style.display ="none";
    document.getElementById("fac_table").style.display ="none";
    
    document.getElementById("add").style.display ="none";
   
    document.getElementById("rem_table").style.display ="inline";
  }
function r1(yid){//getting values for deletion
    /*var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("").innerHTML = this.responseText;
            }
        };


    xmlhttp.open("GET","Ajax.php?d="+myid, true);
    xmlhttp.send();*/
  $.ajax({
   url: 'Ajax2.php',
   type: 'POST',
   data: { dd:yid },
   })

}
function f1(myid,name,Lectures){//getting values for updation
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("id").value =myid;
    document.getElementById("name").value =name;
    document.getElementById("lect").value =Lectures;
  }
