$(document).ready(function () {
  /**
   * Shuffles array in place.
   * @param {Array} a items An array containing the items.
   */
  function shuffle(a) {
      var j, x, i;
      for (i = a.length - 1; i > 0; i--) {
          j = Math.floor(Math.random() * (i + 1));
          x = a[i];
          a[i] = a[j];
          a[j] = x;
      }
      return a;
  }

  /**
   * Random
   * @param {min}
   * @param {max}
   */
  function rand(min, max){
   return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function randomKeyboardPassword(){
    var gen = rand(0,9);
    var ran = rand(0,15);
    var rep = [];
    
    while (rep.length <= 9) {
      
      var ken = rand(0,9);
      
      if(rep.indexOf(ken) == -1){
        rep.push(ken);
      }
    }
    
    rep.push(0,0,0,0,0,0);
      
    shuffle(rep);
    
    return rep;
    
  }

  var keyBoardArray = randomKeyboardPassword();
  var champ = '';
  var valueInit = [];

  $("#map-keyboard").find(".btn").each(function (index) {
      var row = $(this);
      var putter = '';

      if(keyBoardArray[index] == 0){
        row.text(putter); 
        row.attr("value", -1);
      }else{
        row.text(keyBoardArray[index]);
        row.attr("value", keyBoardArray[index]);
      }

      row.click(function () {
          var row = $(this);
          if (row.text() !== '' && valueInit.length < 4 ) {
            valueInit.push(row.text());
            champ = valueInit.toString().split(',').join('');
            $("#password").attr("value", champ);
          } 
      });

  });

  const limit = 8;
  rem = limit - $('#username')[0].value.length;
  $("#username").on('keypress', function(event) {
    
    $(this).val($(this).val().toUpperCase());
    $(this).val($(this).val().replace(/[^\w ]/, ''));
    $(this).val($(this).val().replace(' ', ''));

    var chars = $('#username')[0].value.length;
    if(chars > limit - 1){
        event.preventDefault();
    }
    rem = limit - chars;
  });

  $("#clean").click(function () {
    $("#password").attr("value", null);
    valueInit = [];
    champ = '';
  });

  $("#valider").click(function () {
    var password = $("#password");
    var username = $("#username");

    if (username[0].value.length == 8 && password[0].value.length == 4) {
      console.log(username[0].value);
      console.log(password[0].value);
    }
  });

});