<?php

/* @bolt/files/_folders.twig */
class __TwigTemplate_737b24c616006d2b230890e81890669353d75b8454097d523b5383c21d7ae586 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/files/_folders.twig"));

        $tags = array("from" => 1, "set" => 4, "for" => 5, "if" => 6);
        $filters = array("escape" => 21, "trim" => 21, "excerpt" => 21, "merge" => 24, "default" => 24, "slice" => 25, "e" => 44);
        $functions = array("__" => 14, "path" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'set', 'for', 'if'),
                array('escape', 'trim', 'excerpt', 'merge', 'default', 'slice', 'e'),
                array('__', 'path')
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
        $context["__internal_fbdbb3560c06cabf4fe2d77165509283a4be4efe44f753006f8c15e23442f4b7"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/files/_folders.twig", 1);
        // line 2
        echo "
";
        // line 4
        $context["hasTimestamps"] = false;
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "directories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 6
            echo "    ";
            if (( !($context["hasTimestamps"] ?? null) && ($this->getAttribute($context["dir"], "timestamp", array()) != 0))) {
                // line 7
                echo "        ";
                $context["hasTimestamps"] = true;
                // line 8
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.folders"));
        echo "</th>
            <th colspan=\"2\">";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((($context["hasTimestamps"] ?? null)) ? ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.modified")) : ("")));
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "directories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 21
            echo "            <tr class=\"entry\" data-bolt-browse-name=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_trim_filter($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->excerpt($this->getAttribute($context["directory"], "filename", array()), 60)), "html", null, true));
            echo "\">
                <td class=\"filename\">
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", twig_array_merge(((array_key_exists("pathoptions", $context)) ? (_twig_default_filter(($context["pathoptions"] ?? null), array())) : (array())), array("path" => $this->getAttribute($context["directory"], "path", array()), "namespace" => $this->getAttribute($context["directory"], "mountPoint", array())))), "html", null, true));
            echo "\">
                        <b class=\"name\">";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["directory"], "filename", array()), 0, 60), "html", null, true));
            echo "</b>
                    </a>
                </td>
                <td class=\"folder-meta\">
                    ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_fbdbb3560c06cabf4fe2d77165509283a4be4efe44f753006f8c15e23442f4b7"]->getbuic_moment($this->getAttribute($context["directory"], "timestamp", array())));
            echo "
                </td>
                ";
            // line 31
            if (($this->getAttribute(($context["context"] ?? null), "form", array()) != false)) {
                // line 32
                echo "                    <td class=\"actions\">
                        <div class=\"btn-group\">
                            <a class=\"btn dropdown-toggle btn-default btn-sm\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.options"));
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"bolt.files.renameFolder('";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["directory"], "mountPoint", array()), "html", null, true));
                echo "',
                                                                        '";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["directory"], "dirname", array()), "js"), "html", null, true));
                echo "',
                                                                        '";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["directory"], "filename", array()), "js"), "html", null, true));
                echo "',
                                                                        this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 49
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.rename-foldername", array("%foldername%" => $this->getAttribute($context["directory"], "filename", array()))));
                echo "
                                    </a>
                                    <a href=\"#\"
                                       data-action=\"bolt.files.deleteFolder('";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["directory"], "mountPoint", array()), "html", null, true));
                echo "',
                                                                        '";
                // line 53
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["directory"], "dirname", array()), "js"), "html", null, true));
                echo "',
                                                                        '";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["directory"], "filename", array()), "js"), "html", null, true));
                echo "',
                                                                        this);\">

                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 58
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.delete-directory-name", array("%foldername%" => $this->getAttribute($context["directory"], "filename", array()))));
                echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                ";
            }
            // line 65
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/files/_folders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 67,  179 => 65,  169 => 58,  162 => 54,  158 => 53,  154 => 52,  148 => 49,  141 => 45,  137 => 44,  133 => 43,  123 => 36,  117 => 32,  115 => 31,  110 => 29,  103 => 25,  99 => 24,  92 => 21,  88 => 20,  80 => 15,  76 => 14,  70 => 10,  63 => 8,  60 => 7,  57 => 6,  53 => 5,  51 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@bolt/_buic/_moment.twig' import buic_moment %}

{# Only show modified header if some directories have timestamps #}
{% set hasTimestamps = false %}
{% for dir in context.directories %}
    {% if not hasTimestamps and dir.timestamp != 0 %}
        {% set hasTimestamps = true %}
    {% endif %}
{% endfor %}

<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>{{ __('general.phrase.folders') }}</th>
            <th colspan=\"2\">{{ hasTimestamps ? __('general.phrase.modified') }}</th>
        </tr>
    </thead>

    <tbody>
        {% for directory in context.directories %}
            <tr class=\"entry\" data-bolt-browse-name=\"{{ directory.filename|excerpt(60) | trim }}\">
                <td class=\"filename\">
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>
                    <a href=\"{{ path('files', pathoptions|default({})|merge({'path': directory.path, 'namespace': directory.mountPoint})) }}\">
                        <b class=\"name\">{{ directory.filename[:60] }}</b>
                    </a>
                </td>
                <td class=\"folder-meta\">
                    {{ buic_moment(directory.timestamp) }}
                </td>
                {% if context.form != false %}
                    <td class=\"actions\">
                        <div class=\"btn-group\">
                            <a class=\"btn dropdown-toggle btn-default btn-sm\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                {{ __('general.phrase.options') }}
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"bolt.files.renameFolder('{{ directory.mountPoint }}',
                                                                        '{{ directory.dirname|e('js') }}',
                                                                        '{{ directory.filename|e('js') }}',
                                                                        this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        {{ __('general.phrase.rename-foldername', {'%foldername%': directory.filename}) }}
                                    </a>
                                    <a href=\"#\"
                                       data-action=\"bolt.files.deleteFolder('{{ directory.mountPoint }}',
                                                                        '{{ directory.dirname|e('js') }}',
                                                                        '{{ directory.filename|e('js') }}',
                                                                        this);\">

                                        <i class=\"fa fa-ban\"></i>
                                        {{ __('general.phrase.delete-directory-name', {'%foldername%': directory.filename}) }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                {% endif %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@bolt/files/_folders.twig", "");
    }
}
