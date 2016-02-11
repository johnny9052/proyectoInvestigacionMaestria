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
                <td class="pointer" onclick="showWindow('divGenIng');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (genero - ingresos) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-ingresos&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-ingresos' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-ingresos&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/Dashboardgenero-ingresos' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>                 

        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divGenIng" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre el genero y los ingresos economicos de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Hombres</label>
                                    <ul class="reglas">
                                        <li>
                                            Hombres con un nivel academico de pregrado o superior, que pagan alguna entidad de salud, que tienen entre 63 y 70 años, y que son de estrato 6 tienen ingresos menores a 300.000 pesos. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Mujeres</label>
                                    <ul class="reglas">
                                        <li>
                                            Mujeres de estrato 6, con nivel academico de pregrado o superior, entre 34 y 41 años tienden a ganar entre 900.000 y 1.500.000 pesos
                                        </li>                                        
                                        <li>
                                            Mujeres de estrato 6, que tienen entre 49 y 56 años, que cotizan en alguna entidad de salud, y que tienen un nivel academico de pregrado o superior tienden a ganar entre 900.000 y 600.000 pesos. 
                                        </li>                                                    
                                        <li>
                                            Mujeres de estrato 3, que tienen un nivel academico de grado 11 y que tienen entre 20 y 27 años tienden a ganar entre 620.000 y 900.000 pesos. 
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
