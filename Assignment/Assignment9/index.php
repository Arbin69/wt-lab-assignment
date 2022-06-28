<?php
require_once "./includes/utilis/dbconnect.php";

$sql = "SELECT * FROM students";

$result = $conn->query($sql);
// echo $result;

// dd($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./includes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        .profileimage {
            height: 35px;
            width: 35px;
            border-radius: 50%;
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <?php

    include_once "includes/Global/header.php";
    ?>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Features</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                </div>
                <div>
                    <h2>Add Students</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="./students/create/" class="btn btn-primary">
                        Add Students
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </div>
                <div>
                    <h2>Edit Students</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Edit
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <div>
                    <h2>Update Students</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Update
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="pb-2 border-bottom">All Students</h2>
        <div class="bd-example-snippet bd-code-snippet">
            <div class="bd-example">
                <?php
                if (isset($_GET['sucess'])  == "sucess") {
                    echo " <div class='alert alert-success' role='alert'>
                <span>x</span>
                Sucess!
            </div>";
                } elseif (isset($_GET['sucess'])) {
                    echo "   <div class='alert alert-danger' role='alert'>
                <span>x</span>
                Error!
            </div>";
                } else {
                    echo "";
                }
                ?>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Profile</th>
                            <th scope="col">email</th>
                            <th scope="col">weight</th>
                            <th scope="col">nation</th>
                            <th scope="col">color</th>
                            <th scope="col">gender</th>
                            <th scope="col">Dob</th>
                            <th scope="col">hobbies</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        if ($result->num_rows > 0) {
                            while ($students = $result->fetch_assoc()) {

                        ?>
                                <tr>
                                    <th scope="row"><?= $students['id']; ?></th>
                                    <td><?= $students['name']; ?></td>
                                    <td> <img class="profileimage" src="./students/stdImage/<?= $students['profile']; ?>" alt="">
                                    </td>
                                    <td><?= $students['email']; ?></td>
                                    <td><?= $students['weight']; ?></td>
                                    <td><?= $students['nationality']; ?></td>
                                    <td><?= $students['favorite_color']; ?></td>
                                    <td><?= $students['gender']; ?></td>
                                    <td><?= $students['dob']; ?></td>
                                    <td><?= $students['hobbies']; ?></td>
                                    <td>
                                        <a href="#" data-id="<?= $students['id']; ?>" class="edit">edit</a>
                                        <a href="#" data-id="<?= $students['id']; ?>" class="delete">delete</a>
                                    </td>
                                </tr>
                        <?php

                            }
                        } else {
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>




    </div>
    <script type="text/javascript">
        const deleteEl = document.querySelectorAll(".delete");
        for (el of deleteEl) {
            el.addEventListener("click", deleteStudent);
        }
        const updateEl = document.querySelectorAll(".edit");
        for (el of updateEl) {
            el.addEventListener("click", editStudent);
        }

        function editStudent(event) {
            const id = event.target.getAttribute('data-id');
            let formEl = document.createElement("form");
            formEl.setAttribute("method", "POST");
            formEl.setAttribute("action", "./students/edit/");
            let idEl = document.createElement("input");
            idEl.setAttribute("type", "hidden");
            idEl.setAttribute("name", "id");
            idEl.setAttribute("value", id);
            formEl.appendChild(idEl);
            document.body.appendChild(formEl);
            formEl.submit();
        }


        function deleteStudent(event) {
            const id = event.target.getAttribute('data-id');
            let formEl = document.createElement("form");
            formEl.setAttribute("method", "POST");
            formEl.setAttribute("action", "./students/delete/");
            let idEl = document.createElement("input");
            idEl.setAttribute("type", "hidden");
            idEl.setAttribute("name", "id");
            idEl.setAttribute("value", id);
            formEl.appendChild(idEl);
            document.body.appendChild(formEl);
            formEl.submit();
        }
    </script>



    <footer>
        <?php
        include_once "includes/Global/footer.php";
        ?>
    </footer>
</body>

</html>