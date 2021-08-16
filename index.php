


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
                <li class="nav-item"><a class="nav-link" href="./"> About</a></li>
               
                <li class="nav-item"><a class="nav-link" href="./contactus.html">Contact</a></li>
                <li class="nav-item"><a>
                    <span class="fa fa-sign-in nav-link" id="updateSection">Update </span> 
                    </a>
                </li>
                <li class="nav-item">
                        <a>
                        <span class="fa fa-sign-in nav-link" id="deleteSection"> Delete</span> 
                        </a>
                </li>
                              

                
              </ul>

              
                

           
              

            </div>
        </div>


    </nav>

    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Delete Entry</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-bodys">

                    <form action="delete.php" method = "POST">
                        <div class="form-group">
                            <div class="row">
                                <br>
                                
                                
                             </div>
                            <input type = "text" class="form-control" name="name" placeholder="Name">
                            <input type = "password" class="form-control" name ="password" placeholder="Password">
                                  
                            <button type="submit" name="delete" class="btn btn-outline-light btn-lg ml-1">
                                    Delete
                                </button>
                        
                        </div>
                        
                    </form>

                </div>


            </div>
        </div>
    </div>


    
    <div id="updateModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Update Entry</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-retrieveBody">

                    <form action="update.php" method="POST">
                        <div class="row">
                            <br>
                            <br>
                            
                         </div>

                        <div class="row text-center">
                            <div class="col">
                              <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                        </div>

                        <div class="form-group">
                                
                            <select class="form-control" name="category" id="category"  required>
                                <option selected hidden value="">Category</option>
                                <option value="design">Design</option>
                                <option value="art">Art</option>
                                <option value="music">Music</option>
                                <option value="programming">Programming</option>
                                <option value="accounting">Accounting</option>
                                <option value="transport">Transport</option>
                                <option value="marketing">Marketing</option>
                                <option value="others">Others</option>
                                
                            </select>
                          </div>
                  

                        
                        
                        
                        
                          
                            

                            
                            <div class="row  text-center">
                                <div class="col">
                                  <input type="text" class="form-control" name ="portfolio" placeholder="Link to your portfolio" required>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                                  <input type="phone" class="form-control" name="contact" placeholder="Contact No." required>
                                </div>
                            </div>
                          
                            <div class="row  text-center">
                                <div class="col">
                                  <input type="email" class="form-control" name="email" placeholder="Email Id" required>
                                </div>
                            </div>

                            
                       
                       
                         <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                
                                <button type="button" class="btn btn-secondary btn-sm ml-auto align-self-center" data-dismiss="modal">Cancel</button>
                                           
                               
                                <button type="submit" name="update" class="btn btn-outline-light btn-sm ml-1">
                                    Update
                                </button>
                            </div>
                        </div>
                    
                    </form>
                

                </div>


            </div>
        </div>
    </div>




    <header >
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/jumbotron-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Volunteer</h3>
                  <p>A platform to provide your services</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/jumbotron-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Share</h5>
                  <p>A platform to share your skills</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/jumbotron-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Add Value</h5>
                  <p>A platform to add value to the society</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
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
                <div class="modal-retrieveBody ">
                  
                    <form action="hospital_handler.php" method="POST">

                     <div class="row">
                        <br>
                        <br>
                        
                     </div>
                        <div class="form-group">
                                
                            <select class="form-control" name="category" id="category"  required>
                                <option selected hidden value="">Category</option>
                                <option value="design">Design</option>
                                <option value="art">Art</option>
                                <option value="music">Music</option>
                                <option value="programming">Programming</option>
                                <option value="accounting">Accounting</option>
                                <option value="transport">Transport</option>
                                <option value="marketing">Marketing</option>
                                <option value="others">Others</option>
                                
                            </select>
                          </div>

                        <div class="row text-center">
                            <div class="col">
                              <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                        </div>

                        
                        <div class="row"> 
                            <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                        </div>
                        
                        

                           
                            

                            
                            <div class="row  text-center">
                                <div class="col">
                                  <input type="text" class="form-control" name ="portfolio" placeholder="Link to your portfolio" required>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                                  <input type="phone" class="form-control" name="contact" placeholder="Contact No." required>
                                </div>
                            </div>
                          
                            <div class="row  text-center">
                                <div class="col">
                                  <input type="email" class="form-control" name="email" placeholder="Email Id" required>
                                </div>
                            </div>

                            
                       
                       
                         <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                
                                <button type="button" class="btn btn-secondary btn-sm ml-auto align-self-center" data-dismiss="modal">Cancel</button>
                                           
                               
                                <button type="submit" name="difference" class="btn btn-outline-light btn-sm ml-1">
                                    Add
                                </button>
                            </div>
                        </div>
                    
                    </form>
                
                    
                </div>


            </div>
        </div>
    </div>



  


    



    <div id="retrieveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg " role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Application for Appointment</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-retrieveBody">
                  
                      <div class="row">
                          <div class="col-sm-12">
                    <table>
                        <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Portfolio</th>
                        <th>email</th>
                        </tr>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "volunteer");
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT category, name, portfolio, email FROM register";
                        
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["category"]. "</td><td>" . $row["name"] . "</td><td>". $row["portfolio"] . "</td><td>"
                        . $row["email"]. "</td></tr>";
                        }
                        echo "</table>";
                        } else { header("Location: http://localhost/covid/unable.html"); }
                        $conn->close();
                        ?>
                        </table>
                        </div>
                    </div>
              
                    
                </div>


            </div>
        </div>
    </div>




























       <div class="container-fluid">
     
        

        <div class="row row-content">
            <div class="col-12 col-sm-4 col-md-8">
                <h1></h1>
            </div>


            
        </div>
        

      <div class="row-content got parent-div">

        <div class="child-got">
            <div>
                <span class="font-got">GOT</span><span class="font-sec">A SEC ?</span>
            </div>
        </div>
        <div class="row">
            
        
       
        
            <div class="child-div p-3">
                
                <a class="btn btn-dark btn-lg btn-block btn-default" role="button" id="reserveTableButton" >To Make a Difference</a>
                           
            </div>

         
        </div>
            
        
            

                 
                           
      </div>

        
        <div class="row row-content reach parent-div">
            <div class="row">
                <div class="child-divreach p-3">
                    <div class="row">
                        <h1 class="font-reach" >REACH</h1>
                        
                    </div>
                   
                </div>
            </div>
            
<div class="row">
    <div class="child-reachout p-3">
        <div class="row">
            <h1 class="font-reachout" >OUT</h1>
           
        </div>
        </div>
</div>
           

           <div class="child-reachbutton p-3">
            
                <a class="btn btn-dark btn-lg btn-block btn-defaults" role="button" id="reachOutButton">Here</a>
            
           </div>
           
            
        </div>



           
       






      

    </div>

    <footer>
        <div class="container">
            <div class="row">             
               
                
               
           </div>
           <div class="row justify-content-center">             
                <div>
                    <p>© Copyright 2020 glenpaulson</p>
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
    $('#retrieveModal').modal('toggle')
});

$("#deleteSection").click(function(){
            $('#deleteModal').modal('toggle')
        });

        $("#updateSection").click(function(){
            $('#updateModal').modal('toggle')
        });


        window.watsonAssistantChatOptions = {
      integrationID: "0cc0db0d-84d0-4653-a266-f05872dc96f3", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c07a9de3-c863-40c1-9e06-20dd5254fb3e", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });

</script>



</body>

</html>