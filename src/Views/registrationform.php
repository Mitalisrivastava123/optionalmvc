<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 h-custom" style="background-color:#f2f2f2;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2" action="../Controllers/registercontroller.php" method="POST">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control"  name="name"/>
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example1q" class="form-control" name="email"/>
                                    <label class="form-label" for="form3Example1q" >Email</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form3Example1q" class="form-control" name="phone"/>
                                    <label class="form-label" for="form3Example1q">Phone Number</label>
                                </div>
 
                                <label class="form-label" for="form3Example1q">Select Job Type</label>
                                <select class="form-select" aria-label="Default select example" name="job">
                           
                                    <option value="1">Banking Professional</option>
                                    <option value="2">Human Resource</option>
                                    <option value="3">Software Engineer</option>
                                </select>
                                <br>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example1q" class="form-control" name="password" />
                                    <label class="form-label" for="form3Example1q" >Create Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example1q" class="form-control"  />
                                    <label class="form-label" for="form3Example1q">Repeat Password</label>
                                </div>


                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                                <a href="../Views/loginform.php">
                                    <button type="submit" name="login" class="btn btn-success">Login Here</button>
                                </a>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>