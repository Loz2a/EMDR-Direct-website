<footer id="footer" class="footer">

  <?php if( get_field('signoff') ): ?>
    <div class="signOff">
      <?php the_field('signoff'); ?>
    </div>
  <?php endif; ?>
  

  <div class="topFooter">
    <h2>EMDR Direct</h2>
    <a href="mailto:help@emdrdirect.com">help@emdrdirect.com</a>
  </div>

<div class="wrapper">
<!--
    <div class="upperFooter">
      <div class="footerLogo">
        <a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" width="72.274" height="78.82" viewBox="0 0 72.274 78.82"><g transform="translate(-221.87 -193)"><path d="M275.535,193H222.046a.17.17,0,0,0-.17.17v16.781h-.007v24.212a.155.155,0,0,0,.262.118,26.318,26.318,0,0,1,16.711-6.341h37.83a17.47,17.47,0,0,0,17.452-18.26C293.707,200.144,285.08,193,275.535,193" transform="translate(0)" fill="#f7f2eb"/><path d="M240.479,564.3h53.487a.168.168,0,0,0,.17-.168V547.35h.008v-24.21a.156.156,0,0,0-.263-.12,26.322,26.322,0,0,1-16.711,6.342H239.339a17.469,17.469,0,0,0-17.452,18.258c.419,9.539,9.045,16.681,18.592,16.681" transform="translate(0 -292.481)" fill="#f7f2eb"/></g></svg>
        </a>
        <svg style="max-width: 72px;height:auto;margin-top:40px;margin-bottom:20px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 455.24 157.67" style="enable-background:new 0 0 455.24 157.67;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:none;}
          .st1{fill:#FFFFFF;}
        </style>
        <g>
          <circle class="st0" cx="78.99" cy="78.85" r="78.34"/>
          <path class="st1" d="M74.35,109.22c-11.3-10.09-12.38-16.86-12.38-16.86c-2.26,2.57-3.7,5.74-3.7,5.74
            c-10.32-17.65,7.58-36.83,7.58-36.83C47.9,70.4,43.84,91.92,44.53,100.67c1.02,12.54,7.52,17.06,7.52,17.06
            c0.75-6.38,2.79-11.32,2.79-11.32c5,10.33,16.28,15.53,19.49,34.86c1.53,9.12,0,14.66-0.55,16.24c1.67,0.11,3.36,0.15,5.06,0.15
            c6.19,0,12.17-0.7,17.94-2.05C99.05,130.3,83.14,117.06,74.35,109.22z M14.12,84.94c5.6-14.32,18.89-24.29,18.89-24.29
            c-4.75-2.87-11.42-1.07-11.42-1.07c11.93-16.39,28.06-20.76,33.29-22.4L43.29,8.34C17.62,21.35,0,48,0,78.78
            c0,33.27,20.58,61.73,49.7,73.32C11.44,127.92,14.12,84.94,14.12,84.94z M62.56,14.17c6.41,0,11.61-5.2,11.61-11.6
            c0-0.66-0.06-1.73-0.15-2.54C66.01,0.52,58.31,2.2,51.13,4.89C52.24,10.15,56.98,14.17,62.56,14.17z M105.25,53.84
            c2.89,0,5.35-1.95,6.21-4.64c0,0-2.72-1.39-5.96-2.76c-3.05-1.28-6.32-2.01-6.32-2.01C97.19,50.16,101.62,53.84,105.25,53.84z
            M94.66,14.07c5.56,0,10.22-4.14,11.33-9.39C98.83,2.05,91.17,0.43,83.24,0c-0.09,0.79-0.13,1.98-0.13,2.59
            C83.1,8.99,88.25,14.07,94.66,14.07z M113.82,8.06l-11.6,28.98c6.6,1.55,18.97,7.01,17.14,10.47c-0.88,1.64-2.79,3.18-1.72,3.67
            c11.93,5.59,26.04,12.26,26.04,12.26s0.91,0.63,0.48,1.54c-1.69,3.54-6.14,5.08-6.14,5.08s-0.46,6.32-7.61,11.16
            c-1.33-5-5.68-8.83-11.12-8.83c-6.48,0-11.72,5.27-11.72,11.73c0,6.49,5.4,11.54,11.89,11.54c3.31,0,6.14-2.04,8.26-4.24
            c1.68,11.88-6.77,18.15-6.77,18.15c-4.39-7.34-11.5-9.42-17.37-7.65c-40.03-18.94-21.61-49.2-20.73-50.64
            c-0.79,0.2-1.61,0.29-2.46,0.29c-6,0-10.82-4.85-10.82-10.82c0-1.42,0.27-2.77,0.77-4.01c-0.06-0.04-4.36,3.13-4.36,8.91
            c0,8.99,7.58,10.67,7.58,10.67s-7.54,12.4-3.16,28.2c4.81,17.35,23.12,20.36,34.37,32.84c14.22,15.78,12.85,27.65,12.28,30.44
            c24.22-13.47,40.62-39.34,40.62-69.02C157.68,47.79,139.82,20.95,113.82,8.06z M145.74,90.98c-3.3,2.6-8.21,3.69-15.12-1.38
            c-6.47-4.8-11.45-5.46-11.45-5.46s5.2-1.17,10.19,0.42c3.39,1.09,5.4,2.26,10.54,2.2c4.26-0.04,9.01-2.25,9.01-2.25
            S149.54,88,145.74,90.98z M450.92,52.75c0-1.82-1.1-2.57-3.26-2.57h-3.39v8.94h1.47V55.3h1.38l2.31,3.82h1.67l-2.51-3.93
            C449.93,55.04,450.92,54.37,450.92,52.75z M445.74,54.05v-2.61h1.77c0.88,0,1.94,0.13,1.94,1.21c0,1.3-0.97,1.4-2.07,1.4H445.74z
            M447.34,46.42c-4.28,0-7.95,3.22-7.95,8.08c0,4.6,3.3,8.08,7.95,8.08c4.23,0,7.91-3.22,7.91-8.08
            C455.24,49.64,451.57,46.42,447.34,46.42z M447.34,61.17c-3.84,0-6.22-3-6.22-6.68c0-3.93,2.72-6.68,6.22-6.68
            c3.46,0,6.18,2.74,6.18,6.68C453.52,58.45,450.79,61.17,447.34,61.17z M423.04,71.89c-9.41-3.1-20.12-4.53-20.12-10.25
            c0-4.52,5.99-6.14,10.88-6.14c6.31,0,12.91,1.99,18.32,4.64V48.99c-6.55-2.04-14.51-3.09-21.71-3.09
            c-19.77,0-30.99,7.11-30.99,19.63c0,10.09,7.65,15.6,16.45,18.51c10.89,3.59,21.11,4.72,21.11,11.14c0,5.35-7.61,6.78-13.24,6.78
            c-9,0-16.01-1.15-23.78-5.05l0.01,11.18c7.76,2.29,17.63,3.65,25.89,3.65c28.56,0,34.23-12.82,34.23-20.72
            C440.09,80.79,434.7,75.74,423.04,71.89z M271.74,110.35h22.9V47.31h-22.9V110.35z M236.6,80.99c9.47-3.08,16.47-9.41,16.47-16.97
            c0-6.45-2.47-11.45-9.85-14.5c-5.63-2.31-13.97-2.22-20.11-2.22h-35.3v63.06l22.89-0.01V56.61h5.21c8.57,0,13.53,3.14,13.53,9.88
            c0,10.22-15.39,15.64-15.39,15.64c6.01,8.8,12.02,16.81,15.58,20.59c6.58,6.96,11.44,8.92,20.64,8.92c5.1,0,10.18-0.29,16.77-1.28
            C257.91,104.8,241.43,86.74,236.6,80.99z M301.66,79.41c0,19.85,18.46,32.35,47.89,32.35c7.07,0,15.27-1.26,22.15-3.69v-10.9
            c-5.91,2.26-12.37,3.56-19.39,3.56c-10.81,0-26.75-5.37-26.75-22.29c0-13.29,9.69-22.48,25.28-22.48c6.18,0,13.29,1.05,20.86,4.97
            V49.79c-5.25-2.31-13.75-3.89-22.79-3.89C320.55,45.9,301.66,58.7,301.66,79.41z"/>
        </g>
        </svg>

      </div>
      <div class="footerAddresses">
        <div class="address">
          <h5>Bury.</h5>
          <p>Waterfold Park,</p>
          <p>Manchester</p>
          <p>BL9 7BR</p>
          <span class="divider"></span>
          <a href="mailto:manchester@pooledick.co.uk">Manchester@pooledick.co.uk</a>
          <br />
          <a href="tel:+441614478500">+44 (0)161 447 8500</a>
        </div>
        <div class="address">
          <h5>Stoke-On-Trent.</h5>
          <p>Home Farm, Keele University Science Park,</p>
          <p>Newcastle-under-Lyme, Staffordshire</p>
          <p>ST5 5AA</p>
          <span class="divider"></span>
          <a href="mailto:stoke@pooledick.co.uk">Stoke@pooledick.co.uk</a>
          <br />
          <a href="tel:00441782443030">+44 (0)1782 443 030</a>
        </div>
      </div>
      <div class="footerBackToTop">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="26.387" height="41.873" viewBox="0 0 26.387 41.873"><g transform="translate(-285.095 148.373) rotate(-90)"><path d="M195.5,285.911l17.472,12.377L195.5,310.665" transform="translate(-66.329)" fill="none" stroke="#f7f2eb" stroke-miterlimit="10" stroke-width="2"/><line x1="40.121" transform="translate(106.5 298.288)" fill="none" stroke="#f7f2eb" stroke-miterlimit="10" stroke-width="2"/></g></svg>
        </a>
      </div>
    </div>

    <div class="lowerFooter">
      <div class="footerDetails">
        <p>Manchester &copy;<?php echo date("Y"); ?> Poole Dick Associates Ltd</p>
        <p>Registered Eng No. 1477221 | VAT Reg No. 306-0655 85 | Registered Office: Waterfold Park, Bury, BL9 7BR.</p>
      </div>
      <div class="footerSocial">
        <a href="https://uk.linkedin.com/company/poole-dick-associates" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="19.362" height="20.438" viewBox="0 0 19.362 20.438"><rect width="4.303" height="15.059" transform="translate(0 5.378)" fill="#f7f2eb"/><path d="M193.5,1949.447c-3,0-3.519,1.095-3.764,2.151v-2.151h-4.3v15.059h4.3V1955.9a2.151,2.151,0,0,1,4.3,0v8.605h4.3v-7.53C198.346,1952.674,197.786,1949.447,193.5,1949.447Z" transform="translate(-178.984 -1944.069)" fill="#f7f2eb"/><circle cx="2.151" cy="2.151" r="2.151" transform="translate(0 0)" fill="#f7f2eb"/></svg>
        </a>
        <a href="https://twitter.com/poole_dick" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="23.456" height="19.063" viewBox="0 0 23.456 19.063"><path d="M271.484,1939.753a9.556,9.556,0,0,1-2.764.758,4.833,4.833,0,0,0,2.117-2.661,9.643,9.643,0,0,1-3.056,1.167,4.818,4.818,0,0,0-8.2,4.39,13.663,13.663,0,0,1-9.919-5.028,4.82,4.82,0,0,0,1.489,6.426,4.794,4.794,0,0,1-2.179-.6c0,.02,0,.041,0,.06a4.815,4.815,0,0,0,3.86,4.719,4.83,4.83,0,0,1-2.172.083,4.817,4.817,0,0,0,4.494,3.342,9.708,9.708,0,0,1-7.124,1.994,13.688,13.688,0,0,0,21.069-11.532c0-.208-.006-.417-.015-.623A9.755,9.755,0,0,0,271.484,1939.753Z" transform="translate(-248.028 -1937.497)" fill="#f7f2eb"/></svg>
        </a>
      </div>
    </div>
  -->
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