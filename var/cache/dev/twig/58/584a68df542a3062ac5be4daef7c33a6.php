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

/* SeriesFilm/films.html.twig */
class __TwigTemplate_1550cf7d6f9e253f0223ce45ee27ba9f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SeriesFilm/films.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "SeriesFilm/films.html.twig", 1);
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
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "                <div class=\"row mb-4\">
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
                // line 30
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["films"]);
                foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                    // line 31
                    echo "                            ";
                    $context["image"] = twig_get_attribute($this->env, $this->source, $context["film"], "primaryImage", [], "any", false, false, false, 31);
                    // line 32
                    echo "                            ";
                    $context["url"] = "https://placehold.co/400";
                    // line 33
                    echo "                            ";
                    $context["width"] = "200";
                    echo " ";
                    // line 34
                    echo "                            ";
                    $context["height"] = "";
                    // line 35
                    echo "
                            <div class=\"col-md-4 mb-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">

                                        ";
                    // line 40
                    $context["image"] = twig_get_attribute($this->env, $this->source, $context["film"], "primaryImage", [], "any", false, false, false, 40);
                    // line 41
                    echo "
                                        ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 42, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 43
                        echo "                                            ";
                        if (($context["key"] == "url")) {
                            // line 44
                            echo "                                                ";
                            $context["url"] = $context["value"];
                            // line 45
                            echo "                                            ";
                        }
                        // line 46
                        echo "
                                            ";
                        // line 47
                        if (($context["key"] == "height")) {
                            // line 48
                            echo "                                                ";
                            $context["height"] = $context["value"];
                            // line 49
                            echo "                                            ";
                        }
                        // line 50
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "
                                        ";
                    // line 52
                    $context["titleText"] = twig_get_attribute($this->env, $this->source, $context["film"], "titleText", [], "any", false, false, false, 52);
                    // line 53
                    echo "                                        <div class=\"card mb-4\">
                                            <img src=\"";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "\" alt=\"Image\" class=\"card-img-top custom-image-size\" width=\"";
                    echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titleText"]) || array_key_exists("titleText", $context) ? $context["titleText"] : (function () { throw new RuntimeError('Variable "titleText" does not exist.', 56, $this->source); })()), "text", [], "any", false, false, false, 56), "html", null, true);
                    echo "</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </div>
    </div>

    ";
        // line 70
        echo "    <div class=\"alert\">
        ";
        // line 71
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "SeriesFilm/films.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 71,  215 => 70,  210 => 66,  203 => 64,  197 => 63,  184 => 56,  177 => 54,  174 => 53,  172 => 52,  169 => 51,  163 => 50,  160 => 49,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  139 => 42,  136 => 41,  134 => 40,  127 => 35,  124 => 34,  120 => 33,  117 => 32,  114 => 31,  109 => 30,  105 => 29,  102 => 28,  98 => 27,  89 => 22,  82 => 21,  60 => 4,  53 => 3,  36 => 1,);
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
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            {% for row in pagination|batch(10) %}
                <div class=\"row mb-4\">
                    {% for films in row %}
                        {% for film in films %}
                            {% set image = film.primaryImage %}
                            {% set url = 'https://placehold.co/400' %}
                            {% set width = '200' %} {# Définir la largeur souhaitée ici, par exemple 200 pixels #}
                            {% set height = '' %}

                            <div class=\"col-md-4 mb-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">

                                        {% set image = film.primaryImage %}

                                        {% for key, value in image %}
                                            {% if key == 'url' %}
                                                {% set url = value %}
                                            {% endif %}

                                            {% if key == 'height' %}
                                                {% set height = value %}
                                            {% endif %}
                                        {% endfor %}

                                        {% set titleText = film.titleText %}
                                        <div class=\"card mb-4\">
                                            <img src=\"{{ url }}\" alt=\"Image\" class=\"card-img-top custom-image-size\" width=\"{{ width }}\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">{{ titleText.text }}</h5>
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
    </div>

    {# Afficher les liens de pagination #}
    <div class=\"alert\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endblock %}
", "SeriesFilm/films.html.twig", "C:\\wamp64\\www\\HDF\\templates\\SeriesFilm\\films.html.twig");
    }
}
