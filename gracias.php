<?php $titulo = "Quiero Donar"; ?>
<?php require 'mod/head.php';?>


<body>
    
<?php require 'mod/navbar.php';?>

    <div class="container">
        
        <?php require 'mod/header.php';?>
        
        <div class="row">
            <div class="col-md-9">
                
                <?php require 'mod/menu.php';?>
                
                  <div class="panel panel-default panel-mark animated fadeIn">
                    <div class="panel-heading panel-heading-mark" id="aqua">Gracias por tu Donacion</div>
                    <div class="panel-body panel-body-mark">    
                    <img class=" grat center-block img-responsive" src="img/gracias.svg">
                    <h2 class="pacificoh">Tu donacion nos ayudara a hacer la diferencia en la vida de las personas que lo necesitan.</h2>
                    </div>
                </div>     
            </div>
            
            <div class="col-md-3">
                
                <?php require 'mod/lateral.php';?>
                
            </div>
        </div>
    </div>

    
<?php require 'mod/footer.php';?>
        
<?php require 'mod/scripts.php';?>
    
</body>
</html>