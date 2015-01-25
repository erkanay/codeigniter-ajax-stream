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
   * @func. post click 
   * 
   */
  $('#post').on('click',function(){
    /**
     * @var post_text
     * 
     */
    var post_text = $('#post-text').val().trim;
    /**
     * @var post_type
     * 
     */
    var post_type = $('#post-type').val().trim;
    /**
     * @func. ajax method 
     * 
     */
    var request = $.ajax({
        url: "script.php",
        type: "POST",
        data: { 
          'p_text':post-text,
          'p_type':post-type
        },
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
  
});
