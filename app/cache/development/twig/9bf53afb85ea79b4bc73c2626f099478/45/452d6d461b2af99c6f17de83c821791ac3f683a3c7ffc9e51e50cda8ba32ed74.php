<?php

/* @bolt/exception/exception.twig */
class __TwigTemplate_741d58849f8743767631a87579a4d349b90015fa9f613d23c1d2cee4a255f9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
            'title' => array($this, 'block_title'),
            'exception' => array($this, 'block_exception'),
            'trace' => array($this, 'block_trace'),
            'request' => array($this, 'block_request'),
            'tracedumps' => array($this, 'block_tracedumps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/exception.twig"));

        $tags = array("if" => 11, "block" => 20, "set" => 61);
        $filters = array("escape" => 8, "default" => 8, "nl2br" => 50, "url_encode" => 62);
        $functions = array("asset" => 10, "max" => 54, "include" => 68);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('escape', 'default', 'nl2br', 'url_encode'),
                array('asset', 'max', 'include')
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true));
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true));
        echo "\">
    ";
        // line 11
        if ((($context["debug"] ?? null) && $this->getAttribute(($context["exception"] ?? null), "snippet", array()))) {
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt_exception.css", "bolt"), "html", null, true));
            echo "\">
        <script src=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js", "bolt"), "html", null, true));
            echo "\" defer></script>
        <script src=\"";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt_exception.js", "bolt"), "html", null, true));
            echo "\" defer></script>
    ";
        }
        // line 16
        echo "</head>

<body class=\"login exception\">

    ";
        // line 20
        $this->displayBlock('page_plain', $context, $blocks);
        // line 102
        echo "
</body>
</html>

