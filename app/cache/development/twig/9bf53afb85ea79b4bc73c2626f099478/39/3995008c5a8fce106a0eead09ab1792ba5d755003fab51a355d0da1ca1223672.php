<?php

/* @bolt/_base/_listing.twig */
class __TwigTemplate_faff457c09a9d14f6f38098419500a8f1104457ddcfe47431326ab293969eb53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_listing.twig"));

        $tags = array("import" => 1, "from" => 2, "set" => 26, "if" => 28, "block" => 62, "for" => 87, "macro" => 5);
        $filters = array("default" => 28, "first" => 29, "keys" => 29, "escape" => 69, "merge" => 88, "url_encode" => 90, "length" => 90, "raw" => 165, "excerpt" => 171, "first_image" => 177, "round" => 182, "thumbnail" => 183, "slice" => 201, "localedatetime" => 208, "date" => 294, "join" => 317);
        $functions = array("__" => 73, "path" => 164, "hclass" => 11);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'from', 'set', 'if', 'block', 'for', 'macro'),
                array('default', 'first', 'keys', 'escape', 'merge', 'url_encode', 'length', 'raw', 'excerpt', 'first_image', 'round', 'thumbnail', 'slice', 'localedatetime', 'date', 'join'),
                array('__', 'path', 'hclass')
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/_base/_listing.twig", 1);
        // line 2
        $context["__internal_0c367519e34e0742572527659f30439ddac7d3338dd3746cb0f37a0447b45e89"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/_base/_listing.twig", 2);
        // line 3
        $context["__internal_822476eaaf204afe4dc0105a4c4f866e6921c96ca60cb64a860e0cdd43155ebf"] = $this;
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 25
        echo "
";
        // line 26
        $context["modifiable"] = (((($this->getAttribute(($context["permissions"] ?? null), "create", array()) || $this->getAttribute(($context["permissions"] ?? null), "edit", array())) || $this->getAttribute(($context["permissions"] ?? null), "delete", array())) || $this->getAttribute(($context["permissions"] ?? null), "publish", array())) || $this->getAttribute(($context["permissions"] ?? null), "depublish", array()));
        // line 27
        echo "
";
        // line 28
        if ((($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxonomy", array(), "any", false, true), "grouped", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxonomy", array(), "any", false, true), "grouped", array()))) : (""))) {
            // line 29
            echo "    ";
            $context["orderbycontenttype"] = twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxonomy", array()), "grouped", array())));
            // line 30
            echo "    ";
            $context["showorder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "taxonomy"), "method"), ($context["orderbycontenttype"] ?? null), array(), "array"), "has_sortorder", array());
        } else {
            // line 32
            echo "    ";
            $context["showorder"] = false;
        }
        // line 34
        echo "
";
        // line 35
        $context["prop"] = array("extended" =>  !        // line 36
($context["compact"] ?? null), "has_groupname" => $this->getAttribute($this->getAttribute(        // line 37
($context["content"] ?? null), "group", array(), "any", false, true), "name", array(), "any", true, true), "nextgroup" => ((        // line 38
array_key_exists("new_group", $context)) ? (_twig_default_filter(($context["new_group"] ?? null), false)) : (false)), "unordered" => ($this->getAttribute($this->getAttribute(        // line 39
($context["global"] ?? null), "request", array()), "get", array(0 => "order"), "method") == ""), "first" => $this->getAttribute(        // line 40
($context["loop"] ?? null), "first", array()), "last" => $this->getAttribute(        // line 41
($context["loop"] ?? null), "last", array()), "showorder" =>         // line 42
($context["showorder"] ?? null));
        // line 44
        echo "
";
        // line 45
        $context["local"] = array("row_heading" => ((($this->getAttribute(        // line 46
($context["prop"] ?? null), "extended", array()) && $this->getAttribute(($context["prop"] ?? null), "unordered", array())) && $this->getAttribute(($context["prop"] ?? null), "has_groupname", array())) && ($this->getAttribute(($context["prop"] ?? null), "first", array()) || $this->getAttribute(($context["prop"] ?? null), "nextgroup", array()))), "row_header" => ($this->getAttribute(        // line 47
($context["prop"] ?? null), "extended", array()) && ($this->getAttribute(($context["prop"] ?? null), "first", array()) || (($this->getAttribute(($context["prop"] ?? null), "has_groupname", array()) && $this->getAttribute(($context["prop"] ?? null), "nextgroup", array())) && $this->getAttribute(($context["prop"] ?? null), "unordered", array())))));
        // line 49
        echo "
";
        // line 53
        if (($this->getAttribute(($context["local"] ?? null), "row_heading", array()) || (($this->getAttribute(($context["internal"] ?? null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "heading", array()))) : ("")))) {
            // line 54
            echo "    ";
            if ( !$this->getAttribute(($context["prop"] ?? null), "first", array())) {
                // line 55
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_822476eaaf204afe4dc0105a4c4f866e6921c96ca60cb64a860e0cdd43155ebf"]->gettbody_end((($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array()))) : (""))));
                echo "
    ";
            }
            // line 57
            echo "
    ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_822476eaaf204afe4dc0105a4c4f866e6921c96ca60cb64a860e0cdd43155ebf"]->gettbody_beg(($context["local"] ?? null), ($context["modifiable"] ?? null)));
            echo "

    <tr class=\"heading\">
        ";
            // line 61
            if (false) {
                // line 62
                echo "            ";
                $this->displayBlock('listing_columns', $context, $blocks);
                // line 63
                echo "        ";
            }
            // line 64
            echo "        ";
            if (($context["compact"] ?? null)) {
                // line 65
                echo "            ";
                $context["columns"] = (                $this->renderBlock("listing_columns", $context, $blocks) - 1);
                // line 66
                echo "        ";
            } else {
                // line 67
                echo "            ";
                $context["columns"] =                 $this->renderBlock("listing_columns", $context, $blocks);
                // line 68
                echo "        ";
            }
            // line 69
            echo "        <th colspan=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["columns"] ?? null), "html", null, true));
            echo "\">
            ";
            // line 70
            if ((($this->getAttribute(($context["internal"] ?? null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "heading", array()))) : (""))) {
                // line 71
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["internal"] ?? null), "heading", array()), "html", null, true));
                echo "
            ";
            } else {
                // line 73
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["content"] ?? null), "group", array(), "any", false, true), "name", array()), $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("(no group)"))) : ($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("(no group)"))), "html", null, true));
                echo "
            ";
            }
            // line 75
            echo "        </th>
    </tr>
