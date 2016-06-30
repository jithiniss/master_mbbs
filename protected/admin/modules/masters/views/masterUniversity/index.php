<?php
/* @var $this MasterUniversityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master Universities',
);

$this->menu=array(
	array('label'=>'Create MasterUniversity', 'url'=>array('create')),
	array('label'=>'Manage MasterUniversity', 'url'=>array('admin')),
);
?>

<h1>Master Universities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
