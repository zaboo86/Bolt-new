<?php

/* @bolt/login/login.twig */
class __TwigTemplate_7febaf22ca3cb318897496baab49f9b92c12aaea9038b3a146cff4bac6a91de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@bolt/_base/_page-no_nav.twig", "@bolt/login/login.twig", 2);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'form_start' => array($this, 'block_form_start'),
            'button_icon' => array($this, 'block_button_icon'),
            '_user_login_username_widget' => array($this, 'block__user_login_username_widget'),
            '_user_login_password_widget' => array($this, 'block__user_login_password_widget'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/login/login.twig"));

        $tags = array("set" => 6, "form_theme" => 8, "if" => 15);
        $filters = array("escape" => 24);
        $functions = array("__" => 4, "form_start" => 48, "form_widget" => 50, "form_end" => 66);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'form_theme', 'if'),
                array('escape'),
                array('__', 'form_start', 'form_widget', 'form_end')
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

        // line 6
        $context["form_class"] = "col-sm-12 login-block center-block";
        // line 7
        $context["form"] = $this->getAttribute(($context["context"] ?? null), "form", array());
        // line 8
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "form_bolt_layout.twig", 1 => $this));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.login.title"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 11
        $this->loadTemplate("form_div_layout.html.twig", "@bolt/login/login.twig", 11)->displayBlock("form_start", $context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_button_icon($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_icon"));

        // line 15
        echo "    ";
        if ((($context["name"] ?? null) == "login")) {
            // line 16
            echo "        <i class=\"fa fa-sign-in fa-fw\"></i>&nbsp;
    ";
        } elseif ((        // line 17
($context["name"] ?? null) == "reset")) {
            // line 18
            echo "        <i class=\"fa fa-envelope-o\"></i>&nbsp;
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block__user_login_username_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_login_username_widget"));

        // line 23
        echo "<div class=\"form-group\">
        <label for=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" class=\"control-label\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</label>
        <div class=\"input-group\">
            <label for=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i></label>
            <input id=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" name=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true));
        echo "\" class=\"form-control\" type=\"text\" autofocus name=\"username\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "placeholder", array()), "html", null, true));
        echo " …\" value=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
        echo "\" required>
        </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block__user_login_password_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_login_password_widget"));

        // line 33
        echo "<div class=\"form-group password-group\">
        <label for=\"password\" class=\"control-label\">
            ";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
            <span class=\"togglepass show-password\"><i class=\"fa fa-fw fa-eye\"></i> ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.login.password-show"));
        echo "</span>
            <span class=\"togglepass hide-password\"><i class=\"fa fa-fw fa-eye-slash\"></i> ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.login.password-hide"));
        echo "</span>
        </label>
        <div class=\"input-group\">
            <label for=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i></label>
            <input id=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true));
        echo "\" name=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true));
        echo "\" class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "placeholder", array()), "html", null, true));
        echo " …\" required>
        </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 47
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "submitspinner"))));
        echo "

    ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget'));
        echo "
    ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'widget'));
        echo "

    <p class=\"login-group\">
    ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login", array()), 'widget'));
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "forgot", array()), 'widget', array("attr" => array("class" => "btn-link login-forgot"))));
        echo "
    </p>
    <p class=\"reset-group\">
    ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reset", array()), 'widget'));
        echo "
    ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "back", array()), 'widget', array("attr" => array("class" => "btn-link login-remembered"))));
        echo "
    </p>

    <p class=\"cookie-notice alert alert-danger\">
    ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("page.login.cookies-required"));
        echo "
    </p>

    ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end'));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 66,  241 => 63,  234 => 59,  230 => 58,  224 => 55,  220 => 54,  214 => 51,  210 => 50,  205 => 48,  202 => 47,  196 => 46,  182 => 41,  178 => 40,  172 => 37,  168 => 36,  164 => 35,  160 => 33,  154 => 32,  138 => 27,  134 => 26,  127 => 24,  124 => 23,  118 => 22,  109 => 18,  107 => 17,  104 => 16,  101 => 15,  95 => 14,  88 => 11,  82 => 10,  70 => 4,  63 => 2,  61 => 8,  59 => 7,  57 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: Login #}
{% extends '@bolt/_base/_page-no_nav.twig' %}

{% block page_title __('page.login.title') %}

{% set form_class = 'col-sm-12 login-block center-block' %}
{% set form = context.form %}
{% form_theme form with ['form_bolt_layout.twig', _self] %}

{% block form_start -%}
    {{- block('form_start', 'form_div_layout.html.twig') -}}
{%- endblock form_start %}

{% block button_icon %}
    {% if name == 'login' %}
        <i class=\"fa fa-sign-in fa-fw\"></i>&nbsp;
    {% elseif name == 'reset' %}
        <i class=\"fa fa-envelope-o\"></i>&nbsp;
    {% endif %}
{% endblock %}

{%- block _user_login_username_widget -%}
    <div class=\"form-group\">
        <label for=\"{{ id }}\" class=\"control-label\">{{ label }}</label>
        <div class=\"input-group\">
            <label for=\"{{ id }}\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i></label>
            <input id=\"{{ id }}\" name=\"{{ full_name }}\" class=\"form-control\" type=\"text\" autofocus name=\"username\" placeholder=\"{{ attr.placeholder }} …\" value=\"{{ value }}\" required>
        </div>
    </div>
{%- endblock -%}

{%- block _user_login_password_widget -%}
    <div class=\"form-group password-group\">
        <label for=\"password\" class=\"control-label\">
            {{ label }}
            <span class=\"togglepass show-password\"><i class=\"fa fa-fw fa-eye\"></i> {{ __('page.login.password-show') }}</span>
            <span class=\"togglepass hide-password\"><i class=\"fa fa-fw fa-eye-slash\"></i> {{ __('page.login.password-hide') }}</span>
        </label>
        <div class=\"input-group\">
            <label for=\"{{ id }}\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i></label>
            <input id=\"{{ id }}\" name=\"{{ full_name }}\" class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"{{ attr.placeholder }} …\" required>
        </div>
    </div>
{%- endblock -%}

{% block page_main %}

    {{ form_start(form, {'attr': {'class': 'submitspinner'}}) }}

    {{ form_widget(form.username) }}
    {{ form_widget(form.password) }}

    <p class=\"login-group\">
    {{ form_widget(form.login) }}
    {{ form_widget(form.forgot, {'attr': {'class': 'btn-link login-forgot'}}) }}
    </p>
    <p class=\"reset-group\">
    {{ form_widget(form.reset) }}
    {{ form_widget(form.back, {'attr': {'class': 'btn-link login-remembered'}}) }}
    </p>

    <p class=\"cookie-notice alert alert-danger\">
    {{ __('page.login.cookies-required') }}
    </p>

    {{ form_end(form) }}

{% endblock page_main %}
", "@bolt/login/login.twig", "");
    }
}
