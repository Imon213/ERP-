

function Update()
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let password = document.getElementById('password').value;
    let dob=document.getElementById('dob').value;
    let gender=document.getElementById('gender').value;
    if(name!="" && email!="" && phone!="" && gender!="" && dob!="" && password!="")
    {
    
    const json = {
        'name': name,
        'dob' : dob,
        'email' : email,
        'phone' : phone,
        'gender' : gender,
        'password' : password
        
    };
   

    const data = JSON.stringify(json);
        const http = new XMLHttpRequest();
        http.open('POST', `../controller/updatechecking.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`mydata=${data}`);
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                    document.getElementById('result1').innerHTML = this.responseText;
            }
        }
     
   
}
else
{
    document.getElementById('result1').innerHTML='Information Missing. Please Check'
}
}

