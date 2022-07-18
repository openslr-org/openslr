<?php
   require_once $_SERVER['DOCUMENT_ROOT'] . '/include/resource.php';
   ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="Open Speech and Language Resources."/>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/openslr_ico.png"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>openslr.org</title>

  </head>
  <body>
    <div class="container">
      <div id="centeredContainer">
        <div id="headerBar">
         <div id="headerLeft"> <image id="logoImage" src="/openslr.png">  </div>
         <div id="headerRight"><h2 class="slrStyle">Open Speech and Language Resources</h2></div>
        </div>
        <hr/>
        <div id="topBar">
          <a class="topButtons" href="/index.html">Home</a>
          <a class="myTopButton" href="/resources.php">Resources</a>
          <a class="topButtons" href="/contributions.html">Contribute</a>
        </div>
        <hr/>
        <div id="rightCol">
          <div class = "contact_info">
            <div class ="contactTitle">Contact</div>
            <a href=mailto:jtrmal@gmail.com> jtrmal@gmail.com </a>  <br/>
            (Jan "Yenda" Trmal) <br/>
          </div>
        </div>
        <div id="mainContent">

          <div class="container" >
                <p><h3 class="slrStyle"> Resources </h3>

              <table id="resourceTable">
                <tr> <th> Resource </th> <th> Name </th> <th> Category </th>  <th> Summary </th> </tr>

                <?php
                   $root = dirname(__FILE__) . "/resources/";
                   $id_list = get_resource_id_list($root);
                   // $dir = new DirectoryIterator($root);
                   foreach ($id_list as $filename) {
                     $resource_dir = $root . $filename;
                     $resource = new Resource($resource_dir);
                     if ($resource->ok()) {
                       print "<tr>";
                       print "<td> <a href=\"/$resource->id/\"> SLR$resource->id </a> </td> ";
                       print "<td> $resource->name </td> <td> $resource->category </td> <td> $resource->summary </td>\n";
                       print "</tr>";
                     }
                   }
                ?>
              </table>


              <div style="height:300px"></div>

          </div>

        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <div style="clear: both"></div>

        <div id="footer">
          <p>
                <a href="https://jigsaw.w3.org/css-validator/check/referer">
                  <img style="border:0;width:88px;height:31px"
                   src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
                   alt="Valid CSS!" />
                </a>
          </p>
        </div>
      </div>
  </body>
</html>

