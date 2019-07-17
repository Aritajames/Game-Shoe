
<?php include 'header.php';
session_start();
include 'config.php';
if(!isset($_SESSION['email'])){
    header ('location:signup.php');
    exit();
}
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="./static/matteob2000.jpg" alt="Shoerisma" style="width: 100%;height: 700px">
        </div>

        <div class="item">
            <img src="./static/matteor2000.jpg" alt="Shoerisma" style="width: 100%;height: 700px">
        </div>

        <div class="item">
            <img src="./static/moccassino1800.jpg" alt="Shoerisma" style="width: 100%;height: 700px">
        </div>

        <div class="item">
            <img src="./static/leatherbootbl4000.jpg" alt="Shoerisma" style="width: 100%;height: 700px">
        </div>

        <div class="item">
            <img src="./static/leatherbootbla4000.jpg" alt="Shoerisma" style="width: 100%;height: 700px">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<div class="container" style="color: darkgrey">
    <div class="jumbotron">
        <h3 style="text-align: center;color: black;">For instant deliveries across the country;</h3>
        <h4 style="text-align: center;color: black">Dial 0774223918 / 0707038320</h4>
    </div>
</div>

    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/matteob2000.jpg">
                <div class="caption">
                    <p>S. Matteo Black Shoes</p>
                    <h4>2000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/matteor2000.jpg">
                <div class="caption">
                    <p>S. Matteo Red Shoes</p>
                    <h4>2000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/moccassino1800.jpg">
                <div class="caption">
                    <p>Classy Moccassino</p>
                    <h4>1800</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/leatherbootbl4000.jpg">
                <div class="caption">
                    <p>Deep Blue Leather Boots</p>
                    <h4>4000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/leatherbootbla4000.jpg">
                <div class="caption">
                    <p>Black Leather Boots</p>
                    <h4>4000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/leatherbootbr4000.jpg">
                <div class="caption">
                    <p>Brown Leather Boots</p>
                    <h4>900</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/addidasslides500.jpg">
                <div class="caption">
                    <p>Addidas Slides</p>
                    <h4>900</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/poloblack1600.jpg">
                <div class="caption">
                    <p>Polo Black Shoes</p>
                    <h4>1600</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/pologrey1600.jpg">
                <div class="caption">
                    <p>Polo Grey Shoes</p>
                    <h4>1600</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/pololaceless1500.jpg">
                <div class="caption">
                    <p>Polo Laceless Shoes</p>
                    <h4>1500</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/rubber11200.jpg">
                <div class="caption">
                    <p>Urban Rubbers</p>
                    <h4>1200</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/timber5000.jpg">
                <div class="caption">
                    <p>Timberland Boots</p>
                    <h4>5000</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/urbancasually1800.jpg">
                <div class="caption">
                    <p>Classy Urbana Shoes</p>
                    <h4>1800</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/vpv1500.jpg">
                <div class="caption">
                    <p>Classy VPV Shoes BR</p>
                    <h4>1500</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/vpvb1500.jpg">
                <div class="caption">
                    <p>Classy VPV Shoes BW</p>
                    <h4>1500</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/shoe2.jpeg">
                <div class="caption">
                    <p>Golden Cap Labels</p>
                    <h4>3000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/poloblack1600.jpg">
                <div class="caption">
                    <p>Polo Black Shoes(Designer)</p>
                    <h4>2000</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div  class="thumbnail">
                <img src="./static/shoe5.jpeg">
                <div class="caption">
                    <p>Official Urbana</p>
                    <h4>4500</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

        #Create query instructions to th DB

        $sql = "SELECT * FROM `project`";

        #Fetch data from the database by issuing the query
        #The data will be stored in the variable "$fetched_results"

        $fetched_results = mysqli_query($conn, $sql);

        #To get individual data use a loop (while loop)

        #Convert fetched data into associative array (key/value)

        while($row = mysqli_fetch_assoc($fetched_results)){

            #For each record in the while loop grab the data in their respective columns

            extract($row);

            echo "
                 
                    <tr>
                        <td>$id</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$email</td>
                        <td>
                            <a href='update.php?user_id=$id&u_firstname=$firstname&u_lastname=$lastname&u_email=$email' class='btn-info' style='padding: 5px;'>Update</a>
                            <a href='delete.php?user_id=$id' class='btn-danger' style='padding: 5px;'>Delete</a>
                        </td>
                    </tr>
                ";
        }
        ?>

        </tbody>
    </table>
</div>



<?php include 'footer.php'?>
