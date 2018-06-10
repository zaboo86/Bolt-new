<?php

/* create-quiz.twig */
class __TwigTemplate_026a1d24308447dd90179e8d66e6c31bbb42d7ff264f42e5ff8cdc6c49a4e053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "create-quiz.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create-quiz.twig"));

        $tags = array("set" => 3, "setcontent" => 8, "include" => 14, "for" => 29, "if" => 29);
        $filters = array("escape" => 30);
        $functions = array("auth" => 3, "include" => 22, "boltforms" => 40);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'setcontent', 'include', 'for', 'if'),
                array('escape'),
                array('auth', 'include', 'boltforms')
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

        echo " 
";
        // line 3
        $context["auth"] = $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getAuth();
        echo " 
";
        // line 4
        $context["guid"] = $this->getAttribute(($context["auth"] ?? null), "guid", array());
        echo " 
";
        // line 5
        $context["value"] = 1;
        echo " ";
        // line 6
        $context["temp"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(), "method"), 0, array(), "array");
        // line 7
        $context["slug"] = $this->getAttribute(($context["record"] ?? null), "slug", array());
        echo " 
";
        // line 8
        $context['relatedrecords'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("create_quizes", array(), $pager, array("tutorialid" => $this->getAttribute(($context["temp"] ?? null), "id", array())) );
        // line 9
        echo "<div style=\"margin-top:0px;padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"nav nav-tabs ml-auto\" id=\"navTutorial\" data-spy=\"affix\" data-offset-top=\"70px\">
                    ";
        // line 14
        $this->loadTemplate("partials/_sub_head.twig", "create-quiz.twig", 14)->display($context);
        // line 15
        echo "                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\" style=\"padding-right:15px;padding-left:25px;margin-left:0px;\">
                <aside id=\"aside\" class=\"card-header\" style=\"margin-right:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;\">
                    <ul class=\"list-group nav nav-tabs card-header-tabs\">
                        ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_aside.twig"));
        echo "
                    </ul>
                </aside>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card\" style=\"margin-right:0px;margin-left:-15px;\">
                    <div class=\"card-body\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            echo " ";
            $context["slug2"] = $this->getAttribute($context["related"], "slug", array());
            echo " ";
            if ((($context["slug"] ?? null) == ($context["slug2"] ?? null))) {
                // line 30
                echo "                        <h4 class=\"card-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "question", array()), "html", null, true));
                echo "</h4>
                        <p> Question: </p>
                        ";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "question", array()), "html", null, true));
                echo "
                        <p> Answer 1: </p>
                        ";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "answer1", array()), "html", null, true));
                echo "
                        <p> Answer 2: </p>
                        ";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "answer2", array()), "html", null, true));
                echo "
                        <p> Answer 3: </p>
                        ";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "answer3", array()), "html", null, true));
                echo "
                        <p> Answer 4: </p>
                        ";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "answer4", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\Bolt\BoltForms\Twig\Extension\BoltFormsRuntime')->twigBoltForms($this->env, "quiz-answer"));
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        <br>
                        <br> ";
        // line 42
        $this->loadTemplate("partials/_record_meta.twig", "create-quiz.twig", 42)->display(array_merge($context, array("extended" => true)));
        // line 43
        echo "
                    </div>
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
        return "create-quiz.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  161 => 42,  158 => 41,  147 => 40,  142 => 38,  137 => 36,  132 => 34,  127 => 32,  121 => 30,  113 => 29,  103 => 22,  94 => 15,  92 => 14,  85 => 9,  83 => 8,  79 => 7,  77 => 6,  74 => 5,  70 => 4,  66 => 3,  58 => 2,  11 => 1,);
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
{% block main %} 
{% set auth=auth() %} 
{% set guid=auth.guid %} 
{% set value=1 %} {%
set temp = record.related()[0] %}
{% set slug= record.slug %} 
{% setcontent relatedrecords = 'create_quizes'where { tutorialid: temp.id } %}
<div style=\"margin-top:0px;padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"nav nav-tabs ml-auto\" id=\"navTutorial\" data-spy=\"affix\" data-offset-top=\"70px\">
                    {%include 'partials/_sub_head.twig'%}
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\" style=\"padding-right:15px;padding-left:25px;margin-left:0px;\">
                <aside id=\"aside\" class=\"card-header\" style=\"margin-right:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;\">
                    <ul class=\"list-group nav nav-tabs card-header-tabs\">
                        {{ include('partials/_aside.twig') }}
                    </ul>
                </aside>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card\" style=\"margin-right:0px;margin-left:-15px;\">
                    <div class=\"card-body\">
                        {% for related in relatedrecords %} {% set slug2 =related.slug %} {% if slug == slug2 %}
                        <h4 class=\"card-title\">{{related.question}}</h4>
                        <p> Question: </p>
                        {{related.question}}
                        <p> Answer 1: </p>
                        {{related.answer1}}
                        <p> Answer 2: </p>
                        {{related.answer2}}
                        <p> Answer 3: </p>
                        {{related.answer3}}
                        <p> Answer 4: </p>
                        {{related.answer4}} {{boltforms('quiz-answer')}} {% endif %} {% endfor %}
                        <br>
                        <br> {% include 'partials/_record_meta.twig' with {'extended': true} %}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock main %}
", "create-quiz.twig", "");
    }
}
