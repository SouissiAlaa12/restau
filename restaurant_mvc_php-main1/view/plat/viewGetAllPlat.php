<style>
    .dec{
        color:#023e8a;
    }
    </style>
<div class="container">


<?php

    foreach($tab_p as $p){

        $img= $p->getImage();

        echo "
        
          
<div class='row jihen'>
    
<div class='col-lg-6' >

    <img src='assets/images/$img' class='imgg cm w 'style='width:60%'>
</div>

<div class='col-lg-6 desc'> 
<h1 class='dec'>". $p->getTitre() ."</h1>
<p class='lead'>". $p->getDescription() ."</p>

<a class='btn btn-primary' href=''>Commander</a>

</div>
</div>
        
        
        ";

    }


?>



</div>