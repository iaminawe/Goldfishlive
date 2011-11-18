$(document).ready(function() {
  var options =
  {
   'request_token_endpoint': '/soundcloud/request_token',
   'access_token_endpoint': '/soundcloud/access_token',
   'callback': function(query_obj){
      window.location.reload();
   }
  };
  SC.Connect.prepareButton($('#sc-connect')[0], options);
});

