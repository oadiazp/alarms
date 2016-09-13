<?php
/*
Template Name: Lang
*/
get_header();
?>
<section class="body-container pa_body">
	<div class="center-container">
		<div class="dlang">
			<form id="flang" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post">
				<div class="slang">
					<select id="slang">
						<option value="0">Select</option>
						<option value="en">EN</option>
						<option value="de">DE</option>
					</select>
				</div>
				<div class="sep"></div>
				<div class="pages">
					<select id="pages">
						<option value="menu">Menu</option>
						<option value="contact">Contact us</option>
						<option value="setup">Setup & activation</option>
						<option value="get_more">Get more out of your system</option>
					</select>
				</div><br/><br/><br/>
				<hr class="hrsep"/>
				<div class="center-container">
					<div id="container"></div>
					<input type="button" id="btnSave" name="btnSave" value="OK" class="btn btnlang">
				</div>
			</form>
		</div>
	</div>
	<script>
	(function ($, root, undefined) {
		$(function () {
			$("#slang").change(function() {
				var idio = $("#slang").val();
				var node = $("#pages").val();
				if (idio != 0)
					changeL(idio, node);
				else
					$("#container").html('');
			});
			$("#pages").change(function() {
				var idio = $("#slang").val();
				var node = $("#pages").val();
				if (idio != 0)
					changeL(idio, node);
				else
					$("#container").html('');

			});
			$('#btnSave').click(function(e){
				var values = {};
				var idio = $("#slang").val();
				var node = $("#pages").val();
				e.preventDefault();
				$("#flang :input").each(function() {
					if (this.name != "" && this.name != "btnSave")
				        values[this.name] = $(this).val();
			    });
			    $.ajax({
			        type: 'POST',
					url: '<?php echo get_template_directory_uri(); ?>/tlang.php',
					data:{fn: "saveXML", lang: idio, node: node, vals: values},
					dataType:"json",
			        success: function (response) {
						d = response.result;
						if(d == 1) alert("DONE!!!");
			        }
			    });
			});
		});
	})(jQuery, this);

	function changeL(idio, node){
		$.ajax({
	        type: 'POST',
			url: '<?php echo get_template_directory_uri(); ?>/tlang.php',
			data:{fn: "changeLang", lang: idio, node: node, opt: 1},
			dataType:"json",
	        success: function (response) {
				d = response.result;
				$("#container").html('');
	            for(i=0;i<d.length;i++){
	            	node = '<div style="float:left;width:33.33333%;">';
	            	if (d[i].value.length < 50)
	            		node+= '<input type="text" name="'+d[i].key+'" id="'+d[i].key+'" value="'+d[i].value+'">';
	            	else
	            		node+= '<textarea id="'+d[i].key+'" name="'+d[i].key+'">'+d[i].value+'</textarea>';
	            	node+= '</div>';
					$("#container").append(node);
				}
	        }
	    });
	}
	</script>
</section>
<?php get_footer();?>