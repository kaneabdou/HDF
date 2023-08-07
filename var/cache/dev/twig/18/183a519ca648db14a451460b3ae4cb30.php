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

/* Actor/actorDetails.html.twig */
class __TwigTemplate_53092cde490919342f8bd30b99db8803 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Actor/actorDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Actor/actorDetails.html.twig", 1);
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
             margin: 10px 0;
         }

         .col-md-4 {
             width: max-content;
             margin: 0 auto;
         }

         .card {
             width: 300px;
         }

         .card-img-top {
             height: 180px;
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
        echo "    <div class=\"container\">
    ";
        // line 45
        $this->displayParentBlock("body", $context, $blocks);
        echo " <br><br>
    <div class=\"row\">
        <h6 class=\"display-4\" style=\"float: left\"><b style=\"color: red\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 47, $this->source); })()), "primaryName", [], "any", false, false, false, 47), "html", null, true);
        echo "</b> a participé au(x) film(s) suivant(s)</h6>
        <hr>
        <br>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTitle"]) || array_key_exists("listTitle", $context) ? $context["listTitle"] : (function () { throw new RuntimeError('Variable "listTitle" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 51
            echo "            ";
            $context["image"] = twig_get_attribute($this->env, $this->source, $context["title"], "primaryImage", [], "any", false, false, false, 51);
            // line 52
            echo "            ";
            $context["url"] = "https://placehold.co/400";
            // line 53
            echo "            ";
            $context["width"] = "";
            // line 54
            echo "            ";
            $context["height"] = "";
            // line 55
            echo "
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 57
                echo "            ";
                if (($context["key"] == "url")) {
                    // line 58
                    echo "                ";
                    $context["url"] = $context["value"];
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "
            ";
                // line 61
                if (($context["key"] == "width")) {
                    // line 62
                    echo "                ";
                    $context["width"] = $context["value"];
                    // line 63
                    echo "            ";
                }
                // line 64
                echo "
            ";
                // line 65
                if (($context["key"] == "height")) {
                    // line 66
                    echo "                ";
                    $context["height"] = $context["value"];
                    // line 67
                    echo "            ";
                }
                // line 68
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    <div class=\"col-md-4\" style=\"width: max-content\">
        <div class=\"card mb-4\">
            <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "\" alt=\"Image\" class=\"card-img-top\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["title"], "titleText", [], "any", false, false, false, 73), "text", [], "any", false, false, false, 73), "html", null, true);
            echo "</h5>
            </div>
            <div class=\"card-body\">
                Genre <h5 class=\"card-title\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["title"], "titleType", [], "any", false, false, false, 76), "text", [], "any", false, false, false, 76), "html", null, true);
            echo "</h5>
            </div>
        </div>
    </div>

    ";
            // line 82
            echo "    ";
            // line 83
            echo "    ";
            // line 84
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Actor/actorDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 85,  214 => 84,  212 => 83,  210 => 82,  202 => 76,  196 => 73,  191 => 71,  187 => 69,  181 => 68,  178 => 67,  175 => 66,  173 => 65,  170 => 64,  167 => 63,  164 => 62,  162 => 61,  159 => 60,  156 => 59,  153 => 58,  150 => 57,  146 => 56,  143 => 55,  140 => 54,  137 => 53,  134 => 52,  131 => 51,  127 => 50,  121 => 47,  116 => 45,  113 => 44,  106 => 43,  60 => 3,  53 => 2,  36 => 1,);
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
             margin: 10px 0;
         }

         .col-md-4 {
             width: max-content;
             margin: 0 auto;
         }

         .card {
             width: 300px;
         }

         .card-img-top {
             height: 180px;
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
    <div class=\"row\">
        <h6 class=\"display-4\" style=\"float: left\"><b style=\"color: red\">{{ infos.primaryName }}</b> a participé au(x) film(s) suivant(s)</h6>
        <hr>
        <br>
        {% for title in listTitle %}
            {% set image = title.primaryImage %}
            {% set url = 'https://placehold.co/400' %}
            {% set width = '' %}
            {% set height = '' %}

        {% for key, value in image %}
            {% if key == 'url' %}
                {% set url = value %}
            {% endif %}

            {% if key == 'width' %}
                {% set width = value %}
            {% endif %}

            {% if key == 'height' %}
                {% set height = value %}
            {% endif %}
        {% endfor %}
    <div class=\"col-md-4\" style=\"width: max-content\">
        <div class=\"card mb-4\">
            <img src=\"{{ url }}\" alt=\"Image\" class=\"card-img-top\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ title.titleText.text }}</h5>
            </div>
            <div class=\"card-body\">
                Genre <h5 class=\"card-title\">{{ title.titleType.text }}</h5>
            </div>
        </div>
    </div>

    {#{% if loop.index % 2 == 0 %}#}
    {#    </div><div class=\"row\">#}
    {#    {% endif %}#}
        {% endfor %}
    </div>
    </div>
{% endblock %}

", "Actor/actorDetails.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Actor\\actorDetails.html.twig");
    }
}
