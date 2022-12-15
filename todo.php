<?php
session_start();
require_once 'vendor/tasks.php';
 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nikita.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@500&display=swap" rel="stylesheet">
  
    <title>ToDo List</title>
</head>
<body>
    <nav class="menu">
        <logo><a href="index.php">
            <img src="img/todo.png" >
            </a>
        </logo>
        
        <ul> 
            <h1>Распланируй свой день</h1>
            <li><a href="index.php" class="button">ВЫХОД</a></li>
            <li><a href="doc.php" class="but">&#128736;</a></li>
        </ul>
    </nav>
   
    <div class="text-field">
        <div class="text-field__group">
            <form action="/vendor/add.php" method="POST">
          <input class="text-field__input" type="text" id="active" name="active">
          <input type="submit" name="submit" id="submit" class="text-field__btn" value="Добавить">
          </form>
        </div>
      </div>
      <div class="wrapper">
        <div id="row3">
            <div id="col1">
           
                <div id="name">Выполненые</div>
            <?php while($resdon = mysqli_fetch_assoc($don)){ 
            if($resdon['done']!=NULL){ ?>
                <div id="tasks"><?php echo $resdon['done']; ?></div>
                <a  href="todo.php?deletedon=<?php echo $resdon['id']?>"  name="delete"  id="bn_1">&#9940;</a>    
                
                
                <?php }} ?>
            </div>
           
            <div id="col2">
                <div id="name">Активные</div>
               
                <div id="tasks">
                <?php while($result = mysqli_fetch_assoc($act)){ 
                   if($result['active']!=NULL){
                   echo $result['active'];    ?>
                <a href="todo.php?done=<?php echo $result['id']?>"  name="done" id="bt_2">&#10004;</a>
                <a href="todo.php?nodone=<?php echo $result['id']?>"  name="nodone" id="bn_2">&#10006;</a>
               
                <br><br>
                <?php }} ?>
                </div>     
              
           </div>
          
         
            <div id="col3">
                <div id="name">Невыполненые</div>
            <?php while($resnodon = mysqli_fetch_assoc($nodon)){ 
            if($resnodon['notdone']!=NULL){ ?>
                <div id="tasks"><?php echo $resnodon['notdone']; ?></div>
                <a  href="todo.php?deletenot=<?php echo $resnodon['id']?>"  name="delete"  id="bn_1">&#9940;</a>    
                <?php }} ?>
            </div>
        </div>
    </div>
    
    
</body>
</html>