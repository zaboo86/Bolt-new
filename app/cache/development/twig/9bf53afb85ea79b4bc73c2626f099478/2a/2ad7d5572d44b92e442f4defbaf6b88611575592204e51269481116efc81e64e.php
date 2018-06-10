<?php

/* partials/_sub_pager.twig */
class __TwigTemplate_a0f5deba79e1c0e4e34ba6b61d38b1ac5631f6fbadbc371131f154107399cb95 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_pager.twig"));

        $tags = array("set" => 1, "if" => 2, "for" => 23);
        $filters = array("escape" => 3);
        $functions = array("range" => 23, "max" => 23, "min" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('escape'),
                array('range', 'max', 'min')
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
        $context["link"] = $this->getAttribute(($context["pager"] ?? null), "makelink", array(), "method");
        // line 2
        if (($this->getAttribute(($context["pager"] ?? null), "totalpages", array()) > 1)) {
            // line 3
            echo "<nav class=\"media pagination is-centered ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true));
            echo "\" role=\"navigation\" aria-label=\"pagination\">
    ";
            // line 5
            if ((($this->getAttribute(($context["pager"] ?? null), "current", array()) > 1) && (($context["class"] ?? null) != "narrow"))) {
                // line 6
                echo "<a class=\"pagination-previous\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($this->getAttribute(($context["pager"] ?? null), "current", array()) - 1), "html", null, true));
                echo "\" rel=\"noindex, follow\">Previous</a>";
            }
            // line 8
            if ((($this->getAttribute(($context["pager"] ?? null), "current", array()) < $this->getAttribute(($context["pager"] ?? null), "totalpages", array())) && (($context["class"] ?? null) != "narrow"))) {
                // line 9
                echo "<a class=\"pagination-next\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($this->getAttribute(($context["pager"] ?? null), "current", array()) + 1), "html", null, true));
                echo "\" rel=\"noindex, follow\">Next page</a>";
            }
            // line 12
            echo "<ul class=\"pagination-list\">
        ";
            // line 14
            if (($this->getAttribute(($context["pager"] ?? null), "current", array()) > (($context["surr"] ?? null) + 1))) {
                // line 15
                echo "<li><a class=\"pagination-link\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(1);
                echo "\">1</a></li>";
            }
            // line 19
            if (($this->getAttribute(($context["pager"] ?? null), "current", array()) > (($context["surr"] ?? null) + 2))) {
                // line 20
                echo "<li><span class=\"pagination-ellipsis\">&hellip;</span></li>";
            }
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute(($context["pager"] ?? null), "current", array()) - ($context["surr"] ?? null))), min(($this->getAttribute(($context["pager"] ?? null), "current", array()) + ($context["surr"] ?? null)), $this->getAttribute(($context["pager"] ?? null), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "<li><a class=\"pagination-link";
                if (($context["i"] == $this->getAttribute(($context["pager"] ?? null), "current", array()))) {
                    echo " is-current";
                }
                echo "\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["i"], "html", null, true));
                echo "\" ";
                if (($context["i"] != 1)) {
                    echo "rel=\"noindex, follow\"";
                }
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["i"], "html", null, true));
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            if (($this->getAttribute(($context["pager"] ?? null), "current", array()) < (($this->getAttribute(($context["pager"] ?? null), "totalpages", array()) - ($context["surr"] ?? null)) - 1))) {
                // line 29
                echo "<li><span class=\"pagination-ellipsis\">&hellip;</span></li>";
            }
            // line 33
            if (($this->getAttribute(($context["pager"] ?? null), "current", array()) < ($this->getAttribute(($context["pager"] ?? null), "totalpages", array()) - ($context["surr"] ?? null)))) {
                // line 34
                echo "<li><a class=\"pagination-link\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpages", array()), "html", null, true));
                echo "\" rel=\"noindex, follow\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpages", array()), "html", null, true));
                echo "</a></li>";
            }
            // line 36
            echo "</ul>
</nav>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  117 => 34,  115 => 33,  112 => 29,  110 => 28,  91 => 24,  87 => 23,  84 => 20,  82 => 19,  76 => 15,  74 => 14,  71 => 12,  65 => 9,  63 => 8,  57 => 6,  55 => 5,  50 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set link = pager.makelink() -%}
{%- if pager.totalpages > 1 -%}
<nav class=\"media pagination is-centered {{ class }}\" role=\"navigation\" aria-label=\"pagination\">
    {# 'prev' and 'next' #}
    {%- if pager.current > 1 and class != \"narrow\" -%}
    <a class=\"pagination-previous\" href=\"{{ link }}{{ pager.current - 1 }}\" rel=\"noindex, follow\">Previous</a>
    {%- endif -%}
    {%- if pager.current < pager.totalpages and class != \"narrow\" -%}
    <a class=\"pagination-next\" href=\"{{ link }}{{ pager.current + 1 }}\" rel=\"noindex, follow\">Next page</a>
    {%- endif -%}

    <ul class=\"pagination-list\">
        {# 'first' #}
        {%- if pager.current > (surr + 1) -%}
        <li><a class=\"pagination-link\" href=\"{{ link }}{{ 1 }}\">1</a></li>
        {%- endif -%}

        {# start with '..' if there are more than surr+1 before currentpage.. #}
        {%- if pager.current > (surr + 2) -%}
        <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
        {%- endif -%}

        {%- for i in max(1, pager.current - surr)..min(pager.current + surr, pager.totalpages) -%}
        <li><a class=\"pagination-link{% if i == pager.current %} is-current{% endif %}\" href=\"{{ link }}{{ i }}\" {% if i != 1 %}rel=\"noindex, follow\"{% endif %}>{{ i }}</a></li>
        {%- endfor -%}

        {# end with '..' if there are more than surr+1 after currentpage.. #}
        {%- if pager.current < (pager.totalpages - surr - 1) -%}
        <li><span class=\"pagination-ellipsis\">&hellip;</span></li>
        {%- endif -%}

        {# 'last' #}
        {%- if pager.current < (pager.totalpages - surr) -%}
        <li><a class=\"pagination-link\" href=\"{{ link }}{{ pager.totalpages }}\" rel=\"noindex, follow\">{{ pager.totalpages }}</a></li>
        {%- endif -%}
    </ul>
</nav>
{%- endif -%}
", "partials/_sub_pager.twig", "");
    }
}
