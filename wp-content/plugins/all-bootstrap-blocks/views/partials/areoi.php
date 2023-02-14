<div style="display: flex">
   <div class="areoi-card active areoi-card-branded" style="border: none; border-radius: 0; flex: 1 1 0px;">
      <div class="areoi-card-body">
         <p>
            <img src="<?php echo esc_url( AREOI__PLUGIN_URI . 'assets/img/areoi-logo.svg' ) ?>" width="150">
         </p>
         <h2 style="line-height: 1.4em;">Making a better web, at Lightspeed.</h2>
         <p>Our mission is to transform the way websites are designed, developed and delivered. Making it easier and faster to create higher quality websites that provide a better return on investment for agencies and their customers.</p>

         <a href="https://areoi.io?utm_source=wordpress&utm_medium=banner&utm_campaign=all-bootstrap-blocks" target="_blank" class="areoi-button">Visit areoi.io</a>
         <br><br>
         <a href="https://areoi.io/all-bootstrap-blocks/?utm_source=wordpress&utm_medium=banner&utm_campaign=all-bootstrap-blocks" target="_blank">Plugin Features</a>
         <a href="https://areoi.io/all-bootstrap-blocks/documentation?utm_source=wordpress&utm_medium=banner&utm_campaign=all-bootstrap-blocks" target="_blank">Plugin Docs</a>
      </div><!-- .areoi-card-body -->
   </div><!-- .areoi-card -->

   <?php if ( date('Y-m-d H:i:s') > '2023-02-01 00:00:00' ) : ?>
      <div class="areoi-card active areoi-card-branded" style="background: #2e085e; border: none; border-radius: 0; flex: 1 1 0px;">

         <div class="areoi-card-body">
            <p>
               <img src="<?php echo esc_url( AREOI__PLUGIN_URI . 'assets/img/AI_Logo_Light.svg' ) ?>" width="150">
            </p>
            <p style="color: #ff7676; margin-bottom: 0 !important">AI website builder</p>
            <h2 style="color: #ff7676; line-height: 1.4em; margin-top: 5px;">Agency quality WordPress websites in minutes not months.</h2>
            <p>ROI.AI can design, build and populate your next client website 500 times faster. Providing you with lower project costs, better quality websites and much faster delivery times. <strong>Try the free beta now.</strong></p>

            <a style="background: #ff7676;" href="https://tryroi.ai?utm_source=wordpress&utm_medium=banner&utm_campaign=all-bootstrap-blocks" target="_blank" class="areoi-button">Visit tryroi.ai</a>
         </div><!-- .areoi-card-body -->

      </div><!-- .areoi-card -->
   <?php endif; ?>

   <div class="areoi-card active" style="background: #fff; border: none; border-radius: 0; flex: 1 1 0px;">

      <div class="areoi-card-body">
         <?php include( AREOI__PLUGIN_DIR . 'views/partials/mailchimp.php' ); ?>
      </div><!-- .areoi-card-body -->

   </div><!-- .areoi-card -->
</div>