<?php
    session_start();
    include "php/init.php";
    $pageTitle = "Sign Up For Companies";
?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>

    <?php include 'navbar.php'; ?>

        <!-- Company SignUp -->

        <div class="companySignUp">
            <div class="container">
                <form class="form-horizontal signMainForm" id="form1">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company Name" />
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="" selected disabled>Company Size</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="" selected disabled>Industry</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="" selected disabled>Location</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number" />
                    </div>
                    <div class="form-group">
                        <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                    </div>
                </form>
                <div class="packages">
                    <p>What package suites you best? <a class="btn btn-danger btn-xs">You can try it for free for 3 weeks.</a></p>
                    <div class="period">
                        <span>1 Month</span>
                        <span>3 Months</span>
                        <span>6 Months</span>
                        <span>1 Years</span>
                    </div>
                    <div class="offers">
                        <div class="col-sm-3">
                            <div class="special">Most Selected</div>
                            <div class="offer">
                                <h2>Economy</h2>
                                <p>This is Economy</p>
                                <span>10$/Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ol>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="special">Best Selling</div>
                            <div class="offer">
                                <h2>Economy</h2>
                                <p>This is Economy</p>
                                <span>10$/Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ol>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer">
                                <h2>Economy</h2>
                                <p>This is Economy</p>
                                <span>10$/Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ol>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer">
                                <h2>Economy</h2>
                                <p>This is Economy</p>
                                <span>10$/Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ol>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                </div>
                <form class="form-horizontal accessForm">
                    <p>Write your access information</p>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" form="form1"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" form="form1"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" form="form1"/>
                    </div>
                    <div class="form-group">
                        <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                    </div>
                </form>
                <form class="finalStep">
                    <div class="col-sm-7">
                        <div class="final">
                            <p class="lead">
                                Here is the final step your plan is <span>Silver</span>
                                <br /> for
                                <select class="form-control">
                                    <option value="">1 Month</option>
                                    <option value="">3 Months</option>
                                    <option value="">6 Months</option>
                                    <option value="">1 Year</option>
                                </select>
                            </p>
                            <p class="lead">
                                Credit card number
                                <input type="text" class="form-control" />
                            </p>
                            <p class="lead">
                                Payment type
                                <input type="radio" id="visa" name="payment" form="form1" />
                                <label for="visa">Visa</label>
                                <input type="radio" id="master" name="payment" form="form1" />
                                <label for="master">Master Card</label>
                            </p>
                            <p class="lead">
                                Pin code
                                <input type="text" class="form-control" />
                            </p>
                            <button type="button" class="btn btn-default">Review</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="reviewBlock">
                            <p class="lead">Sub total:<span>100$</span></p>
                            <p class="lead">Taxes:<span>20$</span></p>
                            <p class="lead">Total:<span>120$</span></p>
                            <a href="profile.php" type="submit" class="btn btn-success btn-block" form="form1">Checkout</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Company SignUp -->

    <?php include 'footer.php'; ?>

    <?php require 'scripts.php'; ?>
    </body>
</html>