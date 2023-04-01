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

/* cart/index.html.twig */
class __TwigTemplate_a71f1faff229bcac8ccb771c7aafdb20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Hello CartController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
   <section>
       <h1>Votre panier</h1>
   </section>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Film</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th class=\"text-left\">Actions</th>

            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 31), "prix", [], "any", false, false, false, 31), "html", null, true);
            echo " €</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-end\">";
            // line 33
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 33), "prix", [], "any", false, false, false, 33)), "html", null, true);
            echo " €</td>
                    <td>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #4c84ff, #a45bff); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-plus\"></i>
                        </a>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #FFC107, #9C27B0); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-dash\"></i>
                        </a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "film", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #dc3545, #ff7b84); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-x\"></i>
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " €</td>
            <td>
                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_deleteAll");
        echo "\" class=\"btn btn-danger\">
                    <i class=\"bi bi-cart-x\"></i>
                </a>
            </td>
        </tr>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 58,  176 => 56,  169 => 51,  160 => 47,  149 => 41,  143 => 38,  137 => 35,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  117 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
   <section>
       <h1>Votre panier</h1>
   </section>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Film</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th class=\"text-left\">Actions</th>

            </tr>
        </thead>
        <tbody>
            {% for element in dataPanier %}
                <tr>
                    <td>{{ element.film.name }}</td>
                    <td>{{ element.film.prix }} €</td>
                    <td>{{ element.quantite }}</td>
                    <td class=\"text-end\">{{ element.quantite * element.film.prix }} €</td>
                    <td>
                        <a href=\"{{path(\"cart_add\", {id: element.film.id})}}\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #4c84ff, #a45bff); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-plus\"></i>
                        </a>
                        <a href=\"{{ path(\"cart_remove\", {id: element.film.id})}}\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #FFC107, #9C27B0); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-dash\"></i>
                        </a>
                        <a href=\"{{ path(\"cart_delete\", {id: element.film.id})}}\" class=\"btn\" style=\"background: linear-gradient(to bottom right, #dc3545, #ff7b84); color: #fff; border: none; border-radius: 5px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; transition: background 0.3s;\">
                            <i class=\"bi bi-cart-x\"></i>
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">{{ total }} €</td>
            <td>
                <a href=\"{{path(\"cart_deleteAll\")}}\" class=\"btn btn-danger\">
                    <i class=\"bi bi-cart-x\"></i>
                </a>
            </td>
        </tr>
    </table>
</div>
{% endblock %}
", "cart/index.html.twig", "C:\\laragon\\www\\un-nouveau-monde\\templates\\cart\\index.html.twig");
    }
}
