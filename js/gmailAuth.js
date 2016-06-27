$('#contact-form').submit(function(e){
  e.preventDefault();

  var $form = $(this);

  var $inputs = $form.find("input, select, button, textarea");

  var serializedData = $form.serialize();

  $inputs.prop("disabled", true);

  $.ajax({
    url: '/sendmail.php',
    type: 'POST',
    data: serializedData
  }).done(function(data){
    alert('Tu mensaje ha sido enviado con exito');
  }).always(function(data){
    $inputs.prop("disabled", false);
  })

})