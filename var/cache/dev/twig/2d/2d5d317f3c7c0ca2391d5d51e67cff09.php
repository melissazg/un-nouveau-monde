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

/* manager/index.html.twig */
class __TwigTemplate_bb1606aebede6a40f2c5c06ee0588c9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manager/index.html.twig", 1);
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

        echo " Un nouveau monde - Film manager

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container mt-4\">
        ";
        // line 11
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 11, $this->source); })()), "items", [], "any", false, false, false, 11) === [])) {
            // line 12
            echo "        <h1>Liste de films</h1>
            <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film.new");
            echo "\" class=\"btn btn-primary\">
                Ajouter un film
            </a>
        <div class=\"count mt-4\">
            <h4>
            Il y a ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 18, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 18), "html", null, true);
            echo " films au total actuellement
            </h4>
        </div>

        <table class=\"table table-hover mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Réalisateur</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Durée</th>
                <th scope=\"col\">Genre</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Acteurs principaux</th>
                <th scope=\"col\">Mixdrop link</th>
                <th scope=\"col\">Edition</th>
                <th scole=\"col\">Suppression</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 40
                echo "            <tr class=\"table-info\">
                <th scope=\"row\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "</th>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "realisateur", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "duree", [], "any", false, false, false, 45), "H:i:s"), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "genre", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "date", [], "any", false, false, false, 47), "d-m-Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "acteursPrincipaux", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "iframePath", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-info\"> Modifier</a></td>
                <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-warning\"> Supprimer</a></td>

            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center mt-4\">
            ";
            // line 58
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 58, $this->source); })()));
            echo "
        </div>
        ";
        } else {
            // line 61
            echo "        <h4>Il n'y a pas de films</h4>
        ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "manager/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 63,  198 => 61,  192 => 58,  187 => 55,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  149 => 44,  145 => 43,  141 => 42,  137 => 41,  134 => 40,  130 => 39,  106 => 18,  98 => 13,  95 => 12,  93 => 11,  90 => 10,  80 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Un nouveau monde - Film manager

{% endblock %}



{% block body %}
    <div class=\"container mt-4\">
        {% if not films.items is same as([]) %}
        <h1>Liste de films</h1>
            <a href=\"{{ path('film.new') }}\" class=\"btn btn-primary\">
                Ajouter un film
            </a>
        <div class=\"count mt-4\">
            <h4>
            Il y a {{ films.getTotalItemCount }} films au total actuellement
            </h4>
        </div>

        <table class=\"table table-hover mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Réalisateur</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Durée</th>
                <th scope=\"col\">Genre</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Acteurs principaux</th>
                <th scope=\"col\">Mixdrop link</th>
                <th scope=\"col\">Edition</th>
                <th scole=\"col\">Suppression</th>
            </tr>
            </thead>
            <tbody>
            {% for film in films %}
            <tr class=\"table-info\">
                <th scope=\"row\">{{ film.id }}</th>
                <td>{{ film.name }}</td>
                <td>{{ film.realisateur }}</td>
                <td>{{ film.description }}</td>
                <td>{{ film.duree | date('H:i:s') }}</td>
                <td>{{ film.genre }}</td>
                <td>{{ film.date | date('d-m-Y') }}</td>
                <td>{{ film.acteursPrincipaux }}</td>
                <td>{{ film.iframePath }}</td>
                <td><a href=\"{{ path('film.edit', {id: film.id}) }}\" class=\"btn btn-info\"> Modifier</a></td>
                <td><a href=\"{{ path('film.delete', {id: film.id}) }}\" class=\"btn btn-warning\"> Supprimer</a></td>

            </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"navigation d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(films) }}
        </div>
        {% else %}
        <h4>Il n'y a pas de films</h4>
        {% endif %}
    </div>
{% endblock %}
", "manager/index.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/manager/index.html.twig");
    }
}
