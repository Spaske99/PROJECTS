<main class="container border-dark border-5 py-5 my-3">
    <?php if($is_errors) { ?>
        <div class="container bg-success rounded shadow text-center">
            <div class="py-5">
                <h2 class="display-5 fw-bold text-white">You ordered successufuly.</h2>
                <p class=" fs-4 text-white-50 text-white"><?php echo htmlspecialchars("Thank you $name $last_name. You ordered $title. Enjoy."); ?></p>
                <a href="all-products-page.php" class="btn btn-dark btn-lg">LOOK MORE</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="container bg-danger rounded shadow text-center">
            <div class="py-5">
                <h2 class="display-5 fw-bold text-white">You have error.</h2>
                <?php foreach($systemErrors as $error) { ?>
                <p class="fs-4 text-white-50 text-white">* <?php echo htmlspecialchars($error); ?> </p>
                <?php } ?>
                <a href="javascript:history.go(-1)" class="btn btn-dark btn-lg">GO BACK</a>
            </div>
    <?php } ?>
</main>