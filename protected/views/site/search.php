<h2 class="upper bold">Расширенный поиск</h2>
<hr class="dashed-line"/>
<div class="block">
    <?php
    $this->beginWidget('CActiveForm', array(
        'id' => 'top-search-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
    ));
    ?>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Ключевые слова</label>
        </div>
        <div class="content-cell-3">
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-search-input wide',
                'type' => 'text',
                'name' => 'search-text',
            ));
            ?>
        </div>
        <div class="content-cell">
            <span class="grey middle">Примечание</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Категории</label>
        </div>
        <div class="content-cell">
            <?php
            echo CHtml::dropDownList('categories', '', array('Empty' => 'Все категории', '1' => 'Категория 1'), array('class' => 'wide dark-grey small'));
            ?>
        </div>
        <div class="content-cell-2">
            <?php echo CHtml::checkBox('ch1', true, array('class' => 'styled')) ?>
            <label for="ch1" class="dark-grey middle">Только с официальными ответами</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Один выбор</label>
        </div>
        <div class="content-cell">
            <?php echo CHtml::radioButton('rb1', true, array('id' => 'rb1', 'class' => 'styled', 'value' => '1')); ?>
            <label for="rb1" class="dark-grey middle">Вариант номер раз</label>
        </div>
        <div class="content-cell">
            <?php echo CHtml::radioButton('rb1', false, array('id' => 'rb2', 'class' => 'styled', 'value' => '2')); ?>
            <label for="rb2" class="dark-grey middle">Имя второго варианта</label>
        </div> 
        <div class="content-cell">
            <?php echo CHtml::radioButton('rb1', false, array('id' => 'rb3', 'class' => 'styled', 'value' => '3')); ?>
            <label for="rb3" class="dark-grey middle">Третий вариант</label>
        </div> 
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Несколько</label>
        </div>
        <div class="content-cell-4-last">
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch2', true, array('class' => 'styled')) ?>
                <label for="ch2" class="dark-grey middle">Самая пожилая жительница</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch3', false, array('class' => 'styled')) ?>
                <label for="ch3" class="dark-grey middle">За распространение слухов о конце света в</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch4', true, array('class' => 'styled')) ?>
                <label for="ch4" class="dark-grey middle">Москва требует от США консульский доступ</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch5', true, array('class' => 'styled')) ?>
                <label for="ch5" class="dark-grey middle">Земли скончалась в США в возрасте 115 лет</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch6', false, array('class' => 'styled')) ?>
                <label for="ch6" class="dark-grey middle">Земли скончалась в США в возрасте 115 лет</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch7', true, array('class' => 'styled')) ?>
                <label for="ch7" class="dark-grey middle">Китае арестованы 93 человека</label>
            </div>
            <div class="content-cell mar10b">
                <?php echo CHtml::checkBox('ch8', false, array('class' => 'styled')) ?>
                <label for="ch8" class="dark-grey middle">К приёмному ребёнку из России</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Текстовое поле</label>
        </div>
        <div class="content-cell-3">
            <?php echo CHtml::textArea('text', '', array('class' => 'wide noresize dark-grey', 'rows' => 4)); ?>
        </div>
    </div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Диапазон</label>
        </div>
        <div class="content-cell">
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-input',
                'type' => 'text',
                'name' => 'search-text',
            ));
            ?>
            <span class="grey">—</span>
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-input',
                'type' => 'text',
                'name' => 'search-text',
            ));
            ?>
        </div>
        <div class="content-cell">
            <label class="middle red">Сообщение об ошибке!</label>
        </div>
    </div>
    <div class="row">
        <div class="content-cell empty">
        </div>
        <div class="content-cell-4-last">
            <hr class="light mar10t">
        </div>
    </div>
    <div class="row">
        <div class="content-cell empty">
        </div>
        <div class="content-cell">
            <?php echo CHtml::button('Искать', array('class' => 'wide grey-button'))?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div class="clearfix mar15v"></div>
<div class="block">
    <h3 class="title-line"><span class="bg-white">Топ обсуждаемых</span></h3>
    <div class="mini-post-block">
        <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
        <img src="../images/article-1.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                YTube находился в список сайтов по ошибке
            </a>
        </div>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
    <div class="mini-post-block">
        <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
        <img src="../images/article-2.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                Блогеры против
            </a>
            <a href="#" class="post-comment-link"></a>
        </div>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
    <div class="mini-post-block">
        <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
        <img src="../images/article-3.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                украина находилась в список запрещенных сайтов по ошибке
            </a>
            <a href="#" class="post-comment-link"></a>
        </div>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
    <div class="mini-post-block">
        <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
        <img src="../images/article-4.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                "Челси" уволил тренера победителя Лиги чемпионов
            </a>
        </div>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
    <div class="mini-post-block">
        <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
        <img src="../images/article-5.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                Зайцам вход воспрещен
            </a>
        </div>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
</div>