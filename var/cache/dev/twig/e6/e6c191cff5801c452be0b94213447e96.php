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

/* base.html.twig */
class __TwigTemplate_8861282b8449a5168930fb3e4c3cbd6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=path\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('style', $context, $blocks);
        // line 11
        echo "</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"/\">Accueil
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series");
        echo "\">Series</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre");
        echo "\">Films</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actors");
        echo "\">Acteurs</a>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\"  placeholder=\"recherche\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_movie");
        echo "\">Recherche</button>
                </form>
            </div>
        </div>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  146 => 30,  140 => 27,  134 => 24,  122 => 14,  115 => 13,  102 => 10,  89 => 9,  81 => 7,  74 => 6,  65 => 41,  63 => 13,  59 => 11,  56 => 10,  53 => 9,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=path\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css\" rel=\"stylesheet\">
    {% endblock %}
    {% block title %}  {% endblock title %}
    {% block style %} {% endblock %}
</head>
<body>
{% block body %}
    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"/\">Accueil
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"{{ path('series') }}\">Series</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('genre') }}\">Films</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('actors') }}\">Acteurs</a>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\"  placeholder=\"recherche\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" href=\"{{ path('search_movie') }}\">Recherche</button>
                </form>
            </div>
        </div>
    </nav>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\HDF\\templates\\base.html.twig");
    }
}
