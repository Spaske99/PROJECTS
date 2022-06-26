
    <main>
        <div class="container pt-5 pb-5 text-white shop">
            <form action="remove-item-from-cart.php" method="post">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item) { ?>
                        <tr>
                            <th>
                                <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item['id']); ?>">
                            </th>
                            <td><?php echo htmlspecialchars($item['title']); ?></td>
                            <td><?php echo htmlspecialchars($item['price']); ?></td>
                            <td>1</td>
                            <td><?php echo htmlspecialchars(1 * $item['price']); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger" type="submit">Remove</button>
                    <!-- <span><strong>TOTAL:</strong> 1200</span> -->
                </div>
            </form>
        </div>
    </main>                    