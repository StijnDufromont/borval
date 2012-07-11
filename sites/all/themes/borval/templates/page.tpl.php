<div id="page">
  
  <!-- header -->
  <div id="header" class="row">
    
    <div id="logo">
      borval LOGO
    </div>
    
    <div id="navigation">
      <?php print render($page['header']); ?>
    </div>
    
    <div id="language-navigation">
      <ul>
        <li><a href="#">EN</a></li>
        <li><a href="#">NL</a></li>
        <li><a href="#">ES</a></li>
        <li><a href="#">FR</a></li>
        <li><a href="#">DE</a></li>
      </ul>
    </div>
    
  </div>
  <!-- /header -->
  
  <!-- content -->
  <div id="content" class="row">
    
    <div id="sidebar" class="column">
      <?php print render($page['sidebar_first']); ?>
    </div>
    
    <div id="main-region" class="column">
      <?php
      if (!empty($breadcrumb)) {
        print render($breadcrumb);
      }
      ?>
      <h1 class="page-title"><?php print $title; ?></h1>
      <?php 
      if (!empty($tabs)) {
        print render($tabs);
      }
      ?>
      <?php print render($page['content']); ?>
    </div>
    
    <div class="clear">&nbsp;</div>
  </div>
  <!-- /content -->
  <div id="slideshow" class="row">
    <?php print render($page['slideshow']); ?>
  </div>
  <!-- footer -->
  <div id="footer" class="row">
    <?php print render($page['footer']); ?>
  </div>
  <!-- /footer -->
  
</div>