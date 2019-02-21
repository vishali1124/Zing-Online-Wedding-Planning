<?php
require 'dbConnect.php';

session_start();
$connect = mysql_connect("localhost","root","","zing")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="meta" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="addons.css" >
    <link rel="shortcut icon" href="logo.png" alt="logo" >
    <title>AddOns</title>

    <style>
        #adv {
            height: 800px;
            width: 250px;
        }

        .slids {
            display: none;
            height: 800px;
            width: 250px;
        }

        .AddCart{
            background-color: purple ;
            color: white;
            font-size: 15px ;
            border-radius: 0.6em;
            margin-left: 80px;
            margin-right: 80px;
        }

        .SaveWish{
            background-color: purple ;
            color: white;
            font-size: 15px ;
            border-radius: 0.6em;
            margin-left: 65px;
            margin-right: 65px;
        }

        .h{
            color:grey;
            margin-left: 100px;
            font-size: 50px;
            font-family: "Times New Roman";
        }

        .next{
            background-color: purple;
            color: white;
            font-size: 20px;
            margin-right: 25px;
        }
    </style>

</head>
<body>
<div id="sec1">
    <table>
        <tr  height="45px"></tr>
        <tr height="154px" >
            <td width="60px"></td>
            <td width="324px"><img  src="zing.png" alt="logo" height="154px" width="324px"></td>
            <td width="1500px"></td>
            <td width="1500px"></td>
            <td width="1500px"></td>
            <td width="1000px"></td>
            <td><img  src="user.png" alt="logo" height="100px" width="100px"></td>
            <td width="1200px">
                <h3>dilperera</h3>
                <h3><a href="index.html">Logout</h3>
            </td>
        </tr>
    </table>
</div>

