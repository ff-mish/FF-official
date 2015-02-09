<?php include_once 'common/header.php';?>
<div class="page" data-page="interview-page" data-header="press">
	<!-- page title -->
	<?php 
	$top_title = _e('PRESS',false);
	$pagetit = _e('INTERVIEW',false);
	include_once 'common/pagetit.php';?>


	<!-- section -->
	<div class="section sec_press">
		<div>
			<!--  -->
			<div class="press_txt">
				<?php _e('Ici un texte de presentation<br />de chapitre utile pour le referencement'); ?>
			</div>
			<!--  -->
			<div id="press-container" class="interview_list cs-clear">
			</div>
		</div>
	</div>
<?php include_once 'common/footer.php';?>