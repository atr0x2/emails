<div class="block">
    <div class="content-cell">
        <span class="small">1 декабря 2012</span>
    </div>
    <div class="content-cell-3">
        <div class="post-cat-box">
            <a class="small mar5r" href="#">Письма</a>
            <a class="small mar5r" href="#">Экономика и финансы</a>
            <a class="small mar5r" href="#">Санкт-Петербург и ЛО</a>
        </div>
    </div>
    <div class="content-cell-last">
        <span class="star-box red"><span class="star"></span> 451</span>
        <?php echo CHtml::tag('span', array('class' => 'icon comments'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '1 450', true); ?>
        &nbsp;
        <?php echo CHtml::tag('span', array('class' => 'icon views'), '', true); ?>
        <?php echo CHtml::tag('span', array('class' => 'small noline'), '12 450', true); ?>
    </div>
</div>
<div class="block">
    <div class="content-cell">
        <img src="../images/article-9.jpg" />
        <span class="photo-line"></span>
    </div>
    <div class="content-cell-3">
        <h2 class="upper bold nomargin">Блогеры совсем против курения</h2>
        <div class="clearfix"></div>
        <div class="tags-box">
            <span>Тэги:</span>
            <a class="" href="#">Котик</a>,
            <a class="" href="#">Собачка</a>,
            <a class="" href="#">Путин</a>,
            <a class="" href="#">Медведев</a>,
            <a class="" href="#">Плохо</a>,
            <a class="" href="#">Очень плохо</a>,
            <a class="" href="#">Совсем плохо</a>
        </div>
    </div>
    <div class="content-cell-last">
        <img src="../images/article-15.jpg" class="lo-block mar15r"/>
        <span class="grey upper bold small">Автор:</span><br>
        <a class="post-small-title" href="#">
            Анатолий Часовских
        </a>
        <br><br>
        <span class="grey upper bold small">Адресат:</span><br>
        <a class="post-small-title" href="#">
            Путин В.В.
        </a>
    </div>
</div>
<div class="block">
    <div class="content-cell">
        <span class="icon-large page icon-va-top"></span>
        <span class="upper small bold">Официальный ответ</span>
        <span class="double-space"></span>
        <img src="../images/article-16.jpg" class="lo-block mar15r"/>
        <i class="dark-grey small">Мы уже обозначили проблему,  знаем, что она стоит остро и уже работаем над этим...</i> 
        <span class="double-space"></span>
        <a class="post-small-title" href="#">
            Медведев Дмитрий Анатольевич
        </a>
        <span class="space"></span>
        <i class="dark-grey small">Пресс-секретарь Путина В.В.</i>
    </div>
    <div class="content-cell-4-last">
        <div class="letter-page">
            <div class="anot-box">
                Американская разведка обнаружила признаки подготовки к использованию властями Сирии химического оружия. Эта новость появились на фоне сообщений о многочисленных успехах сирийских повстанцев внутри страны.
            </div>
            <span class="double-space"></span>
            <h4>Как дальше жить?</h4>
            <span class="double-space"></span>            
            <p>О том, что сирийские военные начали извлекать со складов химические боеприпасы и развозить их по стране, стало известно всего несколько дней назад благодаря источникам в разведке США. Почти одновременно появились данные о том, что инженеры-химики начали свозить в одно место хранящиеся отдельно компоненты для изготовления зарина - высокотоксичного нервно-паралитического газа.</p>
            <p>В столице при этом ситуация не намного лучше. Взрывы и перестрелки в центре города стали обычным делом. На окраинах днем ситуацию контролируют правительственные силы, а ночью - повстанцы. Дело дошло до того, что оппозиционеры фактически лишили столицу страны международного аэропорта, перерезав главную дорогу, ведущую к нему из Дамаска. Несмотря на заявления властей о том, что аэропорт работает "в нормальном режиме", даже отчаянные оптимисты из Egypt Air перестали осуществлять рейсы туда.</p>
            <div class="attachments-block">
                <span class="attachments-title">Прикрепленные файлы</span>
                <div class="attachments-box">
                    <img src="../images/attach1.jpg"/>
                    <span class="double-space"></span>  
                    <a class="post-small-title" href="#">
                        Медведев Дмитрий Анатольевич
                    </a>
                </div>
                <div class="attachments-box">
                    <img src="../images/attach2.jpg"/>
                    <span class="double-space"></span>  
                    <a class="post-small-title" href="#">
                        ИНН
                    </a>
                </div>
                <div class="attachments-box">
                    <img src="../images/attach3.jpg"/>
                    <span class="double-space"></span>  
                    <a class="post-small-title" href="#">
                        Какаято лицензия о чем-то
                    </a>
                </div>
            </div>
        </div>
        <div class="letter-action-block">
            <span class="star lo-block"></span>
            <?php echo CHtml::button('Да, это важно', array('class' => 'grey-button')) ?>
            <a class="post-small-title" href="#">
                Отправить другу
            </a>
            <a class="post-small-title" href="#">
                Распечатать
            </a>
            <div class="socialnet-box ro-block">
                <a href="#" class="facebook"></a>
                <a href="#" class="twitter"></a>
                <a href="#" class="vk"></a>
                <a href="#" class="google"></a>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="comments-block">
        <div class="comment-row">
            <div class="content-cell">
                <label>Немного о вас</label>
            </div>
            <div class="content-cell-4-last">
                <?php
                echo CHtml::tag('input', array(
                    'class' => 'small dark-grey large-input',
                    'type' => 'text',
                    'name' => 'search-text',
                    'placeholder' => 'Представтесь, пожалуйста'
                ));
                ?>
                <?php
                echo CHtml::tag('input', array(
                    'class' => 'small dark-grey small-input',
                    'type' => 'text',
                    'name' => 'search-text',
                    'placeholder' => 'Ваш возраст'
                ));
                ?>
                <?php
                echo CHtml::tag('input', array(
                    'class' => 'small dark-grey normal-input',
                    'type' => 'text',
                    'name' => 'search-text',
                    'placeholder' => 'Email'
                ));
                ?>
                <span class="grey middle">Не публикуется</span>
            </div>
        </div>
        <div class="comment-row">
            <div class="content-cell">
                <label>Ваш комментарий</label>
            </div>
            <div class="content-cell-4-last">
                <?php echo CHtml::textArea('text', '', array('class' => 'wide noresize dark-grey', 'placeholder' => 'Текст комментария', 'rows' => 4)); ?>
                <?php echo CHtml::button('Комментировать', array('class' => 'red-button button-large')) ?>
            </div>
        </div>
        <span class="double-space"></span>
        <div class="content-cell empty"></div>
        <div class="content-cell-4-last">
            <h1 class="upper">2 Комментария</h1>
        </div>
        <span class="double-space"></span>
        <div class="comment-row">
            <div class="content-cell">
                <label><span class="lo-block dark-grey">#</span>Автор</label>
            </div>
            <div class="content-cell-4-last">
                <div class="content-cell-3">
                    <a class="post-small-title comment-author" href="#">
                        Александр Лагута
                    </a>
                </div>
                <div class="content-cell-last ro-block tar">
                    <span class="grey small">2 декабря 2012, 18:00</span>
                </div>
                <span class="double-space"></span>
                В крупном ДТП в США столкнулись 140 автомобилей, погибли два человека
            </div>
        </div>
        <div class="comment-row">
            <div class="content-cell empty"></div>
            <div class="content-cell-4-last">
                <hr class="light nomargin"/>
            </div>
        </div>
        <div class="comment-row">
            <div class="content-cell">
                <label><span class="lo-block dark-grey">#</span></label>
            </div>
            <div class="content-cell-4-last">
                <div class="content-cell-3">
                    <a class="post-small-title comment-author" href="#">
                        Александр Прокопенко
                    </a>
                </div>
                <div class="content-cell-last ro-block tar">
                    <span class="grey small">2 декабря 2012, 18:00</span>
                </div>
                <span class="double-space"></span>
                Следствие по уголовному делу, как сообщил "Интерфаксу" адвокат одного из фигурантов, продлено до 10 февраля, когда заканчивается срок содержания под стражей Екатерины Сметановой и еще одного фигуранта дела, мужа Сметановой Максима Закутайло. При этом следователь по делу сообщил суду, что срок следствия продлен до 10 апреля.
            </div>
        </div>
        <span class="double-space"></span>
        <div class="comment-row">
            <div class="content-cell empty"></div>
            <div class="content-cell-4-last">
                <?php echo CHtml::button('Показать еще', array('class' => 'grey-button button-large')) ?>
            </div>
        </div>
    </div>
</div>