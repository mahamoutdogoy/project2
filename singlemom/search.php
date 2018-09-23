<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br /><br />
   <label>Search Job Details</label>
   <div id="search_area">
    <input type="text" name="job_search" id="job_search" class="form-control input-lg" autocomplete="off" placeholder="Type Job name" />
   </div>
   <br />
   <br />
   <div id="job_data"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_data('');
 
 function load_data(query, typehead_search = 'yes')
 {
  //var usern = $_GET['q'];
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query, typehead_search:typehead_search},
   success:function(data)
   {
    $('#job_data').html(data);
   }
  });
 }
 
 $('#job_search').typeahead({
  source: function(query, result){
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data){
     result($.map(data, function(item){
      return item;
     }));
     load_data(query, 'yes');
    }
   });
  }
 });
 
 $(document).on('click', 'li', function(){
  var query = $(this).text();
  load_data(query);
 });
 
});
</script>
