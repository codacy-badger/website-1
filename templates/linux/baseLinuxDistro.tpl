
<?php
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div class="row mainBody">

  <div class="col-xm-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
  </div>
  <div class="col-xm-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
    <?php

        include '/linuxHQ/modules/variables/varInclude.php';
        include $sitePath . '/linuxHQ/modules/sections/distroSection/linuxDistroContent.tpl';

    ?>
  </div>

</div>

</body>
</html>
