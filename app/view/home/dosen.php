<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Daftar Mahasiswa</h3>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Reg. Number</th>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach ($data['students'] as $student) :
                ?>
                    <tr>
                        <td class="text-center"><?php echo $student['reg_number']; ?></td>
                        <td class="text-center"><?php echo $student['nim_number']; ?></td>
                        <td class="text-center"><?php echo $student['fullname']; ?></td>
                        <td class="text-center"><?php echo $student['email']; ?></td>
                        <td class="text-center"><?php echo $student['password']; ?></td>
                    </tr>
                <?php
                    $count++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>