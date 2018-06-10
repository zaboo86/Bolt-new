<?php

/* @bolt/_nav/_secondary-extensions.twig */
class __TwigTemplate_34d48aa03682a3947f7ae78d6c5e8321876d3cbaa13ca149e61dedc19404924e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-extensions.twig"));

        $tags = array("import" => 1, "set" => 4, "if" => 15, "for" => 20);
        $filters = array("merge" => 8, "length" => 10, "default" => 22);
        $functions = array("__" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'set', 'if', 'for'),
                array('merge', 'length', 'default'),
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
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary-extensions.twig", 1);
        // line 2
        echo "
";
        // line 4
        $context["sub"] = array();
        // line 5
        $context["extend_menu"] = $this->getAttribute(($context["menus"] ?? null), "get", array(0 => "extensions"), "method");
        // line 6
        echo "
";
        // line 8
        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => array("icon" => $this->getAttribute(        // line 9
($context["extend_menu"] ?? null), "icon", array()), "label" => (((twig_length_filter($this->env, $this->getAttribute(        // line 10
($context["extend_menu"] ?? null), "children", array())) > 0)) ? ($this->getAttribute(($context["extend_menu"] ?? null), "label", array())) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.extensions"))), "uri" => $this->getAttribute(        // line 11
($context["extend_menu"] ?? null), "uri", array()))));
        // line 13
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute(($context["extend_menu"] ?? null), "children", array())) > 0)) {
            // line 16
            echo "    ";
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => "-"));
        }
        // line 18
        echo "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["extend_menu"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extend_submenu"]) {
            // line 21
            echo "    ";
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => array("icon" => (($this->getAttribute(            // line 22
$context["extend_submenu"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["extend_submenu"], "icon", array()), "fa:briefcase")) : ("fa:briefcase")), "label" => $this->getAttribute(            // line 23
$context["extend_submenu"], "label", array()), "uri" => $this->getAttribute(            // line 24
$context["extend_submenu"], "uri", array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extend_submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu("fa:cubes", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.extensions"), ($context["sub"] ?? null), (($context["page_nav"] ?? null) == "Settings/ExtendBolt")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  89 => 27,  83 => 24,  82 => 23,  81 => 22,  79 => 21,  75 => 20,  72 => 18,  68 => 16,  66 => 15,  63 => 13,  61 => 11,  60 => 10,  59 => 9,  58 => 8,  55 => 6,  53 => 5,  51 => 4,  48 => 2,  46 => 1,);
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

{# Empty array for submenu #}
{% set sub = [] %}
{% set extend_menu = menus.get('extensions') %}

{# Add the \"view\" and \"configure\" options #}
{% set sub = sub|merge([{
    icon: extend_menu.icon,
    label: (extend_menu.children|length > 0) ? extend_menu.label : __('general.phrase.extensions'),
    uri: extend_menu.uri
}]) %}

{# Add a divider, if there are any items to print. We don't want a divider with nothing below it #}
{% if extend_menu.children|length > 0 %}
    {% set sub = sub|merge(['-']) %}
{% endif %}

{# Add the available extensions that have added a menu-item. #}
{% for extend_submenu in extend_menu.children %}
    {% set sub = sub|merge([{
        icon: extend_submenu.icon|default('fa:briefcase'),
        label: extend_submenu.label,
        uri: extend_submenu.uri
    }]) %}
{% endfor %}

{{ nav.submenu('fa:cubes', __('general.phrase.extensions'), sub, (page_nav == 'Settings/ExtendBolt')) }}
", "@bolt/_nav/_secondary-extensions.twig", "");
    }
}
