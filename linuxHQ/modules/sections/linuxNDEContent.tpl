
<div id="LinuxSection">
  <div class="row">
    <div class="col-lg-2"><?php echo $deName; ?></div>

    <div class="screenshots col-lg-8">

      <div class="font-weight-bold">Screenshots </div>
      <?php

        echo "test 1";
        echo "$$deSShot;";
        echo "test 2";
        echo $$deShots;
        echo "test 3";
        echo "${deSShot}";
        echo "Test 4";
        echo ${deSShot}



      ?>
    </div>
  </div>

  <div class="card">
    <div class="card-block">
      <div class="card-text">

        <div class="font-weight-bold">Desktop Catagory:
          <div class="font-weight-normal"><?php echo $deCat; ?></div>
        </div>

        <div class="font-weight-bold">General Requirements:
          <div class="font-weight-normal"><?php echo $deClass; ?></div>
        </div>

        <div class="font-weight-bold">Distros that Feature:
          <div class="font-weight-normal"><?php echo $deFeatured; ?></div>
        </div>
      </div>
    </div>
  </div>



  <div class="card">
    <div class="card-block">
      <div class="card-text">

			<?php include $sitePath . "/linuxHQ/modules/sections/installHowTo.tpl"; ?>

      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-block">
      <div class="card-text">
        <p>* "Distros that feature" means distributions that have an official ISO or officially supported version with the DE in question. That is not to say that you can not install this DE on other distros.<br /><br /></p>

        <p>Please note I have to double check any content about PCLinuxOS ...not saying its not accurate... just that I am not 100% sure of the line of code... when i check all of the package names (which is the only thing that WOULD be different if I got it wrong) .. I will remove this notation</p>
      </div>
    </div>
  </div>
</div>
