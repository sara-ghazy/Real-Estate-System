function validateForm(){

let emailElement = document.getElementById('email')

const submit_create_account_Button = document.getElementById('submit')


submit_create_account_Button.addEventListener('click', ()=>{
    
    let data = {
  
        email: emailElement.value,
       
    };
    let re = new RegExp('^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$');
    if(data.email.match(re)){
    
    } 
    else 
    {
    {alert('your email is invalid!')}
    
        return false;
    }
    
    
})
}