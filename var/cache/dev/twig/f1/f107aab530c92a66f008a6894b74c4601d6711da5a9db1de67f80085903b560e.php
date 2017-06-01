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
        $__internal_b2aba401e4b0a63701047668e8313e7271cb01a01b9af09f51c2106ddead2394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2aba401e4b0a63701047668e8313e7271cb01a01b9af09f51c2106ddead2394->enter($__internal_b2aba401e4b0a63701047668e8313e7271cb01a01b9af09f51c2106ddead2394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $__internal_2bec8c27f2f0a29b22fe3fd9b42696f6563751370429e9edbdf8a750551352e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec8c27f2f0a29b22fe3fd9b42696f6563751370429e9edbdf8a750551352e0->enter($__internal_2bec8c27f2f0a29b22fe3fd9b42696f6563751370429e9edbdf8a750551352e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2aba401e4b0a63701047668e8313e7271cb01a01b9af09f51c2106ddead2394->leave($__internal_b2aba401e4b0a63701047668e8313e7271cb01a01b9af09f51c2106ddead2394_prof);

        
        $__internal_2bec8c27f2f0a29b22fe3fd9b42696f6563751370429e9edbdf8a750551352e0->leave($__internal_2bec8c27f2f0a29b22fe3fd9b42696f6563751370429e9edbdf8a750551352e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb6beb8f50b4578c46438063d131655c3a052a339a6d3586a507cd1cf4b4e1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6beb8f50b4578c46438063d131655c3a052a339a6d3586a507cd1cf4b4e1eb->enter($__internal_fb6beb8f50b4578c46438063d131655c3a052a339a6d3586a507cd1cf4b4e1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72bb0f764f90d48fb770178451c225ef68191acf1c10b9a3a9ea1c3173077864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bb0f764f90d48fb770178451c225ef68191acf1c10b9a3a9ea1c3173077864->enter($__internal_72bb0f764f90d48fb770178451c225ef68191acf1c10b9a3a9ea1c3173077864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72bb0f764f90d48fb770178451c225ef68191acf1c10b9a3a9ea1c3173077864->leave($__internal_72bb0f764f90d48fb770178451c225ef68191acf1c10b9a3a9ea1c3173077864_prof);

        
        $__internal_fb6beb8f50b4578c46438063d131655c3a052a339a6d3586a507cd1cf4b4e1eb->leave($__internal_fb6beb8f50b4578c46438063d131655c3a052a339a6d3586a507cd1cf4b4e1eb_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_64e2f36fbc2b6aee7a39a06f0317eff0795a3c5479fecce57ef255e7a0b24916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e2f36fbc2b6aee7a39a06f0317eff0795a3c5479fecce57ef255e7a0b24916->enter($__internal_64e2f36fbc2b6aee7a39a06f0317eff0795a3c5479fecce57ef255e7a0b24916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_56bd7c720659071d84aec8a8907f8b415b186f1f3705159342deb4177049f643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bd7c720659071d84aec8a8907f8b415b186f1f3705159342deb4177049f643->enter($__internal_56bd7c720659071d84aec8a8907f8b415b186f1f3705159342deb4177049f643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_56bd7c720659071d84aec8a8907f8b415b186f1f3705159342deb4177049f643->leave($__internal_56bd7c720659071d84aec8a8907f8b415b186f1f3705159342deb4177049f643_prof);

        
        $__internal_64e2f36fbc2b6aee7a39a06f0317eff0795a3c5479fecce57ef255e7a0b24916->leave($__internal_64e2f36fbc2b6aee7a39a06f0317eff0795a3c5479fecce57ef255e7a0b24916_prof);

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
