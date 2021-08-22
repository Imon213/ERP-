function customerRemove()
{
   
    let email = document.getElementById('email').value;
    
    
        const http = new XMLHttpRequest();
        http.open('POST', `../Controller/removecustomer.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`email=${email}`);
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                    document.getElementById('result2').innerHTML = this.responseText;
            }
        }
   
    
    
}