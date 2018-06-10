<?php

/* partials/_navbar.twig */
class __TwigTemplate_afa2f51123b58904655c36eba5e5be81abfb5942d02707610a614b869156fd7b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_navbar.twig"));

        $tags = array("if" => 17, "set" => 36);
        $filters = array("escape" => 38);
        $functions = array("path" => 4, "auth_has_role" => 17, "is_auth" => 36, "auth" => 36, "auth_link_auth_logout" => 43, "auth_auth_login" => 54, "auth_link_auth_reset" => 56);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('escape'),
                array('path', 'auth_has_role', 'is_auth', 'auth', 'auth_link_auth_logout', 'auth_auth_login', 'auth_link_auth_reset')
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
        echo "<body id=\"login\">
    <nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\" style=\"padding:15px;margin-left:40px;margin-right:40px;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand text-capitalize\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
        echo "\" style=\"margin:0px;padding:0px;\">Independent Tutorials</a>
            <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\" style=\"padding:0px;\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\" style=\"margin:0px;\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/about-us\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/\">News</a>
                    </li>
                    ";
        // line 17
        if ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Tutor")) {
            // line 18
            echo "                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Tutorial</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/submited_tutorials\" >Submitted Tutorials</a> <br>
                                    </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/my_tutorials\" >Created Tutorials  </a>
                                </div>           
                            </a> 
                        </div>
                    </li>
                    ";
        } else {
            // line 32
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/my_tutorials\">Tutorials</a>
                    </li>
                    ";
        }
        // line 36
        echo "                    ";
        if ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->isAuth()) {
            echo " ";
            $context["auth"] = $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getAuth();
            // line 37
            echo "                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "displayname", array()), "html", null, true));
            echo "</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/edit_Profile\" >Profile</a>
                                    <a class=\"btn btn-light\" href=\"";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getLinkLogout());
            echo "\" >Logout</a>
                                </div>
                                <a class=\"label-link\" href=\"/page/test\">Feedback</a>
                            </a>
                        </div>
                    </li>
                   ";
        } else {
            // line 50
            echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Sign In</a>
                                <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:2px;margin-left:-150px;\">
                                    <a class=\"dropdown-item\" role=\"presentation\">
                                        ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->renderLogin($this->env));
            echo "
                                        <a class=\"btn btn-light\" href=\"/page/Registration\">Registration</a>
                                        <a class=\"btn btn-light\" href=\"";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getLinkReset());
            echo "\">Forgot password?</a>
                                    </a>
                                    </div>
                                    ";
        }
        // line 60
        echo "                                </div>
                        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  128 => 56,  123 => 54,  117 => 50,  107 => 43,  99 => 38,  96 => 37,  91 => 36,  85 => 32,  69 => 18,  67 => 17,  51 => 4,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body id=\"login\">
    <nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\" style=\"padding:15px;margin-left:40px;margin-right:40px;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand text-capitalize\" href=\"{{ path('homepage') }}\" style=\"margin:0px;padding:0px;\">Independent Tutorials</a>
            <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\" style=\"padding:0px;\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\" style=\"margin:0px;\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/about-us\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/\">News</a>
                    </li>
                    {% if auth_has_role('Tutor') %}
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Tutorial</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/submited_tutorials\" >Submitted Tutorials</a> <br>
                                    </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/my_tutorials\" >Created Tutorials  </a>
                                </div>           
                            </a> 
                        </div>
                    </li>
                    {% else %}
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/my_tutorials\">Tutorials</a>
                    </li>
                    {% endif %}
                    {% if is_auth() %} {% set auth = auth() %}
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">{{ auth.displayname }}</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/edit_Profile\" >Profile</a>
                                    <a class=\"btn btn-light\" href=\"{{auth_link_auth_logout()}}\" >Logout</a>
                                </div>
                                <a class=\"label-link\" href=\"/page/test\">Feedback</a>
                            </a>
                        </div>
                    </li>
                   {% else %}
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Sign In</a>
                                <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:2px;margin-left:-150px;\">
                                    <a class=\"dropdown-item\" role=\"presentation\">
                                        {{ auth_auth_login()}}
                                        <a class=\"btn btn-light\" href=\"/page/Registration\">Registration</a>
                                        <a class=\"btn btn-light\" href=\"{{ auth_link_auth_reset() }}\">Forgot password?</a>
                                    </a>
                                    </div>
                                    {% endif %}
                                </div>
                        </div>
", "partials/_navbar.twig", "");
    }
}
