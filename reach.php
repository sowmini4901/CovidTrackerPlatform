<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    <title>project_mk1</title>
</head>

<body>

    <nav class = "navbar navbar-light navbar-expand-sm  fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41">  </a>
            <div class="collapse navbar-collapse" id="Navbar"> 
              <ul class="navbar-nav mr-auto">
            
                <li class="nav-item active"><a class="nav-link" href="#"> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./aboutus.html"> About</a></li>
               
                <li class="nav-item"><a class="nav-link" href="./contactus.html">Contact</a></li>
              </ul>
              <span clas="navbar-text"> 
                  <a>
                      <span class="fa fa-sign-in" id="loginSection">Login</span> 
                  </a>
              </span>
            </div>
        </div>


    </nav>



    <header class="jumbotron">
        <div class="container-fluid">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>project_mk1</h1>
                    <p>Adding value by all means!</p>
                </div>
                <div class="col-12 col-sm">
                </div>
            </div>
        </div>
    </header>


    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg " role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">One Step Closer</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form>
                        <div class="row text-center">
                            <div class="col">
                              <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                        </div>

                        
                        <div class="row"> 
                            <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                          </div>
                        </div>
                        
                            <div class="row"> 
                                <div class="col">
                                <input type="text" class="form-control" name="value" placeholder="Value you can add" maxlength="30" required>
                              </div>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                                  <input type="text" class="form-control" name="category" placeholder="Category" required>
                                </div>
                            </div>
                           
                            <div class="row text-center">
                                <div class="col">
                                  <input type="phone" class="form-control" name="phone" placeholder="Contact No." required>
                                </div>
                            </div>
                          
                            <div class="row  text-center">
                                <div class="col">
                                  <input type="email" class="form-control" name="email" placeholder="email Id" required>
                                </div>
                            </div>

                            <div class="row  text-center">
                                <div class="col">
                                  <input type="url" class="form-control" name ="link" placeholder="Link to your portfolio" required>
                                </div>
                            </div>
                        
                       
                       
                         <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                
                                <button type="button" class="btn btn-secondary btn-sm ml-auto align-self-center" data-dismiss="modal">Cancel</button>
                                           
                               
                                <button type="submit" class="btn btn-outline-light btn-sm ml-1">
                                    Add
                                </button>
                            </div>
                        </div>
                    
                    </form>
                
                    
                </div>


            </div>
        </div>
    </div>






    <div id="reachoutModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg " role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Application for Appointment</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form action="hospital_handler.php" method="POST">
                        <div class="row text-center">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Name" name="patientname" required>
                            </div>
                        </div>
                        
                            <div class="row"> 
                                <div class="col">
                                <input type="text" class="form-control"  placeholder="Last Name" name="lastname" required>
                              </div>
                            </div>

                            <div class="row"> 
                                <div class="col">
                                <input type="number" class="form-control"  placeholder="Age" name="age" required>
                              </div>
                            </div>

                                                    
                             
                             <div class="form-group">
                                
                                <select class="form-control" name="hospital" id="hospital" size="5" required>
                                    <option selected hidden value="">Select Hospital</option>
                                    <option value="yashodaHospital">Yashoda Hospital</option>
                                    <option value="apolloHospital">Apollo Hospital</option>
                                    <option value="mamathaHospital">Mamatha Hospital</option>
                                    <option value="maxHospital">Max Hospital</option>
                                    <option value="vasanHospital">Vasan Eye Care Hospital</option>
                                    <option value="prasadHospital">Prasad Neuro Hospital</option>
                                    <option value="kamineniHospital">Kamineni hospital</option>
                                    <option value="sunshineHospital">Sunshine Hospital</option>
                                    <option value="legendHospital">Legend Hospital</option>
                                    <option value="asianHospital">Asian Hospital</option>
                                </select>
                              </div>
                           
                       

                            <div class="row text-center">
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Department" name="department" required>
                                </div>
                            </div>
                           
                            <div class="row"> 
                                <div class="col">
                                <input type="phone" class="form-control"  placeholder="Contact No." name="phone" required>
                              </div>
                            </div>

                            <div class="row"> 
                                <div class="col">
                                <input type="email" class="form-control"  placeholder="email id" name="email" required>
                              </div>
                            </div>

                            
                            <div class="row">
                                
                                <div class="col">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="m">
                                        <label class="form-check-label form-font" for="inlineRadio1">Male</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="f">
                                        <label class="form-check-label form-font" for="inlineRadio2">Female</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="o">
                                        <label class="form-check-label form-font" for="inlineRadio3">Other</label>
                                      </div>
                                                                                                                 
                                </div>
                             </div>
                           
                                                    
                                              
                         <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                
                                <button type="button" class="btn btn-secondary btn-lg ml-auto align-self-center" data-dismiss="modal">Cancel</button>
                                           
                               
                                <button type="submit" class="btn btn-default btn-lg ml-1" value="submit">
                                   Make Appointment
                                </button>
                            </div>
                        </div>
                    
                    </form>
                
                    
                </div>


            </div>
        </div>
    </div>



























    <div class="container-fluid">

        <div class="row row-content">
            <div class="col-12 col-sm-4 col-md-8">
                <h1>Updates</h1>
            </div>

            <div class="col-12 col-sm-4 col-md-3 order-sm-last">
                <img src="img/indoor.JPG" width="475px" height="700px">
            </div>

            
        </div>
        

      <div class="row-content got parent-div">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <span class="font">GOT</span>a sec
            </div>
        
       
        
            <div class="child-div p-3">
                
                <a class="btn btn-dark btn-lg btn-block btn-default" role="button" id="reserveTableButton" >To Make a Difference</a>
                           
            </div>

         
        </div>
            
        
            

                 
                           
      </div>

        
        <div class="row row-content reach">
            <div class="col-12 col-sm-4 col-md-7">
             
            </div>
            <div class="col-12 col-sm-4 col-md-3 order-sm-last">
                <h1 class="font-reach" >REACH<br> OUT</h1>
               
            </div>
            <div class="col-12 col-sm-3 align-self-center order-sm-last">
                <a class="btn btn-dark btn-lg btn-block btn-defaults" role="button" id="reachOutButton">Here</a>
            </div>
            
        </div>

        <div class="row row-content">
            <div class=" d-none d-sm-block col-12 col-sm-4 col-md-3">
                <h1 class="font">add a<br> SMILE</h1>
            </div>
            
        </div>


      

    </div>

    <footer>
        <div class="container">
            <div class="row">             
                <div>
                    <h5>Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              Tel.: +852 1234 5678<br>
		              Fax: +852 8765 4321<br>
		              Email: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div>
                    <div>
                        <a href="http://google.com/+">Google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                    </div>
                </div>
           </div>
           <div class="row">             
                <div>
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

   <script> $("#reserveTableButton").click(function(){
    $('#reserveModal').modal('toggle')
});

$("#reachOutButton").click(function(){
    $('#reachoutModal').modal('toggle')
});


</script>

</body>

</html>