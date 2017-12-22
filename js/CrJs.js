  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#Venatna1').modal();
  });

 $(document).ready(function() {
    $('select').material_select();
  });

  $('select').material_select('destroy');

var options = [
    {selector: '.class', offset: 200, callback: customCallbackFunc },
    {selector: '.other-class', offset: 200, callback: function() {
      customCallbackFunc();
    } },
  ];
  Materialize.scrollFire(options);
            