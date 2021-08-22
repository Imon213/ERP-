function Feedback() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
   let comment = document.getElementById('comment').value;
   

    if(name!="" && email!="" && comment!="")
    {
        const json = {
            'name': name,
            'email' : email,
            'comment' : comment,
        };
        const data = JSON.stringify(json);
        const http = new XMLHttpRequest();
        http.open('POST', `../controller/feedbackcheck.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`mydata=${data}`);
     
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                 alert(this.responseText);
         
               
            }
        }
    }
    else
    {
        alert('Infromation Missing');
    }
    


}




