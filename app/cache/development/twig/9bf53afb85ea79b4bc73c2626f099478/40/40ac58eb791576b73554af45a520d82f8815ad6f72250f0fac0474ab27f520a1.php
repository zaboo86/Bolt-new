<?php

/* @bolt/_nav/_secondary-filemanagement.twig */
class __TwigTemplate_b38ea72787d16b7b8e59ad9eb6a54edcdd9e01e6720b6186f9a51098dd389856 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-filemanagement.twig"));

        $tags = array("import" => 1, "spaceless" => 2, "set" => 3, "if" => 6);
        $filters = array("merge" => 6);
        $functions = array("__" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'spaceless', 'set', 'if'),
                array('merge'),
                array('__')
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
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary-filemanagement.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["menu"] = $this->getAttribute(($context["menus"] ?? null), "get", array(0 => "files"), "method");
        // line 4
        echo "    ";
        $context["sub"] = array();
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "files_uploads"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "files_uploads"), "method")));
        }
        // line 7
        echo "    ";
        if ($this->getAttribute(($context["menu"] ?? null), "has", array(0 => "files_themes"), "method")) {
            $context["sub"] = twig_array_merge(($context["sub"] ?? null), array(0 => $this->getAttribute(($context["menu"] ?? null), "get", array(0 => "files_themes"), "method")));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["nav"]->getsubmenu("fa:folder-open", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.file-management"), ($context["sub"] ?? null), (($context["page_nav"] ?? null) == "Settings/FileManagement")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_nav/_macros.twig' as nav %}
{% spaceless %}
    {% set menu = menus.get('files') %}
    {% set sub = [] %}

    {% if menu.has('files_uploads') %}{% set sub = sub|merge([menu.get('files_uploads')]) %}{% endif %}
    {% if menu.has('files_themes') %}{% set sub = sub|merge([menu.get('files_themes')]) %}{% endif %}
{% endspaceless %}
{{ nav.submenu('fa:folder-open', __('general.phrase.file-management'), sub, (page_nav == 'Settings/FileManagement')) }}
", "@bolt/_nav/_secondary-filemanagement.twig", "");
    }
}
