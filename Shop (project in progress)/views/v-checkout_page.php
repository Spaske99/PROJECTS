<div class="bg-image" style="background-image: url('./public/theme/img/wallpapers/wallpaper.jpg'); background-repeat: no-repeat; background-attachment: fixed; ">   
    <main class="bg-light py-5  border-dark border-5 shadow">
        <div class="container chekaut">
            <div class="row chekaut">
              <div class="card shadow col-md-6 p-3 bg-dark text-light">
                  <form action="order_message_controler.php" method="get">
                      <div class="mb-3">
                          <label for="f-name" class="form-label">Name: </label>
                          <input name="f_name" type="text" class="form-control" id="f-name" placeholder="Tell me your first name." required />
                      </div>
                      <div class="mb-3">
                          <label for="l-name" class="form-label">Last Name: </label>
                          <input name="l_name" type="text" class="form-control" id="l-name" placeholder="and your last name." required />
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Email: </label>
                          <input name="email" type="email" class="form-control" id="email" placeholder="also your email" required />
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="city" class="form-label">City: </label>
                                  <input name="city" type="text" class="form-control" id="city" placeholder="Where are you from?" required />
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="phone" class="form-label">Phone: </label>
                                  <input name="phone" type="number" class="form-control" id="phone" placeholder="Your phone number?" required />
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="street" class="form-label">Street: </label>
                                  <input name="street_and_num" type="text" class="form-control" id="street" placeholder="Street and number goes here." required />
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="mb-3">
                                  <label for="zip" class="form-label">zip: </label>
                                  <input name="zip" type="number" class="form-control" id="zip" placeholder="Your zip number?" required />
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <label for="comment" class="form-label">Comment: </label>
                          <textarea name="comment" class="form-control" id="comment" rows="3" required></textarea>
                      </div>
                      <div class="form-check">
                          <input name="terms" class="form-check-input" type="checkbox" value="check" id="terms" checked />
                          <label class="form-check-label" for="terms">
                            Agree with our Terms and Privacy
                          </label>
                      </div>
                      <input type="hidden" name="title" value=<?php echo htmlspecialchars($id); ?>>
                      <button class="btn btn-outline-light w-100 mt-3" type="submit">ORDER</button>
                  </form>
              </div>
              <div class="col-md-4 p-3">
                <div class="card mx-auto mb-3 ml-5" style="max-width: 540px;">           
                    <img src=<?php echo htmlspecialchars($img); ?> class="img-fluid rounded-start" alt=<?php echo htmlspecialchars($alt); ?> />
                    <div class="card-body bg-dark">
                        <h2 class="card-title text-center text-light"><?php echo htmlspecialchars($title); ?></h2>
                        <p class="card-text">
                            <div class="d-flex justify-content-between">
                                <h5 class="text-light">Price:</h5>
                                <h5 class="text-danger"><?php echo htmlspecialchars($price); ?></h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="text-light">Quantity:</h5>
                                <h5 class="text-danger"><?php echo htmlspecialchars($quantity); ?></h5>
                            </div>
                            <!-- <div class="d-flex justify-content-between">
                                <h5 class="text-light">Price with quantity:</h5>
                                <h5 class="text-danger"><?php //echo htmlspecialchars($price) * htmlspecialchars($quantity); ?></h5>
                            </div> -->
                            <hr class="mb-3 text-light">
                            <div class="d-flex justify-content-between">
                                <h2 class="text-light">TOTAL:</h2>
                                <h2 class="text-danger"><?php echo htmlspecialchars($total_price); ?></h2>
                            </div>
                        </p>
                    </div>            
                </div>
              </div>
            </div>    
        </div>   
    </main>
</div>