<?php

/* /boltforms/templates/form/form.twig */
class __TwigTemplate_ed61460abf91d05704ab59dc040fbdfcf5a5bce1f38560613cd3d38d4e3ce6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'boltforms_css' => array($this, 'block_boltforms_css'),
            'boltforms_form' => array($this, 'block_boltforms_form'),
            'boltforms_form_fields' => array($this, 'block_boltforms_form_fields'),
            'boltforms_js' => array($this, 'block_boltforms_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/boltforms/templates/form/form.twig"));

        $tags = array("form_theme" => 28, "block" => 31, "import" => 40, "if" => 42, "for" => 55);
        $filters = array("escape" => 44, "raw" => 64);
        $functions = array("include" => 32, "form_start" => 49, "form_errors" => 51, "form_row" => 121, "form_end" => 124, "form_label" => 71, "form_widget" => 75);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('form_theme', 'block', 'import', 'if', 'for'),
                array('escape', 'raw'),
                array('include', 'form_start', 'form_errors', 'form_row', 'form_end', 'form_label', 'form_widget')
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

        // line 26
        echo "

";
        // line 28
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => $this->getAttribute(($context["templates"] ?? null), "formtheme", array())));
        // line 29
        echo "

";
        // line 31
        $this->displayBlock('boltforms_css', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('boltforms_form', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('boltforms_js', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_boltforms_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boltforms_css"));

        // line 32
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, $this->getAttribute(($context["templates"] ?? null), "css", array())));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_boltforms_form($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boltforms_form"));

        // line 37
        echo "                        

        ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, $this->getAttribute(($context["templates"] ?? null), "messages", array())));
        echo "
        ";
        // line 40
        $context["spambot"] = $this->loadTemplate($this->getAttribute(($context["templates"] ?? null), "recaptcha", array()), "/boltforms/templates/form/form.twig", 40);
        // line 41
        echo "
        ";
        // line 42
        if ($this->getAttribute(($context["result"] ?? null), "pass", array(0 => "email"), "method")) {
            // line 43
            echo "            ";
            // line 44
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["html_post"] ?? null), "html", null, true));
            echo "
        ";
        } else {
            // line 46
            echo "                        
            ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["html_pre"] ?? null), "html", null, true));
            echo "

            ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ($context["form_start_param"] ?? null)));
            echo "

            ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'));
            echo "

            ";
            // line 53
            $this->displayBlock('boltforms_form_fields', $context, $blocks);
            // line 118
            echo "
            ";
            // line 120
            echo "            ";
            if ($this->getAttribute(($context["form"] ?? null), "_token", array(), "any", true, true)) {
                // line 121
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row'));
                echo "
            ";
            }
            // line 123
            echo "
            ";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false)));
            echo "

        ";
        }
        // line 127
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_boltforms_form_fields($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boltforms_form_fields"));

        // line 54
        echo "
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 56
            echo " 
        <div class=\"container\">
          <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                 
                    <div class=\"form-group\">
                    ";
            // line 62
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "config", array()), "type", array()), "name", array()) != "submit")) {
                // line 63
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "prefix", array(), "any", true, true)) {
                    // line 64
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "prefix", array()));
                    echo "
                        ";
                }
                // line 66
                echo "
                        <div class=\".col";
                // line 67
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                    echo " boltforms-";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "class", array()), "html", null, true));
                    echo "-row";
                }
                echo "\">
                            
                            <div class=\"col\">
                                <h5>
                                <span class=\"col-form-label\" >";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), 'label'));
                echo "</span></h5></div>
                          
                                <span class=\"boltforms-error\">";
                // line 73
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), 'errors'));
                echo "</span></div>
                                          <div class=\"col\">
                            <span class=\"boltforms-value\">";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), 'widget'));
                echo "</span>
                        </div></div>
                           </div></div></div>
                        ";
                // line 78
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "postfix", array(), "any", true, true)) {
                    // line 79
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "postfix", array()));
                    echo "
                        ";
                }
                // line 81
                echo "                    ";
            }
            // line 82
            echo "                                               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["spambot"]->getrecaptcha(($context["recaptcha"] ?? null)));
        echo "

                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 88
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "config", array()), "type", array()), "name", array()) == "submit")) {
                // line 89
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "prefix", array(), "any", true, true)) {
                    // line 90
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "prefix", array()));
                    echo "
                        ";
                }
                // line 92
                echo "                        <div role= \"group\" class=\"btn-group ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
                    echo " btn-";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "class", array()), "html", null, true));
                    echo "-row";
                }
                echo "\">

                            ";
                // line 94
                if ((($this->getAttribute(($context["recaptcha"] ?? null), "type", array()) == "invisible") && $this->getAttribute(($context["recaptcha"] ?? null), "enabled", array()))) {
                    // line 95
                    echo "                                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(                    // line 96
($context["form"] ?? null), $context["key"], array(), "array"), 'widget', array("attr" => array("class" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 100
($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "class", array()) . " g-recaptcha-button"), "data-sitekey" => $this->getAttribute(                    // line 101
($context["recaptcha"] ?? null), "public_key", array()), "data-size" => "invisible", "data-badge" => $this->getAttribute(                    // line 103
($context["recaptcha"] ?? null), "badge_location", array())))));
                    // line 106
                    echo "
                            ";
                } else {
                    // line 108
                    echo "                                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), 'widget'));
                    echo "
                            ";
                }
                // line 110
                echo "              
                        ";
                // line 111
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "postfix", array(), "any", true, true)) {
                    // line 112
                    echo "                            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["key"], array(), "array"), "vars", array()), "attr", array()), "postfix", array()));
                    echo "
                        ";
                }
                // line 114
                echo "                    ";
            }
            // line 115
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_boltforms_js($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boltforms_js"));

        // line 131
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, $this->getAttribute(($context["templates"] ?? null), "js", array())));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/boltforms/templates/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 131,  333 => 130,  325 => 116,  319 => 115,  316 => 114,  310 => 112,  308 => 111,  305 => 110,  299 => 108,  295 => 106,  293 => 103,  292 => 101,  291 => 100,  290 => 96,  288 => 95,  286 => 94,  276 => 92,  270 => 90,  267 => 89,  264 => 88,  260 => 87,  255 => 85,  252 => 84,  245 => 82,  242 => 81,  236 => 79,  234 => 78,  228 => 75,  223 => 73,  218 => 71,  207 => 67,  204 => 66,  198 => 64,  195 => 63,  193 => 62,  185 => 56,  181 => 55,  178 => 54,  172 => 53,  164 => 127,  158 => 124,  155 => 123,  149 => 121,  146 => 120,  143 => 118,  141 => 53,  136 => 51,  131 => 49,  126 => 47,  123 => 46,  117 => 44,  115 => 43,  113 => 42,  110 => 41,  108 => 40,  104 => 39,  100 => 37,  94 => 36,  83 => 32,  77 => 31,  70 => 130,  67 => 129,  65 => 36,  62 => 35,  60 => 31,  56 => 29,  54 => 28,  50 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
 # Passed in variables:
 #   formname        — The form name
 #   form            — The form object
 #   fields          — Field data
 #   result
 #     email         — True when the form has been submitted successfully
 #     contenttype   — True when saving of ContentType was successful
 #     uploads       — True when file uploads were a success
 #   html_pre        — HTML to display before successful submission
 #   html_post       — HTML to display after successful submission
 #   messages        — Arrays of messages by type
 #     info          — \"Informational\" messages
 #     error         — \"Error\" messages
 #     debug         — \"Debug\" messages
 #   webpath         — URI for the default web assets
 #   recaptcha       — reCaptcha values
 #     enabled
 #     label
 #     error_message
 #     error_codes
 #     valid
 #   templates       — Array of templates configured for this form
 #   debug           — True if debug mode is enabled
 #}


