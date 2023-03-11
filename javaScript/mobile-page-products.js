/*open menu*/
function openSub(){
  var products =document.getElementById('products');
  var productbtn=document.getElementById('productbtn');
  var liproducts=document.getElementById('products');
  var arrow=document.getElementById('fas')
 products.classList.toggle("show");
 productbtn.style.backgroundColor='#DB2E33';
 productbtn.style.color='white'
 liproducts.style.backgroundColor='white';
 arrow.classList.toggle('changeColor');
 
  }
function openSprint(){
    var sprintList =document.getElementById('subSprint');
    var sprintbtn=document.getElementById('sprintbtn');
    var arrow=document.getElementById('fas2')
    sprintList.classList.toggle("show");
    sprintbtn.style.backgroundColor='#DB2E33';
    sprintbtn.style.color='white'
    arrow.classList.toggle('changeColor');
     
   }
 function openMotrona(){
      var motronaList =document.getElementById('subMotrona');
      var motronabtn =document.getElementById('motronabtn');
      var arrow=document.getElementById('fas3')
      motronaList.classList.toggle("show");
      motronabtn.style.backgroundColor='#DB2E33'
      motronabtn.style.color='white'
      arrow.classList.toggle('changeColor');
     
       
   }
   var mywindow;
   function closewindow(){
    mywindow =window.close()
  }
  
  