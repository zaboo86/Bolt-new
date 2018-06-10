<?php

/* partials/_aside.twig */
class __TwigTemplate_b27703e0ed5ad6bff8b585b5fe5ddc14ff2c8905034b5f2dd2631d625ebc74cc extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_aside.twig"));

        $tags = array("setcontent" => 1, "set" => 2, "if" => 4, "for" => 6);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'set', 'if', 'for'),
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
        $context['entries'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("entries/latest/3", array() );
        // line 2
        $context["relatedrecords"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(), "method"), 0, array(), "array");
        echo "    
";
        // line 3
        $context['quiz'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("create_quizes", array(), $pager, array("tutorialid" => $this->getAttribute(($context["relatedrecords"] ?? null), "id", array())) );
        // line 4
        echo "    ";
        if ( !twig_test_empty(($context["quiz"] ?? null))) {
            // line 5
            echo "        <ul>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["quiz"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 7
                echo "          <li class=\"list-group-item nav-item\" style=\"padding:0px;\"><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true));
                echo "\" class=\"nav-link\"><span style=\"margin:0px;padding:0px;\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true));
                echo "</span></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  64 => 7,  60 => 6,  57 => 5,  54 => 4,  52 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% setcontent entries = \"entries/latest/3\" %}
{% set relatedrecords = record.related()[0] %}    
{% setcontent quiz='create_quizes' where{tutorialid:relatedrecords.id} %}
    {% if quiz is not empty %}
        <ul>
        {% for related in quiz %}
          <li class=\"list-group-item nav-item\" style=\"padding:0px;\"><a href=\"{{ related.link }}\" class=\"nav-link\"><span style=\"margin:0px;padding:0px;\">{{ related.title }}</span></a></li>
        {%  endfor %}
        </ul>
    {% endif %}
", "partials/_aside.twig", "");
    }
}
