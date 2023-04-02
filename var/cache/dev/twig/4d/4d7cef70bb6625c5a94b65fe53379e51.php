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

/* user/index.html.twig */
class __TwigTemplate_9a8db79986d4daed79b25f68bd63bbb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo " UnNouveauMonde-Profil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "lastName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
        echo "    <div class=\"container\">
        <h1 class=\"mt-4\"></h1>
        <div class=\"container py-8 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-18 col-md-15 col-lg-10 col-xl-10\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-8 text-center\">
                            <br><br>
                            <h1>Profil de ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "firstName", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "lastName", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
                        </div>
                        <table class=\"table-borderless mt-3\" align=\"center\">
                            <tr>
                                <td class=\"p-2\">Nom</td>
                                <td class=\"p-2\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "lastName", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Prénom</td>
                                <td class=\"p-2\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "firstName", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Email</td>
                                <td class=\"p-2\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Adresse</td>
                                <td class=\"p-2\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "address", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Numéro de téléphone</td>
                                <td class=\"p-2\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "telephoneNumber", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Lycée</td>
                                <td class=\"p-2\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "highSchool", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                            </tr>
                        </table>
                        <br>
                        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        echo " class=\"btn blue\">Modifier le profil</a>
                        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        echo " class=\"btn blue\">Modifier le mot de passe</a>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 44,  154 => 43,  147 => 39,  140 => 35,  133 => 31,  126 => 27,  119 => 23,  112 => 19,  102 => 14,  92 => 6,  82 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} UnNouveauMonde-Profil de {{ app.user.firstName }} {{ app.user.lastName }} {% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-4\"></h1>
        <div class=\"container py-8 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-18 col-md-15 col-lg-10 col-xl-10\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-8 text-center\">
                            <br><br>
                            <h1>Profil de {{ app.user.firstName }} {{ app.user.lastName }}</h1>
                        </div>
                        <table class=\"table-borderless mt-3\" align=\"center\">
                            <tr>
                                <td class=\"p-2\">Nom</td>
                                <td class=\"p-2\">{{ app.user.lastName }}</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Prénom</td>
                                <td class=\"p-2\">{{ app.user.firstName}}</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Email</td>
                                <td class=\"p-2\">{{ app.user.email }}</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Adresse</td>
                                <td class=\"p-2\">{{ app.user.address }}</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Numéro de téléphone</td>
                                <td class=\"p-2\">{{ app.user.telephoneNumber }}</td>
                            </tr>
                            <tr>
                                <td class=\"p-2\">Lycée</td>
                                <td class=\"p-2\">{{ app.user.highSchool }}</td>
                            </tr>
                        </table>
                        <br>
                        <a href=\"{{ path('app_user_edit',{ 'id': app.user.id }) }}\" {{ app.user.id }} class=\"btn blue\">Modifier le profil</a>
                        <a href=\"{{ path('app_user_edit_password',{ 'id': app.user.id })}}\" {{ app.user.id }} class=\"btn blue\">Modifier le mot de passe</a>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/index.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/user/index.html.twig");
    }
}
