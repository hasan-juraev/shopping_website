<?php

    # Product item showing function
    function component($product_name, $product_price, $product_img, $product_id){
        $items = "
        
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" id=\"item\">
            <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow \" id=\"card\">
                    <div >
                        <img  src=\"$product_img\" alt=\"Image\" class=\"img-fluid card-top-img\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$product_name</h5>
                        <h6>
                        <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=far fa-star></i>
                        </h6>
                        <p class=\"card-text\">
                            Some text quick
                        </p>
                        <h5>
                            <span class=\"price\"> $$product_price</span>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\" > Add to cart</button>
                        <input type=\"hidden\" name=\"product_id\" value=\"$product_id\"> 

                    </div>
                </div>

            </form>
        </div>

        ";
        echo $items;       
    }

   
    function cartItems($product_name, $product_price, $product_img, $product_id){

        $items = "
        
    
        <form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\" >
                
                <div class=\"row bg-white\">
                    
                
                    <div class=\"col-md-3 pl-0\">
                        <img src=$product_img alt=\"Image\" class=\"img-fluid\">
                        
                    </div>

                    <div class=\"col-md-6\">

                        <h5  class=\"pt-2\">$product_name</h5>
                        <small class=\"text-secondary\"> Seller: Hasan</small>
                        <h5 class=\"pt-2\">$$product_price</h5>
                        <button type=\"submit\" class=\"btn btn-warning\">Save in cart</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                    </div>

                    <div class=\"col-md-3\">

                    
                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                    <button type=\"submit\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                </div>

                </div>
            </div>

        </form>
        

        ";
        echo $items;       
    }

    
    # Product item showing function
    function components($product_name, $product_price, $product_img, $product_id){
        $items = "
        
        <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" id=\"item\">
            <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow \" id=\"card\">
                    <div >
                        <img  src=\"$product_img\" alt=\"Image\" class=\"img-fluid card-top-img\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$product_name</h5>
                        <h6>
                        <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=fas fa-star></i>
                            <i class=far fa-star></i>
                        </h6>
                        <p class=\"card-text\">
                            Some text quick
                        </p>
                        <h5>
                            <span class=\"price\"> $$product_price</span>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\" > Add to cart</button>
                        <input type=\"hidden\" name=\"product_id\" value=\"$product_id\"> 

                    </div>
                </div>

            </form>
        </div>

        ";
        echo $items;       
    }

   

    function owlCarouselMousewheel($product_name, $product_price, $product_img, $product_id){
        $items = "
        <form action=\"index.php\" method=\"post\">
            
            <div class=\"card shadow py-2 text-muted mr-2\" id=\"card\" style=\"width: 170px;\">
                <div class=\"product\" >
                    <div >
                        <a href='#'> <img style=\"width: 200px;\"  src=\"$product_img\" alt=\"Image\" class=\"img-fluid card-top-img\"></a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <h6 class=\"card-title\">$product_name</h6>
                            <div class=\"rating text-warning \">
                                <span><i class=\"fas fa-star\"></i></span>
                                <span><i class=\"fas fa-star\"></i></span>
                                <span><i class=\"fas fa-star\"></i></span>
                                <span><i class=\"fas fa-star\"></i></span>
                                <span><i class=\"fas fa-star\"></i></span>
                            </div>

                            <div class=\"price py-2\">
                            <span>$$product_price</span>
                            </div>
                            <button type=\"submit\" class=\"btn btn-warning font-size-12\"  name=\"add\"> Add to cart</button>
                            <input type=\"hidden\" name=\"product_id\" value=\"$product_id\"> 
                        </div>
                    </div>
                </div>                
            </div>

        </form>

        ";
        echo $items;
    }

?>
