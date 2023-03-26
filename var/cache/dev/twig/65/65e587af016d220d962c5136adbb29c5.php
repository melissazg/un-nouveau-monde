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

/* about.html.twig */
class __TwigTemplate_0f46f353da3a9fc35eb44cddb2e29e71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 1);
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
        echo "    <style>
        p {
            text-align: justify;
        }
    </style>

    <div class=\"container\">
        <div class=\"container py-8 h-100 mt-4\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-14 col-md-10 col-lg-8 col-xl-10\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-8 text-center\">
                            <h1 class=\"mt-4\"> Qui sommes-nous ? </h1>
                            <br>
                            <div class=\"card mb-3\" style=\"max-width: 100%;\">
                                <div class=\"row g-0 text-bg-primary\" style=\"border-radius: 8px;\">
                                    <div class=\"col-md-4 px-2\">
                                        <br>
                                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about/MarieBailleule.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Marie Bailleule\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">Marie Bailleule</h5>
                                            <p>Riche d’une vingtaine d’années dans l’exploitation, c’est avec cœur ouvert que Marie Bailleul épaule et accompagne ce projet pour les lycéens cinéphiles.<br><br>
                                                Son goût et sa passion pour les histoires universelles forment une harmonie d’équipe avec Nicolas. <br><br> L’une se concentrant sur l’histoire qui est racontée sera force de proposition. <br><br>
                                                L’autre se concentrant sur la forme des œuvres aura facilité d’analyse et de programmation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card mb-3\" style=\"max-width: 100%;\">
                                <div class=\"row g-0 text-bg-info\" style=\"border-radius: 8px\">
                                    <div class=\"col-md-4 px-2\">
                                        <br>
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about/NicolasDesole.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Nicolas Desole\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">Nicolas Desole</h5>
                                            <p>Nicolas a fréquenté les ciné-club comme les festivals avec assiduité depuis de nombreuses années.<br><br>
                                                Provenant lui-même de cette école de la vie qu’il poursuit en parallèle de ses études de cinéma, ce projet représente pour lui une quatrième étape. <br><br>
                                                Il a supervisé, créé, accompagné au développement de soirées ou de réunions les cinéphiles spectateurs ou professionnels. <br><br>
                                                C’est avec joie et pour amitié pour sa consœur que Nicolas prépare ce projet avec investissement.<br><br>
                                                Il souhaite faire émerger la partie créative et cinéphiles des programmateurs et se sent proche du secteur même du cinéma. <br><br>
                                                Avec lui il sera facile pour les lycéens de suivre une voie orientée vers l’échange humain dans leur collège cinéphile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title %} Un Nouveau Monde {% endblock %}

{% block body %}
    <style>
        p {
            text-align: justify;
        }
    </style>

    <div class=\"container\">
        <div class=\"container py-8 h-100 mt-4\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-14 col-md-10 col-lg-8 col-xl-10\">
                    <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-8 text-center\">
                            <h1 class=\"mt-4\"> Qui sommes-nous ? </h1>
                            <br>
                            <div class=\"card mb-3\" style=\"max-width: 100%;\">
                                <div class=\"row g-0 text-bg-primary\" style=\"border-radius: 8px;\">
                                    <div class=\"col-md-4 px-2\">
                                        <br>
                                        <img src=\"{{ asset('img/about/MarieBailleule.jpg') }}\" class=\"img-fluid rounded\" alt=\"Marie Bailleule\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">Marie Bailleule</h5>
                                            <p>Riche d’une vingtaine d’années dans l’exploitation, c’est avec cœur ouvert que Marie Bailleul épaule et accompagne ce projet pour les lycéens cinéphiles.<br><br>
                                                Son goût et sa passion pour les histoires universelles forment une harmonie d’équipe avec Nicolas. <br><br> L’une se concentrant sur l’histoire qui est racontée sera force de proposition. <br><br>
                                                L’autre se concentrant sur la forme des œuvres aura facilité d’analyse et de programmation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card mb-3\" style=\"max-width: 100%;\">
                                <div class=\"row g-0 text-bg-info\" style=\"border-radius: 8px\">
                                    <div class=\"col-md-4 px-2\">
                                        <br>
                                        <img src=\"{{ asset('img/about/NicolasDesole.jpg') }}\" class=\"img-fluid rounded\" alt=\"Nicolas Desole\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">Nicolas Desole</h5>
                                            <p>Nicolas a fréquenté les ciné-club comme les festivals avec assiduité depuis de nombreuses années.<br><br>
                                                Provenant lui-même de cette école de la vie qu’il poursuit en parallèle de ses études de cinéma, ce projet représente pour lui une quatrième étape. <br><br>
                                                Il a supervisé, créé, accompagné au développement de soirées ou de réunions les cinéphiles spectateurs ou professionnels. <br><br>
                                                C’est avec joie et pour amitié pour sa consœur que Nicolas prépare ce projet avec investissement.<br><br>
                                                Il souhaite faire émerger la partie créative et cinéphiles des programmateurs et se sent proche du secteur même du cinéma. <br><br>
                                                Avec lui il sera facile pour les lycéens de suivre une voie orientée vers l’échange humain dans leur collège cinéphile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "about.html.twig", "C:\\Users\\ULTRABOOK DELL\\OneDrive - UPEC\\Bureau\\Snowaddict-symfony\\Un_Nouveau_Monde\\templates\\about.html.twig");
    }
}
