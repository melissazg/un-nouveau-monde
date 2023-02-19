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

/* _header.html.twig */
class __TwigTemplate_e4c6f688cc6cbd32c7ef919fc534402b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"100\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Nos films</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">À propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
                </li>
            </ul>
            <a href=\"#\" target=\"_blank\" title=\"connexion\"><i class=\"fa-solid fa-right-to-bracket fa-xl\"></i></a>
            <form class=\"d-flex\" style=\"margin-left:20px\">
                <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Rechercher\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\"><i class=\"fa-regular fa-magnifying-glass\"></i></button>
            </form>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <img src=\"{{ asset('img/logo.png') }}\" alt=\"logo\" width=\"100\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Nos films</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">À propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
                </li>
            </ul>
            <a href=\"#\" target=\"_blank\" title=\"connexion\"><i class=\"fa-solid fa-right-to-bracket fa-xl\"></i></a>
            <form class=\"d-flex\" style=\"margin-left:20px\">
                <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Rechercher\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\"><i class=\"fa-regular fa-magnifying-glass\"></i></button>
            </form>
        </div>
    </div>
</nav>", "_header.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/_header.html.twig");
    }
}
