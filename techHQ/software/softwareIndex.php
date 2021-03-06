<?php

  $pageTitle = 'Software Section Main Page';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>


<div class="container d-none d-lg-block mr-auto ml-auto">
  <div class="row p-3">
    <div class="col-lg-3">Softpedia Graphic Here</div>
    <div class="col-lg-3">MajorGeeks Graphic Here</div>
  </div>
</div>



<!--/////////////////////////////////////////////////////-->
<!-- Start of Cross Platform Section-->
<div class="card">
  <div class="card-header bg-primary text-white">Cross Platform</div>
  <!-- Cross Platform Section Menus-->
  <div class="nav nav-tab">
    <div class="nav-items">
      <a id="CPAVNAV" data-toggle="tab" href="#CPAVContent" role="tab" aria-controls="CPAVContent" aria-selected="false" class="nav-link active">Audio/Video Programs</a></div>
    <div class="nav-items">
      <a id="CPGraphicsNav" data-toggle="tab" href="#CPGraphicsContent" role="tab" aria-controls="CPGraphicsContent" aria-selected="false" class="nav-link">Graphics Programs</a></div>
    <div class="nav-items">
      <a id="CPInternetNav" data-toggle="tab" href="#CPInternetContent" role="tab" aria-controls="CPInternetContent" aria-selected="false" class="nav-link">Internet Related Programs</a></div>
    <div class="nav-items">
      <a id="CPProductNav" data-toggle="tab" href="#CPProdContent" role="tab" aria-controls="CPProdContent" aria-selected="false" class="nav-link">Productivity Apps</a></div>
    <div class="nav-items">
      <a id="CPSecurityNav" data-toggle="tab" href="#CPSecurityContent" role="tab" aria-controls="CPSecurityContent" aria-selected="false" class="nav-link">Security-Related Apps</a></div>
  </div>
  <!-- End of Cross Platform Section Menus-->


  <!-- Cross Platform Section CONTENT Section Starts-->

  <div id="CPTabContents" class="tab-content">

    <!-- Audio/Video Section Starts-->
    <div id="CPAVContent" class="tab-pane">
      <div class="card">
        <div class="card-header">Audio programs</div>
        <a href="..">
          <img src="/techHQ/screenshots/multimedia/clementine1.png" alt="Clementine Screenshot" class="d-none d-lg-block"/>
        </a>

        <a href="#">Clementine Homepage</a>
        <p>Clementine is a music player and organizer that can not only play your music collection, organize your collection (including downloading artist and album information from the internet, and play media from various online sources)</p>
      </div>

      <div class="card">
        <div class="card-header">Video Programs</div>
        <div class="row">
          <div class="col-md-4">
            <a href="..">
              <img src=".." alt="SMPlayer Screenshot" class="d-none d-lg-block"/></a>
            <a href="#">SMPlayer Homepage</a></div>
          <div class="col-md-4">
            <a href="..">
              <img src=".." alt="MPV Screenshot" class="d-none d-lg-block"/></a>
            <a href="#">MPV Homepage</a></div>
          <div class="col-md-4">
            <a href="..">
              <img src=".." alt="VLC Screenshot" class="d-none d-lg-block"/></a>
            <a href="#">VLC</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Graphics Section Starts-->
    <div id="CPGraphicsContent" class="tab-pane">
      <div class="row">
        <div class="col-6">
          <a href="..">
            <img src=".." alt="GIMP Screenshot" class="d-none d-lg-block"/></a>
          <a href="#">GIMP</a>
          <p>GIMP is a well known and widely used Graphics editor that some (not all though) compare to Photoshop</p>
        </div>
        <div class="col-6">
          <a href="..">
            <img src="/techHQ/screenshots/graphics/krita_default_interface.png" alt="Krita Screenshot" class="d-none d-lg-block"/></a>
          <a href="https://krita.org/en/" target="_blank">Krita</a>

          <p>Krita is a graphics editor is an open source graphics/illustrator program, which some users compare to Adobe Photoshop</p>
        </div>
      </div>
    </div>



    <!-- Internet Section Starts-->
    <div id="CPInternetContent" class="tab-pane">
      <div class="row">
        <div class="col-lg-5">
          <p>Pidgin- Instant Messaging Client</p>
        </div>
        <div class="col-lg-5">
          <p>Mozilla Thunderbird - Email Client</p>
        </div>
      </div>
    </div>
    <div id="CPProductContent" class="tab-pane">
      <a href="..">
        <img src=".." alt="Libre Office Screenshot" class="d-none d-lg-block"/>
      </a>

      <a href="#">Libre Office</a>
      <p>Fork of the Old OpenOffice and a VERY WELL DONE Microsoft Office alternative</p>
    </div>
    <div id="CPSecurityContent" class="tab-pane">
      <a href="..">
        <img src=".." alt="Bleachbit Screenshot" class="d-none d-lg-block"/></a>
      <a href="http://bleachbit.sourceforge.net/">Bleachbit</a>
    </div>
  </div>
