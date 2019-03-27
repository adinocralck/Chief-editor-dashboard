<?php include'server.php';?>
<?php include'conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Author Meta -->
        <meta name="author" content="HanoRwanda Ltd, Ndizihiwe Adino">

        <!-- Meta Description -->
        <meta name="description" content="tHIS IS Admin Posts Updating Dashboard. it helps our Editors to easly upload post to the website">
        <!-- Meta Keyword -->
        <meta name="keywords" content="HanoRwanda Admin Dashboard ">
        <!-- Adino's Certified Meta Tags and script Start Here -->

        <!-- Site Validation -->
        <meta name="msvalidate.01" content="89D86F9555249031E7C991EF402ED809" />
        <meta name="google-site-verification" content="OGsyYuM1LMr0HhEM65VHR3qd1SkVn68JcvOORxANXJI" />

        <!-- One signal API -->

        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        
        <!-- Script for one signal API -->
        <script>
             var OneSignal = window.OneSignal || [];
             OneSignal.push(function() {
               OneSignal.init({
                 appId: "fd4fd1c1-fc82-4d35-9334-8b4e380a6b89",
                 autoRegister: false,
                 notifyButton: {
                   enable: true,
                 },
               });
             });
        </script>
        <!-- Sweet alert JS -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Google AdSence script -->
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6459860118746862",
          enable_page_level_ads: true
          });
        </script>

        <!-- Google Analytics script starts Here -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115816114-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-115816114-1');
        </script>
        <!-- Site Title -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Share this JS-->
        

    <!-- Title -->
    <title>HanoRwanda - News &amp; Technology Hub </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favico.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
<style type="text/css">
  #category {
    width: 30%;
    height: 30px;
    font-size: 120%;
    font-weight: bold;
    border-radius: 10px;
  }
  #title {
    width: 80%;
    height: 70px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }

  #slug {
    width: 80%;
    height: 40px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }
  #post_date, #author {
    width: 80%;
    height: 40px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }
  #img1, #img2, #img3, #img4, #img5 {
    width: 40%;
    height: 30px;
    font-size: 120%;
    font-weight: bold;
    margin-left: -40%;
    border-radius: 10px;
  }
  #header {
    width: 80%;
    height: 100px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }
  #description {
    width: 80%;
    height: 100px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }
  #paragraph1, #paragraph2, #paragraph3, #paragraph4  {
    width: 80%;
    height: 200px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 5px;
    background: transparent;
    color: #fff;
    font-size: 120%;
    resize: none;
    border: 2px solid #fff;
    border-radius: 10px;
  }
  #publish {
    width: 100px;
    height: 35px;
    background: transparent;
    border: 2px solid #fff;
    font-size: 120%;
    color: #fff;
    font-weight: bold;
    border-radius: 5px;
  }
  #publish:hover {
    background: #fff;
    color: #010232;
    border: 2px solid#010232;
    transition: 1s;
  }
  @media only screen and (min-width: 280px) and (max-width: 360px) {
    #category {
      width: 50%;
    }
    #header {
      height: 50px;
    }
    #paragraph1, #paragraph2, #paragraph3, #paragraph4 {
      height: 100px;
    }
</style>
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amakuru | Imyidagaduro | Siporo | Politike | 
    Ubuzima">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="hanorwanda, amakuru, ubukungu, ubuzima, urukundo, isi, rwanda, imyidagaduro, muzika, entertainment, youtube, hanorwanda tv, east africa, adino ndizihiwe, musanze">
    <meta name="author" content="Ndizihiwe adino">
    <!-- Title -->
    <title>HanoRwanda</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    

    <!-- ##### Looping starts here ##### -->
   

    <!-- ##### Header Area End ##### -->

    

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12" style="background: #010216;">
                    <div class="contact-title" style="background: #010216;">
                        <center><h2 style="color: #fff; margin-top: 10px;">HanoRwanda Dashboard</h2>
                        <br>
                        <h3 style="color: #fff; font-family: arial; text-align: center;">Welcome <?php echo $_SESSION['username'];?></h3></center>
                        <form action="server.php" method="post">
                            <button type="submit" name="logout" style="width: 60px; height:30px; border-radius: 10px; outline: none; color: red;font-weight: bold; border: none;cursor: pointer;">Logout</button>
                            <a href="hn_tv.php">
                                <button type="button" name="vid" style="width: 60px; height:30px; border-radius: 10px; outline: none; color: red;font-weight: bold; border: none;cursor: pointer;">Video</button>
                            </a>
                        </form>
                    </div>
                  <!-- Dashboard form container -->
