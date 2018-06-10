<?php

/* @bolt/_nav/_footer.twig */
class __TwigTemplate_12184e7e40a83a83ed2f5b9912da45b939c0d04f29eb1d603275f01c92c66475 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_footer.twig"));

        $tags = array("if" => 1);
        $filters = array("raw" => 5, "escape" => 6, "replace" => 14);
        $functions = array("__" => 4, "constant" => 6, "path" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 'escape', 'replace'),
                array('__', 'constant', 'path')
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
        if ( !twig_test_empty($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/provided_link"), "method"))) {
            // line 2
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs ";
            // line 3
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        ";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.provided-by-colon"));
            echo "
        ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/provided_link"), "method"));
            echo " &ndash;
        <i class=\"fa fa-cog\"></i> <b>Bolt ";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_constant("Bolt\\Version::VERSION"), "html", null, true));
            echo "</b>:
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about"));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.about"));
            echo "</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

";
        } else {
            // line 12
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs bolt-footer-mini ";
            // line 13
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        <i class=\"fa fa-cog\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_replace_filter(twig_constant("Bolt\\Version::VERSION"), array("alpha" => "α", " beta " => "β")), "html", null, true));
            echo "</a> &ndash;
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about"));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.about"));
            echo "</a>
    </footer>

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  88 => 14,  82 => 13,  79 => 12,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.get('general/branding/provided_link') is not empty %}

    <footer id=\"bolt-footer\" class=\"hidden-xs {% if global.request.cookies.get('sidebar') %}bolt-footer-hidden{% endif %}\">
        {{ __('general.phrase.provided-by-colon') }}
        {{ config.get('general/branding/provided_link')|raw }} &ndash;
        <i class=\"fa fa-cog\"></i> <b>Bolt {{ constant('Bolt\\\\Version::VERSION') }}</b>:
        <i class=\"fa fa-heart\"></i > <a href=\"{{ path('about') }}\">{{ __('general.about') }}</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

{% else %}

    <footer id=\"bolt-footer\" class=\"hidden-xs bolt-footer-mini {% if global.request.cookies.get('sidebar') %}bolt-footer-hidden{% endif %}\">
        <i class=\"fa fa-cog\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt {{ constant('Bolt\\\\Version::VERSION')|replace({'alpha': 'α', ' beta ': 'β'}) }}</a> &ndash;
        <i class=\"fa fa-heart\"></i > <a href=\"{{ path('about') }}\">{{ __('general.about') }}</a>
    </footer>

{% endif %}
", "@bolt/_nav/_footer.twig", "");
    }
}
