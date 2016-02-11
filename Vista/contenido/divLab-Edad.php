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
                <td class="pointer" onclick="showWindow('divLabEdad');">
                    <img src="Vista/recursos/imagenes/document-preview.png" /><span class="contenido">Ver mas</span>
                </td>
            </tr>            
            <tr>                
                <td colspan="2">
                    <div class='tableauPlaceholder' style='width: 1304px; height: 469px;'><noscript><a href='#'><img alt='Dashboard (pos lab - Años) ' src='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardposlab-Aos&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1304' height='469' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardposlab-Aos' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableausoftware.com&#47;static&#47;images&#47;De&#47;DepartamentoIngresos-Edad-ExpansinAnual&#47;Dashboardposlab-Aos&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1304px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/DepartamentoIngresos-Edad-ExpansinAnual/Dashboardposlab-Aos' target='_blank'>Obtener información sobre Tableau</a></div></div>
                </td>
            </tr>
        </table>                 

        <!--PRINCIPAL MANAGEMENT VIEW-->
        <div class="window">
            <div id="divLabEdad" class="window-sub">
                <table>
                    <tr>
                        <td>
                            <label class="titulo">Tendencias encontradas entre la posicion laboral y la edad de los ciudadanos</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li onclick="accionReglas(this);">
                                    <label>Obrero o empleado de empresa particular</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Obrero o empleado del gobierno</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Empleado doméstico</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Trabajador por cuenta propia</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Patrón o empleador</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                        
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Trabajador familiar sin remuneración</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Trabajador sin remuneración en empresas o negocios de otros hogares</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Jornalero o peón</label>
                                    <ul class="reglas">
                                        <li>
                                            No se encontro informacion. 
                                        </li>                                                                                
                                    </ul>
                                </li>

                                <li onclick="accionReglas(this);">
                                    <label>Otro</label>
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
