<?php

/* index.twig */
class __TwigTemplate_4a816dc8416a70c66414598cf465bf421998a988f85875ddea52dbb74c346d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/_master.twig", "index.twig", 2);
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

        $tags = array("if" => 8, "setcontent" => 14, "for" => 20);
        $filters = array("reverse" => 20, "escape" => 26, "default" => 27, "date" => 48);
        $functions = array("include" => 11);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'setcontent', 'for'),
                array('reverse', 'escape', 'default', 'date'),
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

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 8
        if (array_key_exists("record", $context)) {
            echo " 

";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "partials/_header.twig"));
            echo " 

";
            // line 14
            $context['reponitems'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("reponses/latest/6", array() );
            echo " 
";
            // line 15
            $context['pageitems'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorial/latest/6", array() );
            // line 16
            echo "
<div class=\"row articles\">
    
";
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["pageitems"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["pageitem"]) {
                // line 21
                echo "    <div class=\"col-sm-6 col-md-4 item\">

";
                // line 25
                echo "        ";
                if ( !twig_test_empty($this->getAttribute($context["pageitem"], "image", array()))) {
                    // line 26
                    echo "        <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                    echo "\">
            <img src=\"/thumbs/91x91c/2018-06/";
                    // line 27
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["pageitem"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["pageitem"], "image", array()))) : ("")), "html", null, true));
                    echo "\">
        </a>
        ";
                }
                // line 30
                echo "        <h3 class=\"name\">

";
                // line 33
                echo "            <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "title", array()), "html", null, true));
                echo "</a>
        </h3>

";
                // line 37
                echo "        <p class=\"description\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "excerpt", array()), "html", null, true));
                echo "</p>

";
                // line 40
                echo "        <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\" class=\"action\">
            <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
        <p class=\"meta\">

";
                // line 46
                echo " 
            <a href=\"";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["pageitem"], "link", array()), "html", null, true));
                echo "\">Link</a>
            - Posted by ";
                // line 48
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
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reponitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reponitem"]) {
                echo " 
    ";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["reponitem"], "title", array()), "html", null, true));
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "</div>
";
        }
        // line 56
        echo "
";
        
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
        return array (  176 => 56,  172 => 54,  164 => 52,  157 => 51,  146 => 48,  142 => 47,  139 => 46,  130 => 40,  124 => 37,  115 => 33,  111 => 30,  105 => 27,  100 => 26,  97 => 25,  93 => 21,  88 => 20,  83 => 16,  81 => 15,  77 => 14,  72 => 11,  67 => 8,  64 => 6,  58 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Erbt von der Master #}
{% extends 'partials/_master.twig' %}

{# Der Main-Block wird definiert, wo die anzuzeigenden Elemente dargestellt werden #}
{% block main %}

{# Überprüft ob eine Datenbank hinterlegt ist #}
{% if record is defined %} 

{# Fügt den Sub-Head zu dieser Seite hinzu #}
{{include('partials/_header.twig')}} 

{# Die letzten seks Tutorials werden aus der Datenbank geholt #}
{% setcontent reponitems = \"reponses/latest/6\" %} 
{% setcontent pageitems = \"tutorial/latest/6\" %}

<div class=\"row articles\">
    
{# Eine Schleife, die alle seks Tutorials mit den dazugehörigen Inhalt auflistet #}
    {% for pageitem in pageitems | reverse %}
    <div class=\"col-sm-6 col-md-4 item\">

{# Wenn ein Bild vorhanden ist, wird es an dieser Stelle eingebuden,
sowie eine verlinkung beim anklicken des Bildes zum dazugehörigem Tutorial #}
        {% if pageitem.image is not empty %}
        <a href=\"{{ pageitem.link }}\">
            <img src=\"/thumbs/91x91c/2018-06/{{ pageitem.image|default() }}\">
        </a>
        {% endif %}
        <h3 class=\"name\">

{# Der zugewiesene Titel des Tutorials wird mit einer Verlinkung zum Tutorial eingebuden #}
            <a href=\"{{pageitem.link}}\">{{ pageitem.title }}</a>
        </h3>

{# Ein kurzer ausschnitt aus dem Body des Tutorials wird angezeigt #}
        <p class=\"description\">{{ pageitem.excerpt }}</p>

{# Ein Button mit einer direkten Verlinkung zum Tutorial wird eingebunden #}
        <a href=\"{{ pageitem.link }}\" class=\"action\">
            <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
        <p class=\"meta\">

{# Für Admins eine weitere Funktion, damit sie sehen können wann als letztes etwas geändert wurde
und einen direkten Edit Button, bei bearbeitungs bedarf #} 
            <a href=\"{{ pageitem.link }}\">Link</a>
            - Posted by {{ pageitem.user.displayname }} on {{ pageitem.datecreated|date(\"M d, ’y\")}}</p>
    </div>
    {% endfor %}
    {% for reponitem in reponitems %} 
    {{reponitem.title}} 
    {% endfor %}
</div>
{% endif %}

{# Der Main-Block wird wieder geschlossen #}
{% endblock main %}
", "index.twig", "");
    }
}
