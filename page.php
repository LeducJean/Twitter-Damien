<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Un exemple de mise en page - Gilles FRANCOIS</title>
  <link rel="stylesheet" href="pagetweeter.css">
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/codemirror/5.22.0/codemirror.css'>
  <link rel='stylesheet' href='https://codepen.io/a-mt/pen/VdoWRK.css'>
  <link rel="stylesheet" href="pagetweet.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="page">
    <aside class="colonne-de-gauche">
      <a href="https://twitter.com"><img
          src="https://www.meilleure-innovation.com/wp-content/uploads/2021/05/logo-twitter-png-transparent.png"
          width="32"></a>

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


      <button class="modal-btn modal-trigger">Tweeter</button>


      <div class="modal-container">

        <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">

          <!-- partial:index.partial.html -->
          <div class="modal">
            <div class="modal-content" role="document">
              <div class="modal-header">

                <button aria-label="close modal" class="close-modal modal-trigger">X</button>
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
                      <textarea class="rich-editor" spellcheck="true" placeholder="Quoi de neuf ?"></textarea>
                    </div>

                    <!-- REMAINING CHARACTERS -->
                    <div class="character-counter js-character-counter"></div>

                    <!-- EMOJI PICKER -->
                    <div class="emojipicker-btn EmojiPicker-trigger">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <path
                          d="M15 0C6.729 0 0 6.729 0 15s6.729 15 15 15 15-6.729 15-15S23.271 0 15 0zm0 28.378c-3.675 0-7.008-1.49-9.428-3.896a13.45 13.45 0 0 1-2.426-3.285A13.295 13.295 0 0 1 1.622 15C1.622 7.623 7.623 1.622 15 1.622c3.499 0 6.688 1.35 9.074 3.557a13.45 13.45 0 0 1 2.996 4.054A13.298 13.298 0 0 1 28.378 15c0 7.377-6.001 13.378-13.378 13.378z">
                        </path>
                        <circle r="1.622" cy="11.655" cx="10.101"></circle>
                        <circle r="1.622" cy="11.655" cx="20.135"></circle>
                        <path
                          d="M14.971 23.31c3.138 0 6.144-1.604 7.866-4.268l-1.362-.88a7.77 7.77 0 0 1-7.368 3.477 7.779 7.779 0 0 1-5.582-3.477l-1.362.88c1.5 2.32 4.026 3.893 6.758 4.208.35.04.701.06 1.05.06z">
                        </path>
                      </svg>
                    </div>
                  </div>

                  <!-- BOTTOM TOOLBAR -->
                  <div class="tweet-toolbar">
                    <div class="tweet-box-extras"></div>
                    <div class="tweet-toolbar-button">
                      <button type="button" class="btn" disabled id="preview">Preview</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>

    </aside>



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
          <article>
            <aside>
              <!-- ici l'avatar -->
              <img width="60" height="60"
                src="https://www.ipnoze.com/wordpress/wp-content/uploads/2018/09/lapins-mignons-002.jpg">
            </aside>
            <main>
              <!-- ici le contenu du tweet -->
              <header>
                <b>gallina</b>
                <span>@gallina</span>
                <date>15 jui. 2018</date>
              </header>
              <p>Champions du monde ! Bravo à nos bleus ⚽✨🎉 <a href="">#France2018</a> <a
                  href="">#WorldCupFinal2018</a> <a href="">@WorldChampions</a></p>
            </main>
          </article>
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
  <script
    src='https://cdn.rawgit.com/a-mt/020212e6d9daec5ca0da69bef55bba01/raw/3f0913be305e44796313284ab2d4292e44790bff/emojiInfo.en.js'></script>
  <script src='https://codepen.io/a-mt/pen/VdoWRK.js'></script>
  <script src='//twemoji.maxcdn.com/2/twemoji.min.js?2.4'></script>
  <script src="pagescript.js"></script>

</body>

</html>