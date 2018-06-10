<?php

/* form_bolt_layout.twig */
class __TwigTemplate_39848ae4c932944c02f0a5baba6b6c13a94adcf588ee88691734569ce50b7108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "form_bolt_layout.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_horizontal_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_icon' => array($this, 'block_button_icon'),
                'button_widget' => array($this, 'block_button_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_bolt_layout.twig"));

        $tags = array("block" => 4, "if" => 5, "set" => 22);
        $filters = array("default" => 5, "merge" => 22, "trim" => 22, "replace" => 25, "humanize" => 30, "escape" => 33, "trans" => 33);
        $functions = array("form_label" => 6, "form_widget" => 8, "form_errors" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set'),
                array('default', 'merge', 'trim', 'replace', 'humanize', 'escape', 'trans'),
                array('form_label', 'form_widget', 'form_errors')
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

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_row', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        $this->displayBlock('button_icon', $context, $blocks);
        // line 21
        $this->displayBlock('button_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 5
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"))));
        // line 7
        echo "<div class=\"col-sm-10 col-md-6 col-lg-4\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "large"))));
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'));
        // line 10
        echo "</div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_icon"));

        // line 16
        if (        $this->hasBlock(((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "name", array()) . "_") . ($context["name"] ?? null)) . "_button_icon"), $context, $blocks)) {
            // line 17
            echo "    ";
            $this->displayBlock(((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "name", array()) . "_") . ($context["name"] ?? null)) . "_button_icon"), $context, $blocks);
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 22
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-primary")) : ("btn-primary")) . " btn"))));
        // line 23
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 24
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 25
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 26
($context["name"] ?? null), "%id%" =>                 // line 27
($context["id"] ?? null)));
            } else {
                // line 30
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
            }
        }
        // line 33
        echo "<button type=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true));
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        $this->displayBlock("button_icon", $context, $blocks);
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true));
        echo "</button>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 33,  142 => 30,  139 => 27,  138 => 26,  137 => 25,  135 => 24,  133 => 23,  131 => 22,  125 => 21,  114 => 17,  112 => 16,  106 => 15,  98 => 10,  96 => 9,  94 => 8,  92 => 7,  90 => 6,  84 => 5,  78 => 4,  71 => 21,  69 => 15,  66 => 13,  64 => 4,  61 => 3,  14 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# overrides for the defaults in vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig #}
{% use \"bootstrap_3_horizontal_layout.html.twig\" %}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form, null, {'label_attr': {'class':'col-sm-2 control-label' } }) -}}
        <div class=\"col-sm-10 col-md-6 col-lg-4\">
            {{- form_widget(form, {'attr' : { 'class' : 'large' } }) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{# Button <i> used inside button_widget when set #}
{%- block button_icon %}
{% if block(form.parent.vars.name ~ '_' ~ name ~ '_button_icon') is defined %}
    {{ block(form.parent.vars.name ~ '_' ~ name ~ '_button_icon') }}
{% endif %}
{% endblock button_icon -%}

{%- block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-primary') ~ ' btn')|trim}) %}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ block('button_icon') }}{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}
", "form_bolt_layout.twig", "");
    }
}
