<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <br/>
    <div class="form-inline">
                        <div class="form-group">
                    <?php echo $form->labelEx($model,'user_id'); ?>
                    <?php echo $form->textField($model,'user_id',array('size'=>30,'maxlength'=>30,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'user_id'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'first_name'); ?>
                    <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'first_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_name'); ?>
                    <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'last_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'phone'); ?>
                    <?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'phone'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'parent_email'); ?>
                    <?php echo $form->textField($model,'parent_email',array('size'=>60,'maxlength'=>150,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'parent_email'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'country'); ?>
                    <?php echo $form->textField($model,'country',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'country'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'state'); ?>
                    <?php echo $form->textField($model,'state',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'state'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'city'); ?>
                    <?php echo $form->textField($model,'city',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'city'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'university'); ?>
                    <?php echo $form->textField($model,'university',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'university'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'college'); ?>
                    <?php echo $form->textField($model,'college',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'college'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'college_name'); ?>
                    <?php echo $form->textField($model,'college_name',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'college_name'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'year'); ?>
                    <?php echo $form->textField($model,'year',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'year'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->textField($model,'status',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'status'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'cb'); ?>
                    <?php echo $form->textField($model,'cb',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'cb'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'ub'); ?>
                    <?php echo $form->textField($model,'ub',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'ub'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'doc'); ?>
                    <?php echo $form->textField($model,'doc',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'doc'); ?>
                </div>

                                <div class="form-group">
                    <?php echo $form->labelEx($model,'dou'); ?>
                    <?php echo $form->textField($model,'dou',array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'dou'); ?>
                </div>

                    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->