<?php

/* @WebProfiler/Icon/time.svg */
class __TwigTemplate_0901df754c147f0700ee6e5ca7969ba638f257f527539914b68a17d24e1f23ee extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/time.svg"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M15.1,4.3c-2.1-0.5-4.2-0.5-6.2,0C8.6,4.3,8.2,4.1,8.2,3.8V3.4c0-1.2,1-2.3,2.3-2.3h3c1.2,0,2.3,1,2.3,2.3
    v0.3C15.8,4.1,15.4,4.3,15.1,4.3z M20.9,14c0,4.9-4,8.9-8.9,8.9s-8.9-4-8.9-8.9s4-8.9,8.9-8.9S20.9,9.1,20.9,14z M16.7,15
    c0-0.6-0.4-1-1-1H13V8.4c0-0.6-0.4-1-1-1s-1,0.4-1,1v6.2c0,0.6,0.4,1.3,1,1.3h3.7C16.2,16,16.7,15.6,16.7,15z\"/>
</svg>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/time.svg";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M15.1,4.3c-2.1-0.5-4.2-0.5-6.2,0C8.6,4.3,8.2,4.1,8.2,3.8V3.4c0-1.2,1-2.3,2.3-2.3h3c1.2,0,2.3,1,2.3,2.3
    v0.3C15.8,4.1,15.4,4.3,15.1,4.3z M20.9,14c0,4.9-4,8.9-8.9,8.9s-8.9-4-8.9-8.9s4-8.9,8.9-8.9S20.9,9.1,20.9,14z M16.7,15
    c0-0.6-0.4-1-1-1H13V8.4c0-0.6-0.4-1-1-1s-1,0.4-1,1v6.2c0,0.6,0.4,1.3,1,1.3h3.7C16.2,16,16.7,15.6,16.7,15z\"/>
</svg>
", "@WebProfiler/Icon/time.svg", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Icon/time.svg");
    }
}