";
        } elseif ($this->getAttribute(        // line 77
($context["prop"] ?? null), "first", array())) {
            // line 78
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_822476eaaf204afe4dc0105a4c4f866e6921c96ca60cb64a860e0cdd43155ebf"]->gettbody_beg(($context["local"] ?? null), ($context["modifiable"] ?? null)));
            echo "
";
        }
        // line 80
        echo "
";
        // line 84
        if ($this->getAttribute(($context["local"] ?? null), "row_header", array())) {
            // line 85
            echo "    ";
            // line 86
            echo "    ";
            $context["params"] = array();
            // line 87
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "order")) {
                    // line 88
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? null), array($context["key"] => $context["val"]));
                    // line 89
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    ";
            $context["link"] = ((("?" . twig_urlencode_filter(($context["params"] ?? null))) . ((twig_length_filter($this->env, ($context["params"] ?? null))) ? ("&") : (""))) . "order=");
            // line 91
            echo "    ";
            // line 92
            echo "
    <tr class=\"header\">
        ";
            // line 94
            $this->displayBlock('listing_header', $context, $blocks);
            // line 134
            echo "    </tr>
";
        }
        // line 136
        echo "
";
        // line 140
        echo "<tr ";
        if (($this->getAttribute(($context["content"] ?? null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if (($context["modifiable"] ?? null)) {
            echo " id=\"item_";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true));
            echo "\"";
        }
        echo ">

    ";
        // line 143
        echo "    ";
        $this->displayBlock('listing_id', $context, $blocks);
        // line 154
        echo "
    ";
        // line 156
        echo "    ";
        $this->displayBlock('listing_content', $context, $blocks);
        // line 192
        echo "
    ";
        // line 193
        if ($this->getAttribute(($context["prop"] ?? null), "extended", array())) {
            // line 194
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 218
            echo "    ";
        }
        // line 219
        echo "
    ";
        // line 221
        echo "    ";
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 333
        echo "</tr>

";
        // line 335
        if ($this->getAttribute(($context["prop"] ?? null), "last", array())) {
            // line 336
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_822476eaaf204afe4dc0105a4c4f866e6921c96ca60cb64a860e0cdd43155ebf"]->gettbody_end((($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array()))) : (""))));
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_listing_columns($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_columns"));

        echo "6";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_listing_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_header"));

        // line 95
        echo "            ";
        $context["__internal_796192fba91ff529a4a30bfca824508f602a009c3ec54d708fff9d453a39cb2e"] = $this->loadTemplate("@bolt/_buic/_listing.twig", "@bolt/_base/_listing.twig", 95);
        // line 96
        echo "
            ";
        // line 98
        echo "            ";
        if (($this->getAttribute(($context["prop"] ?? null), "extended", array()) && ($context["modifiable"] ?? null))) {
            // line 99
            echo "                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.select-all"));
            echo "</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.select-none"));
            echo "</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.selection"));
            echo " (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.delete"));
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.publish"));
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.depublish"));
            echo "</a></li>
                        </ul>
                    </div>
                </th>
            ";
        } else {
            // line 116
            echo "                <th style=\"margin: 0; padding: 0;\"></th>
            ";
        }
        // line 118
        echo "
            ";
        // line 120
        echo "            <th class=\"hidden-xs\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_796192fba91ff529a4a30bfca824508f602a009c3ec54d708fff9d453a39cb2e"]->getbuic_listing_slink("id", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.id")));
        echo "</th>

            ";
        // line 123
        echo "            <th style=\"width:80%\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_796192fba91ff529a4a30bfca824508f602a009c3ec54d708fff9d453a39cb2e"]->getbuic_listing_slink($this->getAttribute(($context["content"] ?? null), "getTitleColumnName", array(0 => $this->getAttribute(($context["content"] ?? null), "contenttype", array())), "method"), (($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Title") . " / ") . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("Excerpt"))));
        echo "</th>

            ";
        // line 126
        echo "            <th class=\"listthumb\"></th>

            ";
        // line 129
        echo "            <th class=\"username hidden-sm hidden-xs\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_796192fba91ff529a4a30bfca824508f602a009c3ec54d708fff9d453a39cb2e"]->getbuic_listing_slink("datecreated", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.meta")));
        echo "</th>

            ";
        // line 132
        echo "            <th><span class=\"hidden-xs\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.action-plural"));
        echo "</span></th>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_listing_id($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_id"));

        // line 144
        echo "        ";
        // line 145
        echo "        ";
        if (($this->getAttribute(($context["prop"] ?? null), "extended", array()) && $this->getAttribute(($context["permissions"] ?? null), "delete", array()))) {
            // line 146
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 148
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        <td class=\"id hidden-xs\">№ ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true));
        echo "</td>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_listing_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_content"));

        // line 157
        echo "        ";
        // line 158
        echo "        <td class=\"excerpt ";
        if ($this->getAttribute(($context["prop"] ?? null), "extended", array())) {
            echo "large";
        }
        echo "\">
            ";
        // line 159
        $context["title"] = (($this->getAttribute(($context["content"] ?? null), "getTitle", array(0 => true), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["content"] ?? null), "getTitle", array(0 => true), "method"), (("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-title")) . ")</em>"))) : ((("<em>(" . $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.no-title")) . ")</em>")));
        // line 160
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 161
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true));
        echo ". </strong>
                <strong>
                    ";
        // line 163
        if (($context["modifiable"] ?? null)) {
            // line 164
            echo "                        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true));
            echo "\" title=\"Slug: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "slug", array()), "html", null, true));
            echo "\">
                            ";
            // line 165
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            // line 166
            echo "</a>
                    ";
        } else {
            // line 168
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["title"] ?? null));
            echo "
                    ";
        }
        // line 170
        echo "                </strong>
                ";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->excerpt(($context["content"] ?? null), (($context["excerptlength"] ?? null) - twig_length_filter($this->env, ($context["title"] ?? null))), false, ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null))) : (""))));
        echo "
            </span>
        </td>

        ";
        // line 176
        echo "        <td class=\"listthumb\">
            ";
        // line 177
        $context["listimage"] = $this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->getFirstImage(($context["content"] ?? null));
        // line 178
        echo "            ";
        if ( !twig_test_empty(($context["listimage"] ?? null))) {
            // line 179
            echo "                ";
            if ((twig_test_iterable(($context["listimage"] ?? null)) &&  !$this->getAttribute(($context["listimage"] ?? null), "file", array(), "array", true, true))) {
                // line 180
                echo "                    ";
                $context["listimage"] = twig_first($this->env, ($context["listimage"] ?? null));
                // line 181
                echo "                ";
            }
            // line 182
            echo "                ";
            $context["thumb_height"] = twig_round((($context["thumbsize"] ?? null) * 0.75));
            // line 183
            echo "                ";
            $context["thumb_small"] = $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail(($context["listimage"] ?? null), ($context["thumbsize"] ?? null), ($context["thumb_height"] ?? null), "c");
            // line 184
            echo "                ";
            $context["thumb_large"] = $this->env->getRuntime('Bolt\Twig\Runtime\ImageRuntime')->thumbnail(($context["listimage"] ?? null), 1000, 800, "r");
            // line 185
            echo "                ";
            $context["thumb_title"] = (($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.image") . ": ") . (($this->getAttribute(($context["listimage"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["listimage"] ?? null), "title", array()), " - ")) : (" - ")));
            // line 186
            echo "                <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["thumb_large"] ?? null), "html", null, true));
            echo "\" class=\"magnific\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["thumb_title"] ?? null), "html", null, true));
            echo "\">
                    <img src=\"";
            // line 187
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["thumb_small"] ?? null), "html", null, true));
            echo "\" width=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["thumbsize"] ?? null), "html", null, true));
            echo "\" height=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["thumb_height"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.thumbnail"));
            echo "\">
                </a>
            ";
        }
        // line 190
        echo "        </td>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 194
    public function block_listing_meta($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_meta"));

        // line 195
        echo "            ";
        // line 196
        echo "            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 198
        $context["owner"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "users", array()), "user", array(0 => $this->getAttribute(($context["content"] ?? null), "ownerid", array())), "method");
        // line 199
        echo "
                ";
        // line 200
        if (($context["owner"] ?? null)) {
            // line 201
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["owner"] ?? null), "displayname", array()), 0, 15), "html", null, true));
            echo "
                ";
        } else {
            // line 203
            echo "                <s>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "ownerid", array()), "html", null, true));
            echo "</s>
                ";
        }
        // line 204
        echo "<br>
                ";
        // line 205
        if (($this->getAttribute(($context["content"] ?? null), "status", array()) == "timed")) {
            // line 206
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["__internal_0c367519e34e0742572527659f30439ddac7d3338dd3746cb0f37a0447b45e89"]->getbuic_moment($this->getAttribute(($context["content"] ?? null), "datepublish", array())));
            echo "<br>
                ";
        } else {
            // line 208
            echo "                    <i class=\"fa fa-circle status-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "status", array()), "html", null, true));
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\TextRuntime')->localeDateTime($this->getAttribute(($context["content"] ?? null), "datepublish", array()), "%x"));
            echo "<br>
                ";
        }
        // line 210
        echo "                ";
        if ($this->getAttribute(($context["prop"] ?? null), "showorder", array())) {
            // line 211
            echo "                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"";
            // line 212
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true));
            echo "#taxonomy\" >
                        ";
            // line 213
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.order-colon-sort", array("%sort%" => $this->getAttribute(($context["content"] ?? null), "sortorder", array()))));
            echo "
                    </a>
                ";
        }
        // line 216
        echo "            </td>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 221
    public function block_listing_actions($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_actions"));

        // line 222
        echo "        ";
        // line 223
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 225
        if (($context["modifiable"] ?? null)) {
            // line 226
            echo "                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true));
            echo "\">
                        <i class=\"fa fa-edit\"></i> ";
            // line 227
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.edit"));
            echo "
                    </a>
                ";
        }
        // line 230
        echo "                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    ";
        // line 235
        if ((($this->getAttribute(($context["content"] ?? null), "status", array()) == "published") &&  !twig_test_empty($this->getAttribute(($context["content"] ?? null), "link", array())))) {
            // line 236
            echo "                        <li>
                            <a href=\"";
            // line 237
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "link", array()), "html", null, true));
            echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.view-on-site"));
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 242
        echo "
                    ";
        // line 243
        $context["__internal_93e93a858313bf9551c3bdce8a861a61f03da3a59f647c6d73451783c59c43ea"] = $this;
        // line 244
        echo "                    ";
        if (($context["modifiable"] ?? null)) {
            // line 245
            echo "                        ";
            if (($this->getAttribute(($context["content"] ?? null), "status", array()) != "published")) {
                // line 246
                echo "                            ";
                if ($this->getAttribute(($context["permissions"] ?? null), "publish", array())) {
                    // line 247
                    echo "                                <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getactionform(($context["content"] ?? null), "publish", "fa-circle status-published", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "singular_name", array())))));
                    echo "</li>
                            ";
                }
                // line 249
                echo "                        ";
            } else {
                // line 250
                echo "                            ";
                if ($this->getAttribute(($context["permissions"] ?? null), "depublish", array())) {
                    // line 251
                    echo "                                <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getactionform(($context["content"] ?? null), "held", "fa-circle status-held", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-change-held")));
                    echo "</li>
                                <li>";
                    // line 252
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getactionform(($context["content"] ?? null), "draft", "fa-circle status-draft", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-change-draft")));
                    echo "</li>

                            ";
                }
                // line 255
                echo "                        ";
            }
            // line 256
            echo "                        ";
            if ($this->getAttribute(($context["permissions"] ?? null), "create", array())) {
                // line 257
                echo "                            <li>
                                <a href=\"";
                // line 258
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "source" => $this->getAttribute(($context["content"] ?? null), "id", array()), "duplicate" => 1)), "html", null, true));
                echo "\">
                                    <i class=\"fa fa-copy\"></i> ";
                // line 259
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "singular_name", array()))));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 263
            echo "                        ";
            if ($this->getAttribute(($context["permissions"] ?? null), "delete", array())) {
                // line 264
                echo "                            <li>
                                ";
                // line 265
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["macro"]->getactionform(($context["content"] ?? null), "delete", "fa-trash", $this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 267
($context["content"] ?? null), "contenttype", array()), "singular_name", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 268
($context["content"] ?? null), "getTitle", array())) . "'?")));
                echo "
                            </li>
                        ";
            }
            // line 271
            echo "                        <li class=\"divider\"></li>
                    ";
        }
        // line 273
        echo "                    <li>
                        <a class=\"nolink\">
                            ";
        // line 275
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.author-colon"));
        echo " <strong><i class=\"fa fa-user\"></i>
                                ";
        // line 276
        $context["owner"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "users", array()), "user", array(0 => $this->getAttribute(($context["content"] ?? null), "ownerid", array())), "method");
        // line 277
        echo "                                ";
        if (($context["owner"] ?? null)) {
            // line 278
            echo "                                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["owner"] ?? null), "displayname", array()), 0, 15), "html", null, true));
            echo "
                                ";
        } else {
            // line 280
            echo "                                    <s>user ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "ownerid", array()), "html", null, true));
            echo "</s>
                                ";
        }
        // line 281
        echo "</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 285
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.status-current-colon"));
        echo "<strong>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "status", array()), "html", null, true));
        echo "</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 288
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.slug-colon"));
        echo "
                            <code title=\"";
        // line 289
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "slug", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["content"] ?? null), "slug", array()), 0, 24), "html", null, true));
        echo "</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 293
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.created-on-colon"));
        echo "
                            <i class=\"fa fa-asterisk\"></i> ";
        // line 294
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datecreated", array()), "Y-m-d H:i"), "html", null, true));
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 298
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.published-on-colon"));
        echo "
                            <i class=\"fa fa-calendar\"></i> ";
        // line 299
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datepublish", array()), "Y-m-d H:i"), "html", null, true));
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 303
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.last-edited-on-colon"));
        echo "
                            <i class=\"fa fa-refresh\"></i> ";
        // line 304
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datechanged", array()), "Y-m-d H:i"), "html", null, true));
        echo "
                        </a>
                    </li>

                    ";
        // line 308
        $context["taxonomytypes"] = (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxonomy", array(), "any", false, true), "grouped", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["content"] ?? null), "taxonomy", array(), "any", false, true), "grouped", array()))) : (""));
        // line 309
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxonomytypes"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["taxonomies"]) {
            // line 310
            echo "                        ";
            if ((twig_length_filter($this->env, $context["taxonomies"]) > 1)) {
                // line 311
                echo "                            ";
                $context["taxlist"] = array();
                // line 312
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["taxonomies"]);
                foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
                    // line 313
                    echo "                                ";
                    $context["taxlist"] = twig_array_merge(($context["taxlist"] ?? null), array(0 => $this->getAttribute($context["taxonomy"], "name", array())));
                    // line 314
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 316
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "name", array()), "html", null, true));
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 317
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, twig_join_filter(($context["taxlist"] ?? null), ", "), 0, 24), "html", null, true));
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 321
                echo "                            <li>
                                ";
                // line 322
                $context["taxonomy"] = twig_first($this->env, $context["taxonomies"]);
                // line 323
                echo "                                <a class=\"nolink\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "singular_name", array()), "html", null, true));
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 324
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["taxonomy"] ?? null), "name", array()), 0, 24), "html", null, true));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 328
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['taxonomies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "                </ul>
            </div>
        </td>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function gettbody_beg($__local__ = null, $__modifiable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "local" => $__local__,
            "modifiable" => $__modifiable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_beg"));

            // line 6
            echo "    ";
            $context["class"] = array(0 => ((            // line 7
($context["modifiable"] ?? null)) ? ("sortable") : ("")), 1 => ((($this->getAttribute(            // line 8
($context["local"] ?? null), "row_heading", array()) && $this->getAttribute(($context["local"] ?? null), "row_header", array()))) ? ("striping_even") : ("striping_odd")));
            // line 10
            echo "
<tbody";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->hclass(($context["class"] ?? null)));
            echo " data-bolt-widget=\"buicListingPart\">
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

    // line 14
    public function gettbody_end($__toolbar__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "toolbar" => $__toolbar__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_end"));

            // line 15
            if (($context["toolbar"] ?? null)) {
                // line 16
                echo "    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"";
                // line 17
                $this->displayBlock("listing_columns", $context, $blocks);
                echo "\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            ";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["toolbar"] ?? null), "html", null, true));
                echo "
        </td>
    </tr>
";
            }
            // line 23
            echo "</tbody>
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
        return "@bolt/_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  960 => 23,  953 => 19,  948 => 17,  945 => 16,  943 => 15,  928 => 14,  908 => 11,  905 => 10,  903 => 8,  902 => 7,  900 => 6,  884 => 5,  874 => 329,  868 => 328,  861 => 324,  856 => 323,  854 => 322,  851 => 321,  844 => 317,  840 => 316,  837 => 315,  831 => 314,  828 => 313,  823 => 312,  820 => 311,  817 => 310,  812 => 309,  810 => 308,  803 => 304,  799 => 303,  792 => 299,  788 => 298,  781 => 294,  777 => 293,  768 => 289,  764 => 288,  756 => 285,  750 => 281,  744 => 280,  738 => 278,  735 => 277,  733 => 276,  729 => 275,  725 => 273,  721 => 271,  715 => 268,  714 => 267,  713 => 265,  710 => 264,  707 => 263,  700 => 259,  696 => 258,  693 => 257,  690 => 256,  687 => 255,  681 => 252,  676 => 251,  673 => 250,  670 => 249,  664 => 247,  661 => 246,  658 => 245,  655 => 244,  653 => 243,  650 => 242,  643 => 238,  639 => 237,  636 => 236,  634 => 235,  627 => 230,  621 => 227,  616 => 226,  614 => 225,  610 => 223,  608 => 222,  602 => 221,  594 => 216,  588 => 213,  584 => 212,  581 => 211,  578 => 210,  570 => 208,  564 => 206,  562 => 205,  559 => 204,  553 => 203,  547 => 201,  545 => 200,  542 => 199,  540 => 198,  536 => 196,  534 => 195,  528 => 194,  520 => 190,  508 => 187,  501 => 186,  498 => 185,  495 => 184,  492 => 183,  489 => 182,  486 => 181,  483 => 180,  480 => 179,  477 => 178,  475 => 177,  472 => 176,  465 => 171,  462 => 170,  456 => 168,  452 => 166,  450 => 165,  443 => 164,  441 => 163,  436 => 161,  433 => 160,  431 => 159,  424 => 158,  422 => 157,  416 => 156,  406 => 152,  403 => 150,  399 => 148,  395 => 146,  392 => 145,  390 => 144,  384 => 143,  374 => 132,  368 => 129,  364 => 126,  358 => 123,  352 => 120,  349 => 118,  345 => 116,  337 => 111,  333 => 110,  329 => 109,  325 => 108,  320 => 106,  316 => 105,  308 => 99,  305 => 98,  302 => 96,  299 => 95,  293 => 94,  281 => 62,  270 => 336,  268 => 335,  264 => 333,  261 => 221,  258 => 219,  255 => 218,  252 => 194,  250 => 193,  247 => 192,  244 => 156,  241 => 154,  238 => 143,  225 => 140,  222 => 136,  218 => 134,  216 => 94,  212 => 92,  210 => 91,  207 => 90,  200 => 89,  197 => 88,  191 => 87,  188 => 86,  186 => 85,  184 => 84,  181 => 80,  175 => 78,  173 => 77,  169 => 75,  163 => 73,  157 => 71,  155 => 70,  150 => 69,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  132 => 63,  129 => 62,  127 => 61,  121 => 58,  118 => 57,  112 => 55,  109 => 54,  107 => 53,  104 => 49,  102 => 47,  101 => 46,  100 => 45,  97 => 44,  95 => 42,  94 => 41,  93 => 40,  92 => 39,  91 => 38,  90 => 37,  89 => 36,  88 => 35,  85 => 34,  81 => 32,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  67 => 26,  64 => 25,  61 => 13,  58 => 4,  56 => 3,  54 => 2,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}
{% from '@bolt/_buic/_moment.twig' import buic_moment %}
{% from _self import tbody_beg, tbody_end %}

