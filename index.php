<?php

include('controllers/HtmlPaint.php');

$hp = new HtmlPaint();
$paint = $hp->init();

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
          <h2><?php echo $paint; ?></h2>
      </header>
      <main>
          <div class="layout">
              <div class="TE">
                <ul class="menu">
                  <li><a class="btn" href="#">Important</a></li>
                  <li><a class="btn" href="#">Imagine</a></li>
                  <li><a class="btn" href="#">Emphasis</a></li>
                  <li><a class="btn" href="#">Cultivate</a></li>
                </ul>
              </div>
              <div class="NV"  style="max-height: 230px;">
                <div style="max-height: 200px;">
                  <div class="frost" style="max-height: 200px;">
                    <div style="padding: 1em; margin: 1em;">
                      <h1>Flexible Occasion</h1>
                      <p>Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="AE">
                <h2></h2>
                <ul class="menu">
                  <li><a class="btn" href="#">Personality</a></li>
                  <li><a class="btn" href="#">Accumulation</a></li>
                  <li><a class="btn" href="#">Sensitivity</a></li>
                  <li><a class="btn" href="#">Civilization</a></li>
                </ul>
              </div>
              <div class="MN">

                <div class="frost" style=" ">
                  <div style="padding: 1em; margin: 1em;">

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
