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

/* connexion.html.twig */
class __TwigTemplate_71208155695ea2692ebc0ce0e784ba55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " UnNouveauMonde-Connexion ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"vh-100 gradient-custom\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">

                            <div class=\"mb-md-5 mt-md-2 pb-5\">

                                <h2 class=\"fw-bold mb-2 text-uppercase\">Connexion</h2>
                                <p class=\"text-white-50 mb-5\">Entrer votre identifiant et votre mot de passe !</p>

                                <div class=\"form-outline form-white mb-3\">
                                    <label class=\"form-label\" for=\"Mail\">Email</label>
                                    <input type=\"email\" id=\"Mail\" class=\"form-control form-control-lg\"
                                    name=\"_Mail\"
                                    />

                                </div>

                                <div class=\"form-outline form-white mb-3\">
                                    <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                    <input type=\"password\" id=\"password\" class=\"form-control form-control-lg\"
                                    name=\"_password\"
                                    />

                                </div>

                                <p class=\"small mb-3 pb-lg-2\"><a class=\"text-white-50\" href=\"#!\">Mot de passe oublié?</a></p>

                                <button class=\"btn btn-outline-light btn-lg px-7\" type=\"submit\">Se Connecter</button>

                                <div class=\"d-flex justify-content-center text-center mt-2 pt-1\">
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-facebook-f fa-lg\"></i></a>
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-twitter fa-lg mx-4 px-2\"></i></a>
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-google fa-lg\"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class=\"mb-0\">Vous n'avez pas de compte? <a href=\"#!\" class=\"text-white-50 fw-bold\">Inscription</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}
{% block title %} UnNouveauMonde-Connexion {% endblock %}
{% block body %}
    <section class=\"vh-100 gradient-custom\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">

                            <div class=\"mb-md-5 mt-md-2 pb-5\">

                                <h2 class=\"fw-bold mb-2 text-uppercase\">Connexion</h2>
                                <p class=\"text-white-50 mb-5\">Entrer votre identifiant et votre mot de passe !</p>

                                <div class=\"form-outline form-white mb-3\">
                                    <label class=\"form-label\" for=\"Mail\">Email</label>
                                    <input type=\"email\" id=\"Mail\" class=\"form-control form-control-lg\"
                                    name=\"_Mail\"
                                    />

                                </div>

                                <div class=\"form-outline form-white mb-3\">
                                    <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                    <input type=\"password\" id=\"password\" class=\"form-control form-control-lg\"
                                    name=\"_password\"
                                    />

                                </div>

                                <p class=\"small mb-3 pb-lg-2\"><a class=\"text-white-50\" href=\"#!\">Mot de passe oublié?</a></p>

                                <button class=\"btn btn-outline-light btn-lg px-7\" type=\"submit\">Se Connecter</button>

                                <div class=\"d-flex justify-content-center text-center mt-2 pt-1\">
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-facebook-f fa-lg\"></i></a>
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-twitter fa-lg mx-4 px-2\"></i></a>
                                    <a href=\"#!\" class=\"text-white\"><i class=\"fab fa-google fa-lg\"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class=\"mb-0\">Vous n'avez pas de compte? <a href=\"#!\" class=\"text-white-50 fw-bold\">Inscription</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "connexion.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/connexion.html.twig");
    }
}
