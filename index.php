
<?php include("header.php");?>
<div id="caja_imagenes">

<div id="caja_imagenes_izq">

<div id="imagen_izq"><a href="" title=""><img src="img/digital_csic_nuevo.png" alt="" /></a><br/><br/>
<a href="" title=""><img src="img/visita_virtual.png" alt="Visita biblioteca" /></a>

</div><!--fin imagen_izq-->
<div id="imagen_der">
 <ul id="slider3">

  <!-- PARA CONTROL DE IMÁGENES EXPUESTAS EN LA PORTADA WEB. A PARTIR DE MARZO 2014-->
  <!--PRIMERA-->
 <li class="panel1"> <div class="caption-bottom">Los carnet en la Biblioteca Central de Centro Am&eacute;rica son <br />importantes para los alumnos</div><a href="" title="Acceso noticia"  target=""><img src="menu_data/qr_biblio_p2.png" alt="Acceso noticia"></a></li>
 <li class="panel1"> <div class="caption-bottom">8 de marzo. Día Internacional de la Mujer<br />"Mercado de Yucatán" 1930. ACCHS-CSIC</div><a href="" title="Día internacional de la mujer 2014"  target=""><img src="menu_data/dia_de_la_mujer_2014.jpg" alt="Día internacional de la mujer 2014"></a></li>
 <li class="panel1"> <div class="caption-bottom">Science Europe aprueba su hoja de ruta con el acceso abierto como acción clave</div><a href="" title="Science Europe aprueba su hoja de ruta con el acceso abierto como acción clave"  target=""><img src="menu_data/portada_febrero_2013.jpg" alt=""></a></li>
 <li class="panel1"> <div class="caption-bottom">Descubierto un ataúd intacto de la dinastía XVII del Antiguo Egipto</div><a href="" title="Ataud de la dinastía XVII del Antiguo Egipto"  target=""><img src="menu_data/galan_momia.jpg" alt="Ataud de la dinastía XVII del Antiguo Egipto"></a></li>
 <li class="panel1"> <div class="caption-bottom">Mapas de Tomás López en la Biblioteca Central de Centro Am&eacute;rica</div><a href="" title=""  target=""><img src="menu_data/mapa_2014.jpg" alt=""></a>
 </li>
 </ul>
</div><!--fin imagen_der-->

</div><!--fin caja imagenes_izq-->

<div id="actualidad">
<div id="texto_actualidad">

</div><!--fin texto_actualidad-->
<p class="noticias">
 <a href="#" target="" >Hay nuevos libros en la biblioteca buscalos..</a></p>
<p class="noticias">
<a href="#" target="" >Los Mapas y Obras de referencia no se prestan.. </a> </p>
<p class="noticias">
<a href="#" target="" >Solicita ya tu carnet de estudiante</a></p>
<!--<div id="noticias">

<!--**********pestanas lateral********-->
<div id="lateral"><br/>
&nbsp;&nbsp;<a href="" target="" title="Twitter"><img src="img/twitter_peq.png" alt="Twitter" title="Twitter"/></a><br/><br/>
&nbsp;&nbsp;<a href="" target="" title="RSS"><img src="img/rss.png" alt="RSS" title="RSS"/></a><br/><br/>
&nbsp;&nbsp;<a href="" target="" title="Youtube"><img src="img/youtube-gris.png" alt="Youtube" title="Youtube"/></a><br/><br/>
&nbsp;&nbsp;<a href="" target="" title="Pinterest"><img src="img/pinterest_gris.png" alt="Pinterest" title="Pinterest"/></a><br/><br/>
&nbsp;&nbsp;<a href="solo_relleno.php" target="" title="Faqs"><img src="img/faq.png" alt="Faqs" title="Faqs"/></a><br/><br/>

</div><!-- fin lateral-->

</div><!-- fin actualidad-->

<br/><br/>

<div id="caja_destacados">
<div id="destacado_izq">
    <p class="titulo">DESTACAMOS</p>
    <div id="destacado_izq_uno">
        <a href="" target="" title=""><img src="img/elpunto.png"/></a><br />
        <span class="subcabecera">Junio 2014</span>
    </div>
    <div id="destacado_izq_dos">
    <ul class="texto">
      <li>
       <a href="#" title="" target="">
        <strong>Busca el recurso bibliografico que necesites</strong>
       </a>
      </li><br />
    </ul>
    </div>
</div>

