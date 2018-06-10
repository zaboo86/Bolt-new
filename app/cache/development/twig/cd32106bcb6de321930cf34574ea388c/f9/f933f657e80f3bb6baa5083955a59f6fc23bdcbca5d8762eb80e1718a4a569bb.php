<?php

/* @bolt/_nav/_secondary-content.twig */
class __TwigTemplate_41806a5f0e1418b9e9941d2f52cde1e5d1aa44ff81e1808c7c6cb942847753b6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-content.twig"));

        $tags = array("import" => 1, "set" => 3, "if" => 6, "for" => 7);
        $filters = array("default" => 3, "first" => 14, "merge" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'set', 'if', 'for'),
                array('default', 'first', 'merge'),
                array()
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
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary-content.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["content_menus"] = (($this->getAttribute($this->getAttribute(($context["menus"] ?? null), "get", array(0 => "content"), "method", false, true), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["menus"] ?? null), "get", array(0 => "content"), "method", false, true), "children", array()), array())) : (array()));
        // line 4
        echo "
";
        // line 6
        if ($this->getAttribute(($context["content_menus"] ?? null), "main", array(), "any", true, true)) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content_menus"] ?? null), "main", array()), "children", array()));
            foreach ($context['_seq'] as $context["name"] => $context["menu"]) {
                // line 8
                echo "        ";
                $context["sub"] = array();
                // line 9
                echo "
        ";
                // line 10
                if ($this->getAttribute($context["menu"], "group", array())) {
                    // line 11
                    echo "            ";
                    $context["active"] = false;
                    // line 12
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_menu"]) {
                        // line 13
                        echo "                ";
                        if ($this->getAttribute($context["sub_menu"], "has", array(0 => "singleton"), "method")) {
                            // line 14
                            echo "                    ";
                            $context["sub_menu"] = twig_first($this->env, $this->getAttribute($context["sub_menu"], "children", array()));
                            // line 15
                            echo "                ";
                        }
                        // line 16
                        echo "                ";
                        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $context["sub_menu"]));
                        // line 17
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "        ";
                } else {
                    // line 19
                    echo "            ";
                    $context["active"] = ((($context["page_nav"] ?? null) == "Content/*") && ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["name"]));
                    // line 20
                    echo "            ";
                    $context["is_submenu"] = false;
                    // line 21
                    echo "
            ";
                    // line 23
                    echo "            ";
                    if ($this->getAttribute($context["menu"], "has", array(0 => "view"), "method")) {
                        // line 24
                        echo "                ";
                        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute($context["menu"], "get", array(0 => "view"), "method")));
                        // line 25
                        echo "            ";
                    }
                    // line 26
                    echo "            ";
                    if ($this->getAttribute($context["menu"], "has", array(0 => "new"), "method")) {
                        // line 27
                        echo "                ";
                        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute($context["menu"], "get", array(0 => "new"), "method")));
                        // line 28
                        echo "            ";
                    }
                    // line 29
                    echo "            ";
                    $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => "-"));
                    // line 30
                    echo "
            ";
                    // line 32
                    echo "            ";
                    if ($this->getAttribute($context["menu"], "has", array(0 => "recent"), "method")) {
                        // line 33
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["menu"], "get", array(0 => "recent"), "method"), "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["record_menu"]) {
                            // line 34
                            echo "                    ";
                            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $context["record_menu"]));
                            // line 35
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record_menu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "            ";
                    } elseif ($this->getAttribute($context["menu"], "has", array(0 => "singleton"), "method")) {
                        // line 37
                        echo "                ";
                        $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => twig_first($this->env, $this->getAttribute($context["menu"], "children", array()))));
                        // line 38
                        echo "            ";
                    }
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "
        ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu($this->getAttribute($context["menu"], "icon", array()), $this->getAttribute($context["menu"], "label", array()), ($context["sub"] ?? null), ($context["active"] ?? null),  !$this->getAttribute($context["menu"], "group", array()), null, $this->getAttribute($context["menu"], "group", array())));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 41,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  150 => 36,  144 => 35,  141 => 34,  136 => 33,  133 => 32,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 21,  103 => 20,  100 => 19,  97 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  74 => 12,  71 => 11,  69 => 10,  66 => 9,  63 => 8,  58 => 7,  56 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
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

{% set content_menus = menus.get('content').children|default([]) %}

{# Each \"main\" ContentType menu and sub-menu #}
{% if content_menus.main is defined %}
    {% for name, menu in content_menus.main.children %}
        {% set sub = [] %}

        {% if menu.group %}
            {% set active = false %}
            {% for sub_menu in menu.children %}
                {% if sub_menu.has('singleton') %}
                    {% set sub_menu = sub_menu.children|first %}
                {% endif %}
                {% set sub = sub|merge([sub_menu]) %}
            {% endfor %}
        {% else %}
            {% set active = (page_nav == 'Content/*' and context.contenttype.slug|default == name) %}
            {% set is_submenu = false %}

            {# View ContentType & New ContentType #}
            {% if menu.has('view') %}
                {% set sub = sub|merge([menu.get('view')]) %}
            {% endif %}
            {% if menu.has('new') %}
                {% set sub = sub|merge([menu.get('new')]) %}
            {% endif %}
            {% set sub = sub|merge(['-']) %}

            {# Recently edited records for this ContentType #}
            {% if menu.has('recent') %}
                {% for record_menu in menu.get('recent').children %}
                    {% set sub = sub|merge([record_menu]) %}
                {% endfor %}
            {% elseif menu.has('singleton') %}
                {% set sub = sub|merge([menu.children|first]) %}
            {% endif %}
        {% endif %}

        {{ nav.submenu(menu.icon, menu.label, sub, active, not menu.group, null, menu.group) }}
    {% endfor %}
{% endif %}
", "@bolt/_nav/_secondary-content.twig", "");
    }
}
