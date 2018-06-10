<?php

/* @bolt/editfile/editfile.twig */
class __TwigTemplate_01daf0e39087e2398a1108a0d7c334b2ef858e1fb4c9fb65808c500c9939f53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/editfile/editfile.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'file_edit_save_button_icon' => array($this, 'block_file_edit_save_button_icon'),
            'file_edit_revert_button_icon' => array($this, 'block_file_edit_revert_button_icon'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editfile/editfile.twig"));

        $tags = array("form_theme" => 9, "import" => 20, "from" => 21, "set" => 29, "if" => 69, "for" => 71);
        $filters = array("escape" => 24, "json_encode" => 53, "length" => 69, "localedatetime" => 80);
        $functions = array("__" => 7, "data" => 24, "widgets" => 43, "form_start" => 45, "form_widget" => 46, "path" => 72, "form_end" => 84, "asset" => 92);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('form_theme', 'import', 'from', 'set', 'if', 'for'),
                array('escape', 'json_encode', 'length', 'localedatetime'),
                array('__', 'data', 'widgets', 'form_start', 'form_widget', 'path', 'form_end', 'asset')
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

        // line 9
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "form_bolt_layout.twig", 1 => $this));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed("Settings/Configuration");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["context"] ?? null), "write_allowed", array())) ? ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-file.title.edit")) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-file.title.view"))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_file_edit_save_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_edit_save_button_icon"));

        // line 12
        echo "    <i class=\"fa fa-flag\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_file_edit_revert_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_edit_revert_button_icon"));

        // line 15
        echo "    <i class=\"fa fa-undo\"> </i>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 19
        echo "
    ";
        // line 20
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editfile/editfile.twig", 20);
        // line 21
        echo "    ";
        $context["__internal_9f7b46de704f89561ec41d00be6fafdd13eba9fd3edeef8f89b7961b868827b2"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editfile/editfile.twig", 21);
        // line 22
        echo "    ";
        $context["__internal_3a2b9154b9f7c436b73d8706e0c8f03a1200242c3dbb692d6c7ea4ac657e9be1"] = $this->loadTemplate("@bolt/_macro/_files_path.twig", "@bolt/editfile/editfile.twig", 22);
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->addData("editcontent.msg", array("change_quit" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.warning-unfinished-changes-loss"), "saving" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saving-ellipsis"))), "html", null, true));
        // line 27
        echo "

    ";
        // line 29
        $context["attr_text"] = array("_bind" => array(0 => "editfile", 1 => array("readonly" => (($this->getAttribute(        // line 30
($context["context"] ?? null), "write_allowed", array())) ? (false) : (true)))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => false, "style" => "width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;");
        // line 37
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3a2b9154b9f7c436b73d8706e0c8f03a1200242c3dbb692d6c7ea4ac657e9be1"]->getfiles_path($this->getAttribute(($context["context"] ?? null), "file", array())));
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editfile_below_header", "backend"));
        echo "

            ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_start', array("attr" => array("class" => "form-inline", "autocomplete" => "off"))));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "_token", array()), 'widget'));
        echo "

                <div>
                    ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "contents", array()), 'widget', array("class" => "CodeMirror-scroll", "attr" => array("data-bind" => twig_jsonencode_filter(array("bind" => "editfile", "readonly" => (($this->getAttribute(        // line 53
($context["context"] ?? null), "write_allowed", array())) ? (false) : (true)))), "style" => "width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;"))));
        // line 57
        echo "
                </div>

                <div>
                    ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "save", array()), 'widget'));
        echo "
                    ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "revert", array()), 'widget', array("attr" => array("class" => "btn-default confirm", "data-confirm" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-file.confirm-revert"), "style" => "margin-left: 24px;"))));
        // line 66
        echo "

                  <div class=\"relatedfiles\">
                    ";
        // line 69
        if ((twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "related", array())) > 0)) {
            // line 70
            echo "                      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.edit-file.note-related"));
            echo "
                      ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "related", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 72
                echo "                          <a class=\"btn btn-tertiary btn-small\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => $this->getAttribute($context["file"], "mountPoint", array()), "file" => $this->getAttribute($context["file"], "path", array()))), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true));
                echo "</a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        }
        // line 75
        echo "                  </div>
                </div>

            <p class=\"lastsaved\" style=\"padding-top: 12px;\">
                ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.saved-on-colon"));
        echo "
                <strong>";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->localeDateTime($this->getAttribute(($context["context"] ?? null), "datechanged", array()), "%c"));
        echo "</strong>
                (";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_9f7b46de704f89561ec41d00be6fafdd13eba9fd3edeef8f89b7961b868827b2"]->getbuic_moment($this->getAttribute(($context["context"] ?? null), "datechanged", array())));
        echo ")
            </p>

            ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'form_end'));
        echo "

            ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\WidgetRuntime')->widgets($this->env, "editfile_bottom", "backend"));
        echo "

        </div>
    </div>

    ";
        // line 92
        echo "    <link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/plugins/codemirror/css/codemirror.min.css", "bolt"), "html", null, true));
        echo "\">
    <script src=\"";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js", "bolt"), "html", null, true));
        echo "\"></script>
    <script src=\"";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/plugins/codemirror/js/codemirror.js", "bolt"), "html", null, true));
        echo "\"></script>
    <script src=\"";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/plugins/codemirror/js/codemirror.addons.search.min.js", "bolt"), "html", null, true));
        echo "\"></script>
    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "codeMirrorPlugins", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 97
            echo "        <script src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("js/ckeditor/plugins/codemirror/plugins/" . $context["file"]) . ".min.js"), "bolt"), "html", null, true));
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editfile/editfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 99,  271 => 97,  267 => 96,  263 => 95,  259 => 94,  255 => 93,  250 => 92,  242 => 86,  237 => 84,  231 => 81,  227 => 80,  223 => 79,  217 => 75,  214 => 74,  203 => 72,  199 => 71,  194 => 70,  192 => 69,  187 => 66,  185 => 62,  181 => 61,  175 => 57,  173 => 53,  172 => 49,  166 => 46,  162 => 45,  157 => 43,  152 => 41,  146 => 37,  144 => 30,  143 => 29,  139 => 27,  137 => 24,  134 => 23,  131 => 22,  128 => 21,  126 => 20,  123 => 19,  117 => 18,  109 => 15,  103 => 14,  95 => 12,  89 => 11,  77 => 7,  65 => 5,  58 => 3,  56 => 9,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Configuration > Main configuration | ContentTypes | Taxonomy | ... #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Settings/Configuration' %}

