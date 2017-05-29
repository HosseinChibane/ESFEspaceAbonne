<?php

/* ESFEspaceAbonneBundle:Back:universiteTwo.html.twig */
class __TwigTemplate_5960fc782df3d10f142134805930cd409334a9fa8a395f3269bd754aa7632f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig", 1);
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
        $__internal_c9cf4976c24ea4213e0ba072952f1c3970d1ff2bf7b90fc96e633a0de42d3d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cf4976c24ea4213e0ba072952f1c3970d1ff2bf7b90fc96e633a0de42d3d01->enter($__internal_c9cf4976c24ea4213e0ba072952f1c3970d1ff2bf7b90fc96e633a0de42d3d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig"));

        $__internal_03245464620b459c8ab432c3da7964440ffbfad796a92810bb33efa0e0da17fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03245464620b459c8ab432c3da7964440ffbfad796a92810bb33efa0e0da17fc->enter($__internal_03245464620b459c8ab432c3da7964440ffbfad796a92810bb33efa0e0da17fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9cf4976c24ea4213e0ba072952f1c3970d1ff2bf7b90fc96e633a0de42d3d01->leave($__internal_c9cf4976c24ea4213e0ba072952f1c3970d1ff2bf7b90fc96e633a0de42d3d01_prof);

        
        $__internal_03245464620b459c8ab432c3da7964440ffbfad796a92810bb33efa0e0da17fc->leave($__internal_03245464620b459c8ab432c3da7964440ffbfad796a92810bb33efa0e0da17fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a534ca6d741d7651b8bcae4adddadae2854d8525d6ba97dca2837fb292cdbd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a534ca6d741d7651b8bcae4adddadae2854d8525d6ba97dca2837fb292cdbd4c->enter($__internal_a534ca6d741d7651b8bcae4adddadae2854d8525d6ba97dca2837fb292cdbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9bb1c82354cd71e80ae433c61c5640b58c3b38730bbb585ba1bc7506436e2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb1c82354cd71e80ae433c61c5640b58c3b38730bbb585ba1bc7506436e2e9->enter($__internal_c9bb1c82354cd71e80ae433c61c5640b58c3b38730bbb585ba1bc7506436e2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c9bb1c82354cd71e80ae433c61c5640b58c3b38730bbb585ba1bc7506436e2e9->leave($__internal_c9bb1c82354cd71e80ae433c61c5640b58c3b38730bbb585ba1bc7506436e2e9_prof);

        
        $__internal_a534ca6d741d7651b8bcae4adddadae2854d8525d6ba97dca2837fb292cdbd4c->leave($__internal_a534ca6d741d7651b8bcae4adddadae2854d8525d6ba97dca2837fb292cdbd4c_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1a3b2a9773719c6f4eb9f0504b35fc8f6b51c95462c5ce53e7cae213a6d5aba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3b2a9773719c6f4eb9f0504b35fc8f6b51c95462c5ce53e7cae213a6d5aba0->enter($__internal_1a3b2a9773719c6f4eb9f0504b35fc8f6b51c95462c5ce53e7cae213a6d5aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_605e1af8c5c519d8e3a39bf1b36a55e1e39a6a8b3769e4d2f0c31ff6e94c5a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605e1af8c5c519d8e3a39bf1b36a55e1e39a6a8b3769e4d2f0c31ff6e94c5a24->enter($__internal_605e1af8c5c519d8e3a39bf1b36a55e1e39a6a8b3769e4d2f0c31ff6e94c5a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsTwo");
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
        
        $__internal_605e1af8c5c519d8e3a39bf1b36a55e1e39a6a8b3769e4d2f0c31ff6e94c5a24->leave($__internal_605e1af8c5c519d8e3a39bf1b36a55e1e39a6a8b3769e4d2f0c31ff6e94c5a24_prof);

        
        $__internal_1a3b2a9773719c6f4eb9f0504b35fc8f6b51c95462c5ce53e7cae213a6d5aba0->leave($__internal_1a3b2a9773719c6f4eb9f0504b35fc8f6b51c95462c5ce53e7cae213a6d5aba0_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig";
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
    Inscription Université - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_universiteStepsTwo') }}\">Suivant</a>
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
#}", "ESFEspaceAbonneBundle:Back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteTwo.html.twig");
    }
}
