<?php 
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . '/modules/linux/linuxBaseHeader.tpl'; 
?>


<body onload="getDesktopData()">
  <?php include $sitePath . '/modules/linux/linuxNavMenu.tpl'; ?>
    <div class="row">
      <div class="col-xm-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <?php include $sitePath . '/linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
      </div>
      <div class="col-xm-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div id="desktopSection">


        </div>
      </div>
    </div <!-- Ends Row -->
  

<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops.js"></script>
