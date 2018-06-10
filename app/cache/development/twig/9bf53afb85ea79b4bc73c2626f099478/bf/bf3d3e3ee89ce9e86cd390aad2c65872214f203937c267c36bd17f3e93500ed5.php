<?php

/* search.twig */
class __TwigTemplate_32576bd6281107cee0e21a33bf41401e1c7ff428ecdea2d45411a9639ad1d641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "search.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.twig"));

        $tags = array("setcontent" => 12, "if" => 14, "for" => 30);
        $filters = array("escape" => 16, "default" => 37);
        $functions = array("path" => 19, "__" => 20, "pager" => 65);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('setcontent', 'if', 'for'),
                array('escape', 'default'),
                array('path', '__', 'pager')
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "<section class=\"section section-listing\">
    <div class=\"article-list\" style=\"padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h2 class=\"text-left\">Deine Suche ergab folgende Ergebnisse:</h2>
                </div>
            </div>
            <div class=\"container\">
                ";
        // line 12
        $context['block'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("block/search-teaser", array() );
        echo " 
                ";
        // line 13
        echo " 
                ";
        // line 14
        if ($this->getAttribute(($context["block"] ?? null), "content", array(), "any", true, true)) {
            // line 15
            echo "                <div class=\"content\">
                    ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                ";
        }
        // line 19
        echo "                <form class=\"field has-addons\" method=\"get\" action=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search"));
        echo "\" enctype=\"text/plain\">
                    <input class=\"d-inline-block search-input\" value=\"";
        // line 20
        if (array_key_exists("search", $context)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, ($context["search"] ?? null)));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\AdminRuntime')->trans("general.phrase.search-ellipsis"));
        echo "\"
                        type=\"search\" name=\"search\" placeholder=\"Finde Tutorien\" autocomplete=\"off\" style=\"width:400px;margin-left:auto;margin-right:6px;\">
                    <button class=\"btn btn-light d-inline-block search-btn\" type=\"submit\" style=\"margin-right:0;margin-left:0;padding:10px;width:46px;height:46px;margin-bottom:3px;\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </form>
            </div>
</section>
<section class=\"section section-listing\">
    <div class=\"container\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 31
            echo "        <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col\">
                        ";
            // line 35
            if ( !twig_test_empty($this->getAttribute($context["record"], "image", array()))) {
                // line 36
                echo "                        <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true));
                echo "\">
                            <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["record"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["record"], "image", array()))) : ("")), "html", null, true));
                echo "\" style=\"margin:0 auto;width:360px;\">
                        </a>
                        ";
            }
            // line 40
            echo "                    </div>
                    <div class=\"col\">
                        <h3 class=\"title\">
                            <a href=\"";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true));
            echo "</a>
                        </h3>
                        <p class=\"description\">";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300, 1 => false, 2 => ((array_key_exists("search", $context)) ? (_twig_default_filter(($context["search"] ?? null), "")) : (""))), "method"), "html", null, true));
            echo "</p>
                        <div class=\"btn-toolbar\">
                            <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true));
            echo "\">
                                    <button class=\"btn btn-light\" href=\"";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true));
            echo "\" type=\"submit\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "        <article role=\"article\" class=\"media\">
            <div class=\"media-content\">
                <div class=\"content\">
                    <p>Es konnte leider nichts gefunden werden.</p>
                </div>
            </div>
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getRuntime('Bolt\Twig\Runtime\RecordRuntime')->pager($this->env, "", 4, "partials/_sub_pager.twig"));
        echo "
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  175 => 58,  161 => 49,  157 => 48,  151 => 45,  144 => 43,  139 => 40,  133 => 37,  128 => 36,  126 => 35,  120 => 31,  115 => 30,  98 => 20,  93 => 19,  87 => 16,  84 => 15,  82 => 14,  79 => 13,  75 => 12,  64 => 3,  58 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %} 
{% block main %}
<section class=\"section section-listing\">
    <div class=\"article-list\" style=\"padding-bottom:15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h2 class=\"text-left\">Deine Suche ergab folgende Ergebnisse:</h2>
                </div>
            </div>
            <div class=\"container\">
                {% setcontent block = \"block/search-teaser\" %} 
                {# check if we have 'content'. If so, we know we have have a teaser to display. #} 
                {% if block.content is defined %}
                <div class=\"content\">
                    {{ block.content }}
                </div>
                {% endif %}
                <form class=\"field has-addons\" method=\"get\" action=\"{{ path('search') }}\" enctype=\"text/plain\">
                    <input class=\"d-inline-block search-input\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __('general.phrase.search-ellipsis') }}\"
                        type=\"search\" name=\"search\" placeholder=\"Finde Tutorien\" autocomplete=\"off\" style=\"width:400px;margin-left:auto;margin-right:6px;\">
                    <button class=\"btn btn-light d-inline-block search-btn\" type=\"submit\" style=\"margin-right:0;margin-left:0;padding:10px;width:46px;height:46px;margin-bottom:3px;\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </form>
            </div>
</section>
<section class=\"section section-listing\">
    <div class=\"container\">
        {% for record in records %}
        <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col\">
                        {% if record.image is not empty %}
                        <a href=\"{{ record.link }}\">
                            <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/{{ record.image|default() }}\" style=\"margin:0 auto;width:360px;\">
                        </a>
                        {% endif %}
                    </div>
                    <div class=\"col\">
                        <h3 class=\"title\">
                            <a href=\"{{ record.link }}\">{{ record.title }}</a>
                        </h3>
                        <p class=\"description\">{{ record.excerpt(300, false, search|default('')) }}</p>
                        <div class=\"btn-toolbar\">
                            <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                <a href=\"{{ record.link }}\">
                                    <button class=\"btn btn-light\" href=\"{{ record.link }}\" type=\"submit\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <article role=\"article\" class=\"media\">
            <div class=\"media-content\">
                <div class=\"content\">
                    <p>Es konnte leider nichts gefunden werden.</p>
                </div>
            </div>
        </article>
        {% endfor %} {{ pager(template = 'partials/_sub_pager.twig') }}
    </div>
</section>
{% endblock main %}
", "search.twig", "");
    }
}
