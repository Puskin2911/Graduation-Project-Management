<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="/Graduation-Project-Management/assets/Image/favicon.ico">


    <title>Admin | Student</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/Graduation-Project-Management/assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <script src="https://kit.fontawesome.com/f83b9ba1b1.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HUS-Admin</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" id='search-field' onkeyup="search('student')">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/Graduation-Project-Management/logout">Log out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/Graduation-Project-Management/admin">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Graduation-Project-Management/admin/projects">
                                <i class="fas fa-file-alt"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-users"></i>
                                <span>Students</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Graduation-Project-Management/admin/teachers">
                                <i class="fas fa-user-tie"></i>
                                <span>Teachers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Graduation-Project-Management/library">
                                <i class="fas fa-server "></i>
                                <span>Library</span>
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Some Actions</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h2">Student</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#addStudent">
                            <i class="fas fa-user-plus"></i>
                            Add student
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addStudentLabel">Add new student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addStudentForm" action="/Graduation-Project-Management/admin/students/add" method="POST">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">Student Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder=" Student name" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="studentId">Student ID</label>
                                                    <input type="number" name="student_id" min="10000000" max="99999999" class="form-control" id="studentId" onblur="autoDetectPassword('studentId')" placeholder="Student ID..." value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder=" Student email" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Class</label>
                                                    <input type="text" name="class" minlength="3" maxlength="8" class="form-control" id="class" placeholder="Class" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Year</label>
                                                    <input type="text" name="year" minlength="3" maxlength="8" class="form-control" id="year" placeholder="Year" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="branch">Branch</label>
                                                    <!--                                                    <input type="text" name="year" minlength="3" maxlength="8" class="form-control" id="year" placeholder="Year" value="" required>-->
                                                    <select name="branch" id="branch" class="form-control">
                                                        <?php
                                                        foreach ($data['branches'] as $branch){
                                                            echo "<option value='".$branch['branch_id']."' name='branch_name'>".$branch['branch_name']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="text" name="password" class="form-control" id="password" value="password" readonly>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" form="addStudentForm" class="btn btn-primary">Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Import</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                    </div>
                </div>
                <!-- <h2>Student</h2> -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id='data-table'>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($data['students']); $i++) {
                                $j = $i + 1;
                                echo "<tr>
                                        <td>" . $j . "</td>
                                        <td>" . $data['students'][$i]['student_id'] . "</td>
                                        <td>" . $data['students'][$i]['name'] . "</td>
                                        <td>" . $data['students'][$i]['email'] . "</td>
                                        <td>
                                            <button type='button' data-toggle='modal' data-target='#student-" . $j . "-detail'>
                                                <i class='fas fa-user-edit'></i>
                                            </button>
                                            <div class='modal fade' id='student-" . $j . "-detail' tabindex='-1' role='dialog' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title'>Student
                                                                Information
                                                                Detail</h5>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <form id='updateStudent" . $data['students'][$i]['student_id'] . "Form' action='/Graduation-Project-Management/admin/students/update' method='POST'>
                                                                <div class='form-group'>
                                                                    <label>StudentID</label>
                                                                    <input class='form-control' name='student_id' value='" . $data['students'][$i]['student_id'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Name</label>
                                                                    <input class='form-control' name='name' value='" . $data['students'][$i]['name'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Email</label>
                                                                    <input class='form-control' name='email' value='" . $data['students'][$i]['email'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Phone</label>
                                                                    <input class='form-control' name='phone' value='" . $data['students'][$i]['phone'] . "' readonly>
                                                                </div>      
                                                                <div class='form-group'>
                                                                <label>Branch</label>
                                                                <select class='form-control' name='branch'>";
                                                                    foreach ($data['branches'] as $branch){
                                                                        if($data['students'][$i]['branch'] == $branch['branch_name']){
                                                                            echo "<option selected value='".$branch['branch_id']."' name='branch_name'>".$branch['branch_name']."</option>";
                                                                        } else{
                                                                            echo "<option value='".$branch['branch_id']."' name='branch_name'>".$branch['branch_name']."</option>";
                                                                        }

                                                                    }
                                                                    echo"</select>
                                                                    </div>  
                                                                    <div class='form-group'>
                                                                    <label>Class</label>
                                                                    <input class='form-control' name='class' value='" . $data['students'][$i]['class'] . "'>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Year</label>
                                                                    <input class='form-control' name='year' value='" . $data['students'][$i]['year'] . "'>
                                                                </div>    
                                                                                             
                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
                                                            </button>
                                                            <button type='submit' form='updateStudent" . $data['students'][$i]['student_id'] . "Form' class='btn btn-primary'>Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type='button' data-toggle='modal' data-target='#student-" . $j . "-delete'>
                                                <i class='fas fa-user-minus'></i>
                                            </button>
                                            <div class='modal fade' id='student-" . $j . "-delete' tabindex='-1' role='dialog' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h6 class='modal-title'>Are you sure to delete student (" . $data['students'][$i]['student_id'] . ") ?</h6>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <h4 class='text-danger'>To be carefully, this action can't be undo!</h4>
                                                            <form id='deleteStudent" . $data['students'][$i]['student_id'] . "Form' action='/Graduation-Project-Management/admin/students/delete' method='POST'>
                                                                <input type='hidden' name='student_id' value='" . $data['students'][$i]['student_id'] . "'>
                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel
                                                            </button>
                                                            <button type='submit' form='deleteStudent" . $data['students'][$i]['student_id'] . "Form' class='btn btn-primary'>Confirm delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/Graduation-Project-Management/assets/js/admin_script.js"></script>
</body>

</html>