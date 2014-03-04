<div class="container-fluid">
        <div class="container-wrap" id="container1">
            <div class="middle-content">
                <div class="container" id="main-container">
                    <div class="left-sidebar">
                        
                        <div class="content">
                            
                            <?php
                                /*Video Player and info*/
                                $this->load->view('video/homePlayer.php');
                                
                                /*Random Video Carosuel*/
                                $this->load->view('home/thumbnailScroll.php');
                            ?>
                            
                        </div>
                    </div>
                    <div class="right-sidebar">
                        <div class="right-content">
                            
                            <div class="content">
                                
                                <p class="txt-content">
                                    We offer the best environment for learning Healthcare industry specific English with integrated tracking and metrics
                                    to measure results and ensure progress.
                                </p>
                                
                                <div class="info-wrap">
                                    <h5>Information</h5>
                                    <img src="<?=serverAssets();?>img/left-arrow.png" />
                                    <p class="txt-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                </div>
                                
                                <div class="chart-wrap">
                                    <p>
                                        <img class="left charts" src="<?=serverAssets();?>img/chart1.png" />
                                        <img class="middle charts" src="<?=serverAssets();?>img/chart2.png" />
                                        <img class="right charts" src="<?=serverAssets();?>img/chart3.png" />
                                    </p>
                                    <p class="sub-charts">
                                        <img class="left" src="<?=serverAssets();?>img/chart6.png" />
                                        <img class="right" src="<?=serverAssets();?>img/chart7.png" />
                                    </p>
                                </div>
                                
                                <div class="button-wrap">
                                    <input type="button" id="free-lession" value="Free Lessons" />
                                    <input type="button" id="company-solution" value="Company Solutions" />
                                </div>
                                
                                <p class="txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.</p>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- /.container -->
            </div>
          </div>
        
            <div class="container-wrap" id="container2">
                <div class="middle-content">
                    <div class="container" id="main-container">
                        
                        <div class="left-sidebar">
                            
                            <div class="content">
                                <h4 class="title">What is the problem?</h4>
                                <p>
                                    Students keep studying basic business English but lack the language skills to function in their very specific
                                    and specialized Health care sectors. English courses are not relevant enough and the teaching and tracking methods
                                    do not ensure progress.
                                </p>
                                
                                <div id="img-wrap">
                                    <img id="problem" src="<?=serverAssets();?>img/problem.png" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="right-sidebar">
                            
                            <div class="content" id="bilingoz-solution">
                                <h4 class="title">What is the Bilingoz Solution?</h4>
                                
                                <div class="sub-content">
                                    <img src="<?=serverAssets();?>img/chart4.png" />
                                    <span>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
                                        egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                    </span>
                                </div>
                                
                                <div class="sub-content">
                                    <img id="chart5" src="<?=serverAssets();?>img/chart5.png" />
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id,
                                        condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                    </p>
                                </div>
                                
                                <input type="button" id="findout" value="Find Out More" />
                                
                                <button id="study-free">
                                    <h4>Study for Free</h4><br>
                                    <h5>Viewing videos and basic learning is always free</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-wrap" id="container3">
                <div class="middle-content">
                    <div class="container" id="main-container">
                        <div class="left-sidebar">
                            
                            <div class="content" id="our-method">
                                <h4 class="title">Our Methods:</h4>
                                
                                <div class="group">
                                    <div class="methods left">
                                        
                                        <div class="image-wrap">
                                            <h5 class="subtitle">Instruction Material Using Latest News</h5>
                                            <img id="img4" src="<?=serverAssets();?>img/img4.png" />
                                        </div>
                                        
                                        <span>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
                                            egestas id, condimentum at, laoreet
                                        </span>
                                    </div>
                                    
                                    <div class="methods right">
                                        <div class="image-wrap">
                                            <h5 class="subtitle">Dynamic Exercises and Testing</h5>
                                            <img id="img5" src="<?=serverAssets();?>img/img5.png" />
                                        </div>
                                        
                                        <span>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
                                            egestas id, condimentum at,
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="group">
                                    
                                    <div class="methods left">
                                        
                                        <div class="image-wrap">
                                            <h5 class="subtitle">Tracking to Measure Real World Ability</h5>
                                            <img id="img6" src="<?=serverAssets();?>img/img6.png" />
                                        </div>
                                        
                                        <span>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
                                            egestas id, condimentum at, laoreet
                                        </span>
                                    </div>
                                    
                                    <div class="methods right">
                                        
                                        <div class="image-wrap">
                                            <h5 class="subtitle">Company Accounts with Overview and Individual Views</h5>
                                            <img id="img7" src="<?=serverAssets();?>img/img7.png" />
                                        </div>
                                        
                                        <span>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo,
                                            egestas id, condimentum at,
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="right-sidebar">
                            
                            <div class="content" id="content6">
                                <h4 class="title" id="title1">Fit your learning habits to your lifestyle</h4>
                                <h4 class="title">Stay informed on any device</h4>
                                
                                <img src="<?=serverAssets();?>img/img8.png" />
                                <span>
                                    Many of our lessons and modules are available on tablets and mobile and you can always check your progress there.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>	