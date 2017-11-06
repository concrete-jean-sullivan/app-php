<?php

#Conection BD
$conecta = mysql_connect("db", "db", "db") or print (mysql_error()); 
mysql_select_db("db", $conecta) or print(mysql_error()); 
//print "Conexão e Seleção OK!"; 
//mysql_close($conecta); 


#function get names
function get_names(){
    $result = mysql_query("SELECT * FROM names");
    while($consulta = mysql_fetch_array($result)) { 
        echo "
        $consulta[id] - $consulta[name] <br>
      ";
     }
}

#function cont names
function cont_names(){
    $result = mysql_query("SELECT name FROM names");
    print mysql_num_rows($result);
}

#function include name
function include_name($name){
    $result = mysql_query("INSERT INTO names (id, name, cel) VALUES (NULL, '$name', '')");
}
?>
