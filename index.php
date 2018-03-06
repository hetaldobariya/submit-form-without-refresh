<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<script type="text/javascript">
$('document').ready(function()
{
	$('#form').ajaxForm( {
		target: '#preview',
		success: function() {
		$('#formbox').slideUp('fast');
		}
	});
});
</script>

<div id="preview"> </div>
<div id="formbox">
	<form id="form" action="submit.php" method="post">
		Name<input type="text" name="name" />
		Email<input type="text" name="email" />
		Message<textarea name="message"></textarea>
		<input type="submit" value="Submit">
	</form>
</div>