<div>

    <!--navigation bar-->
    <nav id="nav1">
        <table>
            <td>
                <tr><a href="index.html" class="b"><b>Home</b></a></tr>
                <tr><a href="AboutZING.html" class="b"><b>About Us</b></a></tr>
                <tr><a href="login_2.html" class="b"><b>Themes</b></a></tr>
                <tr><a href="login_2.html" class="b"><b>Add-ons</b></a></tr>
                <tr><a href="login_2.html" class="b"><b>Order</b></a></tr>
                <tr><a href="Contact.html" class="b"><b>Contact Us</b></a></tr>
            </td>
        </table>


    </nav>

    <!-- aside -->
    <aside id="sec2">
        <div>
            <br><br>

            <a href="GroupProject.html"><h3 style="margin-left: 30px"><b>>Packages</b></h3></a>

            <a href="proceedToAddons.html"><h3 style="margin-left: 30px"><b>>Add-Ons</b></h3></a>

        </div>

        <br/>

        <div id="adv">
            <img class="slids" src="adv1.jpg"/>
            <img class="slids" src="adv2.jpg"/>
            <img class="slids" src="adv3.gif"/>
            <img class="slids" src="adv4.jpg"/>
            <img class="slids" src="adv5.jpg"/>
            <img class="slids" src="adv6.gif"/>
            <img class="slids" src="adv7.jpg"/>
        </div>
        <!--script for sliding advertisement-->
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

        <!--video-->
        <div id="video">
            <table>
                <tr height="5px"></tr>
                <tr height="40px">
                    <td><video width="250px" controls autoplay muted><source src="adv1.mp4" type="video/mp4" ></video></td>
                </tr>
                <tr height="5px"></tr>
                <tr height="40px">
                    <td><video width="250px" controls autoplay muted><source src="adv2.mp4" type="video/mp4" ></video></td>
                </tr>
            </table>
        </div>
    </aside>

    <!--line-->
    <section id="sec5"></section>

    <!-- main part -->
    <section id="sec3">

        <br/>

        <p class="h"> Vehicle </p>

        <!--vehicle-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="av1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Vehicle 1</h3>
                        <h3 align="center">Unit Price: 55000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="av2.jpg" width="250" height="180">
                        <h3 align="center">Vehicle 2</h3>
                        <h3 align="center">Unit Price: 80000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="av5.jpg" width="250" height="180">
                        <h3 align="center">Vehicle 3</h3>
                        <h3 align="center">Unit Price: 60000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="av3.jpg" width="250" height="180">
                        <h3 align="center">Vehicle 4</h3>
                        <h3 align="center">Unit Price: 75000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="av4.jpg" width="250" height="180">
                        <h3 align="center">Vehicle 5</h3>
                        <h3 align="center">Unit Price: 60000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>

        <br>

        <p class="h"> Lights </p>
        <!--Lights-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="al1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Lights 1</h3>
                        <h3 align="center">Unit Price: 40000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="al2.jpg" width="250" height="180">
                        <h3 align="center">Lights 2</h3>
                        <h3 align="center">Unit Price: 65000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="al3.jpg" width="250" height="180">
                        <h3 align="center">Lights 3</h3>
                        <h3 align="center">Unit Price: 60000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="al4.jpg" width="250" height="180">
                        <h3 align="center">Lights 4</h3>
                        <h3 align="center">Unit Price: 55000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="al5.jpg" width="250" height="180">
                        <h3 align="center">Lights 5</h3>
                        <h3 align="center">Unit Price: 48000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Table Decorations </p>
        <!--table-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="at1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Table 1</h3>
                        <h3 align="center">Unit Price: 15000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="at2.jpg" width="250" height="180">
                        <h3 align="center">Table 2</h3>
                        <h3 align="center">Unit Price: 9500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="at3.jpg" width="250" height="180">
                        <h3 align="center">Table 3</h3>
                        <h3 align="center">Unit Price: 12000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="at4.jpg" width="250" height="180">
                        <h3 align="center">Table 4</h3>
                        <h3 align="center">Unit Price: 18000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="at5.jpg" width="250" height="180">
                        <h3 align="center">Table 5</h3>
                        <h3 align="center">Unit Price: 25000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>

        <br/>

        <p class="h"> Invitation Cards </p>

        <!--invitation-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ai1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Card 1</h3>
                        <h3 align="center">Unit Price: 150/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ai2.jpg" width="250" height="180">
                        <h3 align="center">Card 2</h3>
                        <h3 align="center">Unit Price: 120/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ai3.jpg" width="250" height="180">
                        <h3 align="center">Card 3</h3>
                        <h3 align="center">Unit Price: 100/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ai4.jpg" width="250" height="180">
                        <h3 align="center">Card 4</h3>
                        <h3 align="center">Unit Price: 130/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ai5.jpg" width="250" height="180">
                        <h3 align="center">Card 5</h3>
                        <h3 align="center">Unit Price: 180/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>

        <br/>

        <p class="h"> Photography </p>

        <!--photo-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ap1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Photography 1</h3>
                        <h3 align="center">Unit Price: 150000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ap2.jpg" width="250" height="180">
                        <h3 align="center">Photography 2</h3>
                        <h3 align="center">Unit Price: 135000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ap3.jpg" width="250" height="180">
                        <h3 align="center">Photography 3</h3>
                        <h3 align="center">Unit Price: 100000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ap4.jpg" width="250" height="180">
                        <h3 align="center">Photography 4</h3>
                        <h3 align="center">Unit Price: 75000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ap5.jpg" width="250" height="180">
                        <h3 align="center">Photography 5</h3>
                        <h3 align="center">Unit Price: 18000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>

        <br/>

        <p class="h"> Band </p>

        <!--Band-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ab1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Band 1</h3>
                        <h3 align="center">Unit Price: 50000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ab2.jpg" width="250" height="180">
                        <h3 align="center">Band 2</h3>
                        <h3 align="center">Unit Price: 80000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ab3.jpg" width="250" height="180">
                        <h3 align="center">Band 3</h3>
                        <h3 align="center">Unit Price: 100000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ab4.jpg" width="250" height="180">
                        <h3 align="center">Band 4</h3>
                        <h3 align="center">Unit Price: 75000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ab5.jpg" width="250" height="180">
                        <h3 align="center">Band 5</h3>
                        <h3 align="center">Unit Price: 60000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h">  Bridal Bouquets </p>

        <!-- Bridal Bouquets-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="abq1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Bouquets 1</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abq2.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 2</h3>
                        <h3 align="center">Unit Price: 3000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abq3.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 3</h3>
                        <h3 align="center">Unit Price: 7000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="abq4.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 4</h3>
                        <h3 align="center">Unit Price: 3000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abq5.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 5</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Bridal Shoes </p>

        <!--b.shose-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="abs1.jpg" width="250" height="180"><br/>
                        <h3 align="center"> B.Shoes 1</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abs2.jpg" width="250" height="180">
                        <h3 align="center">B.Shoes  2</h3>
                        <h3 align="center">Unit Price: 8000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abs3.jpg" width="250" height="180">
                        <h3 align="center">B.Shoes  3</h3>
                        <h3 align="center">Unit Price: 6000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="abs4.jpg" width="250" height="180">
                        <h3 align="center">B.Shoes  4</h3>
                        <h3 align="center">Unit Price: 7500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abs5.jpg" width="250" height="180">
                        <h3 align="center">B.Shoes  5</h3>
                        <h3 align="center">Unit Price: 6000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Headbands </p>

        <!--headBands-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ah1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Headband 1</h3>
                        <h3 align="center">Unit Price: 1000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ah2.jpg" width="250" height="180">
                        <h3 align="center">Headband 2</h3>
                        <h3 align="center">Unit Price: 600/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ah3.jpg" width="250" height="180">
                        <h3 align="center">Headband 3</h3>
                        <h3 align="center">Unit Price: 800/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ah4.jpg" width="250" height="180">
                        <h3 align="center">Headband 4</h3>
                        <h3 align="center">Unit Price: 1500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ah5.jpg" width="250" height="180">
                        <h3 align="center">Headband 5</h3>
                        <h3 align="center">Unit Price: 950/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>

        <br/>

        <p class="h"> Hairstylist </p>

        <!--hairstylist-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ahs1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Hairstylist 1</h3>
                        <h3 align="center">Unit Price: 15000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ahs2.jpg" width="250" height="180">
                        <h3 align="center">Hairstylist 2</h3>
                        <h3 align="center">Unit Price: 8000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ahs3.jpg" width="250" height="180">
                        <h3 align="center">Hairstylist 3</h3>
                        <h3 align="center">Unit Price: 10000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ahs4.jpg" width="250" height="180">
                        <h3 align="center">Hairstylist 4</h3>
                        <h3 align="center">Unit Price: 25000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ahs5.jpg" width="250" height="180">
                        <h3 align="center">Hairstylist 5</h3>
                        <h3 align="center">Unit Price: 30000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Makeup </p>

        <!--Makeup-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="am1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Makeup 1</h3>
                        <h3 align="center">Unit Price: 250000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="am2.jpg" width="250" height="180">
                        <h3 align="center">Makeup 2</h3>
                        <h3 align="center">Unit Price: 100000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="am3.jpg" width="250" height="180">
                        <h3 align="center">Makeup 3</h3>
                        <h3 align="center">Unit Price: 90000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="am4.jpg" width="250" height="180">
                        <h3 align="center">Makeup 4</h3>
                        <h3 align="center">Unit Price: 150000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="am5.jpg" width="250" height="180">
                        <h3 align="center">Makeup 5</h3>
                        <h3 align="center">Unit Price: 100000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Groom Shoes </p>

        <!--groom shoes-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="ags1.jpg" width="250" height="180"><br/>
                        <h3 align="center">G.Shose 1</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ags2.jpg" width="250" height="180">
                        <h3 align="center">G.Shose 2</h3>
                        <h3 align="center">Unit Price: 8000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ags3.jpg" width="250" height="180">
                        <h3 align="center">G.Shose 3</h3>
                        <h3 align="center">Unit Price: 6000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="ags4.jpg" width="250" height="180">
                        <h3 align="center">G.Shose 4</h3>
                        <h3 align="center">Unit Price: 7500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="ags5.jpg" width="250" height="180">
                        <h3 align="center">G.Shose 5</h3>
                        <h3 align="center">Unit Price: 6500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h"> Bridesmaid dresses </p>

        <!--bdress-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="abm1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Dress 1</h3>
                        <h3 align="center">Unit Price: 15000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abm2.jpg" width="250" height="180">
                        <h3 align="center">Dress 2</h3>
                        <h3 align="center">Unit Price: 10000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abm3.jpg" width="250" height="180">
                        <h3 align="center">Dress 3</h3>
                        <h3 align="center">Unit Price: 20000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="abm4.jpg" width="250" height="180">
                        <h3 align="center">Dress 4</h3>
                        <h3 align="center">Unit Price: 7500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abm5.jpg" width="250" height="180">
                        <h3 align="center">Dress 5</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>
        </form>
        <br/>

        <p class="h">  Bridesmaid Bouquets</p>

        <!-- Bridal Bouquets-->
        <form name="Addons" action="review_order.php?">
            <table align= "center">
                <tr>
                    <td rowspan="3">
                        <img src="abb1.jpg" width="250" height="180"><br/>
                        <h3 align="center">Bouquets 1</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abb2.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 2</h3>
                        <h3 align="center">Unit Price: 2000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abb3.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 3</h3>
                        <h3 align="center">Unit Price: 2500/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART"  ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST">
                    </td>
                </tr>
            </table>

            <br/><br/><br/>


            <table align="center">
                <tr>
                    <td rowspan="3">
                        <img src="abb4.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 4</h3>
                        <h3 align="center">Unit Price: 3000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                    <td rowspan="3">
                        <img src="abb5.jpg" width="250" height="180">
                        <h3 align="center">BBouquets 5</h3>
                        <h3 align="center">Unit Price: 5000/=</h3>
                        <h3 align="center">Quantity<input type="number" class="num" placeholder="1" name="num" style="width: 50px"/></h3>
                        <input type="submit" name="AddCart" class="AddCart" value="ADD to CART" ><br/><br/>
                        <input type="submit" name="SaveWish" class="SaveWish" value="ADD to WISHLIST" >
                    </td>
                </tr>
            </table>

            <br/><br/><br/><br/>
        </form>
    </section>
</div>

<!-- Follow Au -->

<div id="sec4">
    <table>

        <tr>
            <td width="250px"></td>
            <td> <h1>Follow Us</h1> </td>
            <td width="50px"></td>
            <td><img src="f.png" height="50px" width="50px"></td>
            <td width="50px"></td>
            <td><img src="v.jpg" height="50px" width="50px"></td>
            <td width="50px"></td>
            <td><img src="w.png" height="90px" width="90px"></td>
            <td width="50px"></td>
            <td><img src="t.png" height="50px" width="50px"></td>
            <td width="50px"></td>
            <td><img src="g.png" height="50px" width="50px"></td>
        </tr>
    </table>
</div>

<div>
    <?php
    $query = "select * from wp_zing_addons order BY name ";
    $result = mysql_query($connect,$query);

    if(mysql_num_rows($result) > 0)
    {
        while ($row = mysql_fetch_array($result))
        {

        }
    }
        ?>

    <form method="post" action="review.html?" <?php echo $row["username"]; ?> >


</div>


<!--coppy right & email -->

<footer id="footer">
    <h4 align="center" style="padding-top: 9px">© 2017 Zing.com. All rights reserved | zingweddingplanners@gmail.com</h4>
</footer>

</body>
</html>