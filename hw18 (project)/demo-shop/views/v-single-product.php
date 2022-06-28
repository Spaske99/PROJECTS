<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5 mb-4">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="...">
            </div>        
            <div class="col-6 mt-2">
                <h1 class="card-title mb-4 mt-3"><?php echo htmlspecialchars($product['title']); ?></h1>
                <p><strong>Price: </strong><?php echo htmlspecialchars($product['price']); ?> rsd</p>
                <p><strong>Category:</strong> <?php echo htmlspecialchars($product['category']); ?></p>
                <p><strong>About game:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity: </label>
                    <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Quantity" step="1" value="1" min="1" required />
                    <input type="hidden" name="id" value=<?php echo htmlspecialchars($productId); ?> />
                    <button type="submit" class="btn btn-success col-6 mt-2">BUY</button>
                </div>
                <div class="col-6">
                    <a class="btn btn-outline-secondary " href="./single-product-page.php?page=<?php echo htmlspecialchars($prev['id']); ?>">PREV</a>
                    <a class="btn btn-outline-secondary " href="./single-product-page.php?page=<?php echo htmlspecialchars($next['id']); ?>">NEXT</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-4'>
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="100" height="120">
                </div>
                <div class='col-5 mt-4'>
                    <span><?php echo htmlspecialchars($singleRelated['title']) . "<br>"; ?></span>
                    <a class="btn btn-success" href="./single-product-page.php?page=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>