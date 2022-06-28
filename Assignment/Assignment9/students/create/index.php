<?php

include_once "../../includes/utilis/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="./includes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>

    <?php

    include_once "../../includes/Global/header.php";
    ?>
    <style>
        .form-group {
            margin-top: 10px;
        }

        label {}

        .container-form {
            max-width: 960px;
        }
    </style>

    <div class="container container-form">
        <main>
            <div class="py-5 text-center">
                <img class="d-block   mx-auto mb-4" src="https://www.freepnglogos.com/uploads/student-png/student-png-sammilani-mahavidyalaya-undergraduate-and-24.png" alt="" width="72" height="57">
                <h2>Add students </h2>
                <p class="lead">Enter the Data of students to add them .</p>
            </div>
            <?php
            if ($_GET['sucess'] == "sucess") {
                echo " <div class='alert alert-success' role='alert'>
                <span>x</span>
                Sucess!
            </div>";
            } else {
                echo "   <div class='alert alert-danger' role='alert'>
                <span>x</span>
                Error!
            </div>";
            }
            ?>




            <div class="row  ">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Recent added</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php
                        $sql = "SELECT * FROM students";

                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            while ($students = $result->fetch_assoc()) {

                        ?>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0"><?= $students['name']; ?></h6>
                                        <small class="text-muted"><?= $students['email']; ?></small>
                                    </div>
                                    <span class="text-muted"><?= $students['nationality']; ?></span>
                                </li>
                        <?php

                            }
                        } else {
                        }
                        ?>


                    </ul>


                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Students Form</h4>
                    <form class="needs-validation" action="../save/" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>

                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@padandas.com" required>

                            </div>

                            <div class="col-sm-6">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>

                                </div>
                            </div>

                            <div class="col-3">
                                <label for="date" class="form-label">Date </label>
                                <input type="date" class="form-control" id="date" name="date">

                            </div>


                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select name="nation" class="form-select" id="country">
                                    <option value="NP">Nepal</option>
                                    <option value="IN">India</option>
                                    <option value="CH">China</option>
                                    <option value="UK">United Kingdom</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label for="weight" class="form-label">Weight </label>
                                <input type="number" class="form-control" id="weight" name="weight">
                            </div>
                            <div class="col-2">
                                <label for="color" class="form-label">Color</label>
                                <input type="color" class="form-control h-50 d-inline-block" id="color" name="color" required>

                            </div>





                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender </label>


                                <div class="form-check">
                                    <label class="form-check-label" for="male">Male</label>
                                    <input id="male" name="gender" type="radio" value="male" class="form-check-input" checked required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="female">Female</label>
                                    <input class="form-check-input" id="female" value="female" name="gender" type="radio" class="form-check-input" required>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="other">Other</label>
                                    <input class="form-check-input" id="other" value="female" name="gender" type="radio" value="other" class="form-check-input" required>
                                </div>
                            </div>
                            <div class="col-md-6  ">
                                <label for="hobby" class="form-label">Hobbies </label>
                                <div class="form-check">
                                    <label class="form-check-label" for="travelling">Travelling</label>
                                    <input class="form-check-input" type="checkbox" class="form-check-input" id="travelling" value="travelling" name="hobby[]">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="reading" value="reading" name="hobby[]">
                                    <label class="form-check-label" for="reading">Reading</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="singing" value="singing" name="hobby[]">
                                    <label class="form-check-label" class="form-check-label" for="singing">Singing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="coding" value="coding" name="hobby[]">
                                    <label class="form-check-label" for="coding">Coding</label>
                                </div>




                            </div>
                            <div class="col-md-5  ">

                                <label class="form-check-label" id="profile">Profile</label>
                                <input type="file" name="profile" id="profile" class="form-control" accept="image/png>



                            </div>
                            <hr class="my-4">



                        </div>










                        <button class="w-25 btn btn-primary btn-lg" type="submit" name="submit">Submit</button>
                        <button class="w-25 btn btn-danger btn-lg" type="submit" name="cancel">Cancel</button>


                    </form>
                </div>
            </div>
        </main>


        <!-- <form action="../save/" method="POST" enctype="multipart/form-data"> -->
        <!-- <form action=""></form>

    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" id="name" placeholder="name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" placeholder="email" name="email" value="email@email.com">
    </div>
    <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" id="password" placeholder="password" name="password" value="password">
    </div>
    <div class="form-group">
        <label for="date">Date :</label>
        <input type="date" id="date" placeholder="date" value="date" name="date">
    </div>
    <div class="form-group">
        <label for="color">Color :</label>
        <input type="color" id="color" name="color">
    </div>
    <div class="form-group">
        <label for="weight">Weight kg :</label>
        <input type="number" id="weight" name="weight">
    </div>
    <div class="form-group">
        <label for="gender">Gender :</label>
        <div>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="other">other</label>
            <input type="radio" id="other" name="gender" value="other">
        </div>

    </div>
    <div class="form-group">
        <label>Hobbies :</label>
        <input type="checkbox" id="travelling" value="travelling" name="hobby[]"><label for="travelling">Travelling</label>
        <input type="checkbox" id="reading" value="reading" name="hobby[]"><label for="reading">Reading</label>
        <input type="checkbox" id="singing" value="singing" name="hobby[]"><label for="singing">Singing</label>
        <input type="checkbox" id="coding" value="coding" name="hobby[]"><label for="coding">Coding</label>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality :</label>
        <select name="nation" id="">
            <option value="NP">Nepal</option>
            <option value="IN">India</option>
            <option value="CH">China</option>
            <option value="UK">United Kingdom</option>
        </select>
    </div>

    <div class="form-group">
        <label id="profile">Profile</label>
        <input type="file" name="profile" id="profile" accept=".png">
    </div>
    <div class="form-group">

        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </div>
    </form> -->


    </div>
    <footer>
        <?php
        include_once "../../includes/Global/footer.php";
        ?>
    </footer>


</body>

</html>