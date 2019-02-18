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
<?php $strings=json_decode(file_get_contents('content.txt'),true);?>
<?php $str=json_decode(file_get_contents('dinamic.txt'),true);?>



    <div class="contaner-fluid">
     <div class="row shadow">
        <div class="col-lg-6 col-md-12 logo">
              <span>BEEFREE</span>
              <p>Take back control<br/>Create your own decentralized incentivized and secured social networks
<br/></p>
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
                <img src="img/<?php echo $strings['slider_activ'];?>" class = "object-fit_contain" />
              </div>
              <?php foreach( $str['slider'] as $item): ?>
              <div class="carousel-item">
                <img src="img/<?php echo $item; ?>" class = "object-fit_contain" />
              </div>
              <?php endforeach; ?>
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
           <img src=".\img\<?php echo $strings['main_features_img_1'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php echo $strings['main_features_1'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php echo $strings['main_features_img_2'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php echo $strings['main_features_2'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php echo $strings['main_features_img_3'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php echo $strings['main_features_3'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php echo $strings['main_features_img_4'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php echo $strings['main_features_4'];?></p>
         </div>
         <div class="col-lg-2 col-md-12">
           <img src="./img/<?php echo $strings['main_features_img_5'];?>" alt="Circle Image" class="rounded-circle img-fluid">
           <p class="mt-3"><?php echo $strings['main_features_5'];?></p>
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
          <?php foreach( $str['road_map_finishid'] as $item): ?>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round'></div>
                <div class = 'very_small_line'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php echo $item; ?></span>
              </div>
          </div>
          <?php endforeach; ?>
          <?php foreach( $str['road_map_future'] as $item): ?>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
                <div class = 'very_small_line_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php echo $item; ?></span>
              </div>
          </div>
          <?php endforeach; ?>
          <div class="row">
              <div class = "road col-lg-2 col-md-2 col-sm-2">
                <div class = 'very_small_round_2'></div>
              </div>
              <div class = "road col-lg-10 col-md-10 col-sm-10">
              <span><?php echo $strings['roadmap_last'];?></span>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="text-center">Learn more about the project</h1>
        <div class="embed-responsive embed-responsive-16by9 shadow">
          <iframe class="embed-responsive-item" src="<?php echo $strings['video_1'];?>" allowfullscreen></iframe>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 small-video mt-5">
            <div class="embed-responsive embed-responsive-16by9 shadow">
            <iframe class="embed-responsive-item" src="<?php echo $strings['video_1'];?>" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 small-video mt-5 mb-3">
            <div class="embed-responsive embed-responsive-16by9 shadow">
            <iframe class="embed-responsive-item" src="<?php echo $strings['video_1'];?>" allowfullscreen></iframe>
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
         <?php foreach( $str['our_partners'] as $item): ?>
         <div class="col-lg-3 col-md-12">
            <a href="<?php echo $item['URL']; ?>"><img src="./img/<?php echo $item['img']; ?>" alt="Circle Image" width="50%" class="mb-3">
            </a>
         </div>
         <?php endforeach; ?>
         
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
           <span><?php echo $strings['realeted_project_1'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>EFGH project</h2>
           <span><?php echo $strings['realeted_project_2'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>IJKL project</h2>
           <span><?php echo $strings['realeted_project_3'];?></span><br/>
           <a href="#">Learn more...</a>      
         </div>
      </div>
      <div class="col-lg-3 col-md-12  pl-5 pr-5 mb-2">
         <div class="related_border">
           <h2>MNO project</h2>
           <span><?php echo $strings['realeted_project_4'];?></span><br/>
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
        <?php foreach( $str['TEAM'] as $item): ?>
        <div class="col-lg-2 col-md-6">
          <img src="./img/<?php echo $item['photo']; ?>" alt="Circle Image" class="rounded-circle img-fluid">
        </div>
        <div class="col-lg-2 col-md-6">
            <h3><?php echo $item['name']; ?></h3>
            <span><?php echo $item['title']; ?></span>
            <p><?php echo $item['content']; ?></p>
        </div>
        <?php endforeach; ?>
       
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
           
              <div class="row justify-content-start">
                <div class="col-lg-10">
                  <form id="form">
                  <fieldset class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="text" name = "email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea type = "text" name = "text" class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button class="btn btn-primary">Send</button>
                    </fieldset>
                    </form>
                </div>
            </div>
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
  <script src="common.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
  </html>