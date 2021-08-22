function addAccountant() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let password = document.getElementById('password').value;
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let others = document.getElementById('others');
    let gender="";
    if(male.checked==true)
    {
        gender=male.value;
    }
    else if(female.checked==true)
    {
        gender=female.value;
    }
    else if(others.checked==true)
    {
        gender=others.value;
    }
    let dob=document.getElementById('dob').value;
    let result=document.getElementById('result').value;

    if(name!="" && email!="" && phone!="" && gender!="" && dob!="" && password!="")
    {
        const json = {
            'name': name,
            'dob' : dob,
            'email' : email,
            'phone' : phone,
            'password' : password,
            'gender' : gender
        };
        const data = JSON.stringify(json);
        const http = new XMLHttpRequest();
        http.open('POST', `../Controller/add_accountant_check.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`mydata=${data}`);
     
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                    document.getElementById('result').innerHTML = this.responseText;
         
               
            }
        }
    }
    else
    {
        document.getElementById('result').innerHTML = "Infromation Missing";
    }
    


}




