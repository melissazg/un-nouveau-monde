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

/* catalogue/index.html.twig */
class __TwigTemplate_a4358e0ec344e4f5ef54697aec81036f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/index.html.twig", 1);
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

        echo "Catalogue";
        
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
        echo "    <style>
        .example-wrapper { padding: 20px 20px 20px 20px; max-width: 100%; width: 100%; font: 18px/1.5 sans-serif; background-color: #f0ebeb;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        <h1>Catalogue de film d'animation</h1>
        <div style=\"display: flex;flex-wrap: nowrap;\">
        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\" style=\"width:85%\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" style=\"width:15%; background-color: darkred;\">Search</button>
        </div>
        <ul>
            <div style=\"display: flex;flex-wrap: nowrap;\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 20
            echo "                <div class=\"card\" style=\"width: 18rem; height: 20rem; margin: 20px 20px 20px 20px; color:white; background-color: #3c0e0e\">
                    <img class=\"card-img-top\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "imagePath", [], "any", false, false, false, 21));
            echo "\" alt=\"\" style=\"height: 50%;\">
                    <div class=\"card-body\" style=\"height:50%;\">
                        <h5 class=\"card-title\" style=\"height:30%; font-weight: bold;font-size: 25px;text-align: center;\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 23));
            echo "</h5>
                        <p class=\"card-text\" style=\"height:20%;\">Note moyenne : 5</p>
                        <a href=\"#\" class=\"btn btn-primary\" style=\"height:30%;color:white; background-color:darkred;text-align: center;\">Go watch</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  115 => 23,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue{% endblock %}

{% block body %}
    <style>
        .example-wrapper { padding: 20px 20px 20px 20px; max-width: 100%; width: 100%; font: 18px/1.5 sans-serif; background-color: #f0ebeb;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        <h1>Catalogue de film d'animation</h1>
        <div style=\"display: flex;flex-wrap: nowrap;\">
        <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\" style=\"width:85%\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\" style=\"width:15%; background-color: darkred;\">Search</button>
        </div>
        <ul>
            <div style=\"display: flex;flex-wrap: nowrap;\">
            {% for film in films %}
                <div class=\"card\" style=\"width: 18rem; height: 20rem; margin: 20px 20px 20px 20px; color:white; background-color: #3c0e0e\">
                    <img class=\"card-img-top\" src=\"{{ film.imagePath|e }}\" alt=\"\" style=\"height: 50%;\">
                    <div class=\"card-body\" style=\"height:50%;\">
                        <h5 class=\"card-title\" style=\"height:30%; font-weight: bold;font-size: 25px;text-align: center;\">{{ film.name|e }}</h5>
                        <p class=\"card-text\" style=\"height:20%;\">Note moyenne : 5</p>
                        <a href=\"#\" class=\"btn btn-primary\" style=\"height:30%;color:white; background-color:darkred;text-align: center;\">Go watch</a>
                    </div>
                </div>
            {% endfor %}
            </div>
        </ul>
    </div>
{% endblock %}
", "catalogue/index.html.twig", "C:\\Users\\ULTRABOOK DELL\\OneDrive - UPEC\\Bureau\\Snowaddict-symfony\\Un_Nouveau_Monde\\templates\\catalogue\\index.html.twig");
    }
}
