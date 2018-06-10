<?php

/* @bolt/files/_panel-actions_files.twig */
class __TwigTemplate_63e9f92f3cc72a2bca2bd349721076bbf9ed06541a03faa27e12efb9e94c42a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/files/_panel-actions_files.twig", 4);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/files/_panel-actions_files.twig"));

        $tags = array("if" => 14);
        $filters = array("escape" => 17);
        $functions = array("__" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('escape'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("panel-news");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("fa-cog");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.actions-for-files"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 13
        echo "  <div>
      ";
        // line 14
        if (($this->getAttribute(($context["context"] ?? null), "form", array()) != false)) {
            // line 15
            echo "        <p>
        <a href=\"#\" class=\"btn btn-default\"
           data-action=\"Bolt.files.createFolder('";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "directory", array()), "mountPoint", array()), "html", null, true));
            echo "',
                                                '";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "directory", array()), "path", array()), "html", null, true));
            echo "',
                                                this);\">
          <i class=\"fa fa-fw fa-plus\"></i>
            ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.label.create-folder"));
            echo "
        </a>
        <a href=\"#\" class=\"btn btn-default\"
           data-action=\"Bolt.files.createFile('";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "directory", array()), "mountPoint", array()), "html", null, true));
            echo "',
                                              '";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "directory", array()), "path", array()), "html", null, true));
            echo "',
                                              this);\">
          <i class=\"fa fa-fw fa-plus\"></i>
            ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.label.create-file"));
            echo "
        </a>
        </p>
      ";
        } else {
            // line 32
            echo "        <p><i class=\"fa fa-fw fa-exclamation-sign\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.message.access-denied"));
            echo "</p>
      ";
        }
        // line 34
        echo "
    <p style=\"margin-top: 15px;\"><strong>";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.filter"));
        echo "</strong></p>

    <form class=\"form-inline\">

      <div class=\"form-group\">
        <input id=\"file-manager-search\" type=\"text\" class=\"form-control\"  name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.keyword-ellipsis"));
        echo "\">
      </div>

    </form>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/files/_panel-actions_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 40,  154 => 35,  151 => 34,  145 => 32,  138 => 28,  132 => 25,  128 => 24,  122 => 21,  116 => 18,  112 => 17,  108 => 15,  106 => 14,  103 => 13,  97 => 12,  85 => 10,  73 => 8,  61 => 6,  11 => 4,);
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
 # Sidebar-Panel: Displays actions for files
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-news' %}

{% block panel_icon 'fa-cog' %}

{% block panel_head __('page.file-management.actions-for-files') %}

{% block panel_body %}
  <div>
      {% if context.form != false %}
        <p>
        <a href=\"#\" class=\"btn btn-default\"
           data-action=\"Bolt.files.createFolder('{{ context.directory.mountPoint }}',
                                                '{{ context.directory.path }}',
                                                this);\">
          <i class=\"fa fa-fw fa-plus\"></i>
            {{ __('page.file-management.label.create-folder') }}
        </a>
        <a href=\"#\" class=\"btn btn-default\"
           data-action=\"Bolt.files.createFile('{{ context.directory.mountPoint }}',
                                              '{{ context.directory.path }}',
                                              this);\">
          <i class=\"fa fa-fw fa-plus\"></i>
            {{ __('page.file-management.label.create-file') }}
        </a>
        </p>
      {% else %}
        <p><i class=\"fa fa-fw fa-exclamation-sign\"></i> {{ __('page.file-management.message.access-denied') }}</p>
      {% endif %}

    <p style=\"margin-top: 15px;\"><strong>{{ __('general.phrase.filter') }}</strong></p>

    <form class=\"form-inline\">

      <div class=\"form-group\">
        <input id=\"file-manager-search\" type=\"text\" class=\"form-control\"  name=\"filter\" style=\"width: 110px;\" placeholder=\"{{ __('general.phrase.keyword-ellipsis') }}\">
      </div>

    </form>
  </div>
{% endblock panel_body %}
", "@bolt/files/_panel-actions_files.twig", "");
    }
}
