<?php

/* partials/_sub_head.twig */
class __TwigTemplate_6d82aee6a1e51281ddf2a4a263619d9a7eceb8669a7fec4b908ce14b9993a4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_head.twig"));

        $tags = array("set" => 1, "if" => 2, "setcontent" => 4, "block" => 19, "for" => 28);
        $filters = array("escape" => 30);
        $functions = array("auth_has_role" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'setcontent', 'block', 'for'),
                array('escape'),
                array('auth_has_role')
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
        $context["relatedrecords"] = $this->getAttribute(($context["record"] ?? null), "related", array(0 => "entries"), "method");
        // line 2
        if (twig_test_empty(($context["relatedrecords"] ?? null))) {
            // line 3
            $context["relatedrecords2"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(0 => "tutorials"), "method"), 0, array(), "array");
            // line 4
            $context['relatedrecords'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("entries", array(), $pager, array("tutorialid" => $this->getAttribute(($context["relatedrecords2"] ?? null), "id", array())) );
        }
        // line 6
        echo "    ";
        $context["relatedrecords2"] = $this->getAttribute(($context["record"] ?? null), "related", array(0 => "create_quizes"), "method");
        // line 7
        if (twig_test_empty(($context["relatedrecords2"] ?? null))) {
            // line 8
            $context["relatedrecord"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(0 => "tutorials"), "method"), 0, array(), "array");
            // line 9
            $context['relatedrecords2'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("create_quizes", array(), $pager, array("tutorialid" => $this->getAttribute(($context["relatedrecord"] ?? null), "id", array())) );
        }
        // line 11
        echo "     ";
        $context["relatedrecords3"] = $this->getAttribute(($context["record"] ?? null), "related", array(0 => "tutorials"), "method");
        // line 12
        echo "        ";
        if (twig_test_empty(($context["relatedrecords3"] ?? null))) {
            // line 13
            $context["relatedrecort"] = $this->getAttribute($this->getAttribute(($context["record"] ?? null), "related", array(0 => "tutorials"), "method"), 0, array(), "array");
            // line 14
            $context['relatedrecords3'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorials", array(), $pager, array("id" => $this->getAttribute(($context["relatedrecort"] ?? null), "tutorialid", array())) );
        }
        // line 16
        $context["value"] = 1;
        // line 17
        $context["value2"] = 1;
        // line 18
        $context["value3"] = 1;
        // line 19
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo "   

";
        // line 21
        if ((( !twig_test_empty(($context["relatedrecords"] ?? null)) ||  !twig_test_empty(($context["relatedrecords2"] ?? null))) ||  !twig_test_empty(($context["relatedrecords3"] ?? null)))) {
            // line 22
            echo " 
<div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-tabs ml-auto\" id=\"navTutorial\" data-spy=\"affix\" data-offset-top=\"70px\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 29
                echo "                                ";
                if ((($context["value"] ?? null) == 1)) {
                    // line 30
                    echo "                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true));
                    echo "\">Lernmaterialien</a></li>
                        ";
                }
                // line 32
                echo "                        ";
                $context["value"] = (($context["value"] ?? null) + 1);
                // line 33
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                          ";
            if (($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Member") || $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Tutor"))) {
                // line 35
                echo "                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"/page/chat-1\">Diskussionen</a></li>
                        ";
            }
            // line 37
            echo "                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"overview_tut.html\">Fortschritt</a></li>
                         ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["relatedrecords3"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related3"]) {
                // line 39
                echo "                        ";
                if ((($context["value3"] ?? null) == 1)) {
                    // line 40
                    echo "                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related3"], "link", array()), "html", null, true));
                    echo "\">Kursdetails</a></li>
                         ";
                }
                // line 42
                echo "                         ";
                $context["value3"] = (($context["value3"] ?? null) + 1);
                // line 43
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["relatedrecords2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related2"]) {
                // line 45
                echo "                        ";
                if ((($context["value2"] ?? null) == 1)) {
                    // line 46
                    echo "                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related2"], "link", array()), "html", null, true));
                    echo "\">Recap</a></li>
                            ";
                }
                // line 48
                echo "                         ";
                $context["value2"] = (($context["value2"] ?? null) + 1);
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                 ";
        }
        // line 50
        echo "               
                  </ul>
                </div>
            </div>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  180 => 49,  177 => 48,  171 => 46,  168 => 45,  164 => 44,  156 => 43,  153 => 42,  147 => 40,  144 => 39,  140 => 38,  137 => 37,  133 => 35,  130 => 34,  124 => 33,  121 => 32,  115 => 30,  112 => 29,  108 => 28,  100 => 22,  98 => 21,  83 => 19,  81 => 18,  79 => 17,  77 => 16,  74 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 9,  61 => 8,  59 => 7,  56 => 6,  53 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set relatedrecords = record.related('entries') %}
{% if relatedrecords is empty %}
{% set relatedrecords2 = record.related('tutorials')[0] %}
{% setcontent relatedrecords= 'entries' where {tutorialid: relatedrecords2.id} %}
{% endif %}
    {% set relatedrecords2 = record.related('create_quizes') %}
{% if relatedrecords2 is empty %}
{% set relatedrecord = record.related('tutorials')[0] %}
{% setcontent relatedrecords2= 'create_quizes' where {tutorialid: relatedrecord.id} %}
{% endif %}
     {% set relatedrecords3 = record.related('tutorials') %}
        {% if relatedrecords3 is empty %}
{% set relatedrecort= record.related('tutorials')[0] %}
{% setcontent relatedrecords3= 'tutorials' where {id: relatedrecort.tutorialid} %}
{% endif %}
{%set value=1 %}
{%set value2=1 %}
{%set value3=1 %}
{% block main %}   

{% if relatedrecords is not empty or  relatedrecords2 is not empty or relatedrecords3 is not empty   %}
 
<div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-tabs ml-auto\" id=\"navTutorial\" data-spy=\"affix\" data-offset-top=\"70px\">
                            {% for related in relatedrecords %}
                                {% if value == 1 %}
                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"{{related.link}}\">Lernmaterialien</a></li>
                        {% endif %}
                        {% set value=value +1 %}
                        {% endfor %}
                          {% if auth_has_role('Member') or auth_has_role('Tutor') %}
                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"/page/chat-1\">Diskussionen</a></li>
                        {% endif %}
                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"overview_tut.html\">Fortschritt</a></li>
                         {% for related3 in relatedrecords3 %}
                        {% if value3 == 1 %}
                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"{{related3.link}}\">Kursdetails</a></li>
                         {% endif %}
                         {% set value3=value3 +1 %}
                        {% endfor %} 
                        {% for related2 in relatedrecords2 %}
                        {% if value2 == 1 %}
                        <li class=\"nav-item\"><a class=\"nav-link text-capitalize\" href=\"{{related2.link}}\">Recap</a></li>
                            {% endif %}
                         {% set value2=value2 +1 %}
                        {% endfor %} 
                 {% endif %}               
                  </ul>
                </div>
            </div>
            </div>
        </div>
{% endblock %}
", "partials/_sub_head.twig", "");
    }
}
