<?php
/* @var $this StihiController */
/* @var $model Stihi */
/* @var $form CActiveForm */
?>

<div class="wide form">

  <?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
  )); ?>

  <div class="row">
    <?php echo $form->label($model, 'id'); ?>
    <?php echo $form->textField($model, 'id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'poet_id'); ?>
    <?php echo $form->textField($model, 'poet_id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'name'); ?>
    <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'date'); ?>
    <?php echo $form->textField($model, 'date'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'text'); ?>
    <?php echo $form->textArea($model, 'text', array('rows' => 6, 'cols' => 50)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'tags'); ?>
    <?php echo $form->textField($model, 'tags', array('size' => 20, 'maxlength' => 20)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'views'); ?>
    <?php echo $form->textField($model, 'views'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'time'); ?>
    <?php echo $form->textField($model, 'time'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- search-form -->