<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/767b1164ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid py-5 px-3 min-vh-100" style="background-color:#D3D3D3">
        <div class="row">
            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="" class="text-decoration-none"><i class="fa-solid fa-user"></i> Profile</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none"><i class="fa-solid fa-cart-shopping"></i> My orders</a></li>
                        <li class="list-group-item"><a href="" class="text-decoration-none"><i class="fa-solid fa-gear"></i> Account Settings</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center mb-3 mb-sm-0">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Profile Picture" style="width:140px; height:140px">
                            </div>

                            <div class="col-md-8 text-md-start text-center text-sm-center">
                                <h5>Full Name</h5>
                                
                                <hr>

                                <p><i class="fa-solid fa-location-dot"></i> Complete Address: <span>Some Address Here</span></p> 
                                <p><i class="fa-sharp fa-solid fa-file-invoice-dollar"></i> Billing Address: <span>Some Address Here</span></p>
                                <p><i class="fa-solid fa-hashtag"></i> Contact Number: <span>Some Number Here</span></p>
                                <p><i class="fa-solid fa-envelope"></i> E-mail: <span>Some Email Here</span></p>
                            </div>
                        </div>

                        <hr>

                        <h5>My Transaction History</h5>
                        <table class="table table-stripped" id="transactionHistory">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Item Name</th>
                                    <th>Item Description</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?= site_url('Store') ?>" class="btn btn-primary"><i class="fa-solid fa-house"></i> Keep Shopping</a></li>
                        <li class="list-group-item"><a href="" class="btn btn-danger"> <i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script>
        $(document).ready( function () {
            $('#transactionHistory').DataTable();
        });
    </script>
</body>
</html>