</div>
<!-- End of Cross Platform Section-->





<!-- Start of Linux Section-->
<div class="card">
  <div class="card-header bg-primary text-white">Linux</div>
  <!-- Start of Linux Menus-->
  <div class="nav nav-tab">
    <div class="nav-items">
      <div class="nav-link active">Audio/Video Programs</div>
    </div>
    <div class="nav-items">
      <div class="nav-link">Graphics Programs</div>
    </div>
    <div class="nav-items">
      <div class="nav-link"></div>
    </div>
  </div>
  <!-- End of Linux Menus-->
  <!-- Linux Content Section Starts here-->
  <div class="tab-content">
    <!-- Linux Audio/Video CONTENT Section Start-->
    <div class="tab-pane">
      <div class="row">
        <div class="col-lg-6"><a href=".."><img src=".." alt="Deadbeef Screenshot" class="card-img-top d-none d-lg-block"/></a><a href="http://deadbeef.sourceforge.net">Deadbeef Homepage</a></div>
        <div class="col-lg-6">
          <!-- Shouldn't this be in Cross-Platform?--><a href=".."><img src=".." alt="Audacious Screenshot" class="card-img-top d-none d-lg-block"/></a><a href="http://audacious-media-player.org/">Audacious</a>
        </div>
      </div>
    </div>
    <div class="tab-pane">
      <div class="row">
        <div class="col-md-4"><a href=".."><img src=".." alt="Pinta Screenshot" class="d-none d-lg-block"/></a><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></div>
        <div class="col-md-4"><a href=".."><img src=".." alt="Ristretto Screenshot" class="card-img-top d-none d-lg-block"/></a><a href="http://docs.xfce.org/apps/ristretto/start">Ristretto Homepage</a></div>
        <div class="col-md-4"><a href=".."><img src=".." alt="Gwenview Screenshot" class="card-img-top d-none d-lg-block"/></a><a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview Homepage</a>
          <p>Usually instaled with KDE/Plasma 5 flavors of Linux</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12"><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></div>
      </div>
    </div>
  </div>
