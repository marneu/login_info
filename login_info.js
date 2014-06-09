
if ( login_info_before != null ) {
    $(document).ready(function() {
      $('#login-form').html(login_info_before.concat($('#login-form').html()));
    });
}
if ( login_info_after != null ) {
    $(document).ready(function() {
      $('#login-form').after(login_info_after);
    });
}

if ( bottomline != null ) {
  // larry
  if ( document.getElementById('bottomline') ) {
      $(document).ready(function() {
        $('#bottomline').html(bottomline);
      });
  }
  // default
  if ( document.getElementById('login-bottomline') ) {
      $(document).ready(function() {
        $('#login-bottomline').html(bottomline);
      });
  }
}


