<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Graduation Project management System</title>
    <link href="/assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>
<body>
<div class="container-fluid height-100vh">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar text-center">
            <div class="text-center">
                <img src="../assets/image/cool-panda-guc-prints.jpg" width="150px" height="150px" class="rounded"
                     alt="...">
            </div>
            <h5 class="border-bottom m-1 p-3">Project Information</h5>
            <div class="sidebar-sticky">
                <ul class="list-group">
                    <li class="list-group-item" style="text-align: left">
                        <b>Branch:</b>
                        Computer and Science Information
                    </li>
                    <li class="list-group-item" style="text-align: left">
                        <b>Teacher:</b>
                        John Doe
                    </li>
                </ul>
                <a class="btn btn-outline-danger my-5" href="/library">Library</a>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-3">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h3>Project's name here................</h3>
                <div class="progress w-50">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">75%
                    </div>
                </div>
                <div class="mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-bell fa-2x"></i>
                    </button>
                </div>
            </div>
            <div class="container-fluid height-80vh">
                <div class="row overflow-auto justify-content-around">
                    <div class="col-4 height-85vh text-center border overflow-auto">
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="phaseSelectBox">Phase</label>
                            </div>
                            <select class="custom-select" id="phaseSelectBox">
                                <option value="warm_up">Warm up</option>
                                <option value="break_out">Break out</option>
                                <option value="last_run">Last run</option>
                            </select>
                        </div>
                        <div class="progress">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100">75%
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <label class="form-control task-class">Create Something</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <!-- Button trigger modal -->
                                        <i data-toggle="modal" data-target="#task-1-detail" class="far fa-edit"></i>
                                        <div class="modal fade" id="task-1-detail" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Task detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="task-1-detail-form" action="/task/...something"
                                                              method="POST">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="I'm title here@">
                                                            </div>
                                                            <h3>Something here</h3>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" form="task-1-detail-form"
                                                                class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <label class="form-control task-class">Create Something to long long long long</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <!-- Button trigger modal -->
                                        <i data-toggle="modal" data-target="#task-1-detail" class="far fa-edit"></i>
                                        <div class="modal fade" id="task-2-detail" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Task detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="task-1-detail-form" action="/task/...something"
                                                              method="POST">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="I'm title here@">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" form="task-1-detail-form"
                                                                class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-open" ></i>
                            Add Task
                        </button>
                        <hr>
                        <div class="border text-center">
                            <h3>File here</h3>
                        </div>
                    </div>
                    <div class="col-7 border">
                        <div class="bottom-sticky">
                            <div id="editor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script type="application/javascript" rel="script">
    const labels = document.getElementsByClassName("task-class");
    for (let i = 0; i < labels.length; i++) {
        const label = labels[i];
        if (label.innerHTML.length > 18) label.innerHTML = label.innerHTML.slice(0, 16) + "...";
    }

    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>