<?php 

    session_start();

    $usuarios_app = array(
        array(
            'email' => 'joaomarcelocosta14@gmail.com',
            'senha' => '1234',
            'id' => '1',
            'status_usuario' => '1' // 1 => usuario
        ),
        array(
            'email' => 'adm@gmail.com',
            'senha' => '1234',
            'id' => '2',
            'status_usuario' => '2' // 2 => admin
        ),
        array(
            'email' => 'pedroivo@gmail.com',
            'senha' => '1234',
            'id' => '3',
            'status_usuario' => '1' // 1 => usuario
        )
        );

    $usuario_autenticado = false;
    $usuario_id = null;

    foreach ($usuarios_app as $user) {

        if ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_status = $user['status_usuario'];
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['status_usuario'] = $usuario_status;
        header("Location: home.php");
    }
    else{
        $_SESSION['autenticado'] = false;
        header("Location: index.php?login=error");
    }
    
?>