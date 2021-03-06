<?php

		$pageTitle = 'Linux Distribution (AKA Version) Section Frontpage';
	  $sitePath = "/home/xmetalx1/public_html";

		include $sitePath . "/templates/linux/baseLinuxDistro.tpl";
?>



<h1>Top Linux Distributions for new users</h1>
<div class="card">
  <div class="card-block">
    <h4 class="card-title">
			<img src="/linuxHQ/graphics/icons/mint.png" alt="Linux Mint Icon"/>
			<?php print $mintMP; ?></h4>

    <div class="card-text">
      <div>Screenshots </div><?php print $mintCinSS1; ?>
      <div>Homepage </div><?php print $mintHOME; ?>
      <div>Distrowatch </div><?php print $mintDW; ?>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-block">
    <h4 class="card-title">
			<?php print $ubuntuMateMP; ?>
		</h4>
    <div class="card-text">
      <div class="screenshots"><?php print $UMateSS1; ?> </div>
      <div>
        Homepage
        <?php print $UMateHOME;  ?>
      </div>
      <div>
        Distrowatch
        <?php print $UMateDW; ?>
      </div>
      <div>Specs
        <p>Minimum Requirements</p>
        <ul>
          <li>Pentium III 750 megahertz</li>
          <li>512 megabytes (MB) of RAM</li>
          <li>8 gigabytes (GB) of available space on the hard disk</li>
        </ul>
        <p>Recommended</p>
        <ul>
          <li>Core 2 Duo 1.6 gigahertz</li>
          <li>2 gigabytes (GB) RAM</li>
          <li>16 gigabytes (GB) of available space on the hard disk</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title"><?php print $xubuntuMP; ?></h4>
    <div class="card-text">
      <div>
        Screenshots
        <?php print $xubuntuSS1; ?>
      </div>
      <div>
        Homepage
        <?php print $xubuntuHOME; ?>
      </div>
      <div>
        Distrowatch
        <?php print $xubuntuDW; ?>
      </div>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-block">
    <h4 class="card-title"> <?php print $linuxLiteMP; ?></h4>
  </div>
  <div class="card-text">
    <div>
      Screenshots
      <?php print $lliteSS1; ?>
    </div>
    <div>
      Homepage
      <?php print $linuxLiteHOME; ?>
    </div>
    <div>
      Distrowatch
      <?php print $lliteDW; ?>
    </div>
    <div class="linuxContainer">
      <ul>
        <li>
          <p>MINIMUM RECOMMENDED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 700MHz processor</li>
            <li>RAM: 512mb ram</li>
            <li>RESOLUTION: VGA screen 1024x768 resolution</li>
          </ul>
        </li>
        <li>
          <p>PREFERRED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 1.5GHz processor</li>
            <li>RAM: 1024mb ram</li>
            <li>RESOLUTION: VGA, DVI or HDMI screen 1366x768</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-block">
    <h4 class="card-title">
			<?php print $lubuntuMP; ?>
		</h4>
    <div class="card-text">
      <div>Screenshots   </div>
			<?php print $lubuntu1; ?>
      <div>
        Homepage
        <?php print $lubuntuHOME; ?>
      </div>
      <div>
        Distrowatch
        <?php print $lubuntuDW; ?>
      </div>
      <div class="linuxContainer">
        <ul>
          <li>
            <p>Requirements</p>
            <ul>
              <li>Memory (RAM): 1 GB of RAM.</li>
              <li>Processor (CPU): The minimum specification for CPU is Pentium 4 or Pentium M or AMD K8.</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-block">
    <h4 class="card-title"><?php echo $eOSMP; ?>
		</h4>
    <div class="card-text">
      <div>Screenshots
				<?php echo $eosSS1; ?>
			</div>
      <div>
        Homepage
        <?php echo $elementaryHOME; ?>
      </div>
      <div>
        Distrowatch
        <?php echo $elementaryDW; ?>
      </div>
      <div>Specs
        <ul>
          <li>Intel i3 or comparable dual-core 64-bit processor</li>
          <li>1 GB of system memory (RAM)</li>
          <li>15 GB of disk space</li>
        </ul>
      </div>
    </div>
  </div>
</div>


    </div> <!-- Ends main content on the right, column -->
  </div> <!-- Ends Row Class -->


<?php include $sitePath . '/modules/footer.tpl'; ?>
