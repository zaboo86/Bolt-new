<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_a1fd3ccc9c45d25d2747716e2cc0d21689213d30ddc62bfe795f1fbbeb87cd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $tags = array("import" => 3, "if" => 6, "set" => 7, "for" => 57, "macro" => 132);
        $filters = array("escape" => 11, "default" => 17, "merge" => 59, "length" => 71, "first" => 134, "date" => 156, "abbr_class" => 191, "abbr_method" => 191, "last" => 200, "split" => 200, "replace" => 200, "raw" => 203, "format_file" => 205, "json_encode" => 216);
        $functions = array("include" => 10, "constant" => 58);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'if', 'set', 'for', 'macro'),
                array('escape', 'default', 'merge', 'length', 'first', 'date', 'abbr_class', 'abbr_method', 'last', 'split', 'replace', 'raw', 'format_file', 'json_encode'),
                array('include', 'constant')
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
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? null), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : ((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("yellow") : (""))));
            // line 9
            echo "            ";
            $context["error_count"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) + $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) + $this->getAttribute(($context["collector"] ?? null), "countscreams", array()));
            // line 10
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg"));
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["error_count"] ?? null), "html", null, true));
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : ("")));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true));
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecated Calls</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("yellow") : ("")));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true));
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Silenced Errors</b>
                <span class=\"sf-toolbar-status\">";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true));
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo "
        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null))));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 36
        echo "    <span class=\"label label-status-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("warning") : ("")))));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) ? ("disabled") : ("")));
        echo "\">
        <span class=\"icon\">";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg"));
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 39
        if (($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()))) {
            // line 40
            echo "            <span class=\"count\">
                <span>";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : ($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()))), "html", null, true));
            echo "</span>
            </span>
        ";
        }
        // line 44
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 48
        echo "    <h2>Log Messages</h2>

    ";
        // line 50
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) {
            // line 51
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 55
            echo "        ";
            // line 56
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 58
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()), array(0 => twig_constant("E_DEPRECATED"), 1 => twig_constant("E_USER_DEPRECATED"))))) {
                    // line 59
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? null), array(0 => $context["log"]));
                    // line 60
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "scream", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["log"], "context", array()), "scream", array()) == true))) {
                    // line 61
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? null), array(0 => $context["log"]));
                    // line 62
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 63
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? null), array(0 => $context["log"]));
                    // line 64
                    echo "            ";
                } else {
                    // line 65
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? null), array(0 => $context["log"]));
                    // line 66
                    echo "            ";
                }
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge\">";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_length_filter($this->env, ($context["info_and_error_logs"] ?? null)), "html", null, true));
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty(($context["info_and_error_logs"] ?? null))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["helper"]->getrender_table(($context["info_and_error_logs"] ?? null), true));
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true));
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 90
            if (twig_test_empty(($context["deprecation_logs"] ?? null))) {
                // line 91
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 95
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["helper"]->getrender_table(($context["deprecation_logs"] ?? null), false, true));
                echo "
                    ";
            }
            // line 97
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? null)), "html", null, true));
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 104
            if (twig_test_empty(($context["debug_logs"] ?? null))) {
                // line 105
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 109
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["helper"]->getrender_table(($context["debug_logs"] ?? null)));
                echo "
                    ";
            }
            // line 111
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced Errors <span class=\"badge\">";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true));
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 118
            if (twig_test_empty(($context["silenced_logs"] ?? null))) {
                // line 119
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 123
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["helper"]->getrender_table(($context["silenced_logs"] ?? null)));
                echo "
                    ";
            }
            // line 125
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function getrender_table($__logs__ = null, $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 133
            echo "    ";
            $context["helper"] = $this;
            // line 134
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", array(), "any", true, true);
            // line 135
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((($context["show_level"] ?? null)) ? ("Level") : ("Time")));
            echo "</th>
                ";
            // line 140
            if (($context["channel_is_defined"] ?? null)) {
                echo "<th>Channel</th>";
            }
            // line 141
            echo "                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 147
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? null)) ? ("") : (((twig_in_filter($this->getAttribute(                // line 148
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((twig_in_filter($this->getAttribute(                // line 149
$context["log"], "priorityName", array()), array(0 => "NOTICE", 1 => "WARNING"))) ? ("status-warning") : (""))))));
                // line 151
                echo "                <tr class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true));
                echo "\">
                    <td class=\"font-normal text-small\">
                        ";
                // line 153
                if (($context["show_level"] ?? null)) {
                    // line 154
                    echo "                            <span class=\"colored text-bold nowrap\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true));
                    echo "</span>
                        ";
                }
                // line 156
                echo "                        <span class=\"text-muted nowrap newline\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true));
                echo "</span>
                    </td>

                    ";
                // line 159
                if (($context["channel_is_defined"] ?? null)) {
                    // line 160
                    echo "                        <td class=\"font-normal text-small text-bold nowrap\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true));
                    echo "</td>
                    ";
                }
                // line 162
                echo "
                    <td class=\"font-normal\">";
                // line 163
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["helper"]->getrender_log_message($this->getAttribute($context["loop"], "index", array()), $context["log"], ($context["is_deprecation"] ?? null)));
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "        </tbody>
    </table>
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

    // line 170
    public function getrender_log_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 171
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()), "html", null, true));
            echo "

    ";
            // line 173
            if (($context["is_deprecation"] ?? null)) {
                // line 174
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 175
                echo "        ";
                $context["id"] = ("sf-call-stack-" . ($context["log_index"] ?? null));
                // line 176
                echo "
        ";
                // line 177
                if ($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "errorCount", array(), "any", true, true)) {
                    // line 178
                    echo "            <span class=\"text-small text-bold\">(";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array()), "errorCount", array()), "html", null, true));
                    echo " times)</span>
        ";
                }
                // line 180
                echo "
        ";
                // line 181
                if (($context["stack"] ?? null)) {
                    // line 182
                    echo "            <button class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
                    echo "\" data-toggle-alt-content=\"Hide stack trace\">Show stack trace</button>
        ";
                }
                // line 184
                echo "
        ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stack"] ?? null));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 186
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 187
                            echo "                <ul class=\"sf-call-stack hidden\" id=\"";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
                            echo "\">
            ";
                        }
                        // line 189
                        echo "
            ";
                        // line 190
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 191
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 192
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 193
                            echo "                ";
                            $context["from"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 194
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 195
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 196
                            echo "            ";
                        } else {
                            // line 197
                            echo "                ";
                            $context["from"] = "-";
                            // line 198
                            echo "            ";
                        }
                        // line 199
                        echo "
            ";
                        // line 200
                        $context["file_name"] = ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? (twig_last($this->env, twig_split_filter($this->env, twig_replace_filter($this->getAttribute($context["call"], "file", array()), array("\\" => "/")), "/"))) : (""));
                        // line 201
                        echo "
            <li>
                ";
                        // line 203
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["from"] ?? null));
                        echo "
                ";
                        // line 204
                        if (($context["file_name"] ?? null)) {
                            // line 205
                            echo "                    <span class=\"text-small\">(called from ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), ($context["file_name"] ?? null)));
                            echo ")</span>
                ";
                        }
                        // line 207
                        echo "            </li>

            ";
                        // line 209
                        if (($context["index"] == (twig_length_filter($this->env, ($context["stack"] ?? null)) - 1))) {
                            // line 210
                            echo "                </ul>
            ";
                        }
                        // line 212
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "    ";
            } else {
                // line 214
                echo "        ";
                if (($this->getAttribute(($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? null), "context", array())))) {
                    // line 215
                    echo "            <span class=\"metadata\">
                <strong>Context</strong>: ";
                    // line 216
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_replace_filter(twig_jsonencode_filter($this->getAttribute(($context["log"] ?? null), "context", array()), (64 | 256)), array("{\"" => "{ \"", "\"}" => "\" }", "\":{" => "\": {", "\":\"" => "\": \"", "\",\"" => "\", \"")), "html", null, true));
                    // line 218
                    echo "
            </span>
        ";
                }
                // line 221
                echo "    ";
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
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 221,  636 => 218,  634 => 216,  631 => 215,  628 => 214,  625 => 213,  618 => 212,  614 => 210,  612 => 209,  608 => 207,  602 => 205,  600 => 204,  596 => 203,  592 => 201,  590 => 200,  587 => 199,  584 => 198,  581 => 197,  578 => 196,  575 => 195,  572 => 194,  569 => 193,  566 => 192,  563 => 191,  561 => 190,  558 => 189,  552 => 187,  549 => 186,  544 => 185,  541 => 184,  535 => 182,  533 => 181,  530 => 180,  524 => 178,  522 => 177,  519 => 176,  516 => 175,  513 => 174,  511 => 173,  505 => 171,  488 => 170,  468 => 166,  451 => 163,  448 => 162,  442 => 160,  440 => 159,  433 => 156,  427 => 154,  425 => 153,  419 => 151,  417 => 149,  416 => 148,  414 => 147,  397 => 146,  390 => 141,  386 => 140,  382 => 139,  376 => 135,  373 => 134,  370 => 133,  353 => 132,  341 => 125,  335 => 123,  329 => 119,  327 => 118,  321 => 115,  315 => 111,  309 => 109,  303 => 105,  301 => 104,  295 => 101,  289 => 97,  283 => 95,  277 => 91,  275 => 90,  268 => 87,  262 => 81,  256 => 79,  250 => 75,  248 => 74,  242 => 71,  237 => 68,  231 => 67,  228 => 66,  225 => 65,  222 => 64,  219 => 63,  216 => 62,  213 => 61,  210 => 60,  207 => 59,  204 => 58,  199 => 57,  196 => 56,  194 => 55,  188 => 51,  186 => 50,  182 => 48,  176 => 47,  168 => 44,  162 => 41,  159 => 40,  157 => 39,  152 => 37,  145 => 36,  139 => 35,  129 => 31,  126 => 30,  120 => 27,  110 => 22,  100 => 17,  96 => 15,  94 => 14,  91 => 13,  86 => 11,  81 => 10,  78 => 9,  75 => 8,  72 => 7,  69 => 6,  63 => 5,  56 => 1,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : collector.countdeprecations ? 'yellow' : '' %}
            {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ error_count }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecated Calls</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Silenced Errors</b>
                <span class=\"sf-toolbar-status\">{{ collector.countscreams|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: collector.countdeprecations }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.context.level is defined and log.context.type is defined and log.context.type in [constant('E_DEPRECATED'), constant('E_USER_DEPRECATED')] %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.context.scream is defined and log.context.scream == true  %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge\">{{ info_and_error_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge\">{{ collector.countdeprecations|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced Errors <span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs) }}
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName in ['NOTICE', 'WARNING'] ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\">
                        {% if show_level %}
                            <span class=\"colored text-bold nowrap\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted nowrap newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold nowrap\">{{ log.channel }}</td>
                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(loop.index, log, is_deprecation) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(log_index, log, is_deprecation = false) %}
    {{ log.message }}

    {% if is_deprecation %}
        {% set stack = log.context.stack|default([]) %}
        {% set id = 'sf-call-stack-' ~ log_index %}

        {% if log.context.errorCount is defined %}
            <span class=\"text-small text-bold\">({{ log.context.errorCount }} times)</span>
        {% endif %}

        {% if stack %}
            <button class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ id }}\" data-toggle-alt-content=\"Hide stack trace\">Show stack trace</button>
        {% endif %}

        {% for index, call in stack if index > 1 %}
            {% if index == 2 %}
                <ul class=\"sf-call-stack hidden\" id=\"{{ id }}\">
            {% endif %}

            {% if call.class is defined %}
                {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}
            {% elseif call.function is defined %}
                {% set from = call.function|abbr_method %}
            {% elseif call.file is defined %}
                {% set from = call.file %}
            {% else %}
                {% set from = '-' %}
            {% endif %}

            {% set file_name = (call.file is defined and call.line is defined) ? call.file|replace({'\\\\': '/'})|split('/')|last %}

            <li>
                {{ from|raw }}
                {% if file_name %}
                    <span class=\"text-small\">(called from {{ call.file|format_file(call.line, file_name)|raw }})</span>
                {% endif %}
            </li>

            {% if index == stack|length - 1 %}
                </ul>
            {% endif %}
        {% endfor %}
    {% else %}
        {% if log.context is defined and log.context is not empty %}
            <span class=\"metadata\">
                <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256)|replace({
                    '{\"' : '{ \"', '\"}' : '\" }', '\":{' : '\": {', '\":\"' : '\": \"', '\",\"' : '\", \"'
                }) }}
            </span>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
}
