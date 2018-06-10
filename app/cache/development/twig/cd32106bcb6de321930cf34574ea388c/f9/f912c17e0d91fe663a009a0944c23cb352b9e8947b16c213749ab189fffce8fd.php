<?php

/* @bolt/_sub/_record_list_data.twig */
class __TwigTemplate_68738d3a3c778744d50332178cfdd94a6df3403f6e83f2fcc8d216c02604dcb3 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_record_list_data.twig"));

        $tags = array();
        $filters = array("escape" => 1);
        $functions = array("data" => 1, "__" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('escape'),
                array('data', '__')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.confirm.one", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.confirm-record-single")), "html", null, true));
        echo "
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.confirm.multi", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.confirm-record-multiple")), "html", null, true));
        echo "
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.confirm.no-undo", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-undo")), "html", null, true));
        echo "
";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.action.cancel", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.cancel")), "html", null, true));
        echo "
";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.action.delete", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.delete", array("%contenttype%" => "%CTNAME%"))), "html", null, true));
        echo "
";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.action.publish", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.publish", array("%contenttype%" => "%CTNAME%"))), "html", null, true));
        echo "
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.action.depublish", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-change-held")), "html", null, true));
        echo "
";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("recordlisting.action.draft", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-change-draft")), "html", null, true));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  70 => 7,  66 => 6,  62 => 5,  58 => 4,  54 => 3,  50 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data('recordlisting.confirm.one',      __('general.phrase.confirm-record-single')) }}
{{ data('recordlisting.confirm.multi',    __('general.phrase.confirm-record-multiple')) }}
{{ data('recordlisting.confirm.no-undo',  __('general.phrase.no-undo')) }}
{{ data('recordlisting.action.cancel',    __('general.phrase.cancel')) }}
{{ data('recordlisting.action.delete',    __('contenttypes.generic.delete', {'%contenttype%': '%CTNAME%'})) }}
{{ data('recordlisting.action.publish',   __('contenttypes.generic.publish', {'%contenttype%': '%CTNAME%'})) }}
{{ data('recordlisting.action.depublish', __('general.phrase.status-change-held')) }}
{{ data('recordlisting.action.draft',     __('general.phrase.status-change-draft')) }}
", "@bolt/_sub/_record_list_data.twig", "");
    }
}
