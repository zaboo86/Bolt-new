<?php

/* @bolt/_base/_page.twig */
class __TwigTemplate_f6ffa2989664e037e78cb7bb20f65cc9f68350163cea32c3a8047a4f556f965f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page.twig"));

        $tags = array("spaceless" => 12, "set" => 14, "if" => 18, "for" => 30, "block" => 73);
        $filters = array("slice" => 15, "merge" => 32, "lower" => 39, "replace" => 39, "escape" => 49, "raw" => 55, "trim" => 55, "striptags" => 55, "default" => 80, "json_encode" => 125);
        $functions = array("asset" => 26, "buid" => 90, "path" => 92);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'set', 'if', 'for', 'block'),
                array('slice', 'merge', 'lower', 'replace', 'escape', 'raw', 'trim', 'striptags', 'default', 'json_encode'),
                array('asset', 'buid', 'path')
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

        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        $context["page_locale_long"] = $this->getAttribute(($context["app"] ?? null), "locale", array());
        // line 15
        $context["page_locale_short"] = twig_slice($this->env, ($context["page_locale_long"] ?? null), 0, 2);
        // line 16
        $context["page_timezone_offset"] = $this->getAttribute(($context["app"] ?? null), "timezone_offset", array());
        // line 17
        echo "
";
        // line 18
        if (        $this->hasBlock("page_subtitle", $context, $blocks)) {
            // line 19
            echo "    ";
            $context["page_title"] = ((            $this->renderBlock("page_title", $context, $blocks) . " » ") .             $this->renderBlock("page_subtitle", $context, $blocks));
        } else {
            // line 21
            echo "    ";
            $context["page_title"] =             $this->renderBlock("page_title", $context, $blocks);
        }
        // line 23
        echo "
";
        // line 25
        $context["page_scripts_inc"] = array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lib.js", "bolt"));
        // line 28
        echo "
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "datepicker", 1 => "moment", 2 => "select2"));
        foreach ($context['_seq'] as $context["_key"] => $context["lib"]) {
            // line 31
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filesystem", array()), "has", array(0 => (((("bolt_assets://js/locale/" . $context["lib"]) . "/") . ($context["page_locale_long"] ?? null)) . ".min.js")), "method")) {
                // line 32
                echo "        ";
                $context["page_scripts_inc"] = twig_array_merge(($context["page_scripts_inc"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((("js/locale/" . $context["lib"]) . "/") . ($context["page_locale_long"] ?? null)) . ".min.js"), "bolt")));
                // line 33
                echo "    ";
            } elseif (((($context["page_locale_short"] ?? null) != "en") && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "filesystem", array()), "has", array(0 => (((("bolt_assets://js/locale/" . $context["lib"]) . "/") . ($context["page_locale_short"] ?? null)) . ".min.js")), "method"))) {
                // line 34
                echo "        ";
                $context["page_scripts_inc"] = twig_array_merge(($context["page_scripts_inc"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((("js/locale/" . $context["lib"]) . "/") . ($context["page_locale_short"] ?? null)) . ".min.js"), "bolt")));
                // line 35
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
";
        // line 39
        $context["page_locale_long_bcp47"] = twig_lower_filter($this->env, twig_replace_filter(($context["page_locale_long"] ?? null), array("_" => "-")));
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "filesystem", array()), "has", array(0 => (("bolt_assets://js/locale/ckeditor" . ($context["page_locale_long_bcp47"] ?? null)) . ".js")), "method")) {
            // line 41
            echo "    ";
            $context["ckeditor_lang"] = ($context["page_locale_long_bcp47"] ?? null);
        } else {
            // line 43
            echo "    ";
            $context["ckeditor_lang"] = ($context["page_locale_short"] ?? null);
        }
        // line 45
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 48
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["page_locale_short"] ?? null), "html", null, true));
        echo "\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_trim_filter(strip_tags(($context["page_title"] ?? null))));
        echo " – ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/name"), "method"), "html", null, true));
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lib.css", "bolt"), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true));
        echo "\">

    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page_scripts_inc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 61
            echo "<script src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["script"], "html", null, true));
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/favicon"), "method")) ? ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/favicon"), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon-bolt.ico", "bolt"))), "html", null, true));
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) ? ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-touch-icon.png", "bolt"))), "html", null, true));
        echo "\">
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "72x72", 1 => "114x114", 2 => "144x144"));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 67
            echo "        <link rel=\"apple-touch-icon\" sizes=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["size"], "html", null, true));
            echo "\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) ? ($this->getAttribute(($context["config"] ?? null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/apple-touch-icon-" . $context["size"]) . ".png"), "bolt"))), "html", null, true));
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</head>

