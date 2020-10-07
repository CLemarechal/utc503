<?php

function jsonFileToArray(string $filename){

    try{
        $string = file_get_contents($filename);
        return json_decode($string,true);
    }
    catch(Execption $e){
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
    
}

function Affichage(array $values,?string $title=null):void{

    try{
        if($title != null){
            echo"\n$title\n";
        }
        foreach($values as $data){
        foreach($data as $name=>$value){
            echo"$name : $value \n";
        }
    echo("\n");
     }
    }
    catch(Execption $e){
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
    
}

function loadAndDump( string $filename):array{
    try{
        $value = jsonFileToArray($filename);
        Affichage($value,basename("$filename"));
        return $value;
    }
    catch(Execption $e){
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }  
    

    
}
function getEmployeesByService($employees,$service):array{
    try
    {
        
    
        return array_filter($employees,function($emp)use($service)
        {

            return $emp['service'] == $service;
        }
    
    catch(Execption $e){
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}

function getLogicielleByService($service,$logiciel):array{

    try{
        $result=[];
        foreach($service as $emp){
            if($emp['habilitations']==$logiciel){
                $result[]=$emp;
            }
        }
        return $result;
    }
    catch(Execption $e){
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }

}