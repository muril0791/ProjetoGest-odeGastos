Conexão:::

<?php
function conectar(){
   
      
   $username = 'root';
   $password = '';
   $hostname = 'mysql:host=localhost;';
   $dbname   = 'dbname=BnacoPgamento/';
       
   
   try{
//   $conn = new PDO('mysql:host=portalcompras.mysql.uhserver.com;dbname=portalcompras', $username, $password,


   $conn = new PDO($hostname.$dbname, $username, $password,
           array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

   

   } catch(PDOException $e){
   
      echo ("problema com a conexão, envie um email para o ADM pela <br/> opção contato, Agradecemos a compreeção.");
       //echo $e->getMessage();
       //var_dump($e);

   }
   
   return $conn;
} 

?>
