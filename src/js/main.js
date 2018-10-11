
	const header=document.getElementById('header');
	const comm=document.querySelector('.comm')
    console.log(header)
    //event listeners when DOM is ready
    function allEvents(){

        header();//header
    }
    //for events
    function header(){
        console.log('dom') 
            setTimeout(()=>header.style.display='block',5000)
        }
        

	document.addEventListener('DOMContentLoaded', allEvents)
	
