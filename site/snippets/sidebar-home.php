<div class="sidebar-home">
  <nav>
    <img src="<?= $site->url() ?>/assets/images/coin.png">
    <ul class="column-group">
      <li class="column third"><a href="http://localhost:8000/about">About</li></a>
      <li class="column third"><a href="http://localhost:8000/about">Contact</li></a>
      <li class="column third"><a href="http://localhost:8000/about">Location</li></a>
    </ul>
  </nav>
</div>

<div class="email-sign-up">
  <h4>Sign up for the Rule62 Newsletter!</h4>
  <!-- Begin MailChimp Signup Form -->

<style type="text/css">
  #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div class="signin" id="mc_embed_signup">
<form action="//rulesixtytwo.us11.list-manage.com/subscribe/post?u=7c238886b8be00df1b35ebfd2&amp;id=1e81cf603d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_7c238886b8be00df1b35ebfd2_1e81cf603d" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
</div>

<div class="social-media">
  <h4>
    Follow Us!
  </h4>
  <ul class="column-group">
    <li>
      <a href="<?= $site->url() ?>">
        <img a href="https://www.facebook.com/pages/Rule-62/139497139457062" src="<?= $site->url() ?>/assets/images/facebook-white.png" height="40" width="40">
      </a>
    </li>
    <li>
      <a href="<?= $site->url() ?>">
        <img a href="https://twitter.com/Rule_sixtyt_two" src="<?= $site->url() ?>/assets/images/twitter-white.png" height="40" width="40">
      </a>
    </li>
  </ul>
</div>

<? snippet('random-testimonial') ?>
