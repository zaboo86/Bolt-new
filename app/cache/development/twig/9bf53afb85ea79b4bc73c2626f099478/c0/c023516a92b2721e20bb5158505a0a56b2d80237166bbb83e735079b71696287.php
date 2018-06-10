<?php

/* @bolt/_macro/_files_path.twig */
class __TwigTemplate_c250809c4c12496bc60f25493b75c7f4a532b082bf84edeaf9b79c41dadc11c6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_files_path.twig"));

        $tags = array("macro" => 1, "set" => 3, "for" => 5, "if" => 7);
        $filters = array("merge" => 3, "default" => 3, "reverse" => 5, "escape" => 8);
        $functions = array("path" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'set', 'for', 'if'),
                array('merge', 'default', 'reverse', 'escape'),
                array('path')
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getfiles_path($__directory__ = null, $__pathoptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "directory" => $__directory__,
            "pathoptions" => $__pathoptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "files_path"));

            // line 3
            $context["pathoptions"] = twig_array_merge(((array_key_exists("pathoptions", $context)) ? (_twig_default_filter(($context["pathoptions"] ?? null), array())) : (array())), array("namespace" => $this->getAttribute(($context["directory"] ?? null), "mountPoint", array())));
            // line 4
            echo "<h3>";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_reverse_filter($this->env, $this->getAttribute(($context["directory"] ?? null), "parents", array())), array(0 => ($context["directory"] ?? null))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
                // line 7
                if (( !$this->getAttribute($context["loop"], "last", array()) || $this->getAttribute($context["loop"], "first", array()))) {
                    // line 8
                    echo "<a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", twig_array_merge(($context["pathoptions"] ?? null), array("path" => $this->getAttribute($context["dir"], "path", array())))), "html", null, true));
                    echo "\" style=\"font-weight: inherit\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["dir"], "filename", array())) ? ($this->getAttribute($context["dir"], "filename", array())) : ($this->getAttribute($context["dir"], "mountPoint", array()))), "html", null, true));
                    echo "</a>";
                    // line 9
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed((($this->getAttribute($context["loop"], "first", array())) ? ("://") : ("/")));
                } else {
                    // line 11
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["dir"], "filename", array())) ? ($this->getAttribute($context["dir"], "filename", array())) : ($this->getAttribute($context["dir"], "mountPoint", array()))), "html", null, true));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</h3>";
            
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
        return "@bolt/_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  99 => 11,  96 => 9,  90 => 8,  88 => 7,  71 => 5,  69 => 4,  67 => 3,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro files_path(directory, pathoptions) -%}
    {# directory \\Bolt\\Filesystem\\Handler\\DirectoryInterface #}
    {%- set pathoptions = pathoptions|default({})|merge({'namespace': directory.mountPoint}) -%}
    <h3>
        {%- for dir in directory.parents|reverse|merge([directory]) -%}
            {# dir \\Bolt\\Filesystem\\Handler\\DirectoryInterface #}
            {%- if not loop.last or loop.first -%}
                <a href=\"{{ path('files', pathoptions|merge({'path': dir.path})) }}\" style=\"font-weight: inherit\">{{ dir.filename ?: dir.mountPoint }}</a>
                {{- loop.first ? '://' : '/' -}}
            {%- else -%}
                {{- dir.filename ?: dir.mountPoint -}}
            {% endif %}
        {%- endfor -%}
    </h3>
{%- endmacro %}
", "@bolt/_macro/_files_path.twig", "");
    }
}
