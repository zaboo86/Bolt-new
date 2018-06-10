<?php

/* @bolt/components/stack/panel-item.twig */
class __TwigTemplate_0a8ddd790fdc6e74d03abcb307e870afb25c72c67795eb7c50c8d7d625bc17b0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/stack/panel-item.twig"));

        $tags = array("from" => 3, "set" => 5, "if" => 11);
        $filters = array("escape" => 7, "e" => 21, "json_encode" => 22, "thumbnail" => 25, "upper" => 27);
        $functions = array("__" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'set', 'if'),
                array('escape', 'e', 'json_encode', 'thumbnail', 'upper'),
                array('__')
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
        echo "
";
        // line 3
        $context["__internal_2240b803f15b6b68a64aadb425783cefad10809367c157542a4e3ba2a151c973"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/stack/panel-item.twig", 3);
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "<span class=\"info-folder\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.folder"));
        echo ": <code>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["file"] ?? null), "parent", array()), "fullpath", array()), "html", null, true));
        echo "</code>
    </span><br>
    ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.modified"));
        echo ": ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_2240b803f15b6b68a64aadb425783cefad10809367c157542a4e3ba2a151c973"]->getbuic_moment($this->getAttribute(($context["file"] ?? null), "timestamp", array())));
        echo "<br>
    ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.file-size"));
        echo ": ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "sizeFormatted", array(0 => true), "method"), "html", null, true));
        echo "
    ";
        // line 11
        if ($this->getAttribute(($context["file"] ?? null), "image", array())) {
            // line 12
            echo "        <br>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.size"));
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "width", array()), "html", null, true));
            echo " × ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "height", array()), "html", null, true));
            echo " px
    ";
        }
        $context["info"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
<div class=\"stackitem ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((!twig_in_filter($this->getAttribute(($context["file"] ?? null), "type", array()), array(0 => "image", 1 => "document"))) ? ("other") : ($this->getAttribute(($context["file"] ?? null), "type", array()))), "html", null, true));
        echo " info-pop\"
     data-placement=\"bottom\"
     data-html=\"true\"
     data-container=\".buic-stack\"
     data-title=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "filename", array()), "html", null, true));
        echo "\"
     data-content=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["info"] ?? null)));
        echo "\"
     data-file=\"";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["file"] ?? null), "toJs", array())), "html", null, true));
        echo "\"
>
    ";
        // line 24
        if ($this->getAttribute(($context["file"] ?? null), "image", array())) {
            // line 25
            echo "        <img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail($this->getAttribute(($context["file"] ?? null), "path", array()), 100, 100), "html", null, true));
            echo "\" width=\"100\" height=\"100\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.thumbnail"));
            echo "\">
    ";
        } else {
            // line 27
            echo "        <strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["file"] ?? null), "extension", array())), "html", null, true));
            echo "</strong>
        <small>";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "filename", array()), "html", null, true));
            echo "</small>
    ";
        }
        // line 30
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/stack/panel-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  128 => 28,  123 => 27,  115 => 25,  113 => 24,  108 => 22,  104 => 21,  100 => 20,  93 => 16,  90 => 15,  79 => 12,  77 => 11,  71 => 10,  65 => 9,  58 => 7,  56 => 6,  54 => 5,  51 => 4,  49 => 3,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# file \\Bolt\\Filesystem\\Handler\\FileInterface #}

{% from '@bolt/_buic/_moment.twig' import buic_moment %}

{% set info -%}
    <span class=\"info-folder\">
        {{- __('general.phrase.folder') }}: <code>{{ file.parent.fullpath }}</code>
    </span><br>
    {{ __('general.phrase.modified') }}: {{ buic_moment(file.timestamp) }}<br>
    {{ __('general.phrase.file-size') }}: {{ file.sizeFormatted(true) }}
    {% if file.image %}
        <br>{{ __('general.phrase.size') }}: {{ file.width }} × {{ file.height }} px
    {% endif %}
{% endset %}

<div class=\"stackitem {{ file.type not in ['image', 'document'] ? 'other' : file.type }} info-pop\"
     data-placement=\"bottom\"
     data-html=\"true\"
     data-container=\".buic-stack\"
     data-title=\"{{ file.filename }}\"
     data-content=\"{{ info|e }}\"
     data-file=\"{{ file.toJs|json_encode }}\"
>
    {% if file.image %}
        <img src=\"{{ file.path|thumbnail(100, 100) }}\" width=\"100\" height=\"100\" alt=\"{{ __('general.phrase.thumbnail') }}\">
    {% else %}
        <strong>{{ file.extension|upper }}</strong>
        <small>{{ file.filename }}</small>
    {% endif %}
</div>
", "@bolt/components/stack/panel-item.twig", "");
    }
}
