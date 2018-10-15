
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

    
    window.addEventListener('resize',function(e){
		document.querySelector('.error').innerHTML=e.currentTarget.innerWidth})
        function getUsers(){
            const url='https://randomuser.me/api//?results=20';
            fetch(url)
            .then(res=>res.json())
            .then(res=>console.log(res.results))
            .catch(err=>console.log(err))
        }
	
getUsers()