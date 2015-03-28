<!-- Main Container Starts -->
<div id="main-container" class="container">
    <div class="row">

    <?=$this->template("coreshop/helper/left.php")?>
    <!-- Primary Content Starts -->
        <div class="col-md-9">
        <!-- Breadcrumb Starts -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="category-list.html">Category</a></li>
                <li class="active">Product</li>
            </ol>
        <!-- Breadcrumb Ends -->
        <!-- Product Info Starts -->
            <div class="row product-info">
            <!-- Left Starts -->
                
                <div class="col-sm-5 images-block">
                    <?php if($this->product->getImages() > 0) { ?>
                    <p>
                        <img src="<?=$this->product->getImage()->getThumbnail("coreshop_productDetail")?>?>" alt="<?=$this->product->getName()?>" class="img-responsive thumbnail" />
                    </p>
                    <ul class="list-unstyled list-inline">
                        <?php foreach($this->product->getImages() as $image) { ?>
                        <li>
                            <img src="<?=$image->getThumbnail("coreshop_productDetailThumbnail")?>?>" alt="<?=$this->product->getName()?>" class="img-responsive thumbnail" />
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
            <!-- Left Ends -->
            <!-- Right Starts -->
                <div class="col-sm-7 product-details">
                <!-- Product Name Starts -->
                    <h2><?=$this->product->getName()?></h2>
                <!-- Product Name Ends -->
                    <hr />
                <!-- Manufacturer Starts -->
                    <ul class="list-unstyled manufacturer">
                        <li>
                            <span>Brand:</span> Indian spices
                        </li>
                        <li><span>Reward Points:</span> 300</li>
                        <li>
                            <span>Availability:</span> <strong class="label label-success">In Stock</strong>
                        </li>
                    </ul>
                <!-- Manufacturer Ends -->
                    <hr />
                <!-- Price Starts -->
                    <div class="price">
                        <span class="price-head"><?=$this->translate("Price")?> :</span>
                        <span class="price-new"><?=\CoreShop\Tool::formatPrice($this->product->getPrice());?></span>
                    </div>
                <!-- Price Ends -->
                    <hr />
                <!-- Available Options Starts -->
                    <div class="options">
                        <div class="form-group">
                            <label class="control-label text-uppercase" for="input-quantity"><?=$this->translate("Qty")?>:</label>
                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                <?=$this->translate("Add to cart")?>
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                <!-- Available Options Ends -->
                    <hr />
                </div>
            <!-- Right Ends -->
            </div>
        <!-- product Info Ends -->
        <!-- Product Description Starts -->
            <div class="product-info-box">
                <h4 class="heading"><?=$this->translate("Description")?></h4>
                <div class="content panel-smart">
                    <?=$this->product->getDescription()?>
                </div>
            </div>
        <!-- Product Description Ends -->
        
        <?=\CoreShop\Plugin::hook("product-detail-bottom", array("product" => $this->product))?>
        
        
        </div>
    <!-- Primary Content Ends -->
    </div>
</div>
<!-- Main Container Ends -->