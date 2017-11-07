a:1:{i:0;s:7333:"<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="<?= $appName ?>">
    <title></title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->tag->stylesheetlink('vendor/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetlink('theme/css/workplace.css') ?>
  </head>
  <body class="fixed-nav sticky-footer bg-dark">

    <!-- Navigation -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  		<!-- Logo -->
  		<a class="navbar-brand" href="index.html">
  			Start Bootstrap
  		</a>
  		<!-- Toggle -->
  		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<!-- Menus -->
  		<div class="collapse navbar-collapse" id="navbarResponsive">
  			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  				<!-- Dashboard -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
  					<a class="nav-link" href="index.html">
              <i class="material-icons">face</i>
  						<span class="nav-link-text"><?= $this->translate->_('WORKPLACE@MENU_DASHBOARD') ?></span>
  					</a>
  				</li>
          <!-- Customers -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
  					<a class="nav-link" href="index.html">
  						<i class="fa fa-fw fa-dashboard"></i>
  						<span class="nav-link-text"><?= $this->translate->_('WORKPLACE@MENU_CUSTOMERS') ?></span>
  					</a>
  				</li>
          <!-- Employees -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
  					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
  						<i class="fa fa-fw fa-wrench"></i>
  						<span class="nav-link-text"><?= $this->translate->_('WORKPLACE@MENU_EMPLOYEES') ?></span>
  					</a>
  					<ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
  							<a href="<?= $this->url->get('workplace/employees') ?>"><?= $this->translate->_('WORKPLACE@MENU_EMPLOYEESLISTS') ?></a>
  						</li>
  						<li>
  							<a href="<?= $this->url->get('workplace/employees/job') ?>"><?= $this->translate->_('WORKPLACE@MENU_EMPLOYEESJOB') ?></a>
  						</li>
              <li>
  							<a href="<?= $this->url->get('workplace/employees/docs') ?>"><?= $this->translate->_('WORKPLACE@MENU_EMPLOYEESDOCS') ?></a>
  						</li>
  					</ul>
  				</li>
          <!-- Tools -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
  					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#tools" data-parent="#exampleAccordion">
  						<i class="fa fa-fw fa-wrench"></i>
  						<span class="nav-link-text"><?= $this->translate->_('WORKPLACE@MENU_TOOLS') ?></span>
  					</a>
  					<ul class="sidenav-second-level collapse" id="tools">
  						<li>
  							<a href="navbar.html"><?= $this->translate->_('WORKPLACE@MENU_TOOLS_DOMAIN') ?></a>
  						</li>
  						<li>
  							<a href="navbar.html">Navbar</a>
  						</li>
  					</ul>
  				</li>
  				<!-- Menu Levels 1 -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
  					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
  						<i class="fa fa-fw fa-wrench"></i>
  						<span class="nav-link-text">Menu Levels 1</span>
  					</a>
  					<ul class="sidenav-second-level collapse" id="collapseComponents">
  						<li>
  							<a href="navbar.html">Navbar</a>
  						</li>
  						<li>
  							<a href="navbar.html">Navbar</a>
  						</li>
  					</ul>
  				</li>
  				<!-- Menu Levels -->
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
  					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
  						<i class="fa fa-fw fa-sitemap"></i>
  						<span class="nav-link-text">Menu Levels</span>
  					</a>
  					<ul class="sidenav-second-level collapse" id="collapseMulti">
  						<li>
  							<a href="">Second Level</a>
  						</li>
  						<li>
  							<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
  							<ul class="sidenav-third-level collapse" id="collapseMulti2">
  								<li>
  									<a href="#">Third Level Item</a>
  								</li>
  							</ul>
  						</li>
  					</ul>
  				</li>
  			</ul>
  			<ul class="navbar-nav sidenav-toggler">
  				<li class="nav-item">
  					<a class="nav-link text-center" id="sidenavToggler">
              <i class="material-icons">face</i>

  					</a>
  				</li>
  			</ul>
  			<ul class="navbar-nav ml-auto">
  				<li class="nav-item dropdown">
  					<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  						<i class="fa fa-fw fa-envelope"></i>
  						<span class="d-lg-none">Messages
  							<span class="badge badge-pill badge-primary">12 New</span>
  						</span>
  						<span class="indicator text-primary d-none d-lg-block">
  							<i class="fa fa-fw fa-circle"></i>
  						</span>
  					</a>
  					<div class="dropdown-menu" aria-labelledby="messagesDropdown">
  						<h6 class="dropdown-header">New Messages:</h6>
  						<div class="dropdown-divider"></div>
  						<a class="dropdown-item" href="#">
  							<strong>David Miller</strong>
  							<span class="small float-right text-muted">11:21 AM</span>
  							<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
  						</a>
  						<div class="dropdown-divider"></div>
  						<a class="dropdown-item small" href="#">View all messages</a>
  					</div>
  				</li>
  			</ul>
  		</div>
  	</nav>

  	<!-- Content -->
  	<div class="content-wrapper">
  		<div class="container-fluid">
  			<!-- Breadcrumbs-->
  				<ol class="breadcrumb">
  					<li class="breadcrumb-item">
  						<a href="index.html"><?= $appName ?></a>
  					</li>
  					<li class="breadcrumb-item active"><?= $pageTitle ?></li>
  				</ol>
  		</div>
  	</div>

  	<!-- Footer -->
  	<footer class="sticky-footer">
  		<div class="container">
  			<div class="text-center">
  				<small>Copyright © 2017</small>
  			</div>
  		</div>
  	</footer>


    <!-- Scripts -->
    <?= $this->tag->javascriptinclude('vendor/jquery/dist/jquery.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/popper.js/dist/umd/popper.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/bootstrap/dist/js/bootstrap.min.js') ?>
    <?= $this->tag->javascriptinclude('theme/js/workplace.js') ?>
  </body>
</html>
";}