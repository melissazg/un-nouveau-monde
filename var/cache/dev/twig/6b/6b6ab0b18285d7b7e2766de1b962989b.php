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

/* partners.html.twig */
class __TwigTemplate_ceca992ba8aa0fa566a2d28cb36c5d82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partners.html.twig", 1);
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
        echo "
    <div class=\"container\" style=\"width: 30%\">
        <h1 class=\"mt-4 text-center\"> Nos partenaires </h1>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lycees_partenaires/lycee_henriIV.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Lycée Henri IV\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Henri IV</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lycees_partenaires/lycee_simoneveil.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Lycée Simone Veil\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Simone Veil</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lycees_partenaires/lycee_vieljeux.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Lycée Vieiljeux\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Vieljeux</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/lycees_partenaires/lycee_des_metiers.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Lycée des métiers\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée des métiers</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  121 => 31,  108 => 21,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title %} Un Nouveau Monde {% endblock %}

{% block body %}

    <div class=\"container\" style=\"width: 30%\">
        <h1 class=\"mt-4 text-center\"> Nos partenaires </h1>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"{{ asset('img/lycees_partenaires/lycee_henriIV.jpg') }}\" class=\"img-fluid rounded\" alt=\"Lycée Henri IV\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Henri IV</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"{{ asset('img/lycees_partenaires/lycee_simoneveil.png') }}\" class=\"img-fluid rounded\" alt=\"Lycée Simone Veil\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Simone Veil</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"{{ asset('img/lycees_partenaires/lycee_vieljeux.png') }}\" class=\"img-fluid rounded\" alt=\"Lycée Vieiljeux\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée Vieljeux</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
        <div class=\"col\">
            <div class=\"card\">
                <img src=\"{{ asset('img/lycees_partenaires/lycee_des_metiers.png') }}\" class=\"img-fluid rounded\" alt=\"Lycée des métiers\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Lycée des métiers</h5>
                    <p class=\"card-text\">Une description ?</p>
                </div>
            </div>
        </div>
    <br>
    </div>

{% endblock %}", "partners.html.twig", "C:\\laragon\\www\\un-nouveau-monde\\templates\\partners.html.twig");
    }
}
