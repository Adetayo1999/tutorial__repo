

 
const Form = document.querySelector('form');
Form.addEventListener('submit' , getUsers);


  function getUsers(e){
     e.preventDefault()
     const Number = Form.querySelector('input').value
     console.log(Number);
   const xhr = new XMLHttpRequest();
   xhr.onload = function(){
    if(this.status === 200){
        let response = JSON.parse(this.responseText);
        response = response.slice(0 , Number);
       const Users = document.querySelector("#users");
    
       
           let Data;
      response.map(res =>{
      
       Data =  ` 
       <pre>
         <li>Name: ${res.name} </li>
         <li>Email: ${res.email} </li>
          <li>Gender: ${res.gender} </li>
     </pre>

       `
       Users.innerHTML += Data;
       })           
    }
   }  
   
   xhr.open("GET" , "http://localhost/users.json" , true)
   xhr.send()
  }


