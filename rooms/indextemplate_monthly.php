<?php
  if (strpos($currency, "EUR") !== false) {
    $symbol = "€";
  } else if (strpos($currency, "GBP") !== false) {
    $symbol = "£";
  } else if (strpos($currency, "USD") !== false) {
    $symbol = "$";
  } else if (strpos($currency, "AUD") !== false) {
    $symbol = "$";
  } else if (strpos($currency, "CAD") !== false) {
    $symbol = "$";
  } else if (strpos($currency, "YEN") !== false) {
    $symbol = "¥";
  } else {
    $symbol = "<sup>" . $currency . "</sup>";
  }
?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
		<link rel="dns-prefetch" href="//maps.googleapis.com">
		<link rel="dns-prefetch" href="//maps.gstatic.com">
		<link rel="dns-prefetch" href="//mts0.googleapis.com">
		<link rel="dns-prefetch" href="//mts1.googleapis.com">
		<meta charset="utf-8">
		<link href="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/common_o2.1.css" media="all" rel="stylesheet" type="text/css" />
		<link href="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/p3.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.js" type="text/javascript"></script>

		<meta id="csrf-param-meta-tag" name="csrf-param" content="authenticity_token"/>
		<meta id="csrf-token-meta-tag" name="csrf-token" content="" />

		<script> moment().format(); var sherlock_firstbyte = Number(new Date()); </script>

    <title><?php echo $roomname; ?> in <?php echo $city; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="description" content="<?php echo $roomname; ?> for <?php echo $symbol; ?><?php echo $roomprice; ?>. <?php echo $summary; ?>...">

      <meta property="fb:app_id" content="138566025676">
      <meta property="og:site_name" content="Airbnb">
      <meta property="og:title" content="<?php echo $roomname; ?> in <?php echo $city; ?>">
      <meta property="og:type" content="airbedandbreakfast:listing">
      <meta property="og:image" content="<?php echo $img_result[0]; ?>?aki_policy=x_large">
      <meta property="og:url" content="#<?php echo $roomid; ?>">
      <meta property="og:description" content="<?php echo $buildtype; ?> in <?php echo $city; ?>, <?php echo $country; ?>. <?php echo $summary; ?>...">
      <meta property="airbedandbreakfast:locality" content="<?php echo $city; ?>">
      <meta property="airbedandbreakfast:region" content="<?php echo $state; ?>">
      <meta property="airbedandbreakfast:country" content="<?php echo $country; ?>">
      <meta property="airbedandbreakfast:city" content="<?php echo $city; ?>">
      <meta property="airbedandbreakfast:rating" content="4.9">
      <meta property="airbedandbreakfast:location:latitude" content="<?php echo $latitude; ?>">
      <meta property="airbedandbreakfast:location:longitude" content="<?php echo $longitude; ?>">
      <meta property="og:locale" content="en_US">

    <meta name="twitter:widgets:csp" content="on">

        <meta name="twitter:card" content="photo">
        <meta name="twitter:url" content="#<?php echo $roomid; ?>">
        <meta name="twitter:image" content="<?php echo $img_result[0]; ?>?aki_policy=x_large">
        <meta name="twitter:title" content="<?php echo $roomname; ?> in <?php echo $city; ?>">
        <meta name="twitter:site" content="@airbnb">
        <meta name="twitter:app:name:iphone" content="Airbnb">
        <meta name="twitter:app:name:ipad" content="Airbnb">
        <meta name="twitter:app:name:googleplay" content="Airbnb">
        <meta name="twitter:app:id:iphone" content="401626263">
        <meta name="twitter:app:id:ipad" content="401626263">
        <meta name="twitter:app:id:googleplay" content="com.airbnb.android">
        <meta name="twitter:app:url:iphone" content="airbnb://rooms/<?php echo $roomid; ?>">
        <meta name="twitter:app:url:ipad" content="airbnb://rooms/<?php echo $roomid; ?>">
        <meta name="twitter:app:url:googleplay" content="airbnb://rooms/<?php echo $roomid; ?>">


      <meta content="<?php echo $hostname; ?>" name="em:host:name" />
      <meta content="<?php echo $hostpic; ?>" name="em:host:image" />
      <meta content="View all listings in <?php echo $city; ?>" name="em:action:tag" />
      <meta content="#<?php echo $roomid; ?>?af=21215988&amp;c=embedly" name="em:action:p2_url" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="image_src" href="<?php echo $img_result[0]; ?>?aki_policy=x_large">
    <link rel="search" type="application/opensearchdescription+xml" href="#opensearch.xml" title="Airbnb">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f5f5">
    <link rel="apple-touch-icon" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="76x76" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/apple-touch-icon-180x180.png" />
<link rel="icon" sizes="192x192" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/android-icon-192x192.png" />
<link rel="shortcut icon" sizes="76x76" type="image/x-icon" href="//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/logotype_favicon.ico" />


  </head>
  <body class="with-new-header no_wiggle_webkit">
    <a class="screen-reader-only screen-reader-only-focusable skip-to-content" data-hook="skip-to-content" tabindex="1" href="#site-content">
      Skip to content
    </a>

    <span class="screen-reader-only">
      Airbnb
    </span>

    <div id="header" class="airbnb-header new">
  <header class="header--sm show-sm" aria-hidden="true" role="banner">
  <a href="#"
     aria-label="Homepage"
     data-prevent-default
     class="link-reset burger--sm">
    <i class="icon icon-reorder icon-rausch"></i>
    <span class="screen-reader-only">
      Airbnb
    </span>
  </a>
  <div class="title--sm text-center">
      <button class="btn btn-block search-btn--sm search-modal-trigger">
        <i class="icon icon-search icon-gray"></i>
        <span class="search-placeholder--sm">
          Where are you going?
        </span>
      </button>
  </div>
  <div class="action--sm"></div>
  <nav class="nav--sm" role="navigation"></nav>
  <div class="search-modal-container"></div>
</header>


<div class="regular-header regular-header--new clearfix hide-sm" id="new-header">
<div class="comp pull-left">
  <a href="#" class="hdr-btn link-reset belo-container">
    <i class="icon icon-pos--lower icon-rausch icon-airbnb-alt h2 show-login"></i>
    <i class="icon icon-pos--lower icon-rausch icon-airbnb show-logout"></i>
  </a>
</div>


    <div class="comp pull-left search-bar-wrapper">
    <form action="#" class="search-form">
      <div class="search-bar">
        <i class="header-icon icon-search-alt-gray search-icon"></i>
        <input type="text" placeholder="Where are you going?" autocomplete="off" name="location" data-date-placeholder="mm/dd/yyyy" class="location" />
        <input type="hidden" name="source" value="hdr" />
      </div>
    </form>
  </div>



<div class="comp pull-right show-login">
  <a class="no-crawl hdr-btn link-reset header-avatar-trigger needsclick"
     rel="nofollow"
     href="#"
     data-href="#dashboard"
     data-href-host="#trips">
    <span class="value_name margin-right--tiny hide-md"></span>
    <div class="media-photo media-round user-profile-image header-icon icon-profile-alt-gray"></div>
  </a>
</div>

<div id="js-header-help-menu">
  <div class="comp pull-right help-trigger-wrapper no-border background-light-gray ">
    <a class="hdr-btn js-help-toggle link-reset needsclick"
       href="#/help">
      <span class="margin-right--tiny hide-md">Help</span>
      <i class="header-icon icon-lifesaver-alt-gray"></i>
    </a>
  </div>
</div>

<div class="comp pull-right hide" data-behavior="recently-viewed__container">
  <div>
    <a class="no-crawl hdr-btn link-reset "
       href="#"
       data-prevent-default
       data-href="#history#docked-filters"
       data-behavior="recently-viewed__trigger"
    >
      <span class="hide-md margin-right--tiny">
        Recently Viewed
      </span>
      <i class="icon icon-recently-viewed h3 margin-right--small icon-pos--lower icon-gray"></i>
    </a>
  </div>

  <div class="panel  drop-down-menu recently-viewed__dropdown"
    data-behavior="recently-viewed__dropdown">
  </div>
</div>


</div>
</div>
<meta content="{&quot;flags&quot;:{&quot;name&quot;:&quot;flags&quot;,&quot;value&quot;:{&quot;can_see_community&quot;:2,&quot;og_publish&quot;:16,&quot;has_wishlisted&quot;:32,&quot;update_cached&quot;:64,&quot;revert_to_admin&quot;:128,&quot;facebook_connected&quot;:256,&quot;erf_override&quot;:512,&quot;has_search&quot;:1024,&quot;search_help_dropdown&quot;:2048,&quot;has_dates&quot;:4096,&quot;can_send_profile_messages&quot;:32768,&quot;just_logged_in&quot;:65536,&quot;has_been_host&quot;:131072,&quot;should_drop_pellet&quot;:262144,&quot;field_guide_preload&quot;:524288,&quot;is_active_host&quot;:1048576,&quot;is_business_travel_manager&quot;:2097152,&quot;debugging_mode&quot;:4194304,&quot;is_host_referral_nav_bar_link_enabled&quot;:8388608,&quot;should_show_host_header&quot;:16777216,&quot;is_vr_platform_powered_host&quot;:67108864,&quot;can_see_meetups&quot;:134217728,&quot;should_drop_sift_pellet&quot;:268435456,&quot;can_see_groups&quot;:536870912,&quot;has_verified_phone&quot;:1073741824,&quot;has_profile_pic&quot;:2147483648}},&quot;roles&quot;:{&quot;name&quot;:&quot;roles&quot;,&quot;value&quot;:{&quot;is_content_manager&quot;:1048576,&quot;is_stats_admin&quot;:16777216}},&quot;user_attributes&quot;:{&quot;name&quot;:&quot;_user_attributes&quot;}}" id="_bootstrap-user-attr-cookies" />
<meta content="{&quot;axioms_of_identity&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:10},{&quot;name&quot;:&quot;require_axioms&quot;,&quot;buckets&quot;:90}],&quot;hashing_key&quot;:&quot;axioms_of_identity&quot;},&quot;account_activation_flow&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;require_account_activation&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;account_activation_flow&quot;},&quot;account_activation_no_webcam&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;no_webcam_option&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;account_activation_no_webcam&quot;},&quot;inspectlet_on_guest&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:1,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;inspectlet_active&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;inspectlet_on_guest&quot;},&quot;review_highlights&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;show_highlights&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;review_highlights&quot;},&quot;p3_similar_listings_expanding_list_v2&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;treatment&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;p3_similar_listings_expanding_list_v2&quot;},&quot;decimal_star_rating&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;decimal_rating&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;decimal_star_rating&quot;},&quot;similar_listings_new_tab&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;new_tab&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;similar_listings_new_tab&quot;},&quot;p3_long_stay_price_breakdown_v3&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;inline&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;tooltip&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;p3_long_stay_price_breakdown_v3&quot;},&quot;new_add_to_wishlist_modal&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:3,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;wl_modal&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;wl_modal_with_extra_content&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;new_add_to_wishlist_modal&quot;},&quot;p3_photo_slideshow_perf&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;slideshow_photos_early&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;p3_photo_slideshow_perf&quot;},&quot;p3_holdback_business_ready_amenities&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:100,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:50},{&quot;name&quot;:&quot;holdback_brl_amenities&quot;,&quot;buckets&quot;:50}],&quot;hashing_key&quot;:&quot;p3_holdback_business_ready_amenities&quot;},&quot;global_tweaked_recently_viewed&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:0,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;global_recently_viewed&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;global_tweaked_recently_viewed&quot;},&quot;notifications_iteration_v2&quot;:{&quot;subject&quot;:&quot;user&quot;,&quot;buckets&quot;:4,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;control_with_row&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;recent_messages&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;recent_messages_with_row&quot;,&quot;buckets&quot;:null}],&quot;hashing_key&quot;:&quot;notifications_iteration_v2&quot;}}" id="_bootstrap-erf" />
<script src="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/header_cookie.bundle.js" type="text/javascript"></script>
     <div class="flash-container"></div>
    <main id="site-content" role="main">
<div class="subnav-container">
  <div class="subnav book-it show-md" data-sticky="true" data-transition-at="#details" aria-hidden="true">
    <div class="page-container-responsive">
      <div class="pull-left text-contrast subnav-element">
        <div class="va-container va-container-v">
          <div class="va-middle">
            <strong>
              <span class="js-book-it-price-amount h3">
                <?php echo $symbol; ?><?php echo $roomprice; ?>

              </span>
				<span class="per-night">per month</span>
            </strong>
          </div>
        </div>
      </div>

      <div class="js-bookit-btn-container pull-right">
        <button type="submit" class="btn btn-primary btn-large" id="sticky-md-book-it-btn" <?php echo (($active == "2")?"disabled":""); ?> >
          <span class="book-it__btn-text">

		  <?php echo (($active == "2")?"Not available to rent":"Request to Rent"); ?>
          </span>

          <span class="book-it__btn-text--instant">
            <i class="icon icon-bolt icon-beach h4"></i>
           <?php echo (($active == "2")?"Not available to rent":"Instant Rent"); ?>
          </span>
        </button>
      </div>
    </div>
  </div>

  <div data-sticky="true" data-transition-at="#summary" aria-hidden="true" class="subnav section-titles hide-md">
    <div class="page-container-responsive">
      <ul class="subnav-list">
        <li>
          <a href="#photos" aria-selected="true" class="subnav-item">
            Photos
          </a>
        </li>
        <li>
          <a href="#summary" class="subnav-item">
            About this listing
          </a>
        </li>
        <li>
          <a href="#reviews" class="subnav-item">
            Reviews
          </a>
        </li>
        <li>
          <a href="#host-profile" class="subnav-item">
            The Host
          </a>
        </li>
        <li>
          <a href="#neighborhood" class="subnav-item">
            Location
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


<div id="og_pro_photo_prompt" class="container"></div>

