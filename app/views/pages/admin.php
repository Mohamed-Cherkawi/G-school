<?php require APPROOT . '/views/inc/header.php'; ?>
     <body class="background-body">

             <!-- start side bar -->
             <?php require APPROOT . '/views/inc/sidebar.php'; ?>
            <!-- end side bar  -->
            <!-- start navbar -->
            <?php require APPROOT . '/views/inc/nav.php'; ?>
            <!-- end navbar -->
            <!-- start table  -->
            <div class="bg-light py-2 mt-5 ">
                <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                    <h5 class=" fw-bolder d-none d-sm-block mx-3">ADMINS</h5>
                    <div class="d-flex align-items-center">
                        <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                        <button class="add btn btn-info text text-white text-uppercase mx-4 py-2 ">
                            AJOUTER UN ADMIN
                        </button>
                    </div>
                </div>
            <hr>
            <main class="row ">
                <div class="container ">
                    <div class="table-responsive-sm table-responsive-md px-4">
                    <table class="table align-middle table-borderless ">
                        <thead>
                        <tr class="text-capitalize  ">
                            <th scope="col" class="d-none d-sm-block"></th>
                            <th scope="col" class="text-muted h6 ">Matricule</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Nom complet</th>
                            <th scope="col" class="d-none d-sm-table-cell text-muted h6">Role</th>
                            <th scope="col" class="text-muted h6">Password</th>

                            <th scope="col"></th>
                        </tr>

                        </thead>
                        
                        <tbody>
                        <tr class=" bg-white ">
                            <th scope="row" class="d-none d-sm-block rounded-circle"width="70" height="70"><img src="<?php echo URLROOT;?>/img/forest.jpg"  width="65px" alt="image représente étudiants"> </th>
                            <td>134124</td>
                            <td class="d-none d-sm-table-cell">NOUREDDINE MAHER</td>
                            <td class="d-none d-sm-table-cell">Admin</td>
                            <td class="hide-text">mot de passe</td>
                            <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                            <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                        </tr>
                        <th>
                            <tr class=" bg-white ">
                                <th scope="row" class="d-none d-sm-block rounded-circle"width="70" height="70"><img src="<?php echo URLROOT;?>/img/forest.jpg" width="65px" alt="image représente étudiants"> </th>
                                <td>134124</td>
                                <td class="d-none d-sm-table-cell">NOUREDDINE MAHER</td>
                                <td class="d-none d-sm-table-cell">Admin</td>
                                <td class="hide-text">mot de passe</td>
                                <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                                <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                            </tr>
                            <th>
                                <tr class=" bg-white ">
                                    <th scope="row" class="d-none d-sm-block rounded-circle"width="70" height="70"><img src="<?php echo URLROOT;?>/img/forest.jpg"  width="65px" alt="image représente étudiants"> </th>
                                    <td>134124</td>
                                    <td class="d-none d-sm-table-cell">NOUREDDINE MAHER</td>
                                    <td class="d-none d-sm-table-cell">Admin</td>
                                    <td class="hide-text">mot de passe</td>
                                    <td><a href="#"><i class="fal fa-pen fs-6 text-info"></a></i></td>
                                    <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                                </tr>
                        
                       
                        
                        </tbody>
                    </table>
                    </div>
                </div>    
            </main>
            <!-- end table  -->


            
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     </body>
  </html>