<?php

use frontend\models\Product;



/* @var $this yii\web\View */

$this->title = 'DUKA';

$products = Product::find()->joinWith('productimages')->all();

//var_dump($products); exit();
?>



<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shipping cart
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT --> 
                    <?php foreach ($products as $product) {?>
                    <div class="row">
                   
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                
                                <img src="<?=yii::$app->request->baseUrl.'/'.$product->productimages[0]->imagePath?>" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?=$product->productName  ?></strong></h4>
                            <h4>
                                <small><?=$product->productDesc  ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?=$product->basePrice  ?><span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                 <select id="quantity_<?= $product->productId?>" class="form-control form-control-sm quantity" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select> 
                  
                   </div>
                            </div>
                            <!-- <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                    <hr><?php }?>
                    <!-- END PRODUCT -->
                 
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: Kes <b>20,200</b>
                    </div>
                </div>
            </div>
        </div>
</div>




