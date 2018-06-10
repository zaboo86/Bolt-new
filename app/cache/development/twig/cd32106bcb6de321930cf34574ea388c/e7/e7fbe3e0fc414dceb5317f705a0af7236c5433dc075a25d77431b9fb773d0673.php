<?php

/* @bolt/_macro/_macro.twig */
class __TwigTemplate_61b413a1d08bf86e1aedc19cd8f70057681a1aad81ffed7640fed527db5256fe extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_macro.twig"));

        $tags = array("macro" => 4, "spaceless" => 5, "set" => 6, "if" => 7, "import" => 30, "for" => 40, "from" => 101, "include" => 216);
        $filters = array("escape" => 8, "raw" => 21, "default" => 21, "slice" => 21, "striptags" => 21, "trim" => 49, "json_encode" => 55, "merge" => 55, "replace" => 57, "join" => 79);
        $functions = array("getuser" => 6, "path" => 8, "__" => 10, "hattr" => 201, "stack" => 203);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'spaceless', 'set', 'if', 'import', 'for', 'from', 'include'),
                array('escape', 'raw', 'default', 'slice', 'striptags', 'trim', 'json_encode', 'merge', 'replace', 'join'),
                array('getuser', 'path', '__', 'hattr', 'stack')
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

        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 63
        echo "
";
        // line 73
        echo "
";
        // line 85
        echo "
