<?php

/**
 * This is the model class for table "user_details".
 *
 * The followings are the available columns in table 'user_details':
 * @property integer $id
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $parent_email
 * @property integer $country
 * @property integer $state
 * @property integer $city
 * @property integer $university
 * @property integer $college
 * @property string $college_name
 * @property integer $year
 * @property integer $status
 * @property integer $cb
 * @property integer $ub
 * @property string $doc
 * @property string $dou
 */
class UserDetails extends CActiveRecord {

        /**
         * @return string the associated database table name
         */
        public function tableName() {
                return 'user_details';
        }

        /**
         * @return array validation rules for model attributes.
         */
        public function rules() {
                // NOTE: you should only define rules for those attributes that
                // will receive user inputs.
                return array(
                    //array('user_id, first_name, last_name, email, password, phone, parent_email, country, state, city, university, college, college_name, year, status, cb, ub, doc', 'required'),
                    array('first_name, last_name, email, password, phone, country, state, city, university, year', 'required', 'on' => 'create'),
                    array('email, parent_email', 'email', 'on' => 'create'),
                    array('country, state, city, university, college, year, status, cb, ub', 'numerical', 'integerOnly' => true),
                    array('user_id', 'length', 'max' => 30),
                    array('first_name, last_name', 'length', 'max' => 100),
                    array('email, parent_email', 'length', 'max' => 150),
                    array('password', 'length', 'max' => 50),
                    array('phone', 'length', 'max' => 20),
                    array('college_name', 'length', 'max' => 200),
                    array('dou', 'safe'),
                    // The following rule is used by search().
                    // @todo Please remove those attributes that should not be searched.
                    array('id, user_id, first_name, last_name, email, password, phone, parent_email, country, state, city, university, college, college_name, year, status, cb, ub, doc, dou', 'safe', 'on' => 'search'),
                );
        }

        /**
         * @return array relational rules.
         */
        public function relations() {
                // NOTE: you may need to adjust the relation name and the related
                // class name for the relations automatically generated below.
                return array(
                );
        }

        /**
         * @return array customized attribute labels (name=>label)
         */
        public function attributeLabels() {
                return array(
                    'id' => 'ID',
                    'user_id' => 'User',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'email' => 'Email',
                    'password' => 'Password',
                    'phone' => 'Phone',
                    'parent_email' => 'Parent Email',
                    'country' => 'Country',
                    'state' => 'State',
                    'city' => 'City',
                    'university' => 'University',
                    'college' => 'College',
                    'college_name' => 'College Name',
                    'year' => 'Year',
                    'status' => 'Status',
                    'cb' => 'Cb',
                    'ub' => 'Ub',
                    'doc' => 'Doc',
                    'dou' => 'Dou',
                );
        }

        /**
         * Retrieves a list of models based on the current search/filter conditions.
         *
         * Typical usecase:
         * - Initialize the model fields with values from filter form.
         * - Execute this method to get CActiveDataProvider instance which will filter
         * models according to data in model fields.
         * - Pass data provider to CGridView, CListView or any similar widget.
         *
         * @return CActiveDataProvider the data provider that can return the models
         * based on the search/filter conditions.
         */
        public function search() {
                // @todo Please modify the following code to remove attributes that should not be searched.

                $criteria = new CDbCriteria;

                $criteria->compare('id', $this->id);
                $criteria->compare('user_id', $this->user_id, true);
                $criteria->compare('first_name', $this->first_name, true);
                $criteria->compare('last_name', $this->last_name, true);
                $criteria->compare('email', $this->email, true);
                $criteria->compare('password', $this->password, true);
                $criteria->compare('phone', $this->phone, true);
                $criteria->compare('parent_email', $this->parent_email, true);
                $criteria->compare('country', $this->country);
                $criteria->compare('state', $this->state);
                $criteria->compare('city', $this->city);
                $criteria->compare('university', $this->university);
                $criteria->compare('college', $this->college);
                $criteria->compare('college_name', $this->college_name, true);
                $criteria->compare('year', $this->year);
                $criteria->compare('status', $this->status);
                $criteria->compare('cb', $this->cb);
                $criteria->compare('ub', $this->ub);
                $criteria->compare('doc', $this->doc, true);
                $criteria->compare('dou', $this->dou, true);

                return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
        }

        /**
         * Returns the static model of the specified AR class.
         * Please note that you should have this exact method in all your CActiveRecord descendants!
         * @param string $className active record class name.
         * @return UserDetails the static model class
         */
        public static function model($className = __CLASS__) {
                return parent::model($className);
        }

}
