<html>
<body>
<form action="" method="post">


<?php
	 echo '<table class="newzadacha"> 
<tr>
<td> <input type="text" class="button"  name="nazvanie" size="20" maxlength="25" required placeholder="Название задачи" > </td>
<td> <input type="date" class="button" id="date" name="srok" placeholder="Дата" required> </td>
</td>
 </tr></table>';
?>


			<div id="knop">
   <input type="submit" class="button"  name="Отправить" value="Отправить" >
</div>
  	</form>	
  

<?php
if(isset($_POST["nazvanie"])){

if($_POST["Отправить"] && $_POST["Отправить"]="Отправить") {
                $fp = fopen("zadachi.txt", "a+"); // Открываем файл в режиме записи
                $mytext = $_POST["nazvanie"].'|'. date("d.m.y") .'|' .$_POST["srok"] .PHP_EOL; // Исходная строка
                $test = fwrite($fp, $mytext); // Запись в файл
                fclose($fp); //Закрытие файла
} }
?>

<?php

	if($_POST["Отправить"]){
echo '<table class="table" border="2">';
			$data = file("zadachi.txt");
							for ($i = 0; $i < count($data); $i++) {
        list( $s0, $s1, $s2) = preg_split( "/\|/", "$data[$i]");
			
            echo "<tr><td>" .$s0 ."</td>";
			
            echo "<td>" .$s1 ."</td>";
		
            echo "<td>" .$s2 ."</td></tr>";
			
        }
echo '</table>';

}


            ?>
			
			<style>
			
   table {
    margin: auto;
	padding:0;
	border: 0.3px;
   }
   tr td {
	   padding:7px;
   }
   
   .button {
    padding: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
	border-radius: 12px;
}
   
   
   #knop  {
	  padding:20px;
text-align: center; 
   }
  </style>
  </body>
  </html>
  
			