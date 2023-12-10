<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    /* Add custom CSS for layout */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 290px;
        /* Increase the width of the sidebar */
        height: 100vh;
        overflow-y: auto;
        background-color: #f8f9fa;
        margin-bottom: 0;
        border-right: 1px solid #ccc;
    }

    .main-content {
        margin-left: 290px;
        margin-top: 0;
        /* Remove the top margin */
        overflow-y: auto;

    }

    /* Add custom CSS for the search bar and rectangle div */
    .search-bar {
        background-color: #000;
        /* Updated background color */
        padding-bottom: 9px;
    }

    .rectangle-div {
        background-color: #f8f9fa;
        color: #333333;
        padding: 10px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    /* Added custom CSS to remove body margin */
    body {
        margin: 0;
    }

    /* Added custom CSS to change the search text placeholder color */
    .form-control::-webkit-input-placeholder {
        color: white;
    }

    .form-control::-moz-placeholder {
        color: white;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: white;
    }

    .form-control::-ms-input-placeholder {
        color: white;
    }

    .form-control::placeholder {
        color: white;
    }

    /* Added custom CSS for the logout button */
    .logout-button {
        background-color: transparent;
        border: none;
        color: white;
        cursor: pointer;
        padding: 0;
        font-size: 16px;
    }

    .logout-button:focus {
        outline: none;
    }

    /* Added custom CSS to change sidebar item colors */
    .sidebar .nav-link {
        color: grey;
    }

    /* Added custom CSS for the sidebar title */
    .sidebar-title {
        padding: 10px;
        background-color: #f8f9fa;
        color: grey;
        font-weight: bold;
    }
    </style>
    <title>Student Attendance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="sidebar">
        <!-- Rectangle Div -->
        <div class="rectangle-div  bg-black text-light">
            <h4>Universitas Klabat</h4>
        </div>

        <!-- Sidebar -->
        <aside class="bg-light sidebar-line">

            <div class="sidebar-title">User Menu</div> <!-- Sidebar title -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-users"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-calendar-check"></i> Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-calendar-check"></i> Logout</a>
                </li>
                <!-- Add more sidebar items if needed -->
            </ul>
            <br>

            <div class="sidebar-title">User Menu</div> <!-- Sidebar title -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-users"></i> Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-calendar-check"></i> Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-calendar-check"></i> Attendance</a>
                </li>
                <!-- Add more sidebar items if needed -->
            </ul>


        </aside>
    </div>

    <div class="main-content">
        <!-- Search Bar -->
        <div class="bg-dark search-bar p-0 m-0 ">
            <!-- Updated background class -->
            <div class="">
                <form class="d-flex justify-content-center align-items-center m-0">
                    <input class="form-control form-control-lg bg-dark text-light border-0 h-100 m-0 me-2 rounded-0"
                        type="search" placeholder="Search" aria-label="Search"
                        style="background-color: #494949 !important;">
                    <button class="logout-button text-nowrap me-2" type="submit" style="color: #7E7E7E !important;">
                        Sign Out</button>
                    <!-- Logout button -->
                </form>
            </div>
        </div>

        <div class="container mt-4 ">
            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <h1>Student Attendance</h1>
                    <h6 class="fw-normal"><span class="fw-bold">Course:</span> [SENG433] Full-Stack Web Development
                        (DevOps)
                    </h6>
                </div>
                <div>
                    <button class="btn btn-primary">New +</button>
                    <button class="btn btn-primary">Summary <i class="fa-regular fa-clipboard"></i></button>
                    <button class="btn btn-primary">back <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>

            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Attendance</th>
                        <th scope="col">
                            <div class="d-flex flex-column align-items-center">
                                Schedule
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex flex-column align-items-center">
                                Present/Total
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex flex-column align-items-center">
                                Radius
                            </div>
                        </th>
                        <th scope="col">
                            <div class="d-flex flex-column align-items-center">
                                Actions
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key=>$row) { ?>
                    <tr>
                        <td scope="row ">
                            <div class="d-flex gap-3 align-items-center">

                                <i class="fa-regular fa-clock text-success"></i>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="fw-bold fs-5">Pertemuan ke-<?php echo $key ?></span>
                                    <span class="fs-6"><i
                                            class="fa-regular fa-user text-primary me-2"></i><?php echo $row['name_lecturer']; ?></span>
                                    <span class="fs-6"><i
                                            class="fa-regular fa-envelope text-primary me-2"></i><?php echo $row['email_lecturer']; ?></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column align-items-center gap-1">
                                <span><?php echo date("l", strtotime($row['date_attendance'])); ?></span>
                                <span
                                    class="text-secondary"><?php echo date('d M Y', strtotime($row['date_attendance'])); ?></span>
                                <span
                                    class="btn btn-danger m-0 py-0 rounded-pill fw-bolder"><?php echo $row['time_attendance']; ?></span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="text-secondary">2/2 Students</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <span
                                    class="btn btn-warning m-0 py-0 rounded-pill fw-bolder text-white"><?php echo $row['max_radius']; ?>
                                    Meters</span>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown d-flex align-items-center justify-content-center">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Options
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            View QR Code
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">
                                            Student Attendance Details
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal"
                                            data-bs-target=" #updateAttendanceModal"
                                            data-id="<?php echo $row['id_attendance']; ?>"
                                            data-title="<?php echo $row['title_short']; ?>"
                                            data-course="<?php echo $row['name_subject']; ?>"
                                            data-name="<?php echo $row['name_lecturer']; ?>"
                                            data-email="<?php echo $row['email_lecturer']; ?>"
                                            data-date="<?php echo $row['date_attendance']; ?>"
                                            data-time="<?php echo $row['time_attendance']; ?>"
                                            data-radius="<?php echo $row['max_radius']; ?>">Update Attendance</a></li>
                                    <li>
                                        <form method="post" action="<?= APP_PATH;?>/home/deleteAttendance">
                                            <input type="hidden" id="inputId" name="inputId"
                                                value="<?php echo $row['id_attendance']; ?>">
                                            <button type="submit" class="dropdown-item">Delete
                                                Attendance</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal for Update Attendance -->
    <div class="modal fade" id="updateAttendanceModal" tabindex="-1" aria-labelledby="updateAttendanceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAttendanceModalLabel">Update Attendance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form inputs and fields for updating attendance data here -->
                    <form class="container d-flex flex-column gap-2" method="post"
                        action="<?= APP_PATH;?>/home/updateAttendance">
                        <input type="hidden" id="inputId" name="inputId">
                        <input type="hidden" id="inputName" name="inputName">
                        <div class="row">
                            <label for="inputTitle" class="form-label text-end col-3">Title Schedule</label>
                            <input type="text" class="form-control col" id="inputTitle" name="inputTitle">
                        </div>
                        <div class="row">
                            <label for="inputCourse" class="form-label text-end col-3">Course</label>
                            <input type="text" class="form-control col bg-light" id="inputCourse" name="inputCourse"
                                readonly>
                        </div>
                        <div class="row">
                            <label for="inputEmail" class="form-label text-end col-3">Lecturer Email</label>
                            <input type="text" class="form-control col bg-light" id="inputEmail" name="inputEmail"
                                readonly>
                        </div>
                        <div class="row">
                            <label for="inputDate" class="form-label text-end col-3">Date</label>
                            <input type="date" class="form-control col" id="inputDate" name="inputDate">
                        </div>
                        <div class="row">
                            <label for="inputTime" class="form-label text-end col-3">Time</label>
                            <div class="input-group col p-0 m-0">
                                <input type="text" class="form-control" id="inputTime" name="inputTime" readonly>
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Select Options</button>
                                <ul class="dropdown-menu overflow-auto" style="max-height: 200px;">
                                    <?php
            $startTime = strtotime("07:00");
            $endTime = strtotime("18:30");

            $durations = array(60, 90, 120); // Class durations in minutes

            foreach ($durations as $duration) {
                $endTimeRange = $endTime - ($duration * 60); // Calculate the end time based on the duration

                while ($startTime <= $endTimeRange) {
                    $timeStart = date("H:i", $startTime);
                    $timeEnd = date("H:i", $startTime + ($duration * 60));

                    // Adjust the time format to match the desired pattern
                    $timeStartAdjusted = preg_replace('/^0(\d)/', '$1', $timeStart);
                    $timeEndAdjusted = preg_replace('/^0(\d)/', '$1', $timeEnd);

                    $timeRange = $timeStartAdjusted . " - " . $timeEndAdjusted;
                    echo '<li><a class="dropdown-item" href="#" data-value="' . $timeRange . '">' . $timeRange . '</a></li>';

                    $startTime += 30 * 60; // Increment by 30 minutes
                }
            }
            ?>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <label for="inputRadius" class="form-label text-end col-3">Maximum Radius</label>
                            <div class="input-group col p-0 m-0">
                                <input type="text" class="form-control" id="inputRadius" name="inputRadius" readonly>
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Select Options</button>
                                <ul class="dropdown-menu overflow-auto" style="max-height: 200px;">
                                    <li><a class="dropdown-item" href="#">No Distance</a></li>
                                    <?php
                                    $startRadius = 10;
                                    $endRadius = 500;
                                    $radiusGap = 10;

                                    for ($radius = $startRadius; $radius <= $endRadius; $radius += $radiusGap) {
                                        echo '<li><a class="dropdown-item" href="#" data-value="' . $radius . '">' . $radius . ' Meters</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Schedule</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        // Capture the click event on "Update Attendance" option in the dropdown
        $('a[data-bs-toggle="modal"]').on('click', function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var course = $(this).data('course');
            var name = $(this).data('name');
            var email = $(this).data('email');
            var time = $(this).data('time');
            var radius = $(this).data('radius');

            var date = new Date($(this).data('date'));

            // Convert the date to the desired format (YYYY-MM-DD)
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var formattedDate = year + '-' + month + '-' + day;

            // Set the values in the modal inputs
            $('#inputId').val(id);
            $('#inputTitle').val(title);
            $('#inputCourse').val(course);
            $('#inputName').val(name);
            $('#inputEmail').val(email);
            $('#inputDate').val(formattedDate);
            $('#inputTime').val(time);
            $('#inputRadius').val(radius);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Update input value when dropdown option is selected
        $('.dropdown-menu a.dropdown-item').on('click', function() {
            var value = $(this).data('value');
            $(this).closest('.input-group').find('input').val(value);
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>