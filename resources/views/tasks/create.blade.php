
<!DOCTYPE html>
<html>
<head>
    <title>Order Tracking Form a Flat Responsive Widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Order Tracking Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- custom css file -->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <!-- //custom css file -->

    <!-- google fonts -->
    <link href='{{asset('backend///fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic')}} 'rel='stylesheet' type='text/css'>
    <!-- //google fonts -->

</head>

<body>

<h1  style="font-size: 65px" >ADD NEW TASK </h1>
<div style="font-size: 25px" class="agile-its">
    <h2 style="font-size: 35px" >Task Manager</h2>
    <div style="font-size: 25px" class="w3layouts">
        <div class="photos-upload-view">
            <form class="text-left" method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="agileinfo">
                </div>
                <div class="agileinfo-row">
                    <div class="ferry ferry-from">
                        <label for="inputTitle">Task Title</label>
                        <input type="text" id="inputTitle"
                               name="inputTitle" placeholder="" required="">
                    </div>
                    <div class="ferry ferry-from">
                        <label for="inputContent">Task Content</label>

                        <input type="text" id="inputContent"
                               name="inputContent" placeholder="" required="">
                    </div>

                    <div class="ferry ferry-from">
                        <label for="inputFileName">File Name</label>
                        <input type="text"
                               class="form-control"
                               id="inputFileName"
                               name="inputFileName">

                    </div>
                    <div>
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <label>Due Date</label>

                    <div class="form_box">
                        <div class="select-block1 middle">
                            <select name="date" required="">
                                <option value="">Date</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_box">
                        <div class="select-block1">
                            <select name="month" required="">
                                <option value="">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_box1">
                        <div class="select-block1 last">
                            <select name="year" required="">
                                <option value="">Year</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="wthree-text">
                    <div class="wthreesubmitaits">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </div>
                <div class="wthree-text">
                    <div class="wthreesubmitaits">
                        <input onclick="window.history.go(-1);return false;" type="submit" value="home" >
                    </div>

                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer">
    <p> © 2018 Order Tracking Form. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
</body>
</html>
