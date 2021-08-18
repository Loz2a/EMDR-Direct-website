<footer id="footer" class="footer">
  <div class="wrapper">

    <div class="topFooter">
        <div class="left">
          <h2>Nam at fermentum mauris. Nunc sed lacus nec massa fermentum lacinia.</h2>
        </div>
        <div class="right">
            <div class="contactContent2 contact form">
                <?php echo do_shortcode( '[contact-form-7 id="40" title="Contact form"]') ?>
            </div>
        </div>
    </div>

    

    <div class="lowerFooter">

      <h2>EMDR Direct</h2>

      <div class="lowerFooter-inner">

        <div class="left">
          <?php
              wp_nav_menu(
                  array(
                  'theme_location' => 'footer'
                  )
              );
          ?>
          <?= get_theme_mod('footer'); ?>
        </div>

        <div class="right">
          <a href="tel:">0161 000 0000</a>
          <a href="mailto:help@emdrdirect.com">help@emdrdirect.com</a>
        </div>

      </div>

      <a class="copy" href="https://holdens.agency/" rel="nofollow" title="Creative Agency Manchester - Holdens" target="_blank">
        <span>Created by</span>
        <img src="https://www.holdens.agency/footer-credit/holdens-logo-black-h.svg">
      </a>

    </div>
    


</footer>





<?php include "scripts.php"; ?>

<!-- <div id="teconsent" class="consent">
<h4>Cookie Settings</h4>  
<span>We and our partners process, store and/or access data such as unique ID and browsing data based on your consent to display personalised content and gain audience insights.</span> <script type="text/javascript" async="async" src="https://consent.trustarc.com/v2/notice/umyxgm"></script> <div class="agree" id="agree">Agree &amp; Proceed</div> </div> -->

<!-- <div id="consent-banner"></div> <div id="teconsent"> <script type="text/javascript" async="async" src="https://consent.trustarc.com/v2/notice/umyxgm"></script> </div> -->

<script>

// let show = document.getElementById("agree");
// console.log(show);

// // Clicking the accept button on cookies
// document.querySelector(".agree").onclick = function() {acceptFunction()};

// /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
// function acceptFunction() {
//   document.getElementById("teconsent").classList.toggle("hide");
// }

</script>
<?php wp_footer(); ?>