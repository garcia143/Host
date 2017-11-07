<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="<?= $appName ?>" />
    <title><?= $pageTitle ?> | <?= $appName ?></title>
    <!-- Styles -->
    <?= $this->tag->stylesheetlink('vendor/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetlink('theme/css/portal.css') ?>
  </head>
  <body class="signup-page">

    <div class="container">
      
<div class="signup">
  <?= $this->tag->form([]) ?>

  <?= $form->render('_token', ['value' => $this->security->getToken()]) ?>

  <div class="form-group">
    <label for="fullname"><?= $this->translate->_('LABEL_FULLNAME') ?></label>
    <?= $form->render('fullname') ?>
    <?= $form->messages('fullname') ?>
  </div>

  <div class="form-group">
    <label for="email"><?= $this->translate->_('LABEL_EMAIL') ?></label>
    <?= $form->render('email') ?>
  </div>

  <div class="form-group">
    <label for="password"><?= $this->translate->_('LABEL_PASSWORD') ?></label>
    <?= $form->render('password') ?>
  </div>

  <div class="form-group">
    <label for="passconf"><?= $this->translate->_('LABEL_PASSCONF') ?></label>
    <?= $form->render('passconf') ?>
  </div>

  <div class="form-group">
    <label for="phonenumber"><?= $this->translate->_('LABEL_PHONENUMBER') ?></label>
    <?= $form->render('phonenumber') ?>
  </div>

  <button type="submit" class="btn btn-success"><?= $this->translate->_('BTN_SIGNUP') ?></button>

  <?= $this->tag->endForm() ?>
  <div class="go-signin">
    <?= $this->translate->_('LABEL_ALREADYHASACCOUNT') ?> ? <a href="#"><?= $this->translate->_('BTN_SIGNIN') ?></a>
  </div>
</div>

    </div>

    <!-- Scripts -->
    <?= $this->tag->javascriptinclude('vendor/jquery/dist/jquery.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/popper.js/dist/umd/popper.min.js') ?>
    <?= $this->tag->javascriptinclude('vendor/bootstrap/dist/js/bootstrap.min.js') ?>
  </body>
</html>
