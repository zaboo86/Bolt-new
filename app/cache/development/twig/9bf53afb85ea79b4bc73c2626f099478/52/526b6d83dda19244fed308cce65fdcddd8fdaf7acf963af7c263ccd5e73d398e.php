<?php

/* pages/my_tutorials.twig */
class __TwigTemplate_cac9e4b65bfe3d9b00c77c58a3adcb490dc2f36b50e8d5b91a296b484419fd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "pages/my_tutorials.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/my_tutorials.twig"));

        $tags = array("set" => 1, "if" => 1, "setcontent" => 2, "for" => 10);
        $filters = array("escape" => 16, "default" => 17);
        $functions = array("auth" => 1, "auth_has_role" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'setcontent', 'for'),
                array('escape', 'default'),
                array('auth', 'auth_has_role')
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

        $context["auth"] = $this->getAttribute($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->getAuth(), "guid", array());
        $context["guid"] = ($context["auth"] ?? null);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " ";
        if ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Tutor")) {
            // line 2
            echo " ";
            $context['abos'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("abo", array(), $pager, array("guid" => ($context["guid"] ?? null)) );
            echo " ";
            $context['creates'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorials/latest/6", array(), $pager, array("guid" => ($context["guid"] ?? null)) );
            // line 3
            echo "<div class=\"article-list\" style=\"padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"text-center\">Meine Tutorien</h2>
            </div>
        </div>
        ";
            // line 10
            $context['tutorials'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorials", array(), $pager, array("guid" => ($context["guid"] ?? null)) );
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tutorials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
                // line 11
                echo "        <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col\">
                        ";
                // line 15
                if ( !twig_test_empty($this->getAttribute($context["tutorial"], "image", array()))) {
                    // line 16
                    echo "                        <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                    echo "\">
                            <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/";
                    // line 17
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["tutorial"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tutorial"], "image", array()))) : ("")), "html", null, true));
                    echo "\" style=\"margin:0 auto;width:360px;\">
                        </a>
                        ";
                }
                // line 20
                echo "                    </div>
                    <div class=\"col\">
                        <h3 class=\"name\" href=\"";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "title", array()), "html", null, true));
                echo "</h3>
                        <p class=\"description\">";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "excerpt", array()), "html", null, true));
                echo "</p>
                        <div class=\"btn-toolbar\">
                            <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                <a href=\"";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                echo "\">
                                    <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                </a>
                                <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursteilnahme beenden</button>
                                <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                    <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Kurs bearbeiten</button>
                                    <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursauswertung</button>
                                    <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kurs löschen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo " ";
            if ((twig_test_empty(($context["tutorials"] ?? null)) && twig_test_empty(($context["creates"] ?? null)))) {
                // line 42
                echo "        <article role=\"article\" class=\"media\">
            <div class=\"media-content\">
                <div class=\"content\">
                    <p>Sie haben noch keine Tutorials.</p>
                </div>
            </div>
        </article>
        ";
            }
            // line 49
            echo " ";
        } elseif ($this->env->getRuntime('Bolt\Extension\BoltAuth\Auth\Twig\Extension\AuthRuntime')->hasRole("Member")) {
            echo " ";
            $context['tutorialids'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("abo", array(), $pager, array("guid" => ($context["guid"] ?? null)) );
            // line 50
            echo "        <div class=\"article-list\" style=\"padding-bottom:15px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 class=\"text-center\">Meine Tutorien</h2>
                    </div>
                </div>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tutorialids"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tutorialid"]) {
                echo " ";
                $context['tutorials'] = $this->env->getExtension('Bolt\Twig\Extension\BoltExtension')->getStorage()->getContent("tutorials/latest/6", array(), $pager, array("id" => $this->getAttribute($context["tutorialid"], "tutorialid", array())) );
                echo " ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tutorials"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
                    // line 59
                    echo "                <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col\">
                                ";
                    // line 63
                    if ( !twig_test_empty($this->getAttribute($context["tutorial"], "image", array()))) {
                        // line 64
                        echo "                                <a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                        echo "\">
                                    <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/";
                        // line 65
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($context["tutorial"], "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tutorial"], "image", array()))) : ("")), "html", null, true));
                        echo "\" style=\"margin:0 auto;width:360px;\">
                                </a>
                                ";
                    }
                    // line 68
                    echo "                            </div>
                            <div class=\"col\">
                                <h3 class=\"name\" href=\"";
                    // line 70
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "title", array()), "html", null, true));
                    echo "</h3>
                                <p class=\"description\">";
                    // line 71
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "excerpt", array()), "html", null, true));
                    echo "</p>
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                        <a href=\"";
                    // line 74
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "link", array()), "html", null, true));
                    echo "\">
                                            <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                        </a>
                                        <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursteilnahme beenden</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo " ";
                if (twig_test_empty(($context["tutorials"] ?? null))) {
                    // line 85
                    echo "                <article role=\"article\" class=\"media\">
                    <div class=\"media-content\">
                        <div class=\"content\">
                            <p>Sie haben noch keine Tutorials.</p>
                        </div>
                    </div>
                </article>
                ";
                }
                // line 92
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorialid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        } else {
            // line 93
            echo "                <h4>Erstell dir ein Account, um Tutorials und die jeweiligen Fortschritte zu speichern.</h4>
                ";
        }
        // line 94
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/my_tutorials.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 94,  255 => 93,  247 => 92,  237 => 85,  234 => 84,  217 => 74,  211 => 71,  205 => 70,  201 => 68,  195 => 65,  190 => 64,  188 => 63,  182 => 59,  178 => 58,  171 => 57,  162 => 50,  157 => 49,  147 => 42,  144 => 41,  122 => 26,  116 => 23,  110 => 22,  106 => 20,  100 => 17,  95 => 16,  93 => 15,  87 => 11,  81 => 10,  72 => 3,  67 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %} {% set auth=auth().guid %} {% set guid=auth %} {% block main %} {% if auth_has_role('Tutor')
%} {% setcontent abos='abo' where {guid:guid} %} {% setcontent creates = \"tutorials/latest/6\" where {guid:guid} %}
<div class=\"article-list\" style=\"padding-bottom:15px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"text-center\">Meine Tutorien</h2>
            </div>
        </div>
        {% setcontent tutorials= 'tutorials' where {guid :guid } %} {% for tutorial in tutorials %}
        <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col\">
                        {% if tutorial.image is not empty %}
                        <a href=\"{{ tutorial.link }}\">
                            <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/{{ tutorial.image|default() }}\" style=\"margin:0 auto;width:360px;\">
                        </a>
                        {% endif %}
                    </div>
                    <div class=\"col\">
                        <h3 class=\"name\" href=\"{{ tutorial.link }}\">{{ tutorial.title }}</h3>
                        <p class=\"description\">{{ tutorial.excerpt }}</p>
                        <div class=\"btn-toolbar\">
                            <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                <a href=\"{{ tutorial.link }}\">
                                    <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                </a>
                                <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursteilnahme beenden</button>
                                <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                    <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Kurs bearbeiten</button>
                                    <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursauswertung</button>
                                    <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kurs löschen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %} {% if tutorials is empty and creates is empty %}
        <article role=\"article\" class=\"media\">
            <div class=\"media-content\">
                <div class=\"content\">
                    <p>Sie haben noch keine Tutorials.</p>
                </div>
            </div>
        </article>
        {% endif %} {% elseif auth_has_role('Member') %} {% setcontent tutorialids = \"abo\" where {guid: guid} %}
        <div class=\"article-list\" style=\"padding-bottom:15px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 class=\"text-center\">Meine Tutorien</h2>
                    </div>
                </div>
                {% for tutorialid in tutorialids %} {% setcontent tutorials = \"tutorials/latest/6\" where {id: tutorialid.tutorialid} %} {%
                for tutorial in tutorials %}
                <div class=\"row\" style=\"padding-top:15px;padding-bottom:30px;\">
                    <div class=\"col\">
                        <div class=\"row\">
                            <div class=\"col\">
                                {% if tutorial.image is not empty %}
                                <a href=\"{{ tutorial.link }}\">
                                    <img class=\"img-fluid d-block\" src=\"/thumbs/640x480c/2018-06/{{ tutorial.image|default() }}\" style=\"margin:0 auto;width:360px;\">
                                </a>
                                {% endif %}
                            </div>
                            <div class=\"col\">
                                <h3 class=\"name\" href=\"{{ tutorial.link }}\">{{ tutorial.title }}</h3>
                                <p class=\"description\">{{ tutorial.excerpt }}</p>
                                <div class=\"btn-toolbar\">
                                    <div class=\"btn-group\" role=\"group\" style=\"padding:15px;\">
                                        <a href=\"{{ tutorial.link }}\">
                                            <button class=\"btn btn-light\" type=\"button\" style=\"padding-left:11px;margin-left:0px;margin-right:15px;\">Zum Kurs</button>
                                        </a>
                                        <button class=\"btn btn-light\" type=\"button\" style=\"margin-right:15px;\">Kursteilnahme beenden</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %} {% if tutorials is empty %}
                <article role=\"article\" class=\"media\">
                    <div class=\"media-content\">
                        <div class=\"content\">
                            <p>Sie haben noch keine Tutorials.</p>
                        </div>
                    </div>
                </article>
                {% endif %} {% endfor %} {% else %}
                <h4>Erstell dir ein Account, um Tutorials und die jeweiligen Fortschritte zu speichern.</h4>
                {% endif %} {% endblock %}
", "pages/my_tutorials.twig", "");
    }
}
