<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bee Free</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  </head>
  <body>

    <div class="contaner-fluid">
     <div class="row shadow">
        <div class="col-lg-6 col-md-12 logo">
              <span>BEEFREE</span>
              <p>A decentralized incentivized<br/>and secured social network.</p>
        </div>
        <div class="col-lg-6 col-md-12 mx-auto px">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['slider_1'];?>" class = "object-fit_contain" width="100%" />
              </div>
              <div class="carousel-item">
                <img src="img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['slider_2'];?>" class = "object-fit_contain" />
              </div>
              <div class="carousel-item">
                <img src="img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['slider_3'];?>" class = "object-fit_contain" />
              </div>
            </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
          </div>
        </div>
     </div>
   </div>
<!--Fiters-->
     <div class="contaner-fluid mt-5 shadow fiters">
       <div class="row  text-center justify-content-around">
         <div class="col-lg-12">
           <h1>Main features</h1>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src=".\img\<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_img_1'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_1'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_img_2'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_2'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_img_3'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_3'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_img_4'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_4'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_img_5'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['main_features_5'];?></p>
         </div>
        <div class = 'col-lg-4'>
          <button type="button" class="btn btn-primary prototype mw-50">Try the prototype</button>
        </div>
        <div class = 'col-lg-4'>
          <button type="button" class="btn btn-primary">Read our whitepaper</button>
        </div>
     </div>
   </div>
<!--Roadmap-->
     <div class="contaner-fluid shadow">
       <div class="row mt-5 justify-content-center pb-5">
        <div class="col-lg-5 col-md-12">
          <h1 class="text-center">Our roadmap</h1>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2 justify-content-end">
                <div class = 'very_small_round'></div>
                <div class = 'very_small_line'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_1'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round'></div>
                <div class = 'very_small_line'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_2'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round'></div>
                <div class = 'very_small_line'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_3'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_4'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_5'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_6'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_7'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_8'];?></span>
              </div>
          </div>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['roadmap_9'];?></span>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="text-center">Learn more about the project</h1>
        <div class="embed-responsive embed-responsive-16by9 shadow">
          <iframe class="embed-responsive-item" src="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['video_1'];?>" allowfullscreen></iframe>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 small-video mt-5">
            <div class="embed-responsive embed-responsive-16by9 shadow">
            <iframe class="embed-responsive-item" src="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['video_1'];?>" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 small-video mt-5 mb-3">
            <div class="embed-responsive embed-responsive-16by9 shadow">
            <iframe class="embed-responsive-item" src="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['video_1'];?>" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>
      <!--Partners-->
     <div class="contaner-fluid shadow">
       <div class="row mt-5 text-center justify-content-center pb-5">
         <div class="col-lg-12">
          <h1>Our partners</h1>
         </div>
         <div class="col-lg-3 col-md-12">
           <a href="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_URL_1'];?>"><img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_img_1'];?>" alt="Circle Image" width="50%" class="mb-3"></a>
         </div>
         <div class="col-lg-3 col-md-12">
          <a href="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_URL_2'];?>"><img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_img_2'];?>" alt="Circle Image" width="50%" class="mb-3"></a>
         </div>
         <div class="col-lg-3 col-md-12">
          <a href="<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_URL_3'];?>"><img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['partners_logo_img_3'];?>" alt="Circle Image" width="50%" class="mb-3"></a>
         </div>
       </div>
     </div>
     <!--RELATED-->
     <div class="contaner-fluid shadow">
       <div class="row mt-5 text-center justify-content-around pb-5">
        <div class="col-lg-12">
         <h1>Related projects</h1>
        </div>
       <div class="col-lg-3 col-md-12 pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>ABCD project</h2>
           <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['realeted_project_1'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>EFGH project</h2>
           <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['realeted_project_2'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>IJKL project</h2>
           <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['realeted_project_3'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>MNO project</h2>
           <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['realeted_project_4'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
        </div>
      </div>
<!--TEAM-->
    <div class="contaner-fluid shadow">
      <div class="row text-center mt-5 justify-content-center pb-5">
        <div class="col-lg-12">
          <h1>Meet the team</h1>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_1'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_1'];?></h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_1'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_1'];?></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_2'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_2'];?>l</h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_2'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_2'];?></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_3'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_3'];?></h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_3'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_3'];?></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_4'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_4'];?></h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_4'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_4'];?></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_5'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_5'];?></h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_5'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_5'];?></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_photo_6'];?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_name_6'];?></h3>
            <span><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_title_6'];?></span>
            <p><?php $strings=json_decode(file_get_contents('content.txt'),true); echo $strings['team_content_6'];?></p>
        </div>
      </div>
    </div>
    <!--SUBSCRIBR-->
    <div class="contaner mt-5">
      <div class="row text-center justify-content-center">
        <div class = 'col-lg-10'>
          <div  class = "sub pt-2">
            <h1>Can’t wait? Subscribe for updates</h1>
              <div class="row justify-content-center">
                <div class = 'col-lg-8 col-md-12'>
                  <input type = 'text' class = 'form-control form_sub mb-2'>
                </div>
                <div class = 'col-lg-3 col-md-12'>
                  <button type="button" class="btn btn-primary btn_sub">Subscribe</button>
                </div>
              </div>
              <p>
                GDPR Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum lectus urna, sit amet condimentum dolor dapibus eu. Integer justo sem, placerat et tincidunt sit amet, fringilla vitae nisl.
                Sed efficitur aliquet purus non porttitor. Maecenas vehicula nibh a bibendum interdum. Sed velit urna, sodales vitae lectus non, iaculis hendrerit lorem. Duis suscipit massa eu dictum pellentesque.
              </p>
          </div>
        </div>
      </div>
    </div>

    <div class="contaner-fluid shadow">
      <div class="row mt-5 justify-content-center">
        <div class="col-lg-4 col-md-12">
          <h1>Contact us</h1>
          <div class="row justify-content-center pl-3 bord">
              <div class = 'col-lg-12'>
                    <span><a href="mailto:contactus@beefree.me">contactus@beefree.me</a></span>
                <div class = "mt-5">   
                    <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>
                    <br>
                </div>
              </div>
            </div>
          </div>
          <div class = 'col-lg-6 col-md-12'>
            <h1>Write us</h1>
            <form>
              <div class="row justify-content-start">
              
                  <!-- Hidden Required Fields -->
                  <input type="hidden" name="project_name" value="Site Name">
                  <input type="hidden" name="admin_email" value="igor.shadurin@gmail.com">
                  <input type="hidden" name="form_subject" value="Form Subject">
                  <!-- END Hidden Required Fields -->
                <div class="col-lg-10">
                  <fieldset class="form-group">
                        <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-primary">Send</button>
                    </fieldset>
                </div>
            </div>
            </form>
          </div>
         </div>
      <div class = 'row foot justify-content-between px-3 text-center'>
        <div class = 'col-lg-5'><span>Made with love by BEE FREE team</span></div>
        <div class = 'col-lg-1'><span>2018</span></div>
      </div>
    </div>
    <div class="container">
    <div class="page-header pt-2">
    </div>
</div>


  

  

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="script.js"></script> 
  </body>
  </html>