<div class="update-form" style="display:flex; width:100%;justify-content:center; flex-direction:column; gap:1.5rem">
    <label class="container-title" id="update-title">Update Product</label>
    <div id="update-products">
        <form class="add-products-form" method="POST">
            <div class="input-container">
                <label class="input-labels">Name</label>
                <?php echo $productName;?>
                <input type="text" placeholder="enter product name" name="update-name" class="form-inputs"
                    id="update-name" value="">
                <span class="required-name"></span>
            </div>
            <div class="category-select">
                <div class="two-input-container">

                    <label class="input-labels">Category</label>
                    <select name="update-category">
                        <option value="casual">Casual</option>
                        <option value="sports">Sports</option>
                        <option value="formal">Formal</option>

                    </select>
                </div>
                <div class="two-input-container">
                    <label class="input-labels">Size</label>
                    <input type="number" placeholder="enter size" name="update-size" class="form-inputs"
                        id="update-size">

                </div>
            </div>
            <div class="category-select">

                <div class="two-input-container">

                    <label class="input-labels">Featured</label>
                    <select name="update-featured">
                        <option value=1>yes</option>
                        <option value=0>no</option>

                    </select>
                </div>
                <div class="two-input-container">
                    <label class="input-labels">Price</label>
                    <input type="number" placeholder="enter price" name="update-price" class="form-inputs"
                        id="update-price">

                </div>
            </div>
            <div class="category-select">

                <div class="two-input-container">

                    <label class="input-labels">Quantity</label>
                    <input type="number" placeholder="enter quantity" name="update-quantity" class="form-inputs"
                        id="update-quantity">

                </div>
                <div class="two-input-container">
                    <label class="input-labels">Photo Url</label>
                    <input type="text" placeholder="enter url" name="update-photo" class="form-inputs" id="update-photo"
                        onblur="getPhotoUrl()">
                </div>
            </div>
            <div id="updateimage-div">
                <img src="" id="new-photo">
            </div>

            <button id="btn-submit" onclick="updateProduct()">Update Product</button>
            <button id="cancel-button" onclick="cancelUpdate()">Cancel</button>

        </form>
    </div>
</div>
</div>
