function resAccept()
{
    let email=document.getElementById('remail').value;
   

    const http = new XMLHttpRequest();
        http.open('POST', `../Controller/resaccept.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`email=${email}`);
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                   alert(this.responseText);
            }
        }

}
function resRemove()
{

    let email=document.getElementById('remail').value;
   

    const http = new XMLHttpRequest();
        http.open('POST', `../Controller/resreqremove.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`email=${email}`);
        http.onreadystatechange = function(){
    
            if(this.readyState == 4 && this.status == 200){
               
                
                   alert(this.responseText);
            }
        }
}