</div>
<!-- Windows Section-->
<div class="card">
  <div class="card-header bg-primary text-white">Microsoft Windows</div>
  <!-- Windows Section Menu-->
  <div class="nav nav-tab">
    <div class="nav-items"><a id="WindowsAVTab" data-toggle="tab" href="#WinAVTabContent" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">Audio and/or Video</a></div>
    <div class="nav-items"><a id="WindowsGraphicsTab" data-toggle="tab" href="#WinGraphicsTabContent" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Graphics</a></div>
    <div class="nav-items"><a id="WindowsProductivityTab" data-toggle="tab" href="#WinProductTabContent" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Productivty</a></div>
    <div class="nav-items"><a id="WindowsSecurityTab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true" class="nav-link">Security</a></div>
    <div class="nav-items"><a id="WindowsSystemToolsTab" data-toggle="tab" href="#WinSystemToolsContent" role="tab" aria-controls="home" aria-selected="true" class="nav-link"> System Tools</a></div>
  </div>
  <!-- End Windows Section Menus-->

  <!-- Windows Section Tab content - for when link is clicked-->
  <div class="tab-content">
    <div id="WinAVTabContent" role="tabpanel" aria-labelledby="home-tab" class="tab-pane">
      <div class="card">
        <div class="card-header">Audio Programs</div>
        <ul>
          <li><a href="/techHQ/screenshots/multimedia/aimp4.jpg"><img src="/techHQ/screenshots/multimedia/aimp4.jpg" alt="AIMP Screenshot" class="d-none d-lg-block"/></a><a href="">AIMP</a></li>
          <li><a href=".."><img src=".." alt="Foobar 2000 Screenshot" class="card-img-top d-none d-lg-block"/></a><a href="http://www.foobar2000.org" target="_blank">Foobar 2000</a></li>
        </ul>
      </div>
    </div>
    <div id="WinGraphicsTabContent" role="tabpanel" aria-labelledby="home-tab" class="tab-pane"><a href="/techHQ/screenshots/graphics/xnview1.png"><img src="/techHQ/screenshots/graphics/xnview1.png" alt="Xnview Screenshot" class="d-none d-lg-block"/></a><a href="https://www.xnview.com/en/xnview/" target="_blank">Xnview</a>
      <p>My Favorite Image editor/so-called... Basic Image editor in Windows ... VERY powerful and well-done program</p>
    </div>
    <div id="WinProductTabContent" role="tabpanel" aria-labelledby="home-tab" class="tab-pane">
      <div class="card">
        <div class="card-header">PDF Readers - Adobe Acrobat Reader alternatives</div>
        <ul>
          <li><a href=".."><img src=".." alt="Sumatra PDF Screenshot" class="d-none d-lg-block"/></a><a href="https://www.sumatrapdfreader.org/free-pdf-reader.html" target="_blank">Sumatra PDF</a></li>
          <li><a href=".." target="_blank"></a><img src=".." alt="PDF-XChange Viewer Screenshot" class="d-none d-lg-block"/><a href="https://www.tracker-software.com/product/pdf-xchange-viewer">PDF-XChange Viewer</a></li>
        </ul>
      </div>
    </div>
    <div role="tabpanel" aria-labelledby="home-tab" class="tab-pane">
      <div class="card">
        <div class="card-header">
          Anti-virus/Anti-Malware
          [note to self: include info about PatchMyPC and "point and click installing" here ]
          <ul>Anti-viruses
            <li>Kaspersky Free</li>
            <li>Bit Defender</li>
            <li>Avast</li>
          </ul>
          <ul>Anti-Malware
            <li><a href="https://www.emsisoft.com/en/software/eek/">Emsisoft Emergency Toolkit</a><img src=".." alt="Emsisoft Emergency Toolkit Screenshot" class="d-none d-lg-block"/></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-header">Cache/Temp File Cleaners</div>
        <ul>
          <li>CCleaner</li>
          <li>CCEhancer for CCleaner<a><img alt="CCEhancer Screenshot" class="d-none d-lg-block"/></a><span>A sort of &quot;database&quot; of what to clean for programs that support it  (To add more removable items then the programs default)</span></li>
        </ul>
      </div>
    </div>
    <div id="WinSystemToolsContent" role="tabpanel" aria-labelledby="home-tab" class="tab-pane"><a href="https://www.partitionwizard.com/free-partition-manager.html">Minitools Partition Manager Freeware Edition</a>
      <div class="card">
        <div class="card-header">System Suite</div>
        <div class="row">
          <div class="col-md-6"><a href="..">Glary Utilities<img src=".." alt="Glary Utilities Screenshot" class="d-none d-lg-block"/></a></div>
          <div class="col-md-6"><a href="..">WiseCare360<img src=".." alt="WiseCare360 Screenshot" class="d-none d-lg-block"/></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
