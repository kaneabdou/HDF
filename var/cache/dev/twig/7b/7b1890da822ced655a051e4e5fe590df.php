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
class __TwigTemplate_13cb3054b652cef16ec98047e9a4e1ff extends Template
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
                <div class=\"row\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actorsData"]) || array_key_exists("actorsData", $context) ? $context["actorsData"] : (function () { throw new RuntimeError('Variable "actorsData" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 13
            echo "                                <div class=\"col-md-3\">
                                        <div class=\"card\">
                                                <div class=\"card-body\">
                                                        <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryName", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                                                        <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryProfession", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                                                        <p class=\"card-subtitle\">Date de naissance :";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "birthYear", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                                                        ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 19)))) {
                // line 20
                echo "                                                                <p class=\"card-subtitle\">Date de décés :";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "deathYear", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                                                        ";
            }
            // line 22
            echo "                                                </div>
                                        </div>
                                </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </div>
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
        return array (  108 => 26,  99 => 22,  93 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  74 => 13,  70 => 12,  59 => 5,  52 => 4,  35 => 1,);
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
                <div class=\"row\">
                        {% for actor in actorsData %}
                                <div class=\"col-md-3\">
                                        <div class=\"card\">
                                                <div class=\"card-body\">
                                                        <h5 class=\"card-title\">{{ actor.primaryName }}</h5>
                                                        <p class=\"card-text\">{{ actor.primaryProfession }}</p>
                                                        <p class=\"card-subtitle\">Date de naissance :{{ actor.birthYear }}</p>
                                                        {% if actor.deathYear is defined and actor.deathYear is not null %}
                                                                <p class=\"card-subtitle\">Date de décés :{{ actor.deathYear }}</p>
                                                        {% endif %}
                                                </div>
                                        </div>
                                </div>
                        {% endfor %}
                </div>
        </div>

{% endblock %}

", "Actor/actors.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Actor\\actors.html.twig");
    }
}
