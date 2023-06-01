<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./iconlogo.png">
    <script src="main.js"></script>
</head>
<body>
        <div>
            <nav class="navbar justify-content-between px-5">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="image/Logo.png">
                        </a>
                        <div class="nav">
                            <a class="nav-item nav-link active" href="#">Actions</a>
                            <a class="nav-item nav-link" href="#">Resources</a>
                            <a class="nav-item nav-link" href="#">Projects</a>
                            <a class="nav-item nav-link" href="#">Explore</a>
                        </div>
                </div>
            </nav>

            <div class="text-center hero" >
                <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                <?php 
                    include 'conn.php';
                    $section1 = mysqli_query($conn, "select * from section_1");
                    foreach ($section1 as $value){
                        echo"
                        <h1 class='masterhead'>".$value['judul']."</h1>  
                        <p>".$value['deskripsi']."</p><br>";    
                    }
                ?>
                    <a onclick="alert('I take an action')" class="btn btn-primary" href="#second">Learn More</a>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col-content" id="second">
            <div class="container">
                <div class="text-white">
                    <h1 >Offset Your Plastic <br> Footprint</h1>
                </div>
                <div class="row mt-5">
                        <?php 
                            include 'conn.php';
                            $section2 = mysqli_query($conn, "select * from section_2");
                            foreach ($section2 as $value){
                                echo"
                                <div class='col-md-4'>
                                    <div class='card text-white mt-3'>
                                        <div class='card-body'>
                                            <h4 class='card-title'>".$value['judul']."</h4>
                                            <p class='card-text' >".$value['deskripsi']."</p>
                                            <br><a class='btn btn-primary'>Start Action</a>
                                        </div>
                                    </div>
                                </div>";    
                            }
                        ?>
                </div>
            </div>
        </div>

        <div class="col-content text-center" style="background-image: url(image/third.jpg) ;" id="third">
            <div class="container">
                <div class="text-white">
                    <h1 >Offset Your Plastic <br> Footprint</h1>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card text-white mt-3">
                        <div class="card-body">
                            <img src="image/Icon1.png" alt=""><br><br>
                            <h5 class="card-title">Commit To Removing a Specific Amount</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white mt-3">
                        <div class="card-body">
                            <img src="image/Icon2.png" alt=""><br><br>
                            <h5 class="card-title">Tie Removal To Product Sales</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white mt-3">
                        <div class="card-body">
                            <img src="image/Icon3.png" alt=""><br><br>
                            <h5 class="card-title">Incentivize Community Action</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-content pt-5 pb-3" style="background-image: url(image/long.jpg) ;">
            <div class="container pt-5">
                <div class="text-white">
                    <h5>Project 1 :</h5>
                    <h1 >Ocean Bound Clean Up</h1>
                </div><br>
                <div class="row mt-5 text-white align-items-center">
                    <div class="col-md-6">
                        <img src="image/project1-1.png" alt="" class=" img-fluid mt-5 mb-5">
                    </div>
                    <div class="col-md-6 px-5">
                            <h4>Problems</h4>
                            <p class="long">Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</p>
                    </div>
                </div>
                <div class="row mt-5 text-white align-items-center mb-3">
                    <div class="col-md-6 px-5">
                        <h4>Solutions</h4>
                        <p class="long ">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="image/project1-2.png" alt="" class=" img-fluid mt-5 mb-5">
                    </div>
                </div><br><br>

                <div class="text-white mt-5">
                    <h5>Project 2 :</h5>
                    <h1 >Fishing Net Recovery</h1>
                </div><br>
                <div class="row mt-5 text-white align-items-center">
                    <div class="col-md-6">
                        <img src="image/project2-2.png" alt="" class="img-fluid mt-5 mb-5">
                    </div>
                    <div class="col-md-6 px-5">
                            <h4>Problems</h4>
                            <p class="long">Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
                    </div>
                </div>
                <div class="row mt-5 text-white align-items-center mb-3">
                    <div class="col-md-6 px-5">
                        <h4>Solutions</h4>
                        <p class="long">We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="image/project2-1.png" alt="" class=" img-fluid mt-5 mb-5">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-content text-center" style="background-image: url(image/long.jpg) ;">
            <div class="container">
                <div class="text-white">
                    <h1 >Get in Touch</h1>
                </div><br>
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="mapouter mb-4">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=universitas gadjah mada&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                                <a href="https://capcuttemplate.org/">Capcut Template</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white">
                        <div class="card-body">
                            <div class="d-flex flex-column w-100">
                                <input type="text" id="name" class="form-classic" placeholder="Name" required><br>
                                <input type="text" id="email" class="form-classic" placeholder="Email" required><br>
                                <textarea type="textarea" id="message" class="form-classic" rows="4" placeholder="Writing Your Message Here..."></textarea><br>
                                <button onclick="info()" class="btn btn-primary w-30" >Send</button>
                            </div><br>
                        </div>
                        </div>
                    </div>
                    <div class="mt-4" id="info">
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-5" style="background-color: #000E1D ;">
            <div class="container">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-6">
                        <img src="image/Logo.png" alt="">
                    </div>
                <div class="col-md-6 text-md-end text-center mt-4 mt-md-0">
                    <a  href="#" class="me-5">Newsletter</a>
                    <a  href="#" class="me-5">Privacy Policy</a>
                    <a  href="#">FAQs</a>
                </div>
                </div>
            </div>
        </footer>
</body>
</html>
