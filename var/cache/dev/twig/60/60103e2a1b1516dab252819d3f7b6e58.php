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
class __TwigTemplate_2e096d1b22915f2d7bcc474763f037a2 extends Template
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
        .example-wrapper { padding: 20px 20px; max-width: 100%; width: 100%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { padding: 2px 6px; }
    </style>
    <div class=\"example-wrapper\">
        <h1 style=\"text-align: center;\">Catalogue de film d'animation</h1>
        <div style=\"display: flex;flex-wrap: nowrap;\">
            <div class=\"container custom-container mt-3\" >
                <div class=\"row\">
                    <div class=\"col-12\">
                        <form class=\"form-inline mb-3\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_catalogue");
        echo "\" method=\"get\">
                            <div class=\"input-group\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "query", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control mr-2", "placeholder" => "Search"]]);
        echo "
                                <div class=\"input-group-append\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "submit", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "btn btn-primary", "style" => "background-color: deepskyblue;"]]);
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul>
            <div style=\"display: flex;flex-wrap: wrap; justify-content: center;\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 32
            echo "                <div class=\"card\" style=\"width: 20rem; height: 25rem; margin-top: 20px; margin-bottom: 20px; margin-right: 20px; color:white; background-color: #441b71\">
                    <img class=\"card-img-top\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "imagePath", [], "any", false, false, false, 33));
            echo "\" alt=\"\" style=\"height: 50%;\">
                    <div class=\"card-body\" style=\"height:50%;\">
                        <h5 class=\"card-title\" style=\"height:30%; font-weight: bold;font-size: 25px;text-align: center;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 35));
            echo "</h5>
                        <p class=\"card-text\" style=\"height:20%;\">Note moyenne : 10</p>
                        <a href=\"/public/player/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 37));
            echo "\" class=\"btn btn-primary\" style=\"height:35%;color:white; background-color:deepskyblue;text-align: center;\">Go watch</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  151 => 41,  141 => 37,  136 => 35,  131 => 33,  128 => 32,  124 => 31,  110 => 20,  105 => 18,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue{% endblock %}

{% block body %}
    <style>
        .example-wrapper { padding: 20px 20px; max-width: 100%; width: 100%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { padding: 2px 6px; }
    </style>
    <div class=\"example-wrapper\">
        <h1 style=\"text-align: center;\">Catalogue de film d'animation</h1>
        <div style=\"display: flex;flex-wrap: nowrap;\">
            <div class=\"container custom-container mt-3\" >
                <div class=\"row\">
                    <div class=\"col-12\">
                        <form class=\"form-inline mb-3\" action=\"{{ url('app_catalogue') }}\" method=\"get\">
                            <div class=\"input-group\">
                                {{ form_widget(form.query, {'attr': {'class': 'form-control mr-2', 'placeholder': 'Search'}}) }}
                                <div class=\"input-group-append\">
                                    {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary', 'style': 'background-color: deepskyblue;'}}) }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul>
            <div style=\"display: flex;flex-wrap: wrap; justify-content: center;\">
            {% for film in films %}
                <div class=\"card\" style=\"width: 20rem; height: 25rem; margin-top: 20px; margin-bottom: 20px; margin-right: 20px; color:white; background-color: #441b71\">
                    <img class=\"card-img-top\" src=\"{{ film.imagePath|e }}\" alt=\"\" style=\"height: 50%;\">
                    <div class=\"card-body\" style=\"height:50%;\">
                        <h5 class=\"card-title\" style=\"height:30%; font-weight: bold;font-size: 25px;text-align: center;\">{{ film.name|e }}</h5>
                        <p class=\"card-text\" style=\"height:20%;\">Note moyenne : 10</p>
                        <a href=\"/public/player/{{ film.id|e }}\" class=\"btn btn-primary\" style=\"height:35%;color:white; background-color:deepskyblue;text-align: center;\">Go watch</a>
                    </div>
                </div>
            {% endfor %}
            </div>
        </ul>
    </div>
{% endblock %}
", "catalogue/index.html.twig", "C:\\laragon\\www\\un-nouveau-monde\\templates\\catalogue\\index.html.twig");
    }
}
