<?php
include ('includes/header.php');
?>
    <div class="container py-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="image" style="background-image: url('https://offloadmedia.feverup.com/secretnyc.co/wp-content/uploads/2018/11/14152502/google-1024x597.jpg')">
                        <div></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image" style="background-image: url('https://lh3.googleusercontent.com/zwypt0DZM-x4lgnVXrNwog5gFeRlB7DgjyUqviHuPv1YnyIgvm-cRBDb7wOHfzlq7zqkAyoXehSntepk-df3vChZxARnTHxVMw0=s700')">
                        <div></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image " style="background-image: url('https://lh3.googleusercontent.com/wjkYAACOO38pxC4i81TsAg8fq8ztACI-UddvlzkhA3qotPErQlX1XjN_RuaxAXU5ToU8p7zfqC7V4_FES5xnKbvDk1coeJ8Z_lxz_g=s700')">
                        <div></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6 text-center">
                <h1>Arta de a căuta informații în Google!</h1>
                <h2>Curs revoluționar!</h2>
                <p>Google LLC este o corporație americană multinațională care administrează motorul de căutare pe Internet cu același nume. A fost fondată în 1998 de către doi doctoranzi de la Universitatea Stanford, Larry Page și Sergey Brin. Google oferă o metodă simplă și rapidă de găsire a informațiilor pe web, având o bază de date despre peste 8 miliarde de site-uri web. La începutul anului 2004 Google răspundea zilnic la mai mult de 200 milioane de consultări.</p>
                <button type="button" class="btn btn-outline-primary">Înscrie-te acum!</button>
                <button type="button" class="btn btn-outline-primary">Cere detalii!</button>
            </div>
        </div>
    </div>
    <div class=" bg-primary">
    <div class="container py-5" style="color: white;">
        <div class="row text-center">
        <div class="col-md-4 col-sm-12">
            <img src="https://lh3.googleusercontent.com/KwUBNPbMTk9jDXYS2AeX3illtVRTkrKVh5xR1Mg4WHd0CG2tV4mrh1z3kXi5z_warlk=s180" class="imagini">
            <br>
            <h4 style="display: block;">Performanță</h4>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="https://lh3.googleusercontent.com/KwUBNPbMTk9jDXYS2AeX3illtVRTkrKVh5xR1Mg4WHd0CG2tV4mrh1z3kXi5z_warlk=s180" class="imagini">
            <br>
            <h4>Siguranță în ziua de mâine</h4>
        </div>
        <div class="col-md-4 col-sm-6">
            <img src="https://lh3.googleusercontent.com/KwUBNPbMTk9jDXYS2AeX3illtVRTkrKVh5xR1Mg4WHd0CG2tV4mrh1z3kXi5z_warlk=s180" class="imagini">
            <br>
            <h4>Dublarea venitului</h4>
        </div>
    </div></div>
    </div>
    <br><br>
    <div class="container">
        <?php
        $x=0;
        ?>
    <div class="row text-center justify-content-center">
        <div class="col-md-2">
            <?php
            $a=1534;
            $a1=$a;
            $a=number_format($a);
            $x++;
            echo "<h3>Participanti la modulul $x: $a</h3>";
            ?>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum.</p>
        </div>
        <div class="col-md-2">
            <?php
            $b=2300;
            $b1=$b;
            $b=number_format($b);
            $x++;
            echo "<h3>Participanti la modulul $x: $b</h3>"
            ?>
            <br>
            <p>A condimentum vitae sapien pellentesque habitant. Egestas congue quisque egestas diam in arcu. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus.</p>
        </div>
        <div class="col-md-2">
            <?php
            $c=3000;
            $c1=$c;
            $c=number_format($c);
            $x++;
            echo "<h3>Participanti la modulul $x: $c</h3>"
            ?>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="col-md-2">
            <?php
            $sum=$a1+$b1+$c1;
            $sum1=$sum;
            $sum=number_format($sum);
            if ($sum1>=5000)
                echo "<strong><h3 >Numarul total de participanti: $sum</h3></strong>";
            else
                echo "<h3>Numarul total de participanti: $sum</h3>";
            ?>
            <br>
            <p> Eget egestas purus viverra accumsan in nisl nisi scelerisque. In iaculis nunc sed augue lacus viverra vitae</p>
        </div>
    </div></div>

<?php
include ('includes/footer.php');
?>