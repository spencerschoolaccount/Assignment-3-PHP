<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Pizza Price Calculator</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
    <h5>What size do you want?</h3>
    <div class="page-content" style="margin-left: 5px">
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="large">
        <input type="radio" id="large" class="mdl-radio__button" name="size" value="1" checked>
        <span class="mdl-radio__label">Large</span>
      </label>
      <br>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="extraLarge">
        <input type="radio" id="extraLarge" class="mdl-radio__button" name="size" value="2">
        <span class="mdl-radio__label">Extra Large</span>
      </label>

    </div>
  </main>
</div>
  </body>
</html>