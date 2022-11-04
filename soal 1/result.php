<!DOCTYPE html>
    <head>
        <title>Soal Genap 1</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body style="background-color: black;">
    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    ?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="text-center">Result</h3>
              <br>
              <form method="post" action="result.php">
                <div class="row">
                  <div class="col-md-11 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="firstName">First Name</label>
                      <input class="form-control" type="text" id="first" value="<?php echo "$firstname" ?>" class="form-control form-control-lg" placeholder="Naditya" disabled/>
                    </div>
                </div>
                    <div class="row">
                      <div class="col-md-11 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Last Name</label>
                          <input class="form-control" type="text" id="lastName" value="<?php echo "$lastname" ?>" class="form-control form-control-lg" disabled />
                        </div>
                    <br> 
                    <div class="row">
                    <div class="form-outline">
                        <label class="form-label" for="emailAddress">Email</label>
                        <input type="email" id="emailAddress" value="<?php echo "$email" ?>" class="form-control form-control-lg" disabled/>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                  </div>
                  <div id="category" class="col-md-6 mb-4">
                    <h4 class="mb-2 pb-1">Selected Category : <?php echo "$category" ?> </h4>
                    
                  </div>
                
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                  </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                      <input type="tel" id="phoneNumber" value="<?php echo "$phone" ?>" class="form-control form-control-lg" disabled>
                    </div>
                    
                    <div class="row form-group mb-4">
                        <label for="date" class="form-label">Requsted Date</label>
                        <input id="date" type="date" value="<?php echo "$date" ?>" class="form-control form-control-lg" disabled>
                    </div>
                    <div class="row form-group mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="Message" placeholder="Message:" rows="3" disabled><?php echo "$message" ?></textarea>
                    </div>
                    </div>
                    </div>
                  </div>

                </div>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      </body>
  </html>