<?php
//SCRIPT PHP INDEX PAGE

//$nombre = $_POST['nombresmallprueba'];
//$email = $_POST['correosmallprueba'];
//$telefono = $_POST['movilsmallprueba'];
//$mensaje = $_POST['mensajesmallprueba'];
//$boton = $_POST['botonsmallprueba'];

//echo $nombre;

//Se realizan las validaciones
//if (isset ($_POST['botonsmallprueba'])) {
    //if ($_POST['nombresmallprueba'] == '' or $_POST['correosmallprueba'] == '' /*or $_POST['movilsmallprueba'] == ''*/ or $_POST['mensajesmallprueba'] == '') {
        //echo "No puedes dejar los datos vacíos";  /*tirar la modal aqui*/
        //header("Location: error-page.php");
        //exit;
        /*if (empty($_POST['txtNombre']) or empty($_POST['txtEmail']) or empty($_POST['txtTelefono']) or empty($_POST['txtMensaje'])) {
            echo "No puedes dejar los datos vacíos";*/
    //}
    //else{
        //Asigno los elementos gráficos a las variables
        //$nombre = $_POST['nombresmallprueba'];
        //$email = $_POST['correosmallprueba'];
        //$telefono = $_POST['movilsmallprueba'];
        //$mensaje = $_POST['mensajesmallprueba'];

        //$to = 'refclim@refclim.com';
        //$subject = 'Mensaje de Feedback o Solicitud de' . $nombre;
        //$message = wordwrap($mensaje, 50, "\r\n");
        //$additional_headers = 'From:' . $email ;
        //$additional_params = '';

        //mail ($to, $subject, $message, $additional_headers, $additional_params);
    }

        /* tirar el correo aqui */
        /*mail (

            string $to,                              // receptor del correo
            string $subject,                         // asunto del correo
            string $message,                         // cuerpo del mensaje
            array|string $additional_headers = [],   // From, Cc, and Bcc     Multiple extra headers should be separated with a CRLF (\r\n) "From:"
            string $additional_params = ""           //
            )*/

            /*// The message
            $message = "Line 1\r\nLine 2\r\nLine 3";

            // In case any of our lines are larger than 70 characters, we should use wordwrap()
            $message = wordwrap($message, 70, "\r\n");

            // Send
            mail('caffeinated@example.com', 'My Subject', $message);*/
//}
?>

<?php
//FUNCION ENVIAR CORREO
//$nombre = $_POST['nombresmallprueba'];
//$email = $_POST['correosmallprueba'];
//$telefono = $_POST['movilsmallprueba'];
//$mensaje = $_POST['mensajesmallprueba'];
//$boton = $_POST['botonsmallprueba'];


//Se realizan las validaciones

if (isset ($_POST['botonsmallprueba'])) {
    if ($_POST['nombresmallprueba'] == '' or $_POST['correosmallprueba'] == '' /*or $_POST['movilsmallprueba'] == ''*/ or $_POST['mensajesmallprueba'] == '') {
        header("Location: ../error_index.html");
        exit;
    }

    else {
        //Asigno los elementos gráficos a las variables
        $nombre = $_POST['nombresmallprueba'];
        $email = $_POST['correosmallprueba'];
        //$telefono = $_POST['movilsmallprueba'];
        $mensaje = $_POST['mensajesmallprueba'];

        $to = 'refclim@refclim.com';
        $subject = 'Mensaje de Feedback o Solicitud de' . $nombre;
        $message = wordwrap($mensaje, 50, "\r\n");
        $additional_headers = 'From:' . $email ;
        $additional_params = '';

        mail ($to, $subject, $message, $additional_headers, $additional_params);

        header("Location: ../index.html#iformprueba");
        exit;
    }
}










elseif (isset ($_POST['ibotonlarge'])) {
    if ($_POST['inombrelarge'] == '' or $_POST['icorreolarge'] == '' /*or $_POST['imovillarge'] == ''*/ or $_POST['imensajelarge'] == '') {
        header("Location: ../error_index.html");
        exit;
    }

    else {
        //Asigno los elementos gráficos a las variables
        $nombre = $_POST['inombrelarge'];
        $email = $_POST['icorreolarge'];
        //$telefono = $_POST['imovillarge'];
        $mensaje = $_POST['imensajelarge'];

        $to = 'refclim@refclim.com';
        $subject = 'Mensaje de Feedback o Solicitud de' . $nombre;
        $message = wordwrap($mensaje, 50, "\r\n");
        $additional_headers = 'From:' . $email ;
        $additional_params = '';

        mail ($to, $subject, $message, $additional_headers, $additional_params);

        header("Location: ../index.html#iformlarge");
        exit;
    }
}

elseif (isset ($_POST['ibotonmedium'])) {
    if ($_POST['inombremedium'] == '' or $_POST['icorreomedium'] == '' /*or $_POST['imovilmedium'] == ''*/ or $_POST['imensajemedium'] == '') {
        header("Location: ../error_index.html");
        exit;
    }

    else {
        //Asigno los elementos gráficos a las variables
        $nombre = $_POST['inombremedium'];
        $email = $_POST['icorreomedium'];
        //$telefono = $_POST['imovilmedium'];
        $mensaje = $_POST['imensajemedium'];

        $to = 'refclim@refclim.com';
        $subject = 'Mensaje de Feedback o Solicitud de' . $nombre;
        $message = wordwrap($mensaje, 50, "\r\n");
        $additional_headers = 'From:' . $email ;
        $additional_params = '';

        mail ($to, $subject, $message, $additional_headers, $additional_params);

        header("Location: ../index.html#iformmedium");
        exit;
    }
}

elseif (isset ($_POST['ibotonsmall'])) {
    if ($_POST['inombresmall'] == '' or $_POST['icorreosmall'] == '' /*or $_POST['imovilsmall'] == ''*/ or $_POST['imensajesmall'] == '') {
        header("Location: ../error_index.html");
        exit;
    }

    else {
        //Asigno los elementos gráficos a las variables
        $nombre = $_POST['inombresmall'];
        $email = $_POST['icorreosmall'];
        //$telefono = $_POST['imovilsmall'];
        $mensaje = $_POST['imensajesmall'];

        $to = 'refclim@refclim.com';
        $subject = 'Mensaje de Feedback o Solicitud de' . $nombre;
        $message = wordwrap($mensaje, 50, "\r\n");
        $additional_headers = 'From:' . $email ;
        $additional_params = '';

        mail ($to, $subject, $message, $additional_headers, $additional_params);

        header("Location: ../index.html#iformsmall");
        exit;
    }
}

else {
    header("Location: ../error_index.html");
    exit;
}

endif;
?>