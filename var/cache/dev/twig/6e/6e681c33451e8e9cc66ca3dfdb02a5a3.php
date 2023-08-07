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

/* actors.html.twig */
class __TwigTemplate_904ef7a009c0e8b5233d83fcb7dec0d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actors.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Acteurs</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body>
<h1 class=\"\">Liste des acteurs</h1>
<ul>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actorsData"]) || array_key_exists("actorsData", $context) ? $context["actorsData"] : (function () { throw new RuntimeError('Variable "actorsData" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 14
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "primaryName", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "actors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  57 => 14,  53 => 13,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/actors.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <title>Acteurs</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.1/dist/cerulean/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body>
<h1 class=\"\">Liste des acteurs</h1>
<ul>

    {% for actor in actorsData %}
        <li>{{ actor.primaryName }}</li>
    {% endfor %}
</ul>
</body>
</html>
", "actors.html.twig", "C:\\wamp64\\www\\HDF\\templates\\actors.html.twig");
    }
}
