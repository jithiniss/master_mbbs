<?php
/* @var $this MasterUniversityController */
/* @var $model MasterUniversity */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'master-university-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <br/>
    <div class="form-inline">




        <div class="form-group">
            <?php echo $form->labelEx($model, 'country_id'); ?>
            <?php echo CHtml::activeDropDownList($model, 'country_id', CHtml::listData(MasterCountry::model()->findAllByAttributes(array('status' => 1)), 'id', 'country'), array('empty' => '--Please select--', 'class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'country_id'); ?>
        </div>
        <?php
        $state_options = array();
        if ($model->country_id != '') {
                $states = MasterState::model()->findAllByAttributes(array('country_id' => $model->country_id));
                if (!empty($states)) {
                        $state_options[""] = "--Select--";
                        foreach ($states as $state) {
                                $state_options[$state->id] = $state->state;
                        }
                } else {
                        $state_options[""] = "--Select--";
                        $state_options[0] = "Other";
                }
        } else {
                $state_options[""] = '--select--';
        }
        ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'state_id'); ?>
            <?php echo CHtml::activeDropDownList($model, 'state_id', $state_options, array('class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'state_id'); ?>
        </div>

        <?php
        $city_options = array();
        if ($model->state_id != '') {
                $cities = MasterState::model()->findAllByAttributes(array('country_id' => $model->state_id));
                if (!empty($cities)) {
                        $city_options[""] = "--Select--";
                        foreach ($cities as $city) {
                                $city_options[$city->id] = $city->city;
                        }
                } else {
                        $city_options[""] = "--Select--";
                        $city_options[0] = "Other";
                }
        } else {
                $city_options[""] = '--select--';
        }
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'city_id'); ?>
            <?php echo CHtml::activeDropDownList($model, 'city_id', $city_options, array('class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'city_id'); ?>
        </div>


        <div class="form-group">
            <?php echo $form->labelEx($model, 'university_name'); ?>
            <?php echo $form->textField($model, 'university_name', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'university_name'); ?>
        </div>
        <br/>
        <div class="form-group" style="width: 80%;">
            <?php echo $form->labelEx($model, 'university_deails'); ?>
            <?php
            $this->widget('booster.widgets.TbCKEditor', array(
                'model' => $model,
                'attribute' => 'university_deails',
            ));
            ?>
            <?php echo $form->error($model, 'university_deails'); ?>
        </div>


        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->dropDownList($model, 'status', array('1' => 'Enabled', '0' => 'Disabled'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>

    </div>
    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
    </div>

    <?php $this->endWidget(); ?>

    <script>
            $(document).ready(function () {

                /*country change function */

                $('#MasterUniversity_country_id').change(function () {
                    var country = $(this).val();
                    if (country != '') {
                        $.ajax({
                            type: "POST",
                            url: baseurl + "ajax/selectState",
                            data: {country: country}
                        }).done(function (data) {
                            $('#MasterUniversity_state_id').html(data);
                        });
                    } else {
                        $('#MasterUniversity_state_id').html("<option value=''>--Selec--</option>");
                    }
                });

                /*state change function */

                $('#MasterUniversity_state_id').change(function () {
                    var state = $(this).val();
                    if (state != '') {
                        $.ajax({
                            type: "POST",
                            url: baseurl + "ajax/selectCity",
                            data: {state: state}
                        }).done(function (data) {
                            $('#MasterUniversity_city_id').html(data);
                        });
                    } else {
                        $('#MasterUniversity_city_id').html("<option value=''>--Select--</option>");
                    }
                });

            });

    </script>

</div><!-- form -->