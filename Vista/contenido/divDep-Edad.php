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
                <td class="pointer" onclick="showWindow('divDepEdad');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashbard (Dep - Edad) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashbardDep-Edad&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;DashbardDep-Edad' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;DashbardDep-Edad&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/DashbardDep-Edad' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>                 

        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divDepEdad" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre departamento y la edad de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Antioquia</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato economico de 2, con un nivel educativo hasta grado 11 y factor de expansion anual mayor a 50 tienen a no tener mas de 31 años

                                        </li>                                        
                                        <li>
                                            Personas con un factor de expansion anual mayor a 79.93 y con un nivel educativo de 9 grado tienden a ser personas mayores a 39 años

                                        </li>                                                    
                                        <li>
                                            Personas que tienen un nivel educativo de basica primaria y que tienen un factor de expansion anual entre 6707 y 114.85 tienden a tener entre 38 y 60 años

                                        </li>                                        
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">                                    
                                    <label>Atlantico</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con factor de expansion anual entre 35.84 y 58.68 tienden a tener mas de 45 años
                                        </li>

                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bogota D.C</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Bolivar</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con un nivel academico de pregrado o superior, con un factor de expansion anual ni mayor a 35 , que son es estrato y que tienen  ingresos  no mayores a 700.000 son personas mayores de 21 años
                                        </li>
                                        <li>
                                            Personas con un factor de expansión anual no mayor a 35.84, que son de estrato 1 y no tienen un nivel academico de grado 11 tienden a ser mayores de 22 años 
                                        </li>
                                        <li>
                                            Personas con un factor de expansión anual no mayor a 35.84, que son de estrato 1 y no tienen un nivel academico de grado 9  tienden a ser mayores de 45 años 
                                        </li>

                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Boyaca</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas con factor de expansion anual no mayor a 18.04, que son de estrato 3 y estudiaron hasta el grado 11 tienden a ser mayores de 24 años

                                        </li>
                                        <li>
                                            Personas con factor de expansion anual no mayor a 18.04, que son de estrato 6 y tienen un nivel academico de pregrado o superior tienden a tener mas de 30 años

                                        </li>                                                                          
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caldas</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas de estrato 3 que tienen factor de expansion anual no mayor a 17.37 no superan los 29 años
                                        </li>
                                        <li>
                                            Las personas con factor de expansion anual no mayor a 16.50, que son de estrato 3, que tiene un nivel academico de grado 9, que pagan una entidad de salud no superan los 46 años
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Caqueta</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas de estrato 4, con un nivel academico de pregrado o superior, que pagan una entidad de salud y con ingresos de 192.000 tienden a ser personas de 25 a 31 años
                                        </li>                                           
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 4, con nivel academico de grado 11 y factor de expansion anual menor a 17.37 son mayores de 28 años
                                        </li>
                                        <li>
                                            Hombres de estrato 3, con nivel academico hasta el grado 11, que cotizan a una entidad de salud y que tienen in factor de expansion anual menor a 16.50 son menores de 43 años
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">                                    
                                    <label>Cesar</label>
                                    <ul class="reglas">
                                        <li>
                                            Lod hombres con un nivel academico de grado 11, que son de estrato 4 y con un factor de expansion anual menor a 16.50 tienden a tener entre  19 y 24 años
                                        </li>     
                                        <li>
                                            Las mujeres de estrato 4, con un nivel academico de pregrado o superior, que pagan una entidad de salud y con factor de expansion anual menor a 19.64 tieden a tener entre 29 y 36 años.
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cordoba</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas que tienen un nivel educativo de grado 11, que son de estrato 3 y con factor de expansion anual mayor a 200 no son mayores de 26 años
                                        </li>

                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Cundinamarca</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Choco</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Huila</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres que son de estrato 1, con un nivel educativo de grado 9 , con factor de expansion anual entre 12.20 y 17.37 tienden a ser personas mayores de 33 años.
                                        </li>  
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>La Guajira</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 4, que pagan una entidad de salud y que tienen un factor de expansion anual inferior a 18.04 tienden a ser personas menores de 36 años
                                        </li>   
                                        <li>
                                            Las mujeres de estrato 1, que cotizan en una entidad de salud, y que tienen un factor de expansion anual entre 8.29 y 18.04 no tienen mas de 29 años
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Magdalena</label>
                                    <ul class="reglas">
                                        <li>
                                            Las personas de estrato 3, con un nivel educativo de basica primaria, con ingresos mayores a 83.333 pesos y con factor de expansion anual menor de 16.50 tieden a ser personas mayores de 40 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Meta</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 1, con nivel academico hasta grado 9, con factor de expansion anual entre 12.20 y 17.3 7 son mayores de 27 años
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Nariño</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres de estrato 1, que cotizan a una entidad de salud, con un estudio de basica primaria y factor de expansion anual entre 12.20 y 17.37 son menores de 47 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Norte de Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 2, con nivel academico de grado 11, y con factor de expansion anual de maximo 50 tienden a ser menores de 23 años. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Quindio</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 6, con un nivel academico de grado 11 y con factor de expansion anual entre 9.03 y 18.04 son personas entre 27 y 47 años.
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2 que cotizan a una entidad de salud,  con nivel academico de basica primaria  y  factor de expansion anual menor a 70.40  son mayores de 48 años. 
                                        </li>
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Risaralda</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres de estrato 1, que cotizan alguna entidad de salud, con nivel academico de grado 11 y con factor de expansion anual entre 16.50 y 35.84 son menores de 31 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Santander</label>
                                    <ul class="reglas">
                                        <li>
                                            Las mujeres de estrato 2, con un nivel academico de basica primaria, con un factor de expansion anual de entre 15.71 y 35.84 son menores de 39 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Sucre</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Tolima</label>
                                    <ul class="reglas">
                                        <li>
                                            Los hombres con un nivel academico de pregrado o superior, que cotizan a una entidad de salud, y con un factor de expansion anual de 16.50 y 35.84 tienden a ser mayores de 29 años. 
                                        </li>                                        
                                    </ul>
                                </li>
                                <li onclick="accionReglas(this);">
                                    <label>Valle del Cauca</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
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
