<?php 
require_once ('lib/nusoap.php');
$server=new nusoap_server();
$server->configureWSDL("calcul"."urn:calcul");




$server->wsdl->addComplexType(
    'Book',
    'ComplexType',
    'struct','all',
    '',array(
        'Book_Name'=>array('name'=>'Book_Name','type'=>'xsd:string')
,        'Langue'=>array('name'=>'Langue','type'=>'xsd:string')
)
    );

    function price($name)
    {
        $error = '';
        $result = array(
            'abc'=>100,
            'xyz'=>200
        );
        foreach($result as $n=>$p)
        {
            if ($name==$n) 
            $price=$p ;
    
        }
        return $price;
    }



function getInfo($name)

{if($name=='abc' ){
    
    $detail=array('Book_Name'=>"Afrique",'Langue'=>"Arabe");
    return $detail;
}
}


$server->register(
    "price", //function name
    array("name"=>'xsd:string'), //inputs
    array("return"=>"xsd:int")     //output
);

$server->register(
    "getInfo" , //name offun
    array('name' => 'xsd:string'),//input
    array("returnInformation"=>"xsd:string")
   

);//output
$server->service(file_get_contents("php://input"));

?>
