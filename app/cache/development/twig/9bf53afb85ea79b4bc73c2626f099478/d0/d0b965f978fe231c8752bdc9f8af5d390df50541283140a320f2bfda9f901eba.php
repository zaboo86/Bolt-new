<?php

/* tutorial.twig */
class __TwigTemplate_4e4a5abef5b837c791d2cae85ea7339421d1147afe4f23e6931fce5e5be1cf37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "tutorial.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tutorial.twig"));

        $tags = array("set" => 2, "setcontent" => 8, "include" => 10, "if" => 16, "for" => 26);
        $filters = array("escape" => 18, "default" => 18);
        $functions = array("auth" => 3, "auth_has_role" => 41, "boltforms" => 44);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'setcontent', 'include', 'if', 'for'),
                array('escape', 'default'),
                array('auth', 'auth_has_role', 'boltforms')
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
        $context["tid"] = $this->getAttribute(($context["record"] ?? null), "id", array());
        // line 3
        $context["auth"] = $this->getAttribute($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getAuth(), "guid", array());
        // line 4
        $context["guid"] = ($context["auth"] ?? null);
        // line 5
        $context["relatedrecords"] = $this->getAttribute(($context["record"] ?? null), "related", array(0 => "entries"), "method");
        // line 6
        $context["valueX"] = 1;
        // line 7
        $context["id"] = $this->getAttribute(($context["record"] ?? null), "id", array());
        // line 8
        $context['visible'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("abo", array(), $pager, array("guid" => ($context["guid"] ?? null), "tutorialid" => ($context["id"] ?? null)) );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo "          
";
        // line 10
        $this->loadTemplate("partials/_sub_head.twig", "tutorial.twig", 10)->display($context);
        // line 11
        echo "               <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">     
         <div class=\"row\">
                <div class=\"col-md-4\" style=\"padding-right:50px;padding-left:0px;margin-left:0px;padding-top:15px;padding-bottom:15px;\">
                     ";
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["record"] ?? null), "image", array()))) {
            // line 17
            echo "                                     <img class=\"d-block\" id=\"tutorial_overview-image\" style=\"margin:0 auto;width:300px;\"
                             src=\"/thumbs/300x300c/2018-06/";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["record"] ?? null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["record"] ?? null), "image", array()))) : ("")), "html", null, true));
            echo "\"  />     
                     ";
        }
        // line 20
        echo "             </div>
                <div class=\"col-md-8\" style=\"padding:15px;\">
                    <h1 style=\"font-size:24px;\">Tutorial Overview: ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "title", array()), "html", null, true));
        echo "</h1>
                    <p>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "teaser", array()), "html", null, true));
        echo "</p>
                    <div class=\"btn-toolbar\">
                        <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            // line 27
            echo "                            ";
            if ((($context["valueX"] ?? null) == 1)) {
                // line 28
                echo "                         <a href=\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true));
                echo "\">
                             <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button></a>
                            ";
            }
            // line 31
            echo "                            ";
            $context["valueX"] = (($context["valueX"] ?? null) + 1);
            // line 32
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </div>
                    </div>
                </div>        
                <div class=\"col\" style=\"padding-top:0px;padding-right:30px;padding-left:30px;\">
                    <h1 id=\"course-description-heading\" style=\"font-size:24px;\">Kursbeschreibung</h1>
                    <p>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "body", array()), "html", null, true));
        echo "</p>
                    <div class=\"btn-toolbar\">
                        <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                        ";
        // line 41
        if (($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Member") || $this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Tutor"))) {
            // line 42
            echo "                        ";
            if (twig_test_empty(($context["visible"] ?? null))) {
                // line 43
                echo "                            
";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Extension\Bolt\BoltForms\Twig\Extension\BoltFormsRuntime')->twigBoltForms($this->env, "abo", null, null, null, array(), null, array("guid" => array("options" => array("attr" => array("value" =>                 // line 48
($context["guid"] ?? null)))), "tutorialid" => array("options" => array("attr" => array("value" =>                 // line 55
($context["tid"] ?? null)))))));
                // line 60
                echo "
                           ";
            }
            // line 61
            echo "        
                            ";
        }
        // line 63
        echo "                        </div>
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
        return "tutorial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  166 => 61,  162 => 60,  160 => 55,  159 => 48,  158 => 44,  155 => 43,  152 => 42,  150 => 41,  144 => 38,  137 => 33,  131 => 32,  128 => 31,  121 => 28,  118 => 27,  114 => 26,  108 => 23,  104 => 22,  100 => 20,  95 => 18,  92 => 17,  90 => 16,  83 => 11,  81 => 10,  73 => 9,  66 => 1,  64 => 8,  62 => 7,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  52 => 2,  11 => 1,);
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
{% set tid= record.id %}
{% set auth=auth().guid %}
{% set guid=auth %}
{% set relatedrecords = record.related('entries') %}  
{% set valueX = 1 %}
{% set id = record.id %}
{% setcontent visible = 'abo' where {guid: guid, tutorialid: id} %}
{% block main %}          
{% include 'partials/_sub_head.twig' %}
               <div style=\"margin-top:0px;padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">     
         <div class=\"row\">
                <div class=\"col-md-4\" style=\"padding-right:50px;padding-left:0px;margin-left:0px;padding-top:15px;padding-bottom:15px;\">
                     {% if record.image is not empty %}
                                     <img class=\"d-block\" id=\"tutorial_overview-image\" style=\"margin:0 auto;width:300px;\"
                             src=\"/thumbs/300x300c/2018-06/{{ record.image|default() }}\"  />     
                     {% endif %}
             </div>
                <div class=\"col-md-8\" style=\"padding:15px;\">
                    <h1 style=\"font-size:24px;\">Tutorial Overview: {{ record.title }}</h1>
                    <p>{{ record.teaser }}</p>
                    <div class=\"btn-toolbar\">
                        <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                            {% for related in relatedrecords %}
                            {% if valueX == 1 %}
                         <a href=\" {{related.link}}\">
                             <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button></a>
                            {% endif %}
                            {% set valueX = valueX + 1 %}
                            {%  endfor %}
                        </div>
                    </div>
                </div>        
                <div class=\"col\" style=\"padding-top:0px;padding-right:30px;padding-left:30px;\">
                    <h1 id=\"course-description-heading\" style=\"font-size:24px;\">Kursbeschreibung</h1>
                    <p>{{ record.body }}</p>
                    <div class=\"btn-toolbar\">
                        <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                        {% if auth_has_role('Member') or auth_has_role('Tutor') %}
                        {% if visible is empty %}
                            
{{boltforms('abo', override= {
                                    'guid': {
                                        options:{
                                            attr:{
                                                value: guid
                                                }
                                            }
                                        },
                                     'tutorialid': {
                                            options:{
                                                attr:{
                                                    value: tid
                                                    }
                                                }
                                            }    
                                        
                                    })}}
                           {% endif %}        
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                     
{% endblock main %}
", "tutorial.twig", "");
    }
}
