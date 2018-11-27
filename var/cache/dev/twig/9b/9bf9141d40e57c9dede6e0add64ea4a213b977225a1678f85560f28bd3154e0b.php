<?php

/* back/etape/index.html.twig */
class __TwigTemplate_bfd427c7eb83a24d6f1d008d4aa2aa646ab5e72c246e46ecb1233bf0b789173d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "back/etape/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/etape/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/etape/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etape index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

    <!-- Quelques polices d'écritures plus jolies :) -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Un Css modifié :) -->
    <link href=\"../../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etape_new");
        echo "\">Create new</a>

    </div>
</nav>


<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Etape index</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NumeroEtape</th>
                            <th>VilleEtape</th>
                            <th>NombreJours</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etapes"]) || array_key_exists("etapes", $context) ? $context["etapes"] : (function () { throw new Twig_Error_Runtime('Variable "etapes" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 51
            echo "                        <tr>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "villeEtape", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "nombreJours", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etape_show", array("id" => twig_get_attribute($this->env, $this->source, $context["etape"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etape_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["etape"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "                        <tr>
                            <td colspan=\"5\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</body>

<!-- Petit CopyRight Inutile Donc Indispensable ! -->
<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
        Copyright &copy; Dylan Soton & Victor Védie
    </div>
</footer>

<!-- bootstrap.min & JavaScript -->
<script src=\"/js/bootstrap.min.bundle.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>

<script src=\"js/accueil.js\"></script>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/etape/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  161 => 62,  152 => 58,  148 => 57,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  128 => 51,  123 => 50,  97 => 27,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Etape index{% endblock %}
{% block main %}
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

    <!-- Quelques polices d'écritures plus jolies :) -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Un Css modifié :) -->
    <link href=\"../../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
        <a href=\"{{ path('admin_etape_new') }}\">Create new</a>

    </div>
</nav>


<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Etape index</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NumeroEtape</th>
                            <th>VilleEtape</th>
                            <th>NombreJours</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for etape in etapes %}
                        <tr>
                            <td>{{ etape.id }}</td>
                            <td>{{ etape.numeroEtape }}</td>
                            <td>{{ etape.villeEtape }}</td>
                            <td>{{ etape.nombreJours }}</td>
                            <td>
                                <a href=\"{{ path('admin_etape_show', {'id': etape.id}) }}\">show</a>
                                <a href=\"{{ path('admin_etape_edit', {'id': etape.id}) }}\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</body>

<!-- Petit CopyRight Inutile Donc Indispensable ! -->
<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
        Copyright &copy; Dylan Soton & Victor Védie
    </div>
</footer>

<!-- bootstrap.min & JavaScript -->
<script src=\"/js/bootstrap.min.bundle.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>

<script src=\"js/accueil.js\"></script>

</html>

{% endblock %} {# main #}
", "back/etape/index.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/back/etape/index.html.twig");
    }
}
