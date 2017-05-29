<?php

/* @ESFEspaceAbonne/back/langueTwo.html.twig */
class __TwigTemplate_9a344a8310f2c00abaaa709b5333794cd92071c457ffedac1a1a8cef0ded64d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/langueTwo.html.twig", 1);
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
        $__internal_9a6732e4412abbc295b34c7fbce3b064bbeb47efd4476def87320489c9f215e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6732e4412abbc295b34c7fbce3b064bbeb47efd4476def87320489c9f215e8->enter($__internal_9a6732e4412abbc295b34c7fbce3b064bbeb47efd4476def87320489c9f215e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $__internal_ed87a0e3da37da79012cd25dfb3b299792ab59a937ff53e98911e280769b6346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed87a0e3da37da79012cd25dfb3b299792ab59a937ff53e98911e280769b6346->enter($__internal_ed87a0e3da37da79012cd25dfb3b299792ab59a937ff53e98911e280769b6346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6732e4412abbc295b34c7fbce3b064bbeb47efd4476def87320489c9f215e8->leave($__internal_9a6732e4412abbc295b34c7fbce3b064bbeb47efd4476def87320489c9f215e8_prof);

        
        $__internal_ed87a0e3da37da79012cd25dfb3b299792ab59a937ff53e98911e280769b6346->leave($__internal_ed87a0e3da37da79012cd25dfb3b299792ab59a937ff53e98911e280769b6346_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1490dd49b4d539a526b98105e4df8b5bdd5967cbddcb70fa4adfdf9d96e5c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1490dd49b4d539a526b98105e4df8b5bdd5967cbddcb70fa4adfdf9d96e5c4d->enter($__internal_b1490dd49b4d539a526b98105e4df8b5bdd5967cbddcb70fa4adfdf9d96e5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f4245f05c6ea650e9c1f510124d970cd7ce14ada1c13f863c552447e0bf828e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4245f05c6ea650e9c1f510124d970cd7ce14ada1c13f863c552447e0bf828e->enter($__internal_2f4245f05c6ea650e9c1f510124d970cd7ce14ada1c13f863c552447e0bf828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2f4245f05c6ea650e9c1f510124d970cd7ce14ada1c13f863c552447e0bf828e->leave($__internal_2f4245f05c6ea650e9c1f510124d970cd7ce14ada1c13f863c552447e0bf828e_prof);

        
        $__internal_b1490dd49b4d539a526b98105e4df8b5bdd5967cbddcb70fa4adfdf9d96e5c4d->leave($__internal_b1490dd49b4d539a526b98105e4df8b5bdd5967cbddcb70fa4adfdf9d96e5c4d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_55328ef91209b999ddd9c0cfc327597f56066ff2f8a908495afe0a7887675ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55328ef91209b999ddd9c0cfc327597f56066ff2f8a908495afe0a7887675ec6->enter($__internal_55328ef91209b999ddd9c0cfc327597f56066ff2f8a908495afe0a7887675ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_1177196270edb13c5c1933e7dc9769f93c6fa0274e00d424c8718d34422eff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1177196270edb13c5c1933e7dc9769f93c6fa0274e00d424c8718d34422eff84->enter($__internal_1177196270edb13c5c1933e7dc9769f93c6fa0274e00d424c8718d34422eff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsThree");
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
        
        $__internal_1177196270edb13c5c1933e7dc9769f93c6fa0274e00d424c8718d34422eff84->leave($__internal_1177196270edb13c5c1933e7dc9769f93c6fa0274e00d424c8718d34422eff84_prof);

        
        $__internal_55328ef91209b999ddd9c0cfc327597f56066ff2f8a908495afe0a7887675ec6->leave($__internal_55328ef91209b999ddd9c0cfc327597f56066ff2f8a908495afe0a7887675ec6_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/langueTwo.html.twig";
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
    Inscription Langue - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_langueStepsThree') }}\">Suivant</a>
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
#}", "@ESFEspaceAbonne/back/langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\langueTwo.html.twig");
    }
}
