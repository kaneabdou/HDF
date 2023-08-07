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
class __TwigTemplate_5a2f81eea011cc39e4c7ee05d10657af extends Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 54
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

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Home
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Series</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Films</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actors");
        echo "\">Acteurs</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                        </div>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
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
        return array (  127 => 33,  105 => 13,  98 => 12,  85 => 9,  77 => 7,  70 => 6,  61 => 54,  59 => 12,  55 => 10,  52 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css\" rel=\"stylesheet\">
    {% endblock %}
    {% block title %}  {% endblock title %}
</head>
<body>
{% block body %}
    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Home
                            <span class=\"visually-hidden\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Series</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Films</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('actors') }}\">Acteurs</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                        </div>
                    </li>
                </ul>
                <form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </div>
    </nav>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\HDF\\templates\\base.html.twig");
    }
}
