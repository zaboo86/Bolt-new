<?php

/* @bolt/_sub/_messages.twig */
class __TwigTemplate_0691920c70e29b232dd1185fef11bd661a5e70c47474c8ba06914d95f433a7be extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_messages.twig"));

        $tags = array("import" => 28, "if" => 30, "macro" => 1, "set" => 16, "for" => 17);
        $filters = array("default" => 5, "escape" => 19, "ymllink" => 21, "merge" => 23);
        $functions = array("__" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'if', 'macro', 'set', 'for'),
                array('default', 'escape', 'ymllink', 'merge'),
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

        // line 14
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["self"] = $this;
        // line 29
        echo "<div class=\"row\">
    ";
        // line 30
        if (((array_key_exists("wrapper", $context) && ($context["wrapper"] ?? null)) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "keys", array(), "method")))) {
            // line 31
            echo "        <div class=\"col-md-8\">
            ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getflashbag(($context["user"] ?? null)));
            echo "
        </div>
    ";
        } else {
            // line 35
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getflashbag(($context["user"] ?? null)));
            echo "
    ";
        }
        // line 37
        echo "</div>

";
        // line 40
        echo "<noscript>
    <div class=\"alert alert-danger\">
        <p>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("generic.noscript.message"));
        echo "</p>
    </div>
</noscript>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getflashbag($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashbag"));

            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 5
            echo "    ";
            if (((array_key_exists("user", $context)) ? (_twig_default_filter(($context["user"] ?? null))) : (""))) {
                // line 6
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getmessages("danger"));
                echo "
        ";
                // line 7
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getmessages("warning"));
                echo "
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getmessages("error", "danger"));
            echo "
    ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getmessages("success"));
            echo "
    ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["self"]->getmessages("info"));
            echo "
";
            
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

    // line 15
    public function getmessages($__key__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "messages"));

            // line 16
            echo "    ";
            $context["shown"] = array();
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "get", array(0 => ($context["key"] ?? null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "        ";
                if (!twig_in_filter($context["msg"], ($context["shown"] ?? null))) {
                    // line 19
                    echo "            <div class=\"alert alert-";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), ($context["key"] ?? null))) : (($context["key"] ?? null))), "html", null, true));
                    echo " alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 21
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->ymllink($context["msg"]));
                    echo "
            </div>
            ";
                    // line 23
                    $context["shown"] = twig_array_merge(($context["shown"] ?? null), array(0 => $context["msg"]));
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "@bolt/_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 25,  198 => 24,  196 => 23,  191 => 21,  185 => 19,  182 => 18,  177 => 17,  174 => 16,  158 => 15,  138 => 12,  134 => 11,  130 => 10,  127 => 9,  122 => 7,  117 => 6,  114 => 5,  111 => 3,  108 => 2,  93 => 1,  82 => 42,  78 => 40,  74 => 37,  68 => 35,  62 => 32,  59 => 31,  57 => 30,  54 => 29,  52 => 28,  49 => 27,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro flashbag(user) %}
    {% import _self as self %}

    {# we only want to show these flashes to logged on users. #}
    {% if user|default %}
        {{ self.messages('danger') }}
        {{ self.messages('warning') }}
    {% endif %}

    {{ self.messages('error', 'danger') }}
    {{ self.messages('success') }}
    {{ self.messages('info') }}
{% endmacro %}

{% macro messages(key, class) %}
    {% set shown = [] %}
    {% for msg in app['logger.flash'].get(key) %}
        {% if msg not in shown %}
            <div class=\"alert alert-{{ class|default(key) }} alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                {{ msg|ymllink }}
            </div>
            {% set shown = shown|merge([msg]) %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% import _self as self %}
<div class=\"row\">
    {% if wrapper is defined and wrapper and app['logger.flash'].keys() is not empty %}
        <div class=\"col-md-8\">
            {{ self.flashbag(user) }}
        </div>
    {% else %}
        {{ self.flashbag(user) }}
    {% endif %}
</div>

{# No Javascript #}
<noscript>
    <div class=\"alert alert-danger\">
        <p>{{ __('generic.noscript.message') }}</p>
    </div>
</noscript>
", "@bolt/_sub/_messages.twig", "");
    }
}
