<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_17a79d4fbe18dd72bb19958185c56a8425b1056094b6f3761bb2102ce9e9baa0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $tags = array("for" => 26, "if" => 27, "with" => 28);
        $filters = array("escape" => 2);
        $functions = array("include" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'with'),
                array('escape'),
                array('include')
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
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var elem = this.parentNode;
        if (elem.style.display == 'none') {
            document.getElementById('sfToolbarMainContent-";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
            document.getElementById('sfToolbarClearer-";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
            elem.style.display = 'block';
        } else {
            document.getElementById('sfToolbarMainContent-";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
            document.getElementById('sfToolbarClearer-";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
            elem.style.display = 'none'
        }

        Sfjs.setPreference('toolbar/displayState', 'block');
    \">
        ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg"));
        echo "
    </a>
</div>
<style>
    ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? null), "floatable" => true)));
        echo "
</style>
<div id=\"sfToolbarClearer-";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" style=\"clear: both; height: 36px;\"></div>

<div id=\"sfToolbarMainContent-";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 27
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 27)->hasBlock("toolbar", $context)) {
                // line 28
                echo "            ";
                $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = array("collector" => $this->getAttribute(                // line 29
($context["profile"] ?? null), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 30
($context["profiler_url"] ?? null), "token" => $this->getAttribute(                // line 31
($context["profile"] ?? null), "token", array()), "name" =>                 // line 32
$context["name"], "profiler_markup_version" =>                 // line 33
($context["profiler_markup_version"] ?? null));
                if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
                // line 35
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 35)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 37
                echo "        ";
            }
            // line 38
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var p = this.parentNode;
        p.style.display = 'none';
        (p.previousElementSibling || p.previousSibling).style.display = 'none';
        document.getElementById('sfMiniToolbar-";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
        Sfjs.setPreference('toolbar/displayState', 'none');
    \">
        ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Icon/close.svg"));
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 47,  163 => 44,  156 => 39,  142 => 38,  139 => 37,  133 => 35,  126 => 33,  125 => 32,  124 => 31,  123 => 30,  122 => 29,  120 => 28,  117 => 27,  100 => 26,  96 => 25,  91 => 23,  86 => 21,  79 => 17,  70 => 11,  66 => 10,  60 => 7,  56 => 6,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var elem = this.parentNode;
        if (elem.style.display == 'none') {
            document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
            document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
            elem.style.display = 'block';
        } else {
            document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
            document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
            elem.style.display = 'none'
        }

        Sfjs.setPreference('toolbar/displayState', 'block');
    \">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<style>
    {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
</style>
<div id=\"sfToolbarClearer-{{ token }}\" style=\"clear: both; height: 36px;\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
        var p = this.parentNode;
        p.style.display = 'none';
        (p.previousElementSibling || p.previousSibling).style.display = 'none';
        document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
        Sfjs.setPreference('toolbar/displayState', 'none');
    \">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
