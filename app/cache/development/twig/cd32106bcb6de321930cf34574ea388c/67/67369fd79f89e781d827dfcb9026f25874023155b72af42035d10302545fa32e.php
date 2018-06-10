<?php

/* @bolt/components/stack/panel.twig */
class __TwigTemplate_3a8d7a0ddf4f52b25c37268940a6e0bcba8c10aef5801e5acfd3bf4b769a5ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/stack/panel.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/stack/panel.twig"));

        $tags = array("for" => 16, "include" => 17, "if" => 23, "set" => 43);
        $filters = array("slice" => 16, "escape" => 36, "join" => 37);
        $functions = array("__" => 11, "stack" => 16, "path" => 36, "hattr" => 52);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'include', 'if', 'set'),
                array('slice', 'escape', 'join'),
                array('__', 'stack', 'path', 'hattr')
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

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-stack");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-paperclip");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.stack-files"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->stack(), 0, $this->getAttribute(($context["context"] ?? null), "count", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 17
            echo "                ";
            $this->loadTemplate("@bolt/components/stack/panel-item.twig", "@bolt/components/stack/panel.twig", 17)->display(array("file" => $context["file"]));
            // line 18
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "                <div class=\"empty\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.stack-empty"));
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>

        ";
        // line 23
        if ($this->getAttribute(($context["context"] ?? null), "canUpload", array())) {
            // line 24
            echo "            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        ";
        }
        // line 26
        echo "
        <div class=\"stackbuttons\">
            ";
        // line 28
        if ($this->getAttribute(($context["context"] ?? null), "canUpload", array())) {
            // line 29
            echo "                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.upload"));
            echo "</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload", array("namespace" => $this->getAttribute(($context["context"] ?? null), "namespace", array()))), "html", null, true));
            echo "\"
                               accept=\".";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["context"] ?? null), "filetypes", array()), ",."), "html", null, true));
            echo "\">
                    </span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"btn-group\">
                ";
        // line 43
        $context["attr"] = array("class" => "btn btn-tertiary", "data-bolt-widget" => array("buicBrowser" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asyncbrowse"))), "type" => "button");
        // line 52
        echo "                <button";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr(($context["attr"] ?? null)));
        echo "><i class=\"fa fa-plus\"></i> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.select"));
        echo "</button>
            </div>
        </div>
    </fieldset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/stack/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 52,  172 => 43,  168 => 41,  161 => 37,  157 => 36,  150 => 32,  145 => 29,  143 => 28,  139 => 26,  135 => 24,  133 => 23,  129 => 21,  120 => 19,  115 => 18,  112 => 17,  107 => 16,  103 => 14,  97 => 13,  85 => 11,  73 => 9,  61 => 7,  11 => 5,);
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
 # Sidebar-Panel: Displays the files located on the stack
 # (Usage Example: Dashboards sidebar)
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-stack' %}

{% block panel_icon 'fa-paperclip' %}

{% block panel_head __('general.phrase.stack-files') %}

{% block panel_body %}
    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            {% for file in stack()[:context.count] %}
                {% include '@bolt/components/stack/panel-item.twig' with {'file': file} only %}
            {% else %}
                <div class=\"empty\">{{ __('general.phrase.stack-empty') }}</div>
            {% endfor %}
        </div>

        {% if context.canUpload %}
            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        {% endif %}

        <div class=\"stackbuttons\">
            {% if context.canUpload %}
                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>{{ __('general.phrase.upload') }}</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"{{ path('upload', { namespace: context.namespace }) }}\"
                               accept=\".{{ context.filetypes|join(',.') }}\">
                    </span>
                </div>
            {% endif %}

            <div class=\"btn-group\">
                {% set attr = {
                    'class': 'btn btn-tertiary',
                    'data-bolt-widget': {
                        buicBrowser: {
                            url: path('asyncbrowse'),
                        },
                    },
                    'type': 'button',
                } %}
                <button{{ hattr(attr) }}><i class=\"fa fa-plus\"></i> {{ __('general.phrase.select') }}</button>
            </div>
        </div>
    </fieldset>
{% endblock %}
", "@bolt/components/stack/panel.twig", "");
    }
}
