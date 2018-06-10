<?php

/* @WebProfiler/Icon/twig.svg */
class __TwigTemplate_631356a8bd1f6e0f8ecd0fb574e368bfc7dde33321bc21103b2ad1823e7297ab extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

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
<path fill=\"#AAAAAA\" d=\"M20.1,1H3.9C2.3,1,1,2.3,1,3.9v16.3C1,21.7,2.3,23,3.9,23h16.3c1.6,0,2.9-1.3,2.9-2.9V3.9
    C23,2.3,21.7,1,20.1,1z M21,20.1c0,0.5-0.4,0.9-0.9,0.9H3.9C3.4,21,3,20.6,3,20.1V3.9C3,3.4,3.4,3,3.9,3h16.3C20.6,3,21,3.4,21,3.9
    V20.1z M5,5h14v3H5V5z M5,10h3v9H5V10z M10,10h9v9h-9V10z\"/>
</svg>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/twig.svg";
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
<path fill=\"#AAAAAA\" d=\"M20.1,1H3.9C2.3,1,1,2.3,1,3.9v16.3C1,21.7,2.3,23,3.9,23h16.3c1.6,0,2.9-1.3,2.9-2.9V3.9
    C23,2.3,21.7,1,20.1,1z M21,20.1c0,0.5-0.4,0.9-0.9,0.9H3.9C3.4,21,3,20.6,3,20.1V3.9C3,3.4,3.4,3,3.9,3h16.3C20.6,3,21,3.4,21,3.9
    V20.1z M5,5h14v3H5V5z M5,10h3v9H5V10z M10,10h9v9h-9V10z\"/>
</svg>
", "@WebProfiler/Icon/twig.svg", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Icon/twig.svg");
    }
}
