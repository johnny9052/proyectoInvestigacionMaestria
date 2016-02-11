<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>       
        <script type="text/javascript" src="Vista/recursos/jquery/jquery-1.9.1.js"></script>   
        <script type="text/javascript" src="Vista/recursos/js/navegacion.js"></script>   
        <link href="Vista/recursos/css/pestana.css" type="text/css" rel="stylesheet">
        <link href="Vista/recursos/css/general.css" type="text/css" rel="stylesheet">        

        <!--PLUGIN STYLE-EVENTS FANCYBOX -->
        <script type="text/javascript" src="Vista/recursos/fancy/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="Vista/recursos/fancy/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script type="text/javascript" src="Vista/recursos/fancy/jquery.mousewheel-3.0.6.pack.js"></script>        
    </head>
    <body>



        <div id="contentTabs"> 
            <ul> 
                <li><a href="#tab0" class="tab">Inicio</a></li> 
                <li><a href="#tab1" class="tab">Departamento</a></li> 
                <li><a href="#tab2" class="tab">Municipio</a></li> 
                <li><a href="#tab3" class="tab">Posicion laboral</a></li> 
                <li><a href="#tab4" class="tab">Genero</a></li> 
            </ul> 

            <div id="tab0" class="isTab">
                <table class="logo">

                    <tr>
                        <td>
                            <br>                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <image src="Vista/recursos/imagenes/logo.png">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="contenidoInf">
                                Marco de referencia para la implementacion del mapa de ruta establecido en los lineamientos
                            </label>
                            <br>
                            <label class="contenidoInf">
                                nacionales de apertura de datos del sector publico y su integracion con procesos de 
                            </label>
                            <br>
                            <label class="contenidoInf">
                                descubrimiento de conocimiento e inteligencia de negocios
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style=" text-align: center;font-size: 7pt;">
                            <div>
                                <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">Datos del sector laboral en Colombia en el año 2010</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Gobernación de Caldas</span>  <br> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Reconocimiento- <br>SinObraDerivada 4.0 Internacional License</a>.
                            </div>
                        </td>
                    </tr>
                </table>


            </div>

            <div id="tab1" class="isTab">
                <table>
                    <tr>
                        <td>                            
                            <input type="checkbox" onclick="accionPestaña('divDep-Ingresos', this)"> <span class="contenido">Desplegar Ingresos ciudadanos</span>
                            <input type="checkbox" onclick="accionPestaña('divDep-Expansion', this)"> <span class="contenido">Desplegar estrato de los ciudadanos </span>
                            <input type="checkbox" onclick="accionPestaña('divDep-Edad', this)"> <span class="contenido">Desplegar Edad </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divDep-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div id="divDep-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     
                    <tr>
                        <td>
                            <div id="divDep-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>
                <div>                    
                </div>   

                <br>

                <table class="logoMini">
                    <tr>
                        <td>
                            <image src="Vista/recursos/imagenes/logo.png" style="width: 110px; height: 110px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="contenidoInf">
                                Maestria en Ingenieria Computacional
                            </label>
                            <br>
                            <label class="contenidoInf">
                                Universidad de Caldas - Manizales
                            </label>
                        </td>
                    </tr>
                </table>
            </div>



            <div id="tab2" class="isTab">
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" onclick="accionPestaña('divMun-Ingresos', this)"> <span class="contenido">Desplegar Ingresos ciudadanos</span>
                            <input type="checkbox" onclick="accionPestaña('divMun-Expansion', this)"> <span class="contenido">Desplegar estrato de los ciudadanos </span>
                            <input type="checkbox" onclick="accionPestaña('divMun-Edad', this)"> <span class="contenido">Desplegar Edad </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divMun-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div id="divMun-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     
                    <tr>
                        <td>
                            <div id="divMun-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>

                <br>

                <table class="logoMini">
                    <tr>
                        <td>
                            <image src="Vista/recursos/imagenes/logo.png" style="width: 110px; height: 110px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="contenidoInf">
                                Maestria en Ingenieria Computacional
                            </label>
                            <br>
                            <label class="contenidoInf">
                                Universidad de Caldas - Manizales
                            </label>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="tab3" class="isTab">
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" onclick="accionPestaña('divLab-Ingresos', this)"> <span class="contenido">Desplegar Ingresos ciudadanos</span>
                            <input type="checkbox" onclick="accionPestaña('divLab-Expansion', this)"> <span class="contenido">Desplegar estrato de los ciudadanos </span>
                            <input type="checkbox" onclick="accionPestaña('divLab-Edad', this)"> <span class="contenido">Desplegar Edad </span>                                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divLab-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div id="divLab-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     
                    <tr>
                        <td>
                            <div id="divLab-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>

                <br>

                <table class="logoMini">
                    <tr>
                        <td>
                            <image src="Vista/recursos/imagenes/logo.png" style="width: 110px; height: 110px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="contenidoInf">
                                Maestria en Ingenieria Computacional
                            </label>
                            <br>
                            <label class="contenidoInf">
                                Universidad de Caldas - Manizales
                            </label>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="tab4" class="isTab">
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" onclick="accionPestaña('divGen-Ingresos', this)"> <span class="contenido">Desplegar Ingresos ciudadanos</span>
                            <input type="checkbox" onclick="accionPestaña('divGen-Expansion', this)"> <span class="contenido">Desplegar estrato de los ciudadanos </span>
                            <input type="checkbox" onclick="accionPestaña('divGen-Edad', this)"> <span class="contenido">Desplegar Edad </span>                                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divGen-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div id="divGen-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     
                    <tr>
                        <td>
                            <div id="divGen-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>

                <br>

                <table class="logoMini">
                    <tr>
                        <td>
                            <image src="Vista/recursos/imagenes/logo.png" style="width: 110px; height: 110px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="contenidoInf">
                                Maestria en Ingenieria Computacional
                            </label>
                            <br>
                            <label class="contenidoInf">
                                Universidad de Caldas - Manizales
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>     
    </body>
</html>
