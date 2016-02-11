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
                <td class="pointer" onclick="showWindow('divDepEstrato');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (Dep - Estrato) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Estrato&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Estrato' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashboardDep-Estrato&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/DashboardDep-Estrato' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table> 



        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divDepEstrato" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre departamento y el estrato de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Antioquia</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres que son contizantes en alguna entidad de salud y que tinen un factor de expansion anual cercano  a 69.29 tienden a ser de estrato 2
                                        </li>                                        
                                        <li>
                                            Personas con un estrato economico de 5 tienden a tener un factor de expansion anual no mayor a 100
                                        </li>                                                    
                                        <li>
                                            Personas con un nivel academico de basica primaria a grado 11, con ingresos menores a 460.000 y factor de expansion anual no mayor a 100 tienden a ser estrato 2
                                        </li>
                                        <li>
                                            Personas con un estrato economico de 3 y que cotizan en alguna entidad de salud, tienden a tener un factor de expansion anual de 50.02 y 99.41

                                        </li>
                                        <li>
                                            Personas con un nivel educativo de basica secundaria y  factor de expansion anual mayor a 50 tienden a ser estrato 2

                                        </li>
                                        <li>
                                            Personas que son cotizantes a alguna entidad de salud , que no desean trabajar mas horas y que tienen un factor de expansion anual no mayor a 100 tienden a ser estrato 1

                                        </li>
                                        <li>
                                            Las mujeres que tienen un nivel academico hasta grado 11 y tienen un factor de expansion anual mayor a 50 tienden a ser estrato 3

                                        </li>
                                        <li>
                                            Las personas con un factor de expansion anual mayor a 53.38 que son de estrato 2 tienden a tener un nivel academico de pregrado o superior. 

                                        </li>
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Atlantico</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres con factor de expansion anual entre 50 y 100, con nuvel educativo de grado 11 tienden a ser estrato 2
                                        </li>
                                        <li>
                                            Personas con un factor de expansion anual no mayor a 35 y nivel educativo de basica primaria tienden a ser de estatro 1
                                        </li>     
                                        <li>
                                            Hombres con un factor de expansion anual entre 53.38 y 67.81, nivel educativo de grado 11 tienden a ser de estrato 2
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
                                    <label>Bolivar</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un factor de expansion anual no mayor a 35, que cotizan a alguna entidad de salud y que tienen un nivel educativo de basica primaria tienden a ser estrato 1

                                        </li>
                                        <li>
                                            Las mujeres que tienen un nivel academico de pregrado o superior y que su factor de expansion anual no es mayor a 35.84 tienden a ser estrato 2

                                        </li>
                                        <li>
                                            Las personas con nivel educativo de pregrado o superior, que aportan a alguna entidad de salud y que no ganan mas de 252.000 pesos tienden a ser de estrato 1

                                        </li>
                                        <li>
                                            Personas con factor de expansion anual no mayor a 35.84, que cotizan a una entidad de salud, con un nivel academico de grado 11 y que son mayores de 26 años tienden a ser de estato 2

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Boyaca</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres que tienen un factor de expansion anual no mayor a 18.04, que estudiaron hasta el grado tienden a ser de estrato 6
                                        </li>
                                        <li>
                                            Las personas que tienen un factor de expansion anual no mayor a 18.04 que tienen un nivel academico de basica primaria, tienden a ser de estrato 4
                                        </li>
                                        <li>
                                            Los hombres que tienen un factor de expansion anual no mayor a 18.04, que pagan un servicio de salud y que tienen un ingreso mayor a 240.000 pesos tienden a ser estrato 6
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caldas</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con factor de expansion anual no mayor a 17.37 tienden a ser de estrato 1

                                        </li>
                                        <li>
                                            Hombres con ingresos de 233.333 pesos, que tienen un factor de expansion anual inferior a 16.50, con un nivel academico de basica primaria y que pagan alguna entidad de salud tienden a ser estrato 2

                                        </li>
                                        <li>
                                            Las personas mayores de 17 años, que no desean trabajar mas horas, que tienen un nivel academico de basica primaria, que cotizan a una entidad de salud tienden a ser de estrato 2

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caqueta</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres que tienen un nivel academico de pregrado o superior, y que tienen un factor de expansion anual inferior a 18.04 tienden a se estrato 6

                                        </li>   
                                        <li>
                                            Las personas que tienen un nivel academico de grado 11, que pagan un servicio de salud y tienen un factor de expansion anual menor a 18.04 tienden a ser estrato 4

                                        </li>
                                        <li>
                                            Los hombre mayores de 24 años, que tienen un nivel academico hasta el grado 11, y con factor de expansion anual menor a 18.04 tienden a ser estrato 3

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas mayores a 23 años, que no cotizan una entidad de salud, que tienen un nivel educativo de pregrado o superior y con factor de expansion anual no superior a 18.04 tieden a ser estrato 6

                                        </li>
                                        <li>
                                            Hombre mayores de 21 años, que cotizan una entidad de salud y tienen un nivel academico de grado 11 y con un factor de expansión anual menor a 18.04 tienden a ser estrato 5 o 6

                                        </li>
                                        <li>
                                            Personas con nivel academico de basica primaria, que pagan una entidad de salud, que desean mas horar para trabajar, con factor expansion anual menor a 16.50 tienden a ser de estrato 3

                                        </li>
                                        <li>
                                            Mujeres con nivel academico de grado 11, que cotizan a una entidad de salud y que tienen un factor de expansion anual menor a 16.50 tienden a ser estrato 1

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Cesar</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con ingresos menores a 450.000, que tienen un nivel academico de pregrado o superior, con un factor de expansion anual a 16.37 tienden a ser de estrato 5

                                        </li>     
                                        <li>
                                            Las mujeres con ingresos menores a 250.000 pesos, que no pagan una entidad de salud y con factor de expansion anual menor a 19.64 tienden a ser estrato 4

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cordoba</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres mayores de 47 años, que tienen ingresos inferiores a 102.000 pesos, y con factor de expansion anual inferior a 17.37 tienden a ser estrato 1

                                        </li>
                                        <li>
                                            Las persosas que pagan una entidad de salud, que tienen un nivel academico de grado 11, con ingresos inferiorea a 150.000 pesos mensuales tienden a ser estrato 1

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cundinamarca</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas que tiene un nivel educativo de basica primaria, con un factor de expansion anual de entre 150 y 200 y que pagan una entidad de salud tienden a ser estrato 2

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Choco</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con nivel educativo de grado 11, con ingresos menores a 306.000 y factor de expansion anual menor a 16.50 tienden a ser estrato 1

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Huila</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres que no pagan una entidad de salud, que tienen un nivel academico de pregrado o superior, que son menores de 28 años y con factor de expansion anual menor a 18.04 tienden a ser estrato 6.

                                        </li>  
                                        <li>
                                            Hombres que pagan una entidad de salud, con un nivel academico de grado 11, con un factor de expansion anual de entre 11.22 y 16.50 tienden a ser estrato 5

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>La Guajira</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Magdalena</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con ingresos totales inferiores a 250.000, menores de 35 años, con nivel academico de grado 11 y factor de expansion anual menor de 16.50 tienden a ser estrato 4. 

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Meta</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas mayores de 20 años, con un nivel academico de pregrado o superior, con un factor de expansion anual entre 12.24 y 16.50 tienden a ser de estrato 2.
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Nariño</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres con ingresos menores a 300.000 pesos, que pagan una entidad de salud, y que tienen un factor de expansion entre 12.20 y 17.37 tienden a ser estrato 1

                                        </li>                                        
                                        <li>
                                            Mujeres que tienen un nivel academico de pregrado o superior, que cotizan a una entidad de salud y que su factor de expansion anual no supera los 19.64 tienden a ser de estrato 2. 

                                        </li>   
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Norte de Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con ingresos inferiores a 425.000 pesos, con un nivel educativo de hasta grado 9, y factor de expansion anual entre 35.84 y 58.69 tienden a ser de estrato 2
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quindio</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres que no cotizan a una entidad de salud,  y que son menores de 47 años con un factor de expansion anual menor a 16.50 tienden a ser de estrato 5.

                                        </li>                                        
                                        <li>
                                            Hombres con un nivel academico de pregrado o superior, con un factor de expansion anual entre 11.43 y 19.64 que cotizan a una entidad de salud tienden a ser estrato 4. 

                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Risaralda</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con nivel educativo de basica primaria,  que pagan alguna entidad de salud y con factor de expansion anual entre 16.50 y 35.84 tienden a ser estrato 1. 

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con nivel educativo de basica primaria,  que pagan alguna entidad de salud y con factor de expansion anual entre 16.50 y 35.84 tienden a ser estrato 1. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sucre</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas menores de 32 años, que tienen un nivel academico de basica primaria, que cotizan a alguna entidad de salud y tienen un factor de expansion anual menor a 16.43 tienden a ser de estrato 1. 

                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Tolima</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Valle del Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de 11, que son mayores de 20 años, que no pagan una entidad de salud y que tienen un factor de expansion anual mayor a 50.02 tienden a ser de estrato 3
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
