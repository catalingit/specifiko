<div class="container-fluid">

	<div class="container-wrap" id="container1">

		<div class="middle-content">

			<div class="container" id="main-container">

				<div class="left-sidebar">
					<div class="content">
						<?php
							/*Video Player and info*/
							$this->load->view('video/videoPlayer');
	
							/*Random Video Carosuel*/
							$this->load->view('video/thumbnailScroll');
						?>
					</div>
				</div>

				<div class="right-sidebar">

					<div class="right-content">

						<div class="content">

							<?php
								//Load content for Top Right Section
								echo $cms_topRight['content'];
							?>

							<div class="chart-wrap">

								<p>
									<img class="left charts" src="<?=serverAssets(); ?>img/chart1.png" />
									<img class="middle charts" src="<?=serverAssets(); ?>img/chart2.png" />
									<img class="right charts" src="<?=serverAssets(); ?>img/chart3.png" />
								</p>

								<p class="sub-charts">
									<img class="left" src="<?=serverAssets(); ?>img/chart6.png" />
									<img class="right" src="<?=serverAssets(); ?>img/chart7.png" />
								</p>

							</div>

							<div class="button-wrap">
								<input type="button" id="free-lession" value="Free Lessons" />
								<input type="button" id="company-solution" value="Company Solutions" />
							</div>

							<p class="txt">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
							</p>

							<h4 class="title">What is the Bilingoz Solution?</h4>

							<div class="sub-content">
								<img src="<?=serverAssets(); ?>img/chart4.png" style="float:left;" />
								<span style="float: left; width: 60%; margin-left: 3%;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
									egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
								</span>
							</div>

							<div class="sub-content">

								<img id="chart5" src="<?=serverAssets(); ?>img/chart5.png" />

								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id,
									condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
								</p>

							</div>

							<input type="button" id="findout" value="Find Out More" />

							<button id="study-free">
								<h4>Study for Free</h4>
								<br>
								<h5>Viewing videos and basic learning is always free</h5>
							</button>

						</div>

					</div>

				</div>

			</div><!-- /.container -->

		</div>

	</div>

</div>

<!-- Vocabulary popup Modal -->
<div class="modal hide" id="vocabularyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
        <h3 id="myModalLabel">Vocabulary</h3>
    </div>
    
    <!-- Content Load-in here -->
    <div class="modal-body">

    </div>
    
</div>