<?php

/* partials/_master.twig */
class __TwigTemplate_730f5dea15b7b71613c6748abefb3b33b5bdb9b5bd3dd07d9bacf39651bae5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

        $tags = array("if" => 13, "block" => 26);
        $filters = array("escape" => 4, "striptags" => 13);
        $functions = array("htmllang" => 4, "asset" => 18, "include" => 43, "widgets" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('escape', 'striptags'),
                array('htmllang', 'asset', 'include', 'widgets')
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
        echo "<!doctype html>

";
        // line 4
        echo "<html lang=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\RoutingRuntime')->htmlLang(), "html", null, true));
        echo "\">
    <head>
";
        // line 7
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

";
        // line 12
        echo "        <title>";
        // line 13
        if ($this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["record"] ?? null), "title", array())), "html", null, true));
            echo " | ";
        }
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
        // line 15
        if (( !$this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true) && $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"), "html", null, true));
        }
        // line 16
        echo "</title>
";
        // line 18
        echo "    <link rel=\"stylesheet\" href=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/font-awesome.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/ionicons.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Cookie", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.min.css", "theme"), "html", null, true));
        echo "\">
    </head>
";
        // line 25
        echo "    <body";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo " class=\"front\"";
        }
        echo ">
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        
";
        // line 42
        echo "        
        ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_footer.twig"));
        echo "   
        
";
        // line 46
        echo "        <script src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js", "theme"), "html", null, true));
        echo "\"></script>
        <script src=\"";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js", "theme"), "html", null, true));
        echo "\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
            <script src=\"";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.min.js", "theme"), "html", null, true));
        echo "\"></script>      
   </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "            <header role=\"banner\" class=\"header\">

";
        // line 30
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_navbar.twig"));
        echo "
            </header>
        
            ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_top"));
        echo "
            <a id=\"main-content\"></a>
        
";
        // line 37
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_bottom"));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 38
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 38,  180 => 37,  170 => 39,  167 => 37,  161 => 33,  154 => 30,  150 => 27,  144 => 26,  133 => 49,  128 => 47,  123 => 46,  118 => 43,  115 => 42,  112 => 41,  110 => 26,  103 => 25,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  81 => 18,  78 => 16,  73 => 15,  71 => 14,  66 => 13,  64 => 12,  58 => 7,  52 => 4,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>

{# Die Master wird erstellt. Von dieser Master erben alle von uns angezeigten Seiten #}
<html lang=\"{{ htmllang() }}\">
    <head>
{# Die Meta-Daten werden definiert #}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

{# Wenn kein Titel definiert wurde, wird dieser aus der Konfig-Datei geholt #}
        <title>
            {%- if record.title is defined %}{{ record.title|striptags }} | {% endif -%}
                {{ config.get('general/sitename') -}}
            {% if record.title is not defined and config.get('general/payoff') %} | {{ config.get('general/payoff') }}{% endif -%}
        </title>
{# CSS-Style Sheet wird eingebunden #}
    <link rel=\"stylesheet\" href=\" {{asset('assets/bootstrap/css/bootstrap.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/fonts/font-awesome.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/fonts/ionicons.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/css?family=Cookie', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles.min.css', 'theme')}}\">
    </head>
{# Dir Route zur Homepage wird aus der Konfig-Datei geholt #}
    <body{% if app.request.get('_route') == \"homepage\" %} class=\"front\"{% endif %}>
        {% block body %}
            <header role=\"banner\" class=\"header\">

{# Die Navbar, die bei uns als Header dient, wird eingebunden und ist somit überall zu sehen #}
            {{ include('partials/_navbar.twig') }}
            </header>
        
            {{ widgets('main_top') }}
            <a id=\"main-content\"></a>
        
{# Der Main Block wird definiert, wo der Inhalt dargestellt wird, wenn jemand von dieser Seite erbt #}
            {% block main %}
            {% endblock main %}
            {{ widgets('main_bottom') }}
        {% endblock body %}
        
{# Der Footer, wird eingebunden und ist somit überall zu sehen #}        
        {{ include('partials/_footer.twig') }}   
        
{# JS wird eingebunden #}
        <script src=\"{{ asset('assets/js/jquery.min.js', 'theme')}}\"></script>
        <script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js', 'theme')}}\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
            <script src=\"{{asset('assets/js/script.min.js', 'theme')}}\"></script>      
   </body>
</html>
", "partials/_master.twig", "");
    }
}
