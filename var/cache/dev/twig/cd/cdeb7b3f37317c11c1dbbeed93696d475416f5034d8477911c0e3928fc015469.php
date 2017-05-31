<?php

/* ESFEspaceAbonneBundle:back:preparationTwo.html.twig */
class __TwigTemplate_40ef3e92f3ab24b04a60dedc6f20fd8b2206d174b70724979b9d02d45332fe02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e140d0614b15dae863cae4c5219bb3d42874bbf476c1db78d3380a01c28bbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e140d0614b15dae863cae4c5219bb3d42874bbf476c1db78d3380a01c28bbf3->enter($__internal_2e140d0614b15dae863cae4c5219bb3d42874bbf476c1db78d3380a01c28bbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig"));

        $__internal_7a33127b3ff4ce5995a596a785cd2858195a97e68d366a87354299c7862019f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a33127b3ff4ce5995a596a785cd2858195a97e68d366a87354299c7862019f9->enter($__internal_7a33127b3ff4ce5995a596a785cd2858195a97e68d366a87354299c7862019f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e140d0614b15dae863cae4c5219bb3d42874bbf476c1db78d3380a01c28bbf3->leave($__internal_2e140d0614b15dae863cae4c5219bb3d42874bbf476c1db78d3380a01c28bbf3_prof);

        
        $__internal_7a33127b3ff4ce5995a596a785cd2858195a97e68d366a87354299c7862019f9->leave($__internal_7a33127b3ff4ce5995a596a785cd2858195a97e68d366a87354299c7862019f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e96259148c8a1fa3278305815aab24308232ef504a0f848155a2ae3b48f90e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96259148c8a1fa3278305815aab24308232ef504a0f848155a2ae3b48f90e00->enter($__internal_e96259148c8a1fa3278305815aab24308232ef504a0f848155a2ae3b48f90e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f6130f57ddf916c8decd6a8206aea1b95bcf7cd6c2fe9691f026accfa4e0ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6130f57ddf916c8decd6a8206aea1b95bcf7cd6c2fe9691f026accfa4e0ede->enter($__internal_5f6130f57ddf916c8decd6a8206aea1b95bcf7cd6c2fe9691f026accfa4e0ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5f6130f57ddf916c8decd6a8206aea1b95bcf7cd6c2fe9691f026accfa4e0ede->leave($__internal_5f6130f57ddf916c8decd6a8206aea1b95bcf7cd6c2fe9691f026accfa4e0ede_prof);

        
        $__internal_e96259148c8a1fa3278305815aab24308232ef504a0f848155a2ae3b48f90e00->leave($__internal_e96259148c8a1fa3278305815aab24308232ef504a0f848155a2ae3b48f90e00_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3c2cd05959489ffb892e665a7fb295444f8d8e3017c4354a704bbdcc26c27406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2cd05959489ffb892e665a7fb295444f8d8e3017c4354a704bbdcc26c27406->enter($__internal_3c2cd05959489ffb892e665a7fb295444f8d8e3017c4354a704bbdcc26c27406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_55774bb1bd827c8f23b23126d7febd4161d6295f4318b91310535a12a5ace779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55774bb1bd827c8f23b23126d7febd4161d6295f4318b91310535a12a5ace779->enter($__internal_55774bb1bd827c8f23b23126d7febd4161d6295f4318b91310535a12a5ace779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsTwo");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_55774bb1bd827c8f23b23126d7febd4161d6295f4318b91310535a12a5ace779->leave($__internal_55774bb1bd827c8f23b23126d7febd4161d6295f4318b91310535a12a5ace779_prof);

        
        $__internal_3c2cd05959489ffb892e665a7fb295444f8d8e3017c4354a704bbdcc26c27406->leave($__internal_3c2cd05959489ffb892e665a7fb295444f8d8e3017c4354a704bbdcc26c27406_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:preparationTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Inscription Préparation - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_preparationStepsTwo') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "ESFEspaceAbonneBundle:back:preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/preparationTwo.html.twig");
    }
}