<div id="room" itemscope itemtype="http://schema.org/Product">

  <meta itemprop="image" content="<?php echo $img_result[0]; ?>?aki_policy=large">

  <div id="photos" class="with-photos with-modal">
    <img src="<?php echo $img_result[0]; ?>?aki_policy=large" class="hide"
         srcset="<?php echo $img_result[0]; ?>?aki_policy=large 639w, <?php echo $img_result[0]; ?>?aki_policy=xx_large 1440w" alt="">

    <span class="cover-img-container" data-hook="cover-img-container">
      <div class="cover-img show-sm" data-hook="img-sm"
           style="background-image: url(<?php echo $img_result[0]; ?>?aki_policy=large)">
          <div class="link-reset panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
            <span class="h3 text-contrast price-amount js-book-it-price-amount">
              <?php echo $symbol; ?><?php echo $roomprice; ?>

            </span>
          </div>
      </div>
      <div class="cover-img hide-sm" data-hook="img-lg"
           style="background-image:
                  url(<?php echo $img_result[0]; ?>?aki_policy=xx_large)">
      </div>
    </span>

      <div id="launch-p3_photo_slideshow_perf-trebuchet"></div>
    <div id="photo-modal"
         class="modal photo-modal"
         role="dialog"
         aria-hidden="true"
         data-preload-size="5">
      <div class="modal-table">
        <div class="modal-cell">
          <button class="carousel-chevron right text-contrast" data-slideshow-next="true">
            <span class="screen-reader-only">Next</span>
            <i class="icon icon-chevron-right icon-size-4 text-contrast"></i>
          </button>
          <button class="carousel-chevron left" data-slideshow-prev="true">
            <span class="screen-reader-only">Previous</span>
            <i class="icon icon-chevron-left icon-size-4 text-contrast"></i>
          </button>
          <a href="#" class="modal-close" data-behavior="modal-close">
            &times;
            <span class="screen-reader-only">Close</span>
          </a>
          <div class="modal-content">
            <ul class="slideshow-images loading loading-dark">
              <li class="media-photo media-photo-block active">
                <div class="media-cover text-center">
                  <img alt="<?php echo $roomname; ?>" class="carousel-image img-responsive-height" src="<?php echo $img_result[0]; ?>?aki_policy=xx_large" />
                </div>
              </li>
              <li class="media-photo media-photo-block">
                <div class="media-cover text-center">
                  <img alt="<?php echo $roomname; ?>" class="carousel-image img-responsive-height" src="<?php echo $img_result[0]; ?>" />
                </div>
              </li>
            </ul>
            <div class="slideshow-preload hide"></div>
            <div class="slideshow-inline-preload hide">
              <img alt="" src="<?php echo $img_result[0]; ?>" />
                <img alt="<?php echo $roomname; ?>" src="<?php echo $img_result[1]; ?>" />
            </div>
          </div>
          <div class="text-center">
            <figcaption class="slideshow-media-caption media-caption text-center">
              <div class="slideshow-caption-viewport row-space-4">
                <div class="slideshow-caption-container page-container-responsive">
                  <div class="row row-space-2">
                    <div class="col-lg-9">
                      <div class="slideshow-caption text-left">
                      </div>
                      <div class="text-left">
                        <i class="slideshow-professional text-muted hide">
                          Verified Photo
                        </i>
                      </div>
                    </div>
                    <div class="col-lg-3 text-right hide-sm">
                      Show photo list
                      <i class="icon icon-caret-down"></i>
                    </div>
                  </div>
                  <div class="thumbnails-viewport">
                    <div class="thumbnails-slide-container">
                      <ul class="slideshow-thumbnails thumbnails-slide-panel">
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
    </div>

</div>


  <div id="summary" class="panel room-section">
    <div class="page-container-responsive">
      <div class="row">
        <div class="col-lg-8">

				<div class="___iso-html___p3summarybundlejs">
					<div class="summary-component">
						<div class="space-4 space-top-4">
							<div class="row">

								<div class="col-md-3 space-sm-4 text-center space-sm-2">
									<div class="media-photo-badge">
										<a href="#host-profile" class="media-photo media-round"><img alt="shared.user_profile_image" class="host-profile-image" height="115" width="115" src="<?php echo $hostpic; ?>" />
										</a>
									</div>
								</div>
								<div class="col-md-9">
									<h1 class="overflow h3 space-1 text-center-sm"><?php echo (($active == "2")?"<small>(Not available)</small>":""); ?> <?php echo $roomname; ?></h1><span class="hide"><span><a href="#<?php echo $country; ?>"><span><?php echo $country; ?></span>
									</a>
									</span><span><a href="#<?php echo $state; ?>"><span><?php echo $state; ?></span>
									</a>
									</span><span><a href="#<?php echo $city; ?>"><span><?php echo $city; ?></span>
									</a>
									</span>
									</span>
									<div class="space-2 text-muted text-center-sm"><a href="#neighborhood" class="link-reset"><?php echo $city; ?>, <?php echo $state; ?>, <?php echo $country; ?></a><span>   </span>
										<a href="#reviews" class="link-reset hide-sm"></a>
										<div class="star-rating-wrapper">
											<a href="#reviews" class="link-reset hide-sm"></a>
											<div class="star-rating">
												<a href="#reviews" class="link-reset hide-sm"></a>
												<div class="foreground"><a href="#reviews" class="link-reset hide-sm"><span><i class="icon-star icon icon-beach star-rating-icons"></i><i class="icon-star icon icon-beach star-rating-icons"></i><i class="icon-star icon icon-beach star-rating-icons"></i><i class="icon-star icon icon-beach star-rating-icons"></i><i class="icon-star-half icon icon-beach star-rating-icons"></i></span></a>
												</div>
												<a href="#reviews" class="link-reset hide-sm"></a>
												<div class="background"><a href="#reviews" class="link-reset hide-sm"><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><i class="icon-star icon icon-light-gray star-rating-icons"></i><i class="icon-star icon icon-light-gray star-rating-icons"></i><i class="icon-star icon icon-light-gray star-rating-icons"></i><i class="icon-star icon icon-light-gray star-rating-icons"></i></span></a>
												</div>
												<a href="#reviews" class="link-reset hide-sm"></a>
											</div><a href="#reviews" class="link-reset hide-sm"><span class="h6"><small><span>(</span><span>4</span><span>)</span></small></span></a>
										</div>
										<a href="#reviews" class="link-reset hide-sm"></a>
									</div>
									<div class="row row-condensed text-muted text-center">
										<div class="col-sm-3"><i class="icon icon-entire-place icon-size-2"></i>
										</div>
										<div class="col-sm-3"><i class="icon icon-group icon-size-2"></i>
										</div>
										<div class="col-sm-3"><i class="icon icon-rooms icon-size-2"></i>
										</div>
										<div class="col-sm-3"><i class="icon icon-double-bed icon-size-2"></i>
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-3 text-muted text-center hide-sm">
									<a href="#host-profile" class="link-reset text-wrap">
										<?php echo $hostname; ?>
									</a>
								</div>
								<div class="col-md-9">
									<div class="row row-condensed text-muted text-center">
										<div class="col-sm-3"><?php echo $roomname; ?></div>
										<div class="col-sm-3"><?php echo $guests; ?> Guests</div>
										<div class="col-sm-3"><?php echo $bedrooms; ?> Bedrooms</div>
										<div class="col-sm-3"><?php echo $beds; ?> Beds</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


<div class="___iso-state___p3summarybundlejs" data-key="p3summarybundlejs_0" data-meta="{&quot;name&quot;:&quot;p3/summary.bundle.js&quot;}" data-state="{&quot;reviewScore&quot;:87,&quot;breadcrumbDetails&quot;:[{&quot;link_text&quot;:&quot;<?php echo $country; ?>&quot;,&quot;search_text&quot;:&quot;<?php echo $country; ?>&quot;},{&quot;link_text&quot;:&quot;<?php echo $state; ?>&quot;,&quot;search_text&quot;:&quot;<?php echo $state; ?>, <?php echo $country; ?>&quot;},{&quot;link_text&quot;:&quot;<?php echo $city; ?>&quot;,&quot;search_text&quot;:&quot;<?php echo $city; ?>, <?php echo $country; ?>&quot;}],&quot;breadcrumbDetailsSearchPaths&quot;:{&quot;<?php echo $country; ?>&quot;:&quot;#<?php echo $city; ?>&quot;,&quot;<?php echo $state; ?>, <?php echo $country; ?>&quot;:&quot;#<?php echo $city; ?>&quot;,&quot;<?php echo $city; ?>, <?php echo $country; ?>&quot;:&quot;#<?php echo $city; ?>&quot;},&quot;displayUser&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;,&quot;smart_name&quot;:&quot;<?php echo $hostname; ?>&quot;},&quot;summaryTitle&quot;:&quot;<?php echo $roomname; ?>&quot;,&quot;summaryAddress&quot;:&quot;<?php echo $city; ?>, <?php echo $state; ?>, <?php echo $country; ?>&quot;,&quot;summaryIconRow&quot;:[{&quot;class&quot;:&quot;entire-place&quot;,&quot;label&quot;:&quot;<?php echo $roomname; ?>&quot;},{&quot;class&quot;:&quot;group&quot;,&quot;label&quot;:&quot;<?php echo $guests; ?> Guests&quot;},{&quot;class&quot;:&quot;rooms&quot;,&quot;label&quot;:&quot;<?php echo $bedrooms; ?> Bedrooms&quot;},{&quot;class&quot;:&quot;double-bed&quot;,&quot;label&quot;:&quot;<?php echo $beds; ?> Beds&quot;}],&quot;displayReviewSummary&quot;:true,&quot;visibleReviewCount&quot;:4,&quot;superhostPhotoBadgePath&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/superhost_photo_badge.png&quot;}"></div>

        </div>
        <div class="col-lg-4">

<div class="book-it js-book-it">
  <div class="book-it__container js-book-it-container">
    <h4 class="screen-reader-only">
      Request to Rent
    </h4>
    <div class="book-it__price js-price"
         itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <div class="book-it__price-amount js-book-it-price-amount pull-left h3 text-special">
        <?php echo $symbol; ?><?php echo $roomprice; ?>
      </div>
      <div class="book-it__payment-period-container pull-right">


		<div class="js-per-night book-it__payment-period">
          Per Month
          <i id="price-info-tooltip" class="icon icon-question" data-behavior="tooltip"></i>
        </div>


      </div>
      <meta content="<?php echo $symbol; ?>" itemprop='priceCurrency'>
      <meta content="<?php echo $roomprice; ?>" itemprop='price'>
    </div>
    <form action="../book/<?php echo $roomid; ?>" class="js-book-it-form" method="POST">
	<input name="bookform" type="hidden" value="1" />
	<div style="margin:0;padding:0;display:inline"></div>
<?php
$date = new DateTime($start);
//$startmonth = $date->add(new DateInterval('P1M'));
$startmonth = $date; //EDITED
$formatted_startmonth = $startmonth->format('M jS, Y');
$formatted_startmonth = $formatted_startmonth;
$formatted_endmonth = date('M jS, Y', strtotime('+1 month', strtotime($formatted_startmonth)));
$formatted_endmonth = $formatted_endmonth;

$formatted_checkin = date('m/d/Y', strtotime($formatted_startmonth));
$formatted_checkout = date('m/d/Y', strtotime($formatted_endmonth));
$period = 3;
?>
      <div class="panel book-it-panel">
        <div class="panel-body panel-light">
          <div class="row row-condensed space-3">
            <div class="col-md-12">
              <div class="row row-condensed">
				<div class="col-md-12 space-top-sm-1">
					<label for="number_of_months" class="book-it__label">
						Rent Period
					  </label>
					  <div class="select select-block">
						 <select id="number_of_months" name="months" onchange="getval(this.value);" <?php echo (($active == "2")?"disabled":""); ?>>
						<?php for ($i = 1; $i <= 11; $i++) {
							echo '<option value="'.$i.'" '.(($i==$period)?"selected":"").'>'.$i.'  '.(($i==1)?"Month (minimum stay)":"Months").'</option>
							';
						}
						?>
						<?php for ($i = 1; $i <= 10; $i++) {
							$mts = $i * 12;
							echo '<option value="'.$mts.'" '.(($mts==$period)?"selected":"").'>'.$i.'  '.(($i==1)?"Year":"Years").'</option>
							';
						}
						?>
						</select>

						<small class="text-muted">
							No host requirements.
						</small>
					  </div>
					</div>
              </div>
            </div>
            <input class="checkin" id="checkin" name="checkin" placeholder="mm/dd/yyyy" type="hidden" value="<?php echo $formatted_checkin; ?>" />
			<input class="checkout" id="checkout" name="checkout" placeholder="mm/dd/yyyy" type="hidden" value="<?php echo $formatted_checkout; ?>" />
			<script>
				function getval(sel) {
					var checkin = "<?php echo $formatted_checkin; ?>";
					var checkout = moment('<?php echo $formatted_checkin; ?>', 'MM/DD/YYYY').add(sel, 'month');
					var checkout = moment(checkout).format('L');
					var checkout_txt = moment(checkout).format("MMM Do, YYYY");
					$('#checkout').val(checkout);
					$('#checkout_txt').html(checkout_txt);
					 return;
				}
			</script>
			<?php echo $d_input; ?>
          </div>
		  <div class="row row-condensed space-2">
            <div class="col-md-12">
              <div class="row row-condensed">
                <div class="col-sm-6 space-1-sm">
                  <label for="checkout" class="book-it__label">Starting on</label>
				  <span id="checkin_txt"><?php echo $formatted_startmonth; ?></span>
                </div>
				<div class="col-sm-6 space-1-sm">
                  <label for="checkout" class="book-it__label">Ending on</label>
				  <span id="checkout_txt"><?php echo $formatted_endmonth; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="js-book-it-status">
            <div class="js-book-it-enabled clearfix">
              <div class="js-subtotal-container book-it__subtotal hide"></div>
              <div class="js-bookit-btn-container">
                <button type="submit"
                        class="js-book-it-btn btn btn-large btn-primary btn-block" <?php echo (($active == "2")?"disabled":""); ?>>

                  <span class="book-it__btn-text">
                    <?php echo (($active == "2")?"Not available to rent":"Request to Rent"); ?>
                  </span>

                  <span class="book-it__btn-text--instant">
                    <i class="icon icon-bolt text-beach h4 book-it__instant-book-icon"></i>
                    <?php echo (($active == "2")?"Not available to rent":"Instant Rent"); ?>
                  </span>
                </button>
              </div>
            </div>

            <div class="js-book-it-disabled text-center hide">
              <p class="js-book-it-disabled-message icon-rausch">
                A minimum of 3 months stay is required.
              </p>
            </div>
          </div>

          <div class="fancy-dates-message-container va-container va-container-h
                      space-top-3 hide hide-sm">
            <div class="illustration-container va-middle">
              <div class="text">
                <strong>
                  When are you traveling?
                </strong><br/>
                Enter dates for accurate prices and availability.
              </div>
            </div>
          </div>

          <div class="book-it__message-container js-book-it-message hide">
            <hr>
            <div class="listing-desirability hide" data-behavior="occupancy_rate">
              <div class="icon-background-container icon-rare-find-background">
                <div class="book-it__message-text">
                  <strong>This is a rare find.</strong>
                  <div class="media space-top-1">
                    <?php echo $hostname; ?>'s place is usually booked.
                  </div>
                </div>
              </div>
            </div>

            <div class="listing-desirability hide" data-behavior="booking_probability">
              <div class="icon-background-container icon-color-calendar-background">
                <div class="book-it__message-text">
                  <strong>Chances are...</strong>
                  <div class="media space-top-1">
                    <?php echo $hostname; ?>'s place will get booked for these dates.
                  </div>
                </div>
              </div>
            </div>

            <div class="listing-desirability hide" data-behavior="occupancy_rate_alt">
              <div class="icon-background-container icon-color-calendar-background">
                <div class="book-it__message-text">
                  <strong>Chances are...</strong>
                  <div class="media space-top-1">
                    <?php echo $hostname; ?>'s place will get booked for these dates.
                  </div>
                </div>
              </div>
            </div>

            <div class="listing-desirability hide" data-behavior="disaster_relief">
              <div class="icon-background-container">
                <div class="media-body book-it__message-text">
                  <strong>Reserve for disaster relief</strong>
                  <div class="media space-top-1">
                    <?php echo $hostname; ?> has waived the cost of staying here for people displaced by
                  </div>
                </div>
                <div class="media-body icon-donations-heart-background"> </div>
              </div>
            </div>

          </div>
        </div>

        <div class="js-refund-alert alert alert-success alert-left hide"></div>
      </div>

			<input name="roomid" type="hidden" value="<?php echo $roomid; ?>" />
			<input name="roomprice" type="hidden" value="<?php echo $roomprice; ?>" />
      <input name="symbol" type="hidden" value="<?php echo $symbol; ?>" />
			<input name="currency" type="hidden" value="<?php echo $currency; ?>" />
			<input name="payment" type="hidden" value="<?php echo $payment; ?>">
