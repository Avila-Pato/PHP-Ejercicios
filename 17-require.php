<?php include 'includes/header.php';


echo "include: Úsalo cuando el archivo no es crítico para la aplicación, es decir, si no está presente, el script puede seguir ejecutándose.";
echo "<br/>";

echo  "require: Úsalo cuando el archivo es esencial para la aplicación, es decir, si no está presente, el script no debe seguir ejecutándose. "; 
echo "<br/>";

echo "include_once: Úsalo cuando quieres asegurarte de que el archivo no se incluya más de una vez y su ausencia no debe detener la ejecución del script.";
echo "<br/>";

echo "require_once: Úsalo cuando quieres asegurarte de que el archivo no se incluya más de una vez y es esencial para la aplicación.";




include 'includes/footer.php';