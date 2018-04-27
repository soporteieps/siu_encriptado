<?php 
  session_start();
?> 
<html> 
<head>
<title>salir</title> 
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body> 
<script> 
  window.location="salir.php?script_case_session=<?php echo session_id() ?>" ; 
</script> 
</body> 
</html> 
