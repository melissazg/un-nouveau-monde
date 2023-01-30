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

/* contact.html.twig */
class __TwigTemplate_b5f9dfd83302b01e043dc0db5f4d9192 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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
    <section class=\"mb-4\">

        <div class=\"container py-4\">

            <!--Section heading-->
            <h2 class=\"h1-responsive font-weight-bold text-center my-4\"> Contactez-nous </h2>

            <!--Section description-->
            <p class=\"text-center w-responsive mx-auto mb-5\"> Avez-vous une question ? N'hésitez pas à nous contacter, notre équipe fera tout son possible pour vous répondre dans les plus brefs délais. </p>

            <!-- Bootstrap 5 starter form -->
            <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">

                <!-- Name input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"name\"> Nom </label>
                    <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Nom\" data-sb-validations=\"required\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\"> Un nom est requis. </div>
                </div>

                <!-- Email address input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"emailAddress\"> Adresse mail </label>
                    <input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"exemple@mail.fr\" data-sb-validations=\"required, email\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:required\"> Un adresse mail est requis. </div>
                    <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:email\"> L'adresse mail n'est pas valide. </div>
                </div>

                <!-- Subject input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"subject\"> Objet </label>
                    <input class=\"form-control\" id=\"subject\" type=\"text\" placeholder=\"Objet\" data-sb-validations=\"required\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"subject:required\"> Un objet est requis. </div>
                </div>

                <!-- Message input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"message\"> Message </label>
                    <textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
                    <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\"> Un message est requis. </div>
                </div>

                <!-- Form submissions success message -->
                <div class=\"d-none\" id=\"submitSuccessMessage\">
                    <div class=\"text-center mb-3\"> Le message a bien été envoyé ! </div>
                </div>

                <!-- Form submissions error message -->
                <div class=\"d-none\" id=\"submitErrorMessage\">
                    <div class=\"text-center text-danger mb-3\"> Erreur lors de l'envoi du message. </div>
                </div>

                <!-- Form submit button -->
                <div class=\"d-grid\">
                    <button class=\"btn btn-primary btn-lg\" id=\"submitButton\" type=\"submit\"> Envoyer </button>
                </div>

            </form>

        </div>

        <!-- SB Forms JS -->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    </section>
    <!--Section: Contact v.2-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends \"base.html.twig\" %}

{% block title %} Un Nouveau Monde {% endblock %}

{% block body %}

    <section class=\"mb-4\">

        <div class=\"container py-4\">

            <!--Section heading-->
            <h2 class=\"h1-responsive font-weight-bold text-center my-4\"> Contactez-nous </h2>

            <!--Section description-->
            <p class=\"text-center w-responsive mx-auto mb-5\"> Avez-vous une question ? N'hésitez pas à nous contacter, notre équipe fera tout son possible pour vous répondre dans les plus brefs délais. </p>

            <!-- Bootstrap 5 starter form -->
            <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">

                <!-- Name input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"name\"> Nom </label>
                    <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Nom\" data-sb-validations=\"required\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\"> Un nom est requis. </div>
                </div>

                <!-- Email address input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"emailAddress\"> Adresse mail </label>
                    <input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"exemple@mail.fr\" data-sb-validations=\"required, email\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:required\"> Un adresse mail est requis. </div>
                    <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:email\"> L'adresse mail n'est pas valide. </div>
                </div>

                <!-- Subject input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"subject\"> Objet </label>
                    <input class=\"form-control\" id=\"subject\" type=\"text\" placeholder=\"Objet\" data-sb-validations=\"required\" />
                    <div class=\"invalid-feedback\" data-sb-feedback=\"subject:required\"> Un objet est requis. </div>
                </div>

                <!-- Message input -->
                <div class=\"mb-3\">
                    <label class=\"form-label mt-4\" for=\"message\"> Message </label>
                    <textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
                    <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\"> Un message est requis. </div>
                </div>

                <!-- Form submissions success message -->
                <div class=\"d-none\" id=\"submitSuccessMessage\">
                    <div class=\"text-center mb-3\"> Le message a bien été envoyé ! </div>
                </div>

                <!-- Form submissions error message -->
                <div class=\"d-none\" id=\"submitErrorMessage\">
                    <div class=\"text-center text-danger mb-3\"> Erreur lors de l'envoi du message. </div>
                </div>

                <!-- Form submit button -->
                <div class=\"d-grid\">
                    <button class=\"btn btn-primary btn-lg\" id=\"submitButton\" type=\"submit\"> Envoyer </button>
                </div>

            </form>

        </div>

        <!-- SB Forms JS -->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    </section>
    <!--Section: Contact v.2-->

{% endblock %}", "contact.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/contact.html.twig");
    }
}
