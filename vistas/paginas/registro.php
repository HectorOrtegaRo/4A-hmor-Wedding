<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Register
            </h1>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="nombre">Name:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter your name" id="nombre" name="registroNombre">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter your email" id="email" name="registroEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password" id="pwd" name="registroPassword">
            </div>
        </div>
        <?php
        /**
         * FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO0 NO ESTATICO
            
            $registro = new ControladorFormularios();
            $registro -> ctrRegistro();
         */

        /**
         * FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO
         */

        $registro = ControladorFormularios::ctrRegistro();
        //echo $registro;
        if ($registro == "ok") {
            echo '<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>';

            echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>


<div class="container">
    <div class="breadcumd__wrapper center">
        <ul class="right__content">
            <li>
                <a href="index.php?pagina=ingreso">
                    Do you already have an account? Log in
                </a>
            </li>
        </ul>
    </div>
</div>