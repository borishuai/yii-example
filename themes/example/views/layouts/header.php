<?php if (!Yii::app()->user->isGuest): ?>
  <div class="index-header content-center">
    <div class="index-header__banner text-right grey">
      <?php echo Yii::t('common', 'header_banner_welcome') . Yii::app()->user->name; ?>
      <a class="index-header_user-logout inline-block" href="<?php echo Yii::app()->createUrl('user/logout'); ?>">[<?php echo Yii::t('common', 'header_banner_logout'); ?>]</a>
    </div>
  
    <div class="index-header__logo overflow-hidden">
      <img class="index-header__logo-image pull-left" src="<?php echo Yii::app()->theme->baseUrl . '/css/images/logo.png'; ?>" alt="<?php echo Yii::t('common', 'header_logo_alt')?>" title="<?php echo Yii::t('common', 'header_logo_alt')?>"/>
      <img class="index-header__logo-title-split pull-left" src="<?php echo Yii::app()->theme->baseUrl . '/css/images/logo_split.png'; ?>" />
      <h3 class="index-header__logo-title-text pull-left"><?php echo Yii::t('common', 'header_logo_alt'); ?></h3>
    </div>
  </div>
  
  <div class="menu js-menu">
    <ul class="menu__list content-center nav nav-pills text-center bold">
      <li class="menu__item js-menu-home">
        <a href="<?php echo Yii::app()->createUrl('user/index'); ?>"><?php echo Yii::t('common', 'header_menu_home'); ?></a>
      </li>
      <li class="menu__item js-menu-profile">
        <a href="<?php echo Yii::app()->createUrl('user/profile'); ?>"><?php echo Yii::t('common', 'header_menu_user_profile'); ?></a>
      </li>
    </ul>
  </div>

<?php else: ?>
<div class="unlogin-index-header clearfix">
</div>
<?php endif; ?>
