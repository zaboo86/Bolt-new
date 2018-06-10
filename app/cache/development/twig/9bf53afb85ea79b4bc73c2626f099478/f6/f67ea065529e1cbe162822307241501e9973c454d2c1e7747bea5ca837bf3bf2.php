<?php

/* @BoltProfiler/db.html.twig */
class __TwigTemplate_7434241e33d248595cbc705efea3a5bd84e17cf556a80c63894aa4f2c8438067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@BoltProfiler/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltProfiler/db.html.twig"));

        $tags = array("set" => 18, "if" => 21, "include" => 47, "for" => 74);
        $filters = array("escape" => 31, "format" => 34, "raw" => 77, "json_encode" => 81);
        $functions = array("cycle" => 75);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include', 'for'),
                array('escape', 'format', 'raw', 'json_encode'),
                array('cycle')
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

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "<style>
.sf-toolbar-block-db .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
    margin-left: 0;
}
.sf-toolbar-block-db .sf-toolbar-icon {
    padding-left: 0;
}
</style>
    ";
        // line 18
        ob_start();
        // line 19
        echo "
        <span class=\"sf-toolbar-status
            ";
        // line 21
        if (($this->getAttribute(($context["collector"] ?? null), "querycount", array()) < 100)) {
            // line 22
            echo "                sf-toolbar-status-green
            ";
        } elseif ((($this->getAttribute(        // line 23
($context["collector"] ?? null), "querycount", array()) >= 200) && ($this->getAttribute(($context["collector"] ?? null), "querycount", array()) < 300))) {
            // line 24
            echo "                sf-toolbar-status-yellow
            ";
        } elseif (($this->getAttribute(        // line 25
($context["collector"] ?? null), "querycount", array()) >= 300)) {
            // line 26
            echo "                sf-toolbar-status-yellow
            ";
        }
        // line 27
        echo "\">

            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"22\" viewBox=\"0 0 54 54\" enable-background=\"new 0 0 22 22\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg>

            ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "querycount", array()), "html", null, true));
        echo " Q</span>

        ";
        // line 33
        if (($this->getAttribute(($context["collector"] ?? null), "querycount", array()) > 0)) {
            // line 34
            echo "            <span class=\"sf-toolbar-label\">in ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true));
            echo " ms</span>
        ";
        }
        // line 36
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "querycount", array()), "html", null, true));
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true));
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BoltProfiler/db.html.twig", 47)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 51
        echo "<span class=\"label\">
    <span class=\"icon\">            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 50 50\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg></span>
    <strong>Database</strong>
    <span class=\"count\">
        <span>";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "querycount", array()), "html", null, true));
        echo " Q </span>
        <span>";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true));
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 62
        echo "        ";
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_queries($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 66
        echo "    <h2>Queries</h2>

    ";
        // line 68
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "queries", array()))) {
            // line 69
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 73
            echo "        <ul class=\"alt\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "queries", array()));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 75
                echo "                <li class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true));
                echo "\">
                    <code >
                        ";
                // line 77
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["query"], "sql", array()));
                echo "
                    </code>
                    <br /><br />
                    <small>
                        <strong>Parameters</strong>: ";
                // line 81
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "params", array())), "html", null, true));
                echo " <br />
                        <strong>Time</strong>: ";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true));
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </ul>
    ";
        }
        // line 88
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BoltProfiler/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 88,  249 => 86,  239 => 82,  235 => 81,  228 => 77,  222 => 75,  218 => 74,  215 => 73,  209 => 69,  207 => 68,  203 => 66,  197 => 65,  187 => 62,  181 => 61,  170 => 56,  166 => 55,  160 => 51,  154 => 50,  146 => 47,  140 => 44,  133 => 40,  129 => 38,  126 => 37,  123 => 36,  117 => 34,  115 => 33,  110 => 31,  104 => 27,  100 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  88 => 21,  84 => 19,  82 => 18,  66 => 4,  60 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends global.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
<style>
.sf-toolbar-block-db .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
    margin-left: 0;
}
.sf-toolbar-block-db .sf-toolbar-icon {
    padding-left: 0;
}
</style>
    {% set icon %}

        <span class=\"sf-toolbar-status
            {% if collector.querycount < 100 %}
                sf-toolbar-status-green
            {% elseif collector.querycount >= 200 and collector.querycount < 300 %}
                sf-toolbar-status-yellow
            {% elseif collector.querycount >= 300 %}
                sf-toolbar-status-yellow
            {% endif %}\">

            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"22\" viewBox=\"0 0 54 54\" enable-background=\"new 0 0 22 22\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg>

            {{ collector.querycount }} Q</span>

        {% if collector.querycount > 0 %}
            <span class=\"sf-toolbar-label\">in {{ '%0.0f'|format(collector.time * 1000) }} ms</span>
        {% endif %}
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>{{ collector.querycount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
        </div>
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.0\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 50 50\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><g><path fill=\"#AAAAAA\" d=\"M25.513,10.94c12.467,0,21.575-2.238,21.575-4.999c0-2.76-9.107-4.999-21.575-4.999   c-12.469,0-21.576,2.238-21.576,4.999C3.937,8.703,13.044,10.94,25.513,10.94z\"/><path fill=\"#AAAAAA\" d=\"M3,22.167v10.877c2,1.686,9.714,3.748,22.001,3.748C37.287,36.793,46,34.73,47,33.045V22.167   c-4,2.167-13.102,3.289-21.999,3.289C16.103,25.456,8,24.334,3,22.167z\"/><path fill=\"#AAAAAA\" d=\"M47,35.296c-4,2.167-13.102,3.288-21.999,3.288C16.103,38.584,8,37.463,3,35.296v8.565   c0,0.066-0.022,0.132-0.022,0.199C2.978,44.127,3,44.193,3,44.26V44h0.274c1.341,3,10.268,4.676,22.136,4.676   C37.277,48.676,46.334,47,47.252,44H47v0.26c0-0.066,0.023-0.133,0.023-0.199c0-0.067-0.023-0.133-0.023-0.199V35.296z\"/><path fill=\"#AAAAAA\" d=\"M47,9.009c-3,2.376-12.83,3.607-21.999,3.607C15.831,12.616,7,11.385,3,9.008v10.909   c2,1.685,9.714,3.747,22.001,3.747C37.287,23.664,46,21.602,47,19.917V9.009z\"/></g></svg></span>
    <strong>Database</strong>
    <span class=\"count\">
        <span>{{ collector.querycount }} Q </span>
        <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
    </span>
</span>
{% endblock %}

{% block panel %}
        {{ block('queries') }}
{% endblock %}

{% block queries %}
    <h2>Queries</h2>

    {% if collector.queries is empty %}
        <p>
            <em>No queries.</em>
        </p>
    {% else %}
        <ul class=\"alt\">
            {% for i, query in collector.queries %}
                <li class=\"{{ cycle(['odd', 'even'], i) }}\">
                    <code >
                        {{ query.sql|raw }}
                    </code>
                    <br /><br />
                    <small>
                        <strong>Parameters</strong>: {{ query.params|json_encode }} <br />
                        <strong>Time</strong>: {{ '%0.2f'|format(query.executionMS * 1000) }} ms
                    </small>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

{% endblock %}
", "@BoltProfiler/db.html.twig", "");
    }
}
