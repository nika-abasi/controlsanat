<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./mobile-page-products.css">
    
</head>
<body>
    <button type="button" class="close" onclick="closewindow()">&times</button>
    <div class="container">
       
             <ul>
                    <li >
                        <a href="" >کنترل صنعت</a> 
                        
                    </li>
                    <button class="productbtn" onclick="openSub()" id="productbtn">
                        <i class="fas  fa-arrow-down" id="fas"></i> 
                        محصولات
                    </button>    
                    <ul id="products" class="products">

                                <button class="sprintbtn" onclick="openSprint()" id="sprintbtn">SPRINT ELECTRIC
                                      <i class="fas  fa-arrow-down fas2" id="fas2"></i> 
                                   
                                </button>       
                                <ul id="subSprint" class="subSprint">
                                          <li><a href="">PL/X SERVICES</a></li>
                                          <li><a href="">JL/X SERVICES</a></li>
                                          <li><a href="">PL/XD SERVICES</a></li>
                                          <li><a href="">340/680/1220 SERVICES</a></li>
                                          <li><a href="">XLV SERVICES</a></li>
                                          <li><a href="">SL SERVICES</a></li>
                                          <li><a href="">OPEN CHASSIS-MAUNT DC DRIVES</a></li>
                                          <li><a href="">ENCLOSED DC DRIVES</a></li>
                                          <li><a href="">ANCILLARY ITEMS</a></li>
                                </ul>  
                                
                                </li>
                                <button class="motronabtn" onclick="openMotrona()"id="motronabtn">MOTRONA
                                    <i class="fas  fa-arrow-down fas3" id="fas3"></i> 
                                </button>
                                <ul id="subMotrona" class="subMotrona">
                                        <li><a href="">SAFTY RELAY</a></li>
                                        <li><a href="">DISPLAY DEVICES</a></li>
                                        <li><a href="">PL/XD SERVICES</a></li>
                                        <li><a href="">CONTROLS</a></li>
                                        <li><a href="">SIGNAL CONVERTER</a></li>
                                        <li><a href="">EQUIPMENT</a></li>
                                        
                               </ul>
                                </li>  
                    </ul>                    
                    <li> 
                         <a href="">خدمات</a> 
                         
                    </li>
                    <li >
                        <a href="">همکاران</a> 
                        
                    </li>
                    <li>
                        <a href="">تماس با ما</a>
                          
                    </li>
                      
            </ul>
        
    </div>
   <script src="./mobile-page-products.js"></script>
</body>
</html>