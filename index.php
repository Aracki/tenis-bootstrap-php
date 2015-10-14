<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tenis liga bez briga</title>
    <link rel="shortcut icon" href="img/tenis.ico">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">



    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" >

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <img class="img-responsive" id="lopta" src="img/ball.png">
        <div class="container" >

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#page-top">Tenis liga u Beogradu</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li><img class="lopta2" src="img/ball.png">
                    <li class="page-scroll">
                        
                        <a href="#takmicenje">Rezultati takmičenja</a>
                    </li><img class="lopta2" src="img/ball.png">
                    <li class="page-scroll">
                        
                        <a href="#about">O takmičarima</a>
                    </li><img class="lopta2" src="img/ball.png">
                    <li class="page-scroll">

                        <a href="#contact">O osnivačima</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div id="test" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-4">
                           <img class="imgBG" src="img/bg.png" alt="">           
                </div>
                <div class="col-lg-4">
                    <div class="intro-text">
                        <span class="name">Tenis liga bez briga</span>
                        <hr class="star-light">
                       
                    </div>
                </div>
                <div class="col-lg-4">
                   
                </div>
              </div>  
              <div class="row">
                 <span class="skills">Tenis liga - 20 učesnika - Uzbudljivo takmičenje</span>
                        <span class="text"> <br/><br/> <p><p><p>"Polu amaterska teniska liga koja će se igrati u balonu u Bračkoj ulici je osmišljena da svi mi istinski ljubitelji ove plemenite veštine svakonedeljno uživamo u sportu i odmeravamo snage imajući pritom neku konstantu koju ranije nismo uspevali a potajno smo razmišljali o jednoj ovakvoj sportskoj priredbi. Liga sa sobom ne nosi apsolutno nikakvu materijalnu korist, a ljudi koji zele da igraju u novac nam nisu potrebni ovde, jer se time gubi čar lige." </span>
                        
              </div>
              <div class="row">
             <button id="btnMapa" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">
                <font color="#2C3E50" size="5px"><b>Gde se nalazi balon?</font>
             </button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                     <img class="mapa" src="img/mapa.png" alt="">
                    </div>
                    </div>
                    </div>
              </div> 
        </div>
        </div>
    </header>

    <!-- takmicenje Grid Section -->
    <section id="takmicenje">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Rezultati takmičenja</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

                    <div class="col-md-4"> 
                        <div id="levaT">
                         <h4><span class="label label-primary">Prva grupa</span></h4>
                        </div>

                      
                        <?php 
                          include('baza.php');
                          $b = new baza();
                          $mysqli = $b->konektuj();
                          $query = "SELECT * FROM zapad ORDER BY Broj_poena desc, Gem_razlika desc";
                                 //rezultat pretrage
                          $result = $mysqli->query($query);                                        
        
                          echo '<table class="table table-hover table-condensed table-bordered" id="leva">';
                          echo '<tr class="active"><th>Mesto</th><th>Takmi&#269;ar</th><th>Broj me&#269;eva</th><th>Gem razlika</th><th>Broj poena</th></tr>';
                                
                                //ISPISIVANJE ZAPAD tabele
                                $i = 1;
                                while ($row = $result -> fetch_row()) {
                                          if($i <= 4){
                                            echo '<tr class="danger"><td>'; echo $i; echo'</td>';
                                            echo '<td>';  echo $row[2]; echo '</td>';
                                            echo '<td class="brM">';  echo $row[3]; echo '</td>';
                                            echo '<td>';  echo $row[4]; echo '</td>';
                                            echo '<td>';  echo $row[5]; echo '</td>';

                                          } else {
                                            echo '<tr><td>'; echo $i; echo '</td>';
                                            echo '<td>';  echo $row[2]; echo '</td>';
                                            echo '<td class="brM">';  echo $row[3]; echo '</td>';
                                            echo '<td>';  echo $row[4]; echo '</td>';
                                            echo '<td>';  echo $row[5]; echo '</td>';
                                          }
                                          $i++;
                                }        
                         ?>
                       </table>
                    </div>
                
                
                    <div class="col-md-4"><div id="desnaT">
                            <h4><span class="label label-primary">Druga grupa</span></h4>
                                                </div>
                                  
                          <?php
                          $query = "SELECT * FROM istok ORDER BY Broj_poena desc, Gem_razlika desc";
                                 //rezultat pretrage
                          $result = $mysqli->query($query);                                        
        
                          echo '<table class="table table-hover table-condensed table-bordered" id="desna">';
                          echo '<tr class="active"><th>Mesto</th><th>Takmi&#269;ar</th><th>Broj me&#269;eva</th><th>Gem razlika</th><th>Broj poena</th></tr>';
                                
                                //ISPISIVANJE ISTOK tabele
                                $i = 1;
                                while ($row = $result -> fetch_row()) {
                                          if($i <= 4){
                                            echo '<tr class="danger"><td>'; echo $i; echo'</td>';
                                            echo '<td>';  echo $row[2]; echo '</td>';
                                            echo '<td class="brM">';  echo $row[3]; echo '</td>';
                                            echo '<td>';  echo $row[4]; echo '</td>';
                                            echo '<td>';  echo $row[5]; echo '</td>';

                                          } else {
                                            echo '<tr><td>'; echo $i; echo '</td>';
                                            echo '<td>';  echo $row[2]; echo '</td>';
                                            echo '<td class="brM">';  echo $row[3]; echo '</td>';
                                            echo '<td>';  echo $row[4]; echo '</td>';
                                            echo '<td>';  echo $row[5]; echo '</td>';
                                          }
                                          $i++;
                                }        
                         ?>
                       </table>
                </div>

                <div class="col-md-4">
                   <div class="container-fluid">  
                <div class="row" id="rasporedT">  <h4><span class="label label-primary" id="rez">Raspored <br/> četvrtog kola</span>  </h4></div>
            
                            <div class="row"> <span class="raspored">
                             <u> GRUPA A: </u> <br/>
                            Далибор Ђекић-Nikola Radojicic  <br/>
                            Che Voj- Stefan Matovic <br/>
                            Matija Silaški- Uros Majstorovic <br/>
                            Луковић Никола- Petar Kolundzija <br/>
                            Uros Topalovic - Damir Djordjevic <br/> <br/> <br/>
                            <u>GRUPA B:</u> <br/>
                            Djordje Trajkovic- Aleksa Jacimovic <br/>
                            Mark Ruso - Stefan Tanackovic <br/>
                            Nemanja Smiljevic-Neka - Периша Томић <br/>
                            Blagoje Ace Marjanovic - Stefan Mihajlovic <br/>
                            Stefan Drobnjak - Lazar Vujanic</span></div>                    
                    </div>
                </div>
                   
            </div>
            
            <div class="row" id="rowPB">
                <h5>Koliko je prošlo od početka turnira?</h5>
                <div class="progress">
                         <div class="progress-bar progress-bar-striped active" id="progressBar" role="progressbar" aria-valuemin="0" aria-valuemax="100">

                        </div>
                </div>
            </div>
            
                     
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>O terenima</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                
        <div class="col-md-4"> 

            <h3>Svi tereni  </h3> 

            <select class="selectpicker dropup" multiple  data-max-options="1" name="dropdown" multiple title='SORTIRAJTE PO...' onchange="dynamic_Select(this.value)">
                    <option value="cena_termina" data-icon="glyphicon-usd">Ceni</option>
                    <option value="naziv_terena" data-icon="glyphicon-info-sign">Nazivu</option>
                    <option value="opstina" data-icon="glyphicon-flag">Opstini</option>
            </select>
            
            <div id="svi_tereni">
            </div>

            <div id="testX"></div>
                
         </div>
            
          <div class="col-md-4">
            <h3>Unesi novi teren</h3> </br>
                        <form class="form-horizontal" id="myForm" role="form" method="post" action="insert.php">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Ime terena</label>
                              <div class="col-sm-10">
                                <input type="text" name="ime" class="form-control" id="ime" placeholder="Unesite ime">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Opština terena</label>
                              <div class="col-sm-10">
                                <input type="text" name="opstina" class="form-control" id="opstina" placeholder="Unesite opštinu">
                              </div>
                            </div>   
                             <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Cena termina</label>
                              <div class="col-sm-10">
                                <input name="cena" class="form-control" id="cena" placeholder="Unesite cenu termina">
                              </div>
                            </div>                            
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button id="submit" type="submit" class="btn btn-info">Unesi teren</button>

                                <button id="btnObrisi" type="button" title="Obriši teren" class="btn btn-danger" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover title" 
                                data-content="Kliknite na naziv terena da ga obrišete!">Obriši teren</button>                                 
                              </div>
                            </div>
                      </form>
                      <audio id="zvukAdd" src="sounds/ubaci.wav"></audio>
          </div>
          
            <div class="col-md-4">
                <br/>
                    <div class="btn-group dropdown">
                          <button type="button" class="btn btn-primary dropdown-toggle" 
                             data-toggle="dropdown">
                             Glasaj za najboljeg igrača zapada<span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             <?php                                 
                                $query = "SELECT * FROM zapad";
                                 //rezultat pretrage
                                
                                $result = $mysqli->query($query);        

                                        while ($row = $result -> fetch_row()) {
                                            ?> <li><a><?= $row[2] ?></a></li> <?php
                                        }
                             ?>                             
                          </ul>
                    </div>

                    </br></br>
                    <div class="btn-group dropdown">
                          <button type="button" class="btn btn-primary dropdown-toggle" 
                             data-toggle="dropdown">
                             Glasaj za najboljeg igrača istoka<span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                             <?php 
                                $query = "SELECT * FROM istok";
                                //rezultat pretrage
                                $result = $mysqli->query($query);        

                                        while ($row = $result -> fetch_row()) {
                                            ?> <li><a><?= $row[2] ?></a></li> <?php
                                        }

                             ?>
                             
                          </ul>
                    </div>
            </div>

        </div>

    </br></br></br>
  <div class="row">
              <div class="col-md-4">
                
              </div>

             <div class="col-md-4">
              <div id="unet">
                

              </div>
             </div> 

          <div class="col-md-4">
                        
            
            </div>

  </div> 

    </section>

    <!-- Contact Section -->
  <!--   <section id="contact">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2>O osnivaču</h2>
                    <hr class="star-primary">
                </div>
            </div>
             <div class="row">                
                  <div class="col-md-4"><img id="veran" class="img-responsive" src="img/veran.jpg" alt=""> </div>
                  <!-- <div class="col-md-4" id="textV"><h4>Stefan Matović</h4></div> -->
                 <!--  <div class="col-md-8" ><div id="textV"><p>Zivim u Beogradu, imam 22 godine, student sam fona, tenisom se bavim rekreativno vec duzi niz godine. Gajim velike emocije prema ovom sportu, jos od davnina dok nismo imali Djokovica i ostale asove, kada je tenis bio na niskim granama. Na ideju o pravljenju teniske lige sam dosao na osnovu toga sto vec duze vreme veca grupa nas izmedju sebe igra meceve bez ikakvog koncepta, a mnogi me cesto zapitkuju kad cemo da igramo, sto ne zoves i tako dalje, pa je sve to uticali da dodjem na ideju o pravljenju neceg ovakvog.</div></div>

                

            </div>
        </div>
    </section> -->

        <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Belgrade<br></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Grupa na fejsbuku</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/groups/764352116965200/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                          

                        </ul>                     </div>
