<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Maps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Maps page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>

