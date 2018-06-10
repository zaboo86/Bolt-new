<?php

/* @bolt/files/files.twig */
class __TwigTemplate_1d89d6f6774c1f510d3619b7f7a463a48b076e8b0a39f9d13b4f6c4d49aa064c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/files/files.twig", 8);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/files/files.twig"));

        $tags = array("import" => 3, "from" => 4, "set" => 6, "if" => 18);
        $filters = array("escape" => 16, "length" => 18);
        $functions = array("__" => 12, "data" => 16, "path" => 26, "widgets" => 40, "include" => 43);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'from', 'set', 'if'),
                array('escape', 'length'),
                array('__', 'data', 'path', 'widgets', 'include')
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/files/files.twig", 3);
        // line 4
        $context["__internal_fbe9ece178fb6075fec5cb8e6ca54f5aa34e17f57dad399f50a3756060041e6c"] = $this->loadTemplate("@bolt/_macro/_files_path.twig", "@bolt/files/files.twig", 4);
        // line 6
        $context["page_bodyclass"] = "";
        // line 8
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Settings/FileManagement");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.title"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.create_folder", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.message.create-folder")), "html", null, true));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.create_file", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.message.create-file")), "html", null, true));
        echo "
    ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "directories", array())) > 0)) {
            // line 19
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.rename_folder", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.message.create-folder")), "html", null, true));
            echo "
        ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.delete_folder", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Do you really want to delete %FOLDERNAME%?")), "html", null, true));
            echo "
    ";
        }
        // line 22
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "files", array())) > 0)) {
            // line 23
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.rename_file", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.file-management.message.create-file")), "html", null, true));
            echo "
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("files.msg.delete_file", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.confirm-delete-file")), "html", null, true));
            echo "
    ";
        }
        // line 26
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.file.create", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file/create")), "html", null, true));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.file.delete", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file/delete")), "html", null, true));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.file.duplicate", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file/duplicate")), "html", null, true));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.file.rename", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file/rename")), "html", null, true));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.folder.create", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createfolder")), "html", null, true));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.folder.delete", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removefolder")), "html", null, true));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("url.folder.rename", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("renamefolder")), "html", null, true));
        echo "


    <div class=\"row file-manager\">
        <div class=\"col-md-9\">

            ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_fbe9ece178fb6075fec5cb8e6ca54f5aa34e17f57dad399f50a3756060041e6c"]->getfiles_path($this->getAttribute(($context["context"] ?? null), "directory", array())));
        echo "

            ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "files_below_header", "backend"));
        echo "
            <div id=\"dropzone-target\">
                ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "directories", array())) > 0)) {
            // line 43
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/files/_folders.twig"));
            echo "
                ";
        }
        // line 45
        echo "
                ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "files", array())) > 0)) {
            // line 47
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/files/_files.twig"));
            echo "
                ";
        }
        // line 49
        echo "            </div>

            ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "files_bottom", "backend"));
        echo "

        </div>

        <div class=\"col-md-3\">
          ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/files/_aside.twig"));
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/files/files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  200 => 51,  196 => 49,  190 => 47,  188 => 46,  185 => 45,  179 => 43,  177 => 42,  172 => 40,  167 => 38,  158 => 32,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  133 => 26,  128 => 24,  123 => 23,  120 => 22,  115 => 20,  110 => 19,  108 => 18,  104 => 17,  100 => 16,  97 => 15,  91 => 14,  79 => 12,  67 => 10,  60 => 8,  58 => 6,  56 => 4,  54 => 3,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > File Management > Uploaded files #}

{% import '@bolt/_macro/_macro.twig' as macro %}
{% from '@bolt/_macro/_files_path.twig' import files_path %}

{% set page_bodyclass = '' %}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Settings/FileManagement' %}

{% block page_title __('page.file-management.title') %}

{% block page_main %}

    {{ data('files.msg.create_folder', __('page.file-management.message.create-folder')) }}
    {{ data('files.msg.create_file', __('page.file-management.message.create-file')) }}
    {% if context.directories|length > 0 %}
        {{ data('files.msg.rename_folder', __('page.file-management.message.create-folder')) }}
        {{ data('files.msg.delete_folder', __('Do you really want to delete %FOLDERNAME%?')) }}
    {% endif %}
    {% if context.files|length > 0 %}
        {{ data('files.msg.rename_file', __('page.file-management.message.create-file')) }}
        {{ data('files.msg.delete_file', __('general.phrase.confirm-delete-file')) }}
    {% endif %}
    {{ data('url.file.create', path('file/create')) }}
    {{ data('url.file.delete', path('file/delete')) }}
    {{ data('url.file.duplicate', path('file/duplicate')) }}
    {{ data('url.file.rename', path('file/rename')) }}
    {{ data('url.folder.create', path('createfolder')) }}
    {{ data('url.folder.delete', path('removefolder')) }}
    {{ data('url.folder.rename', path('renamefolder')) }}


    <div class=\"row file-manager\">
        <div class=\"col-md-9\">

            {{ files_path(context.directory) }}

            {{ widgets('files_below_header', 'backend') }}
            <div id=\"dropzone-target\">
                {% if context.directories|length > 0 %}
                    {{ include('@bolt/files/_folders.twig') }}
                {% endif %}

                {% if context.files|length > 0 %}
                    {{ include('@bolt/files/_files.twig') }}
                {% endif %}
            </div>

            {{ widgets('files_bottom', 'backend') }}

        </div>

        <div class=\"col-md-3\">
          {{ include('@bolt/files/_aside.twig') }}
        </div>
    </div>

{% endblock page_main %}
", "@bolt/files/files.twig", "");
    }
}
