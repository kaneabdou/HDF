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

/* SeriesFilm/all.html.twig */
class __TwigTemplate_42ff68e69efa8f69d4833b3131e10f16 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SeriesFilm/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "SeriesFilm/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "     <style>
         body {
             display: flex;
             justify-content: center;
             align-items: center;
             /*height: 100vh;*/
             margin: 0;
         }

         .container {
             width: 100%;
             max-width: 1200px;
         }

         .titre-films {
             font-size: 24px;
             font-weight: bold;
             text-align: center;
             margin: 20px 0;
         }

         .col-md-4 {
             width: max-content;
             margin: 0 auto;
         }

         .card {
             width: 300px;
         }

         .card-img-top {
             height: 240px;
             object-fit: cover; /* Pour que l'image soit recadrée correctement */
         }

         .card-body {
             text-align: center;
         }
     </style>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
    <div class=\"container\">
        ";
        // line 46
        $this->displayParentBlock("body", $context, $blocks);
        echo " <br><br>
        <h2 class=\"display-4\" style=\"text-align: center\">Films</h2>
        <hr><br>
        <div class=\"row\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 50, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 51
            echo "                <div class=\"col-md-4\" style=\"width: max-content\">
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films", ["genre" => $context["genre"]]), "html", null, true);
            echo "\"><div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "</h5>
                        </div>
                        </div></a>
                </div>

            ";
            // line 59
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59) % 3) == 0)) {
                // line 60
                echo "        </div><div class=\"row\">
            ";
            }
            // line 62
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "SeriesFilm/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 63,  163 => 62,  159 => 60,  157 => 59,  149 => 54,  144 => 52,  141 => 51,  124 => 50,  117 => 46,  113 => 44,  106 => 43,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block style %}
     <style>
         body {
             display: flex;
             justify-content: center;
             align-items: center;
             /*height: 100vh;*/
             margin: 0;
         }

         .container {
             width: 100%;
             max-width: 1200px;
         }

         .titre-films {
             font-size: 24px;
             font-weight: bold;
             text-align: center;
             margin: 20px 0;
         }

         .col-md-4 {
             width: max-content;
             margin: 0 auto;
         }

         .card {
             width: 300px;
         }

         .card-img-top {
             height: 240px;
             object-fit: cover; /* Pour que l'image soit recadrée correctement */
         }

         .card-body {
             text-align: center;
         }
     </style>
 {% endblock %}
{% block body %}

    <div class=\"container\">
        {{ parent() }} <br><br>
        <h2 class=\"display-4\" style=\"text-align: center\">Films</h2>
        <hr><br>
        <div class=\"row\">
            {% for genre in genres %}
                <div class=\"col-md-4\" style=\"width: max-content\">
                    <a href=\"{{ path('films', {genre: genre }) }}\"><div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ genre }}</h5>
                        </div>
                        </div></a>
                </div>

            {% if loop.index % 3 == 0 %}
        </div><div class=\"row\">
            {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SeriesFilm/all.html.twig", "C:\\wamp64\\www\\HDF\\templates\\SeriesFilm\\all.html.twig");
    }
}
