<?php

/* @ESFEspaceAbonne/back/preparationTwo.html.twig */
class __TwigTemplate_be06da6c464a9a5438639a220df6bce5c0a37aea1f6f001e0335001c8c76be3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationTwo.html.twig", 1);
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
        $__internal_ca5a14831452931a82a7008eccb50d54a8dcf88b47a5ef0f990ab9e0f088431f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5a14831452931a82a7008eccb50d54a8dcf88b47a5ef0f990ab9e0f088431f->enter($__internal_ca5a14831452931a82a7008eccb50d54a8dcf88b47a5ef0f990ab9e0f088431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $__internal_2ba070c9bb83be2568aeb681a9b36ea06679227eae479e20d523fe1f69cf3231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba070c9bb83be2568aeb681a9b36ea06679227eae479e20d523fe1f69cf3231->enter($__internal_2ba070c9bb83be2568aeb681a9b36ea06679227eae479e20d523fe1f69cf3231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5a14831452931a82a7008eccb50d54a8dcf88b47a5ef0f990ab9e0f088431f->leave($__internal_ca5a14831452931a82a7008eccb50d54a8dcf88b47a5ef0f990ab9e0f088431f_prof);

        
        $__internal_2ba070c9bb83be2568aeb681a9b36ea06679227eae479e20d523fe1f69cf3231->leave($__internal_2ba070c9bb83be2568aeb681a9b36ea06679227eae479e20d523fe1f69cf3231_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b00f072b13240c1882d05bdc91c10a15d7ada1c3bebe3f0fe20837a91748120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b00f072b13240c1882d05bdc91c10a15d7ada1c3bebe3f0fe20837a91748120->enter($__internal_0b00f072b13240c1882d05bdc91c10a15d7ada1c3bebe3f0fe20837a91748120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c3f2657ee5fc61926f81317be67ef80080807a0f1156cf5ddc932599a8a3168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3f2657ee5fc61926f81317be67ef80080807a0f1156cf5ddc932599a8a3168->enter($__internal_8c3f2657ee5fc61926f81317be67ef80080807a0f1156cf5ddc932599a8a3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c3f2657ee5fc61926f81317be67ef80080807a0f1156cf5ddc932599a8a3168->leave($__internal_8c3f2657ee5fc61926f81317be67ef80080807a0f1156cf5ddc932599a8a3168_prof);

        
        $__internal_0b00f072b13240c1882d05bdc91c10a15d7ada1c3bebe3f0fe20837a91748120->leave($__internal_0b00f072b13240c1882d05bdc91c10a15d7ada1c3bebe3f0fe20837a91748120_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b7216d2ee8dcf99d2014a5646acfe78be050ec9d7e8ea56b00030cf8fe1946ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7216d2ee8dcf99d2014a5646acfe78be050ec9d7e8ea56b00030cf8fe1946ef->enter($__internal_b7216d2ee8dcf99d2014a5646acfe78be050ec9d7e8ea56b00030cf8fe1946ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_198edbc168cddba93ff4519d8ff581957259c6987f6a465e1f3cdc02f1782990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198edbc168cddba93ff4519d8ff581957259c6987f6a465e1f3cdc02f1782990->enter($__internal_198edbc168cddba93ff4519d8ff581957259c6987f6a465e1f3cdc02f1782990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_198edbc168cddba93ff4519d8ff581957259c6987f6a465e1f3cdc02f1782990->leave($__internal_198edbc168cddba93ff4519d8ff581957259c6987f6a465e1f3cdc02f1782990_prof);

        
        $__internal_b7216d2ee8dcf99d2014a5646acfe78be050ec9d7e8ea56b00030cf8fe1946ef->leave($__internal_b7216d2ee8dcf99d2014a5646acfe78be050ec9d7e8ea56b00030cf8fe1946ef_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationTwo.html.twig";
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
#}", "@ESFEspaceAbonne/back/preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationTwo.html.twig");
    }
}
