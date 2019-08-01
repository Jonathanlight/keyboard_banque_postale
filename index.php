  <!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>La Banque Postale</title>
      <link rel="shortcut icon" href="https://www.labanquepostale.fr/etc/designs/labanquepostale/commons/clientlibs/images/bp-app/favicon.png">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="./src/css/style.css" />
    </head>

    <body class="blue darken-4">
      
    <div class="container">
      <div class="row">
        <div class="col m4"></div>
        <div class="col m4">
      
        <table width="80">
        <thead>
          <tr class="blue darken-4 title">
            <th colspan="4" class="title">
                <span class="">CONNEXION</span>
            </th>
          </tr>
          <tr class="card">
            <th colspan="4">
                <input id="username" min="8" max="8" placeholder="IDENTIFIANT" type="text" class="validate">
            </th>
          </tr>
          <tr class="card">
              <th colspan="4">
                <input id="password" min="4" max="4" placeholder="Composez votre mot de passe" type="password" class="validate" readonly>
            </th>
          </tr>
        </thead>

        <tbody id="map-keyboard" class="card">
          <tr>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">1</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">2</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">3</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">4</a></td>
          </tr>
          
          <tr>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">5</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">6</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">7</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">8</a></td>
          </tr>
          
          <tr>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">9</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">0</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
          </tr>
          
          <tr>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
            <td><a class="btn btn-large waves-effect waves-light blue darken-4 numberKey">&nbsp;&nbsp;</a></td>
          </tr>
          
        </tbody>
          <tfooter>
          <tr  class="card">
            <th colspan="2">
                <button class="waves-effect waves-light btn-large blue darken-1" id="valider">Valider</button>
            </th>
            <th colspan="2">
                <button id="clean" class="waves-effect waves-light btn-large grey darken-1">Effacer</button>
            </th>
          </tr>
          </tr>
        </tfooter>
      </table>
          </div>
    </div>  
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="./src/js/app.js"></script>
            
    </body>
  </html>