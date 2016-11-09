<?php
include('header.php');
?>
<script type="text/javascript">
	sessionStorage.removeItem('camila');
	sessionStorage.removeItem('camilo');
	sessionStorage.removeItem('andrea');
	sessionStorage.removeItem('orlando');
	sessionStorage.removeItem('paulina');
	sessionStorage.removeItem('laura');
	sessionStorage.removeItem('alex');
</script>
<?php
if(session_destroy()) {
	header("Location: login.php");
} 

include('footer.php');
?>