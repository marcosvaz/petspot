<?php
  function success($mensagem){
    return
    '<div class="alert alert-success fixed-bottom" role="alert">' .
      '<div class="container">' .
        '<div class="alert-icon">	<i class="now-ui-icons ui-2_like"></i>' .
        '</div>	' . $mensagem . '' .
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
          '<i class="now-ui-icons ui-1_simple-remove"></i>' .
        '</span>' .
        '</button>' .
      '</div>' .
    '</div>';
  }
  function info($mensagem)
  {
    return
    '<div class="alert alert-info fixed-bottom" role="alert">' .
      '<div class="container">' .
        '<div class="alert-icon">	<i class="now-ui-icons travel_info"></i>' .
        '</div>	' . $mensagem . '' .
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
          '<i class="now-ui-icons ui-1_simple-remove"></i>' .
        '</span>' .
        '</button>' .
      '</div>' .
    '</div>';
  }
  function warning($mensagem)
  {
    return
    '<div class="alert alert-warning fixed-bottom" role="alert">' .
      '<div class="container">' .
        '<div class="alert-icon">	<i class="now-ui-icons ui-1_bell-53"></i>' .
        '</div>	' . $mensagem . '' .
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
          '<i class="now-ui-icons ui-1_simple-remove"></i>' .
        '</span>' .
        '</button>' .
      '</div>' .
    '</div>';
  }
  function danger($mensagem)
  {
    return
    '<div class="alert alert-danger fixed-bottom" role="alert">' .
    '<div class="container">' .
    '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
    '</div>	' . $mensagem . '' .
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
    '<i class="now-ui-icons ui-1_simple-remove"></i>' .
    '</span>' .
    '</button>' .
    '</div>' .
    '</div>';
  }
?>
