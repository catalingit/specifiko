<div class="wrapper">
    <div class="main">
        <div class="content">
            
            <div class="video-list">
                <div id="yw0" class="list-view">
                    
                    <div class="items">
                        
                        <?php
                            //Loop through the videos
                            foreach($videos AS $videoInfo):
                        ?>
                            <div class="item">
                                <div class="video">
                                    <a href="/video/<?=$videoInfo['id']?>/<?php echo seoTitle($videoInfo['title']); ?>">
                                        <img src="http://www.bilingoz.com/<?php echo $videoInfo['thumbnail_pic']; ?>"  />
                                    </a>
                                </div>
                                
                                <div class="title">
                                    <a title="<?= $videoInfo['title']; ?>" href="/video/<?=$videoInfo['id']?>/<?php echo seoTitle($videoInfo['title']); ?>">
                                        <?= $videoInfo['title']; ?>
                                    </a>
                                </div>
                                
                                <div class="difficulty">
                                    <span>Level:</span> <?= videoLevel($videoInfo['level']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="pager">
                        <ul id="page" class="yiiPager">
                            <li class="first hidden"><a href="/videos/index">&lt;&lt; First</a></li>
                            <li class="previous hidden"><a href="/videos/index">&lt; Previous</a></li>
                            <li class="page selected"><a href="/videos/index">1</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=2">2</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=3">3</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=4">4</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=5">5</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=6">6</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=7">7</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=8">8</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=9">9</a></li>
                            <li class="page"><a href="/videos/index?video-list_page=10">10</a></li>
                            <li class="next"><a href="/videos/index?video-list_page=2">Next &gt;</a></li>
                            <li class="last"><a href="/videos/index?video-list_page=37">Last &gt;&gt;</a></li>
                        </ul>
                    </div>
                
                    <div class="keys" style="display:none" title="/videos">
                        <span>2084</span><span>1191</span><span>1544</span><span>1166</span> <span>1210</span><span>1314</span>
                        <span>2010</span><span>1198</span><span>1704</span><span>1147</span><span>1667</span><span>1222</span><span>1724</span><span>1262</span><span>1350</span><span>1698</span><span>2001</span><span>1137</span><span>1700</span><span>1932</span><span>1407</span><span>1723</span><span>1212</span><span>1218</span><span>1259</span><span>1472</span><span>1401</span><span>1231</span>
                    </div>
                </div>
            </div>
            
            <script language="javascript">
                function changeSort(sort) {
                    var loc = '/videos/list/recent-all';
                    
                    if(loc.indexOf('recent')>0) {
                        loc = loc.replace('recent',sort);
                        
                    } else if(loc.indexOf('popular')>0) {
                        
                        loc = loc.replace('popular',sort);
                    } else {
                        
                        loc = loc.concat('-').concat(sort);
                    }
                    $(location).attr('href',loc);
                }
                
                function changeLevel(level) {
                    var loc = '/videos/list/recent-all';
                    
                    if(loc.indexOf('all')>0) {
                        loc = loc.replace('all',level);
                    } else if(loc.indexOf('easy')>0) {
                        loc = loc.replace('easy',level);
                    } else if(loc.indexOf('medium')>0) {
                        loc = loc.replace('medium',level);
                    } else if(loc.indexOf('hard')>0) {
                        loc = loc.replace('hard',level);
                    } else {
                        loc = loc.concat('-').concat(level);
                    }
                    $(location).attr('href',loc);
                }
            </script>
        </div>
    </div>
</div>