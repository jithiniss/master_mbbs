<?php
/* @var $this MasterUniversityController */
/* @var $model MasterUniversity */

$this->breadcrumbs=array(
	'Master Universities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MasterUniversity', 'url'=>array('index')),
	array('label'=>'Create MasterUniversity', 'url'=>array('create')),
	array('label'=>'Update MasterUniversity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MasterUniversity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterUniversity', 'url'=>array('admin')),
);
?>

<h1>View MasterUniversity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'country_id',
		'state_id',
		'city_id',
		'university_name',
		'university_deails',
		'status',
		'cb',
		'ub',
		'doc',
		'dou',
	),
)); ?>
