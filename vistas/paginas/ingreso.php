<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            Login
         </h1>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter your email" id="email" name="ingresoEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password" id="pwd" name="ingresoPassword">
            </div>
        </div>
        <?php 
            $ingreso = new ControladorFormularios();
            $ingreso -> ctrIngreso();
        ?>
        <button type="submit" class="btn btn-primary">Get into</button>
    </form>
</div>

<div class="container">
      <div class="breadcumd__wrapper center">
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=ingreso">
               Don't have an account yet? Sign up
               </a>
            </li>
         </ul>
      </div>
   </div>

