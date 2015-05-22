<?php $this->registerCss("
body, html { margin: 0; padding: 0; width: 100%; height: 100%; color: #838383; display: table; font-weight: 300; font-family: 'Lato Light'; }
a { color: #009688; text-decoration: none; background-color: transparent; }
.container { text-align: center; display: table-cell; vertical-align: middle; }
.content { text-align: center; display: inline-block; }
.title { font-size: 75px; margin-bottom: 40px; }
.litle { font-size: 20px; text-align: right; margin-bottom: 40px; }
.quote { font-size: 30px; text-align: right; }
") ?>

<div class="container">
    <div class="content">
        <div class="title"><?php echo yii\helpers\HTML::a('Dependency Injection Container', ['/site']) ?></div>

        <div class="litle"><?php echo $description; ?></div>

        <?php foreach ($inspires as $inspire): ?>
        <div class="quote"><?php echo $inspire; ?></div>
        <?php endforeach; ?>
    </div>
</div>
