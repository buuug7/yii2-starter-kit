<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = Yii::t('common', 'Create {modelClass}', [
    'modelClass' => Yii::t('common', 'Videos'),
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
