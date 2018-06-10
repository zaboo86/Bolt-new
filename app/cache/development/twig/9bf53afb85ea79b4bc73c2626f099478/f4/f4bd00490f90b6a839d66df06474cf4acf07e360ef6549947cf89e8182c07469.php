<?php

/* @bolt/_nav/_secondary-configuration.twig */
class __TwigTemplate_26665fa0c214e2546b9ad9fcbff5e73505c60baa35a14939d49bba7f8979f0f3 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-configuration.twig"));

        $tags = array("import" => 1, "spaceless" => 2, "set" => 3, "if" => 6);
        $filters = array("merge" => 6);
        $functions = array("__" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'spaceless', 'set', 'if'),
                array('merge'),
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

        // line 1
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary-configuration.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["menu"] = $this->getAttribute(($context["menus"] ?? null), "get", array(0 => "config"), "method");
        // line 4
        echo "    ";
        $context["sub"] = array();
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "users"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "users"), "method")));
        }
        // line 7
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "config_main"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "config_main"), "method")));
        }
        // line 8
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "config_contenttypes"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "config_contenttypes"), "method")));
        }
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "config_taxonomy"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "config_taxonomy"), "method")));
        }
        // line 10
        echo "
    ";
        // line 11
        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => "-"));
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "config_menu"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "config_menu"), "method")));
        }
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "config_routing"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "config_routing"), "method")));
        }
        // line 15
        echo "
    ";
        // line 16
        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => "-"));
        // line 17
        echo "
    ";
        // line 18
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "dbcheck"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "dbcheck"), "method")));
        }
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "clearcache"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "clearcache"), "method")));
        }
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "log_change"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "log_change"), "method")));
        }
        // line 21
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "log_system"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "log_system"), "method")));
        }
        // line 22
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "setup_checks"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "setup_checks"), "method")));
        }
        // line 23
        echo "
    ";
        // line 24
        if (($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "tr_messages"), "method") || $this->getAttribute(($context["menu"] ?? null), "has", array(0 => "tr_long_messages"), "method"))) {
            // line 25
            echo "        ";
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => "-"));
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "tr_messages"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "tr_messages"), "method")));
        }
        // line 28
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "tr_long_messages"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "tr_long_messages"), "method")));
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu("fa:cogs", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.configuration"), ($context["sub"] ?? null), (($context["page_nav"] ?? null) == "Settings/Configuration")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 31,  148 => 29,  143 => 28,  138 => 27,  135 => 26,  132 => 25,  130 => 24,  127 => 23,  122 => 22,  117 => 21,  112 => 20,  107 => 19,  103 => 18,  100 => 17,  98 => 16,  95 => 15,  90 => 14,  86 => 13,  83 => 12,  81 => 11,  78 => 10,  73 => 9,  68 => 8,  63 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_nav/_macros.twig' as nav %}
{% spaceless %}
    {% set menu = menus.get('config') %}
    {% set sub = [] %}

    {% if menu.has('users') %}{% set sub = sub|merge([menu.get('users')]) %}{% endif %}
    {% if menu.has('config_main') %}{% set sub = sub|merge([menu.get('config_main')]) %}{% endif %}
    {% if menu.has('config_contenttypes') %}{% set sub = sub|merge([menu.get('config_contenttypes')]) %}{% endif %}
    {% if menu.has('config_taxonomy') %}{% set sub = sub|merge([menu.get('config_taxonomy')]) %}{% endif %}

    {% set sub = sub|merge(['-']) %}

    {% if menu.has('config_menu') %}{% set sub = sub|merge([menu.get('config_menu')]) %}{% endif %}
    {% if menu.has('config_routing') %}{% set sub = sub|merge([menu.get('config_routing')]) %}{% endif %}

    {% set sub = sub|merge(['-']) %}

    {% if menu.has('dbcheck') %}{% set sub = sub|merge([menu.get('dbcheck')]) %}{% endif %}
    {% if menu.has('clearcache') %}{% set sub = sub|merge([menu.get('clearcache')]) %}{% endif %}
    {% if menu.has('log_change') %}{% set sub = sub|merge([menu.get('log_change')]) %}{% endif %}
    {% if menu.has('log_system') %}{% set sub = sub|merge([menu.get('log_system')]) %}{% endif %}
    {% if menu.has('setup_checks') %}{% set sub = sub|merge([menu.get('setup_checks')]) %}{% endif %}

    {% if menu.has('tr_messages') or menu.has('tr_long_messages') %}
        {% set sub = sub|merge(['-']) %}
    {% endif %}
    {% if menu.has('tr_messages') %}{% set sub = sub|merge([menu.get('tr_messages')]) %}{% endif %}
    {% if menu.has('tr_long_messages') %}{% set sub = sub|merge([menu.get('tr_long_messages')]) %}{% endif %}

{% endspaceless %}
{{ nav.submenu('fa:cogs', __('general.phrase.configuration'), sub, (page_nav == 'Settings/Configuration')) }}
", "@bolt/_nav/_secondary-configuration.twig", "");
    }
}
