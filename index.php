<?php
$page_details = [
   'body_class' => 'home-page',
   'title' => ''
];
require_once './header.php';
?>
<div class="page-wrapper" id="smooth-content">
   <div class="homepage-container">
      <?php include './include/hero.php'; ?>

      <div class="combined-section" id="two">
         <?php include './include/awards-nav.php'; ?>
         <?php include './include/projects.php'; ?>
      </div>

      <?php include './include/project-plan.php'; ?>
      <?php include './include/awards.php'; ?>
      
      <?php include './include/stats.php'; ?>

      <?php include './include/work.php'; ?>
      <?php include './include/podcast.php'; ?>
      

      <div class="combined-section combined-section-two revealer white-section">
         <?php include './include/social-strip.php'; ?>
         <?php include './include/testimonials.php'; ?>
         <?php include './include/featured-blogs.php'; ?>
      </div>
   </div>
</div>

<?php require_once './footer.php'; ?>