</form>
    <div class="panel wishlist-panel space-top-6 space-md-3 hide-sm">
      <div class="panel-body panel-light">
        <div class="wishlist-wrapper hide-sm">
          <div class="rich-toggle wish_list_button"
     data-hosting_id="<?php echo $roomid; ?>"
     data-img="<?php echo $img_result[0]; ?>"
     data-name="<?php echo $roomname; ?>"
     data-address="<?php echo $city; ?>"
     data-review_count="4 reviews"
     data-host_img="<?php echo $hostpic; ?>"
     data-star_rating="4.5"
       title="Saved 118 times"
     >
  <input type="checkbox" name="wishlist-button" id="wishlist-button">
  <label for="wishlist-button" class="btn btn-block btn-large">
    <span class="rich-toggle-checked">
      <i class="icon icon-heart icon-rausch"></i>
      Saved to Wish List
    </span>
    <span class="rich-toggle-unchecked">
      <i class="icon icon-heart-alt icon-light-gray"></i>
      Save to Wish List
    </span>
  </label>
</div>

        </div>
      </div>
      <div id="box-social-share-widget-container" class="boxed-icons before-js show-lg">
        <div class="social-share-widget p3-box-share-widget p3-share-widget">
  <span class="share-title">
    Share:
  </span>
  <span class="share-triggers">

      <a class="share-btn link-icon"
         data-email-share-link="#/rooms/<?php echo $roomid; ?>/email_listing"
         data-network="email"
         rel="nofollow"
         title="Email"
         href="#">
        <span class="screen-reader-only">Email</span>
        <i class="icon icon-envelope social-icon-size"></i>
      </a>





      <a class="share-btn messenger-btn link-icon messenger-btn"
         data-network="messenger"
         rel="nofollow"
         title="Messenger"
         href="http://www.facebook.com/dialog/send?app_id=138566025676&amp;link=https://www.airbnb.com/rooms/<?php echo $roomid; ?>?bev_ref=1445877041_III4jgGNsjWK644T&amp;s=24&amp;redirect_uri=https://www.airbnb.com/rooms/<?php echo $roomid; ?>?bev_ref=1445877041_III4jgGNsjWK644T&amp;s=24"
         data-messenger-share-link="https://www.airbnb.com/rooms/<?php echo $roomid; ?>?bev_ref=1445877041_III4jgGNsjWK644T&amp;s=24"
         target="_blank">
        <span class="screen-reader-only">Messenger</span>
        <i class="social-icon-size icon icon-facebook-messenger"></i>
      </a>

      <a class="share-btn link-icon"
         data-network="facebook"
         rel="nofollow"
         title="Facebook"
         href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.airbnb.com%2Frooms%2F<?php echo $roomid; ?>%3Fbev_ref%3D1445877041_III4jgGNsjWK644T%26s%3D3"
         target="_blank">
        <span class="screen-reader-only">Facebook</span>
        <i class="icon icon-facebook social-icon-size"></i>
      </a>

      <a class="share-btn link-icon"
         data-network="twitter"
         rel="nofollow"
         title="Twitter"
         href="https://twitter.com/intent/tweet?source=tweetbutton&text=Love+this%21+%22Penthouse+roof+terrace+sleeps+12+in+<?php echo $city; ?>%22+%40airbnb+%23Travel&url=https%3A%2F%2Fwww.airbnb.com%2Frooms%2F<?php echo $roomid; ?>%3Fbev_ref%3D1445877041_III4jgGNsjWK644T%26s%3D4&related=airbnb"
         target="_blank">
        <span class="screen-reader-only">Twitter</span>
        <i class="icon icon-twitter social-icon-size"></i>
      </a>

      <a class="share-btn embedly-btn link-icon"
         data-network="embedly"
         data-embedly-locale="en"
         rel="nofollow"
         title="Embed This Listing"
         href="#">
        <span class="screen-reader-only">Embed This Listing</span>
        <i class="icon icon-code social-icon-size"></i>
      </a>

      <a class="share-btn link-icon"
         data-network="googlePlus"
         rel="nofollow"
         title="Google+"
         href="https://plus.google.com/share?url=https%3A%2F%2Fwww.airbnb.com%2Frooms%2F<?php echo $roomid; ?>%3Fbev_ref%3D1445877041_III4jgGNsjWK644T%26s%3D19"
         target="_blank">
        <span class="screen-reader-only">Google+</span>
        <i class="icon icon-google-plus social-icon-size"></i>
      </a>

      <a class="share-btn link-icon" data-network="pinterest" rel="nofollow" title="Pinterest" href="#">
        <span class="screen-reader-only">Pinterest</span>
        <i class="icon icon-pinterest social-icon-size"></i>
      </a>

    <span class="hide more-btn">
      ···
    </span>
  </span>
  <ul role="tooltip"
    aria-hidden="true"
      data-trigger=".p3-box-share-widget.p3-share-widget .more-btn"
    data-event="hover"
    data-sticky="true"
    class="tooltip tooltip-top-middle list-unstyled more-social-options"
    id="social-share-tooltip">
  </ul>
</div>

      </div>
    </div>
    <div class="other-actions hide-sm text-center">
      <div class="flag-trigger space-top-3 space-3 hide">
        <a href="#" id="flag-for-listing-<?php echo $roomid; ?>" class="link-icon">
          <i class="icon icon-flag h4"></i>
                    <span class="link-icon__text">
                      Report this listing
                    </span>
        </a>
        <div class="already-flagged text-muted row-space-top-2 hide">
			You have reported this listing.
      <a href='#' class='undo_flag'>
        Undo?
      </a>
</div>

      </div>
    </div>
  </div>
</div>

<div class="mobile-bookit-btn-container js-bookit-btn-container panel-btn-sm panel-btn-fixed-sm hide" <?php echo (($active == "2")?"disabled":""); ?>>
  <button class="btn btn-primary btn-block btn-large js-book-it-sm-trigger">
    <span class="book-it__btn-text">
      <?php echo (($active == "2")?"Not available to rent":"Request to Rent"); ?>
    </span>

    <span class="book-it__btn-text--instant">
      <i class="icon icon-bolt icon-beach h4"></i>
      <?php echo (($active == "2")?"Not available to rent":"Instant Rent"); ?>
    </span>
  </button>
</div>

<span class="tooltip tooltip-top-middle"
      role="tooltip"
      data-trigger="#price-info-tooltip"
      data-sticky="true"
      aria-hidden="true">
  <div class="js-monthly-breakdown"></div>
</span>

<span id="service-fee-tip"
      class="tooltip tooltip-top-middle"
      role="tooltip"
      data-trigger="#service-fee-tooltip"
      aria-hidden="true">
  <p class="panel-body fee-no-vat-tooltip">
    This is the first payment required by the host.
  </p>
  <p class="panel-body hide fee-vat-tooltip">
    This is the fee charged by Airbnb and includes VAT
  </p>
  <p class="panel-body hide fee-no-vat-experiment-tooltip">
    This helps us run our platform and offer services like 24/7 support on your trip.
  </p>
</span>

<div id="tax-descriptions-tip"
     class="tooltip tooltip-top-middle"
     role="tooltip"
     data-sticky="true"
     data-trigger="#tax-descriptions-tooltip">
</div>

<div class="modal" role="dialog" aria-hidden="true" id="book-it-sm-modal">
  <div class="modal-table">
    <div class="modal-cell">
      <div class="modal-content">
        <div class="panel-header">
          <a href="#" class="modal-close" data-behavior="modal-close">
            &times;
            <span class="screen-reader-only">Close</span>
          </a>
          Request to Book
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>

  <div id="details" class="details-section webkit-render-fix">
    <div class="page-container-responsive">
      <div class="row">
        <div class="col-lg-8 js-details-column" id="details-column">

<div class="row-space-8 row-space-top-8">


<div class="___iso-html___p3about_this_listingbundlejs">
    <div>
        <h4 class="row-space-4 text-center-sm"><span>About this listing</span></h4>
        <div>
            <p><span><?php echo nl2br($summary); ?></span></p>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-3 text-muted"><span>The Space</span></div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div><span>Room type:</span><span> </span><strong><?php echo $roomname; ?></strong></div>
                        <div><a href="#<?php echo $city; ?>?type=<?php echo $buildtype; ?>" class="link-reset"><span>Property type:</span><span> </span><strong><?php echo $buildtype; ?></strong></a></div>
                        <div><a href="#<?php echo $city; ?>/<?php echo $buildtype; ?>/large-groups" class="link-reset"><span>Accommodates:</span><span> </span><strong><?php echo $guests; ?></strong></a></div>
                        <div><span>Bedrooms:</span><span> </span><strong><?php echo $bedrooms; ?></strong></div>
                    </div>
                    <div class="col-md-6">
                        <div><span>Bathrooms:</span><span> </span><strong><?php echo $bathrooms; ?></strong></div>
                        <div><span>Beds:</span><span> </span><strong><?php echo $beds; ?></strong></div>
                        <div><span>Check In:</span><span> </span><strong>2:00 pm</strong></div>
                        <div><span>Check Out:</span><span> </span><strong>10:00 am</strong></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"><strong><a href="#house-rules" class="react-house-rules-trigger"><span>House Rules</span></a></strong>
                        <div class="tooltip tooltip-bottom-middle">
                            <div class="panel-body"><strong><span>House Rules</span></strong>
                                <p><span> </span><span>Read the rules before booking</span><span> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row amenities">
            <div class="col-md-3 text-muted"><span>Amenities</span></div>
            <div class="col-md-9 expandable">
                <div class="expandable-content-summary">
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <div class="space-1"><span><i class="icon h3 icon-meal"></i><span>   </span></span><span>Kitchen</span></div>
                                <div class="tooltip tooltip-bottom-middle">
                                    <div class="panel-body"><strong>Kitchen</strong>
                                        <p>Space where guests can cook their own meals</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="space-1"><span><i class="icon h3 icon-internet"></i><span>   </span></span><span>Internet</span></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <div class="space-1"><span><i class="icon h3 icon-tv"></i><span>   </span></span><span>TV</span></div>
                            </div>
                            <div>
                                <div class="space-1"><span><i class="icon h3 icon-essentials"></i><span>   </span></span><span>Essentials</span></div>
                                <div class="tooltip tooltip-bottom-middle">
                                    <div class="panel-body"><strong>Essentials</strong>
                                        <p>Towels, bed sheets, soap, and toilet paper</p>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <hr data-reactid="..8">
		<div class="row">
            <div class="col-md-3 text-muted"><span>Prices</span></div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div><span>Extra people:</span><span> </span><strong>No Charge</strong></div>
                        <div><span>Security Deposit:</span><span></span>
						<strong><?php echo $d_display; ?></strong></div>

                    </div>
                    <div class="col-md-6">
                        <div><span>Cancellation:</span><span> </span><a href="#flexible"><strong>Flexible</strong></a></div>
                    </div>
                </div>
            </div>
        </div>


        <hr /><div class="row">
            <div class="col-md-3 text-muted"><span>Safety Features</span></div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <div class="space-1"><span>Smoke Detector</span></div>
                        </div>
                        <div>
                            <div class="space-1"><span>First Aid Kit</span></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <div class="space-1"><span>Fire Extinguisher</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-3 text-muted"><span>Availability</span></div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6"><strong>No</strong> host requirements.</div>
                    <div class="col-md-6"><a href="#"><strong><span>View Calendar</span></strong></a></div>
                </div>
            </div>
        </div>
    </div>
</div>




    <div class="space-4 space-top-4 show-sm">
    <div class="inline-photo panel-image" >
      <a href="<?php echo $img_result[1]; ?>" class="photo-trigger" data-index="2">
        <img src="<?php echo $img_result[1]; ?>"
             alt="<?php echo $roomname; ?>"
             class="media-photo media-photo-block space-1 space-top-1 img-responsive" />
        <div class="panel-overlay-top-right panel-overlay-label panel-overlay-button-icon">
          <i class="icon icon-full-screen icon-white icon-size-2"></i>
        </div>
</a>    </div>
    <div class="row">
      <div class="col-lg-9">
          <p class="text-muted pull-left"><?php echo $roomname; ?></p>
      </div>
      <div class="col-lg-3">
      </div>
    </div>
  </div>



  <div id="photo-gallery" class="photo-grid row-space-4 row-space-top-4 hide-sm">


      <div class="row featured-height">
        <div class="col-6 row-full-height">
          <a class="photo-grid-photo photo-trigger"
   style="background-image: url(<?php echo $img_result[0]; ?>)"
   href="#"
   data-index="1">
  <img src="<?php echo $img_result[0]; ?>"
       class="hide"
       alt="<?php echo $roomname; ?>">
</a>

        </div>
          <div class="col-6 row-full-height">
            <a class="photo-grid-photo photo-trigger"
   style="background-image: url(<?php echo $img_result[1]; ?>)"
   href="#"
   data-index="2">
  <img src="<?php echo $img_result[1]; ?>"
       class="hide"
       alt="<?php echo $roomname; ?>">
</a>

          </div>
      </div>

      <div class="row supporting-height">
        <div class="col-4 row-full-height">
          <a class="photo-grid-photo photo-trigger" style="background-image: url(<?php echo $img_result[2]; ?>)"
   href="#"
   data-index="3">
  <img src="<?php echo $img_result[2]; ?>"
       class="hide"
       alt="<?php echo $roomname; ?>">
</a>

        </div>

        <div class="col-4 row-full-height">
          <a class="photo-grid-photo photo-trigger"
   style="background-image: url(<?php echo $img_result[3]; ?>)"
   href="#"
   data-index="4">
  <img src="<?php echo $img_result[3]; ?>"
       class="hide"
       alt="<?php echo $roomname; ?>">
</a>

        </div>

          <div class="col-4 row-full-height">
              <div class="media-photo media-photo-block row-full-height">
                <div class="media-cover media-cover-dark">
                  <a class="photo-grid-photo photo-trigger"
   style="background-image: url(//res.cloudinary.com/dguu5sqgh/image/upload/v1508352118/icons/seeall.jpg)"
   href="#"
   data-index="5">
  <img src="//res.cloudinary.com/dguu5sqgh/image/upload/v1508352118/icons/seeall.jpg"
       class="hide"
       alt="<?php echo $roomname; ?>">
</a>

                </div>
                <a class="photo-trigger"
                   href="#"
                   data-index="5">
                  <div class="row row-table row-full-height">
                    <div class="col-12 col-middle text-center text-contrast">
                      <div class="h5">
                        See all 50 photos
                      </div>
                    </div>
                  </div>
                </a>
              </div>
          </div>
      </div>


  </div>


</div>

        </div>
      </div>
    </div>
  </div>

  <div id="reviews" class="room-section webkit-render-fix">
    <div class="panel">
      <div class="page-container-responsive row-space-2">
        <div class="row">
          <div class="col-lg-8">


<div class="___iso-html___p3reviewsbundlejs" data-key="p3reviewsbundlejs_0">

