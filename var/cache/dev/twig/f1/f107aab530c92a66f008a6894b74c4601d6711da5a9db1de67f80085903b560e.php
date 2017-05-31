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
        $__internal_f210335561f30feee2e09607f09510acb189e379cee81a37b5d4e44f31da9aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f210335561f30feee2e09607f09510acb189e379cee81a37b5d4e44f31da9aa4->enter($__internal_f210335561f30feee2e09607f09510acb189e379cee81a37b5d4e44f31da9aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $__internal_8effe6ef252a5e576c202b71da6ef666d025f575b102c91eceddff48e6dc1221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8effe6ef252a5e576c202b71da6ef666d025f575b102c91eceddff48e6dc1221->enter($__internal_8effe6ef252a5e576c202b71da6ef666d025f575b102c91eceddff48e6dc1221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f210335561f30feee2e09607f09510acb189e379cee81a37b5d4e44f31da9aa4->leave($__internal_f210335561f30feee2e09607f09510acb189e379cee81a37b5d4e44f31da9aa4_prof);

        
        $__internal_8effe6ef252a5e576c202b71da6ef666d025f575b102c91eceddff48e6dc1221->leave($__internal_8effe6ef252a5e576c202b71da6ef666d025f575b102c91eceddff48e6dc1221_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_abe7bff2efd14b7b4263f83f75fd127b1f6f744e3d3081f4056c647a3a2f55b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe7bff2efd14b7b4263f83f75fd127b1f6f744e3d3081f4056c647a3a2f55b7->enter($__internal_abe7bff2efd14b7b4263f83f75fd127b1f6f744e3d3081f4056c647a3a2f55b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c54d62c5b17437a5867182fbe352d8db562365261136ed9dea8b410f65541da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54d62c5b17437a5867182fbe352d8db562365261136ed9dea8b410f65541da2->enter($__internal_c54d62c5b17437a5867182fbe352d8db562365261136ed9dea8b410f65541da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c54d62c5b17437a5867182fbe352d8db562365261136ed9dea8b410f65541da2->leave($__internal_c54d62c5b17437a5867182fbe352d8db562365261136ed9dea8b410f65541da2_prof);

        
        $__internal_abe7bff2efd14b7b4263f83f75fd127b1f6f744e3d3081f4056c647a3a2f55b7->leave($__internal_abe7bff2efd14b7b4263f83f75fd127b1f6f744e3d3081f4056c647a3a2f55b7_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_255a3a355257f141e829e7ab0a5df5295fba3c74c4a6aaed612122dfe512f6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255a3a355257f141e829e7ab0a5df5295fba3c74c4a6aaed612122dfe512f6c2->enter($__internal_255a3a355257f141e829e7ab0a5df5295fba3c74c4a6aaed612122dfe512f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9d7249b1f24f68a55d992504f5b75e35e8bcf00c3e95c702107e429d2754cc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7249b1f24f68a55d992504f5b75e35e8bcf00c3e95c702107e429d2754cc5e->enter($__internal_9d7249b1f24f68a55d992504f5b75e35e8bcf00c3e95c702107e429d2754cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9d7249b1f24f68a55d992504f5b75e35e8bcf00c3e95c702107e429d2754cc5e->leave($__internal_9d7249b1f24f68a55d992504f5b75e35e8bcf00c3e95c702107e429d2754cc5e_prof);

        
        $__internal_255a3a355257f141e829e7ab0a5df5295fba3c74c4a6aaed612122dfe512f6c2->leave($__internal_255a3a355257f141e829e7ab0a5df5295fba3c74c4a6aaed612122dfe512f6c2_prof);

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
