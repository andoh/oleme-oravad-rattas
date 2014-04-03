<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Oleme Oravad Rattas</title>
 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
    <!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <?php 
        Yii::app()->clientScript->generateUrl(Yii::app()->clientScript->registerCssFile('css/style.css'));
        Yii::app()->clientScript->registerScriptFile('js/jquery-1.11.0.js');
        Yii::app()->clientScript->registerScriptFile('js/custom.js');
        ?>
 
</head>
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

<?php echo $content;

    if (!(Yii::app()->user->isGuest)) {
      $userId = Yii::app()->user->id;
      $sql="UPDATE users SET lastActive=NOW() WHERE users.id = $userId";
      Yii::app()->db->createCommand($sql)->query();
      
      Yii::app()->clientScript->registerScript('check-activity', '
          if(typeof(EventSource) !== "undefined") {
          var source = new EventSource("' . CController::createUrl('isActive') . '");
          source.onmessage = function(event) {
              $(".modalContent").empty(); //NOT NEEDED LATER
              $(".modalContent").prepend(event.data).fadeIn(); // We want to display new messages above the stack
              $(".modalDialog").fadeTo("slow",1.0);
              $(".modalDialog").css( "pointer-events", "auto" ); //can get rid of it somehow?
          };
          }
          ', CClientScript::POS_READY); 
    }
?>

<div id="openModal" class="modalDialog">
  <div>
    <h2>Hei</h2>
    <p class="modalContent"></p>
    <button id="logout">Jah, logi mind välja</button> <!-- add button actions, force logout after x seconds? -->
  <button id="stayOnline">Ei</button>
  </div>
</div>
</body>
</html>