</div>
<div class="___iso-state___p3reviewsbundlejs" data-key="p3reviewsbundlejs_0" data-meta="{&quot;name&quot;:&quot;p3/reviews.bundle.js&quot;}" data-state="{&quot;googleImagePath&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/google-small-logo.png&quot;,&quot;host&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;,&quot;smart_name&quot;:&quot;<?php echo $hostname; ?>&quot;},&quot;listingId&quot;:<?php echo $roomid; ?>,&quot;locale&quot;:&quot;en&quot;,&quot;phrases&quot;:{&quot;shared.Summary&quot;:&quot;Summary&quot;,&quot;shared.Reviews&quot;:&quot;Reviews&quot;,&quot;shared.Google&quot;:&quot;Google&quot;,&quot;p3.Give First Review&quot;:&quot;Stay here and you could give this host their first review!&quot;,&quot;p3.View Other Reviews&quot;:&quot;View Other Reviews&quot;,&quot;+ More (as in, to view more content)&quot;:&quot;+ More&quot;,&quot;p3.No Reviews Yet&quot;:&quot;No Reviews Yet&quot;,&quot;p3.Other Reviews&quot;:&quot;This host has %{smart_count} review for other properties.||||This host has %{smart_count} reviews for other properties.&quot;,&quot;shared.Previous&quot;:&quot;Previous&quot;,&quot;shared.Next&quot;:&quot;Next&quot;,&quot;rooms.v3.reviews.response_from_name&quot;:&quot;Response from %{name}:&quot;,&quot;(not available) as in no reviewer&quot;:&quot;(not available)&quot;,&quot;translate_button.powered by Google (with logo)&quot;:&quot;powered by %{google_logo}&quot;,&quot;page3.show_original_reviews&quot;:&quot;Show original reviews&quot;,&quot;page3.translate_reviews&quot;:&quot;Translate reviews to English&quot;,&quot;page3.translating&quot;:&quot;Translating...&quot;,&quot;p3.reviews.num_guests_mentioned_searched_with_phrase&quot;:&quot;%{smart_count} guest has mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”||||%{smart_count} guests have mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”&quot;,&quot;p3.reviews.search.prompt&quot;:&quot;Press &amp;lsquo;Enter&amp;rsquo; to search&quot;,&quot;p3.reviews.search_over_reviews&quot;:&quot;Search reviews&quot;,&quot;p3.reviews.go_back_all_reviews&quot;:&quot;Back to all reviews&quot;,&quot;p3.reviews.search_returned_no_results&quot;:&quot;None of our guests have mentioned \&quot;%{phrase}\&quot;&quot;,&quot;p3.reviews.search_returned_no_results_for_emphasized_phrase&quot;:&quot;None of our guests have mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”&quot;,&quot;p3.Reviews with smart count&quot;:&quot;%{smart_count} Review||||%{smart_count} Reviews&quot;,&quot;p3.reviews.from_number_of_reviews&quot;:&quot;from %{smart_count} review||||from %{smart_count} reviews&quot;,&quot;ml.preview.this_is_a_preview_of_your_listing&quot;:&quot;This is a preview of your listing.&quot;,&quot;ml.preview.your_space_is_unlisted&quot;:&quot;Your space is unlisted.&quot;,&quot;ml.preview.your_space_is_listed_edit_calendar&quot;:&quot;Your space is listed! %{link_start}Edit your calendar%{link_end} to make sure it shows accurate availability.&quot;,&quot;shared.Close&quot;:&quot;Close&quot;,&quot;ml.preview.edit_preview&quot;:&quot;Edit Listing&quot;,&quot;host_standards.rooms.deactivated_flash&quot;:&quot;Your listing is temporarily deactivated. %{reactivate_link_start}Learn more and reactivate.%{reactivate_link_end}||||Your listings are temporarily deactivated. %{reactivate_link_start}Learn more and reactivate.%{reactivate_link_end}&quot;,&quot;checkin_noun&quot;:&quot;Check-In&quot;,&quot;calendar.host_requires_minimum_nights&quot;:&quot;A minimum of %{smart_count} %{line_break}night stay is required |||| A minimum of %{smart_count} %{line_break}nights stay is required&quot;,&quot;calendar.host_requires_start_day_of_week&quot;:&quot;%{host_name} requires checking in%{line_break} on %{day_of_week_plural}&quot;,&quot;Mondays&quot;:&quot;Mondays&quot;,&quot;Tuesdays&quot;:&quot;Tuesdays&quot;,&quot;Wednesdays&quot;:&quot;Wednesdays&quot;,&quot;Thursdays&quot;:&quot;Thursdays&quot;,&quot;Fridays&quot;:&quot;Fridays&quot;,&quot;Saturdays&quot;:&quot;Saturdays&quot;,&quot;Sundays&quot;:&quot;Sundays&quot;,&quot;calendar.host_requires_no_arrival&quot;:&quot;%{host_name} isn’t available%{line_break} for check in on%{line_break} this date&quot;,&quot;calendar.host_requires_no_departure&quot;:&quot;%{host_name} isn’t available%{line_break} for check out on%{line_break} this date&quot;,&quot;limited_days_available_month&quot;:&quot;Love %{user}&#39;s place? Book soon. There are only &lt;b&gt;%{number_of_days}&lt;/b&gt; available in the next month.&quot;,&quot;simple_view_count_day&quot;:&quot;%{number_of_people} viewed %{user}&#39;s place today&quot;,&quot;simple_view_count_week&quot;:&quot;%{number_of_people} viewed %{user}&#39;s place this week&quot;,&quot;view_count&quot;:&quot;See yourself here? Book soon. &lt;b&gt;%{number_of_people}&lt;/b&gt; viewed %{user}&#39;s place this week.&quot;,&quot;shared.pluralize.person&quot;:&quot;%{smart_count} person||||%{smart_count} people&quot;,&quot;similar_listings&quot;:&quot;Similar Listings&quot;,&quot;no_similar_listings&quot;:&quot;No similar listings available.&quot;,&quot;similar_listings.show more listings button label&quot;:&quot;Show more listings&quot;,&quot;review_highlight_pages&quot;:&quot;%{current_page_num} of %{total_page_num}&quot;,&quot;same_address&quot;:&quot;Same Address&quot;,&quot;distance_away&quot;:&quot;%{distance} away&quot;,&quot;learn_more&quot;:&quot;Learn more&quot;,&quot;accommodation&quot;:&quot;Accommodation&quot;,&quot;service_fee&quot;:&quot;First Payment&quot;,&quot;occupancy_taxes&quot;:&quot;Occupancy Taxes&quot;,&quot;includes_vat&quot;:&quot;(includes VAT)&quot;,&quot;total_amounts&quot;:&quot;Total amounts&quot;,&quot;progress_indicator_caption&quot;:&quot;%{numerator}/%{denominator}: %{caption}&quot;,&quot;neighborhood_singular&quot;:&quot;Neighborhood&quot;,&quot;location_map&quot;:&quot;Location Map&quot;,&quot;host_recommendation&quot;:&quot;Host Recommendation&quot;,&quot;hover_card_title&quot;:&quot;Listing Location&quot;,&quot;review_helpful_count_thousand&quot;:&quot;%{number}k&quot;,&quot;review_helpful_count_million&quot;:&quot;%{number}m&quot;,&quot;p3.mark_review_as_helpful&quot;:&quot;Helpful&quot;,&quot;priv.everyone&quot;:&quot;Everyone&quot;,&quot;priv.only_me&quot;:&quot;Only Me&quot;,&quot;priv.description&quot;:&quot;Who can see this?&quot;,&quot;priv.everyone_description&quot;:&quot;Visible to everyone and included on your public Airbnb profile.&quot;,&quot;priv.only_me_description&quot;:&quot;Visible only to you and not shared anywhere.&quot;,&quot;save_to_wish_list&quot;:&quot;Save to Wish List&quot;,&quot;save_to_wish_list_and_fb&quot;:&quot;Save to Wish List and Facebook Timeline&quot;,&quot;wl_modal.create_new&quot;:&quot;Create new&quot;,&quot;wl_modal.make_a_new&quot;:&quot;Make a new wish list...&quot;,&quot;wl_modal.create&quot;:&quot;Create&quot;,&quot;wl_modal.add_note&quot;:&quot;Add a note&quot;,&quot;wl_modal.post_to_facebook&quot;:&quot;Post to Facebook&quot;,&quot;wl_modal.done&quot;:&quot;Done&quot;,&quot;wl_modal.save&quot;:&quot;Save&quot;,&quot;wl_modal.start_a_wish_list&quot;:&quot;Start a Wish List&quot;,&quot;wl_modal.empty_message&quot;:&quot;Save your favorite listings, compare notes, and start planning your next adventure.&quot;,&quot;wl_modal.wish_list_ideas&quot;:&quot;Wish List Ideas&quot;,&quot;refresh_list&quot;:&quot;Refresh List&quot;,&quot;shared.Remove&quot;:&quot;Remove&quot;,&quot;create_new_wish_list&quot;:&quot;Create New Wish List&quot;,&quot;create_duplicate_new_wish_list_error_message&quot;:&quot;Try a different name! You already have a wish list with that name.&quot;,&quot;new_wishlist_name&quot;:&quot;%{location} Trip&quot;,&quot;general_create_new_wish_list_error_message&quot;:&quot;There was an error creating your wish list.&quot;,&quot;wl_modal.save_confirmation&quot;:&quot;%{smart_count} Wishlist |||| %{smart_count} Wishlists&quot;,&quot;shared.Log_in&quot;:&quot;Log in&quot;,&quot;must_log_in&quot;:&quot;You must log in to continue&quot;,&quot;log_in_to_save&quot;:&quot;Log in to save this to a Wish List.&quot;,&quot;shared.Cancel&quot;:&quot;Cancel&quot;,&quot;sorry_og_photo_error&quot;:&quot;Sorry, there was an error trying to publish your photos.  Please refresh the page and try again.&quot;,&quot;wishlist_button_tooltip&quot;:&quot;Save this listing to review later.&quot;,&quot;instant_book&quot;:&quot;Instant Book&quot;,&quot;instant_book_tooltip&quot;:&quot;Book Instantly&quot;,&quot;book_now&quot;:&quot;Book Now&quot;,&quot;per_night&quot;:&quot;<?php if($nightly == false) { echo 'Per Month'; } else { echo 'Per Night'; } ?>&quot;,&quot;per_month&quot;:&quot;Per month&quot;,&quot;total&quot;:&quot;Total&quot;,&quot;geocoding_unsuccessful&quot;:&quot;We couldn’t find any location that matched your query. Try a different city, address, or landmark.&quot;,&quot;too_many_filters&quot;:&quot;We couldn’t find any results that matched your criteria, but tweaking your search may help. Here are some ideas:&quot;,&quot;remove_filters&quot;:&quot;Remove some filters.&quot;,&quot;expand_search&quot;:&quot;Expand the area of your search.&quot;,&quot;search_specific&quot;:&quot;Search for a city, address, or landmark.&quot;,&quot;see_this_listing&quot;:&quot;See This Listing&quot;,&quot;search_tooltip_instant_book_faster_booking&quot;:&quot;Look for the lightning bolt for faster booking&quot;,&quot;show_original_description&quot;:&quot;Show original description&quot;,&quot;show_original_reviews&quot;:&quot;Show original reviews&quot;,&quot;translate_disclaimer&quot;:&quot;Automatic translations use Google Translate and may not be completely accurate.&quot;,&quot;translate_this_description&quot;:&quot;Translate this description to English&quot;,&quot;translate_reviews&quot;:&quot;Translate reviews to English&quot;,&quot;reviews_ordered_by_language_announcement&quot;:&quot;Showing reviews in English first&quot;,&quot;translating&quot;:&quot;Translating...&quot;,&quot;long_term&quot;:&quot;Long Term&quot;,&quot;interactionContacted&quot;:&quot;You contacted them on %{date}&quot;,&quot;interactionReceived&quot;:&quot;You received a reply on %{date}&quot;,&quot;interactionViewMessage&quot;:&quot;View message&quot;,&quot;completeBooking&quot;:&quot;Complete Booking&quot;,&quot;response_from_you&quot;:&quot;Response from you:&quot;,&quot;error_saving_your_response&quot;:&quot;Sorry, there has been an error replying to this review.&quot;,&quot;response_tooltip_title&quot;:&quot;If you disagree with this review or would like to address concerns raised by the user, you may leave a response. Please be sure to follow our Review Guidelines.&quot;,&quot;First Payment&quot;:&quot;First Payment&quot;,&quot;Deposit&quot;:&quot;Deposit&quot;,&quot;<?php if($nightly == false) { echo 'Price per month'; } else { echo 'Price per night'; } ?> x <?php if($nightly == false) { echo 'months'; } else { echo 'nights'; } ?>&quot;:&quot;%{basePricePerNight} x %{smart_count} <?php if($nightly == false) { echo 'month'; } else { echo 'night'; } ?> |||| %{basePricePerNight} x %{smart_count} nights&quot;,&quot;TOTAL&quot;:&quot;TOTAL&quot;,&quot;Total&quot;:&quot;Total&quot;,&quot;hostCancelCouponAlert&quot;:&quot;When your booking is accepted, we’ll refund the %{price_start}%{refund_price}%{price_end} left over from your canceled reservation.&quot;,&quot;fuzzy listing tooltip&quot;:&quot;The listing is located in this area. When you book, you&#39;ll receive the exact address.&quot;,&quot;see_all_n_photos&quot;:&quot;See all %{num_photos} photos&quot;,&quot;More&quot;:&quot;More&quot;,&quot;Report, as in report a listing&quot;:&quot;Report&quot;,&quot;not_licensed_to_provide_booking_service&quot;:&quot;We&#39;ve determined your location to be in Romania. We are not licensed to provide booking services for this listing.&quot;,&quot;profile_pic_uploader.take_photo&quot;:&quot;Take Photo&quot;,&quot;profile_pic_uploader.upload_photo&quot;:&quot;Upload Photo&quot;,&quot;profile_pic_uploader.connect_facebook&quot;:&quot;Use Facebook&quot;,&quot;profile_pic_uploader.take_or_upload_photo&quot;:&quot;Take or upload a photo&quot;,&quot;profile_pic_uploader.confirm your photo&quot;:&quot;Confirm your photo&quot;,&quot;profile_pic_uploader.make sure your face is visible&quot;:&quot;Make sure your face is clearly visible in the photo.&quot;,&quot;profile_pic_uploader.save and continue&quot;:&quot;Save and Continue&quot;,&quot;profile_pic_uploader.smile&quot;:&quot;Smile!&quot;,&quot;profile_pic_uploader.error&quot;:&quot;There was an error uploading your picture. Please try again.&quot;,&quot;profile_pic_upsell.upload_error_alert&quot;:&quot;We couldn&#39;t upload your photo. Please try again.&quot;,&quot;profile_pic_uploader.change photo&quot;:&quot;Change Photo&quot;,&quot;shared.Continue&quot;:&quot;Continue&quot;,&quot;profile_pic_uploader.is_this_you&quot;:&quot;How Does This Look?&quot;,&quot;profile_pic_uploader.choose_other&quot;:&quot;Choose Other&quot;,&quot;shared.save&quot;:&quot;Save&quot;,&quot;profile_pic_uploader.file_type_error&quot;:&quot;This file type is unsupported. This tool supports PNG and JPG files.&quot;,&quot;profile_pic_upsell.add_photo_header&quot;:&quot;Get Started With a Profile Photo&quot;,&quot;profile_pic_upsell.add_photo_subheader&quot;:&quot;Add a photo so potential hosts can put a face to the name once you&#39;re ready to book.&quot;,&quot;profile_pic_upsell.connect_facebook&quot;:&quot;Connect With Facebook&quot;,&quot;profile_pic_upsell.connect_weibo&quot;:&quot;Connect With Weibo&quot;,&quot;profile_pic_upsell.connect_google&quot;:&quot;Connect With Google&quot;,&quot;profile_pic_upsell.upload_a_photo&quot;:&quot;Upload a Photo&quot;,&quot;profile_pic_upsell.decline_add_photo&quot;:&quot;Not Now&quot;,&quot;profile_pic_upsell.after_pic_upload_welcome_header&quot;:&quot;Looking Good, %{guest_first_name}!&quot;,&quot;profile_pic_upsell.skipped_pic_upload_welcome_header&quot;:&quot;Welcome to Airbnb, %{guest_first_name}!&quot;,&quot;shared.Welcome_to_Airbnb&quot;:&quot;Welcome to Airbnb!&quot;,&quot;profile_pic_upsell.glad_youre_here&quot;:&quot;We&#39;re glad you&#39;re here.&quot;,&quot;profile_pic_upsell.start_by_completing_profile&quot;:&quot;Now, start by completing your profile and telling the Airbnb community more about yourself.&quot;,&quot;profile_pic_upsell.help_community_get_to_know_you&quot;:&quot;Help the Airbnb community get to know you by completing your profile.&quot;,&quot;profile_pic_upsell.easier_to_book&quot;:&quot;It&#39;s easier to book a place when hosts know who you are.&quot;,&quot;profile_pic_upsell.recommend_complete_profile&quot;:&quot;We recommend completing your profile before booking your first stay.&quot;,&quot;profile_pic_upsell.complete_your_profile&quot;:&quot;Complete Your Profile&quot;,&quot;profile_pic_upsell.maybe_later&quot;:&quot;Maybe Later&quot;,&quot;Message Sent!&quot;:&quot;Message Sent!&quot;,&quot;profile_pic_upsell.Looking_Good_name&quot;:&quot;Looking Good, %{guest_first_name}!&quot;,&quot;profile_pic_upsell.Looking_Good&quot;:&quot;Looking Good!&quot;,&quot;profile_pic_upsell.recommend_booking_before_first_stay&quot;:&quot;We recommend completing your profile before booking your first stay.&quot;,&quot;welcome.tell_us_about_yourself&quot;:&quot;Tell Us About Yourself&quot;,&quot;smart_banner.title&quot;:&quot;Airbnb for iOS&quot;,&quot;smart_banner.Install&quot;:&quot;Install&quot;,&quot;smart_banner.Open in App&quot;:&quot;Open in App&quot;,&quot;smart_banner.Always be ready&quot;:&quot;Always be ready&quot;,&quot;smart_banner.Find your next adventure&quot;:&quot;Find your next adventure, even if you&#39;re on the go.&quot;},&quot;reviewDetails&quot;:{&quot;display_review_summary&quot;:true,&quot;host_other_property_review_count&quot;:1,&quot;review_count&quot;:4,&quot;review_score&quot;:87,&quot;review_summary&quot;:[{&quot;label&quot;:&quot;Accuracy&quot;,&quot;value&quot;:9},{&quot;label&quot;:&quot;Communication&quot;,&quot;value&quot;:10},{&quot;label&quot;:&quot;Cleanliness&quot;,&quot;value&quot;:10},{&quot;label&quot;:&quot;Location&quot;,&quot;value&quot;:10},{&quot;label&quot;:&quot;Check In&quot;,&quot;value&quot;:10},{&quot;label&quot;:&quot;Value&quot;,&quot;value&quot;:9}]},&quot;reviews&quot;:[{&quot;comments&quot;:&quot;Lovely apartment, great location! Couldn&#39;t fault it at all. Host was lovely, easy to reach if needed. Nothing bad to say about this apartment!&quot;,&quot;id&quot;:47753927,&quot;localized_date&quot;:&quot;September 2017&quot;,&quot;response&quot;:null,&quot;reviewee&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;},&quot;reviewer&quot;:{&quot;host_name&quot;:&quot;Rhiannon&quot;,&quot;id&quot;:21713371,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/21713371&quot;,&quot;profile_pic_path&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/images/Rhiannon.jpg?&quot;}},{&quot;comments&quot;:&quot;Lovely flat, great host, great location. <?php echo $hostname; ?> is a wonderful and well organised host. She took the time to get to know our itinerary and ensure that our check-in and check-out goes smoothly. The property is immaculate, spacious, modern and extremely clean.\r\n&quot;,&quot;id&quot;:38507709,&quot;localized_date&quot;:&quot;May 2017&quot;,&quot;response&quot;:null,&quot;reviewee&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;},&quot;reviewer&quot;:{&quot;host_name&quot;:&quot;Katie&quot;,&quot;id&quot;:34887243,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/34887243&quot;,&quot;profile_pic_path&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/images/Katie.jpg?&quot;}},{&quot;comments&quot;:&quot;<?php echo $hostname; ?> is an amazing host. The flat looks exactly as described and it is so sunny, warm, cosy, tidy and Very clean . <?php echo $hostname; ?> is extremely caring host, she made sure we are all settled in, she gave us information about the neighbourhood, the shops, the restaurants, etc. <?php echo $hostname; ?> made me and my family, to feel very comfortable. Fantastic communication and all questions answered even before asked. <?php echo $hostname; ?> thank you so much for being such an amazing host. Very highly recommended from me and my family.&quot;,&quot;id&quot;:34636202,&quot;localized_date&quot;:&quot;June 2017&quot;,&quot;response&quot;:null,&quot;reviewee&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;},&quot;reviewer&quot;:{&quot;host_name&quot;:&quot;Gemma&quot;,&quot;id&quot;:30329498,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/30329498&quot;,&quot;profile_pic_path&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/images/Gemma.jpg?&quot;}},{&quot;comments&quot;:&quot;<?php echo $hostname; ?> was a fantastic host, the best I've ever dealt with on Airbnb. The place was as per the pictures and description provided. &quot;,&quot;id&quot;:34533660,&quot;localized_date&quot;:&quot;June 2017&quot;,&quot;response&quot;:null,&quot;reviewee&quot;:{&quot;host_name&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;id&quot;:16899355,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/16899355&quot;,&quot;profile_pic_path&quot;:&quot;<?php echo $hostpic; ?>&quot;},&quot;reviewer&quot;:{&quot;host_name&quot;:&quot;Nadia&quot;,&quot;id&quot;:16149897,&quot;is_superhost&quot;:true,&quot;last_name&quot;:&quot;prune_me&quot;,&quot;profile_path&quot;:&quot;#/users/show/16149897&quot;,&quot;profile_pic_path&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/images/Nadia.jpg?&quot;}}],&quot;superhostPhotoBadgePath&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/icons/superhost_photo_badge.png&quot;}"></div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="host-profile" class="room-section webkit-render-fix">
    <div class="page-container-responsive space-top-8 space-8">
      <div class="row">
        <div class="col-lg-8">


    <h4 class="row-space-4 text-center-sm">
      About the Host, <?php echo $hostname; ?>
    </h4>