<form action="#" method="post" enctype="multipart/form-data">

 <?php
       $id = $_GET['id'];
       $sqli = mysqli_query($conn, "SELECT*FROM articles WHERE id='$id' ");
       while ($row = mysqli_fetch_array($sqli)) {
      $title = $row['title'];
      $slug = $row['slug'];
      $date = $row['post_date'];
      $header = $row['header'];
      $author = $row['author'];
      $img = $row['img1'];
      $category = $row['category'];
      $paragraph1 = $row['paragraph1'];
      $paragraph2 = $row['paragraph2'];
      $paragraph3 = $row['paragraph3'];
      $paragraph4 = $row['paragraph4'];
      $img1 = $row['img2'];
      $img2 = $row['img3'];
      $img3 = $row['img4'];
      $img4 = $row['img5'];
      $img5 = $row['img6'];
      $img6 = $row['img7'];
      $img7 = $row['img8'];
      $img8 = $row['img9'];
      $img9 = $row['img10'];
      $img10 = $row['img11'];
      $img11 = $row['img12'];
      $img12 = $row['img13'];
      $img13 = $row['img14'];
      $img14 = $row['img15'];
      $img15 = $row['img16'];
      $img16 = $row['img17'];
      $img18 = $row['img18'];
      $img19 = $row['img19'];
      $img20 = $row['img20'];
      $caption1 = $row['capt1'];
      $caption2 = $row['capt2'];
      $caption3 = $row['capt3'];
      $caption4 = $row['capt4'];
      $caption5 = $row['capt5'];
      $caption6 = $row['capt6'];
      $caption7 = $row['capt7'];
      $caption8 = $row['capt8'];
      $caption9 = $row['capt9'];
      $caption10 = $row['capt10'];
      $caption11 = $row['capt11'];
      $caption12 = $row['capt12'];
      $caption13 = $row['capt13'];
      $caption14 = $row['capt14'];
      $caption15 = $row['capt15'];
      $caption16 = $row['capt16'];
      $caption17 = $row['capt17'];
      $caption18 = $row['capt18'];
      $caption19 = $row['capt19'];
      $caption20 = $row['capt20'];
      $views = $row['views'];
    ?>
                  <center>
                     <select name="category" id="category" required>
                      <option value="<?php echo $category;?>"><?php echo $category;?></option>
                        
                     </select><br><br>
                     <textarea id="title" name="title" maxlength="220" placeholder="Title..." required><?php echo $title;?></textarea><br><br>
                     <textarea id="slug" name="slug" placeholder="Slug"required><?php echo $slug;?></textarea><br><br>
                     <input class="hidden"id="post_date" type="hidden" name="post_date" placeholder="Time posted" required><br><br>
                     <textarea id="header" name="header" placeholder="Heading"><?php echo $header;?></textarea><br><br>



                     <input id="img1" type="file" name="img1" ><br><br>
                     <textarea id="title" name="caption1" maxlength="1000" placeholder="Image caption..."><?php echo $caption1;?></textarea><br><br>


                     <textarea id="paragraph1" name="paragraph1" placeholder="Paragraph"><?php echo $paragraph1;?></textarea><br><br>
                     <input id="img2" type="file" name="img2" ><br><br>
                     <textarea id="title" name="caption2" maxlength="1000" placeholder="Image caption..." ><?php echo $caption2;?></textarea><br><br>



                     <textarea id="paragraph2" name="paragraph2" placeholder="Paragraph"><?php echo $paragraph2;?></textarea><br><br>
                     <input id="img3" type="file" name="img3" ><br><br>
                     <textarea id="title" name="caption3" maxlength="1000" placeholder="Image caption..." ><?php echo $caption3;?></textarea><br><br>




                     <textarea id="paragraph3" name="paragraph3" placeholder="Paragraph"><?php echo $paragraph3;?></textarea><br><br>

                     <input id="img4" type="file" name="img4" ><br><br>
                     <textarea id="title" name="caption4" maxlength="1000" placeholder="Image caption..." ><?php echo $caption4;?></textarea><br><br>

                      <textarea id="paragraph4" name="paragraph4" placeholder="Paragraph"><?php echo $paragraph4;?></textarea><br><br>



                      <input id="img5" type="file" name="img5" ><br><br>
                     <textarea id="title" name="caption5" maxlength="1000" placeholder="Image caption..." ><?php echo $caption5;?></textarea><br><br>

                      <input id="img6" type="file" name="img6" ><br><br>
                     <textarea id="title" name="caption6" maxlength="1000" placeholder="Image caption..." ></textarea><?php echo $caption6;?><br><br>

                      <input id="img7" type="file" name="img7" ><br><br>
                     <textarea id="title" name="caption7" maxlength="1000" placeholder="Image caption..." ><?php echo $caption7;?></textarea><br><br>

                      <input id="img8" type="file" name="img8" ><br><br>
                     <textarea id="title" name="caption8" maxlength="1000" placeholder="Image caption..." ><?php echo $caption7;?></textarea><br><br>

                      <input id="img9" type="file" name="img9" ><br><br>
                     <textarea id="title" name="caption9" maxlength="1000" placeholder="Image caption..." ><?php echo $caption9;?></textarea><br><br>

                      <input id="img10" type="file" name="img10" ><br><br>
                     <textarea id="title" name="caption10" maxlength="1000" placeholder="Image caption..." ><?php echo $caption10;?></textarea><br><br>

                        <input id="img11" type="file" name="img11" ><br><br>
                     <textarea id="title" name="caption11" maxlength="1000" placeholder="Image caption..." ><?php echo $caption11;?></textarea><br><br>

                      <input id="img12" type="file" name="img12" ><br><br>
                     <textarea id="title" name="caption12" maxlength="1000" placeholder="Image caption..." ><?php echo $caption12;?></textarea><br><br>

                      <input id="img13" type="file" name="img13" ><br><br>
                     <textarea id="title" name="caption13" maxlength="1000" placeholder="Image caption..." ><?php echo $caption13;?></textarea><br><br>

                      <input id="img14" type="file" name="img14" ><br><br>
                     <textarea id="title" name="caption14" maxlength="1000" placeholder="Image caption..."><?php echo $caption14;?></textarea><br><br>

                      <input id="img15" type="file" name="img15" ><br><br>
                     <textarea id="title" name="caption15" maxlength="1000" placeholder="Image caption..." ><?php echo $caption15;?></textarea><br><br>

                      <input id="img16" type="file" name="img16" ><br><br>
                     <textarea id="title" name="caption16" maxlength="1000" placeholder="Image caption..." ><?php echo $caption16;?></textarea><br><br>

                     <input id="img17" type="file" name="img17" ><br><br>
                     <textarea id="title" name="caption17" maxlength="1000" placeholder="Image caption..." ><?php echo $caption17;?></textarea><br><br>

                     <input id="img18" type="file" name="img18" ><br><br>
                     <textarea id="title" name="caption18" maxlength="1000" placeholder="Image caption..." ><?php echo $caption18;?></textarea><br><br>

                     <input id="img19" type="file" name="img19" ><br><br>
                     <textarea id="title" name="caption19" maxlength="1000" placeholder="Image caption..." ><?php echo $caption19;?></textarea><br><br>

                     <input id="img20" type="file" name="img20" ><br><br>
                     <textarea id="title" name="caption20" maxlength="1000" placeholder="Image caption..." ><?php echo $caption20;?></textarea><br><br>




                    
                     <input id="img20" type="file" name="img20" ><br><br>
                     <textarea id="title" name="author" maxlength="1000" placeholder="Image caption..." ><?php echo $author;?></textarea><br><br>
                     <textarea id="title" name="views" maxlength="1000" placeholder="Image caption..." ><?php echo $views;?></textarea><br><br>
                     <button id="publish" type="submit" name="update">Update</button><?php }?>
                     <br><br>
                   </center>
<?php 
include'update.php';
?>

                 </form>

 <!-- ################################################ -->
                 
              <!--<h3 style="color: #fff; text-align: center; ">Gallery upadting form</h3><br><br>-->
              <!-- <form action="includes/gallery-updating-form-handler.php" method="post" enctype="multipart/form-data" >-->
              <!--     <center>-->
              <!--     <textarea id="description" name="description" placeholder="Image Description"></textarea><br><br>-->
              <!--     <input id="img4" type="file" name="photo"><br><br>-->
              <!--     <button id="publish" type="submit" name="post">Upload</button><br><br>-->
              <!--     </center>-->
              <!-- </form> -->
            
                </div>
            </div>
         <br><br>

    </div>



<div class="row"></div>




    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>