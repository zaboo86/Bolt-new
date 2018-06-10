<?php

/* @BoltForms/feedback/_messages.twig */
class __TwigTemplate_06d68e66c6b24ab9dfd453a13085fc87c8d5f899132ba4f0ad786d7d139faa28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages_debug' => array($this, 'block_messages_debug'),
            'messages_error' => array($this, 'block_messages_error'),
            'messages_info' => array($this, 'block_messages_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltForms/feedback/_messages.twig"));

        $tags = array("block" => 4, "if" => 5, "for" => 9);
        $filters = array("nl2br" => 10, "escape" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for'),
                array('nl2br', 'escape'),
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

        // line 4
        $this->displayBlock('messages_debug', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('messages_error', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('messages_info', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_messages_debug($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages_debug"));

        // line 5
        echo "    ";
        if (($context["debug"] ?? null)) {
            // line 6
            echo "        <p class=\"boltform-debug\">[Debug] Notification debug mode enabled!</p>

        ";
            // line 8
            if (($this->getAttribute(($context["messages"] ?? null), "debug", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => ($context["formname"] ?? null)), "method"))) {
                // line 9
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["messages"] ?? null), "debug", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["debug"]) {
                    // line 10
                    echo "                <p class=\"boltform-debug\">[Debug] ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(nl2br(twig_escape_filter($this->env, $context["debug"], "html", null, true)));
                    echo "</p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debug'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        ";
            }
            // line 13
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_messages_error($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages_error"));

        // line 17
        echo "    ";
        if (($this->getAttribute(($context["messages"] ?? null), "error", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => ($context["formname"] ?? null)), "method"))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["messages"] ?? null), "error", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "            <p class=\"boltform-error\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["error"], "html", null, true));
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_messages_info($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages_info"));

        // line 25
        echo "    ";
        if (($this->getAttribute(($context["messages"] ?? null), "info", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => ($context["formname"] ?? null)), "method"))) {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["messages"] ?? null), "info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 27
                echo "            <p class=\"boltform-info boltform-message\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["info"], "html", null, true));
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BoltForms/feedback/_messages.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 29,  151 => 27,  146 => 26,  143 => 25,  137 => 24,  129 => 21,  120 => 19,  115 => 18,  112 => 17,  106 => 16,  98 => 13,  95 => 12,  86 => 10,  81 => 9,  79 => 8,  75 => 6,  72 => 5,  66 => 4,  59 => 24,  56 => 23,  54 => 16,  51 => 15,  49 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
 # Informational message blocks
 #}
{% block messages_debug %}
    {% if debug %}
        <p class=\"boltform-debug\">[Debug] Notification debug mode enabled!</p>

        {% if messages.debug and app.request.get(formname) %}
            {% for debug in messages.debug %}
                <p class=\"boltform-debug\">[Debug] {{ debug|nl2br }}</p>
            {% endfor %}
        {% endif %}
    {% endif %}
{% endblock %}

{% block messages_error %}
    {% if messages.error and app.request.get(formname) %}
        {% for error in messages.error %}
            <p class=\"boltform-error\">{{ error }}</p>
        {% endfor %}
    {% endif %}
{% endblock %}

{% block messages_info %}
    {% if messages.info and app.request.get(formname) %}
        {% for info in messages.info %}
            <p class=\"boltform-info boltform-message\">{{ info }}</p>
        {% endfor %}
    {% endif %}
{% endblock %}
", "@BoltForms/feedback/_messages.twig", "");
    }
}
