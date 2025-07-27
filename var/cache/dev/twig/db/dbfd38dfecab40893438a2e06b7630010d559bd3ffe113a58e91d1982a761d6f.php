<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/register.html.twig */
class __TwigTemplate_a846cd172db96669b97a333178be1443629191e68efafd1f2f13636848ae20ff extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- Section: Design Block -->
<section class=\"text-center\">
  <!-- Background image -->
  <div class=\"p-5 bg-image\" style=\"
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        \"></div>
  <!-- Background image -->

  <div class=\"card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary\" style=\"
        margin-top: -200px;
        backdrop-filter: blur(30px);
        \">
    <div class=\"card-body py-5 px-md-5\">

      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-8\">
          <h2 class=\"fw-bold mb-5\">creer un compte</h2>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 25
            yield "                <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'errors');
        yield "
            ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_start');
        yield "
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class=\"row\">
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline\">
                  ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'row');
        yield "
                  <label class=\"form-label\" for=\"form3Example1\">Nom</label>
                </div>
              </div>
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline\">
                  ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), 'row');
        yield "
                  <label class=\"form-label\" for=\"form3Example2\">Prénom</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class=\"row\">
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline mb-4\">
                  ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'row');
        yield "
                  <label class=\"form-label\" for=\"form3Example3\">Email address</label>
                </div>
              </div>
              <!-- Password input -->
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline mb-4\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), 'row', ["label" => "Password"]);
        // line 58
        yield "  
                  <label class=\"form-label\" for=\"form3Example4\">Password</label>
                </div>
              </div>
              
            </div>
            
            <!-- Checkbox -->
            <div class=\"form-check d-flex justify-content-center mb-4\">
              ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "agreeTerms", [], "any", false, false, false, 67), 'row');
        yield "
              <label class=\"form-check-label\" for=\"form2Example33\">
                
              </label>
            </div>

            <!-- Submit button -->
            <button type=\"submit\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-block mb-4\">
              Register
            </button>

            <!-- Register buttons -->
            ";
        // line 97
        yield "          ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), 'form_end');
        yield "
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
    

    

    

    
        
        
        

        
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  191 => 97,  176 => 67,  165 => 58,  163 => 56,  153 => 49,  140 => 39,  131 => 33,  123 => 28,  118 => 27,  109 => 25,  105 => 24,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<!-- Section: Design Block -->
<section class=\"text-center\">
  <!-- Background image -->
  <div class=\"p-5 bg-image\" style=\"
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        \"></div>
  <!-- Background image -->

  <div class=\"card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary\" style=\"
        margin-top: -200px;
        backdrop-filter: blur(30px);
        \">
    <div class=\"card-body py-5 px-md-5\">

      <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-8\">
          <h2 class=\"fw-bold mb-5\">creer un compte</h2>
            {% for flash_error in app.flashes('verify_email_error') %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}
            {{ form_errors(registrationForm) }}
            {{ form_start(registrationForm) }}
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class=\"row\">
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline\">
                  {{ form_row(registrationForm.nom) }}
                  <label class=\"form-label\" for=\"form3Example1\">Nom</label>
                </div>
              </div>
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline\">
                  {{ form_row(registrationForm.prenom) }}
                  <label class=\"form-label\" for=\"form3Example2\">Prénom</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class=\"row\">
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline mb-4\">
                  {{ form_row(registrationForm.email) }}
                  <label class=\"form-label\" for=\"form3Example3\">Email address</label>
                </div>
              </div>
              <!-- Password input -->
              <div class=\"col-md-6 mb-4\">
                <div data-mdb-input-init class=\"form-outline mb-4\">
                    {{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}  
                  <label class=\"form-label\" for=\"form3Example4\">Password</label>
                </div>
              </div>
              
            </div>
            
            <!-- Checkbox -->
            <div class=\"form-check d-flex justify-content-center mb-4\">
              {{ form_row(registrationForm.agreeTerms) }}
              <label class=\"form-check-label\" for=\"form2Example33\">
                
              </label>
            </div>

            <!-- Submit button -->
            <button type=\"submit\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-block mb-4\">
              Register
            </button>

            <!-- Register buttons -->
            {# <div class=\"text-center\">
              <p>or sign up with:</p>
              <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-link btn-floating mx-1\">
                <i class=\"fab fa-facebook-f\"></i>
              </button>

              <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-link btn-floating mx-1\">
                <i class=\"fab fa-google\"></i>
              </button>

              <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-link btn-floating mx-1\">
                <i class=\"fab fa-twitter\"></i>
              </button>

              <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-link btn-floating mx-1\">
                <i class=\"fab fa-github\"></i>
              </button>
            </div> #}
          {{ form_end(registrationForm) }}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
    

    

    

    
        
        
        

        
    
{% endblock %}
", "registration/register.html.twig", "E:\\site_ecole\\templates\\registration\\register.html.twig");
    }
}
