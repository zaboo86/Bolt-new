<?php

/* pages/about_us.twig */
class __TwigTemplate_430e0db0b5cbdb250169d6558f6a9fac804542b81c21d3b872df063724615451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "pages/about_us.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/about_us.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
<body>
    <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row register-form\">
                <div class=\"col-md-8 offset-md-2\">
                    
                    <br><br>
                    <h4> About Us </h4>
                   
                    Wir sind ein junges Studenten-Team, welches in einem Studium-Projekt, <br>
                    dieses Projekt ins leben gerufen hat. <br><br>
                    
                    Wir sind:
                    Kristoff Klan, Leon Gerlach, Moritz Maart, Jan Hamer & Nils Krebs
                    <br><br>
                    Bei Fragen schickt uns gerne eine Email.
                    <br>
                    Peterwur@web.de<br>
                    (Das ist eine E-Mail von Nils Krebs)
                </div>
            </div>
        </div>
        <div class=\"bottom-container\">
            <div class=\"row\">
                <div class=\"col\">
                </div>
                <div class=\"col\">
                </div>
            </div>
        </div>
    </div>
</body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/about_us.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 3,  58 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}
{% block main%}

<body>
    <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row register-form\">
                <div class=\"col-md-8 offset-md-2\">
                    
                    <br><br>
                    <h4> About Us </h4>
                   
                    Wir sind ein junges Studenten-Team, welches in einem Studium-Projekt, <br>
                    dieses Projekt ins leben gerufen hat. <br><br>
                    
                    Wir sind:
                    Kristoff Klan, Leon Gerlach, Moritz Maart, Jan Hamer & Nils Krebs
                    <br><br>
                    Bei Fragen schickt uns gerne eine Email.
                    <br>
                    Peterwur@web.de<br>
                    (Das ist eine E-Mail von Nils Krebs)
                </div>
            </div>
        </div>
        <div class=\"bottom-container\">
            <div class=\"row\">
                <div class=\"col\">
                </div>
                <div class=\"col\">
                </div>
            </div>
        </div>
    </div>
</body>


{% endblock %}
", "pages/about_us.twig", "");
    }
}
