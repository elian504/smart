<?php
         $uv = "smartman";
         $cv = "hola";
   
         if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
           $usuario = $_POST['usuario'];
           $contraseña = $_POST['contraseña'];
   
           if ($usuario === $uv && $contraseña === $cv) {
               header('Location:perfil.html');
               exit;
           } elseif ($usuario !== $uv && $contraseña === $cv) {
             echo "el usuario esta mal";
           } elseif ($usuario === $uv && $contraseña !== $cv) {
             echo "la contraseña esta mal";
           } else {
             echo "ningun dato es correcto";
           }
         }