<?php

/* @bolt/exception/_tracedumps.twig */
class __TwigTemplate_ae0c08b31414f32ac42766de417f7a51289ce34fc16868213b244a88a540f31c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/_tracedumps.twig"));

        $tags = array("for" => 2, "if" => 4);
        $filters = array("default" => 2, "escape" => 3);
        $functions = array("dump" => 6);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('default', 'escape'),
                array('dump')
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
        echo "<div style=\"display: none;\">
";
        // line 2
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
            // line 3
            echo "    <div id='arguments-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
            echo "' class='trace-arguments-placeholder'>
    ";
            // line 4
            if (( !twig_test_empty($this->getAttribute($context["t"], "args_safe", array())) && ($this->getAttribute($context["loop"], "index0", array()) < $this->getAttribute(($context["exception"] ?? null), "trace_limit", array())))) {
                // line 5
                echo "        Arguments:
        ";
                // line 6
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\DumpRuntime')->dump($this->env, $context, $this->getAttribute($context["t"], "args", array())));
                echo "
    ";
            } else {
                // line 8
                echo "        <em>(Arguments not available. Raise <tt>debug_trace_argument_limit</tt> to see them)</em>
    ";
            }
            // line 10
            echo "    </div>
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
        // line 12
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/_tracedumps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 12,  85 => 10,  81 => 8,  76 => 6,  73 => 5,  71 => 4,  66 => 3,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: none;\">
{% for t in exception.trace|default() %}
    <div id='arguments-{{loop.index}}' class='trace-arguments-placeholder'>
    {% if t.args_safe is not empty and loop.index0 < exception.trace_limit %}
        Arguments:
        {{ dump(t.args) }}
    {% else %}
        <em>(Arguments not available. Raise <tt>debug_trace_argument_limit</tt> to see them)</em>
    {% endif %}
    </div>
{% endfor %}
</div>
", "@bolt/exception/_tracedumps.twig", "");
    }
}
