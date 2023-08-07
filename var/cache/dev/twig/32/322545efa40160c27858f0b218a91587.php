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

/* Home/home.html.twig */
class __TwigTemplate_278c4219a8b040fb373e52f019437674 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/home.html.twig", 1);
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
        echo "<style>
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
        <h2 class=\"display-4\" style=\"text-align: center\">Les tops 10 Films à venir</h2>
        <hr><br>
        <div class=\"row\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["upComingTitle"]) || array_key_exists("upComingTitle", $context) ? $context["upComingTitle"] : (function () { throw new RuntimeError('Variable "upComingTitle" does not exist.', 50, $this->source); })()));
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
                echo "                ";
                if (($context["key"] == "url")) {
                    // line 58
                    echo "                    ";
                    $context["url"] = $context["value"];
                    // line 59
                    echo "                ";
                }
                // line 60
                echo "
                ";
                // line 61
                if (($context["key"] == "width")) {
                    // line 62
                    echo "                    ";
                    $context["width"] = $context["value"];
                    // line 63
                    echo "                ";
                }
                // line 64
                echo "
                ";
                // line 65
                if (($context["key"] == "height")) {
                    // line 66
                    echo "                    ";
                    $context["height"] = $context["value"];
                    // line 67
                    echo "                ";
                }
                // line 68
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
            <div class=\"col-md-4\" style=\"width: max-content\">
                <div class=\"card mb-4\">
                    <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\" alt=\"Image\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["title"], "titleText", [], "any", false, false, false, 74), "text", [], "any", false, false, false, 74), "html", null, true);
            echo "</h5>
                        <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>

            ";
            // line 80
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80) % 3) == 0)) {
                // line 81
                echo "        </div><div class=\"row\">
            ";
            }
            // line 83
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 84,  222 => 83,  218 => 81,  216 => 80,  207 => 74,  202 => 72,  197 => 69,  191 => 68,  188 => 67,  185 => 66,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  172 => 61,  169 => 60,  166 => 59,  163 => 58,  160 => 57,  156 => 56,  153 => 55,  150 => 54,  147 => 53,  144 => 52,  141 => 51,  124 => 50,  117 => 46,  113 => 44,  106 => 43,  60 => 3,  53 => 2,  36 => 1,);
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
        <h2 class=\"display-4\" style=\"text-align: center\">Les tops 10 Films à venir</h2>
        <hr><br>
        <div class=\"row\">
            {% for title in upComingTitle %}
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
                        <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>

            {% if loop.index % 3 == 0 %}
        </div><div class=\"row\">
            {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "Home/home.html.twig", "C:\\wamp64\\www\\HDF\\templates\\Home\\home.html.twig");
    }
}
