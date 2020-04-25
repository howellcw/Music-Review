  
<?php
include_once 'header.php';
?>


<section class="main-container">
<div class = main-wrapper>
<?php
    if(isset($_SESSION['userId'])){
        echo
        '<html>
        </head>
        <title>Music Review</title>
        <body>
        <ul>
        <li><a href = "artistReviews.php">See reviews by artist</a></li>
        <li><a href = "createReview.php">Create a review</a></li>
        //</ul>
        </body>
        </html>';
    }
    else{
        echo'<h2>Please log-in</h2>';
    }
    ?>
    
</div>
</section>

<?php
include_once 'footer.php';
?>

