<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Tweeter Editor</title>
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/codemirror/5.22.0/codemirror.css'>
<link rel='stylesheet' href='https://codepen.io/a-mt/pen/VdoWRK.css'><link rel="stylesheet" href="styleeeee.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="modal">
  <div class="modal-content" role="document">
    <div class="modal-header"><h3 class="modal-title">Écrire un nouveau Tweet</h3></div>
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
              <path d="M15 0C6.729 0 0 6.729 0 15s6.729 15 15 15 15-6.729 15-15S23.271 0 15 0zm0 28.378c-3.675 0-7.008-1.49-9.428-3.896a13.45 13.45 0 0 1-2.426-3.285A13.295 13.295 0 0 1 1.622 15C1.622 7.623 7.623 1.622 15 1.622c3.499 0 6.688 1.35 9.074 3.557a13.45 13.45 0 0 1 2.996 4.054A13.298 13.298 0 0 1 28.378 15c0 7.377-6.001 13.378-13.378 13.378z"></path>
              <circle r="1.622" cy="11.655" cx="10.101"></circle>
              <circle r="1.622" cy="11.655" cx="20.135"></circle>
              <path d="M14.971 23.31c3.138 0 6.144-1.604 7.866-4.268l-1.362-.88a7.77 7.77 0 0 1-7.368 3.477 7.779 7.779 0 0 1-5.582-3.477l-1.362.88c1.5 2.32 4.026 3.893 6.758 4.208.35.04.701.06 1.05.06z"></path>
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
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/codemirror/5.22.0/codemirror.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/preact/8.2.7/preact.min.js'></script>
<script src='https://cdn.rawgit.com/a-mt/020212e6d9daec5ca0da69bef55bba01/raw/3f0913be305e44796313284ab2d4292e44790bff/emojiInfo.en.js'></script>
<script src='https://codepen.io/a-mt/pen/VdoWRK.js'></script>
<script src='//twemoji.maxcdn.com/2/twemoji.min.js?2.4'></script><script  src="./scripttttt.js"></script>

</body>
</html>
