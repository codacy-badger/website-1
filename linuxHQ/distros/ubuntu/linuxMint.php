 <?php

  include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');
  include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/homepage.php');

	$name = 'Linux Mint';
  $family = 'Ubuntu';
  $icon = '<img src="/linuxHQ/graphics/icons/mint.png" width="90" height="90"  alt="Linux Mint Icon"/>';
  $homepage = '<a href="http://linuxmint.com/">http://linuxmint.com/</a> ' ;
	$download = '<a href="http://www.linuxmint.com/download.php">http://www.linuxmint.com/download.php</a> ' ;
	$version = '17.3 (based on Ubuntu 14.04) ' ;
	$forum = '<a href="http://linuxmint.com/forum/">http://linuxmint.com/forum/</a> ' ;
	$distroWatch = '<a href=http://distrowatch.com/mint">Linux Mint on Distrowatch</a> ' ;
	$DE = 'KDE, XFCE, Mate, Cinnamon ';
	$distroSshot =  $mintCin1 . $mintMate1  . $mintMate2;

	$similar = 'Linux Mint KDE is comparible to Netrunner KDE, and' . $kubuntuHP .
			 '<br /> Linux Mint Cinnamon is like Ubuntu with Cinnamon PPA\'s added and packages installed ';

       $description = <<<DES

       Linux Mint is a great distribution for any user experience level, that comes with a  number of default supported desktop environments,
       is easy to setup, and has a large community of support IF help is needed.

DES;

   $EXP = &$mintExp;

	$recommend = ' ';
	$newbRecommend = ' ';

  // Multi-lines
  $myComments = ' ';
  $experience = ' ' ;
  $recComments = ' ' ;
  $newbRecComments = ' ' ;

	$mm = ' ' ;
	$kaddy = ' ' ;
	$dasGregor = ' ' ;
	$RLZ			 = ' ' 	;	// Run Level Zero
	$JLT 	 = ' ' 	;			// Jeff Linux Turner
	$IG		 = ' ' ;				// InfinitelyGalactic
	$tos = ' ' ;
	$spatry = ' ' ;
	$quidsup = ' ' ;
	$OhHeyItsLou = ' ' ;
	$midFingr = ' ' ;
	$UrAvgLinuxUser = ' ';

  $title = 'Distribution Section - Linux Mint';


  $sitePath = "/home/xmetalx1/public_html";

  include $sitePath . '/linuxHQ/modules/distros.php';
  include $sitePath . '/linuxHQ/modules/sshots.php';
  include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
