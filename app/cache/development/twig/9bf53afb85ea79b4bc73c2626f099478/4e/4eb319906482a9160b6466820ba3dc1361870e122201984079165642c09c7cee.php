<?php

/* @bolt/exception/system/_apache.twig */
class __TwigTemplate_b7b722a604ca97aa208155dfc0e9e7be9f86c8918c3c7b0e401e1f2d992af86e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/system/_apache.twig"));

        $tags = array();
        $filters = array("escape" => 2, "default" => 2);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape', 'default'),
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

        // line 1
        echo "<h1>
    The file <code>";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("webroot", $context)) ? (_twig_default_filter(($context["webroot"] ?? null), "{{ web root }}")) : ("{{ web root }}")), "html", null, true));
        echo "/.htaccess</code> doesn't exist.
</h1>

<p>
    Make sure it's present and readable to the user that the web server is
    using. If you are not running Apache, or your Apache setup performs the
    correct rewrites without requiring a .htaccess file (in other words,
    <strong>if you know what you are doing</strong>), you can disable this check
    by calling <code>\$config->getVerifier()->disableApacheChecks();</code> in
    <code>bootstrap.php</code>
</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/system/_apache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>
    The file <code>{{ webroot|default('{{ web root }}') }}/.htaccess</code> doesn't exist.
</h1>

<p>
    Make sure it's present and readable to the user that the web server is
    using. If you are not running Apache, or your Apache setup performs the
    correct rewrites without requiring a .htaccess file (in other words,
    <strong>if you know what you are doing</strong>), you can disable this check
    by calling <code>\$config->getVerifier()->disableApacheChecks();</code> in
    <code>bootstrap.php</code>
</p>

", "@bolt/exception/system/_apache.twig", "");
    }
}
