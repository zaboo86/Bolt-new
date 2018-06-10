<?php

/* @bolt/_sub/_configuration_notices.twig */
class __TwigTemplate_08f40fb13c3b57ed81b15d5c9fbbcbf7288825432bd00d9b6e35395332c7e0cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((( !twig_test_empty(($context["messages"] ?? null))) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/_sub/_configuration_notices.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_configuration_notices.twig"));

        $tags = array("set" => 4, "for" => 26, "if" => 27);
        $filters = array("merge" => 28, "json_decode" => 31, "ymllink" => 33, "default" => 34, "raw" => 35);
        $functions = array("__" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('merge', 'json_decode', 'ymllink', 'default', 'raw'),
                array('__')
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

        // line 4
        $context["messages"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "get", array(0 => "configuration"), "method");
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-configuration");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        // line 11
        echo "    class=\"progress-bar progress-bar-warning progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-bullhorn");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "<b>Configuration Notices</b>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 20
        echo "
    ";
        // line 21
        $context["shown"] = array();
        // line 22
        echo "    <p>
        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.bolt-configuration-issues-detected"));
        echo "
    </p>
    <ul>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 27
            echo "        ";
            if (!twig_in_filter($context["msg"], ($context["shown"] ?? null))) {
                // line 28
                echo "            ";
                $context["shown"] = twig_array_merge(($context["shown"] ?? null), array(0 => $context["msg"]));
                // line 29
                echo "
            ";
                // line 30
                if ($this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->testJson($context["msg"])) {
                    // line 31
                    echo "                ";
                    $context["msg"] = $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->jsonDecode($context["msg"]);
                    // line 32
                    echo "                <li>
                    ";
                    // line 33
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink($this->getAttribute($context["msg"], "notice", array())));
                    echo "
                    ";
                    // line 34
                    if ((($this->getAttribute($context["msg"], "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["msg"], "info", array()))) : (""))) {
                        // line 35
                        echo "                        <br><small>";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["msg"], "info", array()));
                        echo "</small>
                    ";
                    }
                    // line 37
                    echo "                </li>
            ";
                } else {
                    // line 39
                    echo "                <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink($context["msg"]));
                    echo "</li>
            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_configuration_notices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 43,  181 => 42,  178 => 41,  172 => 39,  168 => 37,  162 => 35,  160 => 34,  156 => 33,  153 => 32,  150 => 31,  148 => 30,  145 => 29,  142 => 28,  139 => 27,  135 => 26,  129 => 23,  126 => 22,  124 => 21,  121 => 20,  115 => 19,  103 => 17,  91 => 15,  82 => 11,  76 => 10,  64 => 8,  57 => 6,  55 => 4,  22 => 6,);
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
 # Sidebar-Panel-Item: Displays the 'Configuration needed' items
 #}
{% set messages = app['logger.flash'].get('configuration') %}

{% extends (messages is not empty) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-configuration' %}

{% block panel_alert %}
    class=\"progress-bar progress-bar-warning progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
{% endblock panel_alert %}

{% block panel_icon 'fa-bullhorn' %}

{% block panel_head %}<b>Configuration Notices</b>{% endblock %}

{% block panel_body %}

    {% set shown = [] %}
    <p>
        {{ __('general.bolt-configuration-issues-detected') }}
    </p>
    <ul>
    {% for msg in messages %}
        {% if msg not in shown %}
            {% set shown = shown|merge([msg]) %}

            {% if msg is json %}
                {% set msg = msg|json_decode %}
                <li>
                    {{ msg.notice|ymllink }}
                    {% if msg.info|default() %}
                        <br><small>{{ msg.info|raw }}</small>
                    {% endif %}
                </li>
            {% else %}
                <li>{{ msg|ymllink }}</li>
            {% endif %}
        {% endif %}
    {% endfor %}
    </ul>
{% endblock panel_body %}
", "@bolt/_sub/_configuration_notices.twig", "");
    }
}
