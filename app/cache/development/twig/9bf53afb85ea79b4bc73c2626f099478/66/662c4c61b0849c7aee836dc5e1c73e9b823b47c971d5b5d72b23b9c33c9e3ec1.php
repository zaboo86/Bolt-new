<?php

/* @bolt/files/_files.twig */
class __TwigTemplate_c2dddfa2a59f26543808f811c2c151cc6ea3771e0fdb917271c5a7ab89ce3896 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/files/_files.twig"));

        $tags = array("from" => 1, "for" => 14, "if" => 18);
        $filters = array("escape" => 15, "slice" => 15, "thumbnail" => 22, "shy" => 25, "e" => 86);
        $functions = array("__" => 6, "path" => 32);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('from', 'for', 'if'),
                array('escape', 'slice', 'thumbnail', 'shy', 'e'),
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
        $context["__internal_9bba2862ced29720680a5da63cd64fe20975b9a6f45cd43c3ac3c68518e2ffe1"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/files/_files.twig", 1);
        // line 2
        echo "
<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.ckeditor-browse-server.files"));
        echo "</th>
            <th></th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.ckeditor-browse-server.size"));
        echo " / ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.ckeditor-browse-server.modified"));
        echo "</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 15
            echo "            <tr class=\"entry\" data-bolt-browse-name=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["file"], "filename", array()), 0, 80), "html", null, true));
            echo "\">
                ";
            // line 17
            echo "                <td class=\"filename\" colspan=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute($context["file"], "image", array())) ? (1) : (2)));
            echo "\">
                    ";
            // line 18
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 19
                echo "
                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        <a href=\"";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail($this->getAttribute($context["file"], "path", array()), 1000, 1000, "r"), "html", null, true));
                echo "\"
                           class=\"magnific\"
                           title=\"Image: ";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true));
                echo "\">
                            <b class=\"name\">";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->shy(twig_slice($this->env, $this->getAttribute($context["file"], "filename", array()), 0, 80)));
                echo "</b>
                        </a>

                    ";
            } elseif (twig_in_filter($this->getAttribute(            // line 28
$context["file"], "extension", array()), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "markdown", 5 => "json", 6 => "htm", 7 => "scss", 8 => "css", 9 => "less", 10 => "js", 11 => "yml"))) {
                // line 29
                echo "
                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        <a href=\"";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => $this->getAttribute($context["file"], "mountPoint", array()), "file" => $this->getAttribute($context["file"], "path", array()))), "html", null, true));
                echo "\">
                            <b>";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->shy(twig_slice($this->env, $this->getAttribute($context["file"], "filename", array()), 0, 80)));
                echo "</b>
                        </a>

                    ";
            } else {
                // line 37
                echo "                        ";
                if ($this->getAttribute($context["file"], "hasUrl", array())) {
                    // line 38
                    echo "                            <i class=\"fa fa-fw fa-link\"></i>
                            <a href=\"";
                    // line 39
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "url", array()), "html", null, true));
                    echo "\" target=\"_blank\">
                                <b class=\"name\">";
                    // line 40
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->shy(twig_slice($this->env, $this->getAttribute($context["file"], "filename", array()), 0, 80)));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 43
                    echo "                            <i class=\"fa fa-fw fa-file-o disabled\"></i>
                            <b class=\"disabled name\">";
                    // line 44
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\HtmlRuntime')->shy(twig_slice($this->env, $this->getAttribute($context["file"], "filename", array()), 0, 80)));
                    echo "</b>
                        ";
                }
                // line 46
                echo "                    ";
            }
            // line 47
            echo "                </td>
                ";
            // line 49
            echo "                ";
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 50
                echo "                    <td class=\"listthumb\">
                      <img data-src=\"";
                // line 51
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail($this->getAttribute($context["file"], "path", array()), 54, 40, "c"), "html", null, true));
                echo "\">
                    </td>
                ";
            }
            // line 54
            echo "                ";
            // line 55
            echo "                <td class=\"file-meta hidden-xs hidden-sm\">
                    <span class=\"buic-moment\" title=\"";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true));
            echo " bytes (";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeFormatted", array(0 => true), "method"), "html", null, true));
            echo ")\">
                        <b>";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeFormatted", array(0 => true), "method"), "html", null, true));
            echo "</b></span>,
                    ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_9bba2862ced29720680a5da63cd64fe20975b9a6f45cd43c3ac3c68518e2ffe1"]->getbuic_moment($this->getAttribute($context["file"], "timestamp", array())));
            echo "
                    ";
            // line 59
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 60
                echo "                        <div class=\"image-dimensions\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "width", array()), "html", null, true));
                echo "<span class=\"times\">×</span>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "height", array()), "html", null, true));
                echo " px</div>
                    ";
            }
            // line 62
            echo "                </td>
                ";
            // line 64
            echo "                <td class=\"actions\">

                    <div class=\"btn-group\">

                        ";
            // line 68
            if (( !$this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->testStackable($context["file"]))) {
                // line 69
                echo "                            <a href=\"#\" class=\"btn btn-default btn-sm\" data-bolt-addtostack=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true));
                echo "\">
                                <i class=\"fa fa-paperclip\"></i>
                                <span class=\"visible-sm-inline visible-xs-inline\">";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.stack"));
                echo "</span>
                                <span class=\"hidden-sm hidden-xs\">";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.stack-add"));
                echo "</span>
                            </a>
                        ";
            }
            // line 75
            echo "
                        ";
            // line 76
            if (($this->getAttribute(($context["context"] ?? null), "form", array()) != false)) {
                // line 77
                echo "                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" style=\"padding-left: 9px; padding-right: 9px;\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 79
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.options"));
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"Bolt.files.renameFile('";
                // line 86
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "mountPoint", array()), "html", null, true));
                echo "', '";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "dirname", array()), "js"), "html", null, true));
                echo "', '";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "js"), "html", null, true));
                echo "', this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 89
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.rename-foldername", array("%foldername%" => $this->getAttribute($context["file"], "filename", array()))));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.deleteFile('";
                // line 93
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "mountPoint", array()), "html", null, true));
                echo "', '";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "js"), "html", null, true));
                echo "', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 95
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.delete-file-name", array("%filename%" => $this->getAttribute($context["file"], "filename", array()))));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.duplicateFile('";
                // line 99
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "mountPoint", array()), "html", null, true));
                echo "', '";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "js"), "html", null, true));
                echo "')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        ";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.duplicate-file-name", array("%filename%" => $this->getAttribute($context["file"], "filename", array()))));
                echo "
                                    </a>
                                </li>
                            </ul>
                        ";
            }
            // line 106
            echo "                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/files/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 111,  287 => 106,  279 => 101,  272 => 99,  265 => 95,  258 => 93,  251 => 89,  241 => 86,  231 => 79,  227 => 77,  225 => 76,  222 => 75,  216 => 72,  212 => 71,  206 => 69,  204 => 68,  198 => 64,  195 => 62,  187 => 60,  185 => 59,  181 => 58,  177 => 57,  171 => 56,  168 => 55,  166 => 54,  160 => 51,  157 => 50,  154 => 49,  151 => 47,  148 => 46,  143 => 44,  140 => 43,  134 => 40,  130 => 39,  127 => 38,  124 => 37,  117 => 33,  113 => 32,  108 => 29,  106 => 28,  100 => 25,  96 => 24,  91 => 22,  86 => 19,  84 => 18,  79 => 17,  74 => 15,  70 => 14,  59 => 8,  54 => 6,  48 => 2,  46 => 1,);
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

