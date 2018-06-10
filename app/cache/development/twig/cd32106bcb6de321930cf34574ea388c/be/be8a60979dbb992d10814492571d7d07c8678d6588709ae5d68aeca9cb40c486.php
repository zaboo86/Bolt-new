<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_e22c5bc3339682f36ba2c03c0a33cf7dbfc010c41d8c6f83acff2c1d15b33fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $tags = array("set" => 4, "if" => 5, "for" => 212);
        $filters = array("file_link" => 6, "escape" => 7, "striptags" => 9, "abbr_class" => 9, "default" => 51, "length" => 56);
        $functions = array("include" => 60, "path" => 198);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('file_link', 'escape', 'striptags', 'abbr_class', 'default', 'length'),
                array('include', 'path')
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

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "file", array()), $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "line", array()));
            // line 7
            echo "            ";
            if (($context["link"] ?? null)) {
                echo "<a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "file", array()), "html", null, true));
                echo "\">";
            } else {
                echo "<span>";
            }
            // line 8
            echo "
                ";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "class", array()))), "html", null, true));
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "method", array())) {
                // line 12
                echo "&nbsp;::&nbsp;";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "method", array()), "html", null, true));
            }
            // line 15
            if (($context["link"] ?? null)) {
                echo "</a>";
            } else {
                echo "</span>";
            }
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "controller", array()), "html", null, true));
            echo "</span>
        ";
        }
        // line 19
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute(($context["collector"] ?? null), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? null), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", array()), "html", null, true));
        echo "</span>
        ";
        // line 25
        if ($this->getAttribute(($context["collector"] ?? null), "route", array())) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">@</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "route", array()), "html", null, true));
            echo "</span>
        ";
        }
        // line 29
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>HTTP status</b>
            <span>";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statustext", array()), "html", null, true));
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Controller</b>
            <span>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true));
        echo "</span>
        </div>

        ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Controller class</b>
                <span>";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array()), "class", array()), "html", null, true));
            echo "</span>
            </div>
        ";
        }
        // line 48
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <b>Route name</b>
            <span>";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "route", array()), "NONE")) : ("NONE")), "html", null, true));
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Has session</b>
            <span>";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 64
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Icon/request.svg"));
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 71
        echo "    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 78
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestquery", array()), "all", array()))) {
            // line 79
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 83
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestquery", array())), false));
            echo "
                ";
        }
        // line 85
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 88
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestrequest", array()), "all", array()))) {
            // line 89
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 93
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestrequest", array())), false));
            echo "
                ";
        }
        // line 95
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 98
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestattributes", array()), "all", array()))) {
            // line 99
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 103
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestattributes", array())), false));
            echo "
                ";
        }
        // line 105
        echo "
                <h3>Cookies</h3>

                ";
        // line 108
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestcookies", array()), "all", array()))) {
            // line 109
            echo "                    <div class=\"empty\">
                        <p>No cookies</p>
                    </div>
                ";
        } else {
            // line 113
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestcookies", array())), false));
            echo "
                ";
        }
        // line 115
        echo "
                <h3>Request Headers</h3>
                ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false));
        echo "

                <h3>Request Content</h3>

                ";
        // line 121
        if (($this->getAttribute(($context["collector"] ?? null), "content", array()) == false)) {
            // line 122
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ($this->getAttribute(        // line 125
($context["collector"] ?? null), "content", array())) {
            // line 126
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "content", array()), "html", null, true));
            echo "</pre>
                    </div>
                ";
        } else {
            // line 130
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 134
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "requestserver", array())), false));
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? null), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false));
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) ? ("disabled") : ("")));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 156
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array()))) {
            // line 157
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 161
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", array())), false));
            echo "
                ";
        }
        // line 163
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 166
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionattributes", array()))) {
            // line 167
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 171
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false));
            echo "
                ";
        }
        // line 173
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", array()))) ? ("disabled") : ("")));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 182
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", array()))) {
            // line 183
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 187
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? null), "flashes", array())), false));
            echo "
                ";
        }
        // line 189
        echo "            </div>
        </div>

        ";
        // line 192
        if ($this->getAttribute(($context["profile"] ?? null), "parent", array())) {
            // line 193
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "token", array()))), "html", null, true));
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "token", array()), "html", null, true));
            echo ")</small>
                </h3>

                ";
            // line 202
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false));
            echo "
            </div>
        </div>
        ";
        }
        // line 206
        echo "
        ";
        // line 207
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array()))) {
            // line 208
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 209
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", array())), "html", null, true));
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 213
                echo "                    <h3>
                        <a href=\"";
                // line 214
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true));
                echo "\">";
                // line 215
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true));
                // line 216
                echo "</a>
                        <small>(token = ";
                // line 217
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true));
                echo ")</small>
                    </h3>

                    ";
                // line 220
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "            </div>
        </div>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 225,  526 => 222,  518 => 220,  512 => 217,  509 => 216,  507 => 215,  504 => 214,  501 => 213,  497 => 212,  491 => 209,  488 => 208,  486 => 207,  483 => 206,  476 => 202,  470 => 199,  466 => 198,  459 => 193,  457 => 192,  452 => 189,  446 => 187,  440 => 183,  438 => 182,  429 => 176,  424 => 173,  418 => 171,  412 => 167,  410 => 166,  405 => 163,  399 => 161,  393 => 157,  391 => 156,  382 => 150,  375 => 146,  362 => 136,  358 => 134,  352 => 130,  346 => 127,  343 => 126,  341 => 125,  336 => 122,  334 => 121,  327 => 117,  323 => 115,  317 => 113,  311 => 109,  309 => 108,  304 => 105,  298 => 103,  292 => 99,  290 => 98,  285 => 95,  279 => 93,  273 => 89,  271 => 88,  266 => 85,  260 => 83,  254 => 79,  252 => 78,  243 => 71,  237 => 70,  226 => 65,  223 => 64,  217 => 63,  208 => 60,  205 => 59,  195 => 56,  187 => 51,  182 => 48,  176 => 45,  172 => 43,  170 => 42,  164 => 39,  154 => 34,  150 => 32,  148 => 31,  145 => 30,  142 => 29,  137 => 27,  134 => 26,  132 => 25,  125 => 24,  123 => 23,  120 => 22,  118 => 21,  115 => 20,  112 => 19,  106 => 17,  103 => 16,  97 => 15,  93 => 12,  91 => 11,  89 => 9,  86 => 8,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  60 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set request_handler %}
        {% if collector.controller.class is defined %}
            {% set link = collector.controller.file|file_link(collector.controller.line) %}
            {% if link %}<a href=\"{{ link }}\" title=\"{{ collector.controller.file }}\">{% else %}<span>{% endif %}

                {{ collector.controller.class|abbr_class|striptags }}

                {%- if collector.controller.method -%}
                    &nbsp;::&nbsp;{{ collector.controller.method }}
                {%- endif -%}

            {% if link %}</a>{% else %}</span>{% endif %}
        {% else %}
            <span>{{ collector.controller }}</span>
        {% endif %}
    {% endset %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            <span class=\"sf-toolbar-label\">@</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>HTTP status</b>
            <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Controller</b>
            <span>{{ request_handler }}</span>
        </div>

        {% if collector.controller.class is defined %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller class</b>
                <span>{{ collector.controller.class }}</span>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-piece\">
            <b>Route name</b>
            <span>{{ collector.route|default('NONE') }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Has session</b>
            <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'] }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"card\">
                        <pre class=\"break-long-words\">{{ collector.content }}</pre>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}

                <h3>Server Parameters</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'] }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        <a href=\"{{ path('_profiler', { token: child.token }) }}\">
                            {{- child.getcollector('request').requestattributes.get('_controller') -}}
                        </a>
                        <small>(token = {{ child.token }})</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/request.html.twig", "/var/www/bolt/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
