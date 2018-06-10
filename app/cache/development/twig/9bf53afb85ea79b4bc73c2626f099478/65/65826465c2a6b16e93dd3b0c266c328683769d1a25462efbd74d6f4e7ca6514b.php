<?php

/* @BoltForms/form/_recaptcha.twig */
class __TwigTemplate_9da37fe53ac054e050c7d123c3bd2547ad5b3c65541f379a15fc6e9510b83b51 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltForms/form/_recaptcha.twig"));

        $tags = array("macro" => 2, "if" => 3);
        $filters = array("escape" => 6);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'if'),
                array('escape'),
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
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function getrecaptcha($__recaptcha__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "recaptcha" => $__recaptcha__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "recaptcha"));

            // line 3
            echo "    ";
            if ($this->getAttribute(($context["recaptcha"] ?? null), "enabled", array())) {
                // line 4
                echo "        ";
                if ( !$this->getAttribute(($context["recaptcha"] ?? null), "valid", array())) {
                    // line 5
                    echo "            <ul class=\"boltform-error\">
                <li class=\"boltform-error\">";
                    // line 6
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["recaptcha"] ?? null), "error_message", array()), "html", null, true));
                    echo "</li>
            </ul>
        ";
                }
                // line 9
                echo "
        ";
                // line 10
                if (($this->getAttribute(($context["recaptcha"] ?? null), "type", array()) == "v2")) {
                    // line 11
                    echo "            <div class=\"boltform-row\">
                <label for=\"form_message\" class=\"required\">";
                    // line 12
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["recaptcha"] ?? null), "label", array()), "html", null, true));
                    echo "</label>
                <div class=\"g-recaptcha\" data-sitekey=\"";
                    // line 13
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["recaptcha"] ?? null), "public_key", array()), "html", null, true));
                    echo "\"></div>
            </div>
        ";
                }
                // line 16
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@BoltForms/form/_recaptcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 16,  96 => 13,  92 => 12,  89 => 11,  87 => 10,  84 => 9,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  54 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% macro recaptcha(recaptcha) %}
    {% if recaptcha.enabled %}
        {% if not recaptcha.valid %}
            <ul class=\"boltform-error\">
                <li class=\"boltform-error\">{{ recaptcha.error_message }}</li>
            </ul>
        {% endif %}

        {% if recaptcha.type == 'v2' %}
            <div class=\"boltform-row\">
                <label for=\"form_message\" class=\"required\">{{ recaptcha.label }}</label>
                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha.public_key }}\"></div>
            </div>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@BoltForms/form/_recaptcha.twig", "");
    }
}
