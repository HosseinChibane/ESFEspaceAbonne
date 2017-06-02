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
        $__internal_92cde48b16561d396ff4ae57b4e60005c8d45d61fc75b2d79410591fefc33a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cde48b16561d396ff4ae57b4e60005c8d45d61fc75b2d79410591fefc33a32->enter($__internal_92cde48b16561d396ff4ae57b4e60005c8d45d61fc75b2d79410591fefc33a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $__internal_f7642c19b58f8bc0be8195f88d967070c461af33c4d1c28990771dfe5a98e57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7642c19b58f8bc0be8195f88d967070c461af33c4d1c28990771dfe5a98e57d->enter($__internal_f7642c19b58f8bc0be8195f88d967070c461af33c4d1c28990771dfe5a98e57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92cde48b16561d396ff4ae57b4e60005c8d45d61fc75b2d79410591fefc33a32->leave($__internal_92cde48b16561d396ff4ae57b4e60005c8d45d61fc75b2d79410591fefc33a32_prof);

        
        $__internal_f7642c19b58f8bc0be8195f88d967070c461af33c4d1c28990771dfe5a98e57d->leave($__internal_f7642c19b58f8bc0be8195f88d967070c461af33c4d1c28990771dfe5a98e57d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da781f8b6c0da504bb1ea09e2c03bd1d4b3481278147b88f832b55a8dc9c7a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da781f8b6c0da504bb1ea09e2c03bd1d4b3481278147b88f832b55a8dc9c7a1f->enter($__internal_da781f8b6c0da504bb1ea09e2c03bd1d4b3481278147b88f832b55a8dc9c7a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_895f8155430a91cd40ecf9246560fd42d6dcf9dffb0cb7e76dd4093861bcfdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895f8155430a91cd40ecf9246560fd42d6dcf9dffb0cb7e76dd4093861bcfdf6->enter($__internal_895f8155430a91cd40ecf9246560fd42d6dcf9dffb0cb7e76dd4093861bcfdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_895f8155430a91cd40ecf9246560fd42d6dcf9dffb0cb7e76dd4093861bcfdf6->leave($__internal_895f8155430a91cd40ecf9246560fd42d6dcf9dffb0cb7e76dd4093861bcfdf6_prof);

        
        $__internal_da781f8b6c0da504bb1ea09e2c03bd1d4b3481278147b88f832b55a8dc9c7a1f->leave($__internal_da781f8b6c0da504bb1ea09e2c03bd1d4b3481278147b88f832b55a8dc9c7a1f_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2bef3f4337e24484cd873aa0524fb35458f8737147f7ad5f5308a0b6209ed0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bef3f4337e24484cd873aa0524fb35458f8737147f7ad5f5308a0b6209ed0f6->enter($__internal_2bef3f4337e24484cd873aa0524fb35458f8737147f7ad5f5308a0b6209ed0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a97a6f65457322becfa0c67636a505ca73f2cc9f6b867e9e54aec3fa65f27210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97a6f65457322becfa0c67636a505ca73f2cc9f6b867e9e54aec3fa65f27210->enter($__internal_a97a6f65457322becfa0c67636a505ca73f2cc9f6b867e9e54aec3fa65f27210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
                echo "                        <tr>
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
            echo "                </tbody>
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
        echo "    </div>
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
        
        $__internal_a97a6f65457322becfa0c67636a505ca73f2cc9f6b867e9e54aec3fa65f27210->leave($__internal_a97a6f65457322becfa0c67636a505ca73f2cc9f6b867e9e54aec3fa65f27210_prof);

        
        $__internal_2bef3f4337e24484cd873aa0524fb35458f8737147f7ad5f5308a0b6209ed0f6->leave($__internal_2bef3f4337e24484cd873aa0524fb35458f8737147f7ad5f5308a0b6209ed0f6_prof);

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
            <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_universiteStepsTwo', { 'id' : eA_Demande_Inscription.id } ) }}\">Suivant</a>
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
