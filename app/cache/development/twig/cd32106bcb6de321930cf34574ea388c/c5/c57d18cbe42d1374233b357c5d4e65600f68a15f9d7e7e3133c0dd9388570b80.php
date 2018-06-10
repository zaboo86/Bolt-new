<?php

/* @bolt/_macro/_panels.twig */
class __TwigTemplate_42c1a907eb789ca4e24fad5d4d94474bb7be4c8736b3d9fa6a24ceddaeb769a9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_panels.twig"));

        $tags = array("macro" => 7, "if" => 8);
        $filters = array("default" => 9);
        $functions = array("stack" => 9, "render" => 10, "path" => 10, "constant" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'if'),
                array('default'),
                array('stack', 'render', 'path', 'constant')
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

        // line 14
        echo "

";
        // line 29
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "stack"));

            // line 8
            echo "    ";
            if ( !$this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter(($context["ommit_empty"] ?? null), false)) : (false)) ||  !twig_test_empty($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->stack()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stack/show", array("items" => ((array_key_exists("items", $context)) ? (_twig_default_filter(($context["items"] ?? null), twig_constant("Bolt\\Stack::MAX_ITEMS"))) : (twig_constant("Bolt\\Stack::MAX_ITEMS")))))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "lastmodified"));

            // line 23
            echo "    ";
            if (((array_key_exists("content_id", $context)) ? (_twig_default_filter(($context["content_id"] ?? null), false)) : (false))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => ($context["contenttype_slug"] ?? null)))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => ($context["contenttype_slug"] ?? null), "contentid" => ($context["content_id"] ?? null)))));
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changes"));

            // line 38
            echo "    ";
            if ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecord", array("contenttype" => ($context["contenttype_slug"] ?? null), "contentid" => ($context["content_id"] ?? null)))));
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 39,  169 => 38,  153 => 37,  131 => 26,  125 => 24,  122 => 23,  106 => 22,  87 => 12,  81 => 10,  78 => 9,  75 => 8,  59 => 7,  50 => 29,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Renders a stack panel
 #
 # @param int  items (default: 10)
 # @param bool ommit_empty (default: false)
 #}
{% macro stack(items, ommit_empty) %}
    {% if not config.get('general/backend/stack/disable', false) %}
        {% if not ommit_empty|default(false) or stack() is not empty %}
            {{ render(path('stack/show', {'items': items|default(constant('Bolt\\\\Stack::MAX_ITEMS'))} )) }}
        {% endif %}
    {% endif %}
{% endmacro %}


{##
 # Renders a last modified panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro lastmodified(contenttype_slug, content_id) %}
    {% if content_id|default(false) %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug})) }}
    {% else %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}


{##
 # Renders a record changes panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro changes(contenttype_slug, content_id) %}
    {% if config.get('general/changelog/enabled', true) %}
        {{ render(path('changelogrecord', {'contenttype': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}
", "@bolt/_macro/_panels.twig", "");
    }
}