<div class="footer-col col-md-4">                         <h3>O
administratoru</h3>                         <p>Ivan Aracki <br/> Fakultet
Organizacionih Nauka <br/><a href="http://rs.linkedin.com/pub/ivan-
aracki/83/70a/3a5/">LinkedIn</a></p>                     </div>
</div>             </div>         </div>         <div class="footer-below">
<div class="container">                 <div class="row">
<div class="col-lg-12">                         Copyright &copy; Ivan Aracki
2014      Fakultet Organizacionih Nauka               </div>                 </div>             </div>
</div>     </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- takmicenje Modals -->
    <!-- <div class="takmicenje-modal modal fade" id="takmicenjeModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="takmicenje-modal modal fade" id="takmicenjeModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="takmicenje-modal modal fade" id="takmicenjeModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="takmicenje-modal modal fade" id="takmicenjeModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="takmicenje-modal modal fade" id="takmicenjeModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="takmicenje-modal modal fade" id="takmicenjeModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/takmicenje/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     --><!-- </div> -->

    


    <!-- nije radilo submit dugme -->
  <script src="js/jquery-2.1.1.min.js"></script>

    <!-- jQuery Version 1.11.0 -->
    
    <!-- // <script src="js/jquery-1.11.0.js"></script>    -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- // <script src="js/jqBootstrapValidation.js"></script> -->
    <!-- // <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="bower_components/jquery-confirm/jquery.confirm.js"></script>    
    <script src="bower_components/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="js/bootbox.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
