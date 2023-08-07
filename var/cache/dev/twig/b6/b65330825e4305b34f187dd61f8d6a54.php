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

/* search/movie.html.twig */
class __TwigTemplate_8b5e236355eb5626750c7f7c1d4ba3ee extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/movie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/movie.html.twig", 1);
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
    <h2 class=\"display-4\" style=\"text-align: center\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " résultats trouvès</h2>
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 28, $this->source); })()), 10));
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
                    echo " ";
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
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
    </div>
    ";
        // line 70
        echo "    <div class=\"d-flex justify-content-center\">
        ";
        // line 71
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 71, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search/movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 71,  218 => 70,  214 => 67,  207 => 65,  201 => 64,  188 => 57,  181 => 55,  178 => 54,  176 => 53,  173 => 52,  167 => 51,  164 => 50,  161 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  143 => 43,  140 => 42,  138 => 41,  131 => 36,  128 => 35,  124 => 34,  121 => 33,  118 => 32,  113 => 31,  109 => 30,  106 => 29,  102 => 28,  94 => 23,  89 => 22,  82 => 21,  60 => 4,  53 => 3,  36 => 1,);
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
    <h2 class=\"display-4\" style=\"text-align: center\">{{ total }} résultats trouvès</h2>
    <br>
    <hr>
    <div class=\"container centered-content\">
        <div class=\"pagination\">
            {% for row in movies|batch(10) %}
                <div class=\"row mb-4\">
                    {% for series in row %}
                        {% for serie in series %}
                            {% set image = serie.primaryImage %}
                            {% set url = 'https://placehold.co/400' %}
                            {% set width = '200' %} {# Définir la largeur souhaitée ici, par exemple 200 pixels #}
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
    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(movies) }}
    </div>
{% endblock %}", "search/movie.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Search\\movie.html.twig");
    }
}
