<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserDetails', 'url'=>array('index')),
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'Update UserDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>View UserDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'first_name',
		'last_name',
		'email',
		'password',
		'phone',
		'parent_email',
		'country',
		'state',
		'city',
		'university',
		'college',
		'college_name',
		'year',
		'status',
		'cb',
		'ub',
		'doc',
		'dou',
	),
)); ?>
