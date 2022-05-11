<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap");
    </style>
    <link rel="stylesheet" href="css/managedata.css">
    <title>จัดการสมาชิก</title>
</head>

<body>
    <?php include("mb_management.php"); ?>

    <div class="forum">
        <center>
            <h4>จัดการสมาชิก</h4>
            <button class="addbtn">เพิ่ม</button>
            
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">Username</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">แผนก</th>
                            <th scope="col">จัดการ</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">a</td>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                            <td scope="row">Otto</td>
                            <td scope="row">
                            <button class="btnn">ลบ</button>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">a</td>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                            <td scope="row">Otto</td>
                            <td scope="row">
                            <button class="btnn">ลบ</button>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">a</td>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                            <td scope="row">Otto</td>
                            <td scope="row">
                            <button class="btnn">ลบ</button>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">a</td>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                            <td scope="row">Otto</td>
                            <td scope="row">
                            <button class="btnn">ลบ</button>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">a</td>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                            <td scope="row">Otto</td>
                            <td scope="row">
                            <button class="btnn">ลบ</button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </center>


        <form>
            <input type=button value="Refresh" onClick="javascript:location.reload();" class="refresh">
        </form>

        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>

</html>