a:1:{i:0;s:4833:"<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="<?= $appName ?>" />
    <title><?= $pageTitle ?> | <?= $appName ?></title>
    <!-- Styles -->
    <?= $this->tag->stylesheetlink('vendor/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetlink('theme/css/main.css') ?>
  </head>
  <body>
    <div class="header-info">
      <div class="container">
        <div class="clearfix">
          <div class="float-left">
            adsf
          </div>
          <div class="float-right">
            sad
          </div>
        </div>
      </div>
    </div>
    <nav class="">
      <div class="container">

      </div>
    </nav>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <h4><?= $this->translate->_('PAGES@FOOTER_DOMAINS') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_DOMAINS_REGISTER') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_DOMAINS_TRANSFER') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_DOMAINS_DOMAINCHECK') ?></a></li>
            </ul>
          </div>
          <div class="col-lg">
            <h4><?= $this->translate->_('PAGES@FOOTER_HOSTINGS') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HOSTINGS_WEB') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HOSTINGS_WORDPRESS') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HOSTINGS_MAIL') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HOSTINGS_VPS') ?></a></li>
            </ul>
          </div>
          <div class="col-lg">
            <h4><?= $this->translate->_('PAGES@FOOTER_SERVERS') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_SERVERS_CLOUD') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_SERVERS_DEDICATED') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_SERVERS_COLOCATION') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_SERVERS_BUY') ?></a></li>
            </ul>
          </div>
          <div class="col-lg">
            <h4><?= $this->translate->_('PAGES@FOOTER_OTHERSERVICES') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_OTHERSERVICES_SYSADMIN') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_OTHERSERVICES_WEBDESIGN') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_OTHERSERVICES_WEBAPP') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_OTHERSERVICES_SEO') ?></a></li>
            </ul>
          </div>
          <div class="col-lg">
            <h4><?= $this->translate->_('PAGES@FOOTER_PRODUCTS') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_PRODUCTS_SSL') ?></a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h4><?= $this->translate->_('PAGES@FOOTER_HELP') ?></h4>
            <ul>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HELP_KNOWLEDGES') ?></a></li>
              <li><a href="#"><?= $this->translate->_('PAGES@FOOTER_HELP_DOWNLOADS') ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
        <div class="float-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i><?= $this->translate->_('PAGES@FOOTER_TERMSOFSERVICE') ?></i></a></li>
            <li class="list-inline-item"><a href="#"><i><?= $this->translate->_('PAGES@FOOTER_PRIVACYPOLICY') ?></i></a></li>
            <li class="list-inline-item"><a href="#"><i><?= $this->translate->_('PAGES@FOOTER_SLA') ?></i></a></li>
          </ul>
        </div>
        <p>Copyright © 2017 <a href="#"><?= $appName ?></a> All Rights Reserved.</p>
      </div>
    </div>

    <!-- Scripts -->
    <?= $this->tag->javascriptinclude('vendor/jquery/dist/jquery.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/popper.js/dist/umd/popper.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/bootstrap/dist/js/bootstrap.min.js') ?>
    <?= $this->tag->javascriptinclude('theme/js/custom.js') ?>
  </body>
</html>
";}