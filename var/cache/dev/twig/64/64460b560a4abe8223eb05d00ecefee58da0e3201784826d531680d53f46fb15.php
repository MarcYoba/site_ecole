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

/* home/Dashboard.html.twig */
class __TwigTemplate_62c115b518b10784a57ea2b80dac5dc2ab119ad7f7acc49c1e4543c8009a02a1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/Dashboard.html.twig", 1);
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

        yield "Dashboard.html.twig";
        
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
        yield "<!DOCTYPE html>
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>GESTION DE STOCK</title>

    <!-- Custom fonts for this template-->
    
    <style>
        .start{
            color: gold;
        }
        .amount{
            display: none;
        }
    </style>

</head>

<body id=\"page-top\">

<div class=\"modal fade\" id=\"monModal\" tabindex=\"-1\" aria-labelledby=\"monModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
        <div class=\"modal-header text-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle-fill flex-shrink-0 me-2\" viewBox=\"0 0 16 16\" role=\"img\" aria-label=\"Warning:\">
                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
            </svg>
            <h5 class=\"modal-title\" id=\"monModalLabel\">Information de rapelle d'urgence</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group row\">
                <div class=\"col-sm-4\">
                    commande en cour 
                </div>
            </div>
        </div>
        <div class=\"modal-footer\">
        <a href=\"php/client/commandeliste.php\" type=\"button\" class=\"btn btn-primary\" ><i class=\"fa fa-download\" aria-hidden=\"true\"></i>Liste Commande</a>
           
        </div>
        </div>
    </div>
    </div>

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
      ";
        // line 65
        yield "        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column \">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                  ";
        // line 75
        yield "                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
                        Pharmacie</a>
                    </div>
                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/achat/liste.php\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    ACHAT (MONTANT)</div>
                                                
                                            </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/vente/liste.php\" >
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                VENTE (MONTANT)</div>
                                                    
                                            </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-danger shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/dette/dette.php\">
                                            <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                                DETTE (MONTANT)</div>
                                                
                                        </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/dette/dette.php\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                VERSEMENT (MONTANT)</div>
                                                
                                        </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-dark shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/caisse/liste.php\">
                                                <div class=\"text-xs font-weight-bold text-dark text-uppercase mb-1\">
                                                    CAISSE (MONTANT)</div>
                                                    
                                                </div>
                                            </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-dark shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/depenses/liste.php\">
                                                <div class=\"text-xs font-weight-bold text-dark text-uppercase mb-1\">
                                                    DEPENSE (MONTANT)</div>
                                                    
                                                </div>
                                            </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                       
                        <!-- Earnings (Monthly) Card Example -->
                          

                      
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Statistique semaine</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <button class=\"dropdown-item\" onclick=\"affichemontant()\">affiche</button>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\" ></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Achat
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> vente
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> dette
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-warning\"></i> versement
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Stock de produit</h6>
                                </div>
                                <div class=\"card-body\">
                                      
                                </div>
                            </div>

                            

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Top 20 des Produits les plus Venduent mois</h6>
                                </div>
                                <div class=\"card-body\">
                                    
                                </div>
                            </div>

                       

                        </div>
                        
                        
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                    <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Quantite Vendu</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"chart-bar\">
                                        <canvas id=\"myBarChart\"></canvas>
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                                    </div>
                                    
                                </div>
                            </div>

                            
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Liste des 20 premiers clients</h6>
                                </div>
                                <div class=\"card-body\">
                                
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; ";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"";
        // line 411
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
      
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/Dashboard.html.twig";
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
        return array (  497 => 411,  463 => 380,  156 => 75,  145 => 65,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard.html.twig{% endblock %}

{% block body %}
<!DOCTYPE html>
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>GESTION DE STOCK</title>

    <!-- Custom fonts for this template-->
    
    <style>
        .start{
            color: gold;
        }
        .amount{
            display: none;
        }
    </style>

</head>

<body id=\"page-top\">

<div class=\"modal fade\" id=\"monModal\" tabindex=\"-1\" aria-labelledby=\"monModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
        <div class=\"modal-header text-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle-fill flex-shrink-0 me-2\" viewBox=\"0 0 16 16\" role=\"img\" aria-label=\"Warning:\">
                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
            </svg>
            <h5 class=\"modal-title\" id=\"monModalLabel\">Information de rapelle d'urgence</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group row\">
                <div class=\"col-sm-4\">
                    commande en cour 
                </div>
            </div>
        </div>
        <div class=\"modal-footer\">
        <a href=\"php/client/commandeliste.php\" type=\"button\" class=\"btn btn-primary\" ><i class=\"fa fa-download\" aria-hidden=\"true\"></i>Liste Commande</a>
           
        </div>
        </div>
    </div>
    </div>

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
      {# # {% include \"navbar.html.twig\" %} #}
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column \">

            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                  {# {% include \"topbar.html.twig\" %}  #}
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
                        Pharmacie</a>
                    </div>
                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/achat/liste.php\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                    ACHAT (MONTANT)</div>
                                                
                                            </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/vente/liste.php\" >
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                VENTE (MONTANT)</div>
                                                    
                                            </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-danger shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/dette/dette.php\">
                                            <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                                DETTE (MONTANT)</div>
                                                
                                        </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                        <a href=\"php/dette/dette.php\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                VERSEMENT (MONTANT)</div>
                                                
                                        </div>
                                        </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-dark shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/caisse/liste.php\">
                                                <div class=\"text-xs font-weight-bold text-dark text-uppercase mb-1\">
                                                    CAISSE (MONTANT)</div>
                                                    
                                                </div>
                                            </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-dark shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <a href=\"php/depenses/liste.php\">
                                                <div class=\"text-xs font-weight-bold text-dark text-uppercase mb-1\">
                                                    DEPENSE (MONTANT)</div>
                                                    
                                                </div>
                                            </a>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                       
                        <!-- Earnings (Monthly) Card Example -->
                          

                      
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Statistique semaine</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <button class=\"dropdown-item\" onclick=\"affichemontant()\">affiche</button>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\" ></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Achat
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> vente
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> dette
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-warning\"></i> versement
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Stock de produit</h6>
                                </div>
                                <div class=\"card-body\">
                                      
                                </div>
                            </div>

                            

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Top 20 des Produits les plus Venduent mois</h6>
                                </div>
                                <div class=\"card-body\">
                                    
                                </div>
                            </div>

                       

                        </div>
                        
                        
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                    <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Quantite Vendu</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"chart-bar\">
                                        <canvas id=\"myBarChart\"></canvas>
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                                    </div>
                                    
                                </div>
                            </div>

                            
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Liste des 20 premiers clients</h6>
                                </div>
                                <div class=\"card-body\">
                                
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; {{ \"now\" | date(\"Y-m-d\") }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
      
</body>
</html>

{% endblock %}", "home/Dashboard.html.twig", "E:\\site_ecole\\templates\\home\\Dashboard.html.twig");
    }
}
