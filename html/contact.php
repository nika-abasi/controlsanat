<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

</head>
<body id="contact-page">
     
          <div class="header">
          <div class="topbar">
          <?php include 'header.php';?>
          </div>
      </div>
         
      </div>
        
<div class="info-container"> 
<div class="ti">ارتباط با ما</div>      
    <div class="info info2">
       <form  method="POST" name="contactform"  action="contact-form-handler.php">
        <label for="fname">نام و نام خانوادگی</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">

         <label for="cname">نام شرکت</label>
        <input type="text" id="cname" name="cname" placeholder="Company name..">
    
        <label for="email">پست الکترونیک</label>
        <input type="text" id="email" name="email" placeholder="Email..">

        <label for="tell">شماره تماس </label>
        <input type="text" id="tell" name="tell" placeholder="Your contact..">
     
        <label for="subject">توضیحات</label>
        <textarea id="subject" name="subject" placeholder="Write massage.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

       </form>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1249.3828553555988!2d51.42284510436913!3d35.689363908100134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0124b592cde9%3A0x6e30f96c254c1d8!2z2qnZhtiq2LHZhCDYtdmG2LnYqiDZiCDYotmG2KfZh9uM2KrYpw!5e0!3m2!1sen!2s!4v1644573686870!5m2!1sen!2s" width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <iframe id="iframe2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1249.3828553555988!2d51.42284510436913!3d35.689363908100134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0124b592cde9%3A0x6e30f96c254c1d8!2z2qnZhtiq2LHZhCDYtdmG2LnYqiDZiCDYotmG2KfZh9uM2KrYpw!5e0!3m2!1sen!2s!4v1644573686870!5m2!1sen!2s" width="433" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

   
    </div>
    <div class="info info1">
        <div class="call">
            <h1>تماس مستقیم&nbsp&nbsp33902083-021 </h1>
        </div>
        <div class="w-pic"></div>
        <div class="offices">
            <h1 >دفتر ایران</h1>
            <h2 >آدرس دفتر مرکزی : خیابان سعدی جنوبی – مجتمع تجاری اداری سعدی – ط 5 – واحد 517
                <br><br>
                تلفن دفترمرکزی :     &nbsp&nbsp                           02133902059 – 02133902083 – 02133902094
                <br><br>
                تلفن همراه : &nbsp&nbsp  09125386165  (واتس اپ – تلگرام)
                <br><br>
                :پست الکترونیک<br>
                info@control-sanat.com<br>
                sara.ghyasvand@control-sanat.com
                <br><br>
             </h2>
             <h1 id="h1">دفتر المان</h1>
             <h2 id="h2">  Anahita-GmbH    Wellensiek 111, 3369 Bielefeld Germany<br>
                
                www.anahita-gmbh      : وب سایت  <br>   
                :پست الکترونیک<br>
                info@anahita-gmbh.de &nbsp&nbsp 
                sara.gh@anahita-gmbh <br>
                
              </h2>
            
        </div>   
    </div>
</div>          







 <?php include 'footer.php';?>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   <script src="./script.js"></script>
   <script language="JavaScript">
// Code for validating the form
       var frmvalidator  = new Validator("contactform");
       frmvalidator.addValidation("fname","req","Please provide your name"); 
       frmvalidator.addValidation("cname","req","Please provide your company name");
       frmvalidator.addValidation("email","req","Please provide your email"); 
       frmvalidator.addValidation("email","email","Please enter a valid email address"); 
       frmvalidator.addValidation("tell","req","Please provide your tell");
   </script>
   

   
</body>
</html>
