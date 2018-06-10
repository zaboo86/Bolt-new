<?php

/* @bolt/files/_upload.twig */
class __TwigTemplate_e1d959593bd94b0a0200ce3fb6de68d2b2e17a3f30b99ec5367dcb5fbeb500e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button_icon' => array($this, 'block_button_icon'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/files/_upload.twig"));

        $tags = array("import" => 1, "form_theme" => 3, "block" => 5);
        $filters = array();
        $functions = array("form_start" => 7, "form_widget" => 9, "form_end" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'form_theme', 'block'),
                array(),
                array('form_start', 'form_widget', 'form_end')
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/files/_upload.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "form_bolt_layout.twig", 1 => $this));
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('button_icon', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_start'));
        echo "
<fieldset>
    ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "select", array()), 'widget'));
        echo "
    <div>
        ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "upload", array()), 'widget'));
        echo "
    </div>
</fieldset>
";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_end'));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_icon"));

        echo "<i class=\"fa fa-fw fa-upload hidden\"></i> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/files/_upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 5,  78 => 14,  72 => 11,  67 => 9,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}

{% form_theme context.form 'form_bolt_layout.twig' _self %}

{% block button_icon %}<i class=\"fa fa-fw fa-upload hidden\"></i> {% endblock button_icon %}

{{ form_start(context.form) }}
<fieldset>
    {{ form_widget(context.form.select) }}
    <div>
        {{ form_widget(context.form.upload) }}
    </div>
</fieldset>
{{ form_end(context.form) }}
", "@bolt/files/_upload.twig", "");
    }
}
