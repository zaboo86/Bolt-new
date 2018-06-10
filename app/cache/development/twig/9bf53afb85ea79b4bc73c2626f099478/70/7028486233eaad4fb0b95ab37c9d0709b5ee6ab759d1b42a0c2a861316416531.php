<?php

/* entry.twig */
class __TwigTemplate_8fce0df58f2b832aa9934db3eb04cb5f787d5bdca2cd04553de3d5342cbc0b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "entry.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entry.twig"));

        $tags = array("set" => 2, "setcontent" => 3, "include" => 9, "for" => 19, "if" => 19);
        $filters = array("escape" => 21, "default" => 21);
        $functions = array("include" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'setcontent', 'include', 'for', 'if'),
                array('escape', 'default'),
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

        // line 2
        $context["temp"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(), "method"), 0, array(), "array");
        // line 3
        $context["slug"] = $this->getAttribute(($context["record"] ?? null), "slug", array());
        $context['relatedrecords'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("entries", array(), $pager, array("tutorialid" => $this->getAttribute(($context["temp"] ?? null), "id", array())) );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "<div style=\"margin-top:0px;padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 9
        $this->loadTemplate("partials/_sub_head.twig", "entry.twig", 9)->display($context);
        // line 10
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\" style=\"padding-right:15px;padding-left:25px;margin-left:0px;\">
                ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_aside2.twig"));
        echo "
            </div>
            <div class=\"col-md-8\">
                <div class=\"card\" style=\"margin-right:0px;margin-left:-15px;\">
                    <div class=\"card-body\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            echo " ";
            $context["slug2"] = $this->getAttribute($context["related"], "slug", array());
            echo " ";
            if ((($context["slug"] ?? null) == ($context["slug2"] ?? null))) {
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["related"], "image", array()))) {
                    // line 21
                    echo "                        <img class=\"d-block\" style=\"margin:0 auto;\" src=\"/thumbs/640x480c/2018-06/";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["related"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["related"], "image", array()))) : ("")), "html", null, true));
                    echo "\"> ";
                }
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["related"], "video", array()))) {
                    echo " ";
                    $context["ids"] = $this->getAttribute($context["related"], "video", array());
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["ids"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 22
                        echo "                        <video controls preload=\"metadata\" width=\"560\" height=\"315\">
                            <source src=\"http://bolt.independent-tutorials.local/files/2018-06/";
                        // line 23
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["id"], "title", array()), "html", null, true));
                        echo "\" type=\"video/webm\">
                            <source src=\"http://bolt.independent-tutorials.local/files/2018-06/";
                        // line 24
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["id"], "title", array()), "html", null, true));
                        echo "\" type=\"video/mp4\">
                        </video>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo " ";
                }
                // line 27
                echo "                        <h4 class=\"card-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true));
                echo "</h4>
                        <p class=\"card-text\">";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "body", array()), "html", null, true));
                echo "</p>
                        ";
            }
            // line 29
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 30,  144 => 29,  139 => 28,  134 => 27,  131 => 26,  122 => 24,  118 => 23,  115 => 22,  102 => 21,  92 => 19,  84 => 14,  78 => 10,  76 => 9,  70 => 5,  64 => 4,  57 => 1,  54 => 3,  52 => 2,  11 => 1,);
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
{% set temp = record.related()[0] %}
{% set slug= record.slug %} {% setcontent relatedrecords = 'entries' where { tutorialid: temp.id } %}
{% block main %}
<div style=\"margin-top:0px;padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                {%include 'partials/_sub_head.twig'%}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\" style=\"padding-right:15px;padding-left:25px;margin-left:0px;\">
                {{ include('partials/_aside2.twig') }}
            </div>
            <div class=\"col-md-8\">
                <div class=\"card\" style=\"margin-right:0px;margin-left:-15px;\">
                    <div class=\"card-body\">
                        {% for related in relatedrecords %} {% set slug2 =related.slug %} {% if slug == slug2 %} {% if related.image is not empty
                        %}
                        <img class=\"d-block\" style=\"margin:0 auto;\" src=\"/thumbs/640x480c/2018-06/{{ related.image|default() }}\"> {% endif %} {% if related.video is not empty %} {% set ids = related.video %} {% for id in ids %}
                        <video controls preload=\"metadata\" width=\"560\" height=\"315\">
                            <source src=\"http://bolt.independent-tutorials.local/files/2018-06/{{id.title}}\" type=\"video/webm\">
                            <source src=\"http://bolt.independent-tutorials.local/files/2018-06/{{id.title}}\" type=\"video/mp4\">
                        </video>
                        {% endfor %} {% endif %}
                        <h4 class=\"card-title\">{{ related.title }}</h4>
                        <p class=\"card-text\">{{ related.body }}</p>
                        {% endif %} {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock main %}
", "entry.twig", "");
    }
}
