<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-details-form',
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

        <div class="form-group" style="width: 12.5%;">
            <?php echo $form->labelEx($model, 'first_name'); ?>
            <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'autofocus' => 'true')); ?>
            <?php echo $form->error($model, 'first_name'); ?>
        </div>

        <div class="form-group" style="width: 12.5%; margin-left: 0px;">
            <?php echo $form->labelEx($model, 'last_name'); ?>
            <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'phone'); ?>
            <?php echo $form->textField($model, 'phone', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'phone'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'parent_email'); ?>
            <?php echo $form->textField($model, 'parent_email', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'parent_email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'country'); ?>
            <?php echo CHtml::activeDropDownList($model, 'country', CHtml::listData(MasterCountry::model()->findAllByAttributes(array('status' => 1)), 'id', 'country'), array('empty' => '--Please select--', 'class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'country'); ?>
        </div>
        <?php
        $state_options = array();
        if ($model->country != '') {
                $states = MasterState::model()->findAllByAttributes(array('country_id' => $model->country));
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
            <?php echo $form->labelEx($model, 'state'); ?>
            <?php echo CHtml::activeDropDownList($model, 'state', $state_options, array('class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'state'); ?>
        </div>

        <?php
        $city_options = array();
        if ($model->state != '') {
                $cities = MasterState::model()->findAllByAttributes(array('country_id' => $model->state));
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
            <?php echo $form->labelEx($model, 'city'); ?>
            <?php echo CHtml::activeDropDownList($model, 'city', $city_options, array('class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'city'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'university'); ?>
            <?php echo CHtml::activeDropDownList($model, 'university', CHtml::listData(MasterUniversity::model()->findAllByAttributes(array('status' => 1)), 'id', 'university_name'), array('class' => 'form-control', 'options' => array('id' => array('selected' => 'selected')))); ?>
            <?php echo $form->error($model, 'university'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'college'); ?>
            <?php echo $form->textField($model, 'college', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'college'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'college_name'); ?>
            <?php echo $form->textField($model, 'college_name', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'college_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'year'); ?>
            <?php echo $form->dropDownList($model, 'year', array('1' => '1st', '2' => '2nd', '3' => '3rd'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'year'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->dropDownList($model, 'status', array('1' => 'Enabled', '0' => 'Disabled'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>

        <div class="form-group btns">
            <label>&nbsp;</label><br/>
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-secondary btn-single pull-right', 'style' => 'border-radius:0px;padding: 10px 50px;')); ?>
        </div>

        <?php $this->endWidget(); ?>

        <script>
                $(document).ready(function () {

                    /*country change function */

                    $('#UserDetails_country').change(function () {
                        var country = $(this).val();
                        if (country != '') {
                            $.ajax({
                                type: "POST",
                                url: baseurl + "ajax/selectState",
                                data: {country: country}
                            }).done(function (data) {
                                $('#UserDetails_state').html(data);
                            });
                        } else {
                            $('#UserDetails_state').html("<option value=''>--Selec--</option>");
                        }
                    });

                    /*state change function */

                    $('#UserDetails_state').change(function () {
                        var state = $(this).val();
                        if (state != '') {
                            $.ajax({
                                type: "POST",
                                url: baseurl + "ajax/selectCity",
                                data: {state: state}
                            }).done(function (data) {
                                $('#UserDetails_city').html(data);
                            });
                        } else {
                            $('#UserDetails_city').html("<option value=''>--Select--</option>");
                        }
                    });
                });
        </script>
    </div><!-- form -->
</div>