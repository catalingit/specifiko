<div id="navigation">

    <div id="top_menuwrap">

        <div id="top_menubar" class="navbar navbar-inverse">

            <div class="nav-collapse collapse">

                <ul class="nav navbar-nav">
                    <li class=""><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/support">Support</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/profile/setlang/en">English</a</li>
                    <li><a href="/profile/setlang/zh">中文</a></li>
                    <li><a href="/profile/setlang/ja">日本語</a></li>
                </ul>          
            </div><!--/.nav-collapse -->

        </div>

    </div>

    <div class="header-wrap">

        <div class="container-fluid">

            <div class="logo-wrap">
                <a href="../"><img src="../assets/img/specifiko-logo.png" width="101px"></a>
            </div>
        
            <ul class='main-nav'>
                <li class='active'><a href="#"><span>Healthcare Videos</span></a></li>
                <li><a href="#"><span>Learn Healthcare English</span></a></li>
            </ul>
        
            <div class="user">
                <?php
                    //Check if the user is logged in
                    if(!$this->session->userdata('user_id')):
                ?>
                    <input type="button" id="registerBtn" value="Register" onclick="location.href='/register';"/>
                    <input type="button" id="loginBtn" value="Login" onclick="location.href='/login';"/>
                <?php else: ?>
                    <input type="button" id="loginBtn" value="My Account" onclick="location.href='/account';"/>
                <?php endif;?> 
            </div>
            
            <form action="search-results.html" method="GET" class='search-form'>

                <div class="search-pane">
                    <input type="text" name="search" placeholder="Search here...">
                    <button type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
            
        </div>

    </div>

    <div class="navbar navbar-inverse" id="menubar">

    <!--<div class="tab-wrap">

            <div class="tab-content">-->

                <div class="tab-pane active" id="healthcare-video">                    

                    <div class="left-wrap"></div>

                    <ul class="dropdown">
                        
                        <li><a href="/videolist/fda">FDA</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/fda">2012</a></li>
                                <li><a href="/videolist/fda">2011</a></li>
                                <li><a href="/videolist/fda">2010</a></li>
                                <li><a href="/videolist/fda">2009</a></li>
                                <li><a href="/videolist/fda">2008</a></li>
                                <li><a href="/videolist/fda">2007</a></li>
                                <li><a href="/videolist/fda">2006-02</a></li>
                                <li><a href="/videolist/fda">New Drug Approvals</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/obama">Obama</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/obama">Weekly Address</a></li>
                                <li><a href="/videolist/obama">Speeches</a></li>
                                <li><a href="/videolist/obama">Press Conferences</a></li>
                                <li><a href="/videolist/obama">News Reports</a></li>
                                <li><a href="/videolist/obama">Town Hall</a></li>
                                <li><a href="/videolist/obama">Discussions</a></li>
                                <li><a href="/videolist/obama">Analysis</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/voa">VOA</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/voa">2012</a></li>
                                <li><a href="/videolist/voa">2011</a></li>
                                <li><a href="/videolist/voa">2010</a></li>
                                <li><a href="/videolist/voa">2009</a></li>
                                <li><a href="/videolist/voa">2008</a></li>
                                <li><a href="/videolist/voa">2007</a></li>
                                <li><a href="/videolist/voa">2006-02</a></li>- VIEW ALL - </a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/companies">Companies</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/companies">AstraZeneca</a></li>
                                <li><a href="/videolist/companies">Lilly</a></li>
                                <li><a href="/videolist/companies">GSK</a></li>
                                <li><a href="/videolist/companies">Merck</a></li>
                                <li><a href="/videolist/companies">Novartis</a></li>
                                <li><a href="/videolist/companies">Pfizer</a></li>
                                <li><a href="/videolist/companies">Roche</a></li>
                                <li><a href="/videolist/companies">Sanofi</a></li>
                                <li><a href="/videolist/companies">Others</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/diseases">Diseases</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/diseases">Cancer</a></li>
                                <li><a href="/videolist/diseases">Diabetes</a></li>
                                <li><a href="/videolist/diseases">Cardio</a></li>
                                <li><a href="/videolist/diseases">Mental Health</a></li>
                                <li><a href="/videolist/diseases">Renal</a></li>
                                <li><a href="/videolist/diseases">HIV/AIDS</a></li>
                                <li><a href="/videolist/diseases">Pediatric</a></li>
                                <li><a href="/videolist/diseases">Pulmonary</a></li>
                                <li><a href="/videolist/diseases">Others</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/drug-safety">Drug Safety</a>

                            <ul class="sub_menu">
                                <li><a href="/videolist/drug-safety">Approvals</a></li>
                                <li><a href="/videolist/drug-safety#">Recalls</a></li>
                                <li><a href="/videolist/drug-safety">Warnings</a></li>
                                <li><a href="/videolist/drug-safety">Counterfeits</a></li>
                                <li><a href="/videolist/drug-safety">Labels</a></li>
                                <li><a href="/videolist/drug-safety">Others</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/device-safety">Device Safety</a>

                            <ul class="sub_menu">
                                <li><a href="/videolist/device-safety">Approvals</a></li>
                                <li><a href="/videolist/device-safety">Counterfeits</a></li>
                                <li><a href="/videolist/device-safety">Withdrawals</a></li>
                                <li><a href="/videolist/device-safety">Labels</a></li>
                                <li><a href="/videolist/device-safety">Warnings</a></li>
                                <li><a href="/videolist/device-safety">Others</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/videolist/market-news">Market News</a>
                            <ul class="sub_menu">
                                <li><a href="/videolist/market-news">2012</a></li>
                                <li><a href="/videolist/market-news">2011</a></li>
                                <li><a href="/videolist/market-news">2010</a></li>
                                <li><a href="/videolist/market-news">2009</a></li>
                                <li><a href="/videolist/market-news">2008</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                
            <!--<div class="tab-pane" id="healthcare-learn">dfasdfasdfasdfasdfs</div>

            </div>

        </div>-->

    </div>

</div>