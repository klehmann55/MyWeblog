<?php
if ( isset($_SESSION['form']) ) { ?>

		<script>
		
			var myform = '<?= $_SESSION['form'] ?>';
			document.getElementById('a' + myform).click();
				
				<?php
				if ( isset($_SESSION['errormsg']) ) {
					
					foreach ( $_SESSION['errormsg'] as $key => $msg ) { ?>
					
						var field = document.getElementById('<?= $key ?>');
						field.placeholder = '<?= $msg ?>';
			
						field.setAttribute('style', 'color: red; border-color: red; background-color: #ef7e7e36;');
						field.focus(); //@todo: focus on the first 'mistake-field'!
					<?php }
				} ?>
						
		</script>
		
<?php } ?>