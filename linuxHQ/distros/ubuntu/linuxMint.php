 <?php
   $localName = 'mint';

    $icon = '<img src="/linuxHQ/graphics/icons/mint.png" width="90" height="90"  alt="Linux Mint Icon"/>';

    $distroSshot =  '
    <a href="/linuxHQ/screenshots/ubuntubased/mint.jpg">
      <img src="/linuxHQ/screenshots/ubuntubased/mint.jpg" alt="Mint Cinnamon screenshot" /></a>' . '<a href="/linuxHQ/screenshots/ubuntubased/mintMate2.jpg"> <img src="/linuxHQ/screenshots/ubuntubased/mintMate2.jpg" alt="My Mint Mate Screenshot2" /></a>'  . '<a href="/linuxHQ/screenshots/ubuntubased/mintMate2.jpg">
    					<img src="/linuxHQ/screenshots/ubuntubased/mintMate2.jpg" alt="My Mint Mate Screenshot2" /></a>';

  	$similar = 'Linux Mint KDE is comparible to Netrunner KDE, and' .

    $title = 'Distribution Section - Linux Mint';


    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>

<?php include $sitePath . '/modules/footer.tpl'; ?>
