<?php

/* OfertasBundle:Ofertas:usuarios.html.twig */
class __TwigTemplate_6093a7b93bd0d3868f4824d4e7e036d2151dbf5aa8430e18a6966494234e67a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'encabezado' => array($this, 'block_encabezado'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-2\"></div>
                <div class=\"col-lg-8\">
                    <h3 class=\"page-header toggle-nav\" style=\"text-align: center\">";
        // line 10
        $this->displayBlock('encabezado', $context, $blocks);
        echo "</h3>
                </div>
            </div>
            ";
        // line 13
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 179
        echo "        </section>
    </section>

";
    }

    // line 10
    public function block_encabezado($context, array $blocks = array())
    {
        echo "Trabajo con los Usuarios";
    }

    // line 13
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 14
        echo "                <div class=\"row\">
                    <div class=\"col-lg-3\"></div>
                    <div class=\"col-lg-6\">
                        <section class=\"panel\">
                            <header class=\"panel-heading tab-bg-primary \">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\">
                                        <a data-toggle=\"tab\" href=\"#home\">Listado</a>
                                    </li>
                                    <li>
                                        <a data-toggle=\"tab\" href=\"#about\">Insertar</a>
                                    </li>
                                </ul>
                            </header>
                            <div class=\"panel-body\">
                                <div class=\"tab-content\">
                                    <div id=\"home\" class=\"tab-pane active\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <table class=\"table table-striped table-advance table-hover table-bordered\" style=\"text-align: center\">
                                                    <thead>
                                                    <tr>
                                                        <th>Usuario</th>
                                                        <th>Email</th>
                                                        <th>Rol</th>
                                                        ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 40
            echo "                                                            <th>Opciones</th>
                                                        ";
        }
        // line 42
        echo "                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 47
            echo "                                                        <tr>
                                                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombreApellidos"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol"), "html", null, true);
            echo "</td>
                                                            ";
            // line 51
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 52
                echo "                                                                <td>
                                                                    <a class=\"btn btn-success btn-sm tooltips\" data-placement=\"top\" data-toggle=\"modal\" href=\"#editarUser-";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                echo "\" title=\"Editar Usuario\" >
                                                                        <i class=\"icon_pencil-edit\"></i>
                                                                    </a>
                                                                    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"editarUser-";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                echo "\" class=\"modal fade\">
                                                                        <div class=\"modal-dialog\" style=\"text-align: center;width: 500px; height: auto\">
                                                                            <div class=\"modal-content\">
                                                                                <div class=\"modal-header\">
                                                                                    <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                                                                                    <h4 class=\"modal-title\">Editar </h4>
                                                                                </div>
                                                                                <div class=\"modal-body\">
                                                                                    <form class=\"form-horizontal\" method=\"post\" action=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarUsuario", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
                echo "\">
                                                                                        <div class=\"form-group\">
                                                                                            <label class=\"col-sm-4 control-label\">Usuario</label>
                                                                                            <div class=\"col-sm-6\">
                                                                                                <input style=\"text-align: center\" id=\"nombreApellidos\" name=\"nombreApellidos\" type=\"text\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombreApellidos"), "html", null, true);
                echo "\">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"form-group\">
                                                                                            <label class=\"col-sm-4 control-label\">Email</label>
                                                                                            <div class=\"col-sm-6\">
                                                                                                <input style=\"text-align: center\" name=\"usuario\" type=\"email\" class=\"form-control round-input\" required=\"required\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
                echo "\">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"form-group\">
                                                                                            <label class=\"col-sm-4 control-label\">Contraseña</label>
                                                                                            <div class=\"col-sm-6\">
                                                                                                <input style=\"text-align: center\" name=\"contrasenna\" type=\"password\" class=\"form-control round-input\" required=\"\">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"form-group\">
                                                                                            <label class=\"col-sm-4 control-label\">Rol</label>
                                                                                            <div class=\"col-sm-6\">
                                                                                                <select style=\"text-align: center\" id=\"rol\" name=\"rol\" class=\"form-control round-input\" required=\"required\">
                                                                                                    <option></option>
                                                                                                    <option ";
                // line 88
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Administrador")) {
                    echo "selected";
                }
                echo " value=\"Administrador\">Administrador</option>
                                                                                                    <option ";
                // line 89
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Secretaria")) {
                    echo "selected";
                }
                echo " value=\"Secretaria\">Secretaria</option>
                                                                                                    <option ";
                // line 90
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Presupuestista")) {
                    echo "selected";
                }
                echo " value=\"Presupuestista\">Presupuestista</option>
                                                                                                    <option ";
                // line 91
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Ingeniero")) {
                    echo "selected";
                }
                echo " value=\"Ingeniero\">Ingeniero</option>
                                                                                                    <option ";
                // line 92
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Comercial")) {
                    echo "selected";
                }
                echo " value=\"Comercial\">Comercial</option>
                                                                                                    <option ";
                // line 93
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol") == "Abogado")) {
                    echo "selected";
                }
                echo " value=\"Abogado\">Abogado</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"form-group\">
                                                                                            <div class=\"col-sm-10\">
                                                                                                <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <a class=\"btn btn-danger btn-sm\" title=\"Eliminar Usuario\" href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarUsuario", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
                echo "\">
                                                                        <i class=\"icon_trash\"></i>
                                                                    </a>
                                                                </td>
                                                            ";
            }
            // line 113
            echo "                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"about\" class=\"tab-pane\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <section class=\"panel\">
                                                    <header class=\"panel-heading\">
                                                        Formulario
                                                    </header>
                                                    <div class=\"panel-body\">
                                                        <form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("insertarUsuario");
        echo "\">
                                                            <div class=\"form-group\">
                                                                <label class=\"col-sm-4 control-label\">Usuario</label>
                                                                <div class=\"col-sm-6\">
                                                                    <input style=\"text-align: center\" id=\"nombreApellidos\" name=\"nombreApellidos\" type=\"text\" class=\"form-control round-input\" required=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"col-sm-4 control-label\">Email</label>
                                                                <div class=\"col-sm-6\">
                                                                    <input style=\"text-align: center\" name=\"usuario\" type=\"email\" class=\"form-control round-input\" required=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"col-sm-4 control-label\">Contraseña</label>
                                                                <div class=\"col-sm-6\">
                                                                    <input style=\"text-align: center\" name=\"contrasenna\" type=\"password\" class=\"form-control round-input\" required=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"col-sm-4 control-label\">Rol</label>
                                                                <div class=\"col-sm-6\">
                                                                    <select style=\"text-align: center\" id=\"rol\" name=\"rol\" class=\"form-control round-input\" required=\"required\">
                                                                        <option></option>
                                                                        <option value=\"Administrador\">Administrador</option>
                                                                        <option value=\"Secretaria\">Secretaria</option>
                                                                        <option value=\"Presupuestista\">Presupuestista</option>
                                                                        <option value=\"Ingeniero\">Ingeniero</option>
                                                                        <option value=\"Comercial\">Comercial</option>
                                                                        <option value=\"Abogado\">Abogado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <div class=\"col-sm-10\">
                                                                    <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\"/>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            ";
    }

    // line 186
    public function block_js($context, array $blocks = array())
    {
        // line 187
        echo "
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/bootstrap-wysiwyg.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/js/bootstrap-wysiwyg-custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/assets/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "OfertasBundle:Ofertas:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 191,  328 => 190,  324 => 189,  320 => 188,  317 => 187,  314 => 186,  260 => 129,  244 => 115,  237 => 113,  229 => 108,  209 => 93,  203 => 92,  197 => 91,  191 => 90,  185 => 89,  179 => 88,  162 => 74,  153 => 68,  146 => 64,  135 => 56,  129 => 53,  126 => 52,  124 => 51,  120 => 50,  116 => 49,  109 => 47,  105 => 46,  99 => 42,  95 => 40,  93 => 39,  66 => 14,  63 => 13,  50 => 179,  48 => 13,  42 => 10,  2292 => 1569,  2273 => 1552,  2268 => 1551,  2254 => 1539,  2250 => 1538,  2238 => 1529,  2235 => 1528,  2232 => 1527,  2223 => 1519,  2215 => 1516,  2212 => 1515,  2195 => 1501,  2188 => 1497,  2184 => 1496,  2173 => 1488,  2168 => 1487,  2166 => 1486,  2161 => 1485,  2158 => 1484,  2137 => 1466,  2133 => 1465,  2129 => 1464,  2118 => 1456,  2113 => 1455,  2110 => 1454,  2108 => 1453,  2104 => 1451,  2082 => 1432,  2073 => 1426,  2061 => 1417,  2052 => 1411,  2040 => 1402,  2031 => 1396,  2020 => 1388,  2012 => 1383,  2008 => 1382,  2004 => 1381,  1996 => 1376,  1992 => 1375,  1973 => 1359,  1969 => 1358,  1965 => 1357,  1961 => 1356,  1956 => 1355,  1953 => 1354,  1951 => 1353,  1935 => 1340,  1929 => 1336,  1923 => 1333,  1920 => 1332,  1918 => 1331,  1913 => 1329,  1899 => 1318,  1894 => 1317,  1892 => 1316,  1888 => 1314,  1885 => 1313,  1881 => 1311,  1872 => 1304,  1860 => 1295,  1855 => 1292,  1848 => 1290,  1846 => 1289,  1842 => 1288,  1838 => 1287,  1834 => 1286,  1830 => 1285,  1826 => 1284,  1823 => 1283,  1818 => 1282,  1816 => 1281,  1803 => 1270,  1797 => 1266,  1782 => 1254,  1774 => 1249,  1764 => 1242,  1758 => 1238,  1747 => 1216,  1745 => 1215,  1741 => 1214,  1737 => 1212,  1729 => 1206,  1723 => 1205,  1717 => 1204,  1708 => 1201,  1704 => 1200,  1700 => 1199,  1696 => 1198,  1692 => 1197,  1688 => 1196,  1685 => 1195,  1681 => 1194,  1675 => 1191,  1670 => 1189,  1666 => 1188,  1663 => 1187,  1657 => 1186,  1654 => 1185,  1649 => 1184,  1644 => 1183,  1641 => 1182,  1637 => 1181,  1623 => 1169,  1617 => 1165,  1602 => 1153,  1594 => 1148,  1584 => 1141,  1578 => 1137,  1567 => 1114,  1565 => 1113,  1561 => 1112,  1553 => 1106,  1546 => 1102,  1541 => 1099,  1538 => 1098,  1531 => 1094,  1526 => 1091,  1524 => 1090,  1519 => 1088,  1515 => 1087,  1510 => 1084,  1504 => 1081,  1500 => 1080,  1495 => 1077,  1493 => 1076,  1488 => 1074,  1484 => 1073,  1479 => 1070,  1473 => 1067,  1469 => 1066,  1464 => 1063,  1462 => 1062,  1457 => 1060,  1453 => 1059,  1448 => 1056,  1442 => 1053,  1438 => 1052,  1434 => 1051,  1430 => 1049,  1428 => 1048,  1423 => 1046,  1419 => 1045,  1414 => 1042,  1408 => 1039,  1404 => 1038,  1399 => 1035,  1396 => 1034,  1390 => 1031,  1386 => 1030,  1381 => 1027,  1378 => 1026,  1372 => 1023,  1368 => 1022,  1363 => 1019,  1360 => 1018,  1354 => 1015,  1350 => 1014,  1345 => 1011,  1342 => 1010,  1336 => 1007,  1332 => 1006,  1327 => 1003,  1324 => 1002,  1318 => 999,  1314 => 998,  1309 => 995,  1307 => 994,  1290 => 980,  1280 => 973,  1274 => 970,  1268 => 967,  1259 => 961,  1254 => 960,  1237 => 946,  1229 => 941,  1214 => 929,  1169 => 887,  1164 => 886,  1162 => 885,  1071 => 797,  1067 => 796,  1056 => 788,  1051 => 787,  1048 => 786,  1017 => 758,  1006 => 750,  999 => 746,  995 => 745,  991 => 744,  983 => 739,  979 => 738,  974 => 737,  972 => 736,  958 => 725,  952 => 721,  946 => 718,  943 => 717,  941 => 716,  936 => 714,  922 => 703,  917 => 702,  915 => 701,  911 => 699,  908 => 698,  902 => 696,  885 => 682,  878 => 678,  874 => 677,  863 => 669,  858 => 667,  853 => 666,  850 => 665,  847 => 664,  844 => 663,  824 => 643,  820 => 642,  809 => 634,  804 => 633,  801 => 632,  799 => 631,  794 => 629,  790 => 628,  787 => 627,  784 => 626,  778 => 624,  772 => 622,  762 => 620,  756 => 619,  753 => 618,  735 => 603,  727 => 598,  714 => 588,  707 => 584,  696 => 576,  689 => 571,  674 => 569,  670 => 568,  660 => 561,  656 => 560,  645 => 552,  642 => 551,  636 => 549,  630 => 547,  620 => 545,  614 => 544,  612 => 543,  607 => 542,  605 => 541,  601 => 539,  589 => 530,  573 => 517,  568 => 516,  566 => 515,  561 => 513,  558 => 512,  552 => 510,  546 => 507,  541 => 506,  539 => 505,  535 => 503,  527 => 501,  513 => 490,  485 => 465,  478 => 463,  473 => 462,  471 => 461,  463 => 459,  458 => 458,  455 => 457,  452 => 456,  450 => 455,  427 => 434,  421 => 430,  415 => 427,  412 => 426,  410 => 425,  407 => 424,  389 => 409,  233 => 255,  218 => 253,  214 => 252,  184 => 224,  182 => 223,  178 => 221,  175 => 184,  125 => 136,  112 => 48,  108 => 133,  97 => 125,  85 => 115,  83 => 114,  80 => 113,  77 => 74,  72 => 68,  70 => 25,  68 => 24,  65 => 23,  60 => 20,  57 => 10,  39 => 4,  34 => 4,  31 => 3,);
    }
}
