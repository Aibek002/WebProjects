<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>PHP web site</title>

</head>
<body id="body">
<div id="header" class="d-flex align-items-center">
      <h5 class="my-0 mr-md-auto font-weight-normal">Meat Check</h5>
       <div id="загаловка1" class="my-2 my-md-0 mr-md-3">
        <a id="aheader" class="p-2 text-white" href="https://qrcodescan.in/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
  <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
  <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
  <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
  <path d="M12 9h2V8h-2v1Z"/>
</svg></a>
        <a id="aheader" class="p-2 text-white" href="#">Контакты</a>

        </div>
     <div id="login" >
      <!-- <a id="aheader" class="btn btn-outline-primary" href="login.php">Sign up</a> -->
    </div>
    </div>
   
 
    <div id="container" >
      <?php
        for($i = 0 ;$i < 4;  $i++):
    ?>    
    <div  id="col">
        <div class="card-deck text-center">

                <div id="col"  class="card mb-2 ">
                        <div id="card-header" class="card-header">
                            <h4 class="my-0 ">
                                <?php
                                if($i==0)
                                echo "Говядина";
                                elseif($i==1)
                                echo "Конина";
                                elseif($i==2)
                                echo "Баранина";
                                else
                                echo "Свинина";
                                ?>
                            
                            
                            </h4>
                        </div>
                        <div id="card-body" class="card-body">
                            <img id="imgSchools" src="<?php 
                            if($i==0)
                            echo "data:image/jpeg;base64,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";
                            elseif($i==1)
                            echo "data:image/jpeg;base64,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";
                            elseif($i==2)
                            echo "data:image/jpeg;base64,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";
                            else
                            echo "data:image/jpeg;base64,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";
                            ?>" class="img-thumbnail">

                            <h1 class="card-title pricing-card-title"><?php 
                            if($i==0)
                            echo "2200";
                            elseif($i==1)
                            echo "2700";
                            elseif($i==2)
                            echo "1800";
                            else
                            echo "1700";
                            
                            ?> <small class="text-muted">/ кг</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                            
                            <li><?php
                                if($i==0)
                                echo "Говя́дина, говяжье мясо ";
                                elseif($i==1)
                                echo "Кони́на — мясо лошадей";
                                elseif($i==2)
                                echo "Бара́нина — мясо баранов (овец) ";
                                else
                                echo "Свини́на — кулинарное и промышленное <br>наименование мяса свиней.";
                                ?></li>
                            <li><?php 
                            if($i==0)
                            echo " Мясо молодняка называется телятина";
                            elseif($i==1)
                            echo "при употреблении в пищу.

                            ";
                            elseif($i==2)
                            echo "при употреблении в пищу. ";
                            else
                            echo "Самый потребляемый вид мяса в мире";
                            
                            ?> </li>
                            <li><?php 
                            if($i==0)
                            echo "В западноевропейской кулинарии строго <br><br>";
                            elseif($i==1)
                            echo "Конина всегда была важной частью традиционного рациона народов мира";
                            elseif($i==2)
                            echo "Мясо молодого ягнёнка называется ягнятина";
                            else
                            echo "Потребление свинины фиксируется с";
                            
                            ?> </li>
                            <li><?php 
                            if($i==0)
                            echo "различают мясо коров, быков и волов";
                            elseif($i==1)
                            echo ",хотя во многих странах и религиях она запрещена или непопулярна.";
                            elseif($i==2)
                            echo "Применяется в жареном,варёном,пареном,копчёном";
                            else
                            echo " пятого тысячелетия до н. э.";
                            
                            ?> </li>
                            </ul>
                            <?php 
                            if($i==0)
                            echo '<a href="https://ru.wikipedia.org/wiki/%D0%93%D0%BE%D0%B2%D1%8F%D0%B4%D0%B8%D0%BD%D0%B0" id="buttonCard" type="button" class="btn btn-outline-info">Read More</a>';
                            elseif($i==1)
                           
                            echo '<a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D0%B8%D0%BD%D0%B0" id="buttonCard" type="button" class="btn btn-outline-info">Read More</a>';
                            elseif($i==2)
                            
                            echo '<a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B0%D1%80%D0%B0%D0%BD%D0%B8%D0%BD%D0%B0" id="buttonCard" type="button" class="btn btn-outline-info">Read More</a>';
                            else
                            echo '<a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%B2%D0%B8%D0%BD%D0%B8%D0%BD%D0%B0" id="buttonCard" type="button" class="btn btn-outline-info">Read More</a>';
                            
                            ?> 
                        </div>
                        </div>
        </div>
        </div>
    <?php endfor?>
    </div>
    
  
</body>
</html>