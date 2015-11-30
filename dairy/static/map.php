a<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="keywords" content="jQuery Splitter, AngularJS, Angular Splitter, AngularJS Splitter, Splitter Widget, Splitter, jqxSplitter" />
        <title id='Description'> Dairy Manager</title>
        <link rel="stylesheet" href="libs/dojo_toolkit/dijit/themes/soria/soria.css" />
        <link rel="stylesheet" href="libs/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css" type="text/css" />

        <script src="libs/dojo_toolkit/dojo/dojo.js" data-dojo-config="async: true,parseOnLoad: true, gfxRenderer: 'svg,silverlight,vml,canvas'"></script>
        <script type="text/javascript" src="libs/scripts/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="libs/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="libs/jqwidgets/jqxsplitter.js"></script>
        <script type="text/javascript" src="libs/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src= "libs/OpenLayers-2.13.1/OpenLayers.js"></script>
        
        <link rel="stylesheet" type="text/css" href="libs/ext-3.4.1/resources/css/ext-all.css">
        <link rel="stylesheet" type="text/css" href="libs/ext-3.4.1/resources/css/xtheme-gray.css">
        <script type="text/javascript" src="libs/ext-3.4.1/adapter/ext/ext-base.js"></script>
        <script type="text/javascript" src="libs/ext-3.4.1/ext-all-debug.js"></script>
        <script type="text/javascript" src="libs/ext-3.4.1/ext-all.js"></script>
        
        <link rel="stylesheet" type="text/css" href="libs/GeoExt/resources/css/popup.css">
        <link rel="stylesheet" type="text/css" href="libs/GeoExt/resources/css/layerlegend.css">
        <link rel="stylesheet" type="text/css" href="libs/GeoExt/resources/css/gxtheme-gray.css">
        <script type="text/javascript" src="libs/GeoExt/script/GeoExt.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body onload = "init()" class="soria">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Dairy Know-how</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div id="mainSplitter">
            <div>
                Query Skeleton
                <strong> Search By : </strong> </br></br>
                <input type = "radio" id = "SupplierName" name = "Supplier_name" checked = "checked" data-dojo-type = "dijit/form/RadioButton" > Supplier Category: </br>(e.g. Agrovet,Hay,Molasses,Vet) </input></br>
                <input type = "text" name = "supp_name" placeholder = "Enter Name" class = "txtbox" id = "supp_name" data-dojo-type = "dijit/form/TextBox" /></br>
                <button dojoType="dijit.form.Button" onclick = "querySupplierLayer()" type="submit" name="submitSupplierName" value="Supplier_name" class="myButton" tabIndex=> Search</button> </br></br>
            </div>
            <div>
                <div id="rightSplitter">
                    <div id="map-id">
                        Map Panel
                    </div>
                    <div id= "bottomPanel">   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>