<div class="row">
  <div class="col-md-3 text-center">

    <a href="#/users/show/16899355" class="media-photo media-round"><img alt="<?php echo $hostname; ?>" data-pin-nopin="true" height="90" src="<?php echo $hostpic; ?>" title="<?php echo $hostname; ?>" width="90" /></a>
  </div>

  <div class="col-md-9">


      <div class="expandable expandable-trigger-more space-2">
        <div class="expandable-content">
          <p>Hi I'm a fun and out going person who loves living life to the max! </p>

          <div>
            <a href="#/users/show/16899355"><strong>View full profile</strong></a>
          </div>
          <div class="expandable-indicator"></div>
        </div>
            <a class="expandable-trigger-more" href="#">
      <strong>+ More</strong>
    </a>

      </div>


    <div class="row row-condensed space-2">

      <div class="col-md-6">
          <div><?php echo $city; ?>, <?php echo $country; ?></div>
          <div>
            Member since June 2014
          </div>
      </div>

      <div class="col-md-6">
          Response rate:
          <strong>99%</strong>
          <small class="response-details text-muted hide">
            (past 30 days)
          </small>
          <div>
            Response time:
            <strong>within an hour</strong>
          </div>
      </div>

    </div>

    <div id="contact_wrapper">
      <button class="btn btn-small btn-primary" id="host-profile-contact-btn" <?php echo (($active == "2")?"disabled":""); ?>>
        Contact Host
      </button>
    </div>

  </div>

</div>



  <hr class="space-4 space-top-4" />
    <div class="row">
      <div class="col-md-3">
            <div class="text-muted">
      Trust
    </div>

      </div>
      <div class="col-md-9">
        <div class="row row-condensed">
            <div class="col-sm-4 col-md-3">
              <a class="link-reset" rel="nofollow"
  href="#/users/show/16899355#reviews">

  <div class="text-center text-wrap"
    >


      <div class="badge-pill h3">
        <span class="badge-pill-count">5</span>
      </div>
    <div class="row-space-top-1">Reviews</div>
  </div>
</a>
<span></span>

            </div>
            <div class="col-sm-4 col-md-3">
              <a class="link-reset" rel="nofollow"
  >

  <div class="text-center text-wrap"
    id="verified-id-icon">

      <img alt="Verified!" height="50" src="https://raw.githubusercontent.com/serge72mt/rooms/master/images/verified_id_50_ffvber.png" width="62" />
    <div class="row-space-top-1">Verified ID</div>
  </div>
</a>
<span></span>

            </div>
        </div>

        <div role="tooltip"
     aria-hidden="true"
     data-trigger="#verified-id-icon"
     data-sticky="true"
     class="tooltip tooltip-bottom-middle tooltip-panel-light tooltip-panel-collapse fade"
     id="verifications-tooltip">
  <div class="panel-header panel-header-gray">
    Verified ID
  </div>
  <div class="panel-padding panel-body">
    <p>
    <?php echo $hostname; ?> has completed online and offline ID verification.
    </p>
    <p>
      <a href="#/help/article/450">
        Learn more &raquo;
      </a>
    </p>
  </div>
</div>

      </div>
    </div>

        </div>
      </div>
    </div>
  </div>


<div id="neighborhood" class="room-section"></div>


  <div id="similar-listings"></div>

    <div id="more-stay-options" class="space-6 space-top-4">
    <div class="page-container-responsive">
          <h4 class="row-space-4 text-center-sm">
      Explore other options in and around <?php echo $city; ?>
    </h4>

        <div class='row space-2'>
          <div class='col-sm-12'>
            More places to stay in <?php echo $city; ?>:   <a class="text-muted" href="#/s/<?php echo $city; ?>--?type=house">
    Houses
  </a> &middot;
  <a class="text-muted" href="#/s/<?php echo $city; ?>--?type=bnb">
    Bed & Breakfasts
  </a> &middot;
  <a class="text-muted" href="#/s/<?php echo $city; ?>--?type=loft">
    Lofts
  </a> &middot;
  <a class="text-muted" href="#/s/<?php echo $city; ?>--?type=villa">
    Villas
  </a> &middot;
  <a class="text-muted" href="#/s/<?php echo $city; ?>--?type=condominium">
    Condominiums
  </a>

          </div>
        </div>
        <div class='row space-2'>
          <div class='col-sm-12'>
            People also stay in   <a class="text-muted" href="#/s/Liverpool?type=<?php echo $buildtype; ?>">
    Liverpool
  </a> &middot;
  <a class="text-muted" href="#/s/York--?type=<?php echo $buildtype; ?>">
    York
  </a> &middot;
  <a class="text-muted" href="#/s/Birmingham--?type=<?php echo $buildtype; ?>">
    Birmingham
  </a> &middot;
  <a class="text-muted" href="#/s/Leeds--?type=<?php echo $buildtype; ?>">
    Leeds
  </a> &middot;
  <a class="text-muted" href="#/s/Cheltenham--?type=<?php echo $buildtype; ?>">
    Cheltenham
  </a>

          </div>
        </div>
    </div>
  </div>

</div>

    </main>

      <div id="footer" class="container-brand-dark footer-surround footer-container">
        <footer class="page-container-responsive">
  <div class="row row-condensed">

    <div class="col-md-3 col-md-offset-1">
      <div class="language-curr-picker clearfix space-2">
        <div class="language-picker"></div>
          <div class="currency-picker"></div>
        <div class="cx-number"></div>
      </div>

    </div>

    <div class="col-md-2 col-md-offset-1 hide-sm">
      <h2 class="h5">Company</h2>
      <ul class="list-layout">
        <li><a href="#/about/about-us" class="link-contrast">About</a></li>
        <li><a href="#/careers" class="link-contrast">Careers</a></li>
        <li><a href="#/press/news" class="link-contrast">Press</a></li>
        <li><a href="http://blog.airbnb.com" class="link-contrast">Blog</a></li>
        <li><a href="#/help" class="link-contrast">Help</a></li>
        <li><a href="#/policies" class="link-contrast">Policies</a></li>
        <li><a href="#/disaster-response" class="link-contrast">Disaster Response</a></li>
        <li><a href="#/terms" class="link-contrast">Terms & Privacy</a></li>
      </ul>
    </div>

    <div class="col-md-2 hide-sm">
      <h2 class="h5">Discover</h2>
      <ul class="list-layout">
        <li><a href="#/trust" class="link-contrast">Trust & Safety</a></li>
        <li><a href="#/invite?r=6" class="link-contrast">Invite Friends</a></li>
          <li><a href="#/gift" class="link-contrast">Gift Cards</a></li>
        <li><a href="#/wishlists/airbnb_picks" class="link-contrast">Airbnb Picks</a></li>
        <li><a href="#/mobile" class="link-contrast">Mobile</a></li>
        <li><a href="https://www.airbnbnyc.com" class="link-contrast">Support NYC</a></li>
        <li><a href="#/business/traveler?sref=ft" class="link-contrast">Business Travel</a></li>
        <li><a href="#/sitemaps" class="link-contrast">Site Map</a></li>
      </ul>
    </div>

    <div class="col-md-2 hide-sm">
      <h2 class="h5">Hosting</h2>
      <ul class="list-layout">
        <li><a href="#/host" class="link-contrast">Why Host</a></li>

        <li><a href="#/hospitality" class="link-contrast">Hospitality</a></li>
        <li><a href="#/help/responsible-hosting" class="link-contrast">Responsible Hosting</a></li>
        <li><a href="#/home-safety" class="link-contrast">Home Safety</a></li>
      </ul>
    </div>
  </div>

  <div class="col-sm-12 space-4 space-top-4 show-sm">
    <ul class="list-layout list-inline text-center h5">
      <li><a href="#/about/about-us" class="link-contrast">About</a></li>
      <li><a href="#/careers" class="link-contrast">Careers</a></li>
      <li><a href="#/press/news" class="link-contrast">Press</a></li>
      <li><a href="http://blog.airbnb.com" class="link-contrast">Blog</a></li>
      <li><a href="#/terms" class="link-contrast">Terms & Privacy</a></li>
    </ul>
  </div>

  <hr class="footer-divider space-top-8 space-4 hide-sm">

  <div class="text-center">
    <h2 class="h5 space-4 hide-sm">Join Us On</h2>
    <ul class="list-layout list-inline" itemscope itemtype="http://schema.org/Organization">
      <link itemprop="url" href="https://www.airbnb.com">
      <meta itemprop="logo" content="//rawgit.com/serge72mt/rooms/master/airbnb/static/logos/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png">
        <li>
          <a href="https://www.facebook.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
            <span class="screen-reader-only">Facebook</span>
            <i class='icon footer-icon icon-facebook'></i>