<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>{{ __('page.ckeditor-browse-server.files') }}</th>
            <th></th>
            <th class=\"hidden-xs hidden-sm\">{{ __('page.ckeditor-browse-server.size') }} / {{ __('page.ckeditor-browse-server.modified') }}</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        {% for file in context.files %}
            <tr class=\"entry\" data-bolt-browse-name=\"{{ file.filename[:80] }}\">
                {# Column: Filename #}
                <td class=\"filename\" colspan=\"{{ file.image ? 1 : 2 }}\">
                    {% if file.image %}

                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        <a href=\"{{ file.path|thumbnail(1000, 1000, 'r') }}\"
                           class=\"magnific\"
                           title=\"Image: {{ file.filename }}\">
                            <b class=\"name\">{{ file.filename[:80]|shy }}</b>
                        </a>

                    {% elseif file.extension in ['twig', 'txt', 'html', 'md', 'markdown', 'json', 'htm', 'scss', 'css', 'less', 'js', 'yml'] %}

                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        <a href=\"{{ path('fileedit', {'namespace': file.mountPoint, 'file': file.path}) }}\">
                            <b>{{ file.filename[:80]|shy }}</b>
                        </a>

                    {% else %}
                        {% if file.hasUrl %}
                            <i class=\"fa fa-fw fa-link\"></i>
                            <a href=\"{{ file.url }}\" target=\"_blank\">
                                <b class=\"name\">{{ file.filename[:80]|shy }}</b>
                            </a>
                        {% else %}
                            <i class=\"fa fa-fw fa-file-o disabled\"></i>
                            <b class=\"disabled name\">{{ file.filename[:80]|shy }}</b>
                        {% endif %}
                    {% endif %}
                </td>
                {# Column: Thumbnail #}
                {% if file.image %}
                    <td class=\"listthumb\">
                      <img data-src=\"{{ file.path|thumbnail(54,40, 'c') }}\">
                    </td>
                {% endif %}
                {# Column: Filesize / Modified #}
                <td class=\"file-meta hidden-xs hidden-sm\">
                    <span class=\"buic-moment\" title=\"{{ file.size }} bytes ({{ file.sizeFormatted(true) }})\">
                        <b>{{ file.sizeFormatted(true) }}</b></span>,
                    {{ buic_moment(file.timestamp) }}
                    {% if file.image %}
                        <div class=\"image-dimensions\">{{ file.width }}<span class=\"times\">×</span>{{ file.height }} px</div>
                    {% endif %}
                </td>
                {# Column: Actions #}
                <td class=\"actions\">

                    <div class=\"btn-group\">

                        {% if not config.get('general/backend/stack/disable', false) and file is stackable %}
                            <a href=\"#\" class=\"btn btn-default btn-sm\" data-bolt-addtostack=\"{{ file.path }}\">
                                <i class=\"fa fa-paperclip\"></i>
                                <span class=\"visible-sm-inline visible-xs-inline\">{{ __('general.phrase.stack') }}</span>
                                <span class=\"hidden-sm hidden-xs\">{{ __('general.phrase.stack-add') }}</span>
                            </a>
                        {% endif %}

                        {% if context.form != false %}
                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" style=\"padding-left: 9px; padding-right: 9px;\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                {{ __('general.phrase.options') }}
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"Bolt.files.renameFile('{{ file.mountPoint }}', '{{ file.dirname|e('js') }}', '{{ file.filename|e('js') }}', this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        {{ __('general.phrase.rename-foldername', {'%foldername%': file.filename}) }}
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.deleteFile('{{ file.mountPoint }}', '{{ file.path|e('js') }}', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        {{ __('general.phrase.delete-file-name', {'%filename%': file.filename}) }}
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.duplicateFile('{{ file.mountPoint }}', '{{ file.path|e('js') }}')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        {{ __('general.phrase.duplicate-file-name', {'%filename%': file.filename }) }}
                                    </a>
                                </li>
                            </ul>
                        {% endif %}
                    </div>

                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@bolt/files/_files.twig", "");
    }
}
