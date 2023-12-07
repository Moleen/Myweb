<?php

include('connector/databaseConnection.php');
$frontend = mysqli_query( $connect, "SELECT * FROM `frontend`");
$backend = mysqli_query( $connect, "SELECT * FROM `backend`");
$other = mysqli_query( $connect, "SELECT * FROM `other`");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=PT+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style/index.css">  
    <script src="src/js/animation.js"></script>
    <title>Document</title>
</head>
<body>

    <?php include ('src/navbar.php') ?>

    <div class="Home" id="Home">
        <div class="greet">
            <h1>Hello!, i am Maulana</h1>
            <p>i am a junior web developer</p>
        </div>
    </div>
    <div class="dividergrad" id="about"></div>
    <div class="About" >
        
        <div class="aboutme" >
            <img class="ppimage" src="src/pict/profil.jpg" alt="" srcset="">
            <div class="sentence">
                <h1>Maulana Syakhiya Karim</h1>
                <p>"I am a student enthusiastic about programming and enjoy creating websites. I have a strong interest in web development and want to continue learning and improving my skills in this field."</p>
            </div>
            <div class="link">
                <a href="https://instagram.com/144joo?utm_source=qr&igshid=YzU1NGVlODEzOA=="><img src="src/pict/instagram.png" alt=""></a>
                <a href=""><img src="src/pict/linkedin.png" alt=""></a>
                <a href=""><img src="src/pict/github.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="dividergrad2" id="skill"></div>
    <div class="skill">
        <div class="container">
            <h1>My Skills</h1>         
            <div class="skills">
            <div class="tabs">
                <div class="tab" onclick="showContent('frontend')">Front End</div>
                <div class="tab" onclick="showContent('backend')">Back End</div>
                <div class="tab" onclick="showContent('other')">Other</div>
            </div>
            
            <div class="content active" id="frontend">
                <?php while($row = mysqli_fetch_assoc($frontend)) :?>
                <div class="tech">
                    <div class="imgcontainer"><img src="src/pict/<?php echo $row['image']?>" alt=""></div>
                    <div class="lvlcontainer"><p><?php  echo $row['level'] ?></p></div>
                </div>
                <?php endwhile ; ?>
            </div>

            <div class="content" id="backend">
            <?php while($row = mysqli_fetch_assoc($backend)) :?>
                <div class="tech">
                    <div class="imgcontainer"><img src="src/pict/<?php echo $row['image']?>" alt=""></div>
                    <div class="lvlcontainer"><p><?php  echo $row['level'] ?></p></div>
                </div>
                <?php endwhile ; ?>
            </div>

            <div class="content" id="other">
            <?php while($row = mysqli_fetch_assoc($other)) :?>
                <div class="tech">
                    <div class="imgcontainer"><img src="src/pict/<?php echo $row['image']?>" alt=""></div>
                    <div class="lvlcontainer"><p><?php  echo $row['level'] ?></p></div>
                </div>
                <?php endwhile ; ?>
            </div>
            </div>
        </div>

    </div>
</body>
</html>