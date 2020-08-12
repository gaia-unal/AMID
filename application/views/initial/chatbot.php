<style>
    .chatbot{
        position: fixed;
        bottom: -348px;
        left: 0px;
        z-index: 99;
        width:350px;
        height:430px;
        transition: all 0.2s;
    }
    .btn-min{
        position: fixed;
        bottom: 43px;
        left: 310px;
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

    <script SameSite="None; Secure"
    src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js">
    </script>

    <script>
    var myLandbot = new LandbotLivechat({index:'https://landbot.io/u/H-522836-587OF6XJ6GX06EVP/index.html',});
    </script>

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
