<?php 
function pag($nivel){
    ?>

    <div class='card-body'>
        <ul class='pagination justify-content-center'>
            <?php
            $id_profesor=intval($_SESSION['id']);
            for($i = 1; $i <=12; $i++){

                $consulta = "SELECT fkid_estado FROM profesormodulo WHERE id_profesor = $id_profesor AND id_modulo = $i";
                $result = pg_query($consulta);
                if($i == 7){
                    ?>
                    </ul>
                    <ul class='pagination justify-content-center'>
                    <?php
                }
                
                if ($nivel==0) //Esta en el inicio
                    $ruta="modulos/";
                else if ($nivel==1) //Esta en el inicio de un módulo
                    $ruta="../";
                else if ($nivel==2) //Esta en el inicio de una unidad de un módulo (eval/inicio/temas)
                    $ruta="../../";
                else
                    $ruta="../../../"; //Esta en los recursos de una unidad

                if(pg_num_rows($result) != 0){
                    $estado = pg_fetch_array($result);
                    //1: Iniciado. 2: Finalizado
                    echo "<li class='page-item'><a class='page-link estado_$estado[0]' href='".$ruta."modulo$i/module$i.php'>Módulo $i</a></li>";   
                }else{
                    echo "<li class='page-item'><a class='page-link estado_3' href='".$ruta."modulo$i/module$i.php'>Módulo $i</a></li>";   
                } 
            }
            ?>
        </ul>
        <h4>Avance de la metodología</h4>
    </div>

    <style>
    .chatbot{
        position: fixed;
        bottom: -348px;
        right: 0px;
        z-index: 99;
        width:350px;
        height:430px;
        transition: all 0.2s;
    }
    .btn-min{
        position: fixed;
        bottom: 43px;
        right: 7px;
        z-index: 100;
        background-color: rgba(0, 0, 0, 0);
        border-radius: 2px;
        border: 1px solid cadetblue;
        color: cadetblue;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    </style>
    
    

    <button class="btn-min" id="btn-min" onclick="maxi()">
        <i class="fas fa-window-maximize" title="Maximizar"></i>
    </button>
        
    <iframe 
    id="chatbot" class="chatbot" allow="microphone;"
    src="https://console.dialogflow.com/api-client/demo/embedded/28e6bbd4-8559-47d2-aeab-5724bee86ac0">
    </iframe>

    <script>
        var mini=true
        function maxi(){
            if (mini){
                document.getElementById("chatbot").style.bottom="0px";
                var btn= document.getElementById("btn-min");
                btn.style.bottom="391px";
                btn.innerHTML="<i class='fas fa-minus-square' title='Minimizar'></i>";
                mini=false;
            }else{
                document.getElementById("chatbot").style.bottom="-348px";
                var btn= document.getElementById("btn-min");
                btn.style.bottom="43px";
                btn.innerHTML="<i class='fas fa-window-maximize' title='Maximizar'></i>";
                mini=true;
            }
        }
    </script>
    <?php  
}
?>