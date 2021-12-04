<?php
$mt=''; $res=0; $result = 0;
if(isset($_POST['montant'])) {
    $mt = $_POST['montant'];
    $clientSOAP = new SoapClient("http://localhost/SOC/WS1/server.php?wsdl");
    $client1 = new SoapClient("http://calculator-webservice.mybluemix.net/calculator?wsdl");
    $param = new stdClient();
    $param->montant=$mt;
    $res=$clientSOAP->call("price", array($name));
    $result=$clientSOAP->call("add", array($param));

}
?>
<html>
    <body>
        <form action="server.php" method="post">

        Book name :<input type="text" name="montant" value="<?php echo($mt)?>">
        <input type="submit" value="ok">
    </form>
    <?php if(isset($res)) { ?>
    <?php echo($mt) ?> prix = <?php echo($res) ?> en DT
    <?php echo($res) ?> brut = <?php echo($result)?> avec tax
    <?php } ?>
</body>
</html>