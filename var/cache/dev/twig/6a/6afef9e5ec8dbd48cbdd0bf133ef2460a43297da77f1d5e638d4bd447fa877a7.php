<?php

/* ESFEspaceAbonneBundle:Default:universiteTwo.html.twig */
class __TwigTemplate_c6c4645075edf46dc99843271240c80c09ffb6027a52e284cef4a20705dcd49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig", 1);
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
        $__internal_d314e99b8902b2eb75a8c2ba5b286af641e92eb15dee0205099ef31fe68e12ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d314e99b8902b2eb75a8c2ba5b286af641e92eb15dee0205099ef31fe68e12ea->enter($__internal_d314e99b8902b2eb75a8c2ba5b286af641e92eb15dee0205099ef31fe68e12ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig"));

        $__internal_3612494fe349f27060c4244921ff9c82c8998cbbed409dc428cdaba87ba068a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3612494fe349f27060c4244921ff9c82c8998cbbed409dc428cdaba87ba068a4->enter($__internal_3612494fe349f27060c4244921ff9c82c8998cbbed409dc428cdaba87ba068a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d314e99b8902b2eb75a8c2ba5b286af641e92eb15dee0205099ef31fe68e12ea->leave($__internal_d314e99b8902b2eb75a8c2ba5b286af641e92eb15dee0205099ef31fe68e12ea_prof);

        
        $__internal_3612494fe349f27060c4244921ff9c82c8998cbbed409dc428cdaba87ba068a4->leave($__internal_3612494fe349f27060c4244921ff9c82c8998cbbed409dc428cdaba87ba068a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_028f8b902db614007be67f08cd62e984a03f387d342083dbb9fd4783a36c068c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028f8b902db614007be67f08cd62e984a03f387d342083dbb9fd4783a36c068c->enter($__internal_028f8b902db614007be67f08cd62e984a03f387d342083dbb9fd4783a36c068c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20835c5048757cbb7c0e546b61e65561ed205ed19d1012f2e476c3b066bc0146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20835c5048757cbb7c0e546b61e65561ed205ed19d1012f2e476c3b066bc0146->enter($__internal_20835c5048757cbb7c0e546b61e65561ed205ed19d1012f2e476c3b066bc0146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_20835c5048757cbb7c0e546b61e65561ed205ed19d1012f2e476c3b066bc0146->leave($__internal_20835c5048757cbb7c0e546b61e65561ed205ed19d1012f2e476c3b066bc0146_prof);

        
        $__internal_028f8b902db614007be67f08cd62e984a03f387d342083dbb9fd4783a36c068c->leave($__internal_028f8b902db614007be67f08cd62e984a03f387d342083dbb9fd4783a36c068c_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1435726cac732ac0bfad7334b48e83ff126a7b140e59eedfbd57b314c81dd035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1435726cac732ac0bfad7334b48e83ff126a7b140e59eedfbd57b314c81dd035->enter($__internal_1435726cac732ac0bfad7334b48e83ff126a7b140e59eedfbd57b314c81dd035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0354e810727e88fe612be541d9b0aa59945dc0836023b7cdca23401eeed7d9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0354e810727e88fe612be541d9b0aa59945dc0836023b7cdca23401eeed7d9f4->enter($__internal_0354e810727e88fe612be541d9b0aa59945dc0836023b7cdca23401eeed7d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_0354e810727e88fe612be541d9b0aa59945dc0836023b7cdca23401eeed7d9f4->leave($__internal_0354e810727e88fe612be541d9b0aa59945dc0836023b7cdca23401eeed7d9f4_prof);

        
        $__internal_1435726cac732ac0bfad7334b48e83ff126a7b140e59eedfbd57b314c81dd035->leave($__internal_1435726cac732ac0bfad7334b48e83ff126a7b140e59eedfbd57b314c81dd035_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/universiteTwo.html.twig");
    }
}
