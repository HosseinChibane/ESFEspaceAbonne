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
        $__internal_a1f84328395cd3619fde58ce79ed4fcba69324990a0dbdacec7856537516cb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f84328395cd3619fde58ce79ed4fcba69324990a0dbdacec7856537516cb10->enter($__internal_a1f84328395cd3619fde58ce79ed4fcba69324990a0dbdacec7856537516cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $__internal_7d7d9de693939d9e751222ac4a3e670e9c77839b3d082add65b8d08d59068dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7d9de693939d9e751222ac4a3e670e9c77839b3d082add65b8d08d59068dd5->enter($__internal_7d7d9de693939d9e751222ac4a3e670e9c77839b3d082add65b8d08d59068dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f84328395cd3619fde58ce79ed4fcba69324990a0dbdacec7856537516cb10->leave($__internal_a1f84328395cd3619fde58ce79ed4fcba69324990a0dbdacec7856537516cb10_prof);

        
        $__internal_7d7d9de693939d9e751222ac4a3e670e9c77839b3d082add65b8d08d59068dd5->leave($__internal_7d7d9de693939d9e751222ac4a3e670e9c77839b3d082add65b8d08d59068dd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_290bfe1d187034eb383bd4a219f9fcf2406421354aca5c681d0cda43b5530cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290bfe1d187034eb383bd4a219f9fcf2406421354aca5c681d0cda43b5530cd2->enter($__internal_290bfe1d187034eb383bd4a219f9fcf2406421354aca5c681d0cda43b5530cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cad82fc506bb1a1e90cb635acc573ce7289de95b65dcd7a7376012ff005ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cad82fc506bb1a1e90cb635acc573ce7289de95b65dcd7a7376012ff005ad8f->enter($__internal_8cad82fc506bb1a1e90cb635acc573ce7289de95b65dcd7a7376012ff005ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8cad82fc506bb1a1e90cb635acc573ce7289de95b65dcd7a7376012ff005ad8f->leave($__internal_8cad82fc506bb1a1e90cb635acc573ce7289de95b65dcd7a7376012ff005ad8f_prof);

        
        $__internal_290bfe1d187034eb383bd4a219f9fcf2406421354aca5c681d0cda43b5530cd2->leave($__internal_290bfe1d187034eb383bd4a219f9fcf2406421354aca5c681d0cda43b5530cd2_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_55a2d4fdc334bc29d9f7f5b62c066459f9f7de5ea36cc4bcba5fe476585ef55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a2d4fdc334bc29d9f7f5b62c066459f9f7de5ea36cc4bcba5fe476585ef55f->enter($__internal_55a2d4fdc334bc29d9f7f5b62c066459f9f7de5ea36cc4bcba5fe476585ef55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_41a6780d502dbc4ed4b2d7ffdd5a38151a7349fe38db296a7359aed9bc5525df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a6780d502dbc4ed4b2d7ffdd5a38151a7349fe38db296a7359aed9bc5525df->enter($__internal_41a6780d502dbc4ed4b2d7ffdd5a38151a7349fe38db296a7359aed9bc5525df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_41a6780d502dbc4ed4b2d7ffdd5a38151a7349fe38db296a7359aed9bc5525df->leave($__internal_41a6780d502dbc4ed4b2d7ffdd5a38151a7349fe38db296a7359aed9bc5525df_prof);

        
        $__internal_55a2d4fdc334bc29d9f7f5b62c066459f9f7de5ea36cc4bcba5fe476585ef55f->leave($__internal_55a2d4fdc334bc29d9f7f5b62c066459f9f7de5ea36cc4bcba5fe476585ef55f_prof);

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
#}", "@ESFEspaceAbonne/back/universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteTwo.html.twig");
    }
}
