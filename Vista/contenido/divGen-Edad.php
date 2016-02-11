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
                <td class="pointer" onclick="showWindow('divGenEdad');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (genero - años) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-aos&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-aos' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardgenero-aos&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/Dashboardgenero-aos' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>                 

        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divGenEdad" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre el genero y la edad de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Hombres</label>
                                    <ul class="reglas">
                                        <li>
                                            Personas de estrato 4, que tienen un pregrado o superior, que tienen ingresos entre 620.000 y 900.000 pesos, tienen entre 34 y 49 años. 
                                        </li>                                        
                                        <li>
                                            Personas de estrato 2, con univel academico de grado 9, que tienen ingresos entre 300.000 y 620.000 pesos tienden a tener entre 27 y 41 años. 
                                        </li>                                                                                            
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Mujeres</label>
                                    <ul class="reglas">
                                        <li>
                                            Mujeres de estrato 3, con un nivel academico de grado 9, que tienen ingresos entre 300.000  y 620.000 pesos y que cotizan en alguna entidad de salud tienen entre 34 y 41 años. 
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
