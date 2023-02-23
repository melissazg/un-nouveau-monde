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

/* home.html.twig */
class __TwigTemplate_98cc1815d14b146c348a34cae0757bed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Un Nouveau Monde ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container text-center\">
        <h1 class=\"mt-4\"> Bienvenue ! </h1>
        <p> Dans ce nouveau monde, la lumière naît dans le coeur des hommes et des femmes et sert de projecteurs face à l'écran. </p>
        <p> Venez découvrir les productions de nos talentueux réalisateurs ! </p>
    </div>
    <br>
    <div class=\"container\" style=\"width: 30%\">
        <div class=\"card\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/NicolasDesole.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Réalisateur 1\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Réalisateur 1</h5>
                <p class=\"card-text\">Courte description</p>
                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
        <br><br>
        <div class=\"card\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/MarieBailleule.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Réalisateur 2\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Réalisateur 2</h5>
                <p class=\"card-text\">Courte description</p>
                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
    </div>
    <br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title %} Un Nouveau Monde {% endblock %}

{% block body %}
    <div class=\"container text-center\">
        <h1 class=\"mt-4\"> Bienvenue ! </h1>
        <p> Dans ce nouveau monde, la lumière naît dans le coeur des hommes et des femmes et sert de projecteurs face à l'écran. </p>
        <p> Venez découvrir les productions de nos talentueux réalisateurs ! </p>
    </div>
    <br>
    <div class=\"container\" style=\"width: 30%\">
        <div class=\"card\">
            <img src=\"{{ asset('img/NicolasDesole.jpg') }}\" class=\"card-img-top\" alt=\"Réalisateur 1\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Réalisateur 1</h5>
                <p class=\"card-text\">Courte description</p>
                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
        <br><br>
        <div class=\"card\">
            <img src=\"{{ asset('img/MarieBailleule.jpg') }}\" class=\"card-img-top\" alt=\"Réalisateur 2\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Réalisateur 2</h5>
                <p class=\"card-text\">Courte description</p>
                <a href=\"#\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
    </div>
    <br>

{% endblock %}", "home.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/home.html.twig");
    }
}
