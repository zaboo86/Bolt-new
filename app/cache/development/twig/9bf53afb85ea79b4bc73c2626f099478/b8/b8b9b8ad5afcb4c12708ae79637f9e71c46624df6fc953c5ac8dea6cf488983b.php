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

        $tags = array("if" => 10, "block" => 21);
        $filters = array("escape" => 2, "striptags" => 10);
        $functions = array("htmllang" => 2, "asset" => 14, "include" => 32, "widgets" => 26);

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
<html lang=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\RoutingRuntime')->htmlLang(), "html", null, true));
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 9
        echo "        <title>";
        // line 10
        if ($this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["record"] ?? null), "title", array())), "html", null, true));
            echo " | ";
        }
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/sitename"), "method"), "html", null, true));
        // line 12
        if (( !$this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true) && $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/payoff"), "method"), "html", null, true));
        }
        // line 13
        echo "</title>
    <link rel=\"stylesheet\" href=\" ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/font-awesome.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/ionicons.min.css", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Cookie", "theme"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.min.css", "theme"), "html", null, true));
        echo "\">
    </head>
    <body";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo " class=\"front\"";
        }
        echo ">
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_footer.twig"));
        echo "           
        <script src=\"";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js", "theme"), "html", null, true));
        echo "\"></script>
        <script src=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js", "theme"), "html", null, true));
        echo "\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
            <script src=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.min.js", "theme"), "html", null, true));
        echo "\"></script>      
   </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            <header role=\"banner\" class=\"header\">
            ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_navbar.twig"));
        echo "
           ";
        // line 25
        echo "            </header>
            ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_top"));
        echo "
            <a id=\"main-content\"></a>
            ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "main_bottom"));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 29
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
        return array (  169 => 29,  163 => 28,  153 => 30,  151 => 28,  146 => 26,  143 => 25,  139 => 23,  136 => 22,  130 => 21,  119 => 36,  114 => 34,  110 => 33,  105 => 32,  103 => 21,  97 => 20,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  61 => 10,  59 => 9,  51 => 2,  48 => 1,);
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
<html lang=\"{{ htmllang() }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {# make sure we always display a proper title: The record's title if there is one, appended with the
           sitename. If there is no title, we append the sitename with the payoff, if there is one. #}
        <title>
            {%- if record.title is defined %}{{ record.title|striptags }} | {% endif -%}
                {{ config.get('general/sitename') -}}
            {% if record.title is not defined and config.get('general/payoff') %} | {{ config.get('general/payoff') }}{% endif -%}
        </title>
    <link rel=\"stylesheet\" href=\" {{asset('assets/bootstrap/css/bootstrap.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/fonts/font-awesome.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/fonts/ionicons.min.css', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/css?family=Cookie', 'theme')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles.min.css', 'theme')}}\">
    </head>
    <body{% if app.request.get('_route') == \"homepage\" %} class=\"front\"{% endif %}>
        {% block body %}
            <header role=\"banner\" class=\"header\">
            {{ include('partials/_navbar.twig') }}
           {# {{ include('partials/header.twig') }} #}
            </header>
            {{ widgets('main_top') }}
            <a id=\"main-content\"></a>
            {% block main %}
            {% endblock main %}
            {{ widgets('main_bottom') }}
        {% endblock body %}
        {{ include('partials/_footer.twig') }}           
        <script src=\"{{ asset('assets/js/jquery.min.js', 'theme')}}\"></script>
        <script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js', 'theme')}}\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
            <script src=\"{{asset('assets/js/script.min.js', 'theme')}}\"></script>      
   </body>
</html>
", "partials/_master.twig", "");
    }
}
