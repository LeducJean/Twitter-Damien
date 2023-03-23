<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="pagetweeter.css">
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/codemirror/5.22.0/codemirror.css'>
  <link rel='stylesheet' href='https://codepen.io/a-mt/pen/VdoWRK.css'>
  <link rel="stylesheet" href="pagetweet.css">
  <link rel="stylesheet" href="tweet.css">

</head>

<body>
  <?php


  $ipserver = "192.168.65.164";
  $nomBase = "connexion";
  $loginPrivilege = "root";
  $passPrivilege = "root";

  try {
    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);


    $resultat = $GLOBALS["pdo"]->query($_POST["user"]);

    foreach ($results as $resultat) {
      $id_user = $resultat['logname'];
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>


  <!-- partial:index.partial.html -->
  <div class="page">
    <aside class="colonne-de-gauche">

      <div class="lignegauche">
        <a href="https://twitter.com"><img src="logosite.png" width="32"></a>
        <div class="textgauche">
          <nav>
            <ul>
              <li>
                <a href="">Accueil</a>
              </li>
              <li>
                <a href=""><b>Explorer</b></a>
              </li>
              <li>
                <a href="">Messages</a>
              </li>
              <li>
                <a href="">Signets</a>
              </li>
              <li>
                <a href="">Listes</a>
              </li>
              <li>
                <a href="">Profil</a>
              </li>
              <li>
                <a href="">Plus</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <button class="btn odal-btn modal-trigger">Tweeter</button>

      <div class="modal-container">

        <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">

          <!-- partial:index.partial.html -->
          <div class="modal">
            <div class="modal-content" role="document">
              <div class="modal-header">

                <button aria-label="close modal" class="btn close-modal modal-trigger">X</button>
                <h3 class="modal-title">Écrire un nouveau Tweet</h3>
              </div>
              <div class="modal-body">
                <div class="tweet-box-avatar">
                  <img class="avatar" src="http://placehold.it/32x32">
                </div>
                <div class="tweet-box-content">



                  <!-- CONTENTEDITABLE -->
                  <div class="tweet-content">
                    <div class="tweet-box">


                    <!-- Box pour écrire numéro 1 -->
                      <textarea class="rich-editor" spellcheck="true" name="message" placeholder="Quoi de neuf ?"></textarea>
                    </div>



                    <!-- REMAINING CHARACTERS -->
                    <div class="character-counter js-character-counter"></div>

                    <!-- EMOJI PICKER -->
                    <div class="emojipicker-btn EmojiPicker-trigger">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <path d="M15 0C6.729 0 0 6.729 0 15s6.729 15 15 15 15-6.729 15-15S23.271 0 15 0zm0 28.378c-3.675 0-7.008-1.49-9.428-3.896a13.45 13.45 0 0 1-2.426-3.285A13.295 13.295 0 0 1 1.622 15C1.622 7.623 7.623 1.622 15 1.622c3.499 0 6.688 1.35 9.074 3.557a13.45 13.45 0 0 1 2.996 4.054A13.298 13.298 0 0 1 28.378 15c0 7.377-6.001 13.378-13.378 13.378z">
                        </path>
                        <circle r="1.622" cy="11.655" cx="10.101"></circle>
                        <circle r="1.622" cy="11.655" cx="20.135"></circle>
                        <path d="M14.971 23.31c3.138 0 6.144-1.604 7.866-4.268l-1.362-.88a7.77 7.77 0 0 1-7.368 3.477 7.779 7.779 0 0 1-5.582-3.477l-1.362.88c1.5 2.32 4.026 3.893 6.758 4.208.35.04.701.06 1.05.06z">
                        </path>
                      </svg>
                    </div>
                  </div>

                  <!-- BOTTOM TOOLBAR -->
                  <form action="" method="post">
                    <div class="tweet-toolbar">
                      <div class="tweet-box-extras"></div>
                      <div class="tweet-box">


                        <!-- Box pour écrire numéro 2 -->
                        <input type="text" name="message" spellcheck="true" class="rich-editor" placeholder="Quoi de neuf ?">
                      </div>
                      <div class="tweet-toolbar-button">
                        <input type="submit" class="btn" id="preview" name="message" value="Tweeter"></input>
                        <div class="center-wrap">
                          <div class="section text-center">
                            <div class="form-group">
                              <i class="input-icon uil uil-user"></i>
                            </div>
                          </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </div>

  </div>

  </aside>



  <?php
  if (isset($_POST["message"])) {
    $requeteMessage = "INSERT INTO `message` (`dateHeure`, `idUser`, `message`) VALUES ('" . date("y-m-d") . "', '" . $_SESSION["idUser"] . "', '" . $_POST["message"] . "')";

    $result3 = $GLOBALS["pdo"]->query($requeteMessage);
    echo $result3;
    echo $requeteMessage;
  }
  ?>


  <main>

    <div class="zone-de-recherche">
      <input type="text" value="#france2018">

      <nav>
        <ul>
          <li class="menu-courant"><a href="">A la une</a></li>
          <li><a href="">Récent</a></li>
          <li><a href="">Personnes</a></li>
          <li><a href="">Photos</a></li>
          <li><a href="">Vidéos</a></li>
        </ul>
      </nav>
    </div>

    <ul>
      <li>


        <!-- debut d'un tweet -->

        <head>
          <meta charset="UTF-8">
          <title>CodePen - Twitter tweet template</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
          <link rel="stylesheet" href="./style.css">

        </head>

        <body>
          <!-- partial:index.partial.html -->

          <div class="tw-block-parent">
            <div class="timeline-TweetList-tweet">
              <div class="timeline-Tweet">
                <div class="timeline-Tweet-brand">
                  <div class="Icon Icon--twitter"></div>
                </div>
                <div class="timeline-Tweet-author">
                  <div class="TweetAuthor"><a class="TweetAuthor-link" href="#channel"> </a><span class="TweetAuthor-avatar">
                      <div class="Avatar"> </div>
                    </span><span class="TweetAuthor-name">JCVD</span><span class="Icon Icon--verified">
                  </div>
                  <div class="timeline-Tweet-text">OMG SA COMMENCE

                  </div>
                </div>

              </div>
              <!-- fin d'un tweet -->


      </li>
      <li></li>
    </ul>
  </main>

  <aside class="colonne-de-droite">
    <nav>
      <ul>
        <li><a href="">Conditions d'utilisations</a></li>
        <li><a href="">Politique de confidentialité</a></li>
        <li><a href="">Politique relative aux cookies</a></li>
        <li><a href="">Accessibilité</a></li>
        <li><a href="">Information sur les publicités</a></li>
        <li><a href="">Plus...</a></li>
      </ul>
    </nav>
    <p>&copy; 2022 Twitter, Inc.</p>
  </aside>
  </div>
  <!-- partial -->


  <script src="boutontweeter.js"></script>

  <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/codemirror/5.22.0/codemirror.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/preact/8.2.7/preact.min.js'></script>
  <script src='https://cdn.rawgit.com/a-mt/020212e6d9daec5ca0da69bef55bba01/raw/3f0913be305e44796313284ab2d4292e44790bff/emojiInfo.en.js'></script>
  <script src='https://codepen.io/a-mt/pen/VdoWRK.js'></script>
  <script src='//twemoji.maxcdn.com/2/twemoji.min.js?2.4'></script>
  <script src="pagescript.js"></script>

</body>
<?php
// Établir une connexion à la base de données MySQL
$servername = "192.168.65.126";
$username = "roott";
$password = "root";
$dbname = "connexion";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Écrire une requête SQL pour sélectionner les données de votre base de données
$sql = "SELECT `id`, `dateHeure`, `idUser`, `message` FROM `message` VALUES ";

// Exécuter la requête SQL et récupérer les résultats
$result = mysqli_query($conn, $sql);

// Afficher les données récupérées dans une boucle
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "Message: " . $row["message"] . "<br>";
  }
} else {
  echo "0 results";
}

// Fermer la connexion à la base de données MySQL
mysqli_close($conn);
?>


</html>