<?php

/* @bolt/dashboard/_aside.twig */
class __TwigTemplate_876cc35580d437341706b29ab5e666f39c3d86a2aed553ed2812ccb3ad052e34 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_aside.twig"));

        $tags = array("import" => 1);
        $filters = array();
        $functions = array("include" => 4, "widgets" => 7, "render" => 10, "path" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import'),
                array(),
                array('include', 'widgets', 'render', 'path')
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
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/dashboard/_aside.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_configuration_notices.twig"));
        echo "

";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "dashboard_aside_top", "backend"));
        echo "

";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardnews")));
        echo "

";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["panels"]->getstack(7, true));
        echo "

";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "dashboard_aside_middle", "backend"));
        echo "

";
        // line 19
        echo "<div data-bolt-widget=\"panelActivity\" data-url=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity"));
        echo "\">
    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity")));
        echo "
</div>

";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "dashboard_aside_bottom", "backend"));
        echo "

";
        // line 27
        echo "<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  87 => 24,  81 => 20,  76 => 19,  71 => 16,  66 => 13,  61 => 10,  56 => 7,  51 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_panels.twig' as panels %}

{# Configuration notices #}
{{ include('@bolt/_sub/_configuration_notices.twig') }}

{# Dashboard Widget #}
{{ widgets('dashboard_aside_top', 'backend') }}

{# News #}
{{ render(path('dashboardnews')) }}

{# Stack #}
{{ panels.stack(7, true) }}

{# Dashboard Widget #}
{{ widgets('dashboard_aside_middle', 'backend') }}

{# Latest Activity #}
<div data-bolt-widget=\"panelActivity\" data-url=\"{{ path('latestactivity') }}\">
    {{ render(path('latestactivity')) }}
</div>

{# Dashboard Widget #}
{{ widgets('dashboard_aside_bottom', 'backend') }}

{# ? #}
<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
", "@bolt/dashboard/_aside.twig", "");
    }
}
