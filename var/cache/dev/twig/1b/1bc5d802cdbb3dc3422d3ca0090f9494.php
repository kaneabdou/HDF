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
class __TwigTemplate_b3db1c1e82002294837010436888ba31 extends Template
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

        <div class=\"container\">
                <div>
                        <h1 class=\"alert-heading\">Liste des acteurs</h1>
                </div>
                <div class=\"pagination\">

                                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 13, $this->source); })()), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "                                        <div class=\"row\">
                                                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 16
                echo "                                                    <div class=\"col-md-3\">
                                                            <div class=\"card\">
                                                                <div class=\"card-body\">
                                                                    <h5 class=\"card-title\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryName", [], "any", false, false, false, 19), "html", null, true);
                echo "</h5>
                                                                    <p class=\"card-text\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryProfession", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                                                                    <p class=\"card-subtitle\">Date de naissance :";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "birthYear", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                                                                    ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 22)))) {
                    // line 23
                    echo "                                                                        ";
                    echo twig_var_dump($this->env, $context, ...[twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 23)]);
                    echo "
                                                                        <p class=\"card-subtitle\">Date de décés :";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 24), "html", null, true);
                    echo "</p>
                                                                    ";
                }
                // line 26
                echo "                                                                </div>
                                                            </div>
                                                    </div><br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                                        </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                </div>

                ";
        // line 36
        echo "                <div class=\"alert\">
                        ";
        // line 37
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()));
        echo "
                </div>
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
        return array (  135 => 37,  132 => 36,  127 => 32,  120 => 30,  111 => 26,  106 => 24,  101 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  82 => 16,  78 => 15,  75 => 14,  71 => 13,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
        {{ parent() }}

        <div class=\"container\">
                <div>
                        <h1 class=\"alert-heading\">Liste des acteurs</h1>
                </div>
                <div class=\"pagination\">

                                {% for row in pagination|batch(10) %}
                                        <div class=\"row\">
                                                {% for actor in row %}
                                                    <div class=\"col-md-3\">
                                                            <div class=\"card\">
                                                                <div class=\"card-body\">
                                                                    <h5 class=\"card-title\">{{ actor.primaryName }}</h5>
                                                                    <p class=\"card-text\">{{ actor.primaryProfession }}</p>
                                                                    <p class=\"card-subtitle\">Date de naissance :{{ actor.birthYear }}</p>
                                                                    {% if actor.deathYear is defined and actor.deathYear is not empty %}
                                                                        {{ dump(actor.deathYear) }}
                                                                        <p class=\"card-subtitle\">Date de décés :{{ actor.deathYear }}</p>
                                                                    {% endif %}
                                                                </div>
                                                            </div>
                                                    </div><br>
                                                {% endfor %}
                                        </div>
                                {% endfor %}

                </div>

                {# Afficher les liens de pagination #}
                <div class=\"alert\">
                        {{ knp_pagination_render(pagination) }}
                </div>
        </div>

{% endblock %}

", "Actor/actors.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Actor\\actors.html.twig");
    }
}
