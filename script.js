window.onload = function(){
        buttonColoresOn = document.getElementById('submitColoresOn');
        buttonColoresOn.onClick = relay1On;
        
        buttonColoresOff = document.getElementById('submitColoresOff');
        buttonColoresOff.onClick = relay1Off;

        buttonBlancasOn = document.getElementById('submitBlancasOn');
        buttonBlancasOn.onClick = relay2On;

        buttonBlancasOff = document.getElementById('submitBlancasOff');
        buttonBlancasOff.onClick = relay2Off;

        buttonTodasOn = document.getElementById('submitTodasOn');
        buttonTodasOn.onClick = relay1On;
        buttonTodasOn.onClick = relay2On;

        buttonTodasOff = document.getElementById('submitTodasOff');
        buttonTodasOff.onClick = relay1Off;
        buttonTodasOff.onClick = relay2Off;
}


////////////////////////////////////

function relay1On(){
        
        hidden = document.getElementById("total");
        hidden.value = "coloreson";
        
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "remote_relay.php";
        form.submit();
}

function relay1Off(){
        
        hidden = document.getElementById("total");
        hidden.value = "coloresoff";
        
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "remote_relay.php";
        form.submit();
}

function relay2On(){
        
        hidden = document.getElementById("total");
        hidden.value = "todason";
        
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "remote_relay.php";
        form.submit();
}

function relay2Off(){
        
        hidden = document.getElementById("total");
        hidden.value = "todasoff";
        
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "remote_relay.php";
        form.submit();
}