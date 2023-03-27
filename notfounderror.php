<?php
$page_details = [
   'body_class' => 'error-page',
   'title' => '404 Page not found'
];
require_once './header.php';
?>
<div class="page-wrapper" id="smooth-content">
   <div class="errorpage-container">
      <div class="wrap_">
         <div class="container">
            <div class="content-grid">
               <div class="content">
                  <h1>
                     Ooops! This is wrong world. 404 Error
                  </h1>
                  <p>This page doesn't exist or was removed!<br/> We suggest you back to home.</p>
                  <a href="/" class="bttn bttn-primary gilroy-bold">
                     <span>Back to Home</span>
                  </a>
               </div>
               <div class="visual-glance">
                  <figure>
                     <img src="assets/images/error/globe_animated.svg">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php require_once './footer.php'; ?>