";
        // line 160
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function getuserlink($__user_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user_id" => $__user_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "userlink"));

            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            $context["user"] = $this->env->getRuntime('Bolt\Twig\Runtime\UserRuntime')->getUser(($context["user_id"] ?? null));
            // line 7
            echo "        ";
            if ( !twig_test_empty(($context["user"] ?? null))) {
                // line 8
                echo "            <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useredit", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "displayname", array()), "html", null, true));
                echo "</a>
        ";
            } else {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("panel.latest-activity.unknown"));
                echo "
        ";
            }
            // line 12
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink_by_id"));

            // line 19
            echo "    ";
            ob_start();
            // line 20
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute(($context["contenttype"] ?? null), "slug", array()), "id" => ($context["content_id"] ?? null))), "html", null, true));
            echo "\">";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(_twig_default_filter(twig_slice($this->env, strip_tags(($context["title"] ?? null)), 0, 70), (("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-title")) . ")</em>")));
            // line 22
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcontentlink($__contenttype__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink"));

            // line 30
            echo "    ";
            $context["crosslinks"] = $this;
            // line 31
            echo "    ";
            $context["title"] = $this->getAttribute(($context["content"] ?? null), "getTitle", array(), "method");
            // line 32
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["crosslinks"]->getcontentlink_by_id(($context["contenttype"] ?? null), ($context["title"] ?? null), $this->getAttribute(($context["content"] ?? null), "id", array())));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getattr($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attr"));

            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 41
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 42
                    echo "                value=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["value"], "html", null, true));
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 43
$context["value"])) {
                    // line 44
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 45
                        echo "                    ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["attrname"], "html", null, true));
                        echo "=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["attrname"], "html", null, true));
                        echo "\"
                ";
                    } elseif ((                    // line 46
$context["attrname"] == "name_id")) {
                        // line 47
                        echo "                    name=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["value"], "html", null, true));
                        echo "\" id=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["value"], "html", null, true));
                        echo "\"
                ";
                    } elseif ((                    // line 48
$context["attrname"] == "class")) {
                        // line 49
                        echo "                    class=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true));
                        echo "\"
                ";
                    } elseif ((                    // line 50
$context["attrname"] == "style")) {
                        // line 51
                        echo "                    style=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true));
                        echo "\"
                ";
                    } elseif ((                    // line 52
$context["attrname"] == "checked")) {
                        // line 53
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 54
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 55
                        echo "                    data-bind=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true));
                        echo "\"
                ";
                    } else {
                        // line 57
                        echo "                    ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_replace_filter($context["attrname"], array("_" => "-")), "html", null, true));
                        echo "=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $context["value"], "html", null, true));
                        echo "\"
                ";
                    }
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "actionform"));

            // line 68
            echo "    ";
            if ((($context["action"] ?? null) == "held")) {
                // line 69
                echo "        ";
                $context["action"] = "depublish";
                // line 70
                echo "    ";
            }
            // line 71
            echo "    <a href=\"#\" data-listing-cmd=\"record:";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true));
            echo "\"><i class=\"fa ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true));
            echo "\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans(($context["text"] ?? null)));
            echo "</a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function gettypepopover($__types__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "typepopover"));

            // line 78
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter(($context["types"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/accept_file_types"), "method")));
            // line 79
            echo "    ";
            $context["text"] = ((($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter(($context["types"] ?? null), "</code>, <code>")) . "</code>.");
            // line 80
            echo "    <span class=\"label label-default info-pop\" data-title=\"\" data-placement=\"left\"  data-html=\"true\" data-content=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true));
            echo "\">
        <i class=\"fa fa-info-circle\"></i>
        ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.types"));
            echo "
    </span>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getinput_datetime($__opt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input_datetime"));

            // line 101
            echo "    ";
            $context["__internal_a40208eee83e1a8abc5101c0cdc1976bd1210f892d5690b3c54431294275baf8"] = $this;
            // line 102
            echo "
    ";
            // line 103
            $context["class"] = (twig_replace_filter((($this->getAttribute(($context["opt"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 104
            echo "
    ";
            // line 105
            $context["attributes"] = array("data" => array("id" => $this->getAttribute(            // line 107
($context["opt"] ?? null), "id", array()), "name" => (($this->getAttribute(            // line 108
($context["opt"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name", array()), $this->getAttribute(($context["opt"] ?? null), "id", array()))) : ($this->getAttribute(($context["opt"] ?? null), "id", array()))), "value" => $this->getAttribute(            // line 109
($context["opt"] ?? null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 112
($context["opt"] ?? null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "notice", array()), "")) : (""))), "date" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 117
($context["opt"] ?? null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 118
($context["opt"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 119
($context["class"] ?? null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 120
($context["opt"] ?? null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 121
($context["opt"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute(($context["opt"] ?? null), "options", array()))) : (""))), "time" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 126
($context["opt"] ?? null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 127
($context["opt"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 128
($context["class"] ?? null) . " timepicker")), "title" => $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.time-format-24-12"), "style" => "margin-right: 6px;"));
            // line 133
            echo "
    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_a40208eee83e1a8abc5101c0cdc1976bd1210f892d5690b3c54431294275baf8"]->getattr($this->getAttribute(($context["attributes"] ?? null), "date", array())));
            echo ">
            </div>
        </div>

        ";
            // line 146
            if (( !$this->getAttribute(($context["opt"] ?? null), "has_time", array(), "any", true, true) || ($this->getAttribute(($context["opt"] ?? null), "has_time", array()) != false))) {
                // line 147
                echo "            <div>
                <input";
                // line 148
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_a40208eee83e1a8abc5101c0cdc1976bd1210f892d5690b3c54431294275baf8"]->getattr($this->getAttribute(($context["attributes"] ?? null), "time", array())));
                echo ">
            </div>
        ";
            }
            // line 151
            echo "
        <div>
            <input";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_a40208eee83e1a8abc5101c0cdc1976bd1210f892d5690b3c54431294275baf8"]->getattr($this->getAttribute(($context["attributes"] ?? null), "data", array())));
            echo ">
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getupload_buttons($__type__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null, $__multi__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "multi" => $__multi__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "upload_buttons"));

            // line 170
            echo "    ";
            $context["__internal_332a058fed8aca6a21d944e81dc8ae3c707a62084a917fcf6e72c23318fb581c"] = $this;
            // line 171
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 175
            echo "        ";
            if (($context["canUpload"] ?? null)) {
                // line 176
                echo "            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
                // line 178
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((((($context["type"] ?? null) == "image")) ? ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.upload-image")) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.upload-file"))));
                echo "</span>
                <input";
                // line 179
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_332a058fed8aca6a21d944e81dc8ae3c707a62084a917fcf6e72c23318fb581c"]->getattr(($context["attr_upload"] ?? null)));
                echo ">
            </span>
        ";
            } else {
                // line 182
                echo "            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                ";
                // line 183
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.upload-not-allowed"));
                echo "
                ";
                // line 185
                echo "                ";
                $context["attr_upload"] = twig_array_merge(($context["attr_upload"] ?? null), array("type" => "hidden"));
                // line 186
                echo "                <input";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_332a058fed8aca6a21d944e81dc8ae3c707a62084a917fcf6e72c23318fb581c"]->getattr(($context["attr_upload"] ?? null)));
                echo ">
            </button>
        ";
            }
            // line 189
            echo "
        ";
            // line 191
            echo "        ";
            $context["attr"] = array("class" => "btn btn-tertiary btn-sm", "data-bolt-widget" => array("buicBrowser" => array("url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asyncbrowse", array("namespace" => "files", "path" =>             // line 195
($context["uploadpath"] ?? null))), "multiselect" =>             // line 196
($context["multi"] ?? null))), "type" => "button");
            // line 201
            echo "        <button";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hattr(($context["attr"] ?? null)));
            echo "><i class=\"fa fa-download\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.general.select-from-server"));
            echo "</button>

        ";
            // line 203
            $context["stack"] = $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->stack(($context["type"] ?? null));
            // line 204
            echo "
        ";
            // line 206
            echo "        ";
            if (( !$this->getAttribute(($context["config"] ?? null), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && ($context["stack"] ?? null))) {
                // line 207
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 210
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("field.general.stack"));
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\" ";
                // line 214
                if (($context["type"] ?? null)) {
                    echo "data-type=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true));
                    echo "\"";
                }
                echo ">
                    ";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stack"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 216
                    echo "                        ";
                    $this->loadTemplate("@bolt/components/stack/list-item.twig", "@bolt/_macro/_macro.twig", 216)->display(array("file" => $context["file"]));
                    // line 217
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                </ul>
            </div>
        ";
            }
            // line 221
            echo "
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 221,  653 => 218,  647 => 217,  644 => 216,  640 => 215,  632 => 214,  625 => 210,  620 => 207,  617 => 206,  614 => 204,  612 => 203,  604 => 201,  602 => 196,  601 => 195,  599 => 191,  596 => 189,  589 => 186,  586 => 185,  582 => 183,  579 => 182,  573 => 179,  569 => 178,  565 => 176,  562 => 175,  557 => 171,  554 => 170,  535 => 169,  510 => 153,  506 => 151,  500 => 148,  497 => 147,  495 => 146,  488 => 142,  477 => 133,  475 => 128,  474 => 127,  473 => 126,  472 => 121,  471 => 120,  470 => 119,  469 => 118,  468 => 117,  467 => 112,  466 => 109,  465 => 108,  464 => 107,  463 => 105,  460 => 104,  458 => 103,  455 => 102,  452 => 101,  437 => 100,  416 => 82,  410 => 80,  407 => 79,  404 => 78,  389 => 77,  364 => 71,  361 => 70,  358 => 69,  355 => 68,  336 => 67,  317 => 61,  311 => 60,  308 => 59,  300 => 57,  294 => 55,  291 => 54,  286 => 53,  284 => 52,  279 => 51,  277 => 50,  272 => 49,  270 => 48,  263 => 47,  261 => 46,  254 => 45,  251 => 44,  249 => 43,  244 => 42,  241 => 41,  236 => 40,  233 => 39,  218 => 38,  197 => 32,  194 => 31,  191 => 30,  175 => 29,  155 => 22,  153 => 21,  149 => 20,  146 => 19,  129 => 18,  110 => 12,  104 => 10,  96 => 8,  93 => 7,  90 => 6,  87 => 5,  72 => 4,  64 => 160,  61 => 85,  58 => 73,  55 => 63,  52 => 34,  49 => 25,  46 => 14,);
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
 # Output a username and link to their profile given an ID.
 #}
{% macro userlink(user_id) %}
    {% spaceless %}
        {% set user = getuser(user_id) %}
        {% if user is not empty %}
            <a href=\"{{ path('useredit', {'id': user.id}) }}\">{{- user.displayname -}}</a>
        {% else %}
            {{ __('panel.latest-activity.unknown') }}
        {% endif %}
    {% endspaceless %}
{% endmacro %}

{##
 # Contentlink by id.
 #}
{% macro contentlink_by_id(contenttype, title, content_id) %}
    {% spaceless %}
        <a href=\"{{ path('editcontent', { 'contenttypeslug': contenttype.slug, 'id': content_id }) }}\">
            {{- title|striptags[:70]|default(\"<em>(\" ~ __('general.phrase.no-title') ~ \")</em>\")|raw -}}
        </a>
    {% endspaceless %}
{% endmacro %}

{##
 # Contentlink.
 #}
{% macro contentlink(contenttype, content) %}
    {% import _self as crosslinks %}
    {% set title = content.getTitle() %}
    {{ crosslinks.contentlink_by_id(contenttype, title, content.id) }}
{% endmacro %}

{##
 # Outputs tag attributes.
 #}
{% macro attr(attributes) %}
    {% spaceless %}
        {% for attrname, value in attributes %}
            {% if attrname == 'value' %}
                value=\"{{ value }}\"
            {% elseif value is not empty %}
                {% if attrname in ['required', 'disabled', 'selected', 'autofocus', 'multiple', 'readonly'] %}
                    {{ attrname }}=\"{{ attrname }}\"
                {% elseif attrname == 'name_id' %}
                    name=\"{{ value }}\" id=\"{{ value }}\"
                {% elseif attrname == 'class' %}
                    class=\"{{ value|trim }}\"
                {% elseif attrname == 'style' %}
                    style=\"{{ value|trim }}\"
                {% elseif attrname == 'checked' %}
                    {% if value != false %}checked=\"checked\"{% endif %}
                {% elseif attrname == '_bind' %}
                    data-bind=\"{{ {bind: value[0]}|merge(value[1]|default({}))|json_encode }}\"
                {% else %}
                    {{ attrname|replace({'_': '-'}) }}=\"{{ value }}\"
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endmacro %}

{##
 # Actionform.
 #}
{% macro actionform(content, action, icon, text, confirmation_text) %}
    {% if action == 'held' %}
        {% set action = 'depublish' %}
    {% endif %}
    <a href=\"#\" data-listing-cmd=\"record:{{ action }}\"><i class=\"fa {{ icon }}\"></i> {{ __(text) }}</a>
{% endmacro %}

{##
 # Typepopover.
 #}
{% macro typepopover(types) %}
    {% set types = types|default(config.get('general/accept_file_types')) %}
    {% set text = __(\"field.general.allowed-filetypes\") ~ \"<code>\" ~ types|join(\"</code>, <code>\") ~ \"</code>.\" %}
    <span class=\"label label-default info-pop\" data-title=\"\" data-placement=\"left\"  data-html=\"true\" data-content=\"{{ text }}\">
        <i class=\"fa fa-info-circle\"></i>
        {{ __('general.phrase.types') }}
    </span>
{% endmacro %}

{##
 # Renders a datetime/date input component
 #
 # Required options:
 #    id:                 id of that group
 # Optional options:
 #    disabled  [false]:  disabled input
 #    required  [false]:  make input required
 #    class     []:       class added to date/time input
 #    errortext []:       error text
 #    options   []:       options passed to datepicker
 #
 # @param array opt Options defining the component
 #}
{% macro input_datetime(opt) %}
    {% from _self import attr %}

    {% set class = opt.class|default('')|replace({'form-control': ''}) ~ ' form-control' %}

    {% set attributes = {
        data: {
            id:          opt.id,
            name:        opt.name|default(opt.id),
            value:       opt.value,
            type:        'hidden',
            class:       'datetime',
            data_notice: opt.notice|default('')
        },

        date: {
            type:                'text',
            disabled:            opt.disabled|default(false),
            required:            opt.required|default(false),
            class:               (class ~ ' datepicker')|trim,
            data_errortext:      opt.errortext|default(''),
            data_field_options:  opt.options|default(false) ? opt.options|json_encode : ''
        },

        time: {
            type:      'text',
            disabled:  opt.disabled|default(false),
            required:  opt.required|default(false),
            class:     (class ~ ' timepicker')|trim,
            title:     __('general.phrase.time-format-24-12'),
            style:     'margin-right: 6px;'
        }
    } %}

    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input{{ attr(attributes.date) }}>
            </div>
        </div>

        {% if opt.has_time is not defined or opt.has_time != false %}
            <div>
                <input{{ attr(attributes.time) }}>
            </div>
        {% endif %}

        <div>
            <input{{ attr(attributes.data) }}>
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
{% endmacro %}

{##
 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 # @param bool   multi If true allows uploading multiple files
 #}
{% macro upload_buttons(type, attr_upload, uploadpath, canUpload, multi) %}
    {% from _self import attr %}

    <div class=\"button-wrap fileselectbuttongroup\">

        {# Button: Upload #}
        {% if canUpload %}
            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>{{ (type == 'image') ? __('general.phrase.upload-image') : __('general.phrase.upload-file') }}</span>
                <input{{ attr(attr_upload) }}>
            </span>
        {% else %}
            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                {{ __('general.phrase.upload-not-allowed') }}
                {# creating a dummy stub, instead of the uploader. Needed (currently) to attach events to #}
                {% set attr_upload = attr_upload|merge({'type' : 'hidden'}) %}
                <input{{ attr(attr_upload) }}>
            </button>
        {% endif %}

        {# Button: Select from Server #}
        {% set attr = {
            'class': 'btn btn-tertiary btn-sm',
            'data-bolt-widget': {
                buicBrowser: {
                    url: path('asyncbrowse', {'namespace': 'files', 'path': uploadpath}),
                    multiselect: multi
                },
            },
            'type': 'button',
        } %}
        <button{{ hattr(attr) }}><i class=\"fa fa-download\"></i> {{ __('field.general.select-from-server') }}</button>

        {% set stack = stack(type) %}

        {# Button: Select from Stack #}
        {% if not config.get('general/backend/stack/disable', false) and stack %}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    {{ __('field.general.stack') }}
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\" {% if type %}data-type=\"{{ type }}\"{% endif %}>
                    {% for file in stack %}
                        {% include '@bolt/components/stack/list-item.twig' with {'file': file} only %}
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

    </div>
{% endmacro %}
", "@bolt/_macro/_macro.twig", "");
    }
}
