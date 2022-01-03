<?php
/**
 * Template Name: Practice Happy Landing Page
 */ 
?>

<div class="container coreplus-practice-happy-landing-page">
  <div class="row">
    <div class="col-md-6">
      <div class="coreplus-ph-hero-text">
        <h2 class="coreplus-ph-hero-header">
          Be part of the Practice Happy community
        </h2>
        <p>
          Where our customers come together to connect, learn, and share with
          other allied healthcare professionals.
        </p>
      </div>
    </div>
    <div class="col-md-6 cp-lp-hero-image">
      <img
        src="<?php echo get_template_directory_uri(). '/practicehappy/images/practice-happy-hero-image.svg' ?>"
        alt=""
      />
    </div>
  </div>
</div>

<div class="container ph-logo-line">
  <div class="row">
    <div class="col-md-4"><hr class="ph-line ph-hide-in-small" /></div>
    <div class="col-md-4 ph-logo">
      <img
        src="<?php echo get_template_directory_uri(). '/practicehappy/images/practice-happy-logo.png'?>"
        alt=""
      />
    </div>
    <div class="col-md-4"><hr class="ph-line ph-hide-in-small" /></div>
  </div>
</div>

<div class="container practice-happy-community">
  <div class="row">
    <div class="col-md-6 phc-text-div">
      <div class="phc-text">
        <p>
          coreplus exists to connect, help & grow Allied Healthcare
          professionals with digital first healthcare service experiences for
          your clients, so it only made sense that we created a community to
          support this vision.
          <br />
          <br />
          The Practice Happy community is inspired to help maintain human
          connection throughout all our journey's within healthcare. It's about
          togetherness...where we connect together, learn together and grow
          together. Come and join us!
        </p>
      </div>
      <!-- <div class="phc-button">
            <a href="https://practicehappy.coreplus.com.au/" target="_blank"
              >Practice Happy Community</a
            >
          </div> -->
    </div>
    <div class="col-md-6 phc-image">
      <img
        src="<?php echo get_template_directory_uri().'/practicehappy/images/practice-happy-mockup.png'?>"
        alt=""
      />
    </div>
  </div>
</div>

<div class="container practice-happy-divider">
  <div class="row">
    <hr class="ph-line" />
  </div>
</div>

<div class="container">
  <div class="row ph-benefits-title">
    <h2 class="coreplus-ph-h2">
      What are the benefits of being a Practice Happy community member?
    </h2>
  </div>
</div>

<div class="container ph-benefits-section">
  <div class="row">
    <div class="col-md-4">
      <div class="ph-benefits">
        <img
          src="<?php echo get_template_directory_uri().'/practicehappy/images/ph-connect.svg'?>"
          alt=""
        />
        <span>Connect Together</span>
        <p>
          meet, have conversations and build relationships with like-minded
          allied health care professionals from all over Australia
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="ph-benefits">
        <img
          src="<?php echo get_template_directory_uri().'/practicehappy/images/learn-together.svg'?>"
          alt=""
        />
        <span>Learn Together</span>

        <p>
          expand your knowledge with our special educational events, as well as
          content and discussions in our ‘Success Tips’ and ‘Tech Talk’ groups
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="ph-benefits">
        <img
          src="<?php echo get_template_directory_uri().'/practicehappy/images/grow-together.svg'?>"
          alt=""
        />
        <span>Grow Together</span>

        <p>
          join profession or role specific ‘clubhouse’ groups where you can ask
          for advice, share tips, and discuss industry-related news and topics
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container ph-cta-info-desktop">
  <div class="row">
    <div class="col-md-6 col-sm-12 ph-cta-content">
      Access to the Practice Happy community is an exclusive feature for all
      coreplus customers.
    </div>
    <div class="col-md-6 col-sm-12 ph-cta-content">
      As a subscriber to coreplus, you will receive an invitation to join the
      Practice Happy community.
    </div>
  </div>
</div>

<div class="container ph-cta-info-mobile">
  <div class="row">
    <div class="col-md-6 col-sm-12 ph-cta-content ph-cta-one">
      Access to the Practice Happy community is an exclusive feature for all
      coreplus customers.
    </div>
    <div class="col-md-6 col-sm-12 ph-cta-content ph-cta-two">
      As a subscriber to coreplus, you will receive an invitation to join the
      Practice Happy community.
    </div>
  </div>
</div>

