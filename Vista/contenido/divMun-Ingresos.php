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
        <script id="ApiTableu" type='text/javascript' src='https://public.tableausoftware.com/javascripts/api/viz_v1.js'></script>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <br>     
                </td>
                <td class="pointer" onclick="showWindow('divMunIng');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (Mun - Ingre) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Ingre&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Ingre' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Ingre&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/DashboardMun-Ingre' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>


        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divMunIng" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre municipio y los ingresos economicos de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Armenia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 6, con nivel educativo de grado 11, y con factor de expansion anual entre 13.68 y 26.68 tienden a ganar no mas de 100.000 pesos
                                        </li>                                        
                                        <li>
                                            Personas de estrato 4, con nivel academico de grado 9 y con factor de expansion anual de 13.68 y 26.68 tienden a ganar entre 100.000 y 200.000 pesos
                                        </li>                                                    
                                        <li>
                                            Personas de estrato 4, con nivel academico de grado 9 , que tienen entre 41 y 48 años o entre 20 y 27 tienden a ganar entre 400.000 y 600.000 pesos 
                                        </li>
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Barranquilla</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, con factor de expansion anual entre 39.67 y 52.67, y que tienen entre 20 y 27 años con nivel academico de grado 11 tienden a ganar entre 200.000 y 300.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bogota D.C</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bucaramanga</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, con factor de expansion anual entre 39.67 y 52.67 tienden a ganar entre 400.000 y 500.000 pesos
                                        </li>
                                        <li>
                                            Personas de estrato 3, con nivel academico de basica primaria, con factor de expansion anual de 39.67 y 52.67 tienden a ser estrato 3. 
                                        </li>                                      
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cali</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas entre 41-48 años, con nivel educativo de grado 9, con factor de expansion anual entre 78.67 y 91.66 tienden a no ganar mas de 100.000 pesos
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cartagena</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con factor de expansion anual entre 26.68 y 39.67, tienden a ganar entre 200.000 y 300.000 pesos
                                        </li>
                                        <li>
                                            Personas con un nivel academico de grado 9, con factor de expansion anual entre 26.68 y 39.67 tienden a ganar entre 100.000 y 200.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cucuta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas entre 20 y 27 años, que son de estrato 2, con factor de expansion anual entre 26.68 y 39.67 tienden a ganar entre 300.000 y 400.000 pesos. 
                                        </li>  
                                        <li>
                                            Personas entre 20 y 27 años, que son de estrato 1, con nivel academico de grado 11, y factor de expansion anual entre 13.68 y 26.68 tienden a ganar entre 500.000 y 600.000 pesos. 
                                        </li>  
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Florencia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 6, que tienen entre 48 y 55 años tienden a tener ingresos entre 700.000 y 800.000 pesos. 
                                        </li>
                                        <li>
                                            Personas de estrato 6, que tienen entre 41 y 48 años,  con nivel academico de pregrado o superior tienen a tener ingresos superiores a los 900.000 pesos. 
                                        </li>
                                        <li>
                                            Personas de estrato 6, que tienen entre 34 y 41 años, con nivel academico de grado 11 tienden a ganar entre 200.000 y 300.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Ibague</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, entre 27  y 34 años, con factor de expansion anual de 13.68 y 26.68 tienden a ganar entre 400.000 y 500.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Manizales</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres que tienen un nivel academico de grado 11, tienen ingresos inferiores a los 600.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Los hombres que tienen un nivel academico de grado 11, tienden a tener salarios entre los 600.000 y 1.200.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas con un nivel academico de basica primaria, que tienen entre 34 y 41 años, y con factor de expansion anual entre 13.68 y 26.68 tienden a ganar entre 300.000 y 400.000 pesos. 
                                        </li>                                           
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Medellin</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion.
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Monteria</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, con  un nivel educativo de basica primaria y que tienen entre 27 y 34 años tienden a ganar entre 400.000 y 500.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2, con  un nivel educativo de basica primaria y que tienen entre 41 y 48 años tienden a ganar entre 200.000 y 300.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Neiva</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                       
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Pasto</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, que tienen entre 20 y 27 años tienden a ganar entre 300.000 y 400.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Pereira</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, que tienen entre 27 y 34 años, con factor de expansion anual entre 13.68 y 26.68 tienden a tener ingresos entre 400.000 y 500.000 pesos. 
                                        </li>   
                                        <li>
                                            Personas de estrato 1, con un nivel educativo de grado 11, y con factor de expansion anual entre 12.68 y 26.68 tienden a ganar entre 500.000 y 600.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Popayan</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 4, con un nivel educativo de de basica primaria o hasta grado 9, y que tienen entre 34 y 48 tienden a ganar entre 200.000 y 300.000 pesos mensuales. 
                                        </li>                                       
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quibdo</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas de estrato 5, con nivel educativo de pregrado o superior tienden a ganar entre 100.000 y 200.000 pesos. 
                                        </li> 
                                        <li>
                                            Personas de estrato 1, si ningun nivel educativo, que tienen entre 34 y 41 años tienden a ganar menos de 100.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Resto</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel educativo de basica primaria, con factor de expansion anual entre 26.68 y 39.67 tieden a tener  ingresos entre 300.000 y 400.000 pesos
                                        </li>                                       
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Riohacha</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con estrato 6, entre los 20 y 27 años con un nivel academico de pregrado o superior tienden a ganar entre 500.000 y 600.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 6, entre los 27 y 34 años tienden a ganar entre 400.000  y 500.000 pesos. 
                                        </li>
                                        <li>
                                            Personas de estrato 4, entre los 20 y 27 años, con un nivel academico de pregrado o superior tienden a ganar entre 100.000 y 200.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santa Marta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 5, con edad entre 34 y 41 años y factor de expansion anual entre 13.68 y 26.68 tienden a ganar entre 100.000 y 200.000 pesos. 
                                        </li> 
                                        <li>
                                            Personas de estraro 1, con un nivel academico de grado 9, y con factor de expansion anual entre 13.68 y 26.68 tienden a ganar entre 700.000 y 800.000 pesos. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sincelejo</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 5, que tienen entre 48 y 55 años tienden a ganar entre 100.000 y 200.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Tunja</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 6, con edad entre 48 y 55 años tienden a ganar mas de 900.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 6, con nivel academico de grado 9, tienden a ganar entre 700.000 y 800.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 6, con edad entre 34 y 41 años y con nivel academico de pregrado o superior tienden a ganar entre 200.000 y 300.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Valledupar</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 4, con un nivel academico de basica primaria, tienden a ganar entre 600.000 y 700.000 pesos. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Villavicencio</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, que tienen factor de expansion anual entre 26.68 y 39.67 tienden a tener ingresos entre 800.000 y 900.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>                
                </table> 
            </div>           
        </div>        

    </body>
</html>
