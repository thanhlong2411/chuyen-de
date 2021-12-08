<section id="menu-slider"style="padding-top: 20px;">
    <div class="slider">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 slider-main pull-left">
                <?php 
                $this->load->view('frontend/modules/slider');
                ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pull-left" style="height: 321px;">
             <img style="width: 100%; height: 110px; padding: 5px 5px; border-radius: 20px;" src="public/images/banner4.png">
             <img style="width: 100%; height: 110px; padding: 5px 5px; border-radius: 20px;" src="public/images/banner5.png">
             <img style="width: 100%; height: 110px; padding: 5px 5px; border-radius: 20px;" src="public/images/banner6.png">
            </div>
        </div>  
    </div>
<div class="container" style="margin-top: 20px;">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<img src="public/images/h1.jpg"style="width: 100%;" >
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<img src="public/images/h2.jpg"style="width: 100%;" >
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<img src="public/images/h3.jpg"style="width: 100%;" >
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<img src="public/images/h4.jpg"style="width: 100%;" >
    </div>
</div>
<div class="container" style="margin-top: -20px;">
    <asside id="widget_gearvn_brands" class="" style="display: block; margin-top: 20px">
            <div class="brands">
                <div class="brand-header">
                    <h3>Thương hiệu sản phẩm</h3>
                    <a href="/chuyende/san-pham">Xem tất cả</a>
                </div>          
                <div class="brand-body">
                    <div class="brand-items">
                        <div class="brch-row">
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo1.png" alt="Intel">
                                </a>    
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo2.jpg" alt="Nvidia">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo3.png" alt="AMDA">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo4.png" alt="Asus">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo5.png" alt="Gigabyte">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo6.png" alt="MSI">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo7.png" alt="Acer">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo8.png" alt="Logitech">
                                </a>
                            </div>
                        </div>
                        <div class="brch-row">
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo9.png" alt="Apple">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo10.png" alt="LG">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo11.png" alt="SAMSUNG">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo12.png" alt="Kington">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo13.png" alt="Corsair">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo14.png" alt="RAZER">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo16.png" alt="Hyperx">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="">
                                    <img src="public/images/logo15.png" alt="Lenovo">
                                </a>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
    </asside>    
</div>               
<div class="container" style="margin-top: 20px;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="public/images/sale1.png"style="width: 100%;" >
	</div>
</div>
<div class="container">
    <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid darkred;">
        <?php 
        $product_sale = $this->Mproduct->product_sale(10);
        foreach ($product_sale as $row) :?>
            <div class="item" style="margin: 0px;">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" >
                            <img class="img-p"src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>

                        <?php if($row['sale'] > 0) :?>
                            <div class="giam-percent">
                                <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if($row['sale'] > 0) :?>

                                <p class="old-price">
                                    <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo(number_format($row['price_sale'])); ?>₫</span>
                                </p>
                                <?php else: ?>
                                 <p class="old-price">
                                    <span class="price" style="color: #fff"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                            <?php endif;?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--div class="container" style="margin-top: 20px;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="public/images/sale2.png"style="width: 100%;" >
	</div>
</-div>
<div-- class="container" style="margin-bottom: 20px;">
    <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid darkred;">
        <?php 
        $product_sale = $this->Mproduct->product_selling(10);
        foreach ($product_sale as $row) :?>
            <div class="item" style="margin: 0px;">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" >
                            <img class="img-p"src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>
                        <?php if($row['sale'] > 0) :?>
                            <div class="giam-percent">
                                <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if($row['sale'] > 0) :?>

                                <p class="old-price">
                                    <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo(number_format($row['price_sale'])); ?>₫</span>
                                </p>
                                <?php else: ?>
                                 <p class="old-price">
                                    <span class="price" style="color: #fff"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                                <p class="special-price">
                                    <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                                </p>
                            <?php endif;?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div-->
</section>

</section>
<div id="content">
    <div class="container" style="margin-top: -20px;">
        <?php 
        $listCategory=$this->Mcategory->category_list(0,'10');
        foreach ($listCategory as $rowCategory):
            // row dien thoai
            $subCategory=$this->Mcategory->category_list($rowCategory['id'],'10');
            // Id dien thoai
            $catId=$this->Mcategory->category_id($rowCategory['link']);
            // list id dt ss, apple,...
            $listCatId=$this->Mcategory->category_listcat($catId);
            // list dt ss, apple
            $listProducts=$this->Mproduct->product_home_limit($listCatId,10);
            if((count($listProducts) >= 2)):?>
                <div class="list-product">
                    <div class="list-header-z">
                        <h2><a href="<?php echo  $rowCategory['link']?>"><?php echo  $rowCategory['name']?> nổi bật</a></h2>
                        <ul class="sub-category">
                            <?php foreach ($subCategory as $rowSubCategory) :?>
                                <li>
                                    <a href="san-pham/<?php echo $rowSubCategory['link'] ?>" ' 
                                        title="<?php echo $rowSubCategory['name'] ?>"
                                        class="ws-nw overflow ellipsis"
                                        >
                                        <?php echo $rowSubCategory['name'] ?>
                                    </a>
                                </li>   
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="product-container">
                        <?php foreach ($listProducts as $sp) :?>
                            <div class="p-box-5">
                                <div class="product-lt">
                                    <div class="lt-product-group-image">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                            <img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                        </a>

                                        <?php if($sp['sale'] > 0) :?>
                                            <div class="giam-percent">
                                                <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="lt-product-group-info">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
                                            <h3><?php echo $sp['name'] ?></h3>
                                        </a>
                                        <div class="price-box">
                                            <?php if($sp['sale'] > 0) :?>

                                                <p class="old-price">
                                                    <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                </p>
                                                <p class="special-price">
                                                    <span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                                </p>
                                                <?php else: ?>
                                                 <p class="old-price">
                                                    <span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                </p>
                                                <p class="special-price">
                                                    <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                </p>
                                            <?php endif;?>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</div>

<div class="home-blog">
    <div class="container">
        <div class="row-p">
            <div class="text-center">
                <h2 class="sectin-title title title-blue">Tin tức công nghệ</h2>
            </div>
        </div>
        <div class="blog-content">
            <?php  
            $listBaiViet=$this->Mcontent->content_list_home(6, 'all');
            foreach ($listBaiViet as $rowPost) :?>
                <div class="col-xs-12 col-12 col-sm-6 col-md-4 col-lg-4" style="margin: 5px;">
                    <div class="latest">
                        <a href="tin-tuc/<?php echo $rowPost['alias'] ?>">
                            <div class="tempvideo">
                                <img width="98%" src="public/images/posts/<?php echo $rowPost['img'] ?>">
                            </div>
                            <h3 style="color: #999;"><?php echo $rowPost['title'] ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="adv">
    <section id="service" style="margin: 20px;">
        <div class="container">
            <div class="row">
                <div id="service_home" class="clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_142e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Miễn phí giao hàng
                                </span>
                                <span class="small-text">
                                    Cho hóa đơn từ 100,000,000 đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_242e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Giao hàng trong ngày
                                </span>
                                <span class="small-text">
                                    Với tất cả đơn hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_342e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Sản phẩm an toàn
                                </span>
                                <span class="small-text">
                                    Cam kết chính hãng
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Begin-->
    <!--End-->
</div>

