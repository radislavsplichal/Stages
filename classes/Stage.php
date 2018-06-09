<?php 
class Stage extends Lilly{
    public $type = 'st_stages';
    public $date;
    public $title;
    public $description;
    public $arguments = array('stage_id','date','title','description');
    
    public function __construct($date,$title,$description) {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    
    public function printStage (){
        return $stageValues = array($this->date, $this->title,$this->description);
    }

    


}


?>