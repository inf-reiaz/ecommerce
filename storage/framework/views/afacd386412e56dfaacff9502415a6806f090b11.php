
            <header id="header" class="ui-header">

                <div class="navbar-header">
                    <!--logo start-->
                    <a href="<?php echo e(route('dashboard')); ?>" class="navbar-brand">
                        <span class="logo"><img src="/public/admin/imgs/logo.png" style="width: 38px;" alt=""/></span>
                        
                    </a>
                    <!--logo end-->
                </div>

                <div class="search-dropdown dropdown pull-right visible-xs">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                    <div class="dropdown-menu">
                        <form >
                            <input class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                </div>

                <div class="navbar-collapse nav-responsive-disabled">

                    <!--toggle buttons start-->
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="toggle-btn" data-toggle="ui-nav" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- toggle buttons end -->

                    <!--search start-->
                    <form class="search-content hidden-xs" >
                        <button type="submit" name="search" class="btn srch-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                    </form>
                    <!--search end-->

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        <!--<li class="dropdown">-->
                        <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">-->
                        <!--        <i class="fa fa-bell-o"></i>-->
                        <!--        <span class="badge">5</span>-->
                        <!--    </a>-->
                        <!--    dropdown -->
                        <!--    <ul class="dropdown-menu dropdown-menu--responsive">-->
                        <!--        <div class="dropdown-header">Notifications (12)</div>-->
                        <!--        <ul class="Notification-list Notification-list--small niceScroll list-group">-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar Notification__avatar--danger pull-left" href="#">-->
                        <!--                        <i class="Notification__avatar-icon fa fa-bolt"></i>-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>-->
                        <!--                        <p class="Notification__highlight-time">1.2 hours ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar Notification__avatar--success pull-left" href="#">-->
                        <!--                        <i class="Notification__avatar-icon fa fa-user-plus"></i>-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>-->
                        <!--                        <p class="Notification__highlight-time">2 hours ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a0.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>-->
                        <!--                        <p class="Notification__highlight-time">1 day ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->

                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a0.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>-->
                        <!--                        <p class="Notification__highlight-time">1 hour ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar Notification__avatar--info pull-left" href="#">-->
                        <!--                        <i class="Notification__avatar-icon fa fa-database"></i>-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>Database Error</b></p>-->
                        <!--                        <p class="Notification__highlight-time">2 days ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar Notification__avatar--danger pull-left" href="#">-->
                        <!--                        <i class="Notification__avatar-icon fa fa-bolt"></i>-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>-->
                        <!--                        <p class="Notification__highlight-time">1.2 hours ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Notification list-group-item">-->
                        <!--                <button class="Notification__status Notification__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Notification__avatar Notification__avatar--success pull-left" href="#">-->
                        <!--                        <i class="Notification__avatar-icon fa fa-user-plus"></i>-->
                        <!--                    </div>-->
                        <!--                    <div class="Notification__highlight">-->
                        <!--                        <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>-->
                        <!--                        <p class="Notification__highlight-time">2 hours ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--        </ul>-->
                        <!--        <div class="dropdown-footer"><a href="#">View more</a></div>-->
                        <!--    </ul>-->
                        <!--    / dropdown -->
                        <!--</li>-->

                        <!--<li class="dropdown">-->
                        <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">-->
                        <!--        <i class="fa fa-envelope-o"></i>-->
                        <!--        <span class="badge">5</span>-->
                        <!--    </a>-->
                        <!--    dropdown -->
                        <!--    <ul class="dropdown-menu dropdown-menu--responsive">-->
                        <!--        <div class="dropdown-header">Messages (12)</div>-->
                        <!--        <ul class="Message-list niceScroll list-group">-->
                        <!--            <li class="Message list-group-item">-->
                        <!--                <button class="Message__status Message__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Message__avatar Message__avatar--danger pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a2.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Message__highlight">-->
                        <!--                        <span class="Message__highlight-name">Lubida Teresa</span>-->
                        <!--                        <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>-->
                        <!--                        <p class="Message__highlight-time">1 hour ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Message list-group-item">-->
                        <!--                <button class="Message__status Message__status--unread" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Message__avatar Message__avatar--danger pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a1.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Message__highlight">-->
                        <!--                        <span class="Message__highlight-name">Sara Souaidan</span>-->
                        <!--                        <p class="Message__highlight-excerpt">Hello there!</p>-->
                        <!--                        <p class="Message__highlight-time">1 hour ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Message list-group-item">-->
                        <!--                <button class="Message__status Message__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Message__avatar Message__avatar--danger pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a0.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Message__highlight">-->
                        <!--                        <span class="Message__highlight-name">Addy Osmany</span>-->
                        <!--                        <p class="Message__highlight-excerpt">Blah Blah Blah</p>-->
                        <!--                        <p class="Message__highlight-time">1 hour ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Message list-group-item">-->
                        <!--                <button class="Message__status Message__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Message__avatar Message__avatar--danger pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a0.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Message__highlight">-->
                        <!--                        <span class="Message__highlight-name">Picaso Patel</span>-->
                        <!--                        <p class="Message__highlight-excerpt">Bhai, are you there?</p>-->
                        <!--                        <p class="Message__highlight-time">2 years ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--            <li class="Message list-group-item">-->
                        <!--                <button class="Message__status Message__status--read" type="button" name="button"></button>-->
                        <!--                <a href="#">-->
                        <!--                    <div class="Message__avatar Message__avatar--danger pull-left" href="#">-->
                        <!--                        <img src="/public/admin/imgs/a0.jpg" alt="...">-->
                        <!--                    </div>-->
                        <!--                    <div class="Message__highlight">-->
                        <!--                        <span class="Message__highlight-name">Bengali Tiger</span>-->
                        <!--                        <p class="Message__highlight-excerpt">Mu ha ha</p>-->
                        <!--                        <p class="Message__highlight-time">10 years ago</p>-->
                        <!--                    </div>-->
                        <!--                </a>-->
                        <!--            </li>-->
                        <!--        </ul>-->
                        <!--        <div class="dropdown-footer"><a href="#">View more</a></div>-->
                        <!--    </ul>-->
                            
                        <!--</li>-->

                        <?php $u = Auth::user();?>
                        <li class="dropdown dropdown-usermenu">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-avatar"><img height="30px" width="30px" src="<?php echo e($u->user_photo); ?>" alt="<?php echo e($u->username); ?>"></div>
                                <span class="hidden-sm hidden-xs"><?php echo e($u->username); ?></span>
                                <span class="caret hidden-sm hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="<?php echo e(route('myprofile',$u->id)); ?>"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="<?php echo e(route('changepassword')); ?>"><i class="fa fa-user"></i>  Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-toggle="ui-aside-right" href="#"><i class="glyphicon glyphicon-option-vertical"></i></a>
                        </li>
                    </ul>
                    

                </div>

            </header>