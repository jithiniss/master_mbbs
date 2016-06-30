<?php

class AjaxController extends Controller {

        public function init() {
                if (!Yii::app()->request->isAjaxRequest) {
                        echo "You are not permitted to access this page";
                        exit;
                }
        }

        public function actionSelectState() {
                //$_POST['country'] = 99;
                $model = MasterState::model()->findAllByAttributes(array('country_id' => (int) $_POST['country']));
                if (!empty($model)) {
                        $options = "<option value=''>--Select--</option>";
                        foreach ($model as $state) {
                                $options .= '<option value="' . $state->id . '">' . $state->state . '</option>';
                        }
                } else {
                        $options = '<option value="">--Select--</option><option value="0">Other</option>';
                }
                echo $options;
        }

        public function actionSelectCity() {
                //$_POST['country'] = 99;
                $model = MasterCity::model()->findAllByAttributes(array('state_id' => (int) $_POST['state']));
                if (!empty($model)) {
                        $options = "<option value=''>--Select--</option>";
                        foreach ($model as $city) {
                                $options .= '<option value="' . $city->id . '">' . $city->state . '</option>';
                        }
                } else {
                        $options = '<option value="">--Select--</option><option value="0">Other</option>';
                }
                echo $options;
        }

}
