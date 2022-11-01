<?php
include '../../includes/dbconfig.php';

$allProducts = mysqli_query($connect, "SELECT * from Shoes");

foreach($allProducts as $values){
                    echo '<div class="product-card">
                    <div class="image-div"><img src='.$values['s-photo'].' class="image"></div>
                    <div class="product-details">
                    <div class="product-desc" id="product-name"><p class="card-values">Product:</p><p class="values">'.$values['s-name'].'</p></div>
                    <div class="product-desc" id="product-size"><p class="card-values">Size:</p><p class="values">'.$values['s-size'].'</p></div>
                    <div class="product-desc" id="product-category"><p class="card-values">Category:</p><p class="values">'.$values['s-category'].'</p></div>
                    <div class="product-desc" id="product-price"><p class="card-values">Price:</p><p class="values">'.$values['s-price'].'</p></div>
                    </div>
                    <div class="card-buttons">
                    <a class="product-button" id="update-button" onclick="deleteFunction('.$values['s-id'].')">Update</a>
                    <a class="product-button" id="delete-button" href="#">Delete</a>
                    </div>
                    </div>';
                }
                ?>