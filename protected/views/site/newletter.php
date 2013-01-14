<h2 class="upper bold">Написать письмо или отзыв
    <div class="content-top-actions-box">
        <span class="steps">1/2</span>
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
            <label class="upper bold large">Получатель</label>
        </div>
        <div class="content-cell-3">
            <?php
            echo CHtml::radioButtonList('rb1', '0', array('0' => 'Физическое лицо', '1' => 'Компания'), array(
                'template' => '<span class="horiz">{input}{label}</span>',
                'class' => 'styled',
                'separator' => '<span class="hor-sep"></span>',
                'container' => 'div',
                'labelOptions' => array('class' => 'inline'),
            ));
            ?>
            <span class="space"></span>
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-search-input wide thin',
                'type' => 'text',
                'name' => 'recipient-text',
            ));
            ?>
            <span class="space"></span>
            <span class="middle grey">Введите полное имя, фамилию и отчество</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell-last">
            <label class="upper bold large">Регион получателя</label>
        </div>
        <div class="content-cell-3 mar5t">
            <span class="middle">Россия, Центральный округ, Москва</span>
            <span class="hor-sep"></span>
            <a href="#">Изменить</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Тип письма</label>
        </div>
        <div class="content-cell">
            <?php
            echo CHtml::dropDownList('letter-type', '', array('1' => 'Отзыв', '2' => 'Жалоба', '3' => 'Предложение'), array('class' => 'wide dark-grey small'));
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Характеристика</label>
        </div>
        <div class="content-cell-3">
            <?php
            echo CHtml::radioButtonList('rb2', '0', array('0' => 'Положительный', '1' => 'Отрицательный'), array(
                'template' => '<span class="horiz">{input}{label}</span>',
                'class' => 'styled',
                'separator' => '<span class="hor-sep"></span>',
                'container' => 'div',
                'labelOptions' => array('class' => 'inline'),
            ));
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Тема</label>
        </div>
        <div class="content-cell-3">
            <?php
            echo CHtml::tag('input', array(
                'class' => 'small dark-grey small-search-input wide thin',
                'type' => 'text',
                'name' => 'subject-text',
            ));
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Текст письма</label>
        </div>
        <div class="content-cell-4-last">
            <?php
            $this->widget('ext.imperavi-redactor-widget.ImperaviRedactorWidget', array(
                'name' => 'text',
                'htmlOptions' => array('rows' => 8),
                'options' => array(
                //'imageUpload' => Yii::app()->params['site_url'].'/admin/'.$this->id.'/upload',
                )
            ));
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell">
            <label class="upper bold large">Прикрепить файл</label>
        </div>
        <div class="content-cell-4-last">
            <div class="choose-file-container">
                <?php
                echo CHtml::fileField('file', '', array('class' => 'filestyled', 'size' => 65));
                ?>
                <span class="small">Файл не выбран</span>
                <a href="#" class="grey middle ro-block">Удалить файл</a>
                <span class="space"></span>
                <a href="#" class="grey middle">Добавить еще файл</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell empty"> </div>
        <div class="content-cell-4-last">
            <hr class="light mar10t">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="content-cell empty">
        </div>
        <div class="content-cell-last">
            <?php echo CHtml::submitButton('Продолжить', array('class' => 'wide grey-button'))?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php $this->endWidget(); ?>
</div>