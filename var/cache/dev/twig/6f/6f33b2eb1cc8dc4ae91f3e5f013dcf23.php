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

/* SeriesFilm/series.html.twig */
class __TwigTemplate_f8c92d86bf8db1139426c09f256f625d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SeriesFilm/series.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "SeriesFilm/series.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        .custom-image-size {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        /* Style pour centrer le contenu au milieu de la page */
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2 class=\"display-4\" style=\"text-align: center\">Top 250 des series les plus suivies</h2>
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "                <div class=\"row mb-4\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
                // line 31
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["series"]);
                foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                    // line 32
                    echo "                            ";
                    $context["image"] = twig_get_attribute($this->env, $this->source, $context["serie"], "primaryImage", [], "any", false, false, false, 32);
                    // line 33
                    echo "                            ";
                    $context["url"] = "https://placehold.co/400";
                    // line 34
                    echo "                            ";
                    $context["width"] = "200";
                    // line 35
                    echo "                            ";
                    $context["height"] = "";
                    // line 36
                    echo "
                            <div class=\"col-md-4 mb-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">

                                        ";
                    // line 41
                    $context["image"] = twig_get_attribute($this->env, $this->source, $context["serie"], "primaryImage", [], "any", false, false, false, 41);
                    // line 42
                    echo "
                                        ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 43, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 44
                        echo "                                            ";
                        if (($context["key"] == "url")) {
                            // line 45
                            echo "                                                ";
                            $context["url"] = $context["value"];
                            // line 46
                            echo "                                            ";
                        }
                        // line 47
                        echo "
                                            ";
                        // line 48
                        if (($context["key"] == "height")) {
                            // line 49
                            echo "                                                ";
                            $context["height"] = $context["value"];
                            // line 50
                            echo "                                            ";
                        }
                        // line 51
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "
                                        ";
                    // line 53
                    $context["titleText"] = twig_get_attribute($this->env, $this->source, $context["serie"], "titleText", [], "any", false, false, false, 53);
                    // line 54
                    echo "                                        <div class=\"card mb-4\">
                                            <img src=\"";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "\" alt=\"Image\" class=\"card-img-top custom-image-size\" width=\"";
                    echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titleText"]) || array_key_exists("titleText", $context) ? $context["titleText"] : (function () { throw new RuntimeError('Variable "titleText" does not exist.', 57, $this->source); })()), "text", [], "any", false, false, false, 57), "html", null, true);
                    echo "</h5>
                                                <h5 class=\"card-title\">Nombre de saisons: ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "nbSaisons", [], "any", false, false, false, 58), "html", null, true);
                    echo "</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>

        ";
        // line 71
        echo "        <div class=\"d-flex justify-content-center\">
            ";
        // line 72
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "SeriesFilm/series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 72,  218 => 71,  214 => 68,  207 => 66,  201 => 65,  188 => 58,  184 => 57,  177 => 55,  174 => 54,  172 => 53,  169 => 52,  163 => 51,  160 => 50,  157 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  143 => 44,  139 => 43,  136 => 42,  134 => 41,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  110 => 31,  106 => 30,  103 => 29,  99 => 28,  89 => 22,  82 => 21,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block style %}
    <style>
        .custom-image-size {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        /* Style pour centrer le contenu au milieu de la page */
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
{% endblock %}

{% block body %}
    {{ parent() }}
    <h2 class=\"display-4\" style=\"text-align: center\">Top 250 des series les plus suivies</h2>
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            {% for row in pagination|batch(10) %}
                <div class=\"row mb-4\">
                    {% for series in row %}
                        {% for serie in series %}
                            {% set image = serie.primaryImage %}
                            {% set url = 'https://placehold.co/400' %}
                            {% set width = '200' %}
                            {% set height = '' %}

                            <div class=\"col-md-4 mb-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">

                                        {% set image = serie.primaryImage %}

                                        {% for key, value in image %}
                                            {% if key == 'url' %}
                                                {% set url = value %}
                                            {% endif %}

                                            {% if key == 'height' %}
                                                {% set height = value %}
                                            {% endif %}
                                        {% endfor %}

                                        {% set titleText = serie.titleText %}
                                        <div class=\"card mb-4\">
                                            <img src=\"{{ url }}\" alt=\"Image\" class=\"card-img-top custom-image-size\" width=\"{{ width }}\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">{{ titleText.text }}</h5>
                                                <h5 class=\"card-title\">Nombre de saisons: {{ serie.nbSaisons }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    {% endfor %}
                </div>
            {% endfor %}
        </div>

        {# Afficher les liens de pagination #}
        <div class=\"d-flex justify-content-center\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}", "SeriesFilm/series.html.twig", "C:\\wamp64\\www\\HDF\\templates\\SeriesFilm\\series.html.twig");
    }
}
