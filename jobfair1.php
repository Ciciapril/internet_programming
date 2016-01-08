<section class="success" id="jobfair">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Info Jobfair</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
     <table class="table table-condensed">
    
<?php  
$folder = "image"; 
$handle = opendir($folder);  
echo '<table cellspacing="5" cellpadding="10">';  
echo '<tr>';  
$i = 1;  
while(false !== ($file = readdir($handle))){  
    if($file != '.' && $file != '..'){  
        echo '<td style="border:3px solid #000000;" align="center">  
            <img src="image/'.$file.'" width=600" /><br />  
            '.$file.'  
        </td>';  
        if(($i % 2) == 0){  
            echo '</tr><tr>';  
        }  
        $i++;  
    }  
}  
echo '</tr>';  
echo '</table>';  
?>  
<nav>
      <ul class="pager">
        <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
    </nav>
        </div>
    </div>
</section>