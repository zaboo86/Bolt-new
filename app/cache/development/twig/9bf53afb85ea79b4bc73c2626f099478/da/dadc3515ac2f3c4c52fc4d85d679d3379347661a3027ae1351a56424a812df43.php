<?php

/* @bolt/_base/_page-nav.twig */
class __TwigTemplate_252f415d367d2d55e4845b1ec1fcdf9c8e43f19afd241ad0e656b3e3be2b65c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-nav.twig", 10);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-nav.twig"));

        $tags = array("set" => 12, "if" => 21, "block" => 60);
        $filters = array("escape" => 19);
        $functions = array("data" => 19, "__" => 19, "include" => 24, "widgets" => 58);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('escape'),
                array('data', '__', 'include', 'widgets')
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

        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = ((        $this->hasBlock("page_nav", $context, $blocks)) ? (        $this->renderBlock("page_nav", $context, $blocks)) : ("NO NAV"));
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("omnisearch.placeholder", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.find")), "html", null, true));
        echo "

    <div id=\"navpage-wrapper\"";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_primary.twig"));
        echo "
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_secondary.twig"));
        echo "
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 36
        if (        $this->hasBlock("page_subtitle", $context, $blocks)) {
            // line 37
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 38
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        } else {
            // line 40
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        }
        // line 42
        echo "
                        ";
        // line 44
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 45
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute(($context["pager"] ?? null), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), array(), "array");
            // line 46
            echo "                            ";
            if ((($context["pager_ct"] ?? null) && ($this->getAttribute(($context["pager_ct"] ?? null), "totalpages", array()) > 1))) {
                // line 47
                echo "                                <span>
                                    ";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.showing"));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "showing_from", array()), "html", null, true));
                echo " -
                                    ";
                // line 49
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "showing_to", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.of"));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "count", array()), "html", null, true));
                echo "
                                </span>
                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "below_header", "backend"));
        echo "

            ";
        // line 60
        $this->displayBlock('messages', $context, $blocks);
        // line 63
        echo "
            ";
        // line 64
        $this->displayBlock('page_main', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "footer", "backend"));
        echo "

        </div>

        ";
        // line 70
        $this->displayBlock('page_main_extra_content', $context, $blocks);
        // line 72
        echo "
    </div>

    ";
        // line 76
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_footer.twig"));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 61
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig", array("wrapper" => true)));
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main_extra_content"));

        // line 71
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 71,  233 => 70,  221 => 64,  211 => 61,  205 => 60,  194 => 76,  189 => 72,  187 => 70,  180 => 66,  177 => 65,  175 => 64,  172 => 63,  170 => 60,  165 => 58,  158 => 53,  155 => 52,  145 => 49,  139 => 48,  136 => 47,  133 => 46,  130 => 45,  127 => 44,  124 => 42,  118 => 40,  113 => 38,  108 => 37,  106 => 36,  96 => 29,  88 => 24,  80 => 21,  74 => 19,  68 => 18,  61 => 10,  59 => 16,  57 => 14,  55 => 12,  11 => 10,);
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
 # HTML page template for pages with navigation
 #
 # Blocks: page_nav:      Navigation path, like: \"Dashboard\", \"Settings/Configuration\", \"Content/*\", ...
 #         page_main:     content
 #         page_title:    used as html title
 #         page_subtitle: used as html title (optional)
 #         page_script:   script added after the body tag (script tags needed!)
 #}
{% extends '@bolt/_base/_page.twig' %}

{% set page_bodyclass = '' %}

{% set page_hasnav = true %}

{% set page_nav = block('page_nav') is defined ? block('page_nav') : 'NO NAV' %}

{% block page_plain %}
    {{ data('omnisearch.placeholder', __('general.phrase.find')) }}

    <div id=\"navpage-wrapper\"{% if global.request.cookies.get('sidebar') %} class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"{% endif %}>
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                {{ include('@bolt/_nav/_primary.twig') }}
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            {{ include('@bolt/_nav/_secondary.twig') }}
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        {% if block('page_subtitle') is defined %}
                            <strong>{{ block('page_title') }} »</strong>
                            <i style=\"font-style: normal;\">{{ block('page_subtitle') }}</i>
                        {% else %}
                            <strong>{{ block('page_title') }}</strong>
                        {% endif %}

                        {# optional \"showing 1-X of Y\" for overview pages. #}
                        {% if pager is defined %}
                            {% set pager_ct = pager[context.contenttype.slug] %}
                            {% if pager_ct and pager_ct.totalpages > 1 %}
                                <span>
                                    {{ __('general.phrase.showing') }} {{ pager_ct.showing_from }} -
                                    {{ pager_ct.showing_to }} {{ __('general.phrase.of') }} {{ pager_ct.count }}
                                </span>
                            {% endif %}
                        {% endif %}

                    </h1>
                </div>
            </div>

            {{ widgets('below_header', 'backend') }}

            {% block messages %}
                {{ include('@bolt/_sub/_messages.twig', {'wrapper': true}) }}
            {% endblock messages %}

            {% block page_main %}[PAGE_MAIN]{% endblock page_main %}

            {{ widgets('footer', 'backend') }}

        </div>

        {% block page_main_extra_content %}
        {% endblock %}

    </div>

    {# Note: We include the footer here, because of z-index issues otherwise. #}
    {{ include('@bolt/_nav/_footer.twig') }}

{% endblock page_plain %}
", "@bolt/_base/_page-nav.twig", "");
    }
}