<div id="destacado_centro">
<p class="titulo">ACCESOS DIRECTOS</p>
<div id="destacado_centro_uno">
<div id="uba-tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#artikelen" shape="rect"><span id="ln_1">No libros</span></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#catalogus" shape="rect"><span id="ln_0">Libros</span></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#tijdschriften" shape="rect"><span id="ln_2">Revistas</span></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#elibros" shape="rect"><span id="ln_3">Periodicos</span></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#databases" shape="rect"><span id="ln_4">CD</span></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#databases2" shape="rect"><span id="ln_4">DVD</span></a></li>
                
            </ul>
            <div id="catalogus" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <div class="container">
                    <div class="search_container">
                        <div class="search_box" >
                            <form  id="catalogusform" name="catalogusform" method="get" action="" target="_blank" title="Buscar en el cat&aacute;logo de libros de la Biblioteca">
                                    <input name="request" class="ubazoekvak" id="searchfield" value="Palabras en el registro, t&iacute;tulo o autor" type="text"/>
                                    <input class="search" alt="Buscar" type="submit" value="Buscar"/><br/>
                                <span class="search_controls">
 								    <input type="radio" name="find_code" id="param_textSearchType_value" value="WRD"  checked="checked" />
									<label for="param_textSearchType_value" id="p_t_v" >Todo</label>&nbsp;
									<input type="radio" name="find_code" id="contains_type" value="WTI" />
									<label for="contains_type" id="c_t">T&iacute;tulo</label>&nbsp;
									<input type="radio" name="find_code" id="contains_type" value="WAU" />
									<label for="contains_type" id="c_t">Autor</label>&nbsp;
                                </span>

                                <input name="local_base" value="MAD01" type="hidden"/>
                                <input name="func" value="find-b" type="hidden"/>
                                <input id="con_lng_cat" name="con_lng" value="spa" type="hidden"/>
                                <input id="referrer" name="referrer" value="bibliotecas.csic.es" type="hidden"/>
                            </form>
                       </div>
                 </div>
                 </div>
                        <div class="search_links">
                            <span>
                             Buscar libros en el Cat&aacute;logo Bibliogr&aacute;fico de la Biblioteca 
                            </span>
                        </div>
            </div>

            <div id="artikelen" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="container">
                    <div class="search_container">
                        <div class="search_box">
                            <form id="artikelenform" name="artikelenform" method="get" action="" target="_blank"  title="Buscar art&iacute;culos, libros, revistas y mucho m&aacute;s en la  Biblioteca Virtual del CSIC" target="_blank">
                              <div class="searchtextContainer">
                                    <input size="60" name="s.q" type="text" class="ubazoekvak"  value="-- Palabras clave --"> 
                                    <input name="spellcheck" value="true" type="hidden"> 
                                    <input class="search" alt="Buscar" type="submit" value="Buscar"/>
                                </div>
                            </form>
                        </div>
                        <div class="search_links">
                            <span>
                            Buscar recursos que sean diferentes a libros, como Memorias, Mapas, Obras de Referencia, Revistas y mucho m&aacute;s 
                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tijdschriften" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="container">
                    <div class="search_container">
                        <div class="search_box">
                            <form id="az_user_form" name="az_user_form" method="get" accept-charset="UTF-8" action="" target="_blank" title="Buscar revistas">
                                <input type="hidden" name="param_sid_save" value=""/>
                                <input type="hidden" name="param_lang_save" value="spa"/>
                                <input type="hidden" name="param_letter_group_save" value=""/>
                                <input type="hidden" name="param_perform_save" value="searchTitle"/>
                                <input type="hidden" name="param_letter_group_script_save" value=""/>
                                <input type="hidden" name="param_chinese_checkbox_save" value="0"/>
                                <input type="hidden" name="param_services2filter_save" value="getFullTxt"/>
                                <input type="hidden" name="param_current_view_save" value="table"/>
                                <input type="hidden" name="param_jumpToPage_save" value="1"/>
                                <input type="hidden" name="param_type_save" value="textSearch"/>
                                <input type="hidden" name="param_textSearchType_save" value="startsWith"/>
                                <input type="hidden" name="param_type_value" value="textSearch"/>
                                <input type="hidden" name="param_jumpToPage_value" value=""/>
                                <input type="hidden" name="param_chinese_checkbox_value" value=""/>
                                <input id="referrer" name="referrer" value="bibliotecas.csic.es" type="hidden"/>
                                <input type="text" class="ubazoekvak" value="-- T&iacute;tulo de la revista --" name="param_pattern_value" id="param_pattern_value"/>
                                <input class="search" alt="Buscar" type="submit" value="Buscar"/><br/>
                                <span class="search_controls">
                                <input type="radio" name="param_textSearchType_value" id="param_textSearchType_value" value="startsWith"  checked="checked" />
                                <label for="param_textSearchType_value" id="p_t_v" >Empieza por</label>&nbsp;
                                <input type="radio" name="param_textSearchType_value" id="contains_type" value="contains" />
                                <label for="contains_type" id="c_t">Contiene</label>&nbsp;
                                </span>
                           </form>
                        </div>
                    </div>
                </div>
                     <div class="search_links">
                            <span>
                            Buscar revistas por palabras contenidas en su t&iacute;tulo.</a> 
                            </span>
                        </div>
            </div>
            <div id="databases" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="container">
                    <div class="search_container">
                        <div class="search_box">
                           <form id="databasesform" name="databasesform" target="_blank" action="" target="_blank"  method="get" title="Buscar cd de audio educativo">
                               <input type="hidden" value="find-db-1-title" name="func"/>
                                <input type="hidden" value="titles" name="mode"/>
                                <input type="hidden" value="all" name="restricted"/>
                                <input type="hidden" value="N" name="azlist"/>
                                <input type="hidden" value="contains" name="search_type"/>
                                <input id="referrer" name="referrer" value="" type="hidden"/>
                                <input type="text" name="scan_start" id="scan_start" value="-- Palabras clave para audio --" class="ubazoekvak"/>
                                <input class="search" alt="Buscar" type="submit" value="Buscar"/><br/>
                            </form>

                       </div>
                       <div class="search_links">
                            <span>
                            Buscar cd de audio de m&uacute;sica o documentales.<br />
                            Buscar por palabras claves con respecto a lo que necesita</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
                      <div id="databases2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="container">
                    <div class="search_container">
                        <div class="search_box">
                           <form id="databasesform" name="databasesform" target="_blank" action="" method="get" title="Buscar DVD de videos educativos">
                               <input type="hidden" value="find-db-1-title" name="func"/>
                                <input type="hidden" value="titles" name="mode"/>
                                <input type="hidden" value="all" name="restricted"/>
                                <input type="hidden" value="N" name="azlist"/>
                                <input type="hidden" value="contains" name="search_type"/>
                                <input id="referrer" name="referrer" value="" type="hidden"/>
                                <input type="text" name="scan_start" id="scan_start" value="-- Palabras clave para DVD --" class="ubazoekvak"/>
                                <input class="search" alt="Buscar" type="submit" value="Buscar"/><br/>
                            </form>

                       </div>
                       <div class="search_links">
                            <span>
                            Buscar DVD con pel&iacute;culas educativas o documentales.<br />
                            Buscar por palabras claves con respecto a lo que necesita.</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="elibros" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <div class="container">
                    <div class="search_container">
                        <div class="search_box">
                           <form id="scholarform" name="scholarform" target="_blank" action="" title="Buscar peri&oacute;dicos"> 
                            <input type="hidden" name="s.fvf[]" value="IsFullText,true"/>
                            <input type="hidden" name="s.fvf[]" value="ContentType,Book Chapter"/>
                            <input type="hidden" name="s.fvf[]" value="ContentType,Book / eBook"/>
                            <input type="hidden" name="keep_r" value="true"/>
                            <input type="hidden" name="spellcheck" value="true" />
                            <div class="searchtextContainer">
                            <input name="s.q" class="ubazoekvak" id="searchfield" value="-Formato de fecha aaaa-mm-dd -" type="text" accept-charset="utf-8"/>
                            <input class="search" alt="Buscar" type="submit" value="Buscar"/>
                           </div>
                            </form>
                       </div>
                        <div class="search_links">
                            <span>
                           Buscar peri&oacute;dicos por la fecha de publicaci&oacute;n.
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><!--fin dest centro_dos-->
</div><!--fin destacado_centro-->
<div id="destacado_drcha">
    <p class="titulo">TWITTER</p>
    <a class="twitter-timeline"  href="" data-chrome="nofooter noscrollbar"  data-widget-id="318723462988431360"></a>
<!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->
</div><!--fin destacado_izq-->
<br /><br />
</div><!-- fin caja destacados-->
</div><!--fin caja imagenes-->
<?php include("footer.php");?>