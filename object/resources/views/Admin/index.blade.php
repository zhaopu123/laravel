@extends('Admin.base.parent')

@section('content')
    <!-- Messages Drawer -->
    <div id="messages" class="tile drawer animated">
        <div class="listview narrow">
            <div class="media">
                <a href="">Send a New Message</a>
                <span class="drawer-close">&times;</span>
                
            </div>
            <div class="overflow" style="height: 254px">
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                        <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">David Villa - 5 Hours ago</small><br>
                        <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/3.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                        <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/4.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                        <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                        <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">David Villa - On 16/12/2013</small><br>
                        <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/3.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Harris worgon - On 17/12/2013</small><br>
                        <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/4.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Mitch Bradberry - On 18/12/2013</small><br>
                        <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/5.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Wendy Mitchell - On 19/12/2013</small><br>
                        <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                    </div>
                </div>
            </div>
            <div class="media text-center whiter l-100">
                <a href=""><small>VIEW ALL</small></a>
            </div>
        </div>
    </div>
    
    <!-- Notification Drawer -->
    <div id="notifications" class="tile drawer animated">
        <div class="listview narrow">
            <div class="media">
                <a href="">Notification Settings</a>
                <span class="drawer-close">&times;</span>
            </div>
            <div class="overflow" style="height: 254px">
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                        <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">David Villa - 5 Hours ago</small><br>
                        <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/3.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                        <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/4.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                        <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                        <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <img width="40" src="Admin/img/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <small class="text-muted">David Villa - On 16/12/2013</small><br>
                        <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                    </div>
                </div>
            </div>
            <div class="media text-center whiter l-100">
                <a href=""><small>VIEW ALL</small></a>
            </div>
        </div>
    </div>
    
    <!-- Breadcrumb -->
    <ol class="breadcrumb hidden-xs">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>
    
    <h4 class="page-title">DASHBOARD</h4>
    <hr class="whiter" />
    
    <div class="block-area shortcut-area">
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/money.png" alt="">
                        <small class="t-overflow">Purchases</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/twitter.png" alt="">
                        <small class="t-overflow">Tweets</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/calendar.png" alt="">
                        <small class="t-overflow">Calendar</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/stats.png" alt="">
                        <small class="t-overflow">Statistics</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/connections.png" alt="">
                        <small class="t-overflow">Connection</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/reports.png" alt="">
                        <small class="t-overflow">Reports</small>
                    </a>
                </div>
                
                <hr class="whiter" />
                
                <!-- Quick Stats -->
                <div class="block-area">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats">
                                <div id="stats-line-2" class="pull-left"></div>
                                <div class="data">
                                    <h2 data-value="98">0</h2>
                                    <small>Tickets Today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">
                                <div id="stats-line-3" class="pull-left"></div>
                                <div class="media-body">
                                    <h2 data-value="1452">0</h2>
                                    <small>Shipments today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">

                                <div id="stats-line-4" class="pull-left"></div>

                                <div class="media-body">
                                    <h2 data-value="4896">0</h2>
                                    <small>Orders today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">
                                <div id="stats-line" class="pull-left"></div>
                                <div class="media-body">
                                    <h2 data-value="29356">0</h2>
                                    <small>Site visits today</small>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="block-area">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Main Chart -->
                            <div class="tile">
                                <h2 class="tile-title">Statistics</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a class="tile-info-toggle" href="">Chart Information</a></li>
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                                <div class="p-10">
                                    <div id="line-chart" class="main-chart" style="height: 250px"></div>

                                    <div class="chart-info">
                                        <ul class="list-unstyled">
                                            <li class="m-b-10">
                                                Total Sales 1200
                                                <span class="pull-right text-muted t-s-0">
                                                    <i class="fa fa-chevron-up"></i>
                                                    +12%
                                                </span>
                                            </li>
                                            <li>
                                                <small>
                                                    Local 640
                                                    <span class="pull-right text-muted t-s-0"><i class="fa m-l-15 fa-chevron-down"></i> -8%</span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <small>
                                                    Foreign 560
                                                    <span class="pull-right text-muted t-s-0">
                                                        <i class="fa m-l-15 fa-chevron-up"></i>
                                                        -3%
                                                    </span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
    
                            <!-- Pies -->
                           

                            <!--  Recent Postings -->
                            
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="col-md-4">
                            <!-- USA Map -->
                            <div class="tile">
                                <h2 class="tile-title">Live Visits</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                                
                                <div id="usa-map"></div>
                            </div>
    
                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

 
    <!-- Chat -->
    <div class="chat">
        
        <!-- Chat List -->
        <div class="pull-left chat-list">
            <div class="listview narrow">
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/1.jpg" width="30" alt="">
                    <div class="media-body p-t-5">
                        Alex Bendit
                    </div>
                </div>
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/2.jpg" width="30" alt="">
                    <div class="media-body">
                        <span class="t-overflow p-t-5">David Volla Watkinson</span>
                    </div>
                </div>
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/3.jpg" width="30" alt="">
                    <div class="media-body">
                        <span class="t-overflow p-t-5">Mitchell Christein</span>
                    </div>
                </div>
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/4.jpg" width="30" alt="">
                    <div class="media-body">
                        <span class="t-overflow p-t-5">Wayne Parnell</span>
                    </div>
                </div>
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/5.jpg" width="30" alt="">
                    <div class="media-body">
                        <span class="t-overflow p-t-5">Melina April</span>
                    </div>
                </div>
                <div class="media">
                    <img class="pull-left" src="Admin/img/profile-pics/6.jpg" width="30" alt="">
                    <div class="media-body">
                        <span class="t-overflow p-t-5">Ford Harnson</span>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Chat Area -->
        <div class="media-body">
            <div class="chat-header">
                <a class="btn btn-sm" href="">
                    <i class="fa fa-circle-o status m-r-5"></i> Chat with Friends
                </a>
            </div>
        
            <div class="chat-body">
                <div class="media">
                    <img class="pull-right" src="Admin/img/profile-pics/1.jpg" width="30" alt="" />
                    <div class="media-body pull-right">
                        Hiiii<br/>
                        How you doing bro?
                        <small>Me - 10 Mins ago</small>
                    </div>
                </div>
                
                <div class="media pull-left">
                    <img class="pull-left" src="Admin/img/profile-pics/2.jpg" width="30" alt="" />
                    <div class="media-body">
                        I'm doing well buddy. <br/>How do you do?
                        <small>David - 9 Mins ago</small>
                    </div>
                </div>
                
                <div class="media pull-right">
                    <img class="pull-right" src="Admin/img/profile-pics/2.jpg" width="30" alt="" />
                    <div class="media-body">
                        I'm Fine bro <br/>Thank you for asking
                        <small>Me - 8 Mins ago</small>
                    </div>
                </div>
                
                <div class="media pull-right">
                    <img class="pull-right" src="Admin/img/profile-pics/2.jpg" width="30" alt="" />
                    <div class="media-body">
                        Any idea for a hangout?
                        <small>Me - 8 Mins ago</small>
                    </div>
                </div>
                  
            </div>
        
            <div class="chat-footer media">
                <i class="chat-list-toggle pull-left fa fa-bars"></i>
                <i class="pull-right fa fa-picture-o"></i> 
                <div class="media-body">
                    <textarea class="form-control" placeholder="Type something..."></textarea>
                </div>
            </div>
            
        </div>
    </div>
@endsection