{% macro tbody_beg(local, modifiable) %}
    {% set class = [
    modifiable ? 'sortable' : '',
    local.row_heading and local.row_header ? 'striping_even' : 'striping_odd',
    ] %}

<tbody{{ hclass(class)}} data-bolt-widget=\"buicListingPart\">
{% endmacro %}

{% macro tbody_end(toolbar) %}
{% if toolbar %}
    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"{{ block('listing_columns') }}\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            {{ toolbar }}
        </td>
    </tr>
{% endif %}
</tbody>
{% endmacro %}

{% set modifiable = permissions.create or permissions.edit or permissions.delete or permissions.publish or permissions.depublish %}

{% if content.taxonomy.grouped|default() %}
    {% set orderbycontenttype = content.taxonomy.grouped|keys|first %}
    {% set showorder = app.config.get('taxonomy')[orderbycontenttype].has_sortorder %}
{% else %}
    {% set showorder = false %}
{% endif %}

{% set prop = {
extended:       not compact,
has_groupname:  content.group.name is defined,
nextgroup:      new_group|default(false),
unordered:      global.request.get('order') == '',
first:          loop.first,
last:           loop.last,
showorder:      showorder
}%}

{% set local = {
row_heading:    prop.extended and prop.unordered and prop.has_groupname and (prop.first or prop.nextgroup),
row_header:     prop.extended and (prop.first or (prop.has_groupname and prop.nextgroup) and prop.unordered)
} %}

