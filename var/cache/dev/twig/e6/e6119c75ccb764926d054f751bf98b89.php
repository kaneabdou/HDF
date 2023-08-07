<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Actor/actors.html.twig */
class __TwigTemplate_ee3125ec0161bf0eb83bc2e6715d968c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Actor/actors.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Actor/actors.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"pagination\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <h1 class=\"alert-heading\">Liste des acteurs</h1>
                    </div>
                    <div class=\"col-12\">
                        <hr>
                    </div>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 17
                echo "                        <div class=\"col-md-3 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    ";
                // line 20
                $context["professions"] = twig_get_attribute($this->env, $this->source, $context["actor"], "primaryProfession", [], "any", false, false, false, 20);
                // line 21
                echo "                                    <h5 class=\"card-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryName", [], "any", false, false, false, 21), "html", null, true);
                echo "</h5>
                                    <p class=\"card-subtitle\">Date de naissance :";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "birthYear", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
                                    ";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", true, true, false, 23) && $this->extensions['App\Extensions\CustomTwigExtension']->isInteger(twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 23)))) {
                    // line 24
                    echo "
                                        <p class=\"card-subtitle\">Date de décès :";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 25), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 27
                echo "                                    <p class=\"card-subtitle\">Profession(s):</p>
                                    <ul>
                                        ";
                // line 29
                $context["professions"] = twig_split_filter($this->env, (isset($context["professions"]) || array_key_exists("professions", $context) ? $context["professions"] : (function () { throw new RuntimeError('Variable "professions" does not exist.', 29, $this->source); })()), ",");
                // line 30
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["professions"]) || array_key_exists("professions", $context) ? $context["professions"] : (function () { throw new RuntimeError('Variable "professions" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["profession"]) {
                    // line 31
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, twig_trim_filter($context["profession"]), "html", null, true);
                    echo "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profession'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                                    </ul>
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actor", ["id" => twig_get_attribute($this->env, $this->source, $context["actor"], "nconst", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" style=\"text-align: center\" class=\"btn btn-primary\">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
    </div>

    ";
        // line 45
        echo "    <div class=\"alert\">
        ";
        // line 46
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Actor/actors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 46,  156 => 45,  151 => 41,  144 => 39,  133 => 34,  130 => 33,  121 => 31,  116 => 30,  114 => 29,  110 => 27,  105 => 25,  102 => 24,  100 => 23,  96 => 22,  91 => 21,  89 => 20,  84 => 17,  80 => 16,  71 => 9,  67 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"pagination\">
            {% for row in pagination|batch(10) %}
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <h1 class=\"alert-heading\">Liste des acteurs</h1>
                    </div>
                    <div class=\"col-12\">
                        <hr>
                    </div>
                    {% for actor in row %}
                        <div class=\"col-md-3 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    {% set professions = actor.primaryProfession %}
                                    <h5 class=\"card-title\">{{ actor.primaryName }}</h5>
                                    <p class=\"card-subtitle\">Date de naissance :{{ actor.birthYear }}</p>
                                    {% if actor.deathYear is defined and is_integer(actor.deathYear)  %}

                                        <p class=\"card-subtitle\">Date de décès :{{ actor.deathYear }}</p>
                                    {% endif %}
                                    <p class=\"card-subtitle\">Profession(s):</p>
                                    <ul>
                                        {% set professions = professions|split(',') %}
                                        {% for profession in professions %}
                                            <li>{{ profession|trim }}</li>
                                        {% endfor %}
                                    </ul>
                                    <a href=\"{{ path('actor', {id: actor.nconst}) }}\" style=\"text-align: center\" class=\"btn btn-primary\">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    </div>

    {# Afficher les liens de pagination #}
    <div class=\"alert\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endblock %}
", "Actor/actors.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Actor\\actors.html.twig");
    }
}