</a>        </li>
        <li>
          <a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" rel="publisher" target="_blank">
            <span class="screen-reader-only">Google+</span>
            <i class='icon footer-icon icon-google-plus'></i>
</a>        </li>

        <li>
          <a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
            <span class="screen-reader-only">Twitter</span>
            <i class='icon footer-icon icon-twitter'></i>
</a>        </li>

      <li>
        <a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
          <span class="screen-reader-only">LinkedIn</span>
          <i class='icon footer-icon icon-linkedin'></i>
</a>      </li>

        <li>
          <a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
            <span class="screen-reader-only">Pinterest</span>
            <i class='icon footer-icon icon-pinterest'></i>
</a>        </li>
        <li>
          <a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
            <span class="screen-reader-only">YouTube</span>
            <i class='icon footer-icon icon-youtube'></i>
</a>        </li>
        <li>
          <a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
            <span class="screen-reader-only">Instagram</span>
            <i class='icon footer-icon icon-instagram'></i>
</a>        </li>
    </ul>
    <div class="space-top-2 text-muted">
      &copy; Airbnb, Inc.
    </div>
  </div>
</footer>

      </div>

    <div id="gmap-preload" class="hide"></div>

<meta content="{&quot;canonical_host&quot;:&quot;localhost&quot;,&quot;language&quot;:&quot;en&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;api_config&quot;:{&quot;baseUrl&quot;:&quot;#/api&quot;,&quot;key&quot;:&quot;d306zoyjsyarp7ifhu67rjxn52tv0t20&quot;},&quot;deep_link&quot;:null,&quot;tracking_context&quot;:{&quot;source&quot;:&quot;monorail&quot;,&quot;platform&quot;:&quot;js&quot;,&quot;version&quot;:&quot;b002f3cf94041cfea9f171490c08a0c46e537db8&quot;,&quot;controller&quot;:&quot;rooms&quot;,&quot;action&quot;:&quot;show&quot;,&quot;req_uuid&quot;:&quot;9300abac-f162-4217-94cd-84a07158b84c&quot;,&quot;shardset&quot;:&quot;a0,a1,a2&quot;},&quot;no_flash_alerts&quot;:null,&quot;google_maps_url&quot;:&quot;https://maps.googleapis.com/maps/api/js?key=<?php echo $apikey; ?>&callback=initialize&quot;,&quot;airbnb_open_street_map_js_url&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/vendor/mapbox-2.2.1.min.js&quot;,&quot;airbnb_open_street_map_css_url&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/vendor/mapbox-2.2.1.min.css&quot;,&quot;sift_key&quot;:&quot;5d704de7e8&quot;,&quot;pellet_id&quot;:&quot;kfgn8s24&quot;}" id="_bootstrap-layout-init" />
<meta content="{&quot;language&quot;:&quot;en&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;country&quot;:&quot;UK&quot;,&quot;tld_country&quot;:&quot;UK&quot;,&quot;currencies&quot;:{&quot;EUR&quot;:{&quot;symbol&quot;:&quot;&amp;euro;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;€&quot;,&quot;position&quot;:&quot;special&quot;}},&quot;GBP&quot;:{&quot;symbol&quot;:&quot;&amp;pound;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;£&quot;}},&quot;USD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null}},&quot;current_locale_name&quot;:&quot;English&quot;,&quot;languages&quot;:[{&quot;locale_name&quot;:&quot;English&quot;,&quot;locale&quot;:&quot;en&quot;}]}" id="_bootstrap-i18n-init" />
<meta content="{}" id="_bootstrap-facebook-init" />

<meta content="{}" id="_bootstrap-javascript_paths" />

<meta content="&quot;google&quot;" id="_bootstrap-map_provider" />
<meta content="{&quot;book_it_color_experiment_v2&quot;:true,&quot;p3.display_review_highlights&quot;:true,&quot;p3.hide_helpful_reviews_button&quot;:true,&quot;p3.similar_listings_expanding_list&quot;:false,&quot;p3.show_review_search&quot;:false,&quot;decimal_star_rating&quot;:true,&quot;new_add_to_wishlist_modal&quot;:false}" id="_bootstrap-trebuchet" />


