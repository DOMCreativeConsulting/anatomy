<?php

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}

function dd($var)
{
    die(var_dump($var));
}

function zip($diretorio, $nome)
{
    $pathdir = $diretorio;
    $nameArchive = $nome;
    $zip = new ZipArchive;

    if($zip->open($nameArchive, ZipArchive::CREATE) == true){

        $dir = opendir($pathdir);

        while($file = readdir($dir)){

            if(is_file($pathdir."/".$file)){

                $zip->addFile($pathdir."/".$file, $file);

            }

        }

        $zip->close();

    }

    else{

        die('erro');
        
    }

}

function uploadFiles($path, $arrayName)
{
    for($i = 0; $i < count($_FILES[$arrayName]['name']); $i++){

        $filetmp = $_FILES[$arrayName]["tmp_name"][$i];
        $filename = $_FILES[$arrayName]["name"][$i];
        $filetype = $_FILES[$arrayName]["type"][$i];
        $filepath = $path.$filename;
    
        try{
            @move_uploaded_file($filetmp,$filepath);
        }catch(\Excpetion $e){
            echo 'Arquivo corrompido ou muito grande!';
            die();
        }
        

    }
}

function delTree($dir) { 

    $files = array_diff(scandir($dir), array('.','..')); 

    foreach ($files as $file) { 

      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 

    } 
    
    return rmdir($dir); 
}

function checkSuccess()
{

    if(isset($_SESSION['sucesso']) && $_SESSION['sucesso'] == true){
        ?><script>alert("Sucesso!");</script><?php
    }

    $_SESSION['sucesso'] = false;

}

function diasRestantes($prazo)
{
    $data_hoje = date('Y-m-d');
    $data_prazo = $prazo;

    $diferenca = strtotime($data_prazo) - strtotime($data_hoje);

    $dias = floor($diferenca / (60 * 60 * 24));

    return $dias;
}