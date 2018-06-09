<?php 
session_start();
//include all the core classes for the app to be able to run
foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}

//test();


$header = '<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">'
;


//These variables will be moved to the database into the st_ tables

$title = "<h1>Welcome to Stages, the ultimate workflow and project tool</h1>
<p>Stages is a small opensource project which should help you keep track of your projects and 
and make it easier to track your progress, which is very important for motivation.
If you are strugling with this or you can motivate yourself just fine, you should feel free to use this app to your hearts content.
</p>";
    
$CreateStageForm = '
<form class="form-horizontal" action="saveObject.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Create Stage</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Title</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Name of the stage" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Stage</label>
  <div class="col-md-8">
    <button type"submit" id="button1id" name="button1id" class="btn btn-success">Save</button>
    <button id="clearStage" name="clearStage" class="btn btn-danger">Clear</button></input>
  </div>
</div>

</fieldset>
</form>

'    ;
    

echo 'User: Admin';
echo $header;

echo $title;

echo $CreateStageForm;



?>