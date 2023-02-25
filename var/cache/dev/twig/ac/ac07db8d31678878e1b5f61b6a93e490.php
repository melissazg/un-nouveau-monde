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

/* security/login.html.twig */
class __TwigTemplate_048a582b9722be9da0bd09684223f4d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "<section class=\"vh-100 gradient-custom\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                <div class=\"card bg-dark text-white\" style=\"border-radius: 1rem;\">
                    <div class=\"card-body p-5 text-center\">

                        <div class=\"mb-md-5 mt-md-2 pb-5\">

                            <h2 class=\"fw-bold mb-2 text-uppercase\">Connexion</h2>
                            <p class=\"text-white-50 mb-5\">Entrer votre identifiant et votre mot de passe !</p>
                                <form method=\"post\">
                                    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 21
        echo "
                                    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                        <div class=\"mb-3\">
                                            You are logged in as ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "userIdentifier", [], "any", false, false, false, 24), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                        </div>
                                    ";
        }
        // line 27
        echo "
                                    <div class=\"form-outline form-white mb-3\">
                                        <label class=\"form-label\" for=\"username\">Email</label>
                                        <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" id=\"inputEmail\" class=\"form-control form-control-lg\"
                                               name=\"email\"
                                               placeholder=\"exemple@exemple.fr\"
                                               autocomplete=\"email\" required autofocus
                                        />

                                    </div>

                                    <div class=\"form-outline form-white mb-3\">
                                        <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                        <input type=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"
                                               name=\"password\"
                                               placeholder=\"********\"
                                               autocomplete=\"current-password\" required
                                        />

                                    </div>

                                    <p class=\"small mb-3 pb-lg-2\"><a class=\"text-white-50\" href=\"#!\">Mot de passe oublié?</a></p>

                                    <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
                                        Me connecter
                                    </button>



                                    </div>

                                    <div>
                                        <p class=\"mb-0\">Vous n'avez pas de compte? <a href=";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription.index");
        echo " class=\"text-white-50 fw-bold\">Inscription</a>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                    >
                                </form>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 61,  163 => 59,  131 => 30,  126 => 27,  118 => 24,  115 => 23,  113 => 22,  110 => 21,  104 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Un Nouveau Monde {% endblock %}

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
                                <form method=\"post\">
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"mb-3\">
                                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                        </div>
                                    {% endif %}

                                    <div class=\"form-outline form-white mb-3\">
                                        <label class=\"form-label\" for=\"username\">Email</label>
                                        <input type=\"email\" value=\"{{ last_username }}\" id=\"inputEmail\" class=\"form-control form-control-lg\"
                                               name=\"email\"
                                               placeholder=\"exemple@exemple.fr\"
                                               autocomplete=\"email\" required autofocus
                                        />

                                    </div>

                                    <div class=\"form-outline form-white mb-3\">
                                        <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                        <input type=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"
                                               name=\"password\"
                                               placeholder=\"********\"
                                               autocomplete=\"current-password\" required
                                        />

                                    </div>

                                    <p class=\"small mb-3 pb-lg-2\"><a class=\"text-white-50\" href=\"#!\">Mot de passe oublié?</a></p>

                                    <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
                                        Me connecter
                                    </button>



                                    </div>

                                    <div>
                                        <p class=\"mb-0\">Vous n'avez pas de compte? <a href={{path('inscription.index')}} class=\"text-white-50 fw-bold\">Inscription</a>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"{{ csrf_token('authenticate') }}\"
                                    >
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/security/login.html.twig");
    }
}
