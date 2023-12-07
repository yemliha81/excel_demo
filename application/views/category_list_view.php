<?php include('includes/header.php');?>
<div style="padding-top:20px">
    <div class="fullwidth-template">
        <div class="stelina-tabs  default">
            <div class="container">
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="stelina-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <?php foreach($categories as $category){ ?>
                                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="<?php echo $_ENV['BASE_URL'].'kategori-detay/'.$category['id'];?>">
                                                    <img src="<?php echo $_ENV['BASE_URL'];?>admin/files/category/img/400/<?php echo $category['category_image'];?>" alt="img">
                                                </a>
                                                <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="<?php echo $_ENV['BASE_URL'].'kategori-detay/'.$category['id'];?>"><?php echo $category['category_name_en'];?></a>
                                            </h5>
                                           
                                        </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php include('includes/footer.php');?>