{#
 # GROUPNAME: If we have 'grouping', print the row with the groupname.
 #}
{% if local.row_heading or internal.heading|default() %}
    {% if not prop.first %}
        {{ tbody_end(internal.selection_toolbar|default()) }}
    {% endif %}

    {{ tbody_beg(local, modifiable) }}

    <tr class=\"heading\">
        {% if false %}
            {% block listing_columns %}6{% endblock %}
        {% endif %}
        {% if compact %}
            {% set columns = block('listing_columns') - 1 %}
        {% else %}
            {% set columns = block('listing_columns') %}
        {% endif %}
        <th colspan=\"{{ columns }}\">
            {% if internal.heading|default() %}
                {{ internal.heading }}
            {% else %}
                {{ content.group.name|default(__('(no group)')) }}
            {% endif %}
        </th>
    </tr>
{% elseif prop.first %}
    {{ tbody_beg(local, modifiable) }}
{% endif %}

{#
 # HEADER ROW: Print the header for the first row.
 #}
{% if local.row_header %}
    {# Deprecated #}
    {% set params = {} %}
    {% for key, val in global.request.query.all if key != 'order' %}
        {% set params = params|merge({(key): val}) %}
    {% endfor %}
    {% set link = '?' ~ params|url_encode ~ (params|length ? '&' : '') ~ 'order=' %}
    {# /Deprecated #}

    <tr class=\"header\">
        {% block listing_header %}
            {% from '@bolt/_buic/_listing.twig' import buic_listing_slink %}

            {# COLUMN: Select #}
            {% if prop.extended and modifiable %}
                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">{{ __('general.phrase.select-all') }}</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">{{ __('general.phrase.select-none') }}</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">{{ __('general.phrase.selection') }} (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• {{ __('general.phrase.delete') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.publish') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.depublish') }}</a></li>
                        </ul>
                    </div>
                </th>
            {% else %}
                <th style=\"margin: 0; padding: 0;\"></th>
            {% endif %}

            {# COLUMN: ID #}
            <th class=\"hidden-xs\">{{ buic_listing_slink('id', __('general.phrase.id'))}}</th>

            {# COLUMN: Content #}
            <th style=\"width:80%\">{{ buic_listing_slink(content.getTitleColumnName(content.contenttype), __('Title') ~ ' / ' ~ __('Excerpt')) }}</th>

            {# COLUMN: Thumbnail #}
            <th class=\"listthumb\"></th>

            {# COLUMN: Meta #}
            <th class=\"username hidden-sm hidden-xs\">{{ buic_listing_slink('datecreated', __('general.phrase.meta'))}}</th>

            {# COLUMN: Action #}
            <th><span class=\"hidden-xs\">{{ __('general.phrase.action-plural') }}</span></th>
        {% endblock %}
    </tr>
{% endif %}

{#
 # DATA ROW
 #}
<tr {% if content.status!='published' %}class=\"dim\"{% endif %}{% if modifiable %} id=\"item_{{ content.id }}\"{% endif %}>

    {### BLOCK: ID ###}
    {% block listing_id %}
        {# COLUMN: Select #}
        {% if prop.extended and permissions.delete %}
            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        {% else %}
            <td style=\"margin: 0; padding: 0;\"></td>
        {% endif %}

        {# COLUMN: ID #}
        <td class=\"id hidden-xs\">№ {{ content.id }}</td>
    {% endblock %}

    {### BLOCK: CONTENT ###}
    {% block listing_content %}
        {# COLUMN: Content #}
        <td class=\"excerpt {% if prop.extended %}large{% endif %}\">
            {% set title = content.getTitle(true)|default(\"<em>(\" ~ __('general.phrase.no-title') ~ \")</em>\") %}
            <span>
                <strong class=\"visible-xs\">№ {{ content.id }}. </strong>
                <strong>
                    {% if modifiable %}
                        <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\" title=\"Slug: {{ content.slug }}\">
                            {{ title|raw -}}
                        </a>
                    {% else %}
                        {{ title|raw }}
                    {% endif %}
                </strong>
                {{ content|excerpt(excerptlength - title|length, false, filter|default()) }}
            </span>
        </td>

        {# COLUMN: Thumbnail #}
        <td class=\"listthumb\">
            {% set listimage = content|first_image %}
            {% if listimage is not empty %}
                {% if listimage is iterable and listimage['file'] is not defined %}
                    {% set listimage = listimage|first %}
                {% endif %}
                {% set thumb_height = (thumbsize * 0.75)|round %}
                {% set thumb_small = listimage|thumbnail(thumbsize, thumb_height, 'c') %}
                {% set thumb_large = listimage|thumbnail(1000, 800, 'r') %}
                {% set thumb_title = __('general.phrase.image') ~ ': ' ~ listimage.title|default(' - ') %}
                <a href=\"{{ thumb_large }}\" class=\"magnific\" title=\"{{ thumb_title }}\">
                    <img src=\"{{ thumb_small }}\" width=\"{{ thumbsize }}\" height=\"{{ thumb_height }}\" alt=\"{{ __('general.phrase.thumbnail') }}\">
                </a>
            {% endif %}
        </td>
    {% endblock %}

    {% if prop.extended %}
        {% block listing_meta %}
            {# COLUMN: Meta #}
            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                {% set owner = app.users.user(content.ownerid) %}

                {% if owner %}
                    {{ owner.displayname[:15] }}
                {% else %}
                <s>{{ content.ownerid }}</s>
                {% endif %}<br>
                {% if content.status == 'timed' %}
                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> {{ buic_moment(content.datepublish) }}<br>
                {% else %}
                    <i class=\"fa fa-circle status-{{ content.status }} fa-fw\"></i> {{ content.datepublish|localedatetime('%x') }}<br>
                {% endif %}
                {% if prop.showorder %}
                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}#taxonomy\" >
                        {{ __('general.phrase.order-colon-sort',{'%sort%': content.sortorder}) }}
                    </a>
                {% endif %}
            </td>
        {% endblock %}
    {% endif %}

    {### BLOCK: ACTIONS ###}
    {% block listing_actions %}
        {# COLUMN: Action #}
        <td class=\"actions\">
            <div class=\"btn-group\">
                {% if modifiable %}
                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                        <i class=\"fa fa-edit\"></i> {{ __('general.phrase.edit') }}
                    </a>
                {% endif %}
                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    {% if content.status == \"published\" and content.link is not empty %}
                        <li>
                            <a href=\"{{ content.link }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.view-on-site') }}
                            </a>
                        </li>
                    {% endif %}

                    {% from _self import actionform %}
                    {% if modifiable %}
                        {% if content.status != 'published' %}
                            {% if permissions.publish %}
                                <li>{{ macro.actionform(content, 'publish', 'fa-circle status-published', __('contenttypes.generic.publish',{'%contenttype%':content.contenttype.singular_name})) }}</li>
                            {% endif %}
                        {% else %}
                            {% if permissions.depublish %}
                                <li>{{ macro.actionform(content, 'held', 'fa-circle status-held', __('general.phrase.status-change-held')) }}</li>
                                <li>{{ macro.actionform(content, 'draft', 'fa-circle status-draft', __('general.phrase.status-change-draft')) }}</li>

                            {% endif %}
                        {% endif %}
                        {% if permissions.create %}
                            <li>
                                <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'source': content.id, 'duplicate': 1}) }}\">
                                    <i class=\"fa fa-copy\"></i> {{ __('contenttypes.generic.duplicate', {'%contenttype%': content.contenttype.singular_name}) }}
                                </a>
                            </li>
                        {% endif %}
                        {% if permissions.delete %}
                            <li>
                                {{ macro.actionform(content, 'delete',
                                'fa-trash',
                                __('contenttypes.generic.delete', {'%contenttype%': content.contenttype.singular_name}),
                                \"Are you sure you want to delete '\" ~ content.getTitle ~ \"'?\" ) }}
                            </li>
                        {% endif %}
                        <li class=\"divider\"></li>
                    {% endif %}
                    <li>
                        <a class=\"nolink\">
                            {{ __('general.phrase.author-colon') }} <strong><i class=\"fa fa-user\"></i>
                                {% set owner = app.users.user(content.ownerid) %}
                                {% if owner %}
                                    {{ owner.displayname[:15] }}
                                {% else %}
                                    <s>user {{ content.ownerid }}</s>
                                {% endif %}</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.status-current-colon') }}<strong>{{ content.status }}</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.slug-colon') }}
                            <code title=\"{{ content.slug }}\">{{ content.slug[:24] }}</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.created-on-colon') }}
                            <i class=\"fa fa-asterisk\"></i> {{ content.datecreated|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.published-on-colon') }}
                            <i class=\"fa fa-calendar\"></i> {{ content.datepublish|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.last-edited-on-colon') }}
                            <i class=\"fa fa-refresh\"></i> {{ content.datechanged|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>

                    {% set taxonomytypes = content.taxonomy.grouped|default %}
                    {% for type, taxonomies in taxonomytypes %}
                        {% if taxonomies|length > 1 %}
                            {% set taxlist = [] %}
                            {% for taxonomy in taxonomies %}
                                {% set taxlist = taxlist|merge([taxonomy.name]) %}
                            {% endfor %}
                            <li>
                                <a class=\"nolink\">{{ app.config.get('taxonomy')[type].name }}:
                                    <i class=\"fa fa-tag\"></i> {{ taxlist|join(\", \")[:24] }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                {% set taxonomy = taxonomies|first %}
                                <a class=\"nolink\">{{ app.config.get('taxonomy')[type].singular_name }}:
                                    <i class=\"fa fa-tag\"></i> {{ taxonomy.name[:24] }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </td>
    {% endblock %}
</tr>

{% if prop.last %}
    {{ tbody_end(internal.selection_toolbar|default()) }}
{% endif %}
", "@bolt/_base/_listing.twig", "");
    }
}
