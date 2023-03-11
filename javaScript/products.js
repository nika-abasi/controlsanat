
const caseNodes =$.querySelectorAll('.showcase')
const showBtn=$.querySelectorAll('.show-more')
const scrollTop=$.querySelector('.top-arrow')


   
    showBtn.forEach(function(btn){
        btn.addEventListener('click',()=>{
          console.log(btn)
         const parentCase=btn.nextElementSibling
       
         parentCase.classList.remove('toggle')
         parentCase.nextElementSibling.classList.add('show')
         btn.classList.remove('show-more')
         btn.innerHTML=""
       
      })})
              
      scrollTop.addEventListener('click',()=>{
        window.scrollTo({
            top:2,
            behavior:"smooth"
        })
        
      })          
              
            
            

  

 
//  function changeClass(event){
//      let btn = event.target,
//        context = event.target.parentNode,
//        toggleEl = context.querySelector(".currentNode");
    
//     toggleEl.classList.toggle('show');
//     console.log(toggleEl)
//     if (toggleEl.classList.contains("show")) {
//             btn.innerHTML = "Show Less";
//         } else {
//             btn.innerHTML = "Show More";
//         }
// }

