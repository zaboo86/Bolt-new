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

        $tags = array("if" => 25, "set" => 67);
        $filters = array("escape" => 69);
        $functions = array("path" => 6, "auth_has_role" => 25, "is_auth" => 67, "auth" => 67, "auth_link_auth_logout" => 74, "auth_auth_login" => 86, "auth_link_auth_reset" => 88);

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

        // line 2
        echo "<body id=\"login\">
    <nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\" style=\"padding:15px;margin-left:40px;margin-right:40px;\">
        <div class=\"container-fluid\">
";
        // line 6
        echo "            <a class=\"navbar-brand text-capitalize\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage"));
        echo "\" style=\"margin:0px;padding:0px;\">Independent Tutorials</a>
            <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\" style=\"padding:0px;\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"navbar-toggler-icon\"></span>
            </button>

";
        // line 13
        echo "            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\" style=\"margin:0px;\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/about-us\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/\">News</a>
                    </li>

";
        // line 25
        echo "                    ";
        if ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Tutor")) {
            // line 26
            echo "                     <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Creation</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px; \">
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-tutorial\" style=\"display: block; width: 97%;\">Tutorial</a>
                                    </div>
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-entries\" style=\"display: block; width: 97%;\">Entry</a>
                                </div>      
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-quiz\" style=\"display: block; width: 97%;\">Quiz</a>
                                </div>    
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/upload\" style=\"display: block; width: 97%;\">Upload</a>
                                </div>    
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Tutorial</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px; \">
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/submited_tutorials\" style=\"display: block; width: 97%;\">Submitted Tutorials</a>
                                    </div>
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/my_tutorials\" style=\"display: block; width: 97%;\"  >Created Tutorials  </a>
                                </div>           
                            </a>
                        </div>
                    </li>
                    ";
        } else {
            // line 61
            echo "                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/my_tutorials\">Tutorials</a>
                    </li>
                    ";
        }
        // line 67
        echo "                    ";
        if ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->isAuth()) {
            echo " ";
            $context["auth"] = $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getAuth();
            // line 68
            echo "                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["auth"] ?? null), "displayname", array()), "html", null, true));
            echo "</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/edit_Profile\" >Profile</a>
                                    <a class=\"btn btn-light\" href=\"";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getLinkLogout());
            echo "\" >Logout</a>
                                </div>
                            </a>
                        </div>
                    </li>
                   ";
        } else {
            // line 80
            echo "                    
";
            // line 82
            echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Sign In</a>
                                <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:2px;margin-left:-150px;\">
                                    <a class=\"dropdown-item\" role=\"presentation\">
                                        ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->renderLogin($this->env));
            echo "
                                        <a class=\"btn btn-light\" href=\"/page/Registration\">Registration</a>
                                        <a class=\"btn btn-light\" href=\"";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getLinkReset());
            echo "\">Forgot password?</a>
                                    </a>
                                    </div>
                                    ";
        }
        // line 92
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
        return array (  163 => 92,  156 => 88,  151 => 86,  145 => 82,  142 => 80,  133 => 74,  125 => 69,  122 => 68,  117 => 67,  111 => 61,  75 => 26,  72 => 25,  61 => 13,  51 => 6,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Die Navigationsleiste / unser Header wird erstellt  #}
<body id=\"login\">
    <nav class=\"navbar navbar-light navbar-expand-md sticky-top navigation-clean-search\" style=\"padding:15px;margin-left:40px;margin-right:40px;\">
        <div class=\"container-fluid\">
{# Unser Projekt-Name wird angegeben und dient als Home- Button #}
            <a class=\"navbar-brand text-capitalize\" href=\"{{ path('homepage') }}\" style=\"margin:0px;padding:0px;\">Independent Tutorials</a>
            <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\" style=\"padding:0px;\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"navbar-toggler-icon\"></span>
            </button>

{# Die Buttons der Navigationsleiste werden mit den entsprechenden Pfaden konfiguriert #}
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\" style=\"margin:0px;\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/about-us\">About Us</a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/\">News</a>
                    </li>

{# Wenn der User ein Tutor ist, erscheint ein weiteres Drop-Down-Menu 'Create',
der zum erstellen neuer Tutorials dient und ein Drop Down,
wo man zwischen den eingeschrieben und erstellen auswählen kann  #}
                    {% if auth_has_role('Tutor') %}
                     <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Creation</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px; \">
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-tutorial\" style=\"display: block; width: 97%;\">Tutorial</a>
                                    </div>
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-entries\" style=\"display: block; width: 97%;\">Entry</a>
                                </div>      
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/create-quiz\" style=\"display: block; width: 97%;\">Quiz</a>
                                </div>    
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/upload\" style=\"display: block; width: 97%;\">Upload</a>
                                </div>    
                            </a>
                        </div>
                    </li>
                    
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">Tutorial</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px; \">
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/submited_tutorials\" style=\"display: block; width: 97%;\">Submitted Tutorials</a>
                                    </div>
                                <div class=\"btn-group\" role=\"group\" style=\" display: block;\" >
                                    <a class=\"btn btn-light\" href=\"/page/my_tutorials\" style=\"display: block; width: 97%;\"  >Created Tutorials  </a>
                                </div>           
                            </a>
                        </div>
                    </li>
                    {% else %}
{# Definition der Buttons für alle nicht Tutoren #}
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link text-capitalize\" href=\"/page/my_tutorials\">Tutorials</a>
                    </li>
                    {% endif %}
{# Einbindung des Extensions Auth, dies dient zur Anzeige seines Namens, sobald sich der User eingeloggt hat #}
{# Änderung der Funktionen beim eingeloggten User #}
                    {% if is_auth() %} {% set auth = auth() %}
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">{{ auth.displayname }}</a>
                        <div class=\"dropdown-menu\" role=\"menu\" style=\"margin-right:0px;margin-top:0px;margin-left:-35px;padding-left:4px;\">
                            <a class=\"dropdown-item\" role=\"presentation\" style=\"margin-left:0px;padding-left:0px;padding-right:0px;padding-bottom:4px;\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-light\" href=\"/page/edit_Profile\" >Profile</a>
                                    <a class=\"btn btn-light\" href=\"{{auth_link_auth_logout()}}\" >Logout</a>
                                </div>
                            </a>
                        </div>
                    </li>
                   {% else %}
                    
{# Definition für einen nicht registrierten User werden angegben #}
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
