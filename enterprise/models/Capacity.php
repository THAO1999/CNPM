<?php

namespace enterprise\models;
use common\models\CapacityDictionary;
use Yii;


class Capacity extends CapacityDictionary
{
    public function getListCapacity(){
        $capacity=Capacity::find(2);
        echo $capacity->ability_name;
    }

}
