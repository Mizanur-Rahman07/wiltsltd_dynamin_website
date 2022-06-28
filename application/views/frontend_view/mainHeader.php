<?php 
 $data['menus'] = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();    
 foreach ($data['menus'] as $key => $value) {
     $data['menus'][$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'ASC')->get('menu')->result();
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome 5 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- slick slide css -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="<?php echo base_url('frontend_design/assets/css/style.css'); ?>">
    <title>WILTS Limited</title>
</head>

<body>
    <header>
        <!-- nav Start -->
        <nav class="navbar shadow-lg navbar-expand-md">
            <div class="container-fluid cont">
                <a class="navbar-brand " href="./index.html">
                    <img src="<?php echo base_url('frontend_design/assets/images/wiltsltd-Logo.png') ?>" alt="logo"></a>

                <button class="navbar-toggler" style="border-color: gray;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-secondary"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end bg-white" id="navbarNavDropdown">
                    <ul class="navbar-nav float-left">
                        <?php
                        foreach ($menus as $valus) {
                        ?>
                            <li class="nav-item dropdown ">
                                <a class="nav-link fw-bold <?php if (!empty($valus->submenu)) {
                                                                    echo "dropdown-toggle";
                                                                } else {
                                                                    echo "";
                                                                } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo  $valus->menuName; ?>
                                </a>

                                <?php if (!empty($valus->submenu)) { ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($valus->submenu as $value) { ?>
                                            <li><a class="dropdown-item " href="<?php echo $value->page_link ?>"><?php echo $value->menuName; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php  } ?>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>


                </div>
            </div>
        </nav>
        <!-- nav end -->
    </header>
    

