<?php $start = microtime(true);?>
<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ihor Nedopas Personal Page</title>
  <link href=css/bootstrap.min.css rel=stylesheet>
  <link href=style.css rel=stylesheet>
  <link rel="shortcut icon" href=image/vinil.png type=image/png>
  <!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
<![endif]-->
  <script async src=js/jquery-3.3.1.min.js></script>
</head>
<body>
  <div id=container class=container-fluid>
    <div id=header class=container-fluid>
      <div class=btn-group>
        <button type=button class="btn btn-danger btn-lg dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>Action</button>
        <div class=dropdown-menu>
          <a class=dropdown-item href=#>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
      <div class=btn-group>
        <button type=button class="btn btn-primary btn-lg dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>Action</button>
        <div class=dropdown-menu>
          <a class=dropdown-item href=#>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
      <div class=btn-group>
        <button type=button class="btn btn-secondary btn-lg dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>Action</button>
        <div class=dropdown-menu>
          <a class=dropdown-item href=#>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
      <div class=btn-group>
        <button type=button class="btn btn-success btn-lg dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>Action</button>
        <div class=dropdown-menu>
          <a class=dropdown-item href=#>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
      <div class="btn-group dropdown">
        <button type=button class="btn btn-info btn-lg dropdown-toggle" aria-haspopup=true aria-expanded=false>Fetures</button>
        <div class="dropdown-menu dropdown-content">
          <a class=dropdown-item href=#>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
      <div id=on class=btn-group>
        <button type=button class="btn btn-warning btn-lg dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>Log in</button>
        <div class=dropdown-menu>
          <a class=dropdown-item href=image/bg.jpg>Action</a>
          <a class=dropdown-item href=#>Another action</a>
          <a class=dropdown-item href=#>Something else here</a>
          <div class=dropdown-divider></div>
          <a class=dropdown-item href=#>Separated link</a>
        </div>
      </div>
    </div>
    <div id=main>
      <aside>
        <code>
#container {<br>
width: 1400px; /* Ширина макета */ <br>
margin: 0 auto; /* Выравниваем макет по центру */<br>
}<br>
#leftcol {<br>
margin-right: 400px; /* Отступ справа */<br>
}<br>
#rightcol { <br>
border: 2px solid white;<br>
float: right; /* Обтекание по левому краю */<br>
width: 300px; /* Ширина правой колонки */<br>
background: rgba(255,136,215,0.4);<br>
}
</code>
      </aside>
      <div id=owner>
        <div id=iambtn class=btn-group>
          <button type=button class="btn btn-info dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>About me</button>
          <div class=dropdown-menu>
            <a class=dropdown-item href=#>Action</a>
            <a class=dropdown-item href=#>Another action</a>
            <a class=dropdown-item href=#>Something else here</a>
            <div class=dropdown-divider></div>
            <a class=dropdown-item href=#>Separated link</a>
          </div>
        </div>
        <div id=iamgod>
          <h1>Personal Blog Ihor Nedopas</h1>
        </div>
      </div>
      <div id=content>
        <div id=carousel class="carousel slide" data-ride=carousel>
          <ol class=carousel-indicators>
            <li data-target=#carousel data-slide-to=0 class=active></li>
            <li data-target=#carousel data-slide-to=1></li>
            <li data-target=#carousel data-slide-to=2></li>
          </ol>
          <div class=carousel-inner role=listbox>
            <div class="carousel-item active">
              <img class="d-block img-fluid" src=image/ny.jpg alt="First slide">
              <div class=carousel-caption>
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
              </div>
            </div>
            <div class=carousel-item>
              <img class="d-block img-fluid" src=image/la.jpeg alt="Second slide">
              <div class=carousel-caption>
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
              </div>
            </div>
            <div class=carousel-item>
              <img class="d-block img-fluid" src=image/chikago.jpg alt="Third slide">
              <div class=carousel-caption>
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
              </div>
            </div>
          </div>
          <a class=carousel-control-prev href=#carousel role=button data-slide=prev>
<span class=carousel-control-prev-icon aria-hidden=true></span>
<span class=sr-only>Previous</span>
</a>
          <a class=carousel-control-next href=#carousel role=button data-slide=next>
<span class=carousel-control-next-icon aria-hidden=true></span>
<span class=sr-only>Next</span>
</a>
          <a class="left carousel-control" href=#myCarousel data-slide=prev>
