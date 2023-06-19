<?php
use yii\helpers\Html;
?>
<h1>Страница администратора</h1>

<div class="well">
    <p><strong>Фамилия:</strong> <?= Html::encode($user->last_name) ?></p>
    <p><strong>Имя:</strong> <?= Html::encode($user->first_name) ?></p>
    <p><strong>Роль:</strong> <?= Yii::$app->user->identity->role ?></p>
</div>
