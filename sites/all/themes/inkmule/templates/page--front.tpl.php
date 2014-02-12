<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container">

	<div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/shirts1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>inkmule does better custom apparel.</h1>
              <p class="lead">If you're looking for an easier solution for high-end custom apparel, look no further. We offer fast turnaround times, free art help, and one-on-one consulting. Oh yeah, and we never charge screen or setup fees.</p>
			<a class="btn btn-large btn-primary" href="http://appareldesignstudio.imprintablefashion.com/?sponsor=005962&styleset=000003&skin=blank-blue">Get started now</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="../assets/img/cd_tags.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Start your own clothing line.</h1>
              <p class="lead">We work with you to build your brand, because we want you to be successful. From custom tags to folding and bagging, we offer options to turn your designs into retail-ready garments that your customers will love, and we do all of this within your budget.</p>
			<a class="btn btn-large btn-primary" href="http://appareldesignstudio.imprintablefashion.com/?sponsor=005962&styleset=000003&skin=blank-blue">Get started now</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="../assets/img/press1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>More than just shirts.</h1>
              <p class="lead">Screen printing is great, but it's not right for everything. That's why we offer full color digital printing using the most current technology, embroidery, pad printing, die-cut stickers and much, much more.</p>
            	<a class="btn btn-large btn-primary" href="http://appareldesignstudio.imprintablefashion.com/?sponsor=005962&styleset=000003&skin=blank-blue">Get started now</a>
</div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="../assets/img/quote.jpg">
          <h2>Get a Quote!</h2>
          <p>Our new-and-improved quote form is coming soon. Until then, tell us about your project by emailing <a href="mailto:quotes@inkmule.com">quotes@inkmule.com</a> . We'll respond right away with plenty of pricing options to make your project awesome and affordable!  Use the link below to get an instant quote.</p>
          <p><a class="btn" href="http://inkmule.com/quote/create">View details &raquo;</a></p>
        </div><!-- /.span4 -->

        <div class="span4">
          <img class="img-circle" src="../assets/img/pencils-small.jpg">
          <h2>Need Artwork?</h2>
          <p>Whether you need your ideas turned into a graphic, or you have some lovely napkin scribbles you want cleaned up, our team of professional designers will take care of it. Unlike the other guys, inkmule includes one hour of art time free with every order.</p>
        </div><!-- /.span4 -->

        <div class="span4">
          <img class="img-circle" src="../assets/img/nate_OES.jpg">
          <h2>Previous Work</h2>
          <p>We've worked with everyone from Lollapalooza to Duke University, and provided everything from business cards to shirts to stickers. Click below to see more of our recent work!</p>
          <p><a class="btn" href="http://inkmule.com/portfolio/all">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="whyus">
        <img class="featurette-image pull-right img-circle" src="../assets/img/shop1.jpg">
        <h2 class="featurette-heading">Why Us? <span class="muted">We get it.</span></h2>
        <p class="lead">There are a lot of options for getting your custom shirts and apparel printed out there. And we've explored most of them. It's hard to choose the best option for your project. At inkmule, we look at it this way: if you want it better, cheaper, and faster, use us. Period.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette no-img" id="howitworks">
        <img class="featurette-image pull-left img-circle" src="../assets/img/infographic.png">
        <h2 class="featurette-heading">How it works.<span class="muted"></h2>
	
			<h3>When you contact inkmule or submit a quote, here's what you should know</h3>
			
        	<h4>Figure out what type of garment would you'd like</h4>
			<p class="lead">From tees to tanks to hoodies, we can do it all - and, if you don't have a specific brand in mind, we're happy to make a recommendation!</p>

			<h4>Make some artwork decisions</h4>
			<p class="lead">If you already know what you want, send it along and we'll make it happen! If not, no worries - all inkmule orders come with a free hour of art time, so we'll put together killer graphics for you!</p>

			<h4>Know your budget</h4>
			<p class="lead">We'll send you a quote based on your artwork, garment type and quantity. You'll love our pricing, and we're happy to work with you to make sure your shirts come at a price you love.</p>

			<h4>Relax</h4>
			<p class="lead">We'll print your merch up and have it to you in no time. Our standard turnaround is 10-14 business days, but we can make turns so quick your head will spin!</p>

			<h4>Wait (but don't blink)</h4>
			<p class="lead">You'll be notified every step of the way - from printing, to shipping to arrival. All orders ship UPS with tracking number so you'll know exactly when your new shirts will arrive.</p>

			<h4>Enjoy!</h4>
			<p class="lead">Your one-of-a-kind merch will be sure to please, and if not, we'll make sure we make it right.</p>

			<h4>For more savings, repeat</h4>
			<p class="lead">We love all our customers, but the more you order, the more you save. </p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette no-img" id="ourcustomers">
        <h2 class="featurette-heading">Our Customers</h2>

		<h4>Student Groups</h4>
		<p class="lead">We've been there before. You're part of a group on campus and you're in need of some sweet swag. Or, you've got a big event coming up and you want to make sure you look your best. Whatever the occasion, inkmule works with student groups and organizations across the country to put together killer apparel at killer prices.</p>
		
		<h4>Companies</h4>
		<p class="lead">At inkmule, we specialize in good publicity. Whether it's shirts for your next fundraiser, stickers for your next give-away, or koozies for your "corporate retreat," we're experts at promotional material. We know what companies need to get their brand out there, and work well within budgets to get the job done.</p>

		<h4>Clothing Lines</h4>
		<p class="lead">With inkmule, there's never been an easier way to start a clothing line and set your brand apart. We specialize in working within your budget to deliver retail-ready apparel with professional grade tags, packaging, and more. Whether you're printing 12 shirts for your limited-edition line or 5,000, inkmule will deliver garments that not only amaze, but also turn a profit!</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->  

</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
