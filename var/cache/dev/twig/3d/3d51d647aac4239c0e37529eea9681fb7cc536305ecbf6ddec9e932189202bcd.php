<?php

/* ESFEspaceAbonneBundle:back:universiteTwo.html.twig */
class __TwigTemplate_11348eb3a26d5431126e4d84307ac27a7bcaf6bdd28dc9d6a820b323a86f470d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig", 1);
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
        $__internal_e2f0f570550e72b8f1b018991dad8b9dfc760aebd4d28cb387d387031c9178c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f0f570550e72b8f1b018991dad8b9dfc760aebd4d28cb387d387031c9178c1->enter($__internal_e2f0f570550e72b8f1b018991dad8b9dfc760aebd4d28cb387d387031c9178c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig"));

        $__internal_8d654f698ddd4b240dc9f762f0849901145a69a17db12c8de406fd15dff4be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d654f698ddd4b240dc9f762f0849901145a69a17db12c8de406fd15dff4be6d->enter($__internal_8d654f698ddd4b240dc9f762f0849901145a69a17db12c8de406fd15dff4be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f0f570550e72b8f1b018991dad8b9dfc760aebd4d28cb387d387031c9178c1->leave($__internal_e2f0f570550e72b8f1b018991dad8b9dfc760aebd4d28cb387d387031c9178c1_prof);

        
        $__internal_8d654f698ddd4b240dc9f762f0849901145a69a17db12c8de406fd15dff4be6d->leave($__internal_8d654f698ddd4b240dc9f762f0849901145a69a17db12c8de406fd15dff4be6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f6380bfb05a96bc41779caf32b4704cc8d5d24c9b18b4904c115c245cc9584e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6380bfb05a96bc41779caf32b4704cc8d5d24c9b18b4904c115c245cc9584e->enter($__internal_6f6380bfb05a96bc41779caf32b4704cc8d5d24c9b18b4904c115c245cc9584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3b6295b630f0c1ab83ef2bfe6e20221f377097d5e83b15e15b105a20179f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b6295b630f0c1ab83ef2bfe6e20221f377097d5e83b15e15b105a20179f0d0->enter($__internal_f3b6295b630f0c1ab83ef2bfe6e20221f377097d5e83b15e15b105a20179f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f3b6295b630f0c1ab83ef2bfe6e20221f377097d5e83b15e15b105a20179f0d0->leave($__internal_f3b6295b630f0c1ab83ef2bfe6e20221f377097d5e83b15e15b105a20179f0d0_prof);

        
        $__internal_6f6380bfb05a96bc41779caf32b4704cc8d5d24c9b18b4904c115c245cc9584e->leave($__internal_6f6380bfb05a96bc41779caf32b4704cc8d5d24c9b18b4904c115c245cc9584e_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6851127daf73b1bc6ddc9a5c192c50b378d3cbb9943abed4891ac0ce04de6ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6851127daf73b1bc6ddc9a5c192c50b378d3cbb9943abed4891ac0ce04de6ad8->enter($__internal_6851127daf73b1bc6ddc9a5c192c50b378d3cbb9943abed4891ac0ce04de6ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a64b5ee673e6309f3bed987cc57986b44fac22c820fd5326b3e28c67af58fb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64b5ee673e6309f3bed987cc57986b44fac22c820fd5326b3e28c67af58fb55->enter($__internal_a64b5ee673e6309f3bed987cc57986b44fac22c820fd5326b3e28c67af58fb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a64b5ee673e6309f3bed987cc57986b44fac22c820fd5326b3e28c67af58fb55->leave($__internal_a64b5ee673e6309f3bed987cc57986b44fac22c820fd5326b3e28c67af58fb55_prof);

        
        $__internal_6851127daf73b1bc6ddc9a5c192c50b378d3cbb9943abed4891ac0ce04de6ad8->leave($__internal_6851127daf73b1bc6ddc9a5c192c50b378d3cbb9943abed4891ac0ce04de6ad8_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:universiteTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteTwo.html.twig");
    }
}
