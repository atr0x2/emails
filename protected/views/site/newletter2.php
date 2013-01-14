<h2 class="upper bold">Написать письмо или отзыв
    <div class="content-top-actions-box">
        <span class="steps">2/2</span>
    </div> 
</h2>
<hr class="dashed-line"/>
<div class="clearfix mar15v"></div>
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
            <label class="upper bold large">Темы письма</label>
        </div>
        <div class="content-cell-4-last">
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch1', true, array('class' => 'styled')) ?>
                <label for="ch1" class="dark-grey middle">бизнес</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch2', false, array('class' => 'styled')) ?>
                <label for="ch2" class="dark-grey middle">психология</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch3', true, array('class' => 'styled')) ?>
                <label for="ch3" class="dark-grey middle">политика</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch4', false, array('class' => 'styled')) ?>
                <label for="ch4" class="dark-grey middle">психология</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch5', true, array('class' => 'styled')) ?>
                <label for="ch5" class="dark-grey middle">спорт</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch6', false, array('class' => 'styled')) ?>
                <label for="ch6" class="dark-grey middle">мотивация</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch7', true, array('class' => 'styled')) ?>
                <label for="ch7" class="dark-grey middle">отдых</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch8', false, array('class' => 'styled')) ?>
                <label for="ch8" class="dark-grey middle">Москва</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch9', false, array('class' => 'styled')) ?>
                <label for="ch9" class="dark-grey middle">политика</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch10', false, array('class' => 'styled')) ?>
                <label for="ch10" class="dark-grey middle">Россия</label>
            </div>
            <div class="content-cell">
                <?php echo CHtml::checkBox('ch11', false, array('class' => 'styled')) ?>
                <label for="ch11" class="dark-grey middle">развлечения</label>
            </div>
            <span class="double-space"></span>
            <div class="content-cell">
                <?php
                echo CHtml::tag('input', array(
                    'class' => 'small dark-grey normal-input',
                    'type' => 'text',
                    'name' => 'search-text',
                ));
                ?>
            </div>
            <span class="double-space"></span>
            <div class="content-cell">
                <a href="#" class="middle">Добавить</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Тэги</label>
        </div>
        <div class="content-cell-3">
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-search-input wide3 thin',
                'type' => 'text',
                'name' => 'search-text',
            ));
            ?>
        </div>
        <div class="content-cell">
            <span class="grey middle">Введите через запятую</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Ваши контакты</label>
        </div>
        <div class="content-cell-3">
            <?php echo CHtml::textArea('text', '', array('class' => 'wide noresize dark-grey', 'rows' => 4)); ?>
        </div>
        <div class="content-cell">
            <span class="grey middle">Необходимы для получения обратной связи.<br>Не обязательно.</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Соглашение</label>
        </div>
        <div class="content-cell-4-last">
            <div class="lo-block border-styled">
                <div class="middle dark-grey mar15v mar15h lo-block">
                    <p>За все время работы с рекламой, дизайном, организацией любых творческих процессов, автор вывел для себя важное правило: можно делать что угодно и как угодно. Главное, чтобы в основе работы лежал принцип.
                        Принцип может быть любым (много разных принципов — тоже хорошо). Например, всегда выкидывать первый показанный эскиз. Или писать все заголовки без прилагательных. Или оканчивать все названия товаров на «-ус». Или красить боковинку оранжевым. Или что угодно еще. Наличие принципа — одна из самых удобных форм ограничения. А без ограничений не бывает творческого процесса (см. предыдущий параграф).</p>
                    <p>Автор достаточно много путешествует, посетил более пяти сотен различных мест более чем в 120 странах. Во время этих поездок нельзя было не заметить разницу во внешнем виде городов. И нельзя было не заметить, что в одних странах хорошо, а в других плохо. Хорошо в Европе. Плохо в Африке. Хорошо в Азии. Плохо в России. И нельзя было не сделать вывод о том, что на разницу во внешнем виде городов влияет разница в психологии людей.
                        Пунктирная ссылка означает, что нажатие на текст произведет некое действие (откроется калькулятор, приедет подсказка, раскроется подробность), а повторное нажатие вернет все в исходное состояние. Пунктирные ссылки не должны переносить читателя на другую страницу. А сплошное подчеркивание, в свою очередь, нельзя использовать для временно вызываемых элементов. Проверка дизайна на правильность проста: если зритель, не притрагиваясь к мыши, может угадать, где ссылка, а где нет, — перед нами хороший сайт. Это правило перевешивает все остальные.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell empty"> </div>
        <div class="content-cell-4-last">
            <?php echo CHtml::checkBox('ch20', true, array('class' => 'styled')) ?>
            <label for="ch20" class="dark-grey middle">Я принимаю условия данного соглашения</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell empty"> </div>
        <div class="content-cell-4-last">
            <hr class="light nomargin">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell empty">
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::submitButton('Опубликовать', array('class' => 'wide grey-button')) ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php $this->endWidget(); ?>
</div>