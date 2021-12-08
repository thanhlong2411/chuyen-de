<div class="menu-pri"style="background: #fff;" >
    <div class="container">
        <div class="panel-left" style="background: #0f9ed8;">
            <!--MOBILE-->
            <nav class="navbar navbar-default hidden-md hidden-lg" role="navigation">
                <div class="container-fluid" style="background-color: #C44027;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                        </button>
                        <a class="navbar-brand" style="color: #fff;" href="#">Danh mục sản phẩm</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse hidden-md hidden-lg">

                        <?php
                        $listcat = $this->Mcategory->category_menu(0);
                        $html_menu='<ul class="nav navbar-nav">';
                        foreach ($listcat as $menu) {
                            $parentid = $menu['id'];
                            $submenu = $this->Mcategory->category_menu($parentid);
                            $html_menu.='<li class="dropdown">';
                            $html_menu.="<a href='san-pham/".$menu['link']."' class='dropdown-toggle' data-toggle='dropdown'>";
                            $html_menu.=$menu['name'];
                            if(!empty($submenu)){
                                $html_menu.='<i class="fa fa-angle-right pull-right" aria-hidden="true">';
                                $html_menu.='</i>';
                            }
                            $html_menu.="</a>";
                            if(count($submenu))
                            {
                                $html_menu.='<ul class="dropdown-menu">';
                                foreach ($submenu as $menu1){
                                    $html_menu.='<li>';
                                    $html_menu.="<a href='san-pham/".$menu1['link']."'> ".$menu1['name']."</a>";
                                    $html_menu.="</li>";    
                                }
                                $html_menu.="</ul>";
                            }
                            $html_menu.="</li>";
                        }
                        $html_menu.="</ul>";
                        echo $html_menu;
                        ?>  
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!--MD LG-->
        </div>
        <div class="col-md-12 col-lg-12 panel-right hidden-xs text-center"style="background: #C44027;height: 65px;border-radius: 6px;">
            <ul class="menu-right" style="display: inline-block;">
                <li class="pull-left">  
                    <a href="">
                        <img src="public/images/homee.png" alt="">
                                <span> Trang chủ</span>
                    </a>
                </li>

                <li class="pull-left">
                    <a href="san-pham">
                    <img src="public/images/productt.png" alt="">
                        <span> Sản phẩm</span>
                    </a>
                </li>
                <!--?php
                $listcat = $this->Mcategory->category_menu(0);
                $html='';
                foreach ($listcat as $menu) {
                    $html= '<li class="pull-left">';
                    $html.="<a href='san-pham/".$menu['link']." '>";
                    $html.=$menu['name'];
                    $html.="</a>";
                    $html.='</li>';
                    echo $html;
                }
                ?-->
                <li class="pull-left">
                    <a href="san-pham/dien-thoai">
                        <img src="public/images/iphoneee.png" alt="">
                        <span> Điện thoại</span>
                    </a>

                </li>
                <li class="pull-left">
                    <a href="san-pham/laptop">
                    <img src="public/images/laptopp.png" alt="">
                        <span> Laptop</span>
                    </a> 
                </li>
                <li class="pull-left">
                    <a href="san-pham/pc-gaming">
                    <img src="public/images/pcgaming1.png" alt="">
                        <span> PC Gaming</span>
                    </a>
                </li>
                <li class="pull-left">
                    <a href="san-pham/ghe-gaming">
                        <img src="public/images/ghe.png" alt="">
                            <span>Ghế Gaming</span>
                    </a>
                </li>
                <li class="pull-left">
                    <a href="san-pham/phu-kien">
                        <img src="public/images/headphones.png" alt="">
                            <span>Phụ Kiện</span>
                    </a>
                </li>
                <li class="pull-left">
                    <a href="tin-tuc/1">
                        <img src="public/images/news.png" alt="">
                        <span>Tin tức</span>
                    </a>
                </li>
                <li class="pull-left">
                    <a href="gioi-thieu">
                        <img src="public/images/hd.png" alt="">
                            <span>Giới thiệu</span>
                    </a>
                </li>
                <li class="pull-left">
                    <a href="lien-he">
                        <img src="public/images/contact_us.png" alt="">
                                <span>Liên hệ</span> 
                    </a>
                </li>
             
                
               </ul>
        </div>
    </div>
</div>
