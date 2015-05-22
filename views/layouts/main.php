<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo yii\helpers\Html::encode($this->title ?: 'Yii Foo') ?></title>

        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <?php echo $content ?>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
