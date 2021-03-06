<?php

/* front/home.html.twig */
class __TwigTemplate_e9464661fcefefa0902f9e9513363b4291fa8f8c3d065f4315f9d512c7562ef5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/home.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    <link href=\"../css/circuit.css\" rel=\"stylesheet\">

</head>
<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
    </div>
</nav>


<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Les circuits disponibles </h2>
                <h1>Liste des circuits programmés</h1>
                <table class=\"table\">

                    <tr>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Nbr voyageurs</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Depart</th>
                        <th scope=\"col\">Arrivee</th>
                        <th scope=\"col\">Duree (jours)</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Favoris</th>
                    </tr>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuitsP"]) || array_key_exists("circuitsP", $context) ? $context["circuitsP"] : (function () { throw new Twig_Error_Runtime('Variable "circuitsP" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["circuitP"]) {
            // line 48
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "description", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getNombrePersonnes", array(), "method"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getDateDepart", array(), "method"), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getPaysDepart", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getVilleDepart", array(), "method"), "html", null, true);
            echo " </td>
                            <td>
                                ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getPaysArrivee", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getVilleArrivee", array(), "method"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getDureeCircuit", array(), "method"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getPrix", array(), "method"), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_like", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 71
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "id", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "session", array()), "get", array(0 => "likes"), "method"))) {
                // line 72
                echo "                                        unlike
                                    ";
            } else {
                // line 74
                echo "                                        like
                                    ";
            }
            // line 76
            echo "                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "                        <tr>
                            <td colspan=\"2\">no circuits found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuitP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </table>
            </div>
        </div>
    </div>
</section>

";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
            echo "<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Les circuits disponibles </h2>
                <table class=\"table\">


        <h1>[admin] Liste des circuits non-programmés</h1>

        <table class=\"table\">
            <tr>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Départ</th>
                <th scope=\"col\">Arrivée</th>
                <th scope=\"col\">Durée (jours)</th>
            </tr>

            ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["circuitsNP"]) || array_key_exists("circuitsNP", $context) ? $context["circuitsNP"] : (function () { throw new Twig_Error_Runtime('Variable "circuitsNP" does not exist.', 109, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["circuitNP"]) {
                // line 110
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["circuitNP"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "description", array()), "html", null, true);
                echo "</a>
                    </td>
                    <td>
                        ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getPaysDepart", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getVilleDepart", array(), "method"), "html", null, true);
                echo "
                    <td>
                        ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getPaysArrivee", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getVilleArrivee", array(), "method"), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getDureeCircuit", array(), "method"), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 124
                echo "                <tr>
                    <td colspan=\"2\">no circuits found</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuitNP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        </table>


            </div>
        </div>
    </div>
</section>
";
        }
        // line 136
        echo "
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
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 136,  265 => 128,  256 => 124,  247 => 120,  239 => 117,  232 => 115,  224 => 112,  220 => 110,  215 => 109,  195 => 91,  193 => 90,  185 => 84,  176 => 80,  168 => 76,  164 => 74,  160 => 72,  158 => 71,  154 => 70,  148 => 67,  142 => 64,  134 => 61,  127 => 59,  121 => 56,  115 => 53,  107 => 50,  103 => 48,  98 => 47,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

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
    <link href=\"../css/circuit.css\" rel=\"stylesheet\">

</head>
<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
    </div>
</nav>


<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Les circuits disponibles </h2>
                <h1>Liste des circuits programmés</h1>
                <table class=\"table\">

                    <tr>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Nbr voyageurs</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Depart</th>
                        <th scope=\"col\">Arrivee</th>
                        <th scope=\"col\">Duree (jours)</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Favoris</th>
                    </tr>
                    {% for circuitP in circuitsP %}
                        <tr>
                            <td>
                                <a href=\"{{ path('front_circuit_show', {id: circuitP.getCircuit().id}) }}\">{{ circuitP.getCircuit().description }}</a>
                            </td>
                            <td>
                                {{ circuitP.getNombrePersonnes() }}
                            </td>
                            <td>
                                {{ circuitP.getDateDepart().format('d-m-Y') }}
                            </td>
                            <td>
                                {{ circuitP.getCircuit().getPaysDepart() }}/{{ circuitP.getCircuit().getVilleDepart() }} </td>
                            <td>
                                {{ circuitP.getCircuit().getPaysArrivee() }}/{{ circuitP.getCircuit().getVilleArrivee() }}
                            </td>
                            <td>
                                {{ circuitP.getCircuit().getDureeCircuit() }}
                            </td>
                            <td>
                                {{ circuitP.getPrix() }}
                            </td>
                            <td>
                                <a href=\"{{ path('front_circuit_like',{id: circuitP.getCircuit().id }) }}\">
                                    {% if  circuitP.getCircuit().id in app.session.get('likes') %}
                                        unlike
                                    {% else %}
                                        like
                                    {% endif %}
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"2\">no circuits found</td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
</section>

{% if is_granted('ROLE_ADMIN') %}
<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Les circuits disponibles </h2>
                <table class=\"table\">


        <h1>[admin] Liste des circuits non-programmés</h1>

        <table class=\"table\">
            <tr>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Départ</th>
                <th scope=\"col\">Arrivée</th>
                <th scope=\"col\">Durée (jours)</th>
            </tr>

            {% for circuitNP in circuitsNP %}
                <tr>
                    <td>
                        <a href=\"{{ path('front_circuit_show', {id: circuitNP.id}) }}\">{{ circuitNP.description }}</a>
                    </td>
                    <td>
                        {{ circuitNP.getPaysDepart() }}/{{ circuitNP.getVilleDepart() }}
                    <td>
                        {{ circuitNP.getPaysArrivee() }}/{{ circuitNP.getVilleArrivee() }}
                    </td>
                    <td>
                        {{ circuitNP.getDureeCircuit() }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"2\">no circuits found</td>
                </tr>
            {% endfor %}
        </table>


            </div>
        </div>
    </div>
</section>
{% endif %}

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

{% endblock %} {# main #}", "front/home.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/front/home.html.twig");
    }
}
