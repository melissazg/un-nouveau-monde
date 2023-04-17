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

/* comment/index.html.twig */
class __TwigTemplate_f9baef407c65bd26c6e327478c316715 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/index.html.twig"));

        // line 1
        echo "

<section class=\"d-flex justify-content-around\">


    <div class=\"p-2\">
        <h4>Commentaire(s)</h4>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 9
            echo "            <div class=\"container comment bg-dark rounded my-2 comment\" >
                <div class = \"row\">
                    <span class=\"h5\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 12), "lastname", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
            echo ",
                        ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
            echo "
                    </span>
                </div>
                <div>
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["comment"], "note", [], "any", false, false, false, 18) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18)) >= 0)) {
                    // line 19
                    echo "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#FFFFFF\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>
                            </svg>
                        ";
                } else {
                    // line 23
                    echo "                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#FFFFFF\" class=\"bi bi-star\" viewBox=\"0 0 16 16\">
                                <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
                            </svg>
                        ";
                }
                // line 27
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                </div>
                <div class = \"row content my-1\" >
                    <p>
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 31), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>

    <div class=\"d-flex flex-column align-items-center my-3\" >
        <div class=\"p-3 bg-dark rounded\">
            <div class=\"p-2\"><h5>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40), 'label');
        echo "</h5></div>
            <div class=\"p-2\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "note", [], "any", false, false, false, 41), 'widget');
        echo "</div>
            <div class=\"p-2\"><h5>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "content", [], "any", false, false, false, 42), 'label');
        echo "</h5></div>
            <div class=\"p-2\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "content", [], "any", false, false, false, 43), 'widget');
        echo "</div>
            <div class=\"p-2\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Envoyer</button>
            </div>
        </div>
    </div>


</section>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  150 => 42,  146 => 41,  142 => 40,  136 => 36,  125 => 31,  120 => 28,  106 => 27,  100 => 23,  94 => 19,  91 => 18,  74 => 17,  67 => 13,  61 => 12,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<section class=\"d-flex justify-content-around\">


    <div class=\"p-2\">
        <h4>Commentaire(s)</h4>
        {%for comment in comments %}
            <div class=\"container comment bg-dark rounded my-2 comment\" >
                <div class = \"row\">
                    <span class=\"h5\">
                        {{ comment.user.lastname }} {{ comment.user.firstname }},
                        {{ comment.date|date('d/m/Y') }}
                    </span>
                </div>
                <div>
                    {% for i in 0..4 %}
                        {%if comment.note-loop.index>=0 %}
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#FFFFFF\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>
                            </svg>
                        {% else %}
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#FFFFFF\" class=\"bi bi-star\" viewBox=\"0 0 16 16\">
                                <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
                            </svg>
                        {% endif %}
                    {% endfor %}
                </div>
                <div class = \"row content my-1\" >
                    <p>
                        {{ comment.content }}
                    </p>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"d-flex flex-column align-items-center my-3\" >
        <div class=\"p-3 bg-dark rounded\">
            <div class=\"p-2\"><h5>{{ form_label(form.note) }}</h5></div>
            <div class=\"p-2\">{{ form_widget(form.note) }}</div>
            <div class=\"p-2\"><h5>{{ form_label(form.content) }}</h5></div>
            <div class=\"p-2\">{{ form_widget(form.content) }}</div>
            <div class=\"p-2\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Envoyer</button>
            </div>
        </div>
    </div>


</section>

", "comment/index.html.twig", "C:\\Users\\ULTRABOOK DELL\\OneDrive - UPEC\\Bureau\\Snowaddict-symfony\\Un_Nouveau_Monde\\templates\\comment\\index.html.twig");
    }
}
