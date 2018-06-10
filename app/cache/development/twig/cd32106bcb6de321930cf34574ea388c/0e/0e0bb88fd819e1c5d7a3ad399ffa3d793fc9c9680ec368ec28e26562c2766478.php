<?php

/* @bolt/exception/_request.twig */
class __TwigTemplate_e86ae84a200f92a2fc740346c6a1c2ec599acfbf91132f9aa2d83da96a6e895a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'data_value' => array($this, 'block_data_value'),
            'data_row' => array($this, 'block_data_row'),
            'request_data' => array($this, 'block_request_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_request.twig"));

        $tags = array("block" => 1, "if" => 2, "for" => 5, "spaceless" => 17, "set" => 29);
        $filters = array("escape" => 6, "slice" => 9, "default" => 37, "capitalize" => 43);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for', 'spaceless', 'set'),
                array('escape', 'slice', 'default', 'capitalize'),
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
        $this->displayBlock('data_value', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('data_row', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('request_data', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_data_value($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_value"));

        // line 2
        echo "    ";
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 3
            echo "        <em>(empty)</em>
    ";
        } elseif (twig_test_iterable(        // line 4
($context["value"] ?? null))) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["v"], "html", null, true));
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, ($context["value"] ?? null), 0, 200), "html", null, true));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_data_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_row"));

        // line 14
        echo "    <tr>
        <th>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true));
        echo "</th>
        <td>
            ";
        // line 17
        ob_start();
        // line 18
        echo "                ";
        if (twig_in_filter(twig_slice($this->env, ($context["key"] ?? null), 0, 13), ($context["obfuscated"] ?? null))) {
            // line 19
            echo "                    <span class='obfuscated' data-value=\"";
            $this->displayBlock("data_value", $context, $blocks);
            echo "\">(Click to reveal sensitive data)</span>
                ";
        } else {
            // line 21
            echo "                    ";
            $this->displayBlock("data_value", $context, $blocks);
            echo "
                ";
        }
        // line 23
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 24
        echo "        </td>
    </tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_request_data($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "request_data"));

        // line 29
        echo "    ";
        $context["bags"] = array(0 => "attributes", 1 => "query", 2 => "files", 3 => "cookies", 4 => "headers", 5 => "server", 6 => "session");
        // line 30
        echo "    ";
        $context["values"] = array(0 => "content", 1 => "languages", 2 => "charsets", 3 => "encodings", 4 => "acceptableContentTypes", 5 => "pathInfo", 6 => "requestUri", 7 => "baseUrl", 8 => "basePath", 9 => "method");
        // line 31
        echo "    ";
        $context["obfuscated"] = array(0 => "cookie", 1 => "_csrf/bolt", 2 => "_csrf/form", 3 => "bolt_authtoke", 4 => "bolt_session_", 5 => "authenticatio", 6 => "HTTP_COOKIE");
        // line 32
        echo "
    <h1>Request data</h1>

    <table class=\"table table-striped table-hover table-condensed\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 37
            echo "            ";
            $context["value"] = (($this->getAttribute(($context["request"] ?? null), $context["key"], array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request"] ?? null), $context["key"]))) : (""));
            // line 38
            echo "            ";
            $this->displayBlock("data_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>

    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bag"]) {
            if ((($this->getAttribute(($context["request_data"] ?? null), $context["bag"], array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_data"] ?? null), $context["bag"]), false)) : (false))) {
                // line 43
                echo "        <h2>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["bag"]), "html", null, true));
                echo "</h2>

        <table class=\"table table-striped table-hover table-condensed\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["request_data"] ?? null), $context["bag"]));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 47
                    echo "                ";
                    $this->displayBlock("data_row", $context, $blocks);
                    echo "
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </table>

    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/_request.twig";
    }

    public function getDebugInfo()
    {
        return array (  259 => 49,  242 => 47,  225 => 46,  218 => 43,  213 => 42,  209 => 40,  192 => 38,  189 => 37,  172 => 36,  166 => 32,  163 => 31,  160 => 30,  157 => 29,  151 => 28,  142 => 24,  139 => 23,  133 => 21,  127 => 19,  124 => 18,  122 => 17,  117 => 15,  114 => 14,  108 => 13,  97 => 9,  94 => 8,  85 => 6,  80 => 5,  78 => 4,  75 => 3,  72 => 2,  66 => 1,  59 => 28,  56 => 27,  54 => 13,  51 => 12,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block data_value %}
    {% if value is empty %}
        <em>(empty)</em>
    {% elseif value is iterable %}
        {% for v in value %}
            {{ v }}<br>
        {% endfor %}
    {% else %}
        {{ value[:200] }}
    {% endif %}
{% endblock %}

{% block data_row %}
    <tr>
        <th>{{ key }}</th>
        <td>
            {% spaceless %}
                {% if key[:13] in obfuscated %}
                    <span class='obfuscated' data-value=\"{{ block('data_value') }}\">(Click to reveal sensitive data)</span>
                {% else %}
                    {{ block('data_value') }}
                {% endif %}
            {% endspaceless %}
        </td>
    </tr>
{% endblock %}

{% block request_data %}
    {% set bags = ['attributes', 'query', 'files', 'cookies', 'headers', 'server', 'session'] %}
    {% set values = ['content', 'languages', 'charsets', 'encodings' , 'acceptableContentTypes', 'pathInfo', 'requestUri', 'baseUrl', 'basePath', 'method'] %}
    {% set obfuscated = ['cookie', '_csrf/bolt', '_csrf/form', 'bolt_authtoke', 'bolt_session_', 'authenticatio', 'HTTP_COOKIE'] %}

    <h1>Request data</h1>

    <table class=\"table table-striped table-hover table-condensed\">
        {% for key in values %}
            {% set value = attribute(request, key)|default %}
            {{ block('data_row') }}
        {% endfor %}
    </table>

    {% for bag in bags if attribute(request_data, bag)|default(false) %}
        <h2>{{ bag|capitalize }}</h2>

        <table class=\"table table-striped table-hover table-condensed\">
            {% for key, value in attribute(request_data, bag) %}
                {{ block('data_row') }}
            {% endfor %}
        </table>

    {% endfor %}
{% endblock %}
", "@bolt/exception/_request.twig", "");
    }
}
