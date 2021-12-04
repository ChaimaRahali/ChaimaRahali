<?php
$mt= 0; $result = 0; 
if(isset($_POST['montant'])) {
    $mt = $_POST['montant'];
    $client = new SoapClient("http://calculator-webservice.mybluemix.net/calculator?wsdl");
    $param = new stdClient();
    $param->montant=$mt;
    $result=$clientSOAP->call("add", array($param));

}
?>
<html>
    <body>
        <form action="server.php" method="post">

        Book price :<input type="text" name="montant" value="<?php echo($mt)?>">
        <input type="submit" value="ok">
    </form>
    <?php if(isset($result)) { ?>
    <?php echo($mt) ?> brut = <?php echo($result)?> avec tax
    <?php } ?>
</body>
</html>