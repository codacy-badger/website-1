<?php
  
  $pageTitle = "Internet Related Software";

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<?php

  $localmaincat = 'internet';
  $localsubcat = '';

  sortApps($localmaincat, $localsubcat);
  
?>


<?php include $sitePath . "/modules/footer.tpl"; ?>
