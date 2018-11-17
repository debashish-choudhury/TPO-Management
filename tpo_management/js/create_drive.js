function showdrive() {
    document.getElementById('drive').style.display = "block";
 }
 var win;
 var Round;
 var b=1;
 function insertrow(){
   var table = document.getElementById("RoundList");
   var rowCount = table.rows.length;
   var row = table.insertRow(rowCount);
   var cell1=row.insertCell(0);
   var cell2=row.insertCell(1);
   cell1.innerHTML = b;
   cell2.innerHTML = Round;
   b++;
 }
 
 
 function AddRound() {
   
   Round=document.getElementById('InputRound').value;
   if(Round) {
     insertrow();
     alert("Entered the round");
     document.getElementById('RoundList').style.display="block";
   }
   else {
     alert("Field is Empty");
   }
  
   AddRoundHide();
  }
    function Add_Round_Visible() {
    document.getElementById('InputRound').style.display="inline";
    document.getElementById('InputRoundButton').style.display="inline";
    document.getElementById('InputRound').align="center";
    }
    
    function AddRoundHide() {
    document.getElementById('InputRound').style.display="none";
    document.getElementById('InputRoundButton').style.display="none";
    }
