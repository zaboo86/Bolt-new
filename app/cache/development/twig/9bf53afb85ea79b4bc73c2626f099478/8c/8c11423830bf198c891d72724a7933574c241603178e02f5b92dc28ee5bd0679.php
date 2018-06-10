<?php

/* partials/_header.twig */
class __TwigTemplate_bc5c597718acc1cf04071e546e3b960e69e096620f22660f45ed42f3225c00c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        $tags = array("set" => 1, "if" => 27);
        $filters = array("escape" => 27);
        $functions = array("include" => 11, "path" => 26, "__" => 27);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('escape'),
                array('include', 'path', '__')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["list"] = array();
        // line 2
        echo "     <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"text-center\">Willkommen bei Independent Tutorials</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <p class=\"text-center\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "pages/index_text.twig"));
        echo "</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"article-list\" style=\"padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h2 class=\"text-center\">Die neuesten Tutorien</h2>
                </div>
            </div>
             <div class=\"row\" style=\"padding-bottom:0px;\">
                <div class=\"col\" style=\"padding-top:15px;\">
                    <div class=\"form-group\" style=\"margin-bottom:15px;\">
                            <form class=\"field has-addons\" method=\"get\" action=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search"));
        echo "\" enctype=\"text/plain\">
                            <input class=\"d-inline-block search-input\" value=\"";
        // line 27
        if (array_key_exists("search", $context)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["search"] ?? null)));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search-ellipsis"));
        echo "\" type=\"search\"
                               name=\"search\" placeholder=\"Finde Tutorien\" autocomplete=\"off\" style=\"width:400px;margin-left:auto;margin-right:6px;\">
                                <button class=\"btn btn-light d-inline-block search-btn\"
                            type=\"submit\" style=\"margin-right:0;margin-left:0;padding:10px;width:46px;height:46px;margin-bottom:3px;\"> <i class=\"fa fa-search\"></i></button>
                      <div class=\"dropdown d-inline-flex\" style=\"margin-right:0px;margin-left:0px;margin-bottom:0px;padding:0px;\"><button class=\"btn btn-light dropdown-toggle invisible\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\" style=\"height:46px;padding:10px;margin-left:2px;\">Kategorien</button>
                            <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-top:3px;margin-right:0px;margin-left:-182px;width:300px;\"><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">First Item</a><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Second Item</a><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Third Item</a></div>
                        </div>
                    </div>
                </div>
            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  77 => 26,  59 => 11,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set list = [] %}
     <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"text-center\">Willkommen bei Independent Tutorials</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <p class=\"text-center\">{{include('pages/index_text.twig')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"article-list\" style=\"padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h2 class=\"text-center\">Die neuesten Tutorien</h2>
                </div>
            </div>
             <div class=\"row\" style=\"padding-bottom:0px;\">
                <div class=\"col\" style=\"padding-top:15px;\">
                    <div class=\"form-group\" style=\"margin-bottom:15px;\">
                            <form class=\"field has-addons\" method=\"get\" action=\"{{ path('search') }}\" enctype=\"text/plain\">
                            <input class=\"d-inline-block search-input\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __('general.phrase.search-ellipsis') }}\" type=\"search\"
                               name=\"search\" placeholder=\"Finde Tutorien\" autocomplete=\"off\" style=\"width:400px;margin-left:auto;margin-right:6px;\">
                                <button class=\"btn btn-light d-inline-block search-btn\"
                            type=\"submit\" style=\"margin-right:0;margin-left:0;padding:10px;width:46px;height:46px;margin-bottom:3px;\"> <i class=\"fa fa-search\"></i></button>
                      <div class=\"dropdown d-inline-flex\" style=\"margin-right:0px;margin-left:0px;margin-bottom:0px;padding:0px;\"><button class=\"btn btn-light dropdown-toggle invisible\" data-toggle=\"dropdown\" aria-expanded=\"false\" type=\"button\" style=\"height:46px;padding:10px;margin-left:2px;\">Kategorien</button>
                            <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-top:3px;margin-right:0px;margin-left:-182px;width:300px;\"><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">First Item</a><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Second Item</a><a class=\"dropdown-item\" role=\"presentation\" href=\"#\">Third Item</a></div>
                        </div>
                    </div>
                </div>
            </div>
", "partials/_header.twig", "");
    }
}
