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

/* Contact.html.twig */
class __TwigTemplate_b6952f842c72578f5273b55c6b10ad1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact.html.twig"));

        // line 1
        echo "<!--Section: Contact v.2-->
<section class=\"mb-4\">

    <div class=\"container py-4\">

        <!--Section heading-->
        <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contactez-nous</h2>

        <!--Section description-->
        <p class=\"text-center w-responsive mx-auto mb-5\">Avez-vous une question ? N'hésitez pas à nous contacter, notre équipe fera tout son possible pour vous répondre dans les plus brefs délais.</p>

        <!-- Bootstrap 5 starter form -->
        <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">

            <!-- Name input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"name\">Nom</label>
                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Nom\" data-sb-validations=\"required\" />
                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">Un nom est requis.</div>
            </div>

            <!-- Email address input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"emailAddress\">Adresse mail</label>
                <input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"exemple@mail.fr\" data-sb-validations=\"required, email\" />
                <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:required\">Un adresse mail est requis.</div>
                <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:email\">L'adresse mail n'est pas valide.</div>
            </div>

            <!-- Message input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"message\">Message</label>
                <textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">Un message est requis.</div>
            </div>

            <!-- Form submissions success message -->
            <div class=\"d-none\" id=\"submitSuccessMessage\">
                <div class=\"text-center mb-3\">Le message a bien été envoyé !</div>
            </div>

            <!-- Form submissions error message -->
            <div class=\"d-none\" id=\"submitErrorMessage\">
                <div class=\"text-center text-danger mb-3\">Erreur lors de l'envoi du message.</div>
            </div>

            <!-- Form submit button -->
            <div class=\"d-grid\">
                <button class=\"btn btn-primary btn-lg\" id=\"submitButton\" type=\"submit\">Envoyer</button>
            </div>

        </form>

    </div>

    <!-- SB Forms JS -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
</section>
<!--Section: Contact v.2-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Section: Contact v.2-->
<section class=\"mb-4\">

    <div class=\"container py-4\">

        <!--Section heading-->
        <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contactez-nous</h2>

        <!--Section description-->
        <p class=\"text-center w-responsive mx-auto mb-5\">Avez-vous une question ? N'hésitez pas à nous contacter, notre équipe fera tout son possible pour vous répondre dans les plus brefs délais.</p>

        <!-- Bootstrap 5 starter form -->
        <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">

            <!-- Name input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"name\">Nom</label>
                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Nom\" data-sb-validations=\"required\" />
                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">Un nom est requis.</div>
            </div>

            <!-- Email address input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"emailAddress\">Adresse mail</label>
                <input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"exemple@mail.fr\" data-sb-validations=\"required, email\" />
                <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:required\">Un adresse mail est requis.</div>
                <div class=\"invalid-feedback\" data-sb-feedback=\"emailAddress:email\">L'adresse mail n'est pas valide.</div>
            </div>

            <!-- Message input -->
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"message\">Message</label>
                <textarea class=\"form-control\" id=\"message\" type=\"text\" placeholder=\"Message\" style=\"height: 10rem;\" data-sb-validations=\"required\"></textarea>
                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">Un message est requis.</div>
            </div>

            <!-- Form submissions success message -->
            <div class=\"d-none\" id=\"submitSuccessMessage\">
                <div class=\"text-center mb-3\">Le message a bien été envoyé !</div>
            </div>

            <!-- Form submissions error message -->
            <div class=\"d-none\" id=\"submitErrorMessage\">
                <div class=\"text-center text-danger mb-3\">Erreur lors de l'envoi du message.</div>
            </div>

            <!-- Form submit button -->
            <div class=\"d-grid\">
                <button class=\"btn btn-primary btn-lg\" id=\"submitButton\" type=\"submit\">Envoyer</button>
            </div>

        </form>

    </div>

    <!-- SB Forms JS -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
</section>
<!--Section: Contact v.2-->", "Contact.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/Contact.html.twig");
    }
}