{% form_theme form templates.formtheme %}


{% block boltforms_css %}
    {{ include(templates.css) }}

{% endblock boltforms_css %}

{% block boltforms_form %}
                        

        {{ include(templates.messages) }}
        {% import templates.recaptcha as spambot %}

        {% if result.pass('email') %}
            {# If the form is successfully submitted, this block will be displayed #}
            {{ html_post }}
        {% else %}
                        
            {{ html_pre }}

            {{ form_start(form, form_start_param) }}

            {{ form_errors(form) }}

            {% block boltforms_form_fields %}

                {% for key, value in fields  %}
 
        <div class=\"container\">
          <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                 
                    <div class=\"form-group\">
                    {% if value.config.type.name != 'submit' %}
                        {% if form[key].vars.attr.prefix is defined %}
                            {{ form[key].vars.attr.prefix|raw }}
                        {% endif %}

                        <div class=\".col{% if form[key].vars.attr.class is defined %} boltforms-{{ form[key].vars.attr.class }}-row{% endif %}\">
                            
                            <div class=\"col\">
                                <h5>
                                <span class=\"col-form-label\" >{{ form_label(form[key]) }}</span></h5></div>
                          
                                <span class=\"boltforms-error\">{{ form_errors(form[key]) }}</span></div>
                                          <div class=\"col\">
                            <span class=\"boltforms-value\">{{ form_widget(form[key]) }}</span>
                        </div></div>
                           </div></div></div>
                        {% if form[key].vars.attr.postfix is defined %}
                            {{ form[key].vars.attr.postfix|raw }}
                        {% endif %}
                    {% endif %}
                                               
                {% endfor %}

                {{ spambot.recaptcha(recaptcha) }}

                {% for key, value in fields  %}
                    {% if value.config.type.name == 'submit' %}
                        {% if form[key].vars.attr.prefix is defined %}
                            {{ form[key].vars.attr.prefix|raw }}
                        {% endif %}
                        <div role= \"group\" class=\"btn-group {% if form[key].vars.attr.class is defined %} btn-{{ form[key].vars.attr.class }}-row{% endif %}\">

                            {% if recaptcha.type == 'invisible' and recaptcha.enabled %}
                                {{ form_widget(
                                form[key],
                                {
                                    attr:
                                    {
                                        'class': form[key].vars.attr.class ~ ' g-recaptcha-button',
                                        'data-sitekey': recaptcha.public_key,
                                        'data-size': 'invisible',
                                        'data-badge': recaptcha.badge_location
                                    }
                                }
                                ) }}
                            {% else %}
                                {{ form_widget(form[key]) }}
                            {% endif %}
              
                        {% if form[key].vars.attr.postfix is defined %}
                            {{ form[key].vars.attr.postfix|raw }}
                        {% endif %}
                    {% endif %}
                {% endfor %}
                                
            {% endblock boltforms_form_fields %}

            {# This is the CSRF token row and must be included if using CSRF (default) #}
            {% if form._token is defined %}
                {{ form_row(form._token) }}
            {% endif %}

            {{ form_end(form, { 'render_rest': false }) }}

        {% endif %}
    </div>
{% endblock boltforms_form %}

{% block boltforms_js %}
    {{ include(templates.js) }}
{% endblock boltforms_js %}
", "/boltforms/templates/form/form.twig", "");
    }
}