";
        // line 106
        $this->displayBlock('tracedumps', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 21
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter(($context["form_class"] ?? null), "col-md-10 col-md-offset-1 col-sm-12")) : ("col-md-10 col-md-offset-1 col-sm-12")), "html", null, true));
        echo "\">

                <img src=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true));
        echo "\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 30
        $this->displayBlock('page_main', $context, $blocks);
        // line 95
        echo "                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 31
        echo "                        <div class=\"row\">
                            ";
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        // line 41
        echo "
                            ";
        // line 42
        $this->displayBlock('exception', $context, $blocks);
        // line 44
        echo "
                            ";
        // line 45
        if (($context["debug"] ?? null)) {
            // line 46
            echo "                                <p class='exception'>
                                    <code><abbr title=\"";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_fqn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_fqn", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "</abbr></code> in <code><abbr title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "file_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_path", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "\">";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_name", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "</abbr></code> line <code>";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "</code>: <br>
                                    <em><strong>";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(nl2br(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")), "html", null, true)));
            echo "</strong></em>
                                </p>

                                ";
            // line 53
            if ((($this->getAttribute(($context["exception"] ?? null), "snippet", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "snippet", array()))) : (""))) {
                // line 54
                echo "<pre class='line-numbers' data-start='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, max(($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array()), "line", array()) - 5), 1), "html", null, true));
                echo "' data-line='6'><code class='language-php'>";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "snippet", array()), "html", null, true));
                // line 56
                echo "</code></pre>";
            }
            // line 58
            echo "
                                <p class='exception'>
                                    ";
            // line 61
            echo "                                    ";
            $context["query"] = ((((((("Bolt " . (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown"))) . " in ") . (($this->getAttribute(($context["exception"] ?? null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_name", array()), "unknown")) : ("unknown"))) . " line ") . (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown"))) . ": ") . (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")));
            // line 62
            echo "                                    <a class='btn btn-default' href='https://www.google.com/search?q=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null)), "html", null, true));
            echo "' target='_blank'>Google this Exception</a>
                                </p>
                            ";
        }
        // line 65
        echo "
                            ";
        // line 66
        $this->displayBlock('trace', $context, $blocks);
        // line 71
        echo "
                            <hr>

                            ";
        // line 74
        $this->displayBlock('request', $context, $blocks);
        // line 80
        echo "
                            ";
        // line 81
        if ( !($context["debug"] ?? null)) {
            // line 82
            echo "                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <code>debug: true</code> in <code>config.yml</code>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <code>debug: true</code> and <code>debug_show_loggedoff: true</code> in
                                        <code>config.yml</code>.
                                </ul>
                            ";
        }
        // line 92
        echo "
                        </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "                                <h1>Uncaught Exception";
        // line 36
        if (($context["debug"] ?? null)) {
            // line 37
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true));
            echo "
                                    ";
        }
        // line 38
        echo ".
                                </h1>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_exception($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exception"));

        // line 43
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_trace($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trace"));

        // line 67
        echo "                                ";
        if (($context["debug"] ?? null)) {
            // line 68
            echo "                                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/exception/_trace.twig"));
            echo "
                                ";
        }
        // line 70
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_request($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "request"));

        // line 75
        echo "                                ";
        if ((($context["debug"] ?? null) && array_key_exists("request", $context))) {
            // line 76
            echo "                                    <hr>
                                    ";
            // line 77
            $this->loadTemplate("@bolt/exception/_request.twig", "@bolt/exception/exception.twig", 77)->displayBlock("request_data", $context);
            echo "
                                ";
        }
        // line 79
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_tracedumps($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tracedumps"));

        // line 107
        echo "    ";
        if (($context["debug"] ?? null)) {
            // line 108
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/exception/_tracedumps.twig"));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 108,  346 => 107,  340 => 106,  333 => 79,  328 => 77,  325 => 76,  322 => 75,  316 => 74,  309 => 70,  303 => 68,  300 => 67,  294 => 66,  287 => 43,  281 => 42,  272 => 38,  266 => 37,  264 => 36,  262 => 35,  256 => 34,  247 => 92,  235 => 82,  233 => 81,  230 => 80,  228 => 74,  223 => 71,  221 => 66,  218 => 65,  211 => 62,  208 => 61,  204 => 58,  201 => 56,  199 => 55,  195 => 54,  193 => 53,  187 => 50,  183 => 49,  180 => 48,  173 => 47,  170 => 46,  168 => 45,  165 => 44,  163 => 42,  160 => 41,  158 => 34,  155 => 33,  152 => 31,  146 => 30,  133 => 95,  131 => 30,  124 => 26,  119 => 24,  114 => 21,  108 => 20,  101 => 106,  95 => 102,  93 => 20,  87 => 16,  82 => 14,  78 => 13,  73 => 12,  71 => 11,  67 => 10,  62 => 8,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: {{ exception.class_name|default('unknown') }}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('css/bolt.css', 'bolt') }}\">
    {% if debug and exception.snippet %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bolt_exception.css', 'bolt') }}\">
        <script src=\"{{ asset('js/jquery-2.2.4.min.js', 'bolt') }}\" defer></script>
        <script src=\"{{ asset('js/bolt_exception.js', 'bolt') }}\" defer></script>
    {% endif %}
</head>

<body class=\"login exception\">

    {% block page_plain %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"{{ form_class|default('col-md-10 col-md-offset-1 col-sm-12') }}\">

                <img src=\"{{ asset('img/bolt-logo.png', 'bolt') }}\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        {% block page_main %}
                        <div class=\"row\">
                            {# Note: Do not translate / localise this, because people _will_ google for this. #}

                            {% block title %}
                                <h1>Uncaught Exception
                                    {%- if debug -%}
                                        : {{ exception.class_name|default('unknown') }}
                                    {% endif %}.
                                </h1>
                            {% endblock title %}

                            {% block exception %}
                            {% endblock exception %}

                            {% if debug %}
                                <p class='exception'>
                                    <code><abbr title=\"{{ exception.class_fqn|default('unknown') }}\">{{ exception.class_name|default('unknown') }}</abbr></code> in <code><abbr title=\"{{ exception.file_path|default('unknown') }}\">
                                    {{- exception.file_name|default('unknown') }}</abbr></code> line <code>
                                    {{- exception.object.line|default('unknown') }}</code>: <br>
                                    <em><strong>{{ exception.object.message|default('unknown')|nl2br }}</strong></em>
                                </p>

                                {% if exception.snippet|default() -%}
    <pre class='line-numbers' data-start='{{ max(exception.object.line - 5, 1) }}' data-line='6'><code class='language-php'>
    {{- exception.snippet -}}
    </code></pre>
                                {%- endif %}

                                <p class='exception'>
                                    {# Based on this classic tweet: https://twitter.com/divineomega/status/695744177557106688 #}
                                    {% set query = 'Bolt ' ~ exception.class_name|default('unknown') ~ ' in ' ~ exception.file_name|default('unknown') ~ ' line ' ~ exception.object.line|default('unknown') ~ ': ' ~ exception.object.message|default('unknown') %}
                                    <a class='btn btn-default' href='https://www.google.com/search?q={{ query|url_encode }}' target='_blank'>Google this Exception</a>
                                </p>
                            {% endif %}

                            {% block trace %}
                                {% if debug %}
                                    {{ include('@bolt/exception/_trace.twig') }}
                                {% endif %}
                            {% endblock trace %}

                            <hr>

                            {% block request %}
                                {% if debug and request is defined %}
                                    <hr>
                                    {{ block('request_data', '@bolt/exception/_request.twig') }}
                                {% endif %}
                            {% endblock request %}

                            {% if not debug %}
                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <code>debug: true</code> in <code>config.yml</code>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <code>debug: true</code> and <code>debug_show_loggedoff: true</code> in
                                        <code>config.yml</code>.
                                </ul>
                            {% endif %}

                        </div>
                        {% endblock page_main %}
                    </div>
                </div>

            </div>
        </div>
    </div>
    {% endblock page_plain %}

</body>
</html>

{% block tracedumps %}
    {% if debug %}
        {{ include('@bolt/exception/_tracedumps.twig') }}
    {% endif %}
{% endblock tracedumps %}
", "@bolt/exception/exception.twig", "");
    }
}
