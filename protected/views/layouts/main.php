<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <?php //Yii::app()->bootstrap->registerAllCss(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/custom-form-elements.js'); ?>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <?php $mainpage = (Yii::app()->controller->getId()== 'site' && Yii::app()->controller->getAction()->getId() == 'index')? true : false; ?>
    <body class="<?php echo ($mainpage)?'main':''; ?>">
        <hr class="border5 bg-dark-grey" />
        <div class="wraper-top">
            <div class="wraper-center">
                <div class="wraper-bottom">
                    <div class="wraper">
                        <div id="header">
                            <div id="top-panel">
                                <div class="lang-block">
                                    <?php echo CHtml::tag('span', array('class' => 'grey small'), 'Рус', true); ?>
                                    <?php echo Chtml::tag('span', array(), CHtml::tag('a', array('href' => '#', 'class' => 'small'), 'Eng', true), true); ?>
                                </div>
                                <div id="search-block">
                                    <?php
                                    $this->beginWidget('CActiveForm', array(
                                        'id' => 'top-search-form',
                                        'enableAjaxValidation' => true,
                                        'enableClientValidation' => true,
                                    ));
                                    ?>
                                    <?php
                                    echo CHtml::tag('input', array(
                                        'id' => 'top-search',
                                        'class' => 'small grey normal-input',
                                        'type' => 'text',
                                        'name' => 'search-text',
                                        'placeholder' => 'Поиск по письмам и отзывам'
                                    ));
                                    echo CHtml::tag('input', array(
                                        'id' => 'top-search-button',
                                        'class' => 'small-search-input-button',
                                        'type' => 'submit',
                                        'name' => 'search',
                                        'value' => ''
                                    ));
                                    ?>
                                    <?php $this->endWidget(); ?>
                                </div>
                                <div id="enter-block" class="ro-block">
                                    <?php echo CHtml::tag('span', array('class' => 'icon key'), '', true); ?>
                                    <?php echo CHtml::tag('a', array('href' => '#', 'class' => 'small dotted'), 'Войдите', true); ?>
                                    <?php echo CHtml::tag('span', array('class' => 'small grey'), '&nbsp;&nbsp;или&nbsp;&nbsp;', true); ?>
                                    <?php echo CHtml::tag('a', array('href' => '#', 'class' => 'small'), 'Зарегистрируйтесь', true); ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <a href="index.php?r=site/index" id="logo"></a>
                            <div id="main-panel">
                                <div id="main-filter-block">
                                    <?php echo CHtml::tag('a', array('href' => 'index.php?r=site/search', 'class' => 'upper middle active'), 'Все регионы', true); ?>
                                    <?php echo CHtml::tag('a', array('href' => '#', 'class' => 'upper middle'), 'Санкт-Петербург и ло', true); ?>
                                    <div id="nav-map-box">
                                        <span class="nav-map"></span>
                                    </div>
                                    <?php echo CHtml::tag('a', array('href' => '#', 'class' => 'grey small dotted nopad think'), 'Настроить', true); ?>
                                </div>
                                <div id="main-navigation-block">
                                    <?php
                                    $this->widget('zii.widgets.CMenu', array(
                                        'id' => 'section-nav',
                                        'htmlOptions' => array('class' => 'nopad horiz nomargin'),
                                        'items' => array(
                                            array('label' => 'Письма', 'url' => array('site/letter'), 'itemOptions' => array('class' => '')),
                                            array('label' => 'Ответы', 'url' => array('site/letters')),
                                            array('label' => 'Эксперты', 'url' => array('#')),
                                            array('label' => 'Сми', 'url' => array('site/smi')),
                                        ),
                                    ));
                                    ?>
                                    <?php echo Chtml::link('<span class="icon pencil"></span>Написать письмо или отзыв', '#', array('id' => 'top-send-letter-link', 'class' => 'large upper')); ?>
                                    <hr>
                                        <?php
                                        $this->widget('zii.widgets.CMenu', array(
                                            'id' => 'main-nav',
                                            'htmlOptions' => array('class' => 'nopad horiz nomargin'),
                                            'items' => array(
                                                array('label' => 'О сайте', 'url' => array('site/about')),
                                                array('label' => 'Статьи', 'url' => array('#')),
                                                array('label' => 'Реклама на сайте', 'url' => array('#')),
                                                array('label' => 'Сотрудничество', 'url' => array('#')),
                                                array('label' => 'Форум', 'url' => array('#')),
                                                array('label' => 'Наш информер', 'url' => array('#'), 'itemOptions' => array('class' => '')),
                                                array('label' => 'Сми о нас', 'url' => array('#')),
                                                array('label' => 'Помощь', 'url' => array('#')),
                                            ),
                                        ));
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <?php if($mainpage): ?>
                        <div id="main-statistic-block">
                            <div id="slogan-block">
                                <h1>Федеральный сервис открытых писем<br>и отзывов</h1>                                
                                <a href="#" class="small">Подробнее о сайте</a>
                            </div>
                            <div id="counters-block">
                                <div class="counter-box ro-block">
                                    <?php echo CHtml::tag('span', array('class' => 'vlarge red'), '1 247', true); ?><br>
                                        <?php echo CHtml::tag('span', array('class' => 'middle bold'), 'Официальных ответов на<br>открытые письма', true); ?>
                                </div>
                                <div class="counter-box ro-block">
                                    <?php echo CHtml::tag('span', array('class' => 'vlarge blue'), '5 289', true); ?><br>
                                        <?php echo CHtml::tag('span', array('class' => 'middle bold'), 'В среднем писем на<br>каждый Федеральный<br>округ', true); ?>
                                </div>
                                <div class="counter-box ro-block">
                                    <?php echo CHtml::tag('span', array('class' => 'vlarge'), '35 670', true); ?><br>
                                        <?php echo CHtml::tag('span', array('class' => 'middle bold'), 'Писем, отзывов и жалоб<br>в системе описания<br>параметра', true); ?>
                                </div>
                            </div>    
                        </div>
                        <div class="clear"></div>
                        <div id="tabs">
                            <?php
                            $this->widget('zii.widgets.CMenu', array(
                                'id' => 'tabs-list',
                                'htmlOptions' => array('class' => 'nopad horiz nomargin'),
                                'items' => array(
                                    array('label' => 'Все темы', 'url' => array('#'), 'itemOptions' => array('class' => 'active')),
                                    array('label' => 'Политика', 'url' => array('#')),
                                    array('label' => 'Общество', 'url' => array('#')),
                                    array('label' => 'Экономика', 'url' => array('#')),
                                    array('label' => 'Спорт', 'url' => array('#')),
                                    array('label' => 'Развлечения', 'url' => array('#')),
                                    array('label' => 'Жизнь', 'url' => array('#')),
                                ),
                            ));
                            ?>                            
                        </div>
                        <?php endif; ?>
                        <div class="clear"></div>
                        <div id="content">
                            <?php echo $content; ?>
                            <div class="clear clearfix"></div>
                        </div>
                        <?php if($mainpage): ?>
                        <div id="footer-news">
                            <div class="f-n-box">Следствие предъявило обвинение четырем фигурантам дела о гибели людей при наводнении 2012 года на Кубани.</div>
                            <div class="f-n-box">России Владимир Маркин, в числе обвиняемых - бывшие руководители Крымска, Крымского района и станицы Нижнебаканская.</div>
                            <div><a href="#" class="dark-grey">Больше не показывать</a></div>
                        </div>
                        <hr class="light mar10t" />
                        <?php endif; ?>
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm1',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => 'Письма', 'url' => array('#'), 'itemOptions' => array('class' => 'head')),
                                array('label' => 'Написать', 'url' => array('#')),
                                array('label' => 'Поиск писем', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm2',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => 'Ответы', 'url' => array('#'), 'itemOptions' => array('class' => 'head')),
                                array('label' => 'Официальные', 'url' => array('#')),
                                array('label' => 'Топ ответов', 'url' => array('#')),
                                array('label' => 'Поиск по ответам', 'url' => array('#')),
                                array('label' => 'Вопрос ответ', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm3',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => 'Эксперты', 'url' => array('#'), 'itemOptions' => array('class' => 'head')),
                                array('label' => 'Наши эксперты', 'url' => array('#')),
                                array('label' => 'Сторонние', 'url' => array('#')),
                                array('label' => 'Мнения', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm4',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => 'Сми', 'url' => array('#'), 'itemOptions' => array('class' => 'head')),
                                array('label' => 'Официальные статьи', 'url' => array('#')),
                                array('label' => 'Так себе статейки', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm5',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => 'О сайте', 'url' => array('#'), 'itemOptions' => array('class' => 'head')),
                                array('label' => 'О сайте', 'url' => array('#')),
                                array('label' => 'Реклама на сайте', 'url' => array('#')),
                                array('label' => 'Сотрудничество', 'url' => array('#')),
                                array('label' => 'Форум', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm6',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => '', 'itemOptions' => array('class' => 'head')),
                                array('label' => 'Наш информер', 'url' => array('#')),
                                array('label' => 'Помощь', 'url' => array('#')),
                                array('label' => 'Еще раздел', 'url' => array('#')),
                            ),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'fnm7',
                            'htmlOptions' => array('class' => 'f-nav-menu nopad'),
                            'items' => array(
                                array('label' => '', 'itemOptions' => array('class' => 'head'),
                                    'template' => Chtml::link('', '#', array('class' => 'rss-icon')) . Chtml::link('', '#', array('class' => 'twitter-icon')),
                                ),
                                array('label' => '© 2012 E-mail.ru Все авторские права защищены', 'itemOptions' => array('class' => 'small')),
                            ),
                        ));
                        ?>                        
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border5 bg-dark-grey" />
    </body>

</html>
