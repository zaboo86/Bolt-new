<?php

/* @bolt/dashboard/_quicklinks-dropdown.twig */
class __TwigTemplate_a8ed804ca9ed305e567f17c3d5f4cefe080573409407a6ee4c915fd0a32ec84d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_quicklinks-dropdown.twig"));

        $tags = array("set" => 1, "for" => 2, "if" => 3);
        $filters = array("escape" => 17);
        $functions = array("isallowed" => 3, "__" => 10, "path" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('escape'),
                array('isallowed', '__', 'path')
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
        $context["allowedany"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "    ";
            if (($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                // line 4
                echo "        ";
                $context["allowedany"] = true;
                // line 5
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        if (($context["allowedany"] ?? null)) {
            // line 8
            echo "    <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.dashboard.button.add"));
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "get", array(0 => "contenttypes"), "method"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 15
                echo "            ";
                if (($this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                    // line 16
                    echo "                <li>
                    <a href=\"";
                    // line 17
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true));
                    echo "\">
                        <i class=\"fa fa-plus\"></i>
                        ";
                    // line 19
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($context["contenttype"], "singular_name", array()))));
                    echo "
                    </a>
                </li>
            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_quicklinks-dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  100 => 23,  93 => 19,  88 => 17,  85 => 16,  82 => 15,  78 => 14,  71 => 10,  67 => 8,  65 => 7,  58 => 5,  55 => 4,  52 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set allowedany = false %}
{% for contenttypeslug, contenttype in config.get('contenttypes') %}
    {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}
        {% set allowedany = true %}
    {% endif %}
{% endfor %}
{% if allowedany %}
    <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {{ __('page.dashboard.button.add') }}
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        {% for contenttypeslug, contenttype in config.get('contenttypes') %}
            {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}
                <li>
                    <a href=\"{{ path('editcontent', {'contenttypeslug': contenttypeslug}) }}\">
                        <i class=\"fa fa-plus\"></i>
                        {{ __('contenttypes.generic.new', {'%contenttype%': contenttype.singular_name}) }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
        </ul>
    </div>
{% endif %}
", "@bolt/dashboard/_quicklinks-dropdown.twig", "");
    }
}