<body";
        // line 71
        if (($context["page_bodyclass"] ?? null)) {
            echo " class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["page_bodyclass"] ?? null), "html", null, true));
            echo "\"";
        }
        echo ">

    ";
        // line 73
        $this->displayBlock('page_plain', $context, $blocks);
        // line 74
        echo "
";
        // line 76
        $context["ckCss"] = array();
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/wysiwyg/ck/contentsCss"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["assetData"]) {
            // line 78
            echo "    ";
            $context["ckCss"] = twig_array_merge(($context["ckCss"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["assetData"], 0, array()), $this->getAttribute($context["assetData"], 1, array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assetData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        $context["ckConfig"] = twig_array_merge((($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/wysiwyg/ck"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/wysiwyg/ck"), "method"), array())) : (array())), array("contentsCss" => ($context["ckCss"] ?? null)));
        // line 81
        echo "
";
        // line 82
        $context["bconfig"] = array("locale" => array("short" =>         // line 84
($context["page_locale_short"] ?? null), "long" =>         // line 85
($context["page_locale_long"] ?? null)), "timezone" => array("offset" =>         // line 88
($context["page_timezone_offset"] ?? null)), "buid" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->buid(), "uploadConfig" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", array("namespace" => $this->getAttribute($this->getAttribute(        // line 92
($context["app"] ?? null), "request", array()), "get", array(0 => "namespace"), "method"), "path" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "path"), "method"))), "acceptFilesTypes" => $this->getAttribute($this->getAttribute(        // line 93
($context["app"] ?? null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"), "maxSize" => $this->getAttribute($this->getAttribute(        // line 94
($context["app"] ?? null), "filepermissions", array(), "array"), "getMaxUploadSize", array(), "method"), "maxSizeNice" => $this->getAttribute($this->getAttribute(        // line 95
($context["app"] ?? null), "filepermissions", array(), "array"), "getMaxUploadSizeNice", array(), "method")), "ckeditor" => array("lang" =>         // line 98
($context["ckeditor_lang"] ?? null), "images" => (0 + $this->getAttribute(        // line 99
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/images"), "method")), "styles" => (0 + $this->getAttribute(        // line 100
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/styles"), "method")), "tables" => (0 + $this->getAttribute(        // line 101
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/tables"), "method")), "anchor" => (0 + $this->getAttribute(        // line 102
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "fontcolor" => (0 + $this->getAttribute(        // line 103
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "align" => (0 + $this->getAttribute(        // line 104
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/align"), "method")), "subsuper" => (0 + $this->getAttribute(        // line 105
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "embed" => (0 + $this->getAttribute(        // line 106
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/embed"), "method")), "blockquote" => (0 + $this->getAttribute(        // line 107
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/blockquote"), "method")), "ruler" => (0 + $this->getAttribute(        // line 108
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/ruler"), "method")), "strike" => (0 + $this->getAttribute(        // line 109
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/strike"), "method")), "underline" => (0 + $this->getAttribute(        // line 110
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/underline"), "method")), "codesnippet" => (0 + $this->getAttribute(        // line 111
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/codesnippet"), "method")), "specialchar" => (0 + $this->getAttribute(        // line 112
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/specialchar"), "method")), "clipboard" => (0 + $this->getAttribute(        // line 113
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/clipboard"), "method")), "copypaste" => (0 + $this->getAttribute(        // line 114
($context["config"] ?? null), "get", array(0 => "general/wysiwyg/copypaste"), "method")), "ck" =>         // line 115
($context["ckConfig"] ?? null), "filebrowser" => array("browseUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recordbrowser"), "imageBrowseUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", array("namespace" => "files")))), "stackAddUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stack/add"), "contentActionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentaction", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 122
($context["global"] ?? null), "request", array()), "query", array()), "all", array())), "google_api_key" => $this->getAttribute(        // line 123
($context["config"] ?? null), "get", array(0 => "general/google_api_key"), "method"));
        // line 125
        echo "<script src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt.js", "bolt"), "html", null, true));
        echo "\" data-config=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter(($context["bconfig"] ?? null)), "html", null, true));
        echo "\" data-jsdata=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["app"] ?? null), "jsdata", array())), "html", null, true));
        echo "\"></script>

