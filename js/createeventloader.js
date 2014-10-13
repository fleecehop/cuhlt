$(function() {
  $("#eventButton").bind("click", function(e) {    
    var contentID  = $(e.target).attr("data-target");
    var contentURL = $(e.target).attr("href");
    if (typeof(contentURL) != 'undefined')
      $(contentID).load(contentURL, function(){ $("#eventButton").tab(); });
    else
      $(contentID).tab('click');
  });
});