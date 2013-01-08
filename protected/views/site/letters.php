<h2 class="upper bold">
    Письма и отзывы
    <div class="top-sort-panel-box">
        <a href="#" class="sort-icon cubs active"></a>
        <a href="index.php?r=site/letterslist" class="sort-icon rows"></a>
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
    <div class="mini-post-block clearfix">
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
            <img src="../images/article-12.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    YTube находился в список сайтов по ошибке
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                Вот такой он молодец. Умеет и могет
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
            <img src="../images/article-1.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    YTube находился в список сайтов по ошибке
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Игорь Юргенс рассказал "Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                Вот такой он молодец. Умеет и могет
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
            <img src="../images/article-17.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    зайцам вход воспрещен
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Либералы призвали египтян противостоять декларации президента Мурси. Вот такие пироги выдает Яндекс
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <div class="mini-post-block clearfix">
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
            <img src="../images/article-2.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    Блогеры против
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Это не я! Мне одпинули!
                Руководителя СУНЦ МГУ заподозрили в научном подлоге
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
            <img src="../images/article-13.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    зайцам вход воспрещен
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Либералы призвали египтян противостоять декларации президента Мурси. Вот такие пироги выдает Яндекс
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
            <img src="../images/article-7.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    зайцам вход воспрещен
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Либералы призвали египтян противостоять декларации президента Мурси. Вот такие пироги выдает Яндекс
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <div class="mini-post-block clearfix">
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
            <img src="../images/article-24.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    украина находилась в список запрещенных сайтов по ошибке
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                Вот такой он молодец. Умеет и могет
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
            <img src="../images/article-3.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    украина находилась в список запрещенных сайтов по ошибке
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                Вот такой он молодец. Умеет и могет
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
            <img src="../images/article-22.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    Блогеры против
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Это не я! Мне одпинули!
                Руководителя СУНЦ МГУ заподозрили в научном подлоге
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <div class="mini-post-block clearfix">
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Жалоба</a>&nbsp;<a href="#" class="small">Спорт</a></div>
            <img src="../images/article-4.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    "Челси" уволил тренера победителя Лиги чемпионов
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Президент Владимир Путин в середине ноября 2012 года поддержал проект пенсионной реформы
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
            <img src="../images/article-18.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    "Челси" уволил тренера победителя Лиги чемпионов
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Президент Владимир Путин в середине ноября 2012 года поддержал проект пенсионной реформы
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
            <img src="../images/article-14.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    украина находилась в список запрещенных сайтов по ошибке
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Ленте.ру" о вреде поддержанной Путиным пенсионной реформы
                Вот такой он молодец. Умеет и могет
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
    <div class="mini-post-block clearfix">
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
            <img src="../images/article-23.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    зайцам вход воспрещен
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Либералы призвали египтян противостоять декларации президента Мурси. Вот такие пироги выдает Яндекс
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Письмо</a>&nbsp;<a href="#" class="small">Политика</a></div>
            <img src="../images/article-19.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title comlink">
                    <span class="line"></span>
                    Блогеры против
                </a>
                <a href="#" class="post-comment-link"></a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Это не я! Мне одпинули!
                Руководителя СУНЦ МГУ заподозрили в научном подлоге
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
        <div class="mini-post-block clearfix mar20b">
            <div class="post-cat-box"><a href="#" class="small">Отзыв</a>&nbsp;<a href="#" class="small">Общество и жизнь</a></div>
            <img src="../images/article-20.jpg" />
            <div class="post-title-block">
                <a href="#" class="post-small-title">
                    <span class="line"></span>
                    "Челси" уволил тренера победителя Лиги чемпионов
                </a>
                <div class="post-rate-stars"></div>
            </div>
            <span class="small dark-grey">
                Президент Владимир Путин в середине ноября 2012 года поддержал проект пенсионной реформы
            </span>
            <span class="space"></span>
            <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
            &nbsp;
            <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
            <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        </div>
    </div>
</div>