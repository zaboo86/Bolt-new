<?php

/* @bolt/exception/_trace.twig */
class __TwigTemplate_df4c284abdb57570b02cfe681bc5cc076c75eeab065c6cb84edc36ef48e4ebc9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_trace.twig"));

        $tags = array("for" => 4, "if" => 8, "set" => 14);
        $filters = array("default" => 4, "escape" => 6, "join" => 9, "slice" => 9, "split" => 9, "excerpt" => 9, "last" => 9, "raw" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('default', 'escape', 'join', 'slice', 'split', 'excerpt', 'last', 'raw'),
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
        echo "<h2>Stack trace</h2>

<table class=\"table table-striped table-hover table-condensed\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["exception"] ?? null), "trace", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "trace", array()))) : ("")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 5
            echo "        <tr>
            <th class=\"narrow\"># ";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
            echo " </th>
            <td>
                ";
            // line 8
            if ($this->getAttribute($context["t"], "class", array(), "any", true, true)) {
                // line 9
                echo "                    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, (($this->getAttribute($context["t"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "class", array()))) : ("")), "\\"), 0,  -1), "\\"), "html", null, true));
                echo "\\<strong>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->excerpt(twig_last($this->env, twig_split_filter($this->env, (($this->getAttribute($context["t"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "class", array()))) : ("")), "\\")), 32));
                echo "</strong>::";
            }
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["t"], "function", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "function", array()))) : ("")), "html", null, true));
            echo "(";
            // line 13
            if ( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array()))) {
                // line 14
                $context["index"] = $this->getAttribute($context["loop"], "index", array());
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["t"], "args_safe", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["arg"]) {
                    // line 16
                    echo "<tt><a href=\"\" data-index=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["arg"]);
                    echo "</a></tt>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 19
            echo ")
                <br>

                ";
            // line 22
            if ((($this->getAttribute($context["t"], "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "file", array()))) : (""))) {
                // line 23
                echo "                    <em class='dim'>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["t"], "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "file", array()))) : ("")), "html", null, true));
                echo " # line <strong>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["t"], "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["t"], "line", array()))) : ("")), "html", null, true));
                echo "</strong></em>
                ";
            }
            // line 25
            echo "
                ";
            // line 26
            if ( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array()))) {
                // line 27
                echo "                    <div id='trace-arguments-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
                echo "' style=\"display: none;\">
                        <em>(Arguments are loading)</em>
                    </div>
                ";
            }
            // line 31
            echo "            </td>
        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/_trace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 34,  159 => 31,  151 => 27,  149 => 26,  146 => 25,  138 => 23,  136 => 22,  131 => 19,  109 => 16,  92 => 15,  90 => 14,  88 => 13,  85 => 11,  78 => 9,  76 => 8,  71 => 6,  68 => 5,  51 => 4,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Stack trace</h2>

<table class=\"table table-striped table-hover table-condensed\">
    {% for t in exception.trace|default() %}
        <tr>
            <th class=\"narrow\"># {{ loop.index }} </th>
            <td>
                {% if t.class is defined %}
                    {{ t.class|default()|split(\"\\\\\")[0:-1]|join(\"\\\\\") -}}\\<strong>{{- t.class|default()|split(\"\\\\\")|last|excerpt(32) -}}</strong>::
                {%- endif -%}
                {{ t.function|default() }}(

                {%- if t.args_safe is not empty -%}
                    {% set index = loop.index %}
                    {%- for arg in t.args_safe -%}
                        <tt><a href=\"\" data-index=\"{{index}}\">{{ arg|raw }}</a></tt>{% if not loop.last %}, {% endif %}
                    {%- endfor -%}
                {%- endif -%}
                )
                <br>

                {% if t.file|default() %}
                    <em class='dim'>{{ t.file|default() }} # line <strong>{{ t.line|default() }}</strong></em>
                {% endif %}

                {% if t.args_safe is not empty %}
                    <div id='trace-arguments-{{loop.index}}' style=\"display: none;\">
                        <em>(Arguments are loading)</em>
                    </div>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
</table>
", "@bolt/exception/_trace.twig", "");
    }
}
