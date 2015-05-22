<?php $this->registerCss("
body, html { margin: 0; padding: 0; width: 100%; height: 100%; color: #838383; display: table; font-weight: 300; font-family: 'Lato Light'; }
.container { text-align: center; display: table-cell; vertical-align: middle; }
.content { text-align: center; display: inline-block; }
.title { font-size: 75px; margin-bottom: 40px;}
.quote { font-size: 30px; }
") ?>

<div class="container">
    <div class="content">
        <div class="title">Yii Foo</div>
        <div class="quote"><?php echo $inspire; ?></div>
    </div>
</div>
