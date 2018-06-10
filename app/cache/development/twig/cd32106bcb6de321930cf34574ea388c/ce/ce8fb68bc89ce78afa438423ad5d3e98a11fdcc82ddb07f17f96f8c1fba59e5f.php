<?php

/* @bolt/dashboard/_recently_edited.twig */
class __TwigTemplate_ce14d95d6f846cd869815da7898f5eb94a0b9e34989f027fb448360bcfc75ed5 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_recently_edited.twig"));

        $tags = array("if" => 1, "for" => 15, "set" => 16);
        $filters = array("first" => 1, "escape" => 4);
        $functions = array("path" => 4, "__" => 5, "include" => 11, "csrf_token" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('first', 'escape'),
                array('path', '__', 'include', 'csrf_token')
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
        if ( !$this->getAttribute($this->getAttribute(twig_first($this->env, ($context["multiplecontent"] ?? null)), "contenttype", array()), "singleton", array())) {
            // line 2
            echo "<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" => $this->getAttribute(($context["contenttype"] ?? null), "slug", array()))), "html", null, true));
            echo "\" class=\"morelink\">
                ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.show-more", array("%contenttypes%" => $this->getAttribute(($context["contenttype"] ?? null), "name", array()))));
            echo " »
            </a>
        </span>
        <h3>";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("contenttypes.generic.recently-edited", array("%contenttypes%" => $this->getAttribute(($context["contenttype"] ?? null), "name", array()))));
            echo "</h3>
</div>

";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig"));
            echo "

<div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["contenttype"] ?? null), "slug", array()), "html", null, true));
            echo "\" data-contenttype-name=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, ($context["multiplecontent"] ?? null)), "contenttype", array()), "singular_name", array()), "html", null, true));
            echo "\" data-bolt_csrf_token=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("bolt"), "html", null, true));
            echo "\">
    <table class=\"table dashboardlisting listing\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["multiplecontent"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 16
                echo "            ";
                $context["listing_vars"] = array("compact" => true, "content" =>                 // line 18
$context["content"], "excerptlength" => 280, "permissions" => $this->getAttribute($this->getAttribute(                // line 20
($context["context"] ?? null), "permissions", array()), ($context["contenttype_key"] ?? null), array(), "array"), "thumbsize" => 54);
                // line 23
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, array(0 => (("@bolt/custom/listing/" . $this->getAttribute($this->getAttribute($context["content"], "contenttype", array()), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig"), ($context["listing_vars"] ?? null)));
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </table>
</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_recently_edited.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  104 => 23,  102 => 20,  101 => 18,  99 => 16,  82 => 15,  73 => 13,  68 => 11,  62 => 8,  56 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not multiplecontent|first.contenttype.singleton %}
<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"{{ path('overview', {'contenttypeslug': contenttype.slug}) }}\" class=\"morelink\">
                {{ __('contenttypes.generic.show-more', {'%contenttypes%': contenttype.name}) }} »
            </a>
        </span>
        <h3>{{ __('contenttypes.generic.recently-edited', {'%contenttypes%': contenttype.name}) }}</h3>
</div>

{{ include('@bolt/_sub/_record_list_data.twig') }}

<div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"{{ contenttype.slug }}\" data-contenttype-name=\"{{ multiplecontent|first.contenttype.singular_name }}\" data-bolt_csrf_token=\"{{ csrf_token('bolt') }}\">
    <table class=\"table dashboardlisting listing\">
        {% for content in multiplecontent %}
            {% set listing_vars = {
                'compact':       true,
                'content':       content,
                'excerptlength': 280,
                'permissions':   context.permissions[contenttype_key],
                'thumbsize':     54,
            } %}
            {{ include(['@bolt/custom/listing/' ~ content.contenttype.slug ~ '.twig', '@bolt/_sub/_listing.twig'],  listing_vars) }}
        {% endfor %}
    </table>
</div>
{% endif %}
", "@bolt/dashboard/_recently_edited.twig", "");
    }
}
