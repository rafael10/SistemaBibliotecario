<?php
/**
 * @author Rafael López
 * @copyright 2014
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Biblioteca Central de Centro Am&eacute;rica</title>
    <link href="css/portada.css" rel="stylesheet" type="text/css" />
    <link href="css/lateral_nuevo.css" rel="stylesheet" type="text/css" />
    <link href="css/slider3.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery-1.3.2.js"></script>

<!-- jQuery (required) & jQuery UI (for this demo only) -->
	<link rel="stylesheet" href="ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	<script src="ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

	<!-- Anything Slider optional plugins -->
	<script src="js/jquery.easing.1.2.js"></script>

	<!-- Anything Slider -->
	<link rel="stylesheet" href="css/anythingslider.css">
	<script src="js/jquery.anythingslider.js"></script>

	<!-- Ideally, add the stylesheet(s) you are going to use here,
	otherwise they are loaded and appended to the <head> automatically and will over-ride the IE stylesheet below -->
	<link rel="stylesheet" href="css/theme-metallic.css" media="screen">

	<!-- AnythingSlider optional FX extension -->
	<script src="js/jquery.anythingslider.fx.js"></script>

	<!-- Demos page only 
	<link rel="stylesheet" href="demos/css/page.css"> -->
	<link rel="stylesheet" href="demos/colorbox/colorbox.css">
	<script src="demos/js/demo.js"></script>
	<script src="demos/colorbox/jquery.colorbox-min.js"></script>

	<!-- Syntax highlighting -->
	<script src="js/jquery.chili-2.2.js"></script>
	<script src="js/recipes.js"></script>


<!-- Anything Slider optional plugins, but needed so the embeded video controls will work in IE -->
	<!-- http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js -->
	<script src="js/swfobject.js"></script>

<!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
	<script src="js/jquery.anythingslider.video.js"></script>

	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider({
				resizeContents      : true,
				addWmodeToObject    : 'transparent',
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Vimeo-iframe', 'Vimeo-embed', 'YouTube-iframe', 'YouTube-embed', 'HTML5 Video'][index - 1];
				}
			});
		});
	</script>

<!--código para la biblioteca -->
<script type="text/javascript">

        //<![CDATA[
         var urlGet=(function(){
            var rv = {},s=[];
            var gets = location.href.match(/[a-zA-Z0-9-_]+=[^&]+/g);
            if (gets){
                var l = gets.length; 
                for(var i =0; i<l; i++){
                    s = gets[i].split('='); 
                    rv[s[0]]=s[1];
                }
            }

            return rv; 
        })();

        $(document).ready(function() {
            // add style block to DOM to prevent uPortal from filtering it out
            var colorhex = urlGet.c || '900000';
$('head').append('<style type="text/css">.selectContainer{float:left; width:114px} .searchtextContainer{float:left;} #gq{margin-left:-4px;} #scholar_logo{position:relative; top:14px} #scan_start_l{margin-left:13px} #jtitle{margin-left:13px;} form{margin-top:0px} #directly1,#directly2{position:absolute; top:0px; left:-6em} .clearleft{float:left; clear:both} #catalogus_logo, #artikelen_logo{width:84px;} #uba-tabs {width:383px; min-width:300px; height: 235px; min-height:120px;} #uba-tabs.ui-widget {font-family: Arial,Helvetica,sans-serif;} #uba-tabs .ui-widget input, #uba-tabs .ui-widget select {font-family: Arial,Helvetica,sans-serif; font-size: 1em;} #uba-tabs.ui-widget-content {background: #f0f0f0;} #uba-tabs .ui-widget-content a, a {color: #776655;} #uba-tabs .ui-widget-header {border: 1px solid #aaa; background-color: #ccc; color: #222222; font-weight: normal;} #uba-tabs .ui-widget-header a {} #uba-tabs .ui-state-default, #uba-tabs.ui-widget-content {border: 0px; padding-left: 0px; padding-right: 0px;} .ui-state-default, #uba-tabs .ui-widget-header {border: 0px; background: #f0f0f0;} #uba-tabs .ui-state-default {border: 1px solid #d3d3d3; background: #f0f0f0; font-weight: bold; color: #'+colorhex+';} #uba-tabs .ui-state-default a, #uba-tabs .ui-state-default a:link, #uba-tabs .ui-state-default a:visited {color: #'+colorhex+'; text-decoration: none;} #uba-tabs .ui-state-hover, #uba-tabs.ui-widget-content .ui-state-hover, #uba-tabs .ui-widget-header .ui-state-hover, #uba-tabs .ui-state-focus, #uba-tabs.ui-widget-content .ui-state-focus, #uba-tabs .ui-widget-header .ui-state-focus {border: 1px solid #999999; background: #dadada; font-weight: bold; color: #212121;} #uba-tabs .ui-state-hover a, #uba-tabs .ui-state-hover a:hover {color: #212121; text-decoration: none;} #uba-tabs .ui-state-active, #uba-tabs .ui-widget-content .ui-state-active, #uba-tabs .ui-widget-header .ui-state-active {border: 1px solid #aaaaaa; background-color: #'+colorhex+'; font-weight: bold; color: #f0f0f0;} #uba-tabs .ui-state-active a, #uba-tabs .ui-state-active a:link, #uba-tabs .ui-state-active a:visited {color: #fff; text-decoration: none;} #uba-tabs.ui-corner-all, .ui-corner-all {-moz-border-radius: 0px;} #uba-tabs .ui-corner-top {-moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; border-top-left-radius: 4px; -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; border-top-right-radius: 4px;} #uba-tabs.ui-tabs .ui-tabs-nav {margin: 0; padding: 0; font-size: 1em;} #uba-tabs.ui-tabs .ui-tabs-nav li {margin: 0;padding-right:4px;padding-left:4px;} #uba-tabs.ui-tabs .ui-tabs-nav li a {float: center; padding: .3em .4em; text-decoration: none;  border-bottom: 1px solid #D3D3D3;} #uba-tabs.ui-tabs .ui-tabs-nav li.ui-tabs-selected a {cursor: text;} #uba-tabs.ui-tabs .ui-tabs-panel {padding: 0.4em 0.4em;} #artikelen input.search, #catalogus input.search {margin-top:-1px} #uba-tabs input.search { color: #353500; font-weight: bold; background-color: #999900; background: url(img/buttons1-bg.png) repeat; border: 1px solid #999900; float: none; padding-left: 15px; padding-right: 15px; padding-top: 3px; padding-bottom:3px;} #uba-tabs input.search:hover {cursor: pointer; background: url(img/buttons1-bg.png); background-color: #999900;} #uba-tabs input.ubazoekvak {font: 1.2em Arial,Helvetica,sans-serif; color: #6c6c6c; border-width: 1px; border-color: #000; width: 250px; height: 14px; background: url(http://www.csic.es/internet1-theme/images/forms/input_shadow.png) no-repeat; background-color: #f0f0f0; padding: 3px;} #uba-tabs input.ubazoekvak:focus {background: url(); background-color: #ffffcc; color: #333333;} #uba-tabs input.ubazoekvak {background-color: #ffffcc;} #uba-tabs #scholar input.ubazoekvak{width: 290px;} #uba-tabs select.ubazoekvak {font: 12px Arial,Helvetica,sans-serif; width: 110px; background-color: #f3f2ec;} #uba-tabs .search_links a {text-decoration: none; padding-left:0px; padding-right:3px; color: #d50206; font-weight: normal;} #uba-tabs .search_links a:hover {color: #900000; text-decoration: none; font-weight: normal;} #uba-tabs .container {padding-top: 0em; padding-left: 0;} #uba-tabs .logo {float:left; height:80px} #uba-tabs .logo img {margin-right: 10px;} #uba-tabs .search_box {padding-top:30px; padding-left:15px} #uba-tabs .search_links { font-size: 1.1em; margin-top: 15px; padding-top: 5px ; padding-right: 10px; text-align: left; line-height: 1.7em; margin-left: 10px; float:left; clear:both} #uba-tabs #databases .search_controls{margin-left:48px} #uba-tabs .search_controls {margin-left: 36px; line-height: 1.7em;} #uba-tabs .copyright {line-height: 2em; font-size: 0.7em; display: block; text-align:center;} .fl-theme-uva #uba-tabs .ui-widget-content a {font-weight: normal;} .fl-theme-uva #uba-tabs span input {border: none; margin: 0; background: none;}</style>');
if ($.browser.msie){

                $('head').append('<style type="text/css">#uba-tabs input#find_request_2{width:210px; overflow:hidden; } #uba-tabs #databases input.search, #uba-tabs #elibros input.search, #uba-tabs input.search{position:relative; top:-1px} #scan_start_l{position:relative; top:-2px} #jtitle{position:relative; top:-2px} #uba-tabs #tijdschriften .search_links,#uba-tabs #databases .search_links, #uba-tabs #catalogus .search_links, #uba-tabs #elibros .search_links, #uba-tabs #artikelen .search_links {margin-top:8px;} #uba-tabs .search_links {margin-top:-8px; padding-top:0px} #uba-tabs input.ubazoekvak{} #artikelen input.search, #catalogus input.search {margin-top:-3px} input.search{margin-top:-2px} #uba-tabs input.ubazoekvak{line-height:15px}</style>');

            }

          
            // deprecated, but proper selectors didn't work in uPortal context

            if ($.browser.msie && $.browser.version >= 7) {

                $('#uba-tabs input.search').css('vertical-align', 'middle');

                $('#uba-tabs #catalogus input.ubazoekvak').css('width', '250px');

            }
            // create tabbed layout

            $('#uba-tabs').tabs();
            // add onfocus event to text input fields and only clear fields once              

            $(':text').one('focus', function() {

                $(this).val("");

            });

            // add onsubmit event and check against default values
            $('form').submit(
                function() {
                    var frm = $(this).attr('id');

                    switch (frm) {

                        case ('catalogusform'):

                            onSubmitForm();

                            break;

                        case ('artikelenform'):

                            if (document.artikelenform.find_request_2.value == "" || document.artikelenform.find_request_2.value == "-- Palabras en cualquier campo --") {

                                document.artikelenform.find_request_2.value = "";

                            }

                            break;

                        case ('az_user_form'):

                            if (document.az_user_form.param_pattern_value.value == "" || document.az_user_form.param_pattern_value.value == "-- Titulo de la revista --") { 

                                document.az_user_form.param_pattern_value.value = "";

                            }

                            break;

                        case ('databasesform'):

                            if (document.databasesform.scan_start.value == "" || document.databasesform.scan_start.value == "-- Nombre de la base de datos --") { 

                                document.databasesform.scan_start.value = "";

                            }

                            break;

                        case ('scholarform'):

                            $('#scholarform').attr('method', 'GET'); // this form doesn't accept POST

                            if (document.scholarform.q.value == "" || document.scholarform.q.value == "- Palabras en cualquier campo -") { 

                                document.scholarform.q.value = "";

                            }

                            break;

                    }

                });

                var mt = $.browser.msie ? 0 : 0; 

                $('body').css({marginTop:mt+'px'});

        });
            // todo: jQuery-fy this

            function onSubmitForm() {

                if (document.catalogusform.request.value == "" || document.catalogusform.request.value == "- Palabras en cualquier campo -") {

                    document.catalogusform.request.value = "";

                    document.catalogusform.func.value = "find-b-0";

                } else {

                    var index = document.catalogusform.find_code.value.toString();

                    var request = document.catalogusform.request.value;

      

                    if (index.match(/AUT/) || index.match(/PAO/) || index.match(/ISBN/)) {

                        if (request.match(/^".*[^\?]"$/)) {

                            request = "\"" + request.replace(/^"/, "").replace(/"$/, "") + "?\"";

                        } else if (request.match(/[^\?"]$/)) {

                                request = request + "?";

                        }

                        document.catalogusform.request.value = request;

                    }

                }

             }
        //]]>

        </script>


</head>

<body>
<div id="contenedor">
 </ul>
        
<script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-55px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-55px'},200);
                    }
                );
            });
        </script>

<!-- fin pestanas laterales-->
<div id="cabecera_sup">
<!--<a href=""target="_blank" Title="Acceso a Catálogos Biblioteca" >Catálogos-->
</div><!-- fin cabecera sup-->
<div id="biblioteca">
<a href="index.php">Biblioteca Central de Centro Am&eacute;rica</a>
</div><!--fin biblioteca-->
<div id="menu_sup">
    <a href="" title="Servicios">Servicios</a>
    <a href="" title="Formularios">Formularios</a>
</div><!--fin menu sup-->
