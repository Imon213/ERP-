
         <script>

    function validate(){
            
            var name = document.getElementById('name').value;
            var address = document.getElementById('address').value;
            var product = document.getElementById('product').value;
            let phone = document.getElementById('phone').value;
            var quantity = document.getElementById('quantity').value;
            var price = document.getElementById('price').value;
           
            c
       if(name == ''){
        alert('Name: Null value');
      }
            else if(name.length<2 && (name>='A' && name<='Z' || name>='a' && name<='z')){
                    alert('Name: Contains at least two words');
                    }
            else if(name >='0'  && name<='9' || name=='~' || name=='!' || name=='@' || name =='#' || name=='$' || name=='%' || name=='^' || name=='&' || name=='*' || name=='()'|| name=='/' ){
                    alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
                    }
            else if(name>='0' && name<='9'){
                    alert('Name: Must be starts with letter');
                    }
            //Address Validation
            if(address  != ""){
        document.getElementById('head1').innerHTML = address;
      }else{
        alert('Address: Null value');
      } 
            
            //Product Validation
            if(product  != ""){
        document.getElementById('head1').innerHTML = product;
      }else{
        alert('Product: Null value');
      } 

            //Phone Validation
            if(phone  != ""){
        document.getElementById('head1').innerHTML = phone;
      }else{
        alert('Phone: Should be at least 11 chracter');
      } 
       //quantity Validation
            if(quantity  != ""){
        document.getElementById('head1').innerHTML = quantity;
      }else{
        alert('Quantity: Should not be null');
      } 
       //price Validation
            if(price  != ""){
        document.getElementById('head1').innerHTML = price;
      }else{
        alert('Price: Should not be null');
      } 
          
    }
  </script>

  