";
        // line 127
        $this->displayBlock('page_script', $context, $blocks);
        // line 129
        echo "
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_page_script($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 127,  276 => 73,  266 => 129,  264 => 127,  254 => 125,  252 => 123,  251 => 122,  250 => 115,  249 => 114,  248 => 113,  247 => 112,  246 => 111,  245 => 110,  244 => 109,  243 => 108,  242 => 107,  241 => 106,  240 => 105,  239 => 104,  238 => 103,  237 => 102,  236 => 101,  235 => 100,  234 => 99,  233 => 98,  232 => 95,  231 => 94,  230 => 93,  229 => 92,  228 => 88,  227 => 85,  226 => 84,  225 => 82,  222 => 81,  220 => 80,  213 => 78,  209 => 77,  207 => 76,  204 => 74,  202 => 73,  193 => 71,  189 => 69,  178 => 67,  174 => 66,  170 => 65,  166 => 64,  163 => 63,  154 => 61,  150 => 60,  145 => 58,  141 => 57,  134 => 55,  125 => 49,  122 => 48,  118 => 45,  114 => 43,  110 => 41,  108 => 40,  106 => 39,  103 => 37,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  80 => 30,  77 => 28,  75 => 25,  72 => 23,  68 => 21,  64 => 19,  62 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Standard HTML page template
 #
 # Dont't use, use \"_page-<nav|no_nav|popup>.twig\" instead!
 #
 # Blocks: page_nav:      Navigation path, like: \"Dashboard\", \"Settings/Configuration\", \"Content/*\", ...
 #         page_main:     content
 #         page_title:    used as html title
 #         page_subtitle: used as html title (optional)
 #         page_script:   script added after the body tag (script tags needed!)
 #}
{%- spaceless %}

{% set page_locale_long = app.locale %}
{% set page_locale_short = page_locale_long[:2] %}
{% set page_timezone_offset = app.timezone_offset %}

{% if block('page_subtitle') is defined %}
    {% set page_title = block('page_title') ~ ' » ' ~ block('page_subtitle') %}
{% else %}
    {% set page_title = block('page_title') %}
{% endif %}

{# TODO: Refactor this out. Too much business logic in the template. #}
{% set page_scripts_inc = [
    asset('js/lib.js', 'bolt')
] %}

{# Add library locale files #}
{% for lib in ['datepicker', 'moment', 'select2'] %}
    {% if app.filesystem.has(\"bolt_assets://js/locale/#{lib}/#{page_locale_long}.min.js\") %}
        {% set page_scripts_inc = page_scripts_inc|merge([asset(\"js/locale/#{lib}/#{page_locale_long}.min.js\", 'bolt')]) %}
    {% elseif page_locale_short != 'en' and app.filesystem.has(\"bolt_assets://js/locale/#{lib}/#{page_locale_short}.min.js\") %}
        {% set page_scripts_inc = page_scripts_inc|merge([asset(\"js/locale/#{lib}/#{page_locale_short}.min.js\", 'bolt')]) %}
    {% endif %}
{% endfor %}

{# Determine locale include for ckeditor #}
{% set page_locale_long_bcp47 = page_locale_long|replace({'_': '-'})|lower %}
{% if app.filesystem.has(\"bolt_assets://js/locale/ckeditor#{page_locale_long_bcp47}.js\") %}
    {% set ckeditor_lang = page_locale_long_bcp47 %}
{% else %}
    {% set ckeditor_lang = page_locale_short %}
{% endif %}

{% endspaceless -%}

<!DOCTYPE html>
<html lang=\"{{ page_locale_short }}\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>{{ page_title|striptags|trim|raw }} – {{ config.get('general/branding/name') }}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('css/lib.css', 'bolt') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bolt.css', 'bolt') }}\">

    {% for script in page_scripts_inc -%}
        <script src=\"{{ script }}\"></script>
    {% endfor %}

    <link rel=\"shortcut icon\" href=\"{{ config.get('general/branding/favicon') ?: asset('img/favicon-bolt.ico', 'bolt') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ config.get('general/branding/apple-touch-icon') ?: asset('img/apple-touch-icon.png', 'bolt') }}\">
    {% for size in ['72x72', '114x114', '144x144'] %}
        <link rel=\"apple-touch-icon\" sizes=\"{{ size }}\" href=\"{{ config.get('general/branding/apple-touch-icon-' ~ size) ?: asset('img/apple-touch-icon-' ~ size ~ '.png', 'bolt') }}\">
    {% endfor %}
</head>

<body{% if page_bodyclass %} class=\"{{ page_bodyclass }}\"{% endif %}>

    {% block page_plain %}{% endblock page_plain %}

{# Convert array of [assetPath, packageName] to actual url #}
{% set ckCss = [] %}
{% for assetData in config.get('general/wysiwyg/ck/contentsCss') %}
    {% set ckCss = ckCss|merge([asset(assetData.0, assetData.1)]) %}
{% endfor %}
{% set ckConfig = config.get('general/wysiwyg/ck')|default({})|merge({'contentsCss': ckCss}) %}

{% set bconfig = {
    locale: {
        short: page_locale_short,
        long: page_locale_long,
    },
    timezone: {
        offset: page_timezone_offset,
    },
    buid: buid(),
    uploadConfig: {
        url: path('files', {'namespace': app.request.get('namespace'), 'path': app.request.get('path')}),
        acceptFilesTypes: app.config.get('general/accept_file_types'),
        maxSize: app['filepermissions'].getMaxUploadSize(),
        maxSizeNice: app['filepermissions'].getMaxUploadSizeNice(),
    },
    ckeditor: {
        lang:        ckeditor_lang,
        images:      0 + config.get('general/wysiwyg/images'),
        styles:      0 + config.get('general/wysiwyg/styles'),
        tables:      0 + config.get('general/wysiwyg/tables'),
        anchor:      0 + config.get('general/wysiwyg/anchor'),
        fontcolor:   0 + config.get('general/wysiwyg/fontcolor'),
        align:       0 + config.get('general/wysiwyg/align'),
        subsuper:    0 + config.get('general/wysiwyg/subsuper'),
        embed:       0 + config.get('general/wysiwyg/embed'),
        blockquote:  0 + config.get('general/wysiwyg/blockquote'),
        ruler:       0 + config.get('general/wysiwyg/ruler'),
        strike:      0 + config.get('general/wysiwyg/strike'),
        underline:   0 + config.get('general/wysiwyg/underline'),
        codesnippet: 0 + config.get('general/wysiwyg/codesnippet'),
        specialchar: 0 + config.get('general/wysiwyg/specialchar'),
        clipboard:   0 + config.get('general/wysiwyg/clipboard'),
        copypaste:   0 + config.get('general/wysiwyg/copypaste'),
        ck:          ckConfig,
        filebrowser: {
            browseUrl: path('recordbrowser'),
            imageBrowseUrl: path('files', {namespace: 'files'}),
        },
    },
    stackAddUrl: path('stack/add'),
    contentActionUrl: path('contentaction', global.request.query.all),
    google_api_key: config.get('general/google_api_key'),
} %}
<script src=\"{{ asset('js/bolt.js', 'bolt') }}\" data-config=\"{{ bconfig|json_encode }}\" data-jsdata=\"{{ app.jsdata|json_encode }}\"></script>

{% block page_script %}
{% endblock page_script %}

</body>
</html>
", "@bolt/_base/_page.twig", "");
    }
}
