<h2 class="upper bold">
    Письма и отзывы
    <div class="top-sort-panel-box">
        <a href="index.php?r=site/letters" class="sort-icon cubs"></a>
        <a href="#" class="sort-icon rows active"></a>
    </div>
    <div class="top-sort-box">
        <a href="#" class="small grey active sort-asc">По новизне</a>
        <a href="#" class="small grey sort-desc">По рейтингу</a>
        <a href="#" class="small grey sort-desc">По ответам</a>
    </div>
</h2>
<hr class="dashed-line"/>
<div class="row">
    <div class="content-cell">
        <?php
        echo CHtml::dropDownList('categories', '', array('Empty' => 'Все категории', '1' => 'Категория 1'), array('class' => 'wide dark-grey small'));
        ?>
    </div>
    <div class="content-cell">
        <?php
        echo CHtml::dropDownList('categories', '', array('Empty' => 'Все рубрики', '1' => 'Рубрика 1'), array('class' => 'wide dark-grey small'));
        ?>
    </div>
    <div class="content-cell-2">
        <div class="lo-block">
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey middle-input',
                'type' => 'text',
                'name' => 'search-text',
                'placeholder' => 'Ключевые слова'
            ));
            ?>
        </div>
        <div class="top-filter-checkbox">
            <?php echo CHtml::checkBox('ch1', false, array('class' => 'styled')) ?>
            <span class="label middle dark-grey">С ответами</span>
        </div>
    </div>
    <div class="content-cell-last">
        <?php echo CHtml::button('Показать', array('class' => 'grey-button wide')) ?>
    </div>
</div>
<hr class="dashed-line"/>
<div class="block">
    <div class="row nomargin">
        <div class="content-cell">
            <img src="../images/article-12.jpg" />
        </div>
        <div class="content-cell">
            <a href="#" class="post-small-title">
                YTube находился в список сайтов по ошибке
            </a>
            <div class="rate-stars"></div>
            <a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a>
        </div>
        <div class="content-cell-2">
            <span class="small dark-grey">Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы Вот такой он молодец. Умеет и могет</span>
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <hr class="light"/>
    <div class="row nomargin">
        <div class="content-cell">
            <img src="../images/article-13.jpg" />
        </div>
        <div class="content-cell">
            <a href="#" class="post-small-title">
                "Челси" уволил тренера победителя Лиги чемпионов
            </a>
            <div class="rate-stars"></div>
            <a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Спорт</a>
        </div>
        <div class="content-cell-2">
            <span class="small dark-grey">Либералы призвали египтян противостоять декларации президента Мурси. Вот такие пироги выдает Яндекс</span>
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <hr class="light"/>
    <div class="row nomargin">
        <div class="content-cell">
            <img src="../images/article-14.jpg" />
        </div>
        <div class="content-cell">
            <a href="#" class="post-small-title">
                зайцам вход воспрещен
            </a>
            <div class="rate-stars"></div>
            <a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Общество и жизнь</a>
        </div>
        <div class="content-cell-2">
            <span class="small dark-grey">Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы Вот такой он молодец. Умеет и могет</span>
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            <a href="#" class="comment-link ro-block"></a>
        </div>
    </div>
    <hr class="light"/>
    <div class="row nomargin">
        <div class="content-cell">
            <img src="../images/article-20.jpg" />
        </div>
        <div class="content-cell">
            <a href="#" class="post-small-title">
                YTube находился в список сайтов по ошибке
            </a>
            <div class="rate-stars"></div>
            <a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a>
        </div>
        <div class="content-cell-2">
            <span class="small dark-grey">Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы Вот такой он молодец. Умеет и могет</span>
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <hr class="light"/>
    <div class="row nomargin">
        <div class="content-cell">
            <img src="../images/article-18.jpg" />
        </div>
        <div class="content-cell">
            <a href="#" class="post-small-title">
                Блогеры против курения
            </a>
            <div class="rate-stars"></div>
            <a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Жизнь</a>
        </div>
        <div class="content-cell-2">
            <span class="small dark-grey">Рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы Вот такой он молодец. Умеет и могет</span>
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <hr class="light"/>
    <span class="double-space"></span>
    <div class="pagination-box">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
    </div>
</div>
<span class="double-space"></span><span class="double-space"></span>
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
