  <?php

    // require('../model/Product.php');
    require __DIR__ . '/../model/Product.php';
    // require('../model/Customer.php');



    class productController
    {
        public function add_new_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image)
        {
            $check = (new ProductModel())->add_new_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image);
            return  $check = $check ?: false;
        }


        public function view_all_products()
        {
            // declare an empty array for database records
            $data = array();

            $obj = new ProductModel();

            $all_prod = $obj->view_all_products();

            if ($all_prod) {
                while ($one = $obj->db_fetch()) {
                    $data[] = $one;
                }
            }

            return $data;
        }

        function getOneProduct($id)
        {
            // declare an empty array for database records
            $data = array();

            $obj = new ProductModel();

            $all_prod = $obj->get_one_product($id);

            if ($all_prod) {
                while ($one = $obj->db_fetch()) {
                    $data[] = $one;
                }
            }

            return $data;
        }
       




        public function displaySpecialOffers()
        {

            $all = $this->view_all_products();

            if ($all) {
                foreach ($all as $value) {

                    $id = $value['product_id'];
                    $title = $value['product_title'];
                    $price = $value['product_price'];
                    $img = $value['product_image'];
                    $desc = $value['product_desc'];



                    echo <<<"_SPECIAL"
                          <div class=" con-w3l">
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
										<img src="$img ?? images/of16.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php?product_id=$id">$title</a></h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">GH¢ $price.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
                    
										   <button type="button" class="btn btn-danger my-cart-btn my-cart-b" value="$id" onClick="addToCart(this.value,1)">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
						 </div>
_SPECIAL;
                }
            }
        }
        //     if ($all_products) {
        //         foreach ($all_products as $value) {
        //             $id = $value['product_id'];
        //             $title = $value['product_title'];
        //             $price = $value['product_price'];
        //             $desc = $value['product_desc'];


        //             $_SESSION['id']=$id;
        //             $uid=$_SESSION['id'];

        //             echo "<tr>";
        //             echo "<td>$title</td>";
        //             echo "<td>$price</td>";
        //             echo "<td>$desc</td>";

        //             echo "<td><a href='#../actions/add_brand.php?delete_product_id=$uid' class= 'btn btn-outline-danger delete_brand' >Delete</a>
        // | <a href='update_product.php?upid=$uid' id='addBrandModal' class= 'btn btn-outline-success update_brand' >Update</a>
        // </td>";

        //             echo "</tr>";


        //         }
        //     }






    }
    ?>