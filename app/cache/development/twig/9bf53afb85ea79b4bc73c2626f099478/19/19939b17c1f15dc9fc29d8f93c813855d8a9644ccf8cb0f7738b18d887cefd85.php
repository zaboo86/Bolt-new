<?php

/* @bolt/_nav/_macros.twig */
class __TwigTemplate_d9bfb6426416d0a3d6a3d1cf6be8346a8523045d2dc9d64ad59e923b2001b94e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_macros.twig"));

        $tags = array("macro" => 11, "from" => 13, "if" => 15, "set" => 16, "for" => 23);
        $filters = array("trim" => 31, "escape" => 35, "default" => 36, "raw" => 39, "slice" => 90);
        $functions = array("__" => 39, "path" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'from', 'if', 'set', 'for'),
                array('trim', 'escape', 'default', 'raw', 'slice'),
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

        // line 65
        echo "

";
        // line 81
        echo "

";
        // line 96
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 12
            echo "
    ";
            // line 13
            $context["__internal_3cb03599c5936e0ea9177fc229e23e67346809fa434f80f07aa15e2e0df4f1b4"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if (twig_test_empty(($context["subitems"] ?? null))) {
                // line 16
                echo "        ";
                $context["subitems"] = ($context["popoveritems"] ?? null);
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 20
            echo "    ";
            $context["allowedany"] = false;
            // line 21
            echo "    ";
            $context["allowedamount"] = 0;
            // line 22
            echo "    ";
            $context["allowedsingle"] = "";
            // line 23
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "        ";
                if (($context["item"] != "-")) {
                    // line 25
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 26
                    echo "            ";
                    $context["allowedamount"] = (($context["allowedamount"] ?? null) + 1);
                    // line 27
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
    ";
            // line 31
            $context["class"] = twig_trim_filter((((($context["wide"] ?? null)) ? (" menu-pop-wide") : ("")) . ((($context["active"] ?? null)) ? (" active") : (""))));
            // line 32
            echo "
    ";
            // line 34
            echo "    ";
            if (($context["allowedany"] ?? null)) {
                // line 35
                echo "        <li";
                if (($context["class"] ?? null)) {
                    echo " class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true));
                    echo "\"";
                }
                echo ">
            ";
                // line 36
                if (((($context["allowedamount"] ?? null) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter(($context["force_submenu"] ?? null), false)) : (false)))) {
                    // line 37
                    echo "                ";
                    $context["item"] = ($context["allowedsingle"] ?? null);
                    // line 38
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", array()), "html", null, true));
                    echo "\">
                    ";
                    // line 39
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3cb03599c5936e0ea9177fc229e23e67346809fa434f80f07aa15e2e0df4f1b4"]->geticon($this->getAttribute(($context["item"] ?? null), "icon", array()), "icon"));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), (("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content")) . ")</em>"))));
                    echo "
                </a>
            ";
                } else {
                    // line 42
                    echo "                <a href=\"";
                    if (($context["popoveritems"] ?? null)) {
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["popoveritems"] ?? null), 0, array(), "any", false, true), "uri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["popoveritems"] ?? null), 0, array(), "any", false, true), "uri", array()), "")) : ("")), "html", null, true));
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 43
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3cb03599c5936e0ea9177fc229e23e67346809fa434f80f07aa15e2e0df4f1b4"]->getlabel(($context["icon"] ?? null), ($context["label"] ?? null)));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 46
                    $context["divider"] = false;
                    // line 47
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["popoveritems"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 48
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 49
                            echo "                            ";
                            $context["divider"] = true;
                            // line 50
                            echo "                        ";
                        } else {
                            // line 51
                            echo "                            <li";
                            if (($context["divider"] ?? null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 52
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["item"], "uri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "uri", array()), "")) : ("")), "html", null, true));
                            echo "\" title=\"";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), "")) : ("")), "html", null, true));
                            echo "\">
                                    ";
                            // line 53
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3cb03599c5936e0ea9177fc229e23e67346809fa434f80f07aa15e2e0df4f1b4"]->geticon($this->getAttribute($context["item"], "icon", array())));
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-content")) . ")</em>"))));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 56
                            $context["divider"] = false;
                            // line 57
                            echo "                        ";
                        }
                        // line 58
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                </ul>
            ";
                }
                // line 61
                echo "        </li>
    ";
            }
            // line 63
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

    // line 70
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 71
            echo "    ";
            $context["__internal_3c24da2326b6bc8dabdb0539761bd8c422c1b3296f24ec36806499c20d09d3b1"] = $this;
            // line 72
            echo "    ";
            $context["class"] = "";
            // line 73
            echo "    ";
            if ((($context["pathname"] ?? null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 74
            echo "    ";
            if (($context["active"] ?? null)) {
                $context["class"] = (($context["class"] ?? null) . " active");
            }
            // line 75
            echo "    ";
            if (($context["divider"] ?? null)) {
                $context["class"] = (($context["class"] ?? null) . " divider");
            }
            // line 76
            echo "
    <li";
            // line 77
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_trim_filter(($context["class"] ?? null)), "html", null, true));
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["pathname"] ?? null)));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_3c24da2326b6bc8dabdb0539761bd8c422c1b3296f24ec36806499c20d09d3b1"]->getlabel(($context["icon"] ?? null), ($context["label"] ?? null)));
            echo "</a>
    </li>
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

    // line 86
    public function getlabel($__icon__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 87
            echo "    ";
            $context["__internal_f079f3865477ea43023194a75bcc75af4ac84bf7c3f829d90d837105b68cecb9"] = $this;
            // line 88
            echo "
    ";
            // line 89
            if (twig_test_empty(($context["icon"] ?? null))) {
                // line 90
                echo "        <i class=\"icon\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, ($context["label"] ?? null), 0, 1), "html", null, true));
                echo "</i>
    ";
            } elseif ((            // line 91
($context["icon"] ?? null) != "-")) {
                // line 92
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_f079f3865477ea43023194a75bcc75af4ac84bf7c3f829d90d837105b68cecb9"]->geticon(($context["icon"] ?? null), true));
                echo "
    ";
            }
            // line 94
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["label"] ?? null));
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

    // line 101
    public function geticon($__icon__ = null, $__box__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 102
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter(($context["box"] ?? null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 103
            echo "    ";
            // line 104
            echo "    ";
            if ((twig_slice($this->env, ($context["icon"] ?? null), 0, 3) == "fa:")) {
                // line 105
                echo "        <i class=\"fa fa-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, ($context["icon"] ?? null), 3, null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true));
                echo "\"></i>
    ";
                // line 107
                echo "    ";
            } else {
                // line 108
                echo "        <i class=\"fa fa-question-circle ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true));
                echo "\"></i>
    ";
            }
            
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
        return "@bolt/_nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 108,  427 => 107,  420 => 105,  417 => 104,  415 => 103,  412 => 102,  396 => 101,  375 => 94,  369 => 92,  367 => 91,  362 => 90,  360 => 89,  357 => 88,  354 => 87,  338 => 86,  315 => 78,  307 => 77,  304 => 76,  299 => 75,  294 => 74,  289 => 73,  286 => 72,  283 => 71,  264 => 70,  245 => 63,  241 => 61,  237 => 59,  231 => 58,  228 => 57,  226 => 56,  219 => 53,  213 => 52,  206 => 51,  203 => 50,  200 => 49,  197 => 48,  192 => 47,  190 => 46,  184 => 43,  175 => 42,  168 => 39,  163 => 38,  160 => 37,  158 => 36,  149 => 35,  146 => 34,  143 => 32,  141 => 31,  138 => 30,  132 => 29,  129 => 28,  126 => 27,  123 => 26,  120 => 25,  117 => 24,  112 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 18,  97 => 17,  94 => 16,  92 => 15,  89 => 14,  87 => 13,  84 => 12,  63 => 11,  54 => 96,  50 => 81,  46 => 65,);
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
 # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)
 #
 # @param string  icon
 # @param string  label (default: slug())
 # @param array   popoveritems
 # @param bool    active
 # @param bool    wide
 # @param array   subitems
 #}
{% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}

    {% from _self import label, icon %}

    {% if subitems is empty %}
        {% set subitems = popoveritems %}
    {% endif %}

    {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}
    {% set allowedany = false %}
    {% set allowedamount = 0 %}
    {% set allowedsingle = \"\" %}
    {% for item in subitems %}
        {% if item != '-' %}
            {% set allowedany = true %}
            {% set allowedamount = allowedamount + 1 %}
            {% set allowedsingle = item %}
        {% endif %}
    {% endfor %}

    {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}

    {# Show stuff! #}
    {% if allowedany %}
        <li{% if class %} class=\"{{ class }}\"{% endif %}>
            {% if allowedamount == 1 and not force_submenu|default(false) %}
                {% set item = allowedsingle %}
                <a href=\"{{ item.uri }}\">
                    {{ icon(item.icon, \"icon\") }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                </a>
            {% else %}
                <a href=\"{% if popoveritems %}{{ popoveritems.0.uri|default('') }}{% else %}#{% endif %}\" class=\"menu-pop\">
                    {{ label(icon, label) }}
                </a>
                <ul class=\"nav submenu\">
                    {% set divider = false %}
                    {% for item in popoveritems %}
                        {% if item == '-' %}
                            {% set divider = true %}
                        {% else %}
                            <li{% if divider %} class=\"subdivider\"{% endif %}>
                                <a href=\"{{ item.uri|default('') }}\" title=\"{{ item.label|default('') }}\">
                                    {{ icon(item.icon) }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                                </a>
                            </li>
                            {% set divider = false %}
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% endif %}

{% endmacro %}


{##
 # Sidebar-menu link
 #}
{% macro link(icon, label, pathname, active, divider) %}
    {% from _self import label %}
    {% set class = '' %}
    {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}
    {% if active %}{% set class = class ~ ' active' %}{% endif %}
    {% if divider %}{% set class = class ~ ' divider' %}{% endif %}

    <li{% if class %} class=\"{{ class|trim }}\" {% endif %}>
        <a href=\"{{ path(pathname) }}\">{{ label(icon, label) }}</a>
    </li>
{% endmacro %}


{##
 # Sidebar-menu label
 #}
{% macro label(icon, label) %}
    {% from _self import icon %}

    {% if icon is empty %}
        <i class=\"icon\">{{ label[:1] }}</i>
    {% elseif icon != '-' %}
        {{ icon(icon, true) }}
    {% endif %}
    {{ label|raw }}
{% endmacro %}


{##
 # Icon
 #}
{% macro icon(icon, box) %}
    {% set class = box|default(false) ? 'icon' : 'fa-fw' %}
    {# Font Awsome #}
    {% if icon[:3] == 'fa:' %}
        <i class=\"fa fa-{{ icon[3:] }} {{ class }}\"></i>
    {# Defaults to (?) #}
    {% else %}
        <i class=\"fa fa-question-circle {{ class }}\" title=\"{{ icon }}\"></i>
    {% endif %}
{% endmacro %}
", "@bolt/_nav/_macros.twig", "");
    }
}
