function uploadProduct()
{
    let name=document.getElementById('name').value;
    let id= document.getElementById('id').value;
    let price=document.getElementById('price').value;
    let type=document.getElementById('type').value;
    let details= document.getElementById('details').value;
    let image= document.getElementById('image').value;
    if(name!='' && id!='' && price!='' && type!='' && details!='' && image!='')
    {

        const json = {
            'name': name,
            'id' : id,
            'price' : price,
            'type' : type,
            'details' : details,
            'image' : image
        
    };
    const data = JSON.stringify(json);
            const http = new XMLHttpRequest();
            http.open('POST', `../Controller/addproductcheck.php`, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(`mydata=${data}`);
            http.onreadystatechange = function(){
        
                if(this.readyState == 4 && this.status == 200){
                   
                    
                      //  document.getElementById('result').innerHTML = this.responseText;
                      alert(this.responseText);
             
                   
                }
            }
    }
    else
    {
        alert('Information is missing. Please check');
    }

    
    

}