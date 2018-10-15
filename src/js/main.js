
	const header=document.getElementById('header');
    const comm=document.querySelector('.comm')
    const inputs=document.querySelectorAll('input');
    const error=document.querySelector('.error');
   
   
    //event listeners when DOM is ready
    function allEvents(){

        //headersP();//header
    }
    //for events
    function headersP(){
        console.log('dom') 
            setTimeout(()=>header.style.display='block',5000)
        }
        function checkFields(){
        if(this.value.trim().length==0){
            this.className='add_error';
            error.innerHTML=`* ${this.placeholder}`;
            
            
        }else{
            this.className='remove_error'; 
            error.innerHTML=''; 
        }
        }
        
        inputs.forEach(input=>input.addEventListener('blur',checkFields))

	//document.addEventListener('DOMContentLoaded', allEvents);

    
   //fetch api

        function getUsers(){
            const url='https://randomuser.me/api//?results=20';
            fetch(url)
            .then(res=>res.json())
            .then(res=>{
                
                const result=res.results;
                
                const randomUser=document.getElementById('random-user');
                
                let output=''
                 result.map(resul=>{
                     
                   output += `
                    <div class='card'>
                    <img class=' img-fluid thumbnail' src='${resul.picture.large}'>
                    <ul>
                    <li>Name:${resul.name.first} ${resul.name.last} </li>
                    <li>Occupation: Public Relations Officer </li>
                    <li>Email:${resul.email} </li> 
                    <li>Location: Nairobi </li>
                    <li> Member: PRSK </li>
                    
                    </ul>
                    <button class='bg-primary text-white text-center'> Add Connection </button>
                    </div>
                    
                    `
                   
                   return output; 
                    
                })
                randomUser.innerHTML=output;
                })
            .catch(err=>console.log(err))
        }
	
getUsers()
//form select
const select=document.querySelector('#category')
if(select){
    select.addEventListener('change',()=>{
        const grad=document.getElementById('grad');
        const comp=document.getElementById('comp');
        const student=document.getElementById('student');
        const pro=document.getElementById('pro');
         //pro
         if(select.value=='pro'){
            grad.style.display='none';
            comp.style.display='none';
            student.style.display='none';
            pro.style.display='block';
         }
         //comp
         if(select.value=='comp'){
            grad.style.display='none';
            comp.style.display='block';
            student.style.display='none';
            pro.style.display='none';
         }
         //student
         if(select.value=='student'){
            grad.style.display='none';
            comp.style.display='none';
            student.style.display='block';
            pro.style.display='none';
         }
         
         //Grad
         if(select.value=='grad'){
            grad.style.display='block';
            comp.style.display='none';
            student.style.display='none';
            pro.style.display='none';
         }

    })


}