{% block page_title context.write_allowed ? __('page.edit-file.title.edit') : __('page.edit-file.title.view') %}

{% form_theme context.form 'form_bolt_layout.twig' _self %}

{%- block file_edit_save_button_icon %}
    <i class=\"fa fa-flag\"> </i>
{% endblock -%}
{%- block file_edit_revert_button_icon %}
    <i class=\"fa fa-undo\"> </i>
{% endblock -%}

{% block page_main %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}
    {% from '@bolt/_macro/_files_path.twig' import files_path %}

    {{ data('editcontent.msg', {
        'change_quit': __('general.phrase.warning-unfinished-changes-loss'),
        'saving':      __('general.phrase.saving-ellipsis')
    }) }}

    {% set attr_text = {
        _bind:     ['editfile', {readonly: context.write_allowed ? false : true}],
        class:     'CodeMirror-scroll',
        id:        'form_contents',
        name:      'form[contents]',
        required:  false,
        style:     'width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;',
    } %}

    <div class=\"row\">
        <div class=\"col-xs-12\">

            {{ files_path(context.file) }}

            {{ widgets('editfile_below_header', 'backend') }}

            {{ form_start(context.form, {'attr': {'class': 'form-inline', 'autocomplete': 'off'}}) }}
                {{ form_widget(context.form._token) }}

                <div>
                    {{ form_widget(context.form.contents,
                        {
                            'class': 'CodeMirror-scroll',
                            'attr': {
                                'data-bind': {'bind': 'editfile', readonly: context.write_allowed ? false : true}|json_encode,
                                'style': 'width: 98%; min-height: 350px; white-space: pre; word-wrap: normal; overflow-x: scroll;'
                            }
                        })
                    }}
                </div>

                <div>
                    {{ form_widget(context.form.save) }}
                    {{ form_widget(context.form.revert, {'attr': {
                        'class': 'btn-default confirm',
                        'data-confirm': __('page.edit-file.confirm-revert'),
                        'style': 'margin-left: 24px;'
                    }}) }}

                  <div class=\"relatedfiles\">
                    {% if context.related|length > 0 %}
                      {{ __(\"page.edit-file.note-related\") }}
                      {% for file in context.related %}
                          <a class=\"btn btn-tertiary btn-small\" href=\"{{ path('fileedit', {'namespace': file.mountPoint, 'file': file.path}) }}\">{{ file.filename }}</a>
                      {% endfor %}
                    {% endif %}
                  </div>
                </div>

            <p class=\"lastsaved\" style=\"padding-top: 12px;\">
                {{ __('general.phrase.saved-on-colon') }}
                <strong>{{ context.datechanged|localedatetime(\"%c\") }}</strong>
                ({{ buic_moment(context.datechanged) }})
            </p>

            {{ form_end(context.form) }}

            {{ widgets('editfile_bottom', 'backend') }}

        </div>
    </div>

    {# use the files includes in ckeditor/codemirror plugin, instead of duplicating files. #}
    <link rel=\"stylesheet\" property=\"stylesheet\" href=\"{{ asset('js/ckeditor/plugins/codemirror/css/codemirror.min.css', 'bolt') }}\">
    <script src=\"{{ asset('js/ckeditor/ckeditor.js', 'bolt') }}\"></script>
    <script src=\"{{ asset('js/ckeditor/plugins/codemirror/js/codemirror.js', 'bolt') }}\"></script>
    <script src=\"{{ asset('js/ckeditor/plugins/codemirror/js/codemirror.addons.search.min.js', 'bolt') }}\"></script>
    {% for file in context.codeMirrorPlugins %}
        <script src=\"{{ asset('js/ckeditor/plugins/codemirror/plugins/' ~ file ~ '.min.js', 'bolt') }}\"></script>
    {% endfor %}

{% endblock page_main %}
", "@bolt/editfile/editfile.twig", "");
    }
}
