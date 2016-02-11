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
                <td class="pointer" onclick="showWindow('divDepIng');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (Dep - Ing) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Ing&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Ing' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Ing&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/DashboardDep-Ing' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>

        </table>



        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divDepIng" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre departamento y los ingresos economicos de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Antioquia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un estrato economico de 2, con un nivel academico basica primaria hasta el grado 11 y factor de expansion anual no mayor a 100 tienden a tener ingresos menores a 460.000.                                           
                                        </li>                                        
                                        <li>
                                            Personas con un estrato economico de 6, con factor de expansion anual mayor a 53 tienden a tener salarios no mayores a 833.333 pesos. 
                                        </li>                                                    
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Atlantico</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un factor de expansion anual entre 35.84 y 58.69, que son de estrato 2 o 3 y contizan a un servicio de salud tienen ingresos no mayores a 405.000 pesos
                                        </li>
                                        <li>
                                            Hombres con factor de expansion anual mayor a 50, que son de estrato 5 y tienen un nivel educativo hasta grado 11 tienen ingresos no mayores a 200.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bogota D.C</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encuentra informacion.                                          
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bolivar</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con un factor de expansion anual no mayor a 35 y que son es estrato 2 tienden a no tener ingresos no mayores a 700.000
                                        </li>
                                        <li>
                                            Los hombres con factor de expansion anual no mayor a 35, que son de estrato 1, que aportan a alguna entidad de salud, con estudios de grado 11 y que son mayores de 19 años tienden a  tener ingresos no mayores de 470.000
                                        </li>
                                        <li>
                                            Las personas de estrato 4 que no tienen un factor de expansio anual mayor a 35.84 tienden a tener ingresos no mayores a 150.000                                         
                                        </li>
                                        <li>
                                            Personas con factor de expansion anual no mayor a 35.84 que son de estrato 1, tienen un nivel educativo de basica primaria y son mayores de 37 años, tienden a tener ingresos mayores a 120.000
                                        </li>
                                        <li>
                                            Hombres que son de estrato 2, con factor de expansion anual menores a 35.84, que cotizan en alguna entidad de salud, que tienen un nivel academico de grado 11 tienen ingresos no superiores a 720.000
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Boyaca</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas con un factor de expansion anual no mayor a 18.04, que son de estrato 3, que estudiaron hasta el grado 9, que pagan un servicio de salud y son mayores de 19 años tienden a ganar 125.000
                                        </li>
                                        <li>
                                            Las personas con un factor de expansion anual no mayor a 18.04, que son de estrato 5, que tienen un nivel academico de pregrado o superior y no pagan un servicio de salud tienden a ganar menos de 520.000 pesos
                                        </li>
                                        <li>
                                            Personas que tienen un factor de expansion anual menor a 70.40, que no tienen ningun tipo de estudio tienden a ganar mas de 75.000 pesos                                          
                                        </li>
                                        <li>
                                            Personas con un factor de expansion anual entre 60.14 y 70.40, con nivel academico de basica primaria tienden a ganar no mas de 215.000
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caldas</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con factor de expansion anual entre 12.20 y 17.37 que son de estrato 5 tienden a ganar no mas de 50.000 pesos                                          
                                        </li>
                                        <li>
                                            Las mujeres de estrato 3, con un nivel academico de pregrado o superior, con factor de expansion anual a 16.50 tienden a ganar 480.000 pesos
                                        </li>
                                        <li>
                                            Las personas de estrato 3 que tienen mas de 37 años y que tienen un factor de expasion anual inferior a 16.50 no ganan mas de 1.040.000 pesos                                          
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caqueta</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con nivel educativo de basica primaria, que son de estrato 1 y tienen un factor de expansion anual menor a 18.04 no ganan mas de 300.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de grado 11, estrato 4 , que son menores de 46 años y con un factor de expansion anual no mayor a 18.04 tienen ingresos menores de 403.333 pesos
                                        </li>
                                        <li>
                                            Personas de estrato 4, mayores de 25 años, que cotizan una entidad de salud y factor de expansion anual menor a 18.04 tienen ingresos entre 155.000 y 750.000 pesos
                                        </li>
                                        <li>
                                            Los hombres de estrato 6, que no cotizan a una entidad de salud,  que tienen un nivel educativo de pregrado o mayor y que tienen un factor de expansion anual menor a 18.04 tienen ingresos mayores a 300.000                                       
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Cesar</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas de estrato 6, que cotizan a una entidad de salud y con factor de expansion anual no superior a 18.04 tienen salarios inferiores a 550.000                                        
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cordoba</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, con un pregrado o superior, con un factor de expansion anual inferior a 16.50 tienden a no ganar mas de 350.000                                         
                                        </li>
                                        <li>
                                            Hombres de estrato 3 con un nivel academico de pregrado o superior, que no pagan una entidad de salud y con factor de expansion anual etre 13.01 y 16.50 tienden a ganar 590.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cundinamarca</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres que son de estrato 5, con factor de expansion anual entre 50 y 100 tienden a no ganar mas de 100.000 pesos                                      
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Choco</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Huila</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion
                                        </li>                                       
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>La Guajira</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 6, que pagan una entidad de salud y que tienen un factor de expansion anual inferior a 18.04 tienden a ganar menos de 460.000                                            
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Magdalena</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 6, que cotizan a una entidad de salud, con factor de expansion anual inferior a 18.04 no ganan mas de 600.000 pesos                                           
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Meta</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 1, con nivel educativo de basica primaria, con factor de expansion anual entre 13.68 y 17.37 tienden a ganar no mas de 410.000 pesos                                           
                                        </li>
                                        <li>
                                            Personas mayores de 24 años, con un nivel academico de pregrado o superior, con factor de expansion anual menor a 17.37 tienden a ganar mas de 308.333 pesos
                                        </li>
                                        <li>
                                            Persona s mayores de 20 años con un nivel educativo de grado 11, que son de estrato w y con un factor de expansion anual entre 12.24 y 16.50 tienden a ganar mas de 566.667 pesos                                          
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Nariño</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas mayores a 20 años, con un nivel academico de grado 11, que cotizan a una entidad de salud y que no tienen un factor de expansion anual superior a 16.50 tienden a no ganar mas de 530.000 pesos                                          
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Norte de Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 2 con factor de expansion anual entre 16.50 y 35.84 no ganan mas de 441.666 pesos.                                        
                                        </li>
                                        <li>
                                            Los hombres de estrato 2 con un nivel academico de grado 11, con un factor de expansion anual menor a 60.14 tienden a no  ganar mas de 650.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quindio</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 4, con un nivel academico de basica primaria, que cotizan a una entidad de salud, y que tienen un factor de expansion anual menor a 19.64 ganan mas de 163.333 pesos.                                         
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Risaralda</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 1, moenores de 33 años, con factor de expansion anual entre 16.50 y 35.84 tienden a ganar mas de 325.000 pesos
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 2, con un nivel educativo de grado 11, menores de 26 años no superan ingresos de 650.000 pesos.
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sucre</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion                                          
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Tolima</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Valle del Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres de estrato 2, con un nivel academico de grado 11, con un factor de expansion anual entre 50.02 y 79.93 tienden a no ganar mas de 166.000 pesos
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