<meta content="{&quot;locale&quot;:&quot;en&quot;,&quot;hostingId&quot;:<?php echo $roomid; ?>,&quot;isMonthly&quot;:false,&quot;airEventData&quot;:{&quot;page&quot;:&quot;p3&quot;,&quot;hosting_id&quot;:<?php echo $roomid; ?>,&quot;visible_review_count&quot;:4,&quot;friend_count&quot;:0,&quot;person_capacity&quot;:<?php echo $guests; ?>,&quot;price&quot;:<?php echo $roomprice; ?>,&quot;saved_to_wishlist_count&quot;:118,&quot;reponse_rate_shown&quot;:0.99,&quot;response_time_shown&quot;:360.0,&quot;guest_satisfaction_overall&quot;:89,&quot;accuracy_rating&quot;:9,&quot;cleanliness_rating&quot;:10,&quot;checkin_rating&quot;:10,&quot;communication_rating&quot;:10,&quot;location_rating&quot;:10,&quot;value_rating&quot;:9,&quot;picture_count&quot;:<?php echo $img_num; ?>,&quot;cancel_policy&quot;:5,&quot;amenities&quot;:[1,3,4,6,8,9,21,25,28,30,31,32,33,34,35,37,39,40],&quot;instant_book_possible&quot;:true,&quot;utc_offset&quot;:0,&quot;time_since_last_calendar_update&quot;:2164.107569046,&quot;room_type&quot;:&quot;<?php echo $roomtype; ?>&quot;,&quot;bed_type&quot;:&quot;Real Bed&quot;},&quot;staggered_price&quot;:0,&quot;numPhotos&quot;:<?php echo $img_num; ?>,&quot;minNights&quot;:3,&quot;calendarLastUpdated&quot;:&quot;<?php echo date("Y-m-d"); ?>&quot;,&quot;photoData&quot;:[<?php echo $firstimg; ?>,<?php for( $i = 1; $i < $img_num; $i++) { $din = $i+1;
$caption = "&quot;caption&quot;:&quot;".$roomname."&quot;,&quot;caption_formatted&quot;:&quot;".$din."/".$img_num.": ".$roomname."&quot;,";
echo "{".$caption."&quot;url&quot;:&quot;".$img_result[$i]."&quot;,&quot;thumbnail_url&quot;:&quot;".$img_result[$i]."&quot;,&quot;professional&quot;:true,&quot;first&quot;:false}";
if($i == $num) { echo ""; } else { echo ","; }
} ?>],&quot;ajaxLwlbContact&quot;:&quot;/rooms/ajax_lwlb_contact/<?php echo $roomid; ?>&quot;,&quot;videoProfile&quot;:false,&quot;hostFirstName&quot;:&quot;<?php echo $hostname; ?>&quot;,&quot;hostId&quot;:16899355,&quot;hostProfilePicUrl&quot;:&quot;<?php echo $hostpic; ?>&quot;}" id="_bootstrap-room_options" />
<meta content="{&quot;hosting&quot;:{&quot;id&quot;:<?php echo $roomid; ?>,&quot;offset_lat&quot;:<?php echo $latitude; ?>,&quot;offset_lng&quot;:<?php echo $longitude; ?>},&quot;map_url&quot;:&quot;https://maps.googleapis.com/maps/api/staticmap?markers=%2C&amp;size&amp;zoom=14&quot;,&quot;place_recommendations&quot;:[{&quot;place&quot;:{&quot;address&quot;:&quot;Lever Street&quot;,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.484018&quot;,&quot;lng&quot;:&quot;-2.231589&quot;,&quot;state&quot;:&quot;Lancashire&quot;,&quot;zipcode&quot;:&quot;M1 1FJ&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Bem Brasil - Northern Quarter&quot;,&quot;type&quot;:&quot;restaurant&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_restaurant-cff601015f248e07f44e0331c29064f8.png&quot;,&quot;scrubbed_contact&quot;:&quot;Like meat. Then this is for you. An Authentic Brazilian restaurant, great meat, sleds and cocktails.&quot;},{&quot;place&quot;:{&quot;address&quot;:&quot;Jersey St&quot;,&quot;city&quot;:null,&quot;lat&quot;:&quot;53.484919&quot;,&quot;lng&quot;:&quot;-2.225953&quot;,&quot;state&quot;:&quot;England&quot;,&quot;zipcode&quot;:&quot;M4 6JG&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Sankeys&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;if you like to party this is one of <?php echo $city; ?> most iconic nightclubs. People from all over the country travel to go.&quot;},{&quot;place&quot;:{&quot;address&quot;:&quot;Cassidy Close&quot;,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.486946&quot;,&quot;lng&quot;:&quot;-2.228928&quot;,&quot;state&quot;:&quot;Greater <?php echo $city; ?>&quot;,&quot;zipcode&quot;:&quot;M4 5HU&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;W Wing Yip (<?php echo $city; ?>) Ltd&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;<?php echo $city; ?> largest Chinese restaurant and supermarket. Literally across the road. Its well worth a visit.&quot;},{&quot;place&quot;:{&quot;address&quot;:&quot;Church Street, Northern Quarter,&quot;,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.482518&quot;,&quot;lng&quot;:&quot;-2.236197&quot;,&quot;state&quot;:null,&quot;zipcode&quot;:&quot;M4 1PW&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Afflecks Palace&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;The most iconic and eclectic store in <?php echo $city; ?>. This store has been round for years and is now somewhat of a tourist spot in <?php echo $city; ?>&quot;},{&quot;place&quot;:{&quot;address&quot;:null,&quot;city&quot;:null,&quot;lat&quot;:&quot;53.48007&quot;,&quot;lng&quot;:&quot;-2.23654&quot;,&quot;state&quot;:null,&quot;zipcode&quot;:null,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Piccadilly Gardens&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;Inside the gardens are an array of shops restaurants cafes and bar.&quot;},{&quot;place&quot;:{&quot;address&quot;:&quot;Withy Grove&quot;,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.485494&quot;,&quot;lng&quot;:&quot;-2.240711&quot;,&quot;state&quot;:&quot;Lancashire&quot;,&quot;zipcode&quot;:&quot;M4 2BS&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;The Printworks&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;Lively bars, restaurants and cinemas&quot;},{&quot;place&quot;:{&quot;address&quot;:null,&quot;city&quot;:null,&quot;lat&quot;:&quot;53.47723&quot;,&quot;lng&quot;:&quot;-2.23137&quot;,&quot;state&quot;:null,&quot;zipcode&quot;:null,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Piccadilly Station&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;As hort taxi ride, or if its a nice day a lovely walk through the vibrant northern quarter.&quot;},{&quot;place&quot;:{&quot;address&quot;:null,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.483875&quot;,&quot;lng&quot;:&quot;-2.243477&quot;,&quot;state&quot;:&quot;Central <?php echo $city; ?>&quot;,&quot;zipcode&quot;:&quot;M3 1BD&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Selfridges &amp; Co&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;Some of the best shopping <?php echo $city; ?> has to offer a short stroll from the door. Great days shopping to return back and relax in the hot tub aghhhhh.&quot;},{&quot;place&quot;:{&quot;address&quot;:null,&quot;city&quot;:&quot;<?php echo $city; ?>&quot;,&quot;lat&quot;:&quot;53.482924&quot;,&quot;lng&quot;:&quot;-2.200427&quot;,&quot;state&quot;:null,&quot;zipcode&quot;:&quot;M11 3FF&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;Etihad Stadium&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;<?php echo $city; ?> City stadium within walking distance or a short cab ride.&quot;},{&quot;place&quot;:{&quot;address&quot;:&quot;Whitworth Street East&quot;,&quot;city&quot;:null,&quot;lat&quot;:&quot;53.472362&quot;,&quot;lng&quot;:&quot;-2.178958&quot;,&quot;state&quot;:null,&quot;zipcode&quot;:&quot;M11 2WJ&quot;,&quot;class&quot;:&quot;address&quot;},&quot;scrubbed_name&quot;:&quot;New Smithfield Market&quot;,&quot;type&quot;:&quot;other&quot;,&quot;icon&quot;:&quot;//rawgit.com/serge72mt/rooms/master/airbnb/static/guidebook/pin_other-0c30a5da77be1270ff1503fb757dee94.png&quot;,&quot;scrubbed_contact&quot;:&quot;<?php echo $city; ?>s biggest outdoor market, saturday and sundays see some off the most exciting displays of food and goods.&quot;}],&quot;neighborhood_breadcrumb_details&quot;:[{&quot;link_text&quot;:&quot;<?php echo $address; ?>,&quot;,&quot;search_text&quot;:&quot;<?php echo $address; ?> <?php echo $city; ?>, <?php echo $country; ?>&quot;,&quot;link&quot;:&quot;&lt;span&gt;<?php echo $address; ?>,&lt;/span&gt;&quot;,&quot;link_route&quot;:&quot;http://airbnb.com/s/<?php echo $city; ?>--&quot;},{&quot;link_text&quot;:&quot;<?php echo $city; ?>,&quot;,&quot;search_text&quot;:&quot;<?php echo $city; ?>, <?php echo $country; ?>&quot;,&quot;link&quot;:&quot;&lt;span&gt;<?php echo $city; ?>,&lt;/span&gt;&quot;,&quot;link_route&quot;:&quot;http://airbnb.com/s/<?php echo $city; ?>--&quot;},{&quot;link_text&quot;:&quot;<?php echo $city; ?>,&quot;,&quot;search_text&quot;:&quot;<?php echo $state; ?>, <?php echo $country; ?>&quot;,&quot;link&quot;:&quot;&lt;span&gt;<?php echo $state; ?>,&lt;/span&gt;&quot;,&quot;link_route&quot;:&quot;http://airbnb.com/s/<?php echo $state; ?>&quot;},{&quot;link_text&quot;:&quot;<?php echo $country; ?>&quot;,&quot;search_text&quot;:&quot;<?php echo $country; ?>&quot;,&quot;link&quot;:&quot;&lt;span&gt;<?php echo $country; ?>&lt;/span&gt;&quot;,&quot;link_route&quot;:&quot;http://airbnb.com/s/&quot;}],&quot;neighborhood_basic_info&quot;:null,&quot;neighborhood_localized_name&quot;:null,&quot;user_info&quot;:{&quot;user_image&quot;:&quot;&lt;img alt=\&quot;<?php echo $hostname; ?>\&quot; data-pin-nopin=\&quot;true\&quot; height=\&quot;90\&quot; src=\&quot;<?php echo $hostpic; ?>\&quot; title=\&quot;<?php echo $hostname; ?>\&quot; width=\&quot;90\&quot; /&gt;&quot;}}" id="_bootstrap-neighborhood_card" />
<meta content="{&quot;shared.Summary&quot;:&quot;Summary&quot;,&quot;shared.Reviews&quot;:&quot;Reviews&quot;,&quot;shared.Google&quot;:&quot;Google&quot;,&quot;p3.Give First Review&quot;:&quot;Stay here and you could give this host their first review!&quot;,&quot;p3.View Other Reviews&quot;:&quot;View Other Reviews&quot;,&quot;+ More (as in, to view more content)&quot;:&quot;+ More&quot;,&quot;p3.No Reviews Yet&quot;:&quot;No Reviews Yet&quot;,&quot;p3.Other Reviews&quot;:&quot;This host has %{smart_count} review for other properties.||||This host has %{smart_count} reviews for other properties.&quot;,&quot;shared.Previous&quot;:&quot;Previous&quot;,&quot;shared.Next&quot;:&quot;Next&quot;,&quot;rooms.v3.reviews.response_from_name&quot;:&quot;Response from %{name}:&quot;,&quot;(not available) as in no reviewer&quot;:&quot;(not available)&quot;,&quot;translate_button.powered by Google (with logo)&quot;:&quot;powered by %{google_logo}&quot;,&quot;page3.show_original_reviews&quot;:&quot;Show original reviews&quot;,&quot;page3.translate_reviews&quot;:&quot;Translate reviews to English&quot;,&quot;page3.translating&quot;:&quot;Translating...&quot;,&quot;p3.reviews.num_guests_mentioned_searched_with_phrase&quot;:&quot;%{smart_count} guest has mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”||||%{smart_count} guests have mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”&quot;,&quot;p3.reviews.search.prompt&quot;:&quot;Press &amp;lsquo;Enter&amp;rsquo; to search&quot;,&quot;p3.reviews.search_over_reviews&quot;:&quot;Search reviews&quot;,&quot;p3.reviews.go_back_all_reviews&quot;:&quot;Back to all reviews&quot;,&quot;p3.reviews.search_returned_no_results&quot;:&quot;None of our guests have mentioned \&quot;%{phrase}\&quot;&quot;,&quot;p3.reviews.search_returned_no_results_for_emphasized_phrase&quot;:&quot;None of our guests have mentioned “%{emphasis_start}%{phrase}%{emphasis_end}”&quot;,&quot;p3.Reviews with smart count&quot;:&quot;%{smart_count} Review||||%{smart_count} Reviews&quot;,&quot;p3.reviews.from_number_of_reviews&quot;:&quot;from %{smart_count} review||||from %{smart_count} reviews&quot;,&quot;ml.preview.this_is_a_preview_of_your_listing&quot;:&quot;This is a preview of your listing.&quot;,&quot;ml.preview.your_space_is_unlisted&quot;:&quot;Your space is unlisted.&quot;,&quot;ml.preview.your_space_is_listed_edit_calendar&quot;:&quot;Your space is listed! %{link_start}Edit your calendar%{link_end} to make sure it shows accurate availability.&quot;,&quot;shared.Close&quot;:&quot;Close&quot;,&quot;ml.preview.edit_preview&quot;:&quot;Edit Listing&quot;,&quot;host_standards.rooms.deactivated_flash&quot;:&quot;Your listing is temporarily deactivated. %{reactivate_link_start}Learn more and reactivate.%{reactivate_link_end}||||Your listings are temporarily deactivated. %{reactivate_link_start}Learn more and reactivate.%{reactivate_link_end}&quot;,&quot;checkin_noun&quot;:&quot;Check-In&quot;,&quot;calendar.host_requires_minimum_nights&quot;:&quot;A minimum of %{smart_count} %{line_break}night stay is required |||| A minimum of %{smart_count} %{line_break}nights stay is required&quot;,&quot;calendar.host_requires_start_day_of_week&quot;:&quot;%{host_name} requires checking in%{line_break} on %{day_of_week_plural}&quot;,&quot;Mondays&quot;:&quot;Mondays&quot;,&quot;Tuesdays&quot;:&quot;Tuesdays&quot;,&quot;Wednesdays&quot;:&quot;Wednesdays&quot;,&quot;Thursdays&quot;:&quot;Thursdays&quot;,&quot;Fridays&quot;:&quot;Fridays&quot;,&quot;Saturdays&quot;:&quot;Saturdays&quot;,&quot;Sundays&quot;:&quot;Sundays&quot;,&quot;calendar.host_requires_no_arrival&quot;:&quot;%{host_name} isn’t available%{line_break} for check in on%{line_break} this date&quot;,&quot;calendar.host_requires_no_departure&quot;:&quot;%{host_name} isn’t available%{line_break} for check out on%{line_break} this date&quot;,&quot;limited_days_available_month&quot;:&quot;Love %{user}&#x27;s place? Book soon. There are only &lt;b&gt;%{number_of_days}&lt;/b&gt; available in the next month.&quot;,&quot;simple_view_count_day&quot;:&quot;%{number_of_people} viewed %{user}&#x27;s place today&quot;,&quot;simple_view_count_week&quot;:&quot;%{number_of_people} viewed %{user}&#x27;s place this week&quot;,&quot;view_count&quot;:&quot;See yourself here? Book soon. &lt;b&gt;%{number_of_people}&lt;/b&gt; viewed %{user}&#x27;s place this week.&quot;,&quot;shared.pluralize.person&quot;:&quot;%{smart_count} person||||%{smart_count} people&quot;,&quot;similar_listings&quot;:&quot;Similar Listings&quot;,&quot;no_similar_listings&quot;:&quot;No similar listings available.&quot;,&quot;similar_listings.show more listings button label&quot;:&quot;Show more listings&quot;,&quot;review_highlight_pages&quot;:&quot;%{current_page_num} of %{total_page_num}&quot;,&quot;same_address&quot;:&quot;Same Address&quot;,&quot;distance_away&quot;:&quot;%{distance} away&quot;,&quot;learn_more&quot;:&quot;Learn more&quot;,&quot;accommodation&quot;:&quot;Accommodation&quot;,&quot;service_fee&quot;:&quot;First Payment&quot;,&quot;occupancy_taxes&quot;:&quot;Occupancy Taxes&quot;,&quot;includes_vat&quot;:&quot;(includes VAT)&quot;,&quot;total_amounts&quot;:&quot;Total amounts&quot;,&quot;progress_indicator_caption&quot;:&quot;%{numerator}/%{denominator}: %{caption}&quot;,&quot;neighborhood_singular&quot;:&quot;Neighborhood&quot;,&quot;location_map&quot;:&quot;Location Map&quot;,&quot;host_recommendation&quot;:&quot;Host Recommendation&quot;,&quot;hover_card_title&quot;:&quot;Listing Location&quot;,&quot;review_helpful_count_thousand&quot;:&quot;%{number}k&quot;,&quot;review_helpful_count_million&quot;:&quot;%{number}m&quot;,&quot;p3.mark_review_as_helpful&quot;:&quot;Helpful&quot;,&quot;priv.everyone&quot;:&quot;Everyone&quot;,&quot;priv.only_me&quot;:&quot;Only Me&quot;,&quot;priv.description&quot;:&quot;Who can see this?&quot;,&quot;priv.everyone_description&quot;:&quot;Visible to everyone and included on your public Airbnb profile.&quot;,&quot;priv.only_me_description&quot;:&quot;Visible only to you and not shared anywhere.&quot;,&quot;save_to_wish_list&quot;:&quot;Save to Wish List&quot;,&quot;save_to_wish_list_and_fb&quot;:&quot;Save to Wish List and Facebook Timeline&quot;,&quot;wl_modal.create_new&quot;:&quot;Create new&quot;,&quot;wl_modal.make_a_new&quot;:&quot;Make a new wish list...&quot;,&quot;wl_modal.create&quot;:&quot;Create&quot;,&quot;wl_modal.add_note&quot;:&quot;Add a note&quot;,&quot;wl_modal.post_to_facebook&quot;:&quot;Post to Facebook&quot;,&quot;wl_modal.done&quot;:&quot;Done&quot;,&quot;wl_modal.save&quot;:&quot;Save&quot;,&quot;wl_modal.start_a_wish_list&quot;:&quot;Start a Wish List&quot;,&quot;wl_modal.empty_message&quot;:&quot;Save your favorite listings, compare notes, and start planning your next adventure.&quot;,&quot;wl_modal.wish_list_ideas&quot;:&quot;Wish List Ideas&quot;,&quot;refresh_list&quot;:&quot;Refresh List&quot;,&quot;shared.Remove&quot;:&quot;Remove&quot;,&quot;create_new_wish_list&quot;:&quot;Create New Wish List&quot;,&quot;create_duplicate_new_wish_list_error_message&quot;:&quot;Try a different name! You already have a wish list with that name.&quot;,&quot;new_wishlist_name&quot;:&quot;%{location} Trip&quot;,&quot;general_create_new_wish_list_error_message&quot;:&quot;There was an error creating your wish list.&quot;,&quot;wl_modal.save_confirmation&quot;:&quot;%{smart_count} Wishlist |||| %{smart_count} Wishlists&quot;,&quot;shared.Log_in&quot;:&quot;Log in&quot;,&quot;must_log_in&quot;:&quot;You must log in to continue&quot;,&quot;log_in_to_save&quot;:&quot;Log in to save this to a Wish List.&quot;,&quot;shared.Cancel&quot;:&quot;Cancel&quot;,&quot;sorry_og_photo_error&quot;:&quot;Sorry, there was an error trying to publish your photos.  Please refresh the page and try again.&quot;,&quot;wishlist_button_tooltip&quot;:&quot;Save this listing to review later.&quot;,&quot;instant_book&quot;:&quot;Instant Book&quot;,&quot;instant_book_tooltip&quot;:&quot;Book Instantly&quot;,&quot;book_now&quot;:&quot;Book Now&quot;,&quot;per_night&quot;:&quot;<?php if($nightly == false) { echo 'Price month'; } else { echo 'Price night'; } ?>&quot;,&quot;per_month&quot;:&quot;Per month&quot;,&quot;total&quot;:&quot;Total&quot;,&quot;geocoding_unsuccessful&quot;:&quot;We couldn’t find any location that matched your query. Try a different city, address, or landmark.&quot;,&quot;too_many_filters&quot;:&quot;We couldn’t find any results that matched your criteria, but tweaking your search may help. Here are some ideas:&quot;,&quot;remove_filters&quot;:&quot;Remove some filters.&quot;,&quot;expand_search&quot;:&quot;Expand the area of your search.&quot;,&quot;search_specific&quot;:&quot;Search for a city, address, or landmark.&quot;,&quot;see_this_listing&quot;:&quot;See This Listing&quot;,&quot;learn_more&quot;:&quot;Learn more&quot;,&quot;search_tooltip_instant_book_faster_booking&quot;:&quot;Look for the lightning bolt for faster booking&quot;,&quot;show_original_description&quot;:&quot;Show original description&quot;,&quot;show_original_reviews&quot;:&quot;Show original reviews&quot;,&quot;translate_disclaimer&quot;:&quot;Automatic translations use Google Translate and may not be completely accurate.&quot;,&quot;translate_this_description&quot;:&quot;Translate this description to English&quot;,&quot;translate_reviews&quot;:&quot;Translate reviews to English&quot;,&quot;reviews_ordered_by_language_announcement&quot;:&quot;Showing reviews in English first&quot;,&quot;translating&quot;:&quot;Translating...&quot;,&quot;per_month&quot;:&quot;per month&quot;,&quot;long_term&quot;:&quot;Long Term&quot;,&quot;interactionContacted&quot;:&quot;You contacted them on %{date}&quot;,&quot;interactionReceived&quot;:&quot;You received a reply on %{date}&quot;,&quot;interactionViewMessage&quot;:&quot;View message&quot;,&quot;completeBooking&quot;:&quot;Complete Booking&quot;,&quot;response_from_you&quot;:&quot;Response from you:&quot;,&quot;error_saving_your_response&quot;:&quot;Sorry, there has been an error replying to this review.&quot;,&quot;response_tooltip_title&quot;:&quot;If you disagree with this review or would like to address concerns raised by the user, you may leave a response. Please be sure to follow our Review Guidelines.&quot;,&quot;First Payment&quot;:&quot;First Payment&quot;,&quot;Deposit&quot;:&quot;Deposit&quot;,&quot;<?php if($nightly == false) { echo 'Price per month'; } else { echo 'Price per night'; } ?> x <?php if($nightly == false) { echo 'months'; } else { echo 'nights'; } ?>&quot;:&quot;%{basePricePerNight} x %{smart_count} <?php if($nightly == false) { echo 'month'; } else { echo 'night'; } ?> |||| %{basePricePerNight} x %{smart_count} <?php if($nightly == false) { echo 'months'; } else { echo 'nights'; } ?>&quot;,&quot;TOTAL&quot;:&quot;TOTAL&quot;,&quot;Total&quot;:&quot;Total&quot;,&quot;hostCancelCouponAlert&quot;:&quot;When your booking is accepted, we’ll refund the %{price_start}%{refund_price}%{price_end} left over from your canceled reservation.&quot;,&quot;fuzzy listing tooltip&quot;:&quot;The listing is located in this area. When you book, you&#x27;ll receive the exact address.&quot;,&quot;see_all_n_photos&quot;:&quot;See all %{num_photos} photos&quot;,&quot;More&quot;:&quot;More&quot;,&quot;Report, as in report a listing&quot;:&quot;Report&quot;,&quot;not_licensed_to_provide_booking_service&quot;:&quot;We&#x27;ve determined your location to be in Romania. We are not licensed to provide booking services for this listing.&quot;,&quot;profile_pic_uploader.take_photo&quot;:&quot;Take Photo&quot;,&quot;profile_pic_uploader.upload_photo&quot;:&quot;Upload Photo&quot;,&quot;profile_pic_uploader.connect_facebook&quot;:&quot;Use Facebook&quot;,&quot;profile_pic_uploader.take_or_upload_photo&quot;:&quot;Take or upload a photo&quot;,&quot;profile_pic_uploader.confirm your photo&quot;:&quot;Confirm your photo&quot;,&quot;profile_pic_uploader.make sure your face is visible&quot;:&quot;Make sure your face is clearly visible in the photo.&quot;,&quot;profile_pic_uploader.save and continue&quot;:&quot;Save and Continue&quot;,&quot;profile_pic_uploader.smile&quot;:&quot;Smile!&quot;,&quot;profile_pic_uploader.error&quot;:&quot;There was an error uploading your picture. Please try again.&quot;,&quot;profile_pic_upsell.upload_error_alert&quot;:&quot;We couldn&#x27;t upload your photo. Please try again.&quot;,&quot;profile_pic_uploader.change photo&quot;:&quot;Change Photo&quot;,&quot;shared.Continue&quot;:&quot;Continue&quot;,&quot;profile_pic_uploader.is_this_you&quot;:&quot;How Does This Look?&quot;,&quot;profile_pic_uploader.choose_other&quot;:&quot;Choose Other&quot;,&quot;shared.save&quot;:&quot;Save&quot;,&quot;profile_pic_uploader.file_type_error&quot;:&quot;This file type is unsupported. This tool supports PNG and JPG files.&quot;,&quot;profile_pic_upsell.add_photo_header&quot;:&quot;Get Started With a Profile Photo&quot;,&quot;profile_pic_upsell.add_photo_subheader&quot;:&quot;Add a photo so potential hosts can put a face to the name once you&#x27;re ready to book.&quot;,&quot;profile_pic_upsell.connect_facebook&quot;:&quot;Connect With Facebook&quot;,&quot;profile_pic_upsell.connect_weibo&quot;:&quot;Connect With Weibo&quot;,&quot;profile_pic_upsell.connect_google&quot;:&quot;Connect With Google&quot;,&quot;profile_pic_upsell.upload_a_photo&quot;:&quot;Upload a Photo&quot;,&quot;profile_pic_upsell.decline_add_photo&quot;:&quot;Not Now&quot;,&quot;profile_pic_upsell.after_pic_upload_welcome_header&quot;:&quot;Looking Good, %{guest_first_name}!&quot;,&quot;profile_pic_upsell.skipped_pic_upload_welcome_header&quot;:&quot;Welcome to Airbnb, %{guest_first_name}!&quot;,&quot;shared.Welcome_to_Airbnb&quot;:&quot;Welcome to Airbnb!&quot;,&quot;profile_pic_upsell.glad_youre_here&quot;:&quot;We&#x27;re glad you&#x27;re here.&quot;,&quot;profile_pic_upsell.start_by_completing_profile&quot;:&quot;Now, start by completing your profile and telling the Airbnb community more about yourself.&quot;,&quot;profile_pic_upsell.help_community_get_to_know_you&quot;:&quot;Help the Airbnb community get to know you by completing your profile.&quot;,&quot;profile_pic_upsell.easier_to_book&quot;:&quot;It&#x27;s easier to book a place when hosts know who you are.&quot;,&quot;profile_pic_upsell.recommend_complete_profile&quot;:&quot;We recommend completing your profile before booking your first stay.&quot;,&quot;profile_pic_upsell.complete_your_profile&quot;:&quot;Complete Your Profile&quot;,&quot;profile_pic_upsell.maybe_later&quot;:&quot;Maybe Later&quot;,&quot;Message Sent!&quot;:&quot;Message Sent!&quot;,&quot;profile_pic_upsell.Looking_Good_name&quot;:&quot;Looking Good, %{guest_first_name}!&quot;,&quot;profile_pic_upsell.Looking_Good&quot;:&quot;Looking Good!&quot;,&quot;profile_pic_upsell.recommend_booking_before_first_stay&quot;:&quot;We recommend completing your profile before booking your first stay.&quot;,&quot;welcome.tell_us_about_yourself&quot;:&quot;Tell Us About Yourself&quot;,&quot;smart_banner.title&quot;:&quot;Airbnb for iOS&quot;,&quot;smart_banner.Install&quot;:&quot;Install&quot;,&quot;smart_banner.Open in App&quot;:&quot;Open in App&quot;,&quot;smart_banner.Always be ready&quot;:&quot;Always be ready&quot;,&quot;smart_banner.Find your next adventure&quot;:&quot;Find your next adventure, even if you&#x27;re on the go.&quot;,&quot;Password&quot;:&quot;Password&quot;,&quot;users.Confirm_Password_to_Continue&quot;:&quot;Confirm Password to Continue&quot;,&quot;users.Confirm_Password&quot;:&quot;Confirm Password&quot;,&quot;users.Cancel&quot;:&quot;Cancel&quot;,&quot;users.Please_enter_your_Airbnb_password_to_continue.&quot;:&quot;For your security, please enter your Airbnb password to continue.&quot;,&quot;user.signup.forgot_password&quot;:&quot;Forgot password?&quot;,&quot;users.Confirm_Facebook_Password&quot;:&quot;Confirm Facebook Password&quot;,&quot;home&quot;:&quot;Home&quot;,&quot;download_the_app&quot;:&quot;Download the App&quot;,&quot;sign_up&quot;:&quot;Sign Up&quot;,&quot;log_in&quot;:&quot;Log In&quot;,&quot;alerts&quot;:&quot;Alerts&quot;,&quot;inbox&quot;:&quot;Inbox&quot;,&quot;discover&quot;:&quot;Discover&quot;,&quot;search&quot;:&quot;Search&quot;,&quot;how_it_works&quot;:&quot;How it Works&quot;,&quot;help&quot;:&quot;Help&quot;,&quot;invite_friends&quot;:&quot;Invite Friends&quot;,&quot;logout&quot;:&quot;Log Out&quot;,&quot;name&quot;:&quot;User&quot;,&quot;photography&quot;:&quot;Photography&quot;,&quot;your_trips&quot;:&quot;Your Trips&quot;,&quot;close&quot;:&quot;Close&quot;,&quot;where_are_you_going&quot;:&quot;Where are you going?&quot;,&quot;checkin&quot;:&quot;Check in&quot;,&quot;checkout&quot;:&quot;Check out&quot;,&quot;number_of_<?php if(($nightly)?"guests":"months")?>&quot;:&quot;Number of guests&quot;,&quot;room_type_0&quot;:&quot;<?php echo $roomtype; ?>&quot;,&quot;room_type_1&quot;:&quot;Private room&quot;,&quot;room_type_2&quot;:&quot;Shared room&quot;,&quot;find_a_place&quot;:&quot;Find a place&quot;,&quot;shared.x guests&quot;:&quot;%{smart_count} guest |||| %{smart_count} guests&quot;,&quot;guests&quot;:&quot;Guests&quot;,&quot;room_type&quot;:&quot;Room type&quot;,&quot;shared.Help Center&quot;:&quot;Help Center&quot;,&quot;shared.Ask the Community&quot;:&quot;Ask the Community&quot;,&quot;Back&quot;:&quot;Back&quot;,&quot;view this article in the help center&quot;:&quot;View this article in the Help Center&quot;,&quot;field_guide.error.no_load_topic&quot;:&quot;Suggested help articles unavailable—visit our %{link_start}Help Center%{link_end} instead.&quot;,&quot;field_guide.no_results&quot;:&quot;No results found&quot;,&quot;field_guide.suggested_actions&quot;:&quot;Suggested Actions&quot;,&quot;field_guide.search_down&quot;:&quot;Unable to perform search, please try again later&quot;,&quot;field_guide.articles_result_title&quot;:&quot;Articles related to \&quot;%{query}\&quot;&quot;,&quot;field_guide.suggested_articles&quot;:&quot;Suggested Articles&quot;,&quot;field_guide.how_can_we_help&quot;:&quot;How can we help you?&quot;,&quot;shared.Messages&quot;:&quot;Messages&quot;,&quot;shared.Notifications&quot;:&quot;Notifications&quot;,&quot;shared.See all&quot;:&quot;See all&quot;,&quot;shared.View Dashboard&quot;:&quot;View Dashboard&quot;,&quot;shared.View Inbox&quot;:&quot;View Inbox&quot;,&quot;notifications.Additional Unread Messages&quot;:&quot;You have %{smart_count} additional unread message.||||You have %{smart_count} additional unread messages.&quot;,&quot;notifications.Read All Notifications&quot;:&quot;There is %{smart_count} notification waiting for you in your %{link_start}dashboard%{link_end}.||||There are %{smart_count} notifications waiting for you in your %{link_start}dashboard%{link_end}.&quot;,&quot;notifications.Read All Messages&quot;:&quot;No new messages. You’re all caught up!&quot;,&quot;notifications.Error&quot;:&quot;Sorry, we can’t load new messages right now. %{link_start}View Inbox%{link_end}&quot;,&quot;nothing_here_yet&quot;:&quot;Nothing Here Yet.&quot;,&quot;check_back_for_listings&quot;:&quot;Check back to see all the listings that caught your eye.&quot;,&quot;see_all&quot;:&quot;See All&quot;,&quot;error_retrieving&quot;:&quot;There was an error retrieving your recently viewed listings. Please try again later.&quot;,&quot;airlock.title&quot;:&quot;Security Check&quot;,&quot;airlock.photo_id_verification.title&quot;:&quot;Photo Id Verification&quot;,&quot;airlock.photo_id_verification.option_selection.title&quot;:&quot;Verify Your ID&quot;,&quot;airlock.photo_id_verification.option_selection.description&quot;:&quot;When you stay in an Airbnb, you’re staying in someone’s home. Scanning your government ID helps your host feel more comfortable sharing their personal space.&quot;,&quot;airlock.photo_id_verification.response.title&quot;:&quot;Scan Your ID&quot;,&quot;airlock.photo_id_verification.verified&quot;:&quot;Account Verified&quot;,&quot;airlock.photo_id_verification.response.invalid&quot;:&quot;Something went wrong while scanning your ID. Please try again.&quot;,&quot;airlock.phone_verification.title&quot;:&quot;Phone Verification&quot;,&quot;airlock.phone_verification.option_selection.title&quot;:&quot;Help us keep your account secure.&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.title&quot;:&quot;We need you to confirm this change.&quot;,&quot;airlock.phone_verification.payout_create.option_selection.title&quot;:&quot;We need you to confirm this change.&quot;,&quot;airlock.phone_verification.option_selection.description&quot;:&quot;We want to confirm that it’s really you who’s trying to access your account. To do that, we’ll send a code to a phone you’ve previously verified on Airbnb.&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.description&quot;:&quot;We want to confirm that it’s really you who’s trying to add a listing.  To do that, we’ll send a code to a phone you’ve previously verified on Airbnb.&quot;,&quot;airlock.phone_verification.payout_create.option_selection.description&quot;:&quot;We want to confirm that it’s really you who’s trying to add a payout method.  To do that, we’ll send a code to a phone you’ve previously verified on Airbnb.&quot;,&quot;airlock.phone_verification.option_selection.how&quot;:&quot;How should we send the code?&quot;,&quot;airlock.phone_verification.option_selection.where&quot;:&quot;Where should we send the code?&quot;,&quot;airlock.phone_verification.response.title&quot;:&quot;Enter your 4-digit code.&quot;,&quot;airlock.phone_verification.We sent a code to your phone number&quot;:&quot;We sent a code to your phone number ending in %{last_four_digits}.&quot;,&quot;airlock.phone_verification.Depending on your provider&quot;:&quot;Depending on your provider, it may take a few minutes to arrive.&quot;,&quot;airlock.phone_verification.We will wait right here&quot;:&quot;We’ll wait right here.&quot;,&quot;airlock.phone_verification.Send me a text message&quot;:&quot;Send me a text message (SMS)&quot;,&quot;airlock.phone_verification.Call me&quot;:&quot;Call me&quot;,&quot;airlock.api_error&quot;:&quot;Something went wrong while processing your request. Please try again.&quot;,&quot;airlock.phone_verification.Phone number ending in&quot;:&quot;Phone number ending in %{last_four}&quot;,&quot;airlock.phone_verification.Enter Your Code&quot;:&quot;Enter Your Code&quot;,&quot;airlock.phone_verification.response.invalid&quot;:&quot;Looks like you entered the code incorrectly.&quot;,&quot;airlock.password_reset.response.title&quot;:&quot;Let’s change your password.&quot;,&quot;airlock.password_reset.response.description&quot;:&quot;Changing your password is an easy way to help keep your account secure. Let’s do that now.&quot;,&quot;airlock.password_reset.response.current_password&quot;:&quot;Current Password&quot;,&quot;airlock.password_reset.response.new_password&quot;:&quot;New Password&quot;,&quot;airlock.password_reset.response.confirm_new_password&quot;:&quot;Confirm New Password&quot;,&quot;airlock.password_reset.Next&quot;:&quot;Change Password&quot;,&quot;airlock.account_disabled.introduction.title&quot;:&quot;Account Disabled&quot;,&quot;airlock.account_disabled.introduction.introduction&quot;:&quot;To help protect your information, we’ve temporarily blocked your Airbnb account.&quot;,&quot;airlock.account_disabled.introduction.description&quot;:&quot;To restore access, send an email to account.disabled@airbnb.com from an email address associated with your Airbnb account.&quot;,&quot;airlock.no_phone_access.introduction.title&quot;:&quot;Emailing us will take longer.&quot;,&quot;airlock.no_phone_access.introduction.introduction&quot;:&quot;For security reasons, having Airbnb manually confirm this change can take 1-2 days. Email us at &lt;a href=\&quot;mailto:account.disabled@airbnb.com\&quot;&gt;account.disabled@airbnb.com&lt;/a&gt; from an address associated with your account and we’ll take it from there.&quot;,&quot;airlock.no_phone_access.introduction.tip.title&quot;:&quot;Make this update faster with your phone&quot;,&quot;airlock.no_phone_access.introduction.tip.description&quot;:&quot;If you’re traveling or your phone’s just out of reach, wait until you get it back and try to make this update again.&quot;,&quot;airlock.no_phone_access.Send Me a Code&quot;:&quot;Send Me a Code&quot;,&quot;airlock.no_phone_access.Email Airbnb&quot;:&quot;Email Airbnb&quot;,&quot;airlock.contact_us.response.title&quot;:&quot;Contact Us&quot;,&quot;airlock.contact_us.response.description&quot;:&quot;For your security, we would like to further verify your account.  Please contact us at &lt;a href=\&quot;mailto:account.disabled@airbnb.com\&quot;&gt;account.disabled@airbnb.com&lt;/a&gt;.&quot;,&quot;airlock.introduction&quot;:&quot;In order to continue, we ask that you complete a few challenges.&quot;,&quot;airlock.Get Started&quot;:&quot;Get Started&quot;,&quot;airlock.Continue&quot;:&quot;Continue&quot;,&quot;airlock.Next&quot;:&quot;Next&quot;,&quot;airlock.Back&quot;:&quot;Back&quot;,&quot;airlock.success.Thanks&quot;:&quot;Thanks %{first_name}&quot;,&quot;airlock.success.You are done&quot;:&quot;You’re done! You can go back to what you were doing.&quot;,&quot;choose_language&quot;:&quot;Choose language&quot;,&quot;choose_currency&quot;:&quot;Choose currency&quot;,&quot;clear_dates&quot;:&quot;Clear Dates&quot;,&quot;datepicker_updated_years_ago&quot;:&quot;Updated %{smart_count} year ago |||| Updated %{smart_count} years ago&quot;,&quot;datepicker_updated_months_ago&quot;:&quot;Updated %{smart_count} month ago |||| Updated %{smart_count} months ago&quot;,&quot;datepicker_updated_days_ago&quot;:&quot;Updated %{smart_count} day ago |||| Updated %{smart_count} days ago&quot;,&quot;datepicker_updated_today&quot;:&quot;Updated today&quot;,&quot;datepicker_never_updated&quot;:&quot;Never updated&quot;,&quot;datepicker_min_nights&quot;:&quot;%{smart_count} night minimum stay |||| %{smart_count} night minimum stay&quot;,&quot;datepicker_min_nights_this_month&quot;:&quot;%{smart_count} night min. this month |||| %{smart_count} nights min. this month&quot;,&quot;datepicker_min_nights_varies&quot;:&quot;Minimum stay varies&quot;,&quot;sorry_something_went_wrong&quot;:&quot;Sorry, something went wrong. Please refresh the page and try again.&quot;,&quot;airbnb_open_banner_text&quot;:&quot;&lt;a class=&#x27;alert-link airbnb-open-link&#x27; href=&#x27;https://airbnbopen.com&#x27; target=&#x27;_blank&#x27;&gt;Airbnb Open&lt;/a&gt; registration ends October 31. Single-day tickets now available!&quot;}" id="_bootstrap-phrases" />

<script src="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/libs_jquery_2x.js" type="text/javascript"></script>
<script src="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/core.bundle.js" type="text/javascript"></script>
    <div id="fb-root"></div>
    <script src="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/p3_template_manifest.js" type="text/javascript"></script>
    <script src="//rawgit.com/serge72mt/rooms/master/airbnb/static/packages/p3.bundle2.js" type="text/javascript"></script>

  <div class="modal" role="dialog" aria-hidden="true" id="contact-modal">
    <div class="modal-table">
      <div class="modal-cell">
        <div class="modal-content">
          <div style="height:300px"></div>
        </div>
      </div>
    </div>
  </div>


<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  </body>
</html>
