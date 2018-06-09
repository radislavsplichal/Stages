<?php
echo $_POST['title'].$_POST['description'];

foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}

$newStage = new Stage($date = date("Y-m-d h:i:sa"),$_POST['title'],$_POST['description']);
$newStage->saveObject($newStage->type,$newStage->arguments,$values = array($newStage->date,$newStage->title,$newStage->description));
?>