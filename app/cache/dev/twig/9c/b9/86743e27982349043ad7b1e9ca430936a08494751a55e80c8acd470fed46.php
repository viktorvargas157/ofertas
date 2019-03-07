<?php

/* OfertasBundle:Ofertas:inicio.html.twig */
class __TwigTemplate_9cb986743e27982349043ad7b1e9ca430936a08494751a55e80c8acd470fed46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'error' => array($this, 'block_error'),
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
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"container\" class=\"\">
        <section>
            <section class=\"wrapper\">
                ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 8
            echo "                    <div class=\"row\" >
                        <div class=\"col-lg-12\" style=\"text-align: center;\">
                            ";
            // line 11
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/Ofertas.png"), "html", null, true);
            echo "\" style=\"text-align: center;width: 85%\">
                        </div>
                    </div>
                ";
        } else {
            // line 15
            echo "                    <div class=\"row\" style=\"margin-top: 70px\">
                        <div class=\"col-lg-12\" style=\"text-align: center\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccc/img/logo.png"), "html", null, true);
            echo "\" style=\"text-align: center;width: 360px\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin-top: -180px;\">
                        <div class=\"col-lg-12\">
                            <div class=\"container\">
                                <form class=\"login-form\" action=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
                                    <div class=\"login-wrap\">
                                        ";
            // line 25
            $this->displayBlock('error', $context, $blocks);
            // line 26
            echo "                                        <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
                                            <input style=\"color: #0f222b;\" id=\"usuario\" name=\"_username\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\">
                                            <input type=\"hidden\" name=\"_target_path\" value=\"/ofertas/inicio\" />
                                        </div>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                                            <input id=\"contrasenna\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\">
                                        </div>
                                        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 43
        echo "            </section>
        </section>
    </section>
";
    }

    // line 25
    public function block_error($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OfertasBundle:Ofertas:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  90 => 43,  71 => 26,  69 => 25,  64 => 23,  55 => 17,  51 => 15,  43 => 11,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
