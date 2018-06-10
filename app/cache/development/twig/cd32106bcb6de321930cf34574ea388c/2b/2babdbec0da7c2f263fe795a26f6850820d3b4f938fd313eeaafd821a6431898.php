<?php

/* @bolt/_nav/_secondary.twig */
class __TwigTemplate_398acbab82fa9537e0f414da74ce5cff0d07b7adfb266d6ed00e6bda0c27eb05 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary.twig"));

        $tags = array("import" => 1, "if" => 4, "set" => 5, "for" => 40);
        $filters = array();
        $functions = array("path" => 11, "__" => 17, "include" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'if', 'set', 'for'),
                array(),
                array('path', '__', 'include')
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
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "has", array(0 => "authentication"), "method")) {
            // line 5
            echo "        ";
            $context["menus"] = $this->getAttribute(($context["app"] ?? null), "menu.admin", array(), "array");
            // line 6
            echo "
        ";
            // line 8
            echo "        <li class=\"search\">
            <form class=\"navbar-form\">
                <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
                    <select class=\"form-control\" data-omnisearch-url=\"";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("omnisearch"));
            echo "\"></select>
                </div>
            </form>
        </li>

        ";
            // line 17
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getlink("fa:dashboard", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.dashboard"), "dashboard", (($context["page_nav"] ?? null) == "Dashboard")));
            echo "

        ";
            // line 20
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.view-site"));
            echo "</a>
        </li>

        ";
            // line 25
            echo "        <li class=\"divider\">
            <em>";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getlabel("fa:file-text", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.content")));
            echo "</em>
        </li>
        ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_secondary-content.twig"));
            echo "

        ";
            // line 31
            echo "        ";
            if (((($this->getAttribute(($context["menus"] ?? null), "has", array(0 => "config"), "method") || $this->getAttribute(($context["menus"] ?? null), "has", array(0 => "files"), "method")) || $this->getAttribute(($context["menus"] ?? null), "has", array(0 => "translations"), "method")) || $this->getAttribute(($context["menus"] ?? null), "has", array(0 => "extensions"), "method"))) {
                // line 32
                echo "            <li class=\"divider\">
                <em>";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getlabel("fa:wrench", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.settings")));
                echo "</em>
            </li>
        ";
            }
            // line 36
            echo "        ";
            if ($this->getAttribute(($context["menus"] ?? null), "has", array(0 => "config"), "method")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_secondary-configuration.twig"));
            }
            // line 37
            echo "        ";
            if ($this->getAttribute(($context["menus"] ?? null), "has", array(0 => "files"), "method")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_secondary-filemanagement.twig"));
            }
            // line 38
            echo "        ";
            if ($this->getAttribute(($context["menus"] ?? null), "has", array(0 => "extensions"), "method")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_nav/_secondary-extensions.twig"));
            }
            // line 39
            echo "        ";
            if ($this->getAttribute(($context["menus"] ?? null), "has", array(0 => "custom"), "method")) {
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["menus"] ?? null), "get", array(0 => "custom"), "method"), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 41
                    echo "                ";
                    if (($this->getAttribute($context["menu"], "children", array()) != null)) {
                        // line 42
                        echo "                    ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu($this->getAttribute($context["menu"], "icon", array()), $this->getAttribute($context["menu"], "label", array()), $this->getAttribute($context["menu"], "children", array())));
                        echo "
                ";
                    } else {
                        // line 44
                        echo "                    ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu(null, null, array(0 => $context["menu"])));
                        echo "
                ";
                    }
                    // line 46
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        ";
            }
            // line 48
            echo "
        ";
            // line 50
            echo "        <li class=\"nav-secondary-collapse\">
            <a href=\"#\">";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getlabel("fa:compress", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.collapse-sidebar")));
            echo "</a>
        </li>
        <li class=\"nav-secondary-expand\">
            <a href=\"#\">";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getlabel("fa:expand", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Expand sidebar")));
            echo "</a>
        </li>
    ";
        } else {
            // line 57
            echo "        ";
            // line 58
            echo "        <li>
            <a href=\"";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.view-site"));
            echo "</a>
        </li>

        ";
            // line 63
            echo "        <li>
            <a href=\"";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login"));
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.login"));
            echo "</a>
        </li>
    ";
        }
        // line 67
        echo "</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 67,  196 => 64,  193 => 63,  185 => 59,  182 => 58,  180 => 57,  174 => 54,  168 => 51,  165 => 50,  162 => 48,  159 => 47,  153 => 46,  147 => 44,  141 => 42,  138 => 41,  133 => 40,  130 => 39,  125 => 38,  120 => 37,  115 => 36,  109 => 33,  106 => 32,  103 => 31,  98 => 28,  93 => 26,  90 => 25,  82 => 21,  79 => 20,  73 => 17,  65 => 11,  60 => 8,  57 => 6,  54 => 5,  52 => 4,  48 => 2,  46 => 1,);
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

<ul class=\"nav\">
    {% if app.session.has('authentication') %}
        {% set menus = app['menu.admin'] %}

        {# Omnisearch: one here for \"extra small\", the other in the header-navbar #}
        <li class=\"search\">
            <form class=\"navbar-form\">
                <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
                    <select class=\"form-control\" data-omnisearch-url=\"{{ path('omnisearch') }}\"></select>
                </div>
            </form>
        </li>

        {# Dashboard #}
        {{ nav.link('fa:dashboard', __('general.phrase.dashboard'), 'dashboard', (page_nav == 'Dashboard')) }}

        {# View site #}
        <li class=\"visible-xs\">
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </li>

        {# ContentTypes #}
        <li class=\"divider\">
            <em>{{ nav.label('fa:file-text', __('general.phrase.content')) }}</em>
        </li>
        {{ include('@bolt/_nav/_secondary-content.twig') }}

        {# Settings #}
        {% if menus.has('config') or menus.has('files') or menus.has('translations') or menus.has('extensions') %}
            <li class=\"divider\">
                <em>{{ nav.label('fa:wrench', __('general.phrase.settings')) }}</em>
            </li>
        {% endif %}
        {% if menus.has('config') %}{{ include('@bolt/_nav/_secondary-configuration.twig') }}{% endif %}
        {% if menus.has('files') %}{{ include('@bolt/_nav/_secondary-filemanagement.twig') }}{% endif %}
        {% if menus.has('extensions') %}{{ include('@bolt/_nav/_secondary-extensions.twig') }}{% endif %}
        {% if menus.has('custom') %}
            {% for menu in menus.get('custom').children %}
                {% if menu.children != null %}
                    {{ nav.submenu(menu.icon, menu.label, menu.children) }}
                {% else %}
                    {{ nav.submenu(null, null, [menu]) }}
                {% endif %}
            {% endfor %}
        {% endif %}

        {# Collapse/expand sidebar #}
        <li class=\"nav-secondary-collapse\">
            <a href=\"#\">{{ nav.label('fa:compress', __('general.phrase.collapse-sidebar')) }}</a>
        </li>
        <li class=\"nav-secondary-expand\">
            <a href=\"#\">{{ nav.label('fa:expand', __('Expand sidebar')) }}</a>
        </li>
    {% else %}
        {# View site #}
        <li>
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </li>

        {# Login #}
        <li>
            <a href=\"{{ path('login') }}\"><i class=\"fa fa-signin\"></i> {{ __('general.phrase.login') }}</a>
        </li>
    {% endif %}
</ul>
", "@bolt/_nav/_secondary.twig", "");
    }
}
