/**
 * @author : erkanay
 * @file   : ajax-stream
 * @version: 1.0
 * @date   : 24.01.2015
 *
 */
$.jQuery(function(){
  /**
   * @var state
   * 
   */
  var state = false;
  /**
   * @func. ajax method 
   * 
   */
  var request = $.ajax({
      url: "script.php",
      type: "POST",
      data: { id : menuId },
      dataType: "html"
  });
  /**
   * ajax binding
   * 
   */   
  request.done(function( msg ) {
      $( "#log" ).html( msg );
  });
  /**
   * ajax fail
   * 
   */   
  request.fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
  });  
});
