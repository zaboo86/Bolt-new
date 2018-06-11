<?php

/* partials/_footer.twig */
class __TwigTemplate_89f8677ae29c6491b64f62cf263c1214845e0ac210697799f3cecd207985591f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_footer.twig"));

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

        // line 3
        echo "<div class=\"footer-clean\">
            <footer>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>Services</h3>
                            <ul>
                                <li><a href=\"#\">Web design</a></li>
                                <li><a href=\"#\">Development</a></li>
                                <li><a href=\"#\">Hosting</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>About US</h3>
                            <ul>
                                <li><a href=\"#\">Team</a></li>
                                <li><a href=\"#\">Legacy</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>Careers</h3>
                            <ul>
                                <li><a href=\"#\">Job openings</a></li>
                                <li><a href=\"#\">Employee success</a></li>
                                <li><a href=\"#\">Benefits</a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-3 item social\">
                            <p class=\"copyright\">StudCrop © 2018</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Der Footer wird erstellt #}
{# Dem Footer haben wir für unser Projekt zurzeit noch keine relevanz geschenkt und dient nur als deko #}
<div class=\"footer-clean\">
            <footer>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>Services</h3>
                            <ul>
                                <li><a href=\"#\">Web design</a></li>
                                <li><a href=\"#\">Development</a></li>
                                <li><a href=\"#\">Hosting</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>About US</h3>
                            <ul>
                                <li><a href=\"#\">Team</a></li>
                                <li><a href=\"#\">Legacy</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-4 col-md-3 item\">
                            <h3>Careers</h3>
                            <ul>
                                <li><a href=\"#\">Job openings</a></li>
                                <li><a href=\"#\">Employee success</a></li>
                                <li><a href=\"#\">Benefits</a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-3 item social\">
                            <p class=\"copyright\">StudCrop © 2018</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
", "partials/_footer.twig", "");
    }
}
