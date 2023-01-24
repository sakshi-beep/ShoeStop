<?php
include '../../includes/dbconfig.php';

$allProducts = mysqli_query($connect, "SELECT * from Shoes");


foreach($allProducts as $values){   
                    echo '<div class="product-card">
                    <div class="image-div">
                    <img src='.$values['s_photo'].' class="image" alt="image of shoes"/>
                    <a class="edit" onclick="showUpForm(\''. $values['s_name'] .'\',\''. $values['s_photo'] .'\', \''. $values['s_size'] .'\', \''. $values['s_category'] .'\', \''. $values['s_price'] .'\', \''. $values['s_quantity'] .'\', \''. $values['isFeatured'] .'\', \''. $values['in_stock'] .'\')">
                    <img src="../../images/edit.svg" alt="edit-button-image"/>
                    </a>
                    </div>
                    <div class="product-details">
                    <div class="product-desc" id="product-name"><p class="card-values">Product:</p><p class="values">'.$values['s_name'].'</p></div>
                    <div class="product-desc" id="product-size"><p class="card-values">Size:</p><p class="values">'.$values['s_size'].'</p></div>
                    <div class="product-desc" id="product-category"><p class="card-values">Category:</p><p class="values">'.$values['s_category'].'</p></div>
                    <div class="product-desc" id="product-price"><p class="card-values">Price:</p><p class="values">'.$values['s_price'].'</p></div>
                    </div>
                    <div class="card-buttons">
                    <a class="product-button" id="delete-button" onclick="deleteProduct('.$values['s_id'].')" href="#">Delete</a>
                    </div>
                    </div>';
                }
                ?>