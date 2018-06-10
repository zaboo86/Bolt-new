<?php

/* @bolt/_base/_page-no_nav.twig */
class __TwigTemplate_19fc4c7ef91b07577ad0b1db8e45a6b88d97439a17577f285af869833112d051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-no_nav.twig", 9);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-no_nav.twig"));

        $tags = array("set" => 11, "block" => 34, "if" => 40);
        $filters = array("escape" => 25, "default" => 25);
        $functions = array("path" => 21, "__" => 21, "asset" => 27, "widgets" => 29, "include" => 33, "randomquote" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('escape', 'default'),
                array('path', '__', 'asset', 'widgets', 'include', 'randomquote')
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

        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 18
        echo "
    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.view-site"));
        echo "</a>
        </div>

        <div class=\"row\">
            <div class=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter(($context["form_class"] ?? null), "col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")) : ("col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")), "html", null, true));
        echo "\">

                <img src=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true));
        echo "\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "login_top", "backend"));
        echo "

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig"));
        echo "
                        ";
        // line 34
        $this->displayBlock('page_main', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>

                ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "login_middle", "backend"));
        echo "

                ";
        // line 40
        if ((($this->getAttribute(($context["context"] ?? null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "randomquote", array()), false)) : (false))) {
            // line 41
            echo "                    <blockquote class=\"quote\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->randomQuote());
            echo "</blockquote>
                ";
        }
        // line 43
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "login_bottom", "backend"));
        echo "

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 34,  130 => 44,  127 => 43,  121 => 41,  119 => 40,  114 => 38,  109 => 35,  107 => 34,  103 => 33,  96 => 29,  91 => 27,  86 => 25,  77 => 21,  72 => 18,  66 => 17,  59 => 9,  57 => 15,  55 => 13,  53 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # HTML page template for pages without navigation
 #
 # Blocks: page_main:     content
 #         page_title:    used as html title
 #         page_subtitle: used as html title (optional)
 #         page_script:   script added after the body tag (script tags needed!)
 #}
{% extends '@bolt/_base/_page.twig' %}

{% set page_bodyclass = 'login' %}

{% set page_hasnav = false %}

{% set page_nav = '' %}

{% block page_plain %}

    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </div>

        <div class=\"row\">
            <div class=\"{{ form_class|default('col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2') }}\">

                <img src=\"{{ asset('img/bolt-logo.png', 'bolt') }}\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                {{ widgets('login_top', 'backend') }}

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        {{ include('@bolt/_sub/_messages.twig') }}
                        {% block page_main %}[PAGE_MAIN]{% endblock page_main %}
                    </div>
                </div>

                {{ widgets('login_middle', 'backend') }}

                {% if context.randomquote|default(false) %}
                    <blockquote class=\"quote\">{{ randomquote() }}</blockquote>
                {% endif %}

                {{ widgets('login_bottom', 'backend') }}

            </div>
        </div>
    </div>

{% endblock page_plain %}
", "@bolt/_base/_page-no_nav.twig", "");
    }
}
