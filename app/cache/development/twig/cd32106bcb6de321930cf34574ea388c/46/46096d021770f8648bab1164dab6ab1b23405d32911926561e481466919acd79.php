<?php

/* @Auth/authentication/login.twig */
class __TwigTemplate_7b858e3b0f5c14469a2f9a549086aceb1221fe420c7d838cdb84eb90bc74ef8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["twigparent"] ?? null), "@Auth/authentication/login.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Auth/authentication/login.twig"));

        $tags = array("if" => 19, "macro" => 28, "for" => 46);
        $filters = array("keys" => 46);
        $functions = array("form_start" => 30, "form_row" => 32, "form_end" => 37);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'macro', 'for'),
                array('keys'),
                array('form_start', 'form_row', 'form_end')
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

    // line 14
    public function block_login($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 15
        echo "
    <div class=\"container\">
        <div class=\"form-control input-block\">

            ";
        // line 19
        if ($this->getAttribute(($context["providers"] ?? null), "local", array(), "any", true, true)) {
            // line 20
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this, "password_login", array(0 => ($context["form_login_password"] ?? null)), "method"));
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this, "oauth_login", array(0 => ($context["form_login_oauth"] ?? null), 1 => ($context["providers"] ?? null)), "method"));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function getpassword_login($__form_login_password__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form_login_password" => $__form_login_password__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "password_login"));

            // line 29
            echo "    <div class=\"\">
        ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_login_password"] ?? null), 'form_start'));
            echo "
<br>
        ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_login_password"] ?? null), "email", array()), 'row'));
            echo "
        ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_login_password"] ?? null), "password", array()), 'row'));
            echo "

        ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_login_password"] ?? null), "submit", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-block"))));
            echo "

        ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_login_password"] ?? null), 'form_end'));
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

    // line 42
    public function getoauth_login($__form_login_oauth__ = null, $__providers__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form_login_oauth" => $__form_login_oauth__,
            "providers" => $__providers__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "oauth_login"));

            // line 43
            echo "    <div class=\"small-6 columns auth-login-password\">
        ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_login_oauth"] ?? null), 'form_start'));
            echo "

        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["providers"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 47
                echo "            ";
                if (($context["provider"] != "local")) {
                    // line 48
                    echo "                ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form_login_oauth"] ?? null), $context["provider"], array(), "array"), 'row'));
                    echo "
            ";
                }
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
        ";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form_login_oauth"] ?? null), 'form_end'));
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
        return "@Auth/authentication/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 52,  192 => 51,  186 => 50,  180 => 48,  177 => 47,  173 => 46,  168 => 44,  165 => 43,  149 => 42,  128 => 37,  123 => 35,  118 => 33,  114 => 32,  109 => 30,  106 => 29,  91 => 28,  80 => 23,  77 => 22,  71 => 20,  69 => 19,  63 => 15,  57 => 14,  18 => 12,);
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
 #
 #   * twigparent           — string    Template name to inherit from
 #   * form_login_oauth     — FormView  OAuth login form (Symfony\\Component\\Form\\FormView)
 #   * form_login_password  — FormView  Password login form (Symfony\\Component\\Form\\FormView)
 #   * feedback             — Feedback  Informational, error, and debug feedback messages. @see feedback/feedback.twig
 #   * templates            — array
 #     * feedback           — string    Feedback messages template name
 #   * providers            — array     Authentication providers enabled in Auth configuration
 #}
{% extends twigparent %}

{% block login %}

    <div class=\"container\">
        <div class=\"form-control input-block\">

            {% if providers.local is defined %}
                {{ _self.password_login(form_login_password) }}
            {% endif %}

            {{ _self.oauth_login(form_login_oauth, providers) }}
        </div>
    </div>
{% endblock login %}

{% macro password_login(form_login_password) %}
    <div class=\"\">
        {{ form_start(form_login_password) }}
<br>
        {{ form_row(form_login_password.email) }}
        {{ form_row(form_login_password.password) }}

        {{ form_row(form_login_password.submit, {'attr': {'class': 'btn btn-primary btn-block'}}) }}

        {{ form_end(form_login_password) }}
    </div>
{% endmacro %}


{% macro oauth_login(form_login_oauth, providers) %}
    <div class=\"small-6 columns auth-login-password\">
        {{ form_start(form_login_oauth) }}

        {% for provider in providers|keys %}
            {% if provider != 'local' %}
                {{ form_row(form_login_oauth[provider]) }}
            {% endif %}
        {% endfor %}

        {{ form_end(form_login_oauth) }}
    </div>
{% endmacro %}
", "@Auth/authentication/login.twig", "");
    }
}
