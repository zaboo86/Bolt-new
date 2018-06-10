<?php

/* index.twig */
class __TwigTemplate_4a816dc8416a70c66414598cf465bf421998a988f85875ddea52dbb74c346d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "index.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $tags = array("if" => 2, "setcontent" => 4, "for" => 7);
        $filters = array("escape" => 10, "default" => 11, "date" => 23);
        $functions = array("include" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'setcontent', 'for'),
                array('escape', 'default', 'date'),
                array('include')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " ";
        if (array_key_exists("record", $context)) {
            echo " 
";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_header.twig"));
            echo " 
";
            // line 4
            $context['reponitems'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("reponses/latest/6", array() );
            echo " 
";
            // line 5
            $context['pageitems'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorial/latest/6", array() );
            // line 6
            echo "<div class=\"row articles\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageitem"]) {
                // line 8
                echo "    <div class=\"col-sm-6 col-md-4 item\">
        ";
                // line 9
                if ( !twig_test_empty($this->getAttribute($context["pageitem"], "image", array()))) {
                    // line 10
                    echo "        <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                    echo "\">
            <img src=\"/thumbs/91x91c/2018-06/";
                    // line 11
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["pageitem"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["pageitem"], "image", array()))) : ("")), "html", null, true));
                    echo "\">
        </a>
        ";
                }
                // line 14
                echo "        <h3 class=\"name\">
            <a href=\"";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "title", array()), "html", null, true));
                echo "</a>
        </h3>
        <p class=\"description\">";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "excerpt", array()), "html", null, true));
                echo "</p>
        <a href=\"";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\" class=\"action\">
            <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
        <p class=\"meta\">
            <a href=\"";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">Link</a>
            - Posted by ";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pageitem"], "user", array()), "displayname", array()), "html", null, true));
                echo " on ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pageitem"], "datecreated", array()), "M d, ’y"), "html", null, true));
                echo "</p>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reponitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reponitem"]) {
                echo " 
    ";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["reponitem"], "title", array()), "html", null, true));
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</div>
";
        }
        // line 30
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 30,  152 => 29,  144 => 27,  137 => 26,  126 => 23,  122 => 22,  115 => 18,  111 => 17,  104 => 15,  101 => 14,  95 => 11,  90 => 10,  88 => 9,  85 => 8,  81 => 7,  78 => 6,  76 => 5,  72 => 4,  68 => 3,  58 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}
{% block main %} {% if record is defined %} 
{{include('partials/_header.twig')}} 
{% setcontent reponitems = \"reponses/latest/6\" %} 
{% setcontent pageitems = \"tutorial/latest/6\" %}
<div class=\"row articles\">
    {% for pageitem in pageitems %}
    <div class=\"col-sm-6 col-md-4 item\">
        {% if pageitem.image is not empty %}
        <a href=\"{{ pageitem.link }}\">
            <img src=\"/thumbs/91x91c/2018-06/{{ pageitem.image|default() }}\">
        </a>
        {% endif %}
        <h3 class=\"name\">
            <a href=\"{{pageitem.link}}\">{{ pageitem.title }}</a>
        </h3>
        <p class=\"description\">{{ pageitem.excerpt }}</p>
        <a href=\"{{ pageitem.link }}\" class=\"action\">
            <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
        <p class=\"meta\">
            <a href=\"{{ pageitem.link }}\">Link</a>
            - Posted by {{ pageitem.user.displayname }} on {{ pageitem.datecreated|date(\"M d, ’y\")}}</p>
    </div>
    {% endfor %}
    {% for reponitem in reponitems %} 
    {{reponitem.title}} 
    {% endfor %}
</div>
{% endif %} {% endblock main %}
", "index.twig", "");
    }
}
