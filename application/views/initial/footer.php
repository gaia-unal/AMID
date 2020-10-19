<footer class="footer-color">
    <div class="container-fluid">
        <div class="container footer">
            <div class="footer_trust_top trustlogos">


                <a href="https://www.manizales.unal.edu.co/" target="_blank"><img class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_UN.png" alt="logo Universidad Nacional"></a>

                <a href="https://www.autonoma.edu.co/" target="_blank"><img class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_UAM.png"
                        alt="logo Universidad Autónoma de Manizales"></a>

                <a href="http://www.ucaldas.edu.co/portal/" target="_blank"><img fluid class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_UCaldas.png"
                        alt="logo Universidad de Caldas"></a>

                <a href="https://unisucre.edu.co/index.php/es/" target="_blank"><img fluid class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_USucre.png"
                        alt="logo Universidad de Sucre"></a>

                <a href="https://www.utch.edu.co/portal/es/" target="_blank"><img class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_UChoco.png"
                        alt="logo Universidad Tecnológica del Chocó"></a>

                <a href="https://www.cinde.org.co/sitio/" target="_blank"><img class="logo1 img-responsive"
                        src="<?php echo base_url();?>public/assets/img/Logo_CINDE.png" alt="logo CINDE"></a>
            </div>

        </div>

    </div>

</footer>

<?php 
    // $this->load->view('initial/chatbot');
?>

<style>
.footer-color {
    background-color: #023859;
}

.footer {
    padding-top: 40px;
    padding-bottom: 20px;
}

.logo1 {
    /* width: 8em; */
    /* border: #adadad 1px solid; */
    margin: 0px 15px 10px 15px;
    border-radius: 10px;
    padding: 5px;
    width: auto;
    height: 100px;
}


.logo1:hover {
    cursor: hand;
}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */

    .trustlogos {

        margin: 10px auto;
        max-width: 100%;
    }

    .footer_trust_top {
        width: 100%;
        margin: 20px auto;
        text-align: center;
    }


}
</style>