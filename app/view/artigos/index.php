<?php 
    include '../header.php';
    require_once '../../controller/controller_artigos.php';
    
    $tipo = $_REQUEST['role'];
    
    $titulo = "";
    
    if ($tipo == "nutricao"){ $titulo = "Nutrição";}
    elseif ($tipo == "suplementacao"){ $titulo = "Suplementação"; }
    else { $titulo = ucfirst($tipo); }
    
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.title= "Artigos - Inner Champ";
    });
</script>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg);background-color:#31708f;">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                    <h5 class="breadcrumb" style="font-size:12pt;color: white">Artigos</h5>
                   <h1 class="banner-title"><?php echo $titulo ?></h1>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
</div>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php';