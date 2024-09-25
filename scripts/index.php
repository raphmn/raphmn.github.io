<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVIS SCOTT - REPONSES</title>
    <link rel="style" href="/styles/style_reponses.css">
    <link rel="icon" href="/media/icon.png">
    <style>
        @font-face {
    font-family: "Tomato Font";
    src: url("/fonts/Tomato\ Regular.ttf")
}

.travis_font {
    font-family: "Tomato Font";
}

p {
    font-family: 'Courier New', Courier, monospace;
    font-style: italic;
    text-align: center;
}

.title {
    display: flex;
    position: sticky;
    white-space: nowrap;
    top: 15px;
    justify-content: center;
    margin-left: 25%;
    margin-right: 25%;
    border: solid;
    color: E4E6C3;
    backdrop-filter: blur(5px);
}


h2 {
    text-align: center;
}

.reponses {
    border: solid;
    margin: 3%;
    padding: 2%;
}
    </style>
</head>
<body>
    <div class="title">
        <h1 class="travis_font">ASTROWORLD TOUR</h1>
    </div>
    <div class="reponses">
        <h2 class="travis_font">Résultats</h2>
        <?php
        $rep1 = $_POST['rep1'];
        $rep2 = $_POST["rep2"];
        $rep3 = $_POST["rep3"];
        $score = 0;
        if (strtolower($rep1) == "swae lee") {
            echo "<p>Question 1: Bonne Réponse !</p><br>";
            $score = $score + 1;
        } else {
            echo "<p>Question 1: Mauvaise réponse ! Sur ce morceau, Travis feat avec Swae Lee</p><br>";
        }
        if (strtolower($rep2) == "bird in the trap sing mcknight") {
            echo "<p>Question 2: Bonne Réponse !</p><br>";
            $score = $score + 1;
        } else {
            echo "<p>Question 2: Mauvaise réponse ! Cet album se nomme Bird In The Trap Sing McKnight</p><br>";
        }
        if (strtolower($rep3) == "sicko mode") {
            echo "<p>Question 3: Bonne Réponse !</p><br>";
            $score = $score + 1;
        } else {
            echo "<p>Question 3: Mauvaise réponse ! L'album le plus écouté sur cet album est SICKO MODE, en featuring avec Drake</p><br>";
        }
        echo "Score : ".$score."/3";
        echo "<a href='/quiz.html'><p>Retour au quiz</p></a>";
        echo "<a href='/index.html'><p>Retour à l'acceuil</p></a>";
        ?>
    </div>
</body>
</html>