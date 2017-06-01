<?php

/* @ESFEspaceAbonne/back/universiteTwo.html.twig */
class __TwigTemplate_a3c2bbe16f07dde17c1ce356a8f74742d15bee5596b90beadc867a73a4e237e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/universiteTwo.html.twig", 1);
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
        $__internal_3afa6a29911647722aa8d8281f89ec04cf42530c1f95e9951c4583f82e51b240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afa6a29911647722aa8d8281f89ec04cf42530c1f95e9951c4583f82e51b240->enter($__internal_3afa6a29911647722aa8d8281f89ec04cf42530c1f95e9951c4583f82e51b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $__internal_c4f08a158d95e058b51470f6fb86b4a3b3a193a162b43d2e02fec7e8d27b14ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f08a158d95e058b51470f6fb86b4a3b3a193a162b43d2e02fec7e8d27b14ef->enter($__internal_c4f08a158d95e058b51470f6fb86b4a3b3a193a162b43d2e02fec7e8d27b14ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afa6a29911647722aa8d8281f89ec04cf42530c1f95e9951c4583f82e51b240->leave($__internal_3afa6a29911647722aa8d8281f89ec04cf42530c1f95e9951c4583f82e51b240_prof);

        
        $__internal_c4f08a158d95e058b51470f6fb86b4a3b3a193a162b43d2e02fec7e8d27b14ef->leave($__internal_c4f08a158d95e058b51470f6fb86b4a3b3a193a162b43d2e02fec7e8d27b14ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e643585342b04606bdfe9542e549f3e0dd846ddec5d85e4c66377acc5dfc7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e643585342b04606bdfe9542e549f3e0dd846ddec5d85e4c66377acc5dfc7d5->enter($__internal_3e643585342b04606bdfe9542e549f3e0dd846ddec5d85e4c66377acc5dfc7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_298e50e531a201152847d463602df291d63fae7ab9f6130f7e2c82c2141a0c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298e50e531a201152847d463602df291d63fae7ab9f6130f7e2c82c2141a0c4b->enter($__internal_298e50e531a201152847d463602df291d63fae7ab9f6130f7e2c82c2141a0c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_298e50e531a201152847d463602df291d63fae7ab9f6130f7e2c82c2141a0c4b->leave($__internal_298e50e531a201152847d463602df291d63fae7ab9f6130f7e2c82c2141a0c4b_prof);

        
        $__internal_3e643585342b04606bdfe9542e549f3e0dd846ddec5d85e4c66377acc5dfc7d5->leave($__internal_3e643585342b04606bdfe9542e549f3e0dd846ddec5d85e4c66377acc5dfc7d5_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_96c0d3723687dab7331aecc8587d1a37234da6a8b11978174754f787926af906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c0d3723687dab7331aecc8587d1a37234da6a8b11978174754f787926af906->enter($__internal_96c0d3723687dab7331aecc8587d1a37234da6a8b11978174754f787926af906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3999202501eeb8578d2541d457d9194c61ab9e97f60fab71687c875fd7b6367f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3999202501eeb8578d2541d457d9194c61ab9e97f60fab71687c875fd7b6367f->enter($__internal_3999202501eeb8578d2541d457d9194c61ab9e97f60fab71687c875fd7b6367f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">                                        
                       Rappel : Inscription à \"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etablissement", array()), "html", null, true);
            echo "\" pour suivre la formation de \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "formation", array()), "html", null, true);
            echo "\", en  \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "langue", array()), "html", null, true);
            echo "\".
                    </div>
                </div>              
                <p>Veuillez télécharger le(s) PDF ci-dessous et le(s) imprimer afin de nous le(s) renvoyer.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                            <tr>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsTwo", array("id" => $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()))), "html", null, true);
            echo "\">Suivant</a>
            ";
        }
        // line 39
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
        
        $__internal_3999202501eeb8578d2541d457d9194c61ab9e97f60fab71687c875fd7b6367f->leave($__internal_3999202501eeb8578d2541d457d9194c61ab9e97f60fab71687c875fd7b6367f_prof);

        
        $__internal_96c0d3723687dab7331aecc8587d1a37234da6a8b11978174754f787926af906->leave($__internal_96c0d3723687dab7331aecc8587d1a37234da6a8b11978174754f787926af906_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/universiteTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 39,  132 => 37,  128 => 36,  124 => 34,  114 => 30,  109 => 28,  106 => 27,  102 => 26,  83 => 14,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Inscription Université - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">                                        
                       Rappel : Inscription à \"{{ eA_Demande_Inscription.etablissement }}\" pour suivre la formation de \"{{ eA_Demande_Inscription.formation }}\", en  \"{{ eA_Demande_Inscription.langue }}\".
                    </div>
                </div>              
                <p>Veuillez télécharger le(s) PDF ci-dessous et le(s) imprimer afin de nous le(s) renvoyer.</p>      
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_universiteStepsTwo', { 'id' : eA_Demande_Inscription.id }) }}\">Suivant</a>
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
#}", "@ESFEspaceAbonne/back/universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteTwo.html.twig");
    }
}
