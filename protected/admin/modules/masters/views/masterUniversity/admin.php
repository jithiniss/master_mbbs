<?php
/* @var $this MasterUniversityController */
/* @var $model MasterUniversity */
?>
<style>
    .table th, td{
        text-align: center;
    }
    .table td{
        text-align: center;
    }
</style>


<div class="page-title">

    <div class="title-env">
        <h1 style="float: left;" class="title">Master Universities</h1>
        <p style="float: left;margin-top: 8px;margin-left: 11px;" class="description">Manage Master Universities</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo Yii::app()->request->baseurl . '/site/home'; ?>"><i class="fa-home"></i>Home</a>
            </li>

            <li class="active">

                <strong>Manage Master Universities</strong>
            </li>
        </ol>

    </div>

</div>
<div class="row">


    <div class="col-sm-12">

        <a class="btn btn-secondary btn-icon btn-icon-standalone" href="<?php echo Yii::app()->request->baseurl . '/admin.php/masters/masterUniversity/create'; ?>" id="add-note">
            <i class="fa-pencil"></i>
            <span>Add Master Universities</span>
        </a>
        <div class="panel panel-default">
            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'master-university-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    array(
                        'name' => 'country_id',
                        'filter' => CHtml::listData(MasterCountry::model()->findAllByAttributes(array('status' => 1)), 'id', 'country'),
                        'value' => function($data) {
                        return MasterCountry::model()->findByPk($data->country_id)->country;
                }
                    ),
                    array(
                        'name' => 'state_id',
                        'filter' => CHtml::listData(MasterState::model()->findAllByAttributes(array('status' => 1)), 'id', 'state'),
                        'value' => function($data) {
                        return MasterState::model()->findByPk($data->state_id)->state;
                }
                    ),
                    array(
                        'name' => 'city_id',
                        'filter' => CHtml::listData(MasterCity::model()->findAllByAttributes(array('status' => 1)), 'id', 'city'),
                        'value' => function($data) {
                        return MasterCity::model()->findByPk($data->city_id)->city;
                }
                    ),
                    'university_name',
                    //'university_deails',
                    array(
                        'name' => 'status',
                        'filter' => array(1 => 'Enabled', 0 => 'Disabled'),
                        'value' => function($data) {
                        return $data->status == 1 ? 'Enabled' : 'Disabled';
                }
                    ),
                    /* 'cb',
                      'ub',
                      'doc',
                      'dou',
                     */
                    array(
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{update}{delete}',
                    ),
                ),
            ));
            ?>
        </div>

    </div>


</div>