<span class="glyphicon glyphicon-chevron-left"></span>
<span class=sr-only>Previous</span>
</a>
          <a class="right carousel-control" href=#myCarousel data-slide=next>
<span class="glyphicon glyphicon-chevron-right"></span>
<span class=sr-only>Next</span>
</a>
        </div>
        <br>
        <img id=IAM src=image/IAM.jpg alt="I am Ihor Nedopas" />
        <p class=navbar-text>Signed in as Ihor Nedopas</p>
        <br><br>
        <button type=submit class="btn navbar-btn" id=btn>press me</button>
        <button type=button class="btn btn-default navbar-btn" onclick="alert('Future best designed developing blog!')">YEEEES!)</button>
        <br>
        <br>
        <form id=data>
          <p><input placeholder="Ваше имя" name=user></p>
        </form>
        <p><button type=submit form=data>Отправить форму</button></p>
        <form>
          <input type=button class="btn btn-default navbar-btn" value=Func onClick=SButton1(this.form)>
          <input type=text value=" " name=TextBox size=30>
          <br><br>
          <p><textarea id=texta rows=10 cols=45 name=text></textarea></p>
        </form>
        <form>
          <br>
          <br>
          <input type=button class="btn btn-default navbar-btn" value="Click me" onClick="alert('Hello')">
          <input type=text value=10 name=TextBox size=30>
          <input type=text value=20 name=TextBox1 size=30>
          <br><br>
          <input type=text value=Answer name=TextBox2 size=30>
          <br><br>
          <INPUT class=mult TYPE=BUTTON Value=* onClick=Start1(this.form)>
          <INPUT class=mult TYPE=BUTTON Value=/ onClick=Start2(this.form)>
          <INPUT class=mult TYPE=BUTTON Value=- onClick=Start3(this.form)>
        </form>
        <br><br><br><br><br><br><br><br><br>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe id="trumpet" class=embed-responsive-item src=https://www.youtube.com/embed/EccF9ISUgEQ allowfullscreen></iframe>
        </div>
        <form id=controlbtn>
          <div class="btn-group btn-group-justified" role=group aria-label=...>
            <div class=btn-group role=group>
              <button type=button class="btn btn-default">Left</button>
            </div>
            <div class=btn-group role=group>
              <button type=button class="btn btn-default">Center</button>
            </div>
            <div class=btn-group role=group>
              <button type=button class="btn btn-default">Right</button>
            </div>
          </div>
        </form>
        <svg baseProfile=tiny id=Layer_1 x=0px y=0px viewBox="0 25 200 25" xml:space=preserve>
<g id=XMLID_1_>
<g>
<circle fill=purple stroke=black stroke-width=2 stroke-miterlimit=10 cx=100 cy=50 r="20"/>
</g>
</g>
</svg>
      </div>
    </div>
    <div id=footer class=container-fluid>
      <table id=footable>
        <tr>
          <td>
            <div id=foobtn>
              <div class="btn-group dropup">
                <button type=button class="btn btn-primary dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>U</button>
                <div class=dropdown-menu>
                  <a class=dropdown-item href=#>Action</a>
                  <a class=dropdown-item href=#>Another action</a>
                </div>
              </div>
              <div class="btn-group dropup">
                <button type=button class="btn btn-warning dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false>A</button>
                <div class=dropdown-menu>
                  <a class=dropdown-item href=#>Action</a>
                  <div class=dropdown-divider></div>
                  <a class=dropdown-item href=#>Separated link</a>
                </div>
              </div>
            </div>
          </td>
          <td>
            <span id=timeDo><?php $time=microtime(true) - $start;
                  $times=round(microtime(true) - $start, 4);
                  echo 'Время выполнения скрипта: '.$times.' sec.'; echo "\n"."$time";
                  $fp = fopen('dump.txt', 'a');
                  $test = fwrite($fp, $time."\n");
            ?></span>


          </td>
          <td>
            <footer id=copyright>&copy; Ihor Nedopas |
              <span id=time><?php// date_default_timezone_set('Europe/Kiev'); echo date(DATE_RFC822);echo date("D M j Y G:i:s ");?></span>
            </footer>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js></script>
  <script async src=js/bootstrap.min.js></script>
  <script async src=sq.js></script>
  <script async src=cl.js></script>
</body>
</html>
