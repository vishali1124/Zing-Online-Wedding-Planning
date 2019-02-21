<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="meta" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bill.css" >
    <title>Bill</title>
    <link rel="shortcut icon" href="LogoSample_aa.png" alt="logo">
</head>
<body>
    <div id="sec1">
        <table>
            <tr  height="45px"></tr>
            <tr height="154px" >
                <td width="60px"></td>
                <td width="324px"><img  src="123.png" alt="logo" height="154px" width="324px"></td>
                <td width="1500px"></td>
                <td width="1500px"></td>
                <td width="1500px"></td>
                <td width="1000px"></td>
                <td><img  src="user.png" alt="logo" height="100px" width="100px"></td>
                <td width="1200px">
                    <h3>dilperera</h3>
                    <h3><a href="index.html">Logout</a></h3>
                </td>
            </tr>
        </table>
    </div>


        <!--navigation bar-->
        <nav id="nav1">
            <table>
                <td>
                    <tr><button class="b"> <a href="#"><b>Home</b></a> </button></tr>
                    <tr><button class="b"> <a href="#"><b>About Us</b></a> </button></tr>
                    <tr><button class="b"> <a href="#"><b>Themes</b></a> </button></tr>
                    <tr><button class="b"> <a href="#"><b>Add-ons</b></a> </button></tr>
                    <tr> <button class="b"> <a href="#"><b>Order</b></a> </button></tr>
                    <tr> <button class="b"> <a href="#"><b>Contact Us</b></a> </button></tr>
                </td>
            </table>


        </nav>

        <!-- This part for your use -->
    <aside id="sec2">
        <table align="center" class="tab">

            <br/><br/><br/><br/><br/><br/>
            <tr>
                <td><a href="wishlist.html"> >Wishlist</a></td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td><a href="review_order.html"> >Review Order</a></td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td><a href="Payment_form.php"> >Payment Form</a></td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td><a href="bill.php"> >Bills</a></td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

            <tr>
                <td>  </td>
            </tr>

        </table>

        <br/><br/><br/>

        <!-- for advertisements-->

        <div id="adv">
            <img class="slids" src="adv1.jpg"/>
            <img class="slids" src="adv4.jpg"/>
            <img class="slids" src="adv5.jpg"/>
            <img class="slids" src="adv7.jpg"/>
        </div>

        <!-- sliding for ads-->
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("slids");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>




    </aside>

        <section id="sec5"></section>

        <!-- This part for your use -->
        <section id="sec3">

            <?php
                if(isset($_POST["billNo"]) &&  isset($_POST["username"]) &&  isset($_POST["packageName"]) &&
                    isset($_POST["packagePrice"]) &&  isset($_POST["billNo"]) &&  isset($_POST["billNo"]) &&
                isset($_POST["item"]) &&  isset($_POST["iName"]) &&  isset($_POST["iPrice"]))
                {
                    $billNo = $_POST["billNo"];
                    $username = $_POST["username"];
                    $qty = $_POST["quantity"];
                    $item = $_POST["item"];
                    $iName = $_POST["iName"];
                    $iPrice = $_POST["iPrice"];
                }

                else{
                    $error = "one or more items should be selected";
                    echo $error;
                }

            ?>

            <br/><br/><br/>

            <table align="right">

                <tr>
                    <td>
                        <button class="butn">
                            <a href="Refund.php"><img src="reff.png" height="30px" width="100px"></a>
                        </button>
                    </td>
                </tr>
            </table>

            <br/><br/><br/>

        <div class="back">
            <table class="bill_1">

                    <tr>
                        <td width="650px"><h1><b>Invoice</b></h1></td>
                        <td><img src="123.png" alt="logo" height="54px" width="150px"></td>
                    </tr>

                    <tr>
                        <td>No:25,</td>
                    </tr>

                    <tr>
                        <td>kolpity,</td>
                    </tr>

                    <tr>
                        <td>colombo 03</td>
                    </tr>

                    <tr>
                        <td>zingweddingplanners@gmail.com</td>
                    </tr>
            </table>

            <br/><br/>

            <table class="bill_2">

                    <tr>
                        <td width="500px"><b>Bill to</b></td>
                        <td><b>Invoice number:</b></td>
                        <td><?php echo $billNo; ?></td>
                    </tr>

                    <tr>
                        <td width="500px">123<?php echo $username; ?></td>
                        <td><b>Invoice date:</b></td>
                        <td>123<?php echo $billdate; ?></td>
                    </tr>

                    <tr>
                        <td>123<?php echo $address; ?></td>
                    </tr>

                    <tr>
                        <td>123<?php echo $contact; ?></td>
                    </tr>
            </table>

            <br/><br/><br/>

                <table class="bill_3">

                    <tr>
                        <th width="100px"><b>Quantity</b></th>
                        <th width="400px"><b>Description</b></th>
                        <th width="200px"><b>Unit price</b></th>
                        <th width="100px"><b>Amount</b></th>
                    </tr>

                    <tr>
                        <td>  </td>
                    </tr>

                    <tr>
                         <td>  </td>
                    </tr>

                    <tr>
                        <td width="100px"><?php echo $qty; ?></td>
                        <td width="400px"><?php echo $iName; ?></td>
                        <td width="200px"><?php echo $iPrice; ?></td>
                        <td width="100px"><?php echo ($iPrice * $qty); ?></td>
                    </tr>

                </table>

            <table  align="center">
                <tr>
                    <td> </td>
                    <td class="line"></td>
                    <td><a>Terms & condition</a></td>
                </tr>

                <tr>
                    <td class="thank" width="100px">Thank you</td>
                    <td class="line"> </td>
                    <td> Zing pvt(Ltd)</td>
                </tr>

                <tr>
                    <td> </td>
                    <td class="line"> </td>
                    <td>zingweddingplanners@gmail.com</td>
                </tr>

            </table>

        </div>

        </section>

    <!-- Follow Au -->
    <div id="sec4">
        <table>

            <tr>
                <td width="250px"></td>
                <td> <h1>Follow Us</h1> </td>
                <td width="50px"></td>
                <td><img src="f.png" height="50px" width="50px"></td>
                <td width="50px"></td>
                <td><img src="v.png" height="50px" width="50px"></td>
                <td width="50px"></td>
                <td><img src="w.png" height="50px" width="50px"></td>
                <td width="50px"></td>
                <td><img src="t.png" height="50px" width="50px"></td>
                <td width="50px"></td>
                <td><img src="g.png" height="50px" width="50px"></td>
            </tr>
        </table>
    </div>

    <!--coppy right & email -->
    <footer id="footer">
        <h4 align="center" style="padding-top: 9px">© 2017 Zing.com. All rights reserved | zingweddingplanners@gmail.com</h4>
    </footer>
</body>
</html>