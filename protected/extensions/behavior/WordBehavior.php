<?php
class WordBehavior extends CActiveRecordBehavior{
        public $upper;  
        public $lower;  
        public $first;  
        
        public function beforeSave($event){
                if (!empty($upper)){
                        foreach ($upper as $campo)
                                if (isset ($this->getOwner()->{$campo}))        $this->getOwner()->{$campo} = mb_strtoupper($this->getOwner()->{$campo}, "UTF-8");
                }
                if (!empty($lower)){
                        foreach ($lower as $campo)
                                if (isset ($this->getOwner()->{$campo}))        $this->getOwner()->{$campo} = mb_strtolower($this->getOwner()->{$campo}, "UTF-8");
                }
                if (!empty($first)){
                        foreach ($first as $campo)
                                if (isset ($this->getOwner()->{$campo}))        $this->getOwner()->{$campo} = mb_convert_case($this->getOwner()->{$campo}, MB_CASE_TITLE, "UTF-8");
                }
        }
}