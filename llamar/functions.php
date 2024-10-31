<?php
function getFolderProyect(){
    // Verifica si el sistema de archivos utiliza '/' (indicador de que es Unix)
    if ((strpos(__DIR__, '/')) !== false ){
        // Si es Unix, reemplaza la parte '/opt/lampp/htdocs/' con una cadena vacía
        $folder = str_replace('/opt/lampp/htdocs/', '', __DIR__);
    } else {
        // Si es Windows, reemplaza 'C:\\xampp\\htdocs\\' con una cadena vacía
        $folder = str_replace('C:\\xampp\\htdocs\\', '', __DIR__);
    }
    // Elimina la carpeta '/config' del path para obtener la raíz del proyecto
    $folder = str_replace('/config', '', $folder);
    
    return $folder; // Devuelve la ruta relativa del proyecto
}
?>