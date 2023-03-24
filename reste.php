<header>
  <b>
    <?php
    //SELECT * FROM `user` WHERE `logname` = 'root' AND `logpass` = 'roote';

    if (isset($_POST["logname"])) {

      echo 'jeanclaude';
    }
    $result = "SELECT * FROM user WHERE logname='" . $_POST["logname"] . "' AND logpass='" . $_POST["logname"] . "' ";
    $result
    /*
    $globalbdd = pdo
    $result = $globalbdd -> query (select)
    if ($result->rowCount > 0 ){
        $tab = $result->fetch();
        $_SESSION["id"]= $tab ["id"]
    }


    plus loin 


    if (isset($_SESSION["id"])){
      echo tu es connecté 
    }
  */

    ?>
  </b>
  <span>
    <!-- identifiant @... -->
  </span>
  <date>15 jui. 2018</date>
</header>

<p>Champions du monde ! Bravo à nos bleus ⚽✨🎉 <a href="">#France2018</a> <a href="">#WorldCupFinal2018</a> <a href="">@WorldChampions</a></p>

</main>
</article>