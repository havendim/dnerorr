<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Diebold Nixdorf Error code translator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="directory/bootstrap.min.css">
  <script src="directory/bootstrap.min.js"></script>
  <script src="directory/jquery-3.4.1.js"></script>
</head>
  <body class="p-3 mb-2 bg-dark text-white">
	
    <div class="container" style="margin-top: 50px;">
	
      <h2 style="text-align: center;"><b>Diebold Nixdorf Error code translator</b></h2><br>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8 form-group">
              <input type="text" id="search" class="form-control" autocomplete="off" placeholder="cari kode error sesuai EJ"><br>
            </div>
          <div class="col-md-2"></div>
        </div>
      <div class="result">
        
      </div>

	    <footer class="footer">&copy;2021 dimas.ananda92@gmail.com</footer>

	</div>
    
  </body>
</html>

<!---jQuery ajax live search --->
<script type="text/javascript">
    $(document).ready(function(){
        // fetch data from table without reload/refresh page
        loadData();
        function loadData(query){
          $.ajax({
            url : "action.php",
            type: "POST",
            chache :false,
            data:{query:query},
            success:function(response){
              $(".result").html(response);
            }
          });  
        }

        // live search data from table without reload/refresh page
        $("#search").keyup(function(){
          var search = $(this).val();
          if (search !="") {
            loadData(search);
          }else{
            loadData();
          }
        });
    });
</script>