<!doctype html>
<html lang="en">
	<style>

	/* Copy Right Footer */
	.footer-copyright { background: #222; padding: 5px 0;}
	.footer-copyright .logo {    display: inherit;}
	.footer-copyright nav {    float: right;    margin-top: 5px;}
	.footer-copyright nav ul {  list-style: none; margin: 0;  padding: 0;}
	.footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block;  line-height: 12px;  margin: 0;  padding: 0 8px;}
	.footer-copyright nav ul li a{  color: #969696;}
	.footer-copyright nav ul li:first-child { border: medium none;  padding-left: 0;}
	.footer-copyright p { color: #969696; margin: 2px 0 0;}

	/* Footer transparent */
	footer.transparent .footer-top, footer.transparent .main-footer{  background: transparent;}
	footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

	</style>
<head>
  <meta charset="utf-8">
	<link rel="icon" type="image/png" href="/favicon-32x32.png"/>
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
              <input type="text" id="search" class="form-control" autocomplete="off" placeholder="cari kode error"><br>
            </div>
          <div class="col-md-2"></div>
        </div>
      <div class="result">
        
      </div>

	</div>
    <footer id="footer" class="footer-1">

<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-right">
<p><small>@ Malang 2021 © dimas.anda92@gmail.com</small></p>
</div>
</div>
</div>
</div>
</footer>
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
