<section id="header"">
	<nav class="navbar" style="z-index: 9999;background: #C44027;">
		<div class="container">
			<div class="col-md-12 col-lg-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="icon-cart-mobile hidden-md hidden-lg">
						<a href="gio-hang">
							<i class="fa fa-shopping-cart" aria-hidden="true" style="color: #0f9ed8; font-size: 17px;"></i>
							<span>(<?php  
                               if($this->session->userdata('cart')){
                                $val = $this->session->userdata('cart');
                                echo count($val);
                            }else{
                                echo 0;
                            }
                            ?>)</span>
                        </a>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                	<ul class="nav navbar navbar-nav pull-left" id="nav2">
                		<h5 style="color: #fff;padding-top: 1px;" >XÂY DỰNG CẤU HÌNH PC GAMING - WORKSTATION CHUYÊN NGHIỆP</h5>
                	</ul>
					
                	<ul class="nav navbar navbar-nav pull-right" id="nav2">
                		<?php 
                		if($this->session->userdata('sessionKhachHang')){
                			$name=$this->session->userdata('sessionKhachHang_name');
                			echo "<li><a href='#'>Xin chào: $name</a></li>";
                			echo "<li><a href='dang-xuat'>Thoát</a></li>";
                		}else{
                			echo "<li><a href='dang-ky'>Đăng ký</a></li>";
                			echo "<li><a href='dang-nhap'>Đăng nhập</a></li>";
                		}
                		?>
                	</ul>
                </div>
            </div>
        </div>
    </nav>
</section>
<style>
	
	
	.list-menu li a{
		color: #685e52;
	}
	.search input, .search button{
		border-radius: 20px;
		margin-right: -40px;
		border: 1px solid brown;
	}
	.main-ul{
        color: #000;
    }
	.logo a img {
    padding: 12px 0;
    max-width: 96%;
    }
}
</style>