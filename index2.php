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
                <li><a href="#tab1" class="tab">Departamento</a></li> 
                <li><a href="#tab2" class="tab">Municipio</a></li> 
                <li><a href="#tab3" class="tab">Posicion laboral</a></li> 
                <li><a href="#tab4" class="tab">Genero</a></li> 
            </ul> 


            <div id="tab1" class="isTab">
                
                <table>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divDep-Ingresos', this)"> Desplegar Ingresos ciudadanos
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divDep-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divDep-Expansion', this)"> Desplegar estrato de los ciudadanos 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divDep-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divDep-Edad', this)"> Desplegar Edad 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divDep-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>
            </div>



            <div id="tab2" class="isTab">
                <table>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divMun-Ingresos', this)"> Desplegar Ingresos ciudadanos
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divMun-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divMun-Expansion', this)"> Desplegar estrato de los ciudadanos 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divMun-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divMun-Edad', this)"> Desplegar Edad 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divMun-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>
            </div>

            <div id="tab3" class="isTab">
                <table>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divLab-Ingresos', this)"> Desplegar Ingresos ciudadanos
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divLab-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divLab-Expansion', this)"> Desplegar estrato de los ciudadanos 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divLab-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divLab-Edad', this)"> Desplegar Edad 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divLab-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>
            </div>

            <div id="tab4" class="isTab">
                <table>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divGen-Ingresos', this)"> Desplegar Ingresos ciudadanos
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divGen-Ingresos" class="informationSection"></div>
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divGen-Expansion', this)"> Desplegar estrato de los ciudadanos ciudadanos 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divGen-Expansion" class="informationSection"></div>
                        </td>
                    </tr>     
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" onclick="accionPestaña('divGen-Edad', this)"> Desplegar Edad 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divGen-Edad" class="informationSection"></div>
                        </td>
                    </tr>        
                </table>
            </div>
        </div>     
    </body>
</html>
