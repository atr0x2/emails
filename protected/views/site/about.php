<h2 class="upper bold">О сайте</h2>
<hr class="dashed-line nomargin"/>
<?php
$this->widget('zii.widgets.CMenu', array(
    'htmlOptions' => array('class' => 'nopad horiz hor-nav-menu mar15v'),
    'items' => array(
        array('label' => 'О Чем этот проект', 'url' => array('#'), 'itemOptions' => array('class' => 'active')),
        array('label' => 'Наша миссия', 'url' => array('#')),
        array('label' => 'История проекта', 'url' => array('#')),
        array('label' => 'Команда', 'url' => array('site/smi')),
    ),
));
?>
<hr class="dashed-line"/>
<div class="block">
    <div class="mini-post-block-2">
        <h1>
            Федеральный сервис открытых писем<br>и отзывов
        </h1>
    </div>
    <div class="mini-post-block">
        <div class="">
            <?php echo CHtml::tag('span', array('class' => 'vlarge'), '35 670', true); ?><br>
            <?php echo CHtml::tag('span', array('class' => 'middle13 bold'), 'Писем, отзывов и жалоб<br>в системе описания<br>параметра', true); ?>
        </div>
    </div>
    <div class="mini-post-block">
        <div class="">
            <?php echo CHtml::tag('span', array('class' => 'vlarge blue'), '5 289', true); ?><br>
            <?php echo CHtml::tag('span', array('class' => 'middle13 bold'), 'В среднем писем на<br>каждый Федеральный<br>округ', true); ?>
        </div>
    </div>
    <div class="mini-post-block">
        <div class="">
            <?php echo CHtml::tag('span', array('class' => 'vlarge red'), '1 247', true); ?><br>
            <?php echo CHtml::tag('span', array('class' => 'middle13 bold'), 'Официальных ответов на<br>открытые письма', true); ?>
        </div>
    </div>
</div>
<div class="block">
    <div class="mini-post-block-2">
        <p>О том, что сирийские военные начали извлекать со складов химические боеприпасы и развозить их по стране, стало известно всего несколько дней назад благодаря источникам в разведке США.<br>
        </p>
        <p>Почти одновременно появились данные о том, что инженеры-химики начали свозить в одно место хранящиеся отдельно компоненты для изготовления зарина - высокотоксичного нервно-паралитического газа.
        </p>
    </div>
    <div class="mini-post-block">
        <p>В столице при этом ситуация не намного лучше. Взрывы и перестрелки в центре города стали обычным делом. </p>
    </div>
    <div class="mini-post-block">
        <p>На окраинах днем ситуацию контролируют правительственные силы, а ночью - повстанцы. Дело дошло до того, что оппозиционеры фактически лишили столицу страны международного аэропорта, перерезав главную дорогу, ведущую к нему из Дамаска. </p>
    </div>
    <div class="mini-post-block">
        <p>Несмотря на заявления властей о том, что аэропорт работает "в нормальном режиме", даже отчаянные оптимисты из Egypt Air перестали осуществлять рейсы туда.</p>
    </div>
</div>
<div class="block">
    <h3 class="title-line"><span class="bg-white"><span class="icon-large page"></span>Официальные ответы</span></h3>
    <div class="mini-post-block">
        <img src="../images/article-6.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                Путин Владимир Владимирович
            </a>
            <span class="space"></span>
            <i class="small grey">Глава, владыка и Великий Царь всея Руси</i>
        </div>
    </div>
    <div class="mini-post-block">
        <div class="pad15h">
            <a href="#" class="post-small-title">
                Украина находилась в списке сайтов по ошибке
            </a>
        </div>
        <span class="double-space"></span>
        <div class="answer-quote">
            <a href="#" class="post-small-title">
                Да, НО В Татарстане администрация СИЗО приступила к выполнению плана
            </a>
            <span class="space"></span>
            <i class="middle">Первые экспериментальные камеры для некурящих получили одобрительные отзывы подследственных</i>
        </div>
        <span class="space"></span>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
    </div>
    <div class="mini-post-block">
        <img src="../images/article-7.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                Анатолий Часовских
            </a>
            <span class="space"></span>
            <i class="small grey">Руководителя СУНЦ МГУ</i>
            <span class="space"></span>
            <div class="w-answer-title-part-l">
                <a href="#" class="post-small-title">
                    особый директор творит что попало
                </a>
            </div>
            <div class="w-answer-title-part-r">
                <i class="small dark-grey">Это не я! Мне одпинули!
                    Руководителя СУНЦ МГУ заподозрили в научном подлоге</i>
            </div>
        </div>
    </div>
    <div class="mini-post-block">
        <img src="../images/article-8.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                лев николаевич толстой
            </a>
            <span class="space"></span>
            <i class="small grey">Он не знал о крткости</i>
            <span class="space"></span>
            <div class="w-answer-title-part-l">
                <a href="#" class="post-small-title">
                    Счет в пользу консерваторов
                </a>
            </div>
            <div class="w-answer-title-part-r">
                <i class="small dark-grey">Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                    Вот такой он молодец. Умеет и могет</i>
            </div>
        </div>
    </div>
    <div class="mini-post-block">
        <img src="../images/article-9.jpg" />
        <div class="post-title-block">
            <a href="#" class="post-small-title">
                <span class="line"></span>
                пушкин александр
            </a>
            <span class="space"></span>
            <i class="small grey">Хулиган, любит пострелять</i>
            <span class="space"></span>
            <div class="w-answer-title-part-l">
                <a href="#" class="post-small-title">
                    директор творит что попало
                </a>
            </div>
            <div class="w-answer-title-part-r">
                <i class="small dark-grey">Президент Владимир Путин в середине ноября 2012 года поддержал проект пенсионной реформы</i>
            </div>
        </div>
    </div>
</div>