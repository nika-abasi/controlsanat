<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index-style.css">
    <link rel="stylesheet" href="./motrona-products.css">
   </head>
   <body>
        
             <div class="header">
             <div class="topbar">
             <?php include 'header.php';?>
             </div>
         </div>
            
         </div>
    <section id="Safe-speed-monitors">
          <div class="main-container">
              <div>
                 <h1 style="font-family: sans-serif;">Controls and regulators for angle-synchronous synchronism (electronic shaft), <br>synchronization of drives as well as for index and print mark control</h1>
              </div>
              <div class="section1">
                 
                 <p>The synchronization controls or synchronization controllers shown here work according to the “master-slave” principle. While the leading drive (master) can carry out any movement sequences, the synchronization controller ensures that the slave drive follows all movements with exact positioning.<br>
                  Incremental encoders are used for position feedback. Frequently, only a measuring wheel with an encoder is used as the "master" to record a specified path movement.<br>
                  Any number of speed ratios and gear ratios can be implemented. All synchronization controls can also evaluate zero pulses from the encoder or external index signals (e.g. from proximity switches or light barriers) and thus automatically synchronize themselves to a specified machine cycle or a print mark with the exact position.<br>
                  
                  motrona synchronization controllers work with all drives (AC converter, DC, servo, hydraulic) that have an analogue setpoint input ±10 V. The extremely short position control cycles of motrona synchronization controllers guarantee excellent synchronization properties even with highly dynamic requirements.</p>
              </div>
              <div class="divider-line"></div>
          </div>    
          <div class="main-container">
             <div>
               <h1 style="font-family: sans-serif;">BY340: Synchronous control for 1 following axis</h1>
             </div>
             <div class="section1">
                <p>
                  Inexpensive synchronization controller. Gear factor adjustable via keyboard.
                      <br><br>
                     -2 pulse inputs in format A, B, 90° [HTL] or A, /A, B, /B [RS422]<br>
                     -4 control inputs for HTL / PNP / NPN / Namur signals [10 ... 30 VDC]<br>
                     -Input frequency up to 300 kHz<br>
                     -4 fast transistor outputs, push-pull, short-circuit proof [5 … 30 VDC]<br>
                     -Scalable 14-bit analog output (±10 V or 0/4 … 20 mA)
                </p>
                <img  style="margin-top: 2%;width: 200px;" src="./img/DX350.png" alt="" class="pic2">
             </div>
             <div class="divider-line"></div>
          </div>
          <div class="main-container">
            <div>
              <h1 style="font-family: sans-serif;">BY641: Master / slave synchronization controller with 4 relays</h1>
            </div>
            <div class="section1">
               <p>
                  Design like BY340, but with 4 relays and preselector switches on the front for setting the gear factor.
               </p>
               
            </div>
            <div class="divider-line"></div>
          </div>
          <div class="main-container">
            <div>
              <h1 style="font-family: sans-serif;">BY701 firmware: axis synchronization of drives</h1>
            </div>
            <div class="section1">
               <p>
                  Together with the BY701 firmware, the MC700 motion controller can implement excellent synchronization functions for 1 to 4 axes. The firmware offers all conceivable options for synchronizing drives, including influencing the phasing and relative position between the drives and numerous index and print mark functions.
               </p>
               <img  style="margin-top: 2%;width: 200px;" src="./img/by701.png" alt="" class="pic2">
            </div>
            <div class="divider-line"></div>
          </div>
          
    </section>
    
    <?php include 'footer.php';?>
    <script src="./script.js"></script>
    <script src="./products.js"></script>
    
 </body>
 </html