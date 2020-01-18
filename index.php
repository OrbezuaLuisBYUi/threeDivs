<!DOCTYPE html>
<html>
<head lang="en">
    <!--This is the CDN to connect with CSS and JS-->
    <link rel="stylesheet" href="css/main.css">
    <script
            type="text/javascript" src="js/mainjavascript.js">
    </script>
    <!--This is the CDN to connect with Jquery-->
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

    </script>
    <!--This is the CDN to connect with BootstrapCDN CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--This is the CDN to connect with BootstrapCDN Javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--This is the CDN to connect with Jquery BootstrapCDN  Complete JavaScript Bundle-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <title>HTML-Side</title>
</head>


<body>
<div  align="center">
    <h1>
        poner aqui explicacion
    </h1>
</div>
<div style="margin: 20px">
    <div class="box-body">
        <div class="box-group" id="accordion">
            <div class="panel box box-primary">


                <div id="div1" class="div box-header with-border border border-primary ">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        text1
                    </a>
                    <input type="text" placeholder="Enter your color" id="textBox">
                    <button onclick="changeColor()" class="btn btn-outline-primary">Change color</button>
                    <!--This is to charnge color using Jquery -->
                    <button onclick="changeColorJquery()" class="btn btn-outline-primary">Change color-Jquery</button>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                        Genesis:
                        2 And the afear of you and the dread of you shall be upon every beast of the earth, and upon
                        every fowl of the air, upon all that moveth upon the earth, and upon all the fishes of the sea;
                        into your hand are they delivered.
                    </div>
                </div>

                <div class="div box-header with-border border border-secondary">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        text2
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in">
                    <div class="box-body">
                        Genesis:
                        10 And with every living creature that is with you, of the fowl, of the cattle, and of every
                        beast of the earth with you; from all that go out of the ark, to every beast of the earth.
                    </div>
                </div>


                <div class="div box-header with-border border border-success" id="div3">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        text3
                    </a>
                    <!--This is to charnge color using fade in Jquery -->
                    <button onclick="changeColorFade()" class="btn btn-outline-primary">Change color-Fade</button>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in">
                    <div class="box-body">
                        Genesis:
                        11 And I will establish my covenant with you; neither shall all flesh be cut off any more by
                        the waters of a flood; neither shall there any more be a aflood to bdestroy the cearth.

                        12 And God said, This is the token of the covenant which I make between me and you and every
                        living creature that is with you, for perpetual generations:

                        13 I do set my bow in the cloud, and it shall be for a token of a covenant between
                        me and the earth.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="activeDive()" class="btn btn-outline-primary">Click me</button>
</div>

</body>
</html>