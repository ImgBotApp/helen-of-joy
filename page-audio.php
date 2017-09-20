<?php
/*
  Template Name: Audio Page
*/

get_header();

//Variables

$audio_embed_code = get_field('audio_embed_code');
$second_audio_embed_code = get_field('second_audio_embed_code');
$third_audio_embed_code = get_field('third_audio_embed_code');

 ?>

 <div id="audiopage">
   <!--HEADER-->
   <header class="site-header" role="banner">
     <!--NAVBAR-->
     <div class="navbar-wrapper">
       <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle Navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a id="logo" class="navbar-brand" href="index.html"><h2>HELEN OF JOY</h2></a>
           </div>
           <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-right">
               <li><a href="audio.html">Audio</a></li>
               <li><a href="video.html">Video</a></li>
               <li><a href="index.html#shows">Shows</a></li>
               <!--need to fix this to point to the shows location on the main page later-->
               <li><a href="blog.html">Blog</a></li>
               <li><a href="contact.html">Contact</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </header>

   <div class="media-page">
     <div>
       <?php echo $audio_embed_code; ?>
    </div>
    <div>
      <?php echo $second_audio_embed_code; ?>
   </div>
   <div>
     <?php echo $third_audio_embed_code; ?>
  </div>
   </div>

<?php

get_footer();

?>