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
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (mun - estrato) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardmun-estrato&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardmun-estrato' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardmun-estrato&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/Dashboardmun-estrato' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>


        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divMunEdad" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre municipio y el estrato de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Armenia</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas con nivel educativo de grado 11, con factor de expansion anual entre 26.68 y 39.67 tienden a ser de estrato 5
                                        </li>                                        
                                        <li>
                                            Personas entre 34 y 41 años que ganan entre 500.000 y 600.000 pesos tienden a ser de estrato 6
                                        </li>                                                    
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Barranquilla</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos menores a 100.000 pesos, con factor de expansion anual entre 39.67 y 52.67 , entre 27 y 34 años de edad tienden a ser de estrato 1. 
                                        </li>
                                        <li>
                                            Personas con un nivel academico de grado 11, entre 34 y 41 años, con ingresos entre 100.000 y 200.000 pesos y factor de expansion anual entre 39.67 y 52.67 tienden a ser estrato 2. 
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
                                            Personas con nivel educativo de grado 11, que ganan entre 300.000 y 400.000 pesos y con factor de expansion anual 39.67 y 52.67 tienden a ser de estrato 1. 
                                        </li>
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con ingresos entre 600.000 y 700.000 pesos, con factor de expansion anual entre 26.68 y 39.67 tienden a ser de estrato 2
                                        </li>
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con ingresos entre 300.000 y 400.000 pesos, entre 20 y 27 años y con factor de expansion anual entre 26.68 y 39.67 tienden a ser de estrato 3
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cali</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos entre 300.000 y 400.000 pesos con factor de expansion anual entre 78.67 y 91.66 tienden a ser de estrato 1
                                        </li>
                                        <li>
                                            Personas con ingresos entre 300.000 y 400.000 pesos, con edad entre 41-48 años y con factor de expansion anual entre 65.67 y 78.67 tienden a ser estrato 3
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cartagena</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de grado 9, con ingresos inferiores de 100.000 pesos y que tienen entre 20 y 27 años tienden a ser de estrato 1
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cucuta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, que tienen entre 20 y 27 años, y que tienen un factor de expansion anual entre 26.68 y 39.67 tienden a ser de estrato 3
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Florencia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas menores de 27 años, con nivel academico de grado 9, con ingresos entre 200.000 y 300.000 pesos, tienden a ser estrato 4. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Ibague</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion.  
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Manizales</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
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
                                            Personas entre 41 y 48 años, con ingresos entre 200.000 y 300.000 pesos, y con factor de expansion anual entre 13.68 y 26.68 tienden a ser estrato 1. 
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
                                            Personas con ingresos entre 200.000 y 300.000 pesos, con nivel educativo de grado 11, y entre 41 y 48 años tienden a ser de estrato 2
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
                                            Personas entre los 48 y 55 años de edad, que ganan entre 100.000 y 200.000 pesos, y que tienen un nivel academico de grado 9 tienden a ser de estrato 4. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quibdo</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas con ingresos enrre 200.000 y 300.000 pesos, que tienen entre 34 y 41 años, y tienen un nivel academico de pregrado o superior tienden a ser estrato 4. 
                                        </li>                                        
                                        <li>
                                            Las personas con ingresos entre 100.000 y 200.000 pesos, con un nivel academico de pregrado o superior, y que tienen entre 27 y 34 años tienden a ser estrato 3. 
                                        </li> 
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Resto</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas entre los 27 y 34 años, que tienen un nivel academico de grado 11, y con un factor de expansion anual entre 65. 67 y 78.67 tienden a ser estrato 5. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Riohacha</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santa Marta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos entre 500.000 y 600.000 pesos, con edad entre 27 y 34 años y nivel academico de grado 11 tienden a ser de estrato 3. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sincelejo</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos entre 400.000 y 500.000 pesos, que tienen entre 20 y 27 años y con nivel academico de pregrado o superior tienden a ser estrato 4. 
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
                                            Personas con ingresos entre 500.000 y 600.000 pesos, con nivel academico de basica primaria y factor de expansion anual entre 13.68 y 26.68 tienden a ser estrato 1. 
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
