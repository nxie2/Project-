<?php include 'inc/html-top.inc'; ?>



<body class="container">

<header>
    <nav class="container pt-3">
        <ul class="nav nav-pills float-right">
            <li class="nav-item"><a class="nav-link text-white bg-dark" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="combined.php">Combined</a></li>

        </ul>
    </nav>



        <h1>Bibliography</h1>



</header>

<div id="blank row" style="height: 480px"></div>

<div class="row card-deck">

    <div class="col-8">
        <?php include 'inc/slider_images.inc'; ?>
    </div>

    <div class="card float-right mr-0 shadow text-dark p-0 mb-5 bg rounded col-4">
        <h2 class="card-header" style="background-color: skyblue">Student Major Areas</h2>
        <div class="card-body diff">


            <div>Social Science</div>
            <ul class="diff">

                <li class="diff text-primary">Yiqun Ding - International Relations</li>

            </ul>
            <div>Natural Science </div>

            <ul class="diff text-danger">


                <li class="diff">Amanda O'Donnell - Brain & Cognitive Sciences</li>
                <li class="diff">Jack Dalton - Mechanical Engineerings</li>

            </ul>

        </div>

    </div>

</div>


<?php include 'inc/scripts.inc'; ?>
<?php include 'inc/footer.inc'; ?>
</body>

