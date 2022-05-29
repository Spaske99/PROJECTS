<main class="container mt-3 mb-5 ">

     <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
          <select class="form-select" name="sort-by">
            <option selected value="">None</option>
            <option value="price-asc">By price asc</option>
            <option value="price-desc">By price desc</option>
          </select>
          <input class="form-control" type="search" placeholder="Search" name="filter">
          <button type="submit" class="btn btn-primary">Search</button>
        </form> 

        <div class="row mt-5">
          <?php foreach ($products as $key => $v) { ?>
            <div class="card col-3 p-3">                   
                <img src="<?php echo $v['img'] ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $v['title']; ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($v['price']) . " rsd"; ?></p>
                    <a href="./single-product-page.php?page=<?php echo $v['id']; ?>" class="btn btn-primary">
                      Show Product
                    </a>       
                </div>             
            </div>
          <?php } ?>
        </div>
      </div> 
</main>
