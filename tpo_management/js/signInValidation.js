function validate() {
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    if(username == "" || username == null && password == "" || password == null) {
        alert("Please enter username and password");
    } 
    else if(username == "" || username == null) {
        alert("Please enter username");
    } 
    else if(password == "" || password == null) {
        alert("Please enter password");
    } 
       
}