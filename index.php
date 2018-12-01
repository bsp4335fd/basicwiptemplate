<?php

include('controllers/HtmlPaint.php');
include('controllers/Values.php');

$values = new Values();

$hp = new HtmlPaint();



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel='stylesheet'  href='style.css' type='text/css' media='all' />
  </head>
  <body>
    <section>
      <header>
          <h2><?php echo "Header Title"; ?></h2>
      </header>
      <main>
          <div class="layout">
              <div class="TE">
                <ul class="menu">
                  <?php
                  $links = $values->getNavigationValues();
                  echo $hp->prettyLinks($links);
                  ?>
                </ul>
              </div>
              <div class="NV"  style="">
                <div style="max-height: 200px;">
                  <div class="frost">
                    <h1>Flexible Occasion</h1>
                    <div id="post">

                      <p>Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="AE">
                <h2></h2>
                <ul class="menu">
                  <?php
                  $menu = $values->getMenuValues();
                  echo $hp->prettyMenu($menu);
                  ?>
                </ul>
              </div>
              <div class="MN">

                <div class="frost" style=" ">
                  <div>

                    <p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>

                  </div>
                </div>

              </div>
          </div>
      </main>
      <footer>
          All rights reversed.
          <br>
          <small>I am always at the bottom of the page</small>
      </footer>
    </section>
  </body>
</html>
