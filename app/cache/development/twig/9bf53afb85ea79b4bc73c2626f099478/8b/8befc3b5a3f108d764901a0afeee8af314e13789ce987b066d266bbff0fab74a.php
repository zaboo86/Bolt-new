<?php

/* @bolt/dashboard/dashboard.twig */
class __TwigTemplate_ee3d1d4e8ccc7cd9f4afc4b167e742e9db26a4b10533f3baa0ec7bd1fcfaf99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dashboard/dashboard.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/dashboard.twig"));

        $tags = array("if" => 19, "for" => 33, "set" => 35);
        $filters = array("length" => 26);
        $functions = array("__" => 7, "include" => 17, "widgets" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('length'),
                array('__', 'include', 'widgets')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Dashboard");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.dashboard.title"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_messages.twig"));
        echo "

            ";
        // line 19
        if ($this->getAttribute(($context["context"] ?? null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/dashboard/_suggestloripsum.twig"));
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "dashboard_below_header", "backend"));
        echo "

            <div class=\"quicklinks\">
                ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 27
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-dropdown.twig"));
            echo "
                ";
        } else {
            // line 29
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-buttons.twig"));
            echo "
                ";
        }
        // line 31
        echo "            </div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "latest", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["contenttype_key"] => $context["multiplecontent"]) {
            // line 34
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 35
                echo "                    ";
                $context["contenttype"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => ("contenttypes/" . $context["contenttype_key"])), "method");
                // line 36
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/dashboard/_recently_edited.twig"));
                echo "
                ";
            }
            // line 38
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttype_key'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "dashboard_bottom", "backend"));
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/dashboard/_aside.twig"));
        echo "
        </aside>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 45,  195 => 40,  192 => 39,  178 => 38,  172 => 36,  169 => 35,  166 => 34,  149 => 33,  145 => 31,  139 => 29,  133 => 27,  131 => 26,  125 => 23,  122 => 22,  116 => 20,  114 => 19,  109 => 17,  103 => 13,  97 => 12,  85 => 10,  73 => 7,  61 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Dashboard #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Dashboard' %}

{% block page_title __('page.dashboard.title') %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {% if context.suggestloripsum %}
                {{ include('@bolt/dashboard/_suggestloripsum.twig') }}
            {% endif %}

            {{ widgets('dashboard_below_header', 'backend') }}

            <div class=\"quicklinks\">
                {% if config.get('contenttypes')|length() > 3 %}
                    {{ include('@bolt/dashboard/_quicklinks-dropdown.twig') }}
                {% else %}
                    {{ include('@bolt/dashboard/_quicklinks-buttons.twig') }}
                {% endif %}
            </div>

            {% for contenttype_key, multiplecontent in context.latest %}
                {% if multiplecontent %}
                    {% set contenttype = config.get('contenttypes/' ~ contenttype_key) %}
                    {{ include('@bolt/dashboard/_recently_edited.twig') }}
                {% endif %}
            {% endfor %}

            {{ widgets('dashboard_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4\">
            {{ include('@bolt/dashboard/_aside.twig') }}
        </aside>

    </div>

{% endblock page_main %}
", "@bolt/dashboard/dashboard.twig", "");
    }
}