<div class="container practice-happy-divider">
  <div class="row">
    <hr class="ph-line" />
  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="coreplus-ph-h2 ph-upcoming-et">Upcoming Community Events</h2>
  </div>
</div>

<?php 
  $all_events_query = array(
    'posts_per_page' =>
'-1', 'post_status' => 'publish', 'post_type' => 'phevent' ); $all_events = new
WP_Query($all_events_query); $numberofevents = $all_events->post_count; ?>

<div class="container parctice-happy-events">
  <?php if($numberofevents==0):?>

  <div>
    <p style="text-align: center">No Events Available Right Now!</p>
  </div>

  <?php endif ?>

  <?php if($numberofevents==1):?>

  <?php while ($all_events->have_posts()) : $all_events->the_post(); ?>

  <div class="row ph-single-event">
    <div class="">
      <div class="col-md-5 ph-single-event-desktop">
        <img src="<?php echo get_field('event_image'); ?>" alt="" />
      </div>
      <div class="col-md-7">
        <div class="ph-event-details-block">
          <div>
            <h5 class="ph-events-h5"><?php the_title() ?></h5>
            <p class="ph-events-date-time">
              <?php echo get_field('date_and_time'); ?>
            </p>
            <p class="ph-events-details">
              <?php echo get_field('ph_event_details'); ?>
            </p>
          </div>
          <div>
            <a
              href="<?php echo get_field('event_details_button');  ?>"
              class="btn btn-ph-ed"
              >Event Details</a
            >
            <a
              href="<?php echo get_field('book_now_button');  ?>"
              class="btn btn-ph-bn"
              >Book Now</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row ph-single-event-mobile">
    <div class="col-md-12 col-sm-12">
      <div class="ph-event">
        <div class="ph-single-event-image">
          <img src="<?php echo get_field('event_image'); ?>" alt="" />
        </div>
        <div>
          <h5 class="ph-events-h5"><?php the_title() ?></h5>
          <p class="ph-events-date-time">
            <?php echo get_field('date_and_time'); ?>
          </p>
          <p class="ph-events-details">
            <?php echo get_field('ph_event_details'); ?>
          </p>
        </div>
        <div>
          <a
            href="<?php echo get_field('event_details_button');  ?>"
            class="btn btn-ph-ed"
            >Event Details</a
          >
          <a
            href="<?php echo get_field('book_now_button');  ?>"
            class="btn btn-ph-bn"
            >Book Now</a
          >
        </div>
      </div>
    </div>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php if($numberofevents==2):?>

  <div class="row">
    <?php while ($all_events->have_posts()) : $all_events->the_post(); ?>
    <div class="col-md-6 col-sm-12">
      <div class="ph-event">
        <div class="ph-single-event-image">
          <img src="<?php echo get_field('event_image'); ?>" alt="" />
        </div>
        <div>
          <h5 class="ph-events-h5"><?php the_title() ?></h5>
          <p class="ph-events-date-time">
            <?php echo get_field('date_and_time'); ?>
          </p>
          <p class="ph-events-details">
            <?php echo get_field('ph_event_details'); ?>
          </p>
        </div>
        <div>
          <a
            href="<?php echo get_field('event_details_button');  ?>"
            class="btn btn-ph-ed"
            >Event Details</a
          >
          <a
            href="<?php echo get_field('book_now_button');  ?>"
            class="btn btn-ph-bn"
            >Book Now</a
          >
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

  <?php endif; ?>

  <?php if($numberofevents>2):?>

  <div class="row">
    <?php while ($all_events->have_posts()) : $all_events->the_post(); ?>
    <div class="col-md-4 col-sm-12">
      <div class="ph-event">
        <div class="ph-single-event-image">
          <img src="<?php echo get_field('event_image'); ?>" alt="" />
        </div>
        <div>
          <h5 class="ph-events-h5"><?php the_title() ?></h5>
          <p class="ph-events-date-time">
            <?php echo get_field('date_and_time'); ?>
          </p>
          <p class="ph-events-details">
            <?php echo get_field('ph_event_details'); ?>
          </p>
        </div>
        <div>
          <a
            href="<?php echo get_field('event_details_button');  ?>"
            class="btn btn-ph-ed"
            >Event Details</a
          >
          <a
            href="<?php echo get_field('book_now_button');  ?>"
            class="btn btn-ph-bn"
            >Book Now</a
          >
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

  <?php endif ?>
</div>
