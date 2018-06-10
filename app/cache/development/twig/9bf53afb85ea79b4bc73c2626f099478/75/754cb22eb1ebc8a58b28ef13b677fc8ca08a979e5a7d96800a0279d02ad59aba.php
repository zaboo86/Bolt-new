<?php

/* @bolt/components/panel-activity-change.twig */
class __TwigTemplate_66104215ed2dbcee1c5594248a4e1dc76d988042199b417c2c2112bf853b2fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("changelog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-change.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity-change.twig"));

        $tags = array("import" => 15, "from" => 16, "for" => 19, "if" => 21, "set" => 22);
        $filters = array("escape" => 31, "default" => 38);
        $functions = array("__" => 11, "path" => 44, "isallowed" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'from', 'for', 'if', 'set'),
                array('escape', 'default'),
                array('__', 'path', 'isallowed')
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

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-activity");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-clock-o");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.change"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-change.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_60ce8bd757764064a720376f139fbce2ceaa0880b63420c4d294f2caf802edd0"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-change.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "change", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method", false, true), $this->getAttribute($context["log"], "contenttype", array()), array(), "array", true, true)) {
                // line 22
                echo "                    ";
                $context["contenttype"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method"), $this->getAttribute($context["log"], "contenttype", array()), array(), "array");
                // line 23
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute(($context["contenttype"] ?? null), "singular_name", array());
                // line 24
                echo "                    ";
                $context["content_display_name"] = $context["macro"]->getcontentlink_by_id(($context["contenttype"] ?? null), $this->getAttribute($context["log"], "title", array()), $this->getAttribute($context["log"], "contentid", array()));
                // line 25
                echo "                ";
            } else {
                // line 26
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute($context["log"], "contenttype", array());
                // line 27
                echo "                    ";
                $context["content_display_name"] = $this->getAttribute($context["log"], "title", array());
                // line 28
                echo "                ";
            }
            // line 29
            echo "
                ";
            // line 30
            if (($this->getAttribute($context["log"], "mutation_type", array()) == "INSERT")) {
                // line 31
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.created"));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true));
                echo "
                ";
            } elseif (($this->getAttribute(            // line 32
$context["log"], "mutation_type", array()) == "UPDATE")) {
                // line 33
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.saved"));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true));
                echo "
                ";
            } elseif (($this->getAttribute(            // line 34
$context["log"], "mutation_type", array()) == "DELETE")) {
                // line 35
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.deleted"));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true));
                echo "
                ";
            }
            // line 37
            echo "                \"<strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["content_display_name"] ?? null), "html", null, true));
            echo "</strong>\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.by"));
            echo "
                <em>";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : (""))));
            echo "</em>
                <small>(";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_60ce8bd757764064a720376f139fbce2ceaa0880b63420c4d294f2caf802edd0"]->getbuic_moment($this->getAttribute($context["log"], "date", array())));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>

    <p><a href=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelog"));
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.button.more"));
        echo "
    </a></p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-change.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 46,  199 => 44,  195 => 42,  186 => 39,  182 => 38,  175 => 37,  167 => 35,  165 => 34,  158 => 33,  156 => 32,  149 => 31,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  126 => 23,  123 => 22,  121 => 21,  118 => 20,  114 => 19,  110 => 17,  107 => 16,  105 => 15,  102 => 14,  96 => 13,  84 => 11,  72 => 9,  60 => 7,  21 => 5,);
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
 # Sidebar-Panel: Displays the latest activity
 # (Usage Example: Dashboards sidebar)
 #}
{% extends (isallowed('changelog')) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-activity' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head __('panel.latest-activity.change') %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <ul class=\"activity\">
        {% for log in context.change %}
            <li>
                {% if config.get('contenttypes')[log.contenttype] is defined %}
                    {% set contenttype = config.get('contenttypes')[log.contenttype] %}
                    {% set contenttype_display_name = contenttype.singular_name %}
                    {% set content_display_name = macro.contentlink_by_id(contenttype, log.title, log.contentid) %}
                {% else %}
                    {% set contenttype_display_name = log.contenttype %}
                    {% set content_display_name = log.title %}
                {% endif %}

                {% if log.mutation_type == 'INSERT' %}
                    {{ __('panel.latest-activity.created') }} {{ contenttype_display_name }}
                {% elseif log.mutation_type == 'UPDATE' %}
                    {{ __('panel.latest-activity.saved') }} {{ contenttype_display_name }}
                {% elseif log.mutation_type == 'DELETE' %}
                    {{ __('panel.latest-activity.deleted') }} {{ contenttype_display_name }}
                {% endif %}
                \"<strong>{{ content_display_name }}</strong>\" {{ __('panel.latest-activity.by') }}
                <em>{{ macro.userlink(log.ownerid|default('')) }}</em>
                <small>({{ buic_moment(log.date) }})</small>
            </li>
        {% endfor %}
    </ul>

    <p><a href=\"{{ path('changelog') }}\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        {{ __('panel.latest-activity.button.more') }}
    </a></p>

{% endblock panel_body %}
", "@bolt/components/panel-activity-change.twig", "");
    }
}
