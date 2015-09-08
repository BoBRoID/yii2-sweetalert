<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 10.06.15
 * Time: 16:41
 */

namespace bobroid\sweetalert;


class Widget extends \yii\base\Widget{

    public $options = [];

    public function init(){
        if(!isset($this->options['id'])){
            $this->options['id'] = 'swal-'.$this->getId();
        }
    }

    public function run(){
        $configuration = json_encode($this->options);
        $js = 'swal('.$configuration.')';
        $this->getView()->registerJs($js);
    }

}