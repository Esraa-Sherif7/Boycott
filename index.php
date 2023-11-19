
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Palestine </title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/fontAwesome.css">
    <link rel="shortcut icon" href="img/images-removebg-preview.png" type="image/x-icon">

</head>
<body >
<main >
<!-- English Form -->

<div class="container justify-content-center formBox" id="eng">

    <div class="row">
        <div class="col-sm-6">
            <a class="btn" id="ar-btn">عربي</a>
            <form method="post" action="form_en.php" class="form justify-content-center row mt-5">
                <div class="input-group mb-3 mt-4">
                    <input type="text" class="form-control" placeholder="search...." name="search" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
<!-- result -->
                <div>
                    <?php
                    session_start();

                    if (!empty($_GET)) {
                        $_SESSION['got'] = $_GET;
                        header('Location: index.php');
                        die;
                    }else{
                        if (!empty($_SESSION['got'])) {
                            $_GET = $_SESSION['got'];
                            unset($_SESSION['got']);
                        } 
                        if(isset($_GET['msg'])){

                            $X=$_GET['msg'];
                            echo "<h4 style='color:red; text-align: center;'> $X </h4>" ; 
                           
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <img class="imgShape" src="img/53.-ISRAEL-PALESTINIANS-PROTESTS-FLAG-770x432.jpg" width="100%" height="300px" alt="">
        </div>
    </div>
</div>

<!-- arabic Form -->
    <div class="container justify-content-center formBox2 hide" id="arb">
        <div class="row">
        <div class="col-sm-6">

            <img class="imgShape2" src="img/53.-ISRAEL-PALESTINIANS-PROTESTS-FLAG-770x432.jpg" width="100%" height="300px" alt="">
        </div>
        <div class="col-sm-6">
            <a id="en-btn" class="lang btn">en</a>
            <form method="POST" action="form_en.php"  class="form2 justify-content-center row mt-5" >
                <div class="input-group mb-3 mt-4">
                    <div class="input-group-append">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder=".....ابحث  هنا " name="search" required >

                  </div>
                  <!-- result -->
                  <div>
                    <?php 
                        if(isset($_GET['msg'])){

                            $X=$_GET['msg'];
                            echo "<h4 style='color:red; text-align: center;'> $X </h4>" ; 
                        }

                    ?>
                </div>
            </form>
        </div>
        </div>
    </div>



</main>






    <script src="style/bootstrap.min.js"></script>
    <script src="style/jquery-3.7.1.min.js"></script>
    <script>
        $("#ar-btn").click(function(){
            $("#eng").toggleClass("hide");
            $("#arb").removeClass("hide");
        })
        $("#en-btn").click(function(){
            $("#arb").toggleClass("hide");
            $("#eng").removeClass("hide");
        })
    
    
    
    </script>
</body>
</html>