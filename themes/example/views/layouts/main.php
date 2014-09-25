<?php $themeBaseUrl = Yii::app()->theme->baseUrl;?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo $themeBaseUrl . '/bower_components/bootstrap/dist/css/bootstrap.css' ?>" />


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  </head>

  <body>
    <div class="container">

      <?php $this->beginContent('//layouts/header'); ?>
      <?php $this->endContent(); ?>

      <div class="alert_message alert fade in hide text-center">
        <button class="close" type="button">×</button>
        <span></span>
      </div>
      <?php echo $content; ?>
  
      <?php $this->beginContent('//layouts/footer'); ?>
      <?php $this->endContent(); ?>
    
    </div>
  </body>
</html>
