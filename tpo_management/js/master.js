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

function deleteRow(student_list) {
  try {
  var table = document.getElementById("student_list");
  var rowCount = table.rows.length;

  for(var i=1; i<rowCount; i++) {
      var row = table.rows[i];
      var chkbox = row.cells[0].childNodes[0];
      if(null != chkbox && true == chkbox.checked) {
          table.deleteRow(i);
          rowCount--;
          i--;
      }
  }
  }catch(e) {
      alert(e);
  }
}





function selectall(source) {
  checkboxes = document.getElementsByName('List1');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
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



/*win=prompt("Enter Round :");
	if(win){
		insertrow();
//	alert("Entered the Round");
	}
	else{
	alert("Field is empty");
	}*/
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
