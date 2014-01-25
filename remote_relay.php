<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Remote control</title>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
        
<form id="relay" action="remote_relay.php" method="GET">
    <H3>Luces de colores</H3>
    <input type="button" id="submitColoresOn" style="border:1px solid #000; font-size:40px;" value="PRENDER" onClick="relay1On()"/>
    <input type="button" id="submitColoresOff" style="border:1px solid #000; font-size:40px;" value="APAGAR" onClick="relay1Off()"/>
    <br>
    <H3>Luces blancas</H3>
    <input type="button" id="submitBlancasOn" style="border:1px solid #000; font-size:40px;" value="Prender" onClick="relay2On()"/>
    <input type="button" id="submitBlancasOff" style="border:1px solid #000; font-size:40px;" value="Apagar" onClick="relay2Off()"/>
    <br>
    <h3>Todas las luces</h3>
    <input type="button" id="submitTodasOn" style="border:1px solid #000; font-size:40px;" value="Prender" onClick="relay3On()"/>
    <input type="button" id="submitTodasOff" style="border:1px solid #000; font-size:40px;" value="Apagar" onClick="relay3Off()"/>

        <input type="hidden" name="total" id="total" value="">
</form>

<?php
        exec("gpio -g mode 3 out");
        exec("gpio -g mode 4 out");
        $state = $_GET["total"];

        if ($state =="") {
                exec("gpio -g write 3 1");
                exec("gpio -g write 4 1");
        }
          
        if ($state == "coloreson"){
                exec("gpio -g write 4 0");

        }
        if ($state == "coloresoff"){
                exec("gpio -g write 4 1");
        }
        if ($state == "blancason") {
                exec("gpio -g write 3 0");
        }
        if ($state == "blancasoff") {
                exec("gpio -g write 3 1");
        }
        if ($state == "todason") {
                exec("gpio -g write 3 0");
                exec("gpio -g write 4 0");
        }
        if ($state =="todasoff") {
                exec("gpio -g write 3 1");
                exec("gpio -g write 4 1");
        }
?>

</body>