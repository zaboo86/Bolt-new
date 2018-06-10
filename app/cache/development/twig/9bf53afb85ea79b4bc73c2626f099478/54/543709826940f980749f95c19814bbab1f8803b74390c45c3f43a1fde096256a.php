<?php

/* partials/_record_meta.twig */
class __TwigTemplate_0e9bd070a3923226ec89025b88f0cbc54820ee0607b83f58d3b6b68ff73d4151 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_record_meta.twig"));

        $tags = array("if" => 2);
        $filters = array("escape" => 3, "default" => 3, "e" => 7, "localedatetime" => 23);
        $functions = array("__" => 4, "relative_path" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape', 'default', 'e', 'localedatetime'),
                array('__', 'relative_path')
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
        echo "<p class=\"meta is-hidden-touch\">
    ";
        // line 2
        if (($this->getAttribute(($context["record"] ?? null), "link", array(), "method") && ($this->getAttribute(($context["record"] ?? null), "link", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method")))) {
            // line 3
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "link", array(), "method"), "html", null, true));
            echo "\" class=\"button is-link ";
            if (((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null))) : (""))) {
                echo "is-outlined";
            }
            echo "\">
        ";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.read-more"));
            echo "
    </a>
    ";
        } elseif ($this->getAttribute(        // line 6
($context["record"] ?? null), "contentlink", array())) {
            // line 7
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateRelativePath(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "contentlink", array()))), "html", null, true));
            echo "\" class=\"button is-link ";
            if (((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null))) : (""))) {
                echo "is-outlined";
            }
            echo "\">
        ";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.read-more"));
            echo "
    </a>
    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute(($context["record"] ?? null), "editlink", array(), "method")) {
            // line 12
            echo "        <span class=\"edit-link\">
            <a href=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "editlink", array(), "method"), "html", null, true));
            echo "\" class=\"button is-info is-outlined\">
                ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.edit"));
            echo "
            </a>
        </span>
    ";
        }
        // line 18
        echo "</p>
";
        // line 19
        if (((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null))) : (""))) {
            // line 20
            echo "<p class=\"meta\">
    ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.written-by-on", array("%name%" => (($this->getAttribute($this->getAttribute(            // line 22
($context["record"] ?? null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["record"] ?? null), "user", array(), "any", false, true), "displayname", array()), $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Unknown"))) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Unknown"))), "%date%" => $this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->localeDateTime($this->getAttribute(            // line 23
($context["record"] ?? null), "datepublish", array()), "%A %B %e, %Y"))));
            // line 24
            echo "
</p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_record_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  109 => 23,  108 => 22,  107 => 21,  104 => 20,  102 => 19,  99 => 18,  92 => 14,  88 => 13,  85 => 12,  82 => 11,  76 => 8,  67 => 7,  65 => 6,  60 => 4,  51 => 3,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"meta is-hidden-touch\">
    {% if record.link() and (record.link != global.request.server.get('REQUEST_URI')) %}
    <a href=\"{{ record.link() }}\" class=\"button is-link {% if extended|default() %}is-outlined{% endif %}\">
        {{ __('general.phrase.read-more') }}
    </a>
    {% elseif record.contentlink %}
    <a href=\"{{ relative_path(record.contentlink|e) }}\" class=\"button is-link {% if extended|default() %}is-outlined{% endif %}\">
        {{ __('general.phrase.read-more') }}
    </a>
    {% endif %}
    {% if record.editlink() %}
        <span class=\"edit-link\">
            <a href=\"{{ record.editlink() }}\" class=\"button is-info is-outlined\">
                {{ __('general.phrase.edit') }}
            </a>
        </span>
    {% endif %}
</p>
{% if extended|default() %}
<p class=\"meta\">
    {{ __('general.phrase.written-by-on', {
        '%name%': record.user.displayname|default(__('Unknown')),
        '%date%': record.datepublish|localedatetime(\"%A %B %e, %Y\")
    }) }}
</p>
{% endif %}
", "partials/_record_meta.twig", "");
    }
}
