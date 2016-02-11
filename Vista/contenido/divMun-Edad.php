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
                <td class="pointer" onclick="showWindow('divMunEdad');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (Mun - Años) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Aos&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Aos' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardMun-Aos&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/DashboardMun-Aos' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>


        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divMunEdad" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre municipio y la edad de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Armenia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 6 con factor de expansion anual entre 13.68 y 26.68 tienden a tener entre 41 y 48 años  o entre 27 y 34 años
                                        </li>                                        
                                        <li>
                                            Personas con factor de estrato 4, con ingresos entre 300.000 y 400.000 pesos, y factor de expansion anual 13.68 y 26.68 tienden a tener entre 34 y 41 años. 
                                        </li>    
                                        <li>
                                            Personas de estrato 5, con nivel academico de grado 9, y que tienen ingresos inferiores a 100.000 son personas entre 41 y 48 años de edad. 
                                        </li>    
                                        <li>
                                            Personas de estrato 5, con nivel academico de grado 9, y que tienen ingresos etre 100.000 y 200.000 pesos son personas entre 20 y 27 años de edad. 
                                        </li>    
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Barranquilla</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con ingresos inferiores a 100.000 y con factor de expansion anual entre 39.67 y 52.67  tienden a tener entre 20 y 27 años. 
                                        </li>
                                        <li>
                                            Personas de estrato 1, con nivel academico de pregrado o superior, con ingresos inferiores a los 100.000 pesos, y factor de expansion anual entre 39.67 y 52.67 tienden a tener entre 20 y 27 años. 
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
                                            Personas con un nivel academico de pregrado o superior, con ingresos inferiores a 100.000 pesos, y factor de expansion anual entre 26.68 y 39.67 tienden a tener entre 27 y 34 años. 
                                        </li>
                                        <li>
                                            Personas de estrato 2, con ingresos entre 400.000 y 500.000 tienen entre 400.000 y 500.000 años
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cali</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, con ingresos totales entre 400.000 y 500.000 pesos, y con factor de expansion anual entre 65.67 y 78.67 tienden a tener entre 27 y 34 años
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cartagena</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas que tienden a ganar entre 200.000 y 300.000 pesos, y que tienen factor de expansion anual entre 26.68 y 39.67 tienden a tener entre 20 y 27 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cucuta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, con ingresos entre 600.000 y 700.000 pesos tienden a tener entre 34 y 41 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Florencia</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Ibague</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, con ingresos entre 500.000 y 600.000 pesos, y factor de expansion anual entre 26.68 y 39.67 tienden a  tener entre 48 y 55 años. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2, con ingresos entre 600.000 y 700.000 pesos tienden a tener entre 27 y 34 años. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2, con ingresos de 300.000 y 400.000 pesos, con factor de expansion anual entre 13.68 y 26.6 tienden a tener ingresos entre 300.000 y 400.000 pesos. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2, con ingresos de 400.000 y 500.000 pesos, con nivel educativo de pregrado o superior, tienden a tener entre 20 y 27 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Manizales</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, que ganan entre 600.000 y 700.000 pesos, y con factor de expansion anual entre 13.68 y 26.68 tienden a tener entre 20 y 27 años. 
                                        </li>
                                        <li>
                                            Personas de estrato 2, que ganan entre 400.000 y 500.000 pesos, y con factor de expansion anual entre 13.68 y 26.68 tienden a tener menos de 20 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Medellin</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con nivel academico de pregrado o superior, con ingresos entre 500.000 y 600.000 pesos y factor de expansion anual entre 26.68 y 39.67 tienden a ser de estrato 2. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Monteria</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
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
                                            Personas con ingresos entre 100.000 y 200.000 pesos, con nivel educativo de grado 11, que son de estrato 2 tienden a tener entre 20 y 27 años de edad. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Pereira</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Popayan</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas que ganan entre 100.000 y 200.000 pesos, que tienen un nivel academico de basica primaria y que son de estrato 2, tienden a tener entre 20 y 27 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quibdo</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Resto</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos entre 200.000 y 300.000 pesos, con factor de expansion anual entre 65.67 y 78.67 son personas entre los 41 y 48 años. 
                                        </li>
                                        <li>
                                            Personas con un nivel academico de basica primaria, con factor de expansion anual entre 78.67 y 91.66  tienden a ser personas entre 20 y 27 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Riohacha</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 1, con ingresos entre 300.000 y 400.000 pesos y con factor de expansion anual entre 13.68 y 26.68 tienden a tener entre 34 y 41 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santa Marta</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sincelejo</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Tunja</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Valledupar</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Villavicencio</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 3, con ingresos entre 400.000 y 500.000 pesos, y con nivel academico de grado 11, tienden a tener entre 41 y 48 años. 
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

