<?php

/* @bolt/components/panel-activity-system.twig */
class __TwigTemplate_75a5deab1cc3dff460482a8eb29c6e0d354a70423f3183626bc2e8ccf33a89eb extends Twig_Template
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
        return $this->loadTemplate((($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed("systemlog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-system.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity-system.twig"));

        $tags = array("import" => 15, "from" => 16, "for" => 19, "if" => 21);
        $filters = array("escape" => 23, "default" => 28, "shy" => 30, "raw" => 30);
        $functions = array("__" => 11, "path" => 37, "isallowed" => 5);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'from', 'for', 'if'),
                array('escape', 'default', 'shy', 'raw'),
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

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.system"));
        
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-system.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_2048f69cdf857ca4c21a8aa8d4328d408f22423c5498fc3470a87487b09fbb58"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-system.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "system", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if (($this->getAttribute($context["log"], "route", array()) == "postLogin")) {
                // line 22
                echo "                    ";
                if (($this->getAttribute($context["log"], "ownerid", array()) == 0)) {
                    // line 23
                    echo "                        <em>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true));
                    echo "</em>
                    ";
                } else {
                    // line 25
                    echo "                        <em>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getuserlink($this->getAttribute($context["log"], "ownerid", array())));
                    echo "</em> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.logged-in"));
                    echo "
                    ";
                }
                // line 27
                echo "                ";
            } elseif (($this->getAttribute($context["log"], "route", array()) == "logout")) {
                // line 28
                echo "                    <em>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : (""))));
                echo "</em> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.logged-out"));
                echo "
                ";
            } else {
                // line 30
                echo "                    <em>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->shy($this->getAttribute($context["log"], "message", array())));
                echo "</em>
                ";
            }
            // line 32
            echo "                <small>(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_2048f69cdf857ca4c21a8aa8d4328d408f22423c5498fc3470a87487b09fbb58"]->getbuic_moment($this->getAttribute($context["log"], "date", array())));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

    <p><a href=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog"));
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.button.more"));
        echo "
    </a></p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 39,  171 => 37,  167 => 35,  157 => 32,  151 => 30,  143 => 28,  140 => 27,  132 => 25,  126 => 23,  123 => 22,  121 => 21,  118 => 20,  114 => 19,  110 => 17,  107 => 16,  105 => 15,  102 => 14,  96 => 13,  84 => 11,  72 => 9,  60 => 7,  21 => 5,);
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
{% extends (isallowed('systemlog')) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-activity' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head __('panel.latest-activity.system') %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <ul class=\"activity\">
        {% for log in context.system %}
            <li>
                {% if log.route == 'postLogin' %}
                    {% if log.ownerid == 0 %}
                        <em>{{ log.message }}</em>
                    {% else %}
                        <em>{{ macro.userlink(log.ownerid) }}</em> {{ __('panel.latest-activity.logged-in') }}
                    {% endif %}
                {% elseif log.route == 'logout' %}
                    <em>{{ macro.userlink(log.ownerid|default('')) }}</em> {{ __('panel.latest-activity.logged-out') }}
                {% else %}
                    <em>{{ log.message|raw|shy }}</em>
                {% endif %}
                <small>({{ buic_moment(log.date) }})</small>
            </li>
        {% endfor %}
    </ul>

    <p><a href=\"{{ path('systemlog') }}\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        {{ __('panel.latest-activity.button.more') }}
    </a></p>

{% endblock panel_body %}
", "@bolt/components/panel-activity-system.twig", "